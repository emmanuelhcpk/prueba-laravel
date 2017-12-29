<?php
/**
 * Created by PhpStorm.
 * User: emmanuelhcpk
 * Date: 26/08/17
 * Time: 2:45 PM
 */

namespace App\Components\Databank\swing;


use App\Components\Admin\GestionReportes\Util;

class MovimientoUtil
{

    public static function createMovimientoDto($orden,$operacion,$pin=null,$descripcion=null)
    {

        return ["movimientoTransaccion" => [
            "usuarioOrigen" => env('USUARIO_ORIGEN'),
            "usuarioDestino" => $orden->numero_celular,
            "canal" => env('CANAL_ID'),
            "notas" => "notas",
            "detalles" => "detalles",
            "valor_correspondiente" =>$orden->valor_total,//$orden->valor_compra-$orden->valor_asumido_usuario,
            "descripcion_movimiento" => $descripcion,
            "ip_origen" => Util::getIp(),
            "referencia_dispositivo" => env('REFERENCIA_DISPOSITIVO'),
            "tokenUsuarioOrigen" => env('TOKEN_ORIGEN'),
            "PIN" => $pin,
            "concepto" => "Viaje Movapp",
            "operacion" => $operacion,
            "stakeholders" => []
            ]
        ];
    }

}