<?php

namespace App\Models\Facade\Api;

class HotelAPI {

	public function buscarHoteles($fechaEntrada, $fechaSalida) {
		echo "Hoteles encontrados <br>";
		echo "Entrada: " . $fechaEntrada . " Salida: " . $fechaSalida . "<br>";
		echo "Hotel A <br>";
		echo "Hotel B <br>";
		echo "Hotel C <br>";
	}

}

?>