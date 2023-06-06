<?php namespace App\Product;

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
