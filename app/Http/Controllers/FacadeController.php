<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Facade\CheckFacade;
use Illuminate\Http\Request;

class FacadeController extends Controller
{
    public function buscarVuelo(){
        $client1 = new CheckFacade();
		$client1->buscar("27/06/2023", "28/06/2023", "Medellin", "Manizales");
    }
}
