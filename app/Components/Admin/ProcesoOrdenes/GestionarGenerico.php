<?php
/**
 * Created by PhpStorm.
 * User: emmanuelhcpk
 * Date: 13/10/17
 * Time: 3:23 PM
 */

namespace App\Components\Admin\ProcesoOrdenes;


use App\Components\Admin\ProcesoOrdenes\Estados\ControlEstadosOrden;
use App\Models\OrdenPago;
use App\Models\RegistroRequest;

class GestionarGenerico
{

    public function generarTrazabilidad(OrdenPago $orden,$estado_id,$json)
    {
        $request = $this->generarRequest($json);
        $estado = $this->setEstado($orden,$estado_id,$request->id);
        return $estado;
    }

    private function generarRequest($json)
    {
        $request = new RegistroRequest();
        $request->json_request = json_encode($json); //se convierte a string
        $request->save();
        return $request;
        
    }
    
    private function setEstado(OrdenPago $orden,$estado_id,$request_id = null)
    {
        return ControlEstadosOrden::setEstadoOrden($orden,$estado_id,$request_id);
    }
    
}