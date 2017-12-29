<?php

namespace App\Components\Admin\ProcesoOrdenes\OrdenConfirmada;

use App\Components\Admin\ProcesoOrdenes\Estados\ControlEstadosOrden;
use App\Components\Admin\ProcesoOrdenes\Estados\EstadosOrden;
use App\Components\Admin\ProcesoOrdenes\GestionAdquisicion\EnvioAdquisicion;
use App\Components\Admin\ProcesoOrdenes\GestionAdquisicion\RespuestaAdquisicion;
use App\Components\Admin\ProcesoOrdenes\GestionarGenerico;
use App\Components\GestionNotificaciones;
use App\Models\OrdenPago;

class GestionConfirmacion extends GestionarGenerico
{
	private $adquisicionEnvio;
	private $adquisicionRes;
	private $notificar;
	public function __construct(GestionNotificaciones $notificar)
	{
		$this->adquisicionEnvio = new EnvioAdquisicion();
		$this->adquisicionRes = new RespuestaAdquisicion();
		$this->notificar = $notificar;
	}

	//transaccion confirmada
	public function gestionar(OrdenPago $orden,$json)
	{
		$this->generarTrazabilidad($orden,EstadosOrden::$ID_PENDIENTE,$json);//fue aprobada por payu pero todavia no se ha enviado al databank
		$respuesta = $this->adquisicionEnvio->enviarAdquisicion($orden);//envio al databank
 		$this->adquisicionRes->gestionRespuesta($orden,$this->adquisicionEnvio->getDto($orden),$respuesta);
		if($respuesta->success){ //notifico exito
			$this->notificar->enviarExito($orden);
			dd('exito');
		}else{ //notifico error
			$this->notificar->enviarFracaso('exito','exito',$orden);
			dd($respuesta,json_encode($this->adquisicionEnvio->getDto($orden)));
		}
		
	}


}