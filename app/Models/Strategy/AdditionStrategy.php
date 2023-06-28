<?php

namespace App\Models\Strategy;

class AdditionStrategy implements OperationInterface{
    public function doOperation($a, $b)
    {
        return $a + $b;
    }
}