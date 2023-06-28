<?php

namespace App\Models\FactoryMethod\Hamburguesas\TiposHamburguesas;

use App\Models\FactoryMethod\Hamburguesas\HamburguesaInterface;

/*
*/
abstract class HamburguesaFactory {

    abstract public function obtenerHamburguesa(): HamburguesaInterface;
}