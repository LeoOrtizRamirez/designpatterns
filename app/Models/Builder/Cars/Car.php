<?php

namespace App\Models\Builder\Cars;

class Car {
    private $make;
    private $model;
    private $year;
    private $color;

    public function __construct($make, $model, $year, $color) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
    }

    public function getInfo() {
        return "This car is a " . $this->color . " " . $this->year . " " . $this->make . " " . $this->model;
    }
}