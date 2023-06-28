<?php

namespace App\Models\FactoryMethod\Generica;

class FabricaConcretaB implements FabricaAbstracta {
    public function crearProducto(): Producto {
        return new ProductoConcretoB();
    }
}