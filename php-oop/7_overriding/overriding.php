<?php
ini_set("display_errors","1");
ini_set("display_startup_errors","1");
error_reporting(E_ALL);

    class MyProduct {
        public $title,
               $author,
               $publisher,
               $price;

        public function __construct ($title ="title", $author="author", $publisher="publisher", $price=0) {
               $this->title = $title;
               $this->author = $author;
               $this->publisher = $publisher;
               $this->price = $price;
        }

        public function get_label() {
            return "$this->author, $this->publisher";
        }

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
