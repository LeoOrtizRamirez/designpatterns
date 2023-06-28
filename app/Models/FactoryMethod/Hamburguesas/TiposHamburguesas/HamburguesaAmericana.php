<?php

namespace App\Models\FactoryMethod\Hamburguesas\TiposHamburguesas;

use App\Models\FactoryMethod\Hamburguesas\Hamburguesa;
use App\Models\FactoryMethod\Hamburguesas\HamburguesaInterface;

/*
Esta clase podria ser el modelo hamburguesa de eloquent
*/
class HamburguesaAmericana extends HamburguesaFactory {

    public function obtenerHamburguesa(): HamburguesaInterface {
        return new Hamburguesa('Pan Bimbo', 'Carne de Res', ['lechuga', 'tomate', 'cebolla', 'queso']);
    } 
}