<?php
require 'functions2.php';
session_start();

ini_set("display_errors","1");
ini_set("display_startup_errors","1");
error_reporting(E_ALL);

if ( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

if( isset($_POST["cari"]) ) {
    $keyword = $_POST["keyword"];
    $_SESSION['keyword'] = $keyword;
} else {
    $keyword = $_SESSION['keyword'];
}

if( !isset($_SESSION['keyword']) ){
    $keyword = '';
} 

$queryAmbilData = " SELECT * 
                    FROM mahasiswa 
                    WHERE 
                        nama LIKE '%$keyword%' OR 
                        nrp LIKE '%$keyword%' OR 
                        email LIKE '%$keyword%' OR 
                        jurusan LIKE '%$keyword%'";

$ambilData = mysqli_query($conn, $queryAmbilData);

// Konfigurasi Pagination
$jumlahData = 2; 
$totalData = mysqli_num_rows($ambilData); // jumlah data yang ada 
$jumlahPagination = ceil($totalData / $jumlahData);

if( isset($_GET['halaman']) ) {
    $halamanAktif = $_GET['halaman'];
} else {
    $halamanAktif = 1;
}

$dataAwal = ($halamanAktif * $jumlahData) - $jumlahData;

$jumlahLink = 1;

if( $halamanAktif > $jumlahLink ) {
    $start_number = $halamanAktif - $jumlahLink;
} else {
    $start_number = 1;
}

if( $halamanAktif < ($jumlahPagination - $jumlahLink) ) {
    $end_number = $halamanAktif + $jumlahLink;
} else {
    $end_number = $jumlahPagination;
}
// End ~`

$queryAmbilDataPerHalaman = " SELECT * 
                              FROM mahasiswa 
                              WHERE 
                                nama LIKE '%$keyword%' OR 
                                nrp LIKE '%$keyword%' OR 
                                email LIKE '%$keyword%' OR 
                                jurusan LIKE '%$keyword%'
                              LIMIT $dataAwal,$jumlahData";

$ambilDataPerHalaman = mysqli_query($conn, $queryAmbilDataPerHalaman);

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
    <p>
    <?php if( $halamanAktif > 1 ) : ?>
        <a href="?halaman=<?= $halamanAktif - 1;?>">&laquo;</a>
    <?php endif; ?>

    <?php for( $i = $start_number; $i <= $end_number; $i++ ) : ?>
        <?php if( $i == $halamanAktif ) : ?>
            <a href="?halaman=<?= $i;?>" style="font-weight: bold; color: white; background-color: blue;"><?= $i; ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i;?>"><?= $i;?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if( $halamanAktif < $jumlahPagination ) : ?>
        <a href="?halaman=<?= $halamanAktif + 1;?>">&raquo;</a>
    <?php endif; ?>
    </p>

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
        <?php $i = $dataAwal + 1; ?>
        <?php foreach($ambilDataPerHalaman as $row): ?>
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