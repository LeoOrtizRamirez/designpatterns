<?php

namespace App\Models\FactoryMethod\Hamburguesas\TiposHamburguesas;

use App\Models\FactoryMethod\Hamburguesas\Hamburguesa;
use App\Models\FactoryMethod\Hamburguesas\HamburguesaInterface;

/*
Esta clase podria ser el modelo hamburguesa de eloquent
*/
class HamburguesaVegetariana extends HamburguesaFactory {

    public function obtenerHamburguesa(): HamburguesaInterface {
        return new Hamburguesa('Pan Integral', 'Carne de soya', ['lechuga', 'tomate', 'cebolla', 'queso']);
    } 
}