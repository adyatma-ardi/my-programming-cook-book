<?php 
// function
require 'functions2.php';

// Query by default
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id ASC");

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
    
    <h2>Daftar Mahasiswa</h2>

    <br>
    <p><a href="tambah_modular.php">tambah data mahasiswa (modular)</a></p>
    <p><a href="tambah_nonmodular.php">tambah data mahasiswa (non_modular)</a></p>
    <br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
    </form>    
    
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
        <?php $i = 1; ?>
        <?php foreach($mahasiswa as $row): ?>
        <tr>
            <td style="text-align:center;"><?= $i;?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"];?>">change</a> |
                <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('yakin ?');">delete</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="100" alt=""></td>
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