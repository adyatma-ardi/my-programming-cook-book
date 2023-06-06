<?php

/*
    Constant
    - sebuah identifier untuk menyimpan nilai
    - berbeda dengan variable const nilai tidak akan berubah
    - dapat dilakukan dengan 2 cara
      1) define() - tdk dapat dimasukkan pada function

            define("NAMA", 'Achmad Adyatma Ardi');

      2) const

            const NAMA = 'Achmad Adyatma Ardi';

    - Magic constant
      1) __LINE__
      2) __FILE__
      3) __DIR__
      4) __FUNCTION__
      5) __CLASS__
      6) __TRAIT__
      7) __METHOD__
      8) __NAMESPACE__
*/

define('NAMA', 'Achmad Adyatma Ardi');
const UMUR = 26;

echo NAMA.'<br>';
echo UMUR;

echo "<hr>";

// ERROR
class Coba1 {
    // define("NAMA", "Achmad Adyatma Ardi");
}


class Coba2 {
    const NAMA = "Qonita Dwi Wulandari";
}

$obj = new Coba2;
echo $obj::NAMA;

echo "<hr>";

// Magic constant
// 1. __LINE__ : returns the current line number of the file, where this constant is used
echo "__LINE__<br>";
echo "You are at line number ".__LINE__.'<br>';

// 2. __FILE__ : This magic constant returns the full path of the executed file, where the file is stored. If it is used inside the include, the name of the included file is returned.
echo "__FILE__<br>";
echo __FILE__.'<br>';

// 3. __DIR__ : It returns the full directory path of the executed file. The path returned by this magic constant is equivalent to dirname(__FILE__). This magic constant does not have a trailing slash unless it is a root directory.
echo "__DIR__<br>";
echo __DIR__.'<br>';

// 4. __FUNCTION__ : This magic constant returns the function name, where this constant is used. It will return blank if it is used outside of any function.
echo "__FUNCTION__<br>";

function test(){
    echo "The function name is ".__FUNCTION__."<br>";
}

test();
echo __FUNCTION__;

// 5. __CLASS__ : It returns the class name, where this magic constant is used. __CLASS__ constant also works in traits. directory.
echo "__CLASS__<br>";

class Test {
    public function class_me() {
        echo "The class name is ".__CLASS__;
    }
}

$obj3= new Test;
$obj3->class_me();
echo "<br>";

// 6. __TRAIT__
// source : https://www.javatpoint.com/php-magic-constants#:~:text=Magic%20constants%20are%20the%20predefined,they%20are%20called%20magic%20constants.

// 7. __METHOD__
//It returns the name of the class method where this magic constant is included. The method name is returned the same as it was declared.

class method {
    public function __construct() {
    //print method::__construct
        echo __METHOD__ . "<br>";
    }
    public function meth_fun(){
    //print method::meth_fun
        echo __METHOD__."<br>";
    }
}

echo "__METHOD__<br>";
$a = new method;
$a->meth_fun();

// 8. __NAMESPACE__
//It returns the current namespace where it is used.
echo "__NAMESPACE__<br>";

class Name {
    public function __construct() {
        echo 'This line will print on calling namespace.';
    }
}
$class_name = __NAMESPACE__ . '\name';
echo "$class_name";



 ?>
