<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\FactoryMethod\Hamburguesas\TiposHamburguesas\HamburguesaAmericana;
use App\Models\FactoryMethod\Hamburguesas\TiposHamburguesas\HamburguesaVegetariana;
use Illuminate\Http\Request;

class FactoryMethodController extends Controller
{
    public function hacerHamburguesa(){
        $hamburgesa = new HamburguesaVegetariana();
        $vegetariana = $hamburgesa->obtenerHamburguesa();
        var_dump('Vegetariana', $vegetariana->toArray());
        
        $hamburgesa = new HamburguesaAmericana();
        $americana = $hamburgesa->obtenerHamburguesa();
        var_dump('Americana', $americana->toArray());
    }
}
