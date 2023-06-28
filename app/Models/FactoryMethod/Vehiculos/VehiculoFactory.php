<?php

namespace App\Models\FactoryMethod\Vehiculos;



/*
Esta clase podria ser el modelo hamburguesa de eloquent
*/
class VehiculoFactory {

    public static function obtenerPasos($tipo): VehiculoInterface {
        switch ($tipo) {
            case 'coche':
                return new Vehiculo([
                    'Presiona el pedal del freno mientras cambias la posición del coche del freno de estacionamiento al modo de conducción.',
                    'Mueve tu pie del freno al pedal del acelerador, el cual se encuentra en el lado derecho.',
                    'Presiona suavemente el pedal del acelerador con tu pie derecho.',
                    'A medida que el coche empieza a moverse, gradualmente presiona el pedal del acelerador hacia abajo para acelerar más.',
                    'Para desacelerar, simplemente levanta el pie del acelerador y presiona suavemente el pedal del freno.']
                );
            
            case 'moto':
                return new Vehiculo([
                    'Enciende la moto y déjala calentar durante unos minutos',
                    'Sujeta firmemente el manillar y coloca tu mano derecha en la manija del acelerador.',
                    'Gira el acelerador gradualmente hacia ti con tu mano derecha para acelerar.',
                    'Si necesitas desacelerar, gira el acelerador en sentido inverso, lejos de ti.',
                    'Para detenerte, usa los frenos y suelta el acelerador lentamente.',
                ]);

            default:
                return null;
        }
    } 
}