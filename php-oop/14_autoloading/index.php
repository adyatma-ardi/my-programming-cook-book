<?php

/*
    Autoloading
    - memanggil class (file) tanpa harus menggunakan require, require_once dan include
    - dalam OOP 1 class ditulis dalam 1 file, nama filenya dibuat sama dengan nama classnya
    - require, require_once dan include sama saja
*/

// require_once ('App/Product/ProductInfo.php');
// require_once ('App/Product/MyProduct.php');
// require_once ('App/Product/ComicProduct.php');
// require_once ('App/Product/GameProduct.php');
// require_once ('App/Product/PrintProductInfo.php');

require_once ('App/init.php');

$product1 = new ComicProduct("Naruto", "Masashi Kishimoto", "Shonen Jump", 12, 100);
$product2 = new GameProduct("Uncharted", "Neil Druckmann", "Sony Computer", 150, 50);
$product3 = new GameProduct("Avenger", "Neil Amstrong", "Sony Computer", 300, 100);

$printProduct = new PrintProductInfo();
$printProduct -> addProduct($product1);
$printProduct -> addProduct($product2);
$printProduct -> addProduct($product3);
var_dump($printProduct->productList);
echo "<br><br>";
echo $printProduct->print_product();

echo "<hr>";

new Coba();
