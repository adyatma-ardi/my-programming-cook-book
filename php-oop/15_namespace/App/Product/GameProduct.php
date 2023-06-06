<?php namespace App\Product;

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
