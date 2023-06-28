<?php 

namespace App\Models\FactoryMethod\Hamburguesas;

interface HamburguesaInterface {
    /*
    * Obligamos a que todas las Hamburguesa tengan la funcion requerida
    */
    public function toArray(); 

}