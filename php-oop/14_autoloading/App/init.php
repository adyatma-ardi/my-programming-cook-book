<?php

// require_once ('App/Product/ProductInfo.php');
// require_once ('App/Product/MyProduct.php');
// require_once ('App/Product/ComicProduct.php');
// require_once ('App/Product/GameProduct.php');
// require_once ('App/Product/PrintProductInfo.php');

spl_autoload_register(function( $class ){
    require_once __DIR__ . '/Product/' . $class . '.php';
});
