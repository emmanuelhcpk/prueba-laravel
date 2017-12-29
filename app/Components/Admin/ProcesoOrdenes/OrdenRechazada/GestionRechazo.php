<?php
namespace App\Components\Admin\ProcesoOrdenes\OrdenRechazada;
use App\Components\Admin\ProcesoOrdenes\Estados\ControlEstadosOrden;
use App\Components\Admin\ProcesoOrdenes\Estados\EstadosOrden;
use App\Components\Admin\ProcesoOrdenes\GestionarGenerico;
use App\Components\GestionNotificaciones;
use App\Models\OrdenPago;

class GestionRechazo extends GestionarGenerico
{
	private $notificar;
	public function __construct(GestionNotificaciones $notificar)
	{
		$this->notificar = $notificar;

	}

	public function gestionar(OrdenPago $orden,$json)
	{
		$this->generarTrazabilidad($orden,EstadosOrden::$ID_RECHAZADA,$json);//fue rechazada por payu
		$this->notificar->enviarFracaso($orden);

	}


}