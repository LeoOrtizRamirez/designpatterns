<?php

namespace App\Models\Builder\Products;

class ProductBuilder implements ProductBuilderInterface {
    private $product;

    public function __construct() {
        $this->product = new Product("", "", 0);
    }

    public function setName($name) {
        $this->product->name = $name;
    }

    public function setDescription($description) {
        $this->product->description = $description;
    }

    public function setPrice($price) {
        $this->product->price = $price;
    }

    public function getProduct() {
        return $this->product;
    }
}