<?php

namespace App\Models\Decorator;

use App\Models\Decorator\CuentaInterface;

class BlindajeDecorador extends CuentaDecorador
{
    public function __construct(CuentaInterface $cuentaDecorada)
    {
        parent::__construct($cuentaDecorada);
    }
    public function abrirCuenta($cuenta)
    {
        parent::abrirCuenta($cuenta);
        $this->agregarBlindaje($cuenta);
    }
    public function agregarBlindaje($cuenta)
    {
        echo "Se agregó blindaje a la cuenta del cliente " . $cuenta->getCliente() . "\n";
    }
}
