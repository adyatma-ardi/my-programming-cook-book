<?php

/*
    Static Keyword
    - Kita bisa mengakses property dan method dalam konteks class
    - Untuk memanggilnya tidak perlu gunakan parameter
    - Utk apa static keyword
      1) member yang terikat dengan class, bukan dengan object
      2) nilai static akan selalu tetap meskipun object diinstanisasi berulang kali
      3) membuat kode menjadi procedural
      4) biasanya digunakan untuk membuat fungsi bantuan / helper
      5) atau digunakan di class-class utility pada framework
*/

class StaticKeyword {
    public static $number = 1;

    public static function halo(){
        return  "Halo ". self::$number++. " Kali.";
    }
}

echo StaticKeyword::$number."<br>";
echo StaticKeyword::halo()."<br>";
echo StaticKeyword::halo()."<br>";
echo StaticKeyword::halo()."<br>";

$obj1 = new StaticKeyword;
echo $obj1->halo()."<br>";
echo $obj1->halo()."<br>";
echo $obj1->halo()."<br>";

$obj2 = new StaticKeyword;
echo $obj2->halo()."<br>";
echo $obj2->halo()."<br>";
echo $obj2->halo()."<br>";


echo "<hr>";

class NonStatic {
    public $angka = 1;

    public function halo() {
        return "Halo " .$this->angka++. " Kali.";
    }
}

$obj1 = new NonStatic;
echo $obj1->angka."<br>";
echo $obj1->halo()."<br>";
echo $obj1->halo()."<br>";
echo $obj1->halo()."<br>";

$obj2 = new NonStatic;
echo $obj2->halo()."<br>";
echo $obj2->halo()."<br>";
echo $obj2->halo()."<br>";


?>
