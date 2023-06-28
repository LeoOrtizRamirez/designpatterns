<?php

namespace App\Models\FactoryMethod\Generica;

class FabricaConcretaA implements FabricaAbstracta {
    public function crearProducto(): Producto {
        return new ProductoConcretoA();
    }
}