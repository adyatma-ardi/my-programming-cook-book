<?php 
    //built in function

    // echo date("l, d-M-Y");
    // echo "<br>";
    // echo time (); //UNIX time stamp / EPOCH time, detik yang sudah berlalu sejak 1 Januari 1970

    // echo date("l", time()+60*60*24*100); // add 100 day

    //user defined function

    function salam($waktu = "datang",$nama = "Admin") {
        return "Selamat $waktu, $nama!";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <h1><?= salam("malam","Achmad"); ?></h1>
</body>
</html>