<?php 

namespace App\Models\Facade;

class InitExample {

    public function __construct(){
        $this->init();
    }

    public function init(){
        $client1 = new CheckFacade();
		$client1->buscar("27/06/2023", "28/06/2023", "Medellin", "Colombia");
    }
}