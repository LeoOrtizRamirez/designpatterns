<?php

namespace App\Models\AbstractFactory\Implements;

use App\Models\AbstractFactory\Interfaces\ConexionDBInterface;

class ConexionSQLServer implements ConexionDBInterface {

  private $host;
  private $puerto;
  private $usuario;
  private $contrasena;

  public function __construct() {
    $this->host = "localhost";
    $this->puerto = "1433";
    $this->usuario = "root";
    $this->contrasena = "123";
  }

  public function conectar() {
    echo "Se conectó a SQLServer";
  }

  public function desconectar() {
    echo "Se desconectó de SQLServer";
  }

  public function __toString() {
    return "ConexionSQLServer [host=" . $this->host . ", puerto=" . $this->puerto . ", usuario=" . $this->usuario . ", contrasena=" . $this->contrasena . "]";
  }
}