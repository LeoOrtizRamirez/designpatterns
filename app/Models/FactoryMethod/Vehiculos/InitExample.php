<?php 

namespace App\Models\FactoryMethod\Vehiculos;

use App\Classes\Patrones\FactoryMethod\Ejemplo2\HamburguesaFactory;

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

        $moto = VehiculoFactory::obtenerPasos('moto');
        var_dump('moto', $moto->toArray());

        $coche = VehiculoFactory::obtenerPasos('coche');
        var_dump('coche', $coche->toArray());
    }

}