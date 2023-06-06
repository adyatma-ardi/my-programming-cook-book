<?php 
// cara masukkan data ke $_GET superglobal
// 1) langsung dari script
// $_GET["nama"] = "Achmad Adyatma Ardi";
// $_GET["nrp"] = "072001710001";
// var_dump($_GET);

// 2) langsung dari url ?key1=value1&key2=value2

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
<ul>
<?php foreach($students as $student) : ?>
    <li>
        <a href="GET_2.php?nama=<?=$student["nama"];?> 
        &nrp=<?=$student["nrp"];?> 
        &email=<?=$student["email"];?> 
        &jurusan=<?= $student["jurusan"];?> 
        &gambar=<?=$student["gambar"];?>"><?= $student["nama"];?> </a>
    </li>
<?php endforeach; ?>
</ul>

    
</body>
</html>