<?php 
//cek apakah tidak ada data di $_GET
//kita tidak bisa mengganti seenaknya saja karena akan langsung terlempar kembali pada lokasi yang kita inginkan
//hal ini penting untuk meminimalisir adanya kelemahan sistem
if( !isset($_GET["nama"]) ||
    !isset($_GET["nrp"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["jurusan"])||
    !isset($_GET["gambar"])) {
    //redirect
    header("Location: GET.php");
    exit;
}
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
    <li><img src="img/<?= $_GET["gambar"];?>"></li>
    <li><?= $_GET["nama"];?></li>
    <li><?= $_GET["nrp"];?></li>
    <li><?= $_GET["email"];?></li>
    <li><?= $_GET["jurusan"];?></li>
</ul>

<a href="GET.php">Kembali</a>
    
</body>
</html>