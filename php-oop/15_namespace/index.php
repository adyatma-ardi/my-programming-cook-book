<?php

/*
    namespace
    - merupakan sebuah cara untuk mengelompokkan program ke dalam sebuah package tersendiri
    - dikenal dengan istilah encapsulation
    - PHP tidak mengizinkan kita untuk memiliki 2 class dengan nama yang sama
    - namespace diperlukan apabila kita bekerja secara team atau menggunakan script / library dari pihak ketiga
*/


// require_once ('App/Product/ProductInfo.php');
// require_once ('App/Product/MyProduct.php');
// require_once ('App/Product/ComicProduct.php');
// require_once ('App/Product/GameProduct.php');
// require_once ('App/Product/PrintProdusdactInfo.php');

require_once ('App/init.php');

// $product1 = new ComicProduct("Naruto", "Masashi Kishimoto", "Shonen Jump", 12, 100);
// $product2 = new GameProduct("Uncharted", "Neil Druckmann", "Sony Computer", 150, 50);
// $product3 = new GameProduct("Avenger", "Neil Amstrong", "Sony Computer", 300, 100);
//
// $printProduct = new PrintProductInfo();
// $printProduct -> addProduct($product1);
// $printProduct -> addProduct($product2);
// $printProduct -> addProduct($product3);
// var_dump($printProduct->productList);
// echo "<br><br>";
// echo $printProduct->print_product();
//
// echo "<hr>";
//
// new Coba();

use App\Service\User as ServiceUser;
use App\Product\User as ProductUser;

new ServiceUser();
echo "<br>";
new ProductUser();
