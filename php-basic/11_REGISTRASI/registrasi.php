<?php 
ini_set("display_errors","1");
ini_set("display_startup_errors","1");
error_reporting(E_ALL);

require 'functions2.php';

if( isset($_POST["register"]) ) {
    if( registrasi($_POST) > 0 ) {
        echo "
            <script>
                alert('user baru berhasil ditambahkan!');
            </script>
            ";
    } else {
        echo "
            <script>
                alert('user baru gagal ditambahkan!');
            </script>
            ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman registrasi</title>
    <style>
        label {
            display:block;
        }
    </style>
</head>
<body>
    <h2>Halaman registrasi</h2>
    <form action="" method="post">
    <ul>
        <li>
            <label for="username">username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">password :</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <label for="password2">konfirmasi password :</label>
            <input type="password" name="password2" id="password2">
        </li>
        <li>
            <button type="submit" name="register">Register!</button>
        </li>
    </ul>
    </form>
</body>
</html>