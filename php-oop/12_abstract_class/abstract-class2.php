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

    abstract class MyProduct {
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
        public function _setTitle($title) { // title
            $this->title = $title;
        }

        public function _setAuthor($author) { // author
            $this->author = $author;
        }

        public function _setPublisher($publisher) { // publisher
            $this->publisher = $publisher;
        }

        public function _setPrice($price) { // price
            $this->price = $price;
        }

        public function _setDiscount($discount){ // discount
            $this->discount = $discount;
        }

        // Acessor method (Getter)
        public function _getTitle(){ // title
            return $this->title;
        }

        public function _getAuthor(){ // author
            return $this->author;
        }

        public function _getPublisher(){ // publisher
            return $this->publisher;
        }

        public function _getPrice() { // price
            return $this->price - (($this->price * $this->discount) / 100);
        }

        public function _getDiscount(){ // discount
            return $this->discount;
        }
        // end ~

        abstract public function get_product_info();

        public function get_info(){
            // Komik : Naruto | Masashi Kishimoto, Shonen Jump (12 USD) - 100 halaman
            $str = "{$this->title} | {$this->get_label()} ({$this->price} USD)";

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
            $str = "Comic : ". $this->get_info() ." - {$this->pageAmount} Page. ";
            return $str;
        }

        public function test() {

            return "Hello";
        }
    }

    class GameProduct extends MyProduct {
        public $playingTime;

        public function __construct($title ="title", $author="author", $publisher="publisher", $price=0, $playingTime = 0) {

            parent::__construct($title, $author, $publisher, $price);

            $this->playingTime = $playingTime;

        }

        public function get_product_info() {
            $str = "Game : ". $this->get_info()  ." ~ {$this->playingTime} Hour. ";

            return $str;
        }

        public function test() {

            return "Hello";
        }
    }

    class PrintProductInfo{
        public $productList = [];

        public function addProduct(MyProduct $product){
            $this->productList[] = $product;
        }

        public function print_product() {
            $str = "PRODUCT LIST : <br>";

            foreach ($this->productList as $p) {
                $str .= "- {$p->get_product_info()} <br>";
            }

            return $str;
        }
    }


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
