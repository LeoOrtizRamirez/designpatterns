<?php

namespace App\Models\Decorator;

class CuentaAhorro implements CuentaInterface {

    public function abrirCuenta(Cuenta $c) {
        echo("-------------------------\n");
        echo("Se abrió una cuenta de Ahorros\n");
        echo("Cliente: " . $c->getCliente() . "\n");        
    }
}