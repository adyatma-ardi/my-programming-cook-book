<?php
    /*
        Property
        - Mereepresentasikan data / keadaan dari sebuah object
        - Variabel yang ada di dalam object (member variable)
        - Sama seperti variable di dalam PHP, ditambah dengan visibility di depannya
    */

    /*
        Method
        - Merepresentasikan perilaku dari sebuah object
        - Function yang ada di dalam object
        - Sama seperti function di dalam PHP, ditambah dengan visibility di depannya
    */

    class VehicleProduct {
        public $name = "name",
               $brand = "brand",
               $color ="color",
               $price = 0;

        public function get_label() {
            return "$this->name, $this->brand";
        }
    }

    $product1 = new VehicleProduct();
    $product1 -> name = "Pajero";
    $product1 -> brand = "Mitsubishi";
    $product1 -> color = "White";
    $product1 -> price = 2000;
    var_dump($product1);

    $product2 = new VehicleProduct();
    $product2 -> name = "XSR 155";
    $product2 -> brand = "Yamaha";
    $product2 -> color = "Black";
    $product2 -> price = 500;
    var_dump($product2);

    echo "<br>";
    echo "Car : ". $product1->get_label();
    echo "<br>";
    echo "Motorcycle : ". $product2->get_label();
