<?php

namespace App\Models\Facade;

use App\Models\Facade\Api\AvionAPI;
use App\Models\Facade\Api\HotelAPI;

class CheckFacade {

    private $avionAPI;
    private $hotelAPI;
    
    public function __construct() {
        $this->avionAPI = new AvionAPI();
        $this->hotelAPI = new HotelAPI();
    }
    
    public function buscar($fechaIda, $fechaVuelta, $origen, $destino) {
        $this->avionAPI->buscarVuelos($fechaIda, $fechaVuelta, $origen, $destino);
        $this->hotelAPI->buscarHoteles($fechaIda, $fechaVuelta);
    }       
}