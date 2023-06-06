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
               $playingTime,
               $productType;

        public function __construct ($title ="title", $author="author", $publisher="publisher", $price=0, $pageAmount=0, $playingTime=0, $productType) {
               $this->title = $title;
               $this->author = $author;
               $this->publisher = $publisher;
               $this->price = $price;
               $this->pageAmount = $pageAmount;
               $this->playingTime = $playingTime;
               $this->productType = $productType;
        }

        public function get_label() {
            return "$this->author, $this->publisher";
        }

        public function get_complete_info() {
            // Komik : Naruto | Masashi Kishimoto, Shonen Jump (12 USD) - 100 halaman
            $str = "{$this->productType} : {$this->title} | {$this->get_label()} ({$this->price} USD)";

            if ($this->productType == "Comic") {
                $str .= " - {$this->pageAmount} Hour.";
            } elseif ($this->productType == "Game") {
                $str .= " ~ {$this->playingTime} Page.";
            }

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

    $product1 = new MyProduct("Naruto", "Masashi Kishimoto", "Shonen Jump", 12, 100, 0, "Comic");
    $product2 = new MyProduct("Uncharted", "Neil Druckmann", "Sony Computer", 150, 0, 50, "Game");
    $productInfo1 = new PrintProductInfo();

    // echo $productInfo1->print_product($product1);
    // echo "<br>";
    echo $product1->get_complete_info();
    echo "<br>";
    echo $product2->get_complete_info();

    // Komik : Naruto | Masashi Kishimoto, Shonen Jump (12 USD) - 100 page
    // Game : Uncharted | Neil Druckmann, Sony Computer (150 USD) ~ 50 hour
