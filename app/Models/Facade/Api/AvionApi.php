<?php

namespace App\Models\Facade\Api;

class AvionAPI {

	public function buscarVuelos($fechaIda, $fechaVuelta, $origen, $destino) {
		echo "Vuelos encontrados para " . $destino . " desde " . $origen . "<br>";
		echo "Fecha IDA: " . $fechaIda . " Fecha Vuelta " . $fechaVuelta . "<br>";
		echo "============================== <br>";
	}

}

?>