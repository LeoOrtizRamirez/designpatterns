<?php

namespace App\Models\FactoryMethod\Vehiculos;

class Vehiculo implements VehiculoInterface{

    private $pasos = [];

    public function __construct(array $pasos) {
        $this->pasos = $pasos;
    }

    public function toArray(): array{
        return $this->pasos;
    }
}