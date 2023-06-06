<?php
ini_set("display_errors","1");
ini_set("display_startup_errors","1");
error_reporting(E_ALL);

require 'functions2.php';

// SOURCE : https://mpdf.github.io/

$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id ASC");

// Require composer autoload
// adding permission sudo chown 777 -R /vendor
require_once __DIR__ . '/vendor/autoload.php';
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf;

// Write some HTML code:
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print</title>
    <link rel="stylesheet" href="css/print.css">
</head>
<body>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>';

        $i = 1;
    foreach($mahasiswa as $row) {
        $html .= '<tr>
            <td>'. $i++ .'</td>
            <td><img src="image_dir/'. $row["gambar"] .'" width="50"></td>
            <td>'. $row["nrp"] .'</td>
            <td>'. $row["nama"] .'</td>
            <td>'. $row["email"] .'</td>
            <td>'. $row["jurusan"] .'</td>
        </tr>';
    }

$html .=
    '</table>
</body>
</html>
';

$mpdf->WriteHTML($html);

// Output a PDF file directly to the browser
// $mpdf->Output('fileName.pdf', method);
// $mpdf->Output('daftar_mahasiswa.pdf', \Mpdf\Output\Destination::INLINE);
// $mpdf->Output('daftar_mahasiswa.pdf', \Mpdf\Output\Destination::DOWNLOAD)

// alternative
$mpdf->Output('daftar_mahasiswa.pdf', 'I');
// $mpdf->Output('daftar_mahasiswa.pdf', 'D');

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
    
</body>
</html>
