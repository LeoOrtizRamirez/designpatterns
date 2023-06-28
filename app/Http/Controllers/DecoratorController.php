<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Decorator\BlindajeDecorador;
use App\Models\Decorator\Cuenta;
use App\Models\Decorator\CuentaAhorro;
use App\Models\Decorator\CuentaCorriente;
use Illuminate\Http\Request;

class DecoratorController extends Controller
{
    public function crearCuenta(){
        $c = new Cuenta(1, "Leoordev");
        $cuenta = new CuentaAhorro();
        $cuentaBlindada = new BlindajeDecorador($cuenta);
        //$cuenta->abrirCuenta($c); 
        $cuentaBlindada->abrirCuenta($c);
    }
}
