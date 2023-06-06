<?php
ini_set("display_errors","1");
ini_set("display_startup_errors","1");
error_reporting(E_ALL);
    /*
        Inheritance
        - Konsep yang digunakan untuk mengatur akses dari property dan method pada sebuah objek
        - ada 3 keyword visibility :
          1) Public
             dapat digunakan dimana saja, bahkan di luar kelas

          2) Protected
             hanya dapat digunakan di dalam sebuah kelas beserta turunannya

          3) Private
             hanya dapat digunakan di dalam sebuah kelas tertentu saja

        - Kenapa digunakan ?
          1) hanya memperlihatkan aspek dari class yang dibutuhkan oleh client
          2) menentukan kebutuhan yang jelas untuk object
          3) memberikan kendali pada kode untuk menghindari bug
        - Baiknya gunakan private / Protected pada class property
    */

    class MyProduct {
        private $title,
               $author,
               $publisher,
               $price,
               $discount = 0;

        public function __construct ($title ="title", $author="author", $publisher="publisher", $price=0) {
               $this->title = $title;
               $this->author = $author;
               $this->publisher = $publisher;
               $this->price = $price;
        }

        public function get_label() {
            return "$this->author, $this->publisher";
        }

        // Accessor method (Setter)
        // Title
        public function _setTitle($title) {
            $this->title = $title;
        }
        // Author
        public function _setAuthor($author) {
            $this->author = $author;
        }
        // Publisher
        public function _setPublisher($publisher) {
            $this->publisher = $publisher;
        }
        // Price
        public function _setPrice($price) {
            $this->price = $price;
        }
        // Discount
        public function _setDiscount($discount){
            $this->discount = $discount;
        }

        // Acessor method (Getter)
        // Title
        public function _getTitle(){
            return $this->title;
        }

        // Author
        public function _getAuthor(){
            return $this->author;
        }

        // Publisher
        public function _getPublisher(){
            return $this->publisher;
        }

        // Price
        public function _getPrice() {
            return $this->price - (($this->price * $this->discount) / 100);
        }

        // Discount
        public function _getDiscount(){
            return $this->discount;
        }
        // end ~

        public function get_product_info() {
            // Komik : Naruto | Masashi Kishimoto, Shonen Jump (12 USD) - 100 halaman
            $str = "{$this->title} | {$this->get_label()} ({$this->price} USD)";

            return $str;
        }
    }

    class PrintProductInfo{
        public function print_product(MyProduct $product) {
            // $str = "Pajero | Mitsubishi, White (2000 USD)";
            $str = "{$product->title} | {$product->get_label()} ({$product->price} USD)";
            return $str;
        }
    }

    class ComicProduct extends MyProduct {
        public $pageAmount;

        public function __construct($title ="title", $author="author", $publisher="publisher", $price=0, $pageAmount = 0) {

            parent::__construct($title, $author, $publisher, $price);

            $this->pageAmount = $pageAmount;

        }

        public function get_product_info() {
            $str = "Comic : ". parent::get_product_info() ." - {$this->pageAmount} Page. ";
            return $str;
        }
    }

    class GameProduct extends MyProduct {
        public $playingTime;

        public function __construct($title ="title", $author="author", $publisher="publisher", $price=0, $playingTime = 0) {

            parent::__construct($title, $author, $publisher, $price);

            $this->playingTime = $playingTime;

        }

        public function get_product_info() {
            $str = "Game : ". parent::get_product_info() ." ~ {$this->playingTime} Hour. ";

            return $str;
        }
    }

    $product1 = new ComicProduct("Naruto", "Masashi Kishimoto", "Shonen Jump", 12, 100);
    $product2 = new GameProduct("Uncharted", "Neil Druckmann", "Sony Computer", 150, 50);

    echo $product1->get_product_info();
    echo "<br>";
    echo $product2->get_product_info();
    echo "<hr>";

    $product3 = new MyProduct();
    $product3->_setTitle("Pythonista");
    echo $product3->_getTitle();
    echo "<br>";

    $product3->_setAuthor("Achmad Adyatma Ardi");
    echo $product3->_getAuthor();
    echo "<br>";

    $product3->_setPublisher("Sony");
    echo $product3->_getPublisher();
    echo "<br>";

    $product3->_setDiscount(10);
    echo $product3->_getDiscount();
    echo "<br>";

    // $product1->_setPrice(25);
    $product3->_setPrice(250);
    echo $product3->_getPrice();
    echo "<br>";
    echo "<hr>";
