<?php

namespace App\Models\AbstractFactory;

use App\Models\AbstractFactory\Implements\ConexionRESTCompras;
use App\Models\AbstractFactory\Implements\ConexionRESTNoArea;
use App\Models\AbstractFactory\Implements\ConexionRESTVentas;
use App\Models\AbstractFactory\Interfaces\FabricaAbstracta;

class ConexionRESTFabrica implements FabricaAbstracta {

	public function getREST($area) {
		if ($area == null) {
			return new ConexionRESTNoArea();
		}
		if (strcasecmp($area, "COMPRAS") == 0) {
			return new ConexionRESTCompras();
		} else if (strcasecmp($area, "VENTAS") == 0) {
			return new ConexionRESTVentas();
		}

		return new ConexionRESTNoArea();
	}

	public function getBD($motor) {
		return null;
	}
}