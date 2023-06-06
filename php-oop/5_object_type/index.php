<?php


    class VehicleProduct {
        public $name,
               $brand,
               $color,
               $price;

        public function __construct ($name ="name", $brand="brand", $color="color", $price=0) {
               $this->name = $name;
               $this->brand = $brand;
               $this->color = $color;
               $this->price = $price;
        }

        public function get_label() {
            return "$this->brand, $this->color";
        }
    }

    class PrintProductInfo{
        public function print_product(VehicleProduct $product) {
            // $str = "Pajero | Mitsubishi, White (2000 USD)";
            $str = "{$product->name} | {$product->get_label()} ({$product->price} USD)";
            return $str;
        }
    }

    // product 1
    $product1 = new VehicleProduct("Pajero", "Mitsubishi", "White", 2000);
    $productInfo1 = new PrintProductInfo();
    // var_dump($product1);
    echo $productInfo1->print_product($product1);
    echo "<br>";

    // product 2
    $product2 = new VehicleProduct("XSR 155", "Yamaha", "Black", 500);
    $productInfo2 = new PrintProductInfo();
    // var_dump($product2);
    echo $productInfo2->print_product($product2);
