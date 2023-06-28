<?php

namespace App\Models\Decorator;

use App\Models\AbstractFactory\FabricaProductor;

class InitExample
{

    public function __construct()
    {
        $this->init();
    }

    public function init()
    {
        /* $fabricaBD = FabricaProductor::getFactory("BD");
        $cxBD1 = $fabricaBD->getBD("MYSQL");
        $cxBD1->conectar(); */

        $fabricaREST = FabricaProductor::getFactory("REST");
        $cxRS1 = $fabricaREST->getREST("COMPRAS");
        $cxRS1->leerURL("https://www.youtube.com/subscription_center?add_user=mitocode");
    }
}
