<?php 

namespace App\Models\Strategy;

class InitExample {

    public function __construct(){
        $this->init();
    }

    public function init(){

        $calculator = new Calculator(new SubtractionStrategy());
        $result = $calculator->execute(10,10);
        var_dump('result', $result);
    }

}