<?php

namespace App\Models\Decorator;

class InitExample
{

    public function __construct()
    {
        $this->init();
    }

    public function init()
    {
        $c = new Cuenta(1, "Leoordev");
        $cuenta = new CuentaAhorro();
        $cuentaBlindada = new BlindajeDecorador($cuenta);
        //$cuenta->abrirCuenta($c); 
        $cuentaBlindada->abrirCuenta($c);
    }
}
