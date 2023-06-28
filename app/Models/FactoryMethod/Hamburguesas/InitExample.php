<?php 

namespace App\Models\FactoryMethod\Hamburguesas;

use App\Models\FactoryMethod\Hamburguesas\TiposHamburguesas\HamburguesaAmericana;
use App\Models\FactoryMethod\Hamburguesas\TiposHamburguesas\HamburguesaVegetariana;

/*
* @author Miguel Garces
*/

class InitExample {

    public function __construct(){
        $this->init();
    }
    /*
    * El cliente queda entonces liberado de detalles de construcción de la hamburguesa
    */
    public function init(){

        $hamburgesa = new HamburguesaVegetariana();
        $vegetariana = $hamburgesa->obtenerHamburguesa();
        var_dump('Vegetariana', $vegetariana->toArray());
        
        $hamburgesa = new HamburguesaAmericana();
        $americana = $hamburgesa->obtenerHamburguesa();
        var_dump('Americana', $americana->toArray());
    }

}