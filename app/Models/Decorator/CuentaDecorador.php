<?php

namespace App\Models\Decorator;

use App\Models\Decorator\CuentaInterface;

abstract class CuentaDecorador implements CuentaInterface
{
    protected $cuentaDecorada;
    public function __construct(CuentaInterface $cuentaDecorada)
    {
        $this->cuentaDecorada = $cuentaDecorada;
    }
    public function abrirCuenta($cuenta)
    {
        $this->cuentaDecorada->abrirCuenta($cuenta);
    }
}
