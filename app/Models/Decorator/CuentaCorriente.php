<?php

namespace App\Models\Decorator;

class CuentaCorriente implements CuentaInterface {

    public function abrirCuenta(Cuenta $c) {
        echo("-------------------------\n");
        echo("Se abrió una cuenta Corriente\n");
        echo("Cliente: " . $c->getCliente() . "\n");        
    }
}