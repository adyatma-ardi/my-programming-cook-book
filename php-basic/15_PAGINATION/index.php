<?php
session_start();

if ( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

// function
require 'functions2.php';

// paginasi
// konfigurasi
$jumlahDataPerHalaman = 2; // mau ditampilin berapa data pada tiap halaman
$jumlahData = count(query("SELECT * FROM mahasiswa")); // jumlah data yang ada 
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman); // jumlah halaman yang dibuat
$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;


// halaman = 2, awalData = 2 [index]
// halaman = 3, awalData = 4 [index]
$awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;

// SQL LIMIT parameter
// LIMIT (startingIndex, dataAmount)
$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

// Query by default
// $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id ASC");

// Tombol cari ditekan
if( isset($_POST["cari"]) ) {
    $mahasiswa = cari($_POST["keyword"]);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <a href="logout.php">Log out</a>
    <h2>Daftar Mahasiswa</h2>

    <br>
    <p><a href="tambah_modular.php">tambah data mahasiswa (modular)</a></p>
    <p><a href="tambah_nonmodular.php">tambah data mahasiswa (non_modular)</a></p>
    <br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
    </form>    
    
    <!-- navigasi -->
    <?php if( $halamanAktif > 1 ) : ?>
        <a href="?halaman=<?= $halamanAktif-1;?>">&laquo;</a>
    <?php endif; ?>

    <?php for( $i = 1; $i <= $jumlahHalaman; $i++ ) : ?>
        <?php if( $i == $halamanAktif ) : ?>
            <a href="?halaman=<?= $i;?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i;?>"><?= $i;?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if( $halamanAktif < $jumlahHalaman ) : ?>
        <a href="?halaman=<?= $halamanAktif +1;?>">&raquo;</a>
    <?php endif; ?>

    <br>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <!-- lakukan perulangan untuk fetch data -->
        <?php $i = $awalData + 1; ?>
        <?php foreach($mahasiswa as $row): ?>
        <tr>
            <td style="text-align:center;"><?= $i;?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"];?>">change</a> |
                <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('yakin ?');">delete</a>
            </td>
            <td><img src="image_dir/<?= $row["gambar"]; ?>" width="100" alt=""></td>
            <td><?= $row["nrp"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>
        <?php $i++;?>
        <?php endforeach; ?>
        
    </table>

</body>
</html>