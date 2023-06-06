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
    $gambar = htmlspecialchars($data["gambar"]);

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
    $gambar = htmlspecialchars($data["gambar"]);

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

?> 