<?php
    /*
        Constructor
        - Merupakan method khusus yang akan dijalankan ketika suatu objek diinstansiasi
    */

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
            return "$this->name, $this->brand";
        }
    }

    $product1 = new VehicleProduct("Pajero", "Mitsubishi", "White", 2000);
    var_dump($product1);

    $product2 = new VehicleProduct("XSR 155", "Yamaha", "Black", 500);
    var_dump($product2);

    $product3 = new VehicleProduct("Creta","Hyundai");
    var_dump($product3);

    echo "<br>";
    echo "Car : ". $product1->get_label();
    echo "<br>";
    echo "Motorcycle : ". $product2->get_label();
