<?php 
//numeric array
//merupakan array yang indeksnya / key berupa angka
//urutannya tidak boleh salah, apabila salah PHP tetap mengatakan benar namun manusia dapat mengerti ada sesuatu yang salah

$students = ["Achmad Adyatma Ardi", "072001710001", "Teknik Geologi", "adyatmaardi@gmail.com"];
$mahasiswa = [
    ["Achmad Adyatma Ardi", "072001710001", "Teknik Geologi", "adyatmaardi@gmail.com"],
    ["Qonita Dwi Wulandari", "072001710015", "Bahasa Inggris", "adsadsa@gmail.com"],
    ["Nafisah Humairah", "072001710002", "Pendidikan Dokter", "vbvbvbv@gmail.com"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Daftar mahasiswa</h2>
    <ul>
        <?php foreach($students as $student) : ?>
            <li><?= $student; ?></li>
        <?php endforeach;?>
    </ul>

    <!-- cara lain -->
    <!-- <ul>
        <li><?= $students[0];?></li>
        <li><?= $students[1];?></li>
        <li><?= $students[2];?></li>
        <li><?= $students[3];?></li>
    </ul> -->
    
    <?php foreach($mahasiswa as $mhs):?>
    <ul>
        <li>Nama : <?= $mhs[0];?></li>
        <li>NIM : <?= $mhs[1];?></li>
        <li>Jurusan : <?= $mhs[2];?></li>
        <li>Email : <?= $mhs[3];?></li>
    </ul>            
    <?php endforeach;?>
</body>
</html>