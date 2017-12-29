<?php
/**
 * Created by PhpStorm.
 * User: emmanuelhcpk
 * Date: 19/07/17
 * Time: 7:57 AM
 */

namespace App\Components\Admin;


use App\Components\Admin\ProcesoOrdenes\OrdenConfirmada\GestionConfirmacion;
use App\Components\Admin\ProcesoOrdenes\OrdenRechazada\GestionRechazo;
use App\Components\Admin\ProcesoOrdenes\Valor;
use App\Components\GestionNotificaciones;
use App\Components\Response;
use App\Models\OrdenPago;
use App\Models\RegistroRequest;
use Carbon\Carbon;

class OrdenComponent
{

    private $response;
    private $rechazo;
    private $confirmacion;
    private $costos;
    public function __construct(Response $response)
    {
        $notificar = new GestionNotificaciones();
        $this->response = $response;
        $this->rechazo = new GestionRechazo($notificar);
        $this->confirmacion = new GestionConfirmacion($notificar);
        $this->costos = new Valor();
    }

    public function callback($campos)
    {

        $reg = new RegistroRequest();
        $reg->json_request = json_encode($campos);
        $reg->save();
        $orden = $this->crearOrden($campos);
        if($campos['state_pol'] == '4'){ //aprobada
            $this->confirmacion->gestionar($orden,$campos);
        }elseif ($campos['state_pol'] == '5' ||$campos['state_pol'] == '6' ||$campos['state_pol'] == '7'){ //fue rechazada
            $this->rechazo->gestionar($orden,$campos);
        }
        
    }

    private function crearOrden($campos)
    {
        $orden = new OrdenPago();
        $user = str_replace("'",'"',$campos['extra1']);
        $usuario = \GuzzleHttp\json_decode($user);
        $orden->numero_celular = $usuario->celular;
        $orden->correo_electronico = $usuario->email;
        $orden->nombre_usuario = $usuario->nombre;
        $valor = $campos['value'];
        $orden->valor_compra = $valor;
        $orden->valor_comision = $this->costos->getValorComision($valor);
        $orden->valor_total = $this->costos->getValorTotal($valor);
        $orden->valor_asumido_usuario = $this->costos->getValorAsumido($valor);
        $orden->valor_asumido_coin = $this->costos->getValorAsumidoCoin($valor);
        $orden->identificador = $campos['reference_sale'];
        $orden->save();
        return $orden;

    //
    }

    
}