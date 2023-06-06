<?php 

$students = [
    [
        "nama" => "Achmad Adyatma Ardi",
        "nrp" => "072001710001",
        "email" => "adyatmaardi@gmail.com",
        "jurusan" => "Teknik Geologi",
        "tugas" => [75,null,100,90],
        "gambar" => "student_1.jpg"
    ],
    [
        "nama" => "Qonita Dwi Wulandari",
        "nrp" => "072001710015",
        "email" => "wulandwi@gmail.com",
        "jurusan" => "Bahasa Inggris",
        "tugas" => [84,80,75,88],
        "gambar" => "student_2.jpg"
    ]
];

print_r($students);
var_dump($students);
// di PHP tidak bisa menyimpan value yang dimulai dari 0 sehingga dibuat saja menjadi string
// pada array associative indexnya berupa string. akan menghilangkan permasalahan salah input karena semua inputan diasosiasikan dengan string yang dimaksud

// menampilkan nilai array pada array (slicing)
// menampilkan tugas dari Qonita Dwi Wulandari tugas ke 3
echo "<br>";
echo "<br>";
echo $students[1]["tugas"][2];


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
    
    <h3>Daftar siswa</h3>
    <?php foreach($students as $student) : ?>
        <ul>
            <li> 
                <img src="img/<?= $student["gambar"];?>">
            </li>
            <li>Nama : <?= $student["nama"]; ?></li>
            <li>NRP : <?= $student["nrp"]; ?></li>
            <li>Email : <?= $student["email"]; ?></li>
            <li>Jurusan : <?= $student["jurusan"]; ?></li>
            <li> Tugas : </li><br>
                    <?= $student["tugas"][0]; ?> </li><br>
                    <?= $student["tugas"][1]; ?> </li><br>
                    <?= $student["tugas"][2]; ?> </li><br>
                    <?= $student["tugas"][3]; ?> </li><br>
        </ul>
    <?php endforeach; ?>
</body>
</html>