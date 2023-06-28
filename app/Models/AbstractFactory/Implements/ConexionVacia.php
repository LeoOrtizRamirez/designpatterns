<?php

use App\Models\AbstractFactory\Interfaces\ConexionDBInterface;

class ConexionVacia implements ConexionDBInterface {
    public function conectar() {
        echo "NO SE ESPECIFICÓ PROVEEDOR";
    }

    public function desconectar() {
        echo "NO SE ESPECIFICÓ PROVEEDOR";
    }
}
?>