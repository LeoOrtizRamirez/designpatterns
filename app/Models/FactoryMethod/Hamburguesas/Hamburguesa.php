<?php

namespace App\Models\FactoryMethod\Hamburguesas;

/*
Esta clase podria ser el modelo hamburguesa de eloquent
*/
class Hamburguesa implements HamburguesaInterface{

    private $proteina;
    private $toppings = [];
    private $pan;

    public function __construct(string $pan, string $proteina, array $toppings) {
        $this->pan = $pan;
        $this->proteina = $proteina;
        $this->toppings = $toppings;
    }

    public function toArray(): array{
        $result = [
            $this->pan,
            $this->proteina
        ];
        $result = array_merge($result, $this->toppings);
        $result[] = $this->pan;
        return $result;
    }
}