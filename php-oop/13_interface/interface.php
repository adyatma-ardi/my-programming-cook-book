<?php

    /*
        Interface
        - Kelas abstrak yang sama sekali tidak memiliki implementasi
        - Murni merupakan template untuk kelas turunannya
        - Tidak boleh memiliki property, hanya deklarasi method saja
        - Semua method yang ada pada kelas interface harus berada pada kelas turunannya
        - Semua method harus dideklarasikan dengan visibility public
        - Satu kelas boleh mengimplementasikan banyak interface
        - Boleh mendeklarasikan __construct()
        - Dengan menggunakan type-hinting dapat melakukan 'dependency injection'
        - Pada akhirnya akan mencapai Polymorphism
    */

interface Buah {
    public function makan();
    public function _setWarna($warna);
}

interface Benda {
    public function _setUkuran($ukuran);
}


class Apel implements Buah, Benda {
    protected $warna,
              $ukuran;

    public function makan(){
        //kunyah
        //sampai bagian tengah
    }

    public function _setWarna($warna){
        $this->warna = $warna;
    }

    public function _setUkuran($ukuran){
        $this->ukuran = $ukuran;
    }

    public function _getUkuran(){
        return $this->ukuran;
    }

}


class Jeruk implements Buah {
    protected $warna;
    public function makan(){
        //kupas
        //kunyah
    }

    public function _setWarna($warna){
        $this->warna = $warna;
    }

    public function _getWarna(){
        return $this->warna;
    }
}

$obj = new Jeruk;
$obj->_setWarna('Orange');
echo $obj->_getWarna()."<br>";

$obj2 = new Apel;
$obj2->_setUkuran("500 gr");
echo $obj2->_getUkuran();
