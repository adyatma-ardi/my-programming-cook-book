<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

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

        <!-- lakukan perulangan fetch data pada dokumen HTML -->
        <?php $i = 1; ?>
        <?php foreach($mahasiswa as $row): ?>
        <tr>
            <td style="text-align:center;"><?= $i;?></td>
            <td>
                <a href="">change</a> |
                <a href="">delete</a>
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