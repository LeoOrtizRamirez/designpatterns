<?php

namespace App\Models\Builder\Products;

interface ProductBuilderInterface {
    public function setName($name);
    public function setDescription($description);
    public function setPrice($price);
    public function getProduct();
}