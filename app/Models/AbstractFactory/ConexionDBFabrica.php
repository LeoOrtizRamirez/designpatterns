<?php

namespace App\Models\AbstractFactory\Interfaces;

use App\Models\AbstractFactory\Implements\ConexionMySQL;
use App\Models\AbstractFactory\Implements\ConexionOracle;
use App\Models\AbstractFactory\Implements\ConexionPostgreSQL;
use App\Models\AbstractFactory\Implements\ConexionSQLServer;
use App\Models\AbstractFactory\Interfaces\FabricaAbstracta;
use ConexionVacia;

class ConexionDBFabrica implements FabricaAbstracta {
    
	public function getBD($motor) {
		if ($motor == null) {
			return new ConexionVacia();
		}
		if (strcasecmp($motor, "MYSQL") == 0) {
			return new ConexionMySQL();
		} else if (strcasecmp($motor, "ORACLE") == 0) {
			return new ConexionOracle();
		} else if (strcasecmp($motor, "POSTGRE") == 0) {
			return new ConexionPostgreSQL();
		} else if (strcasecmp($motor, "SQL") == 0) {
			return new ConexionSQLServer();
		}
		return new ConexionVacia();
	}

	public function getREST($area) {
		return null;
	}
}