<?php 

namespace App\Models\FactoryMethod\Generica;

class InitExample {

    public function __construct(){
        $this->init();
    }

    public function init(){

        $producto = new ProductoConcretoA();
        $nombre_producto_a = $producto->getName();
        var_dump('$nombre_producto_a', $nombre_producto_a);
        
        $producto = new ProductoConcretoB();
        $nombre_producto_b = $producto->getName();
        var_dump('$nombre_producto_b', $nombre_producto_b);
    }

}