<?php

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
