<?php
namespace App\Components\Admin\ProcesoOrdenes\GestionAdquisicion;

use App\Components\Databank\swing\Integracion;
use App\Components\Databank\swing\MovimientoUtil;
use App\Models\OrdenPago;

class EnvioAdquisicion
{
	private $databank;
	public function __construct()
	{
		$this->databank = new Integracion();
	}

	public function enviarAdquisicion(OrdenPago $orden)
	{
		//dd(json_encode($movimiento));
		$movimiento = $this->getDto($orden);
		$res = $this->databank->hacerAdquisicion($movimiento);
		return $res;
		
	}

	public function getDto(OrdenPago $orden)
	{
		$movimiento = MovimientoUtil::createMovimientoDto($orden,'Adquisición',null,'Adquisicion de puntos Bc2');
		return $movimiento;
	}

	

}