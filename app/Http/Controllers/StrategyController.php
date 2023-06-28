<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Strategy\AdditionStrategy;
use App\Models\Strategy\Calculator;
use App\Models\Strategy\SubtractionStrategy;
use Illuminate\Http\Request;

class StrategyController extends Controller
{
    public function operation(){
        $calculator = new Calculator(new SubtractionStrategy());
        $result = $calculator->execute(89,2);
        var_dump('result', $result);
    }
}
