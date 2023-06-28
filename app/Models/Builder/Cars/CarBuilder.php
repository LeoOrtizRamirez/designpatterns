<?php

namespace App\Models\Builder\Cars;

class CarBuilder implements CarBuilderInterface{
    private $make;
    private $model;
    private $year;
    private $color; 

    public function setMake($make) {
        $this->make = $make;
        return $this;
    }

    public function setModel($model) {
        $this->model = $model;
        return $this;
    }

    public function setYear($year) {
        $this->year = $year;
        return $this;
    }

    public function setColor($color) {
        $this->color = $color;
        return $this;
    }

    public function build() {
        return new Car($this->make, $this->model, $this->year, $this->color);
    }
}