<?php

namespace App\Models\Strategy;


class SubtractionStrategy implements OperationInterface{
    public function doOperation($a, $b)
    {
        return $a - $b;
    }
}