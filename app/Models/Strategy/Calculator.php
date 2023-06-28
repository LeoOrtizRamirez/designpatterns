<?php

namespace App\Models\Strategy;

class Calculator
{
    protected $operation;

    public function __construct(OperationInterface $operation = null)
    {
        $this->operation = $operation ?? new AdditionStrategy();
    }

    public function execute($a, $b)
    {
        return $this->operation->doOperation($a, $b);
    }

    public function setOperation(OperationInterface $operation)
    {
        $this->operation = $operation;
    }

    public function __call($method, $arguments){
        $classname =ucfirst($method) . 'Strategy';
        list($a, $b) = $arguments;

        $this->setOperation(new $classname);
        return $this->execute($a, $b);
    }
}
