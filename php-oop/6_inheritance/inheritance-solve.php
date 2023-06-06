<?php
    /*
        Inheritance
        - Menciptakan hierarki antar kelas (Parent & Child)
        - Child Class, mewarisi semua properti dan method dari parent-nya (yang visible)
        - Child Class memperluas (extends) fungsionalitas dari parent-nya
    */

    class MyProduct {
        public $title,
               $author,
               $publisher,
               $price,
               $pageAmount,
               $playingTime;

        public function __construct ($title ="title", $author="author", $publisher="publisher", $price=0, $pageAmount=0, $playingTime=0) {
               $this->title = $title;
               $this->author = $author;
               $this->publisher = $publisher;
               $this->price = $price;
               $this->pageAmount = $pageAmount;
               $this->playingTime = $playingTime;
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

        public function get_product_info() {
            $str = "Comic : {$this->title} | {$this->get_label()} ({$this->price} USD) - {$this->pageAmount} Page. ";

            return $str;
        }
    }

    class GameProduct extends MyProduct {

        public function get_product_info() {
            $str = "Game : {$this->title} | {$this->get_label()} ({$this->price} USD) ~ {$this->playingTime} Hour. ";

            return $str;
        }
    }

    $product1 = new ComicProduct("Naruto", "Masashi Kishimoto", "Shonen Jump", 12, 100, 0);
    $product2 = new GameProduct("Uncharted", "Neil Druckmann", "Sony Computer", 150, 0, 50);

    echo $product1->get_product_info();
    echo "<br>";
    echo $product2->get_product_info();
