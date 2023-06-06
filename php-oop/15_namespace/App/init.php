<?php

// require_once ('App/Product/ProductInfo.php');
// require_once ('App/Product/MyProduct.php');
// require_once ('App/Product/ComicProduct.php');
// require_once ('App/Product/GameProduct.php');
// require_once ('App/Product/PrintProductInfo.php');
// require_once ('App/Product/User.php');
//
// require_once ('App/Service/User.php');


// spl_autoload_register(function( $class ){
//     require_once __DIR__ . '/Product/' . $class . '.php';
// });

spl_autoload_register(function($class){
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Product/' . $class . '.php';
});

spl_autoload_register(function($class){
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Service/' . $class . '.php';
});
