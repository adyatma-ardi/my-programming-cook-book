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



    interface ProductInfo
    {
        public function get_product_info();
    }

    abstract class MyProduct
    {
        protected $title,
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

        abstract function get_info();

    }

    class ComicProduct extends MyProduct implements ProductInfo
    {
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

        public function get_info(){
            // Komik : Naruto | Masashi Kishimoto, Shonen Jump (12 USD) - 100 halaman
            $str = "{$this->title} | {$this->get_label()} ({$this->price} USD)";

            return $str;
        }
    }

    class GameProduct extends MyProduct implements ProductInfo
    {
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

        public function get_info(){
            // Komik : Naruto | Masashi Kishimoto, Shonen Jump (12 USD) - 100 halaman
            $str = "{$this->title} | {$this->get_label()} ({$this->price} USD)";

            return $str;
        }
    }

    class PrintProductInfo
    {
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

    echo "<hr>";
