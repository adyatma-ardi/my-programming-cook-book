<?php 
    // single - line comment
    /*
        multi - line comment
    */
var_dump(

    /* 
    1. Standar output :
    
    1.1 print, echo
    1.2 print_r
    1.3 var_dump 

    echo"Achmad Adyatma Ardi";
    print"Achmad Adyatma Ardi";
    print_r("Achmad Adyatma Ardi");
    var_dump("Achmad Adyatma Ardi");

    utk string bisa gunakan kutip 1 dan 2 namun lebih baik gunanya kutip 2 karena dapat mentrigger interpolasi

    // echo "nama saya $nama"; -> menampilkan isi variable $nama
    // echo 'nama saya $nama"; -> menampilkan nama variable $nama

    bolean true bernilai 1, false null
    */

    /* 
    2. Penulisan sintaks PHP
    
    2.1. PHP di dalam HTML (direkomendasikan)
    2.2. HTML di dalam PHP
    */
   
    /*
    3. Variabel dan tipe data

    - tdk perlu mendefinisikan tipe datanya
    - tidak diawali dengan angka tetapi boleh mengandung angka cth : $1nama (salah), &nama1
    - tidak boleh ada spasi gunakan underscore (_)

    $var_name = "value";
    */

    /*
    4. Operator
    4.1. Aritmatika (+, -, /, %)
    
    $x = 10;
    $y = 20;

    echo $x * $y;

    4.2. Concatenation ( . )

    $nama_depan = "Achmad";
    $nama_belakang = "Ardi";
    echo $nama_depan . " " . $nama_belakang;

    4.3. Assignment (=, +=, -=, %=, .=)

    $x = 1;
    $x -= 1500;
    echo $x;  -> -1499

    4.4. Perbandingan (<, >, <=, >=, ==, !=)
    - tidak memperhatikan tipe data
    - 1 = "1" -> True

    var_dump(1 == "1"); -> true

    4.5. Identitas (===, !==)
    - memperhatikan tipe data

    var_dump(1 === "1"); -> false

    4.6. Logika (&&, ||, !)

    $x = 30;
    var_dump($x < 20 || $x % 2 == 0);
    */

?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <p>Nama saya adalah <?php echo $nama?></p>
</body>
</html> -->