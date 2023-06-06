<?php

/*
    Abbstract Class
    - Sebuah kelas yang tidak dapat diinstansiasi
    - Kelas 'abstak'
    - Mendefinisikan interface untuk kelas lain yang menjadi turunannya
    = Berperan sebagai 'kerangka dasar' untuk kelas turunannya
    - Memiliki minimal 1 method abstrak
    - Digunakan dalam 'pewarisan' / inheritance untuk 'memaksakan'  implementasi method abstrak yang sama untuk semua kelas turunannya
    - Semua kelas turunan, harus mengimplementasikan method abstrak yang ada di kelas abstraknya
    - Kelas abstrak boleh memiliki property / method reguler
    - Kelas abstrak boleh memiliki property / static method
    - Kenapa menggunakan kelas abstrak ?
      1) Merepresentasikan ide atau konsep dasar
      2) "Composition over inheritance"
      3) Salah satu menerapkan polimorphism
      4) Sentralisasi logic
      5) Mempermudah pengerjaan tim
*/

abstract class Buah {
    protected $color;

    public function __construct ($color ="white") {
           $this->color = $color;
    }

    abstract public function eat();

    public function _setColor($color){
        $this->color = $color;
    }

    public static function halo(){
        return  "Halo warna buah yang saya makan adalah ". self::$color;
    }
}

class Apel extends Buah {

    public function eat(){
        return "Nyam nyam";
    }

    public function halo2(){
        return  "Halo warna buah yang saya makan adalah ".$this->color;
    }
}

$obj = new Apel("black");
echo $obj->eat()."<br>";
echo $obj->halo2();
