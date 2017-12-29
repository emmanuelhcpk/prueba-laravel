<?php
/**
 * Created by PhpStorm.
 * User: emmanuelhcpk
 * Date: 13/10/17
 * Time: 3:49 PM
 */

namespace App\Components\Admin\ProcesoOrdenes\GestionAdquisicion;


use App\Components\Admin\ProcesoOrdenes\Estados\ControlEstadosOrden;
use App\Components\Admin\ProcesoOrdenes\Estados\EstadosOrden;
use App\Models\OrdenPago;
use App\Models\RegistroDatabank;

class RespuestaAdquisicion
{
    private function registrarRespuesta(OrdenPago $orden,$envio,$res)
    {
        $respuesta = new RegistroDatabank();
        $respuesta->json_envio = json_encode($envio);
        $respuesta->respuesta = json_encode($res);
        $respuesta->orden_pago_id = $orden->id;
        $respuesta->save();
        return $respuesta;
    }

    public function gestionRespuesta(OrdenPago $orden,$envio,$res)
    {
        $this->registrarRespuesta($orden,$envio,$res);// se registra lo que respondio el databank
        if($res->success){
            $this->setEstado($orden,EstadosOrden::$ID_APROBADA);
        }
        else{
            $this->setEstado($orden,EstadosOrden::$ID_INVALIDA);
        }
        return $res;
    }

    private function setEstado(OrdenPago $orden,$estado_id)
    {
        ControlEstadosOrden::setEstadoOrden($orden,$estado_id);

    }
}