<?php

namespace App\Models\AbstractFactory\Implements;

use App\Models\AbstractFactory\Interfaces\ConexionDBInterface;

class ConexionOracle implements ConexionDBInterface {

  private $host;
  private $puerto;
  private $usuario;
  private $contrasena;

  public function __construct() {
    $this->host = "localhost";
    $this->puerto = "1521";
    $this->usuario = "root";
    $this->contrasena = "123";
  }

  public function conectar() {
    echo "Se conectó a Oracle";
  }

  public function desconectar() {
    echo "Se desconectó de Oracle";
  }

  public function __toString() {
    return "ConexionOracle [host=" . $this->host . ", puerto=" . $this->puerto . ", usuario=" . $this->usuario . ", contrasena=" . $this->contrasena . "]";
  }
}