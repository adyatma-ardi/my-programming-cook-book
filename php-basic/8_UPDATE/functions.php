<?php

// koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasar2");

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

function tambah($data) {
    global $conn;
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO mahasiswa (nrp,nama,email,jurusan,gambar)
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

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}


?> 