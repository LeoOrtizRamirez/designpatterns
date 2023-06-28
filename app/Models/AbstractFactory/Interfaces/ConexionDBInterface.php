<?php

namespace App\Models\AbstractFactory\Interfaces;

interface ConexionDBInterface
{
    public function conectar();
    public function desconectar();
}
