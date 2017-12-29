<?php

namespace App\Components\Admin\ProcesoOrdenes\Estados;
use App\Models\OrdenPago;
use App\Models\Trazabilidad;

class ControlEstadosOrden {

	public function __construct() 
	{

	}
	/*
	 * Encargado de asignar los estados a los vehiculos
	 */

	public static function setEstadoOrden(OrdenPago $orden, $estado_id,$request_id=null) {
		$estado = new Trazabilidad();
		$estado->orden_pago_id = $orden->id;
		$estado->estado_id = $estado_id;
		$estado->registro_request_id = $request_id; //puede ser nulo
		$estado->save();
		return $estado;
	}


}