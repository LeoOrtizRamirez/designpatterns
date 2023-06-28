<?php

namespace App\Models\Decorator;

class Cuenta
{
    private $id;
    private $cliente;

    public function __construct($id, $cliente)
    {
        $this->id = $id;
        $this->cliente = $cliente;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }
}
