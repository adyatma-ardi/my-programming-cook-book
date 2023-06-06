<?php

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
