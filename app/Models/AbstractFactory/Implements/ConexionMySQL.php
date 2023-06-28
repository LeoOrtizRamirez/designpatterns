<?php

namespace App\Models\AbstractFactory\Implements;

use App\Models\AbstractFactory\Interfaces\ConexionDBInterface;

class ConexionMySQL implements ConexionDBInterface {

  private $host;
  private $puerto;
  private $usuario;
  private $contrasena;

  public function __construct() {
    $this->host = "localhost";
    $this->puerto = "3306";
    $this->usuario = "root";
    $this->contrasena = "123";
  }

  public function conectar() {
    echo "Se conectó a MySQL";
  }

  public function desconectar() {
    echo "Se desconectó de MySQL";
  }

  public function __toString() {
    return "ConexionMySQL [host=" . $this->host . ", puerto=" . $this->puerto . ", usuario=" . $this->usuario . ", contrasena=" . $this->contrasena . "]";
  }
}