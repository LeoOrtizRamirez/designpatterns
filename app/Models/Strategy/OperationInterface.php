<?php

namespace App\Models\Strategy;

interface OperationInterface
{
    public function doOperation($a, $b);
}
