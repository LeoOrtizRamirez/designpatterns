<?php

namespace App\Models\AbstractFactory\Implements;

use App\Models\AbstractFactory\Interfaces\ConexionDBInterface;

class ConexionPostgreSQL implements ConexionDBInterface {

  private $host;
  private $puerto;
  private $usuario;
  private $contrasena;

  public function __construct() {
    $this->host = "localhost";
    $this->puerto = "5433";
    $this->usuario = "root";
    $this->contrasena = "123";
  }

  public function conectar() {
    echo "Se conectó a PostgreSQL";
  }

  public function desconectar() {
    echo "Se desconectó de PostgreSQL";
  }

  public function __toString() {
    return "ConexionPostgreSQL [host=" . $this->host . ", puerto=" . $this->puerto . ", usuario=" . $this->usuario . ", contrasena=" . $this->contrasena . "]";
  }
}