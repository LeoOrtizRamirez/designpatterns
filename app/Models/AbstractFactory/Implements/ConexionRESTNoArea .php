<?php

namespace App\Models\AbstractFactory\Implements;

use App\Models\AbstractFactory\Interfaces\ConexionRESTInterface;

class ConexionRESTNoArea implements ConexionRESTInterface
{

    public function leerURL($url)
    {
        echo "AREA NO ELEGIDA";
    }
}
