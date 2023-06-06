<?php 
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// array memiliki pasangan antara key dan value, key-nya adalah index yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin","Selasa","Rabu");
// cara baru
$bulan = ["Januari","Februari","Maret"];
$arr1 = [123, 12.5, "ini string", false];

// menampilkan array
var_dump($hari);
var_dump($arr1);
echo "<br>";
print_r($bulan);
print_r($arr1);

/*
array(3) {
    [0]=>
    string(5) "Senin"
    [1]=>
    string(6) "Selasa"
    [2]=>
    string(4) "Rabu"
  }
  Array
  (
      [0] => Januari
      [1] => Februari
      [2] => Maret
  )
*/

// menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $arr1[2];

// menambahkan elemen baru pada array
// var_dump($hari);
// $hari[] = "kamis";
// $hari[] = "jum'at";
// echo "<br>";
// var_dump($hari);

//pengulangan pada array
//for / foreach
$numbers = [3,2,15,20,11,77,89,251];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan pada array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear {clear:both;}
    </style>
</head>
<body>
    <!-- cara perulangan array dengan for -->
    <?php for($i = 0; $i < count($numbers); $i++):?>
        <div class="kotak"><?= $numbers[$i];?></div>
    <?php endfor;?>
    
    <div class="clear"></div>
    
    <!-- cara perulangan array dengan foreach -->
    <?php foreach($numbers as $a):?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach;?>
</body>
</html>