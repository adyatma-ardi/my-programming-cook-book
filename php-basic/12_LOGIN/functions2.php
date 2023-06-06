<?php

// koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasar2");

// query CRUD -> READ
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    // siapin wadah kosong
    $rows = [];
    // isi wadah kosong pada data dari database dengan perulangan
    while ($row = mysqli_fetch_assoc($result))  {
        // menambahkan elemen baru pada array (array associative)
        $rows[] = $row;
    }
    return $rows;
}

// query CRUD -> CREATE
function tambah($data) {
    global $conn;
    
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    // $gambar = htmlspecialchars($data["gambar"]);

    // upload gambar apabila berhasil jalankan function upload
    $gambar = upload();
    
    // apabila tidak ada gambar yang diupload fungsi upload akan bernilai false
    if ( !$gambar ) {
        return false;
    }

    $query = "INSERT INTO 
                mahasiswa (
                    nrp,
                    nama,
                    email,
                    jurusan,
                    gambar
                    )
              VALUES (
                '$nrp',
                '$nama',
                '$email',
                '$jurusan',
                '$gambar'
                )";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function upload() {
    
    // tangkap data yang dari form dengan attribute enctype = "multipart/form-data"
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    /*
    error message from $_FILES['file']['error']
    0 -> file is uploaded succesfully
    1 -> uploaded file cross the limit
    2 -> uploaded file cross the limit which is mentioned in the HTML form
    3 -> file is partially uploaded or there is any error in between uploading
    4 -> no file was uploaded
    6 -> missing a temporary folder
    7 -> failed to write file to disk
    8 -> a PHP extension stopped the uploading process
    */

    // cek apakah tidak ada gambar yang diupload
    if( $error === 4 ) {
        echo "<script>
                alert('pilih gambar terlebih dahulu');
              </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg','jpeg','png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "
                <script>
                    alert('yang anda upload bukan gambar!');
                </script>
             ";
        return false;
    }

    // cek jika ukurannya terlalu besar (dalam byte)
    // contoh : 1 mb
    if( $ukuranFile > 1000000 ) {
        echo "
                <script>
                    alert('ukuran gambar terlalu besar');
                </script>
             ";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid(); 
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    // for linux user adding permission 'sudo chmod -R 777 path/to/project/folder'
    move_uploaded_file($tmpName, 'image_dir/'.$namaFileBaru);

    return $namaFileBaru;
}

// query CRUD -> DELETE
function hapus($id) {
    global $conn;

    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

// query CRUD -> UPDATE
function ubah($data) {
    global $conn;

    $id = $data["id"];
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if ( $_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE 
                mahasiswa 
              SET
                id = '$id',
                nrp = '$nrp',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
              WHERE id = $id";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query ="   SELECT * FROM mahasiswa
                WHERE
                    nama LIKE '%$keyword%' OR
                    nrp LIKE '%$keyword%' OR
                    email LIKE '%$keyword%' OR
                    jurusan LIKE '%$keyword%'
            ";
    return query($query);
}

function registrasi($data) {
    global $conn;

    // extract data
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

    if( mysqli_fetch_assoc($result) ) {
        echo "
                <script>
                    alert('username sudah terdaftar!');
                </script>
             ";
        return false;
    }


    // cek konfirmasi password
    if( $password !== $password2 ) {
        echo "
                <script>
                    alert('konfirmasi password tidak sesuai!');
                </script>
             ";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    $query = "INSERT INTO 
                users (
                    username,
                    password
                    )
              VALUES (
                '$username',
                '$password'
                )";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?> 