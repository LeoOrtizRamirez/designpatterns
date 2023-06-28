<?php

namespace App\Models\AbstractFactory;

use App\Models\AbstractFactory\Interfaces\ConexionDBFabrica;

class FabricaProductor {

    public static function getFactory($tipoFabrica) {

        if (strcasecmp($tipoFabrica, "BD") == 0) {
            return new ConexionDBFabrica();

        } else if (strcasecmp($tipoFabrica, "REST") == 0) {
            return new ConexionRESTFabrica();
        }

        return null;
    }
}
?>