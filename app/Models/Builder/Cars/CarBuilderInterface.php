<?php

namespace App\Models\Builder\Cars;

interface CarBuilderInterface {
    public function setMake($make);
    public function setModel($model);
    public function setYear($year);
    public function setColor($color);
    public function build();
}