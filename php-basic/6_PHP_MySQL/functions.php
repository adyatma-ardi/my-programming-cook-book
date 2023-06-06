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


?> 