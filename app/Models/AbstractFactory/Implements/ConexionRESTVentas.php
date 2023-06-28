<?php

namespace App\Models\AbstractFactory\Implements;

use App\Models\AbstractFactory\Interfaces\ConexionRESTInterface;

class ConexionRESTVentas implements ConexionRESTInterface
{

    public function leerURL($url)
    {
        echo "Conectándose a " . $url;
    }
}
