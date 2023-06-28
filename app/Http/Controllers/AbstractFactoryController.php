<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AbstractFactory\FabricaProductor;
use Illuminate\Http\Request;

class AbstractFactoryController extends Controller
{
    public function conection(){
        /* $fabricaBD = FabricaProductor::getFactory("BD");
        $cxBD1 = $fabricaBD->getBD("MYSQL");
        $cxBD1->conectar(); */

        $fabricaREST = FabricaProductor::getFactory("REST");
        $cxRS1 = $fabricaREST->getREST("VENTAS");
        $cxRS1->leerURL("example.com");
    }   
}
