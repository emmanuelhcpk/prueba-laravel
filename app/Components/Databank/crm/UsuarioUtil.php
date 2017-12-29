<?php
/**
 * Created by PhpStorm.
 * User=> emmanuelhcpk
 * Date=> 26/08/17
 * Time=> 10=>49 AM
 */

namespace App\Components\Databank\crm;


class UsuarioUtil
{

    public static function create360Dto($usuario, $can = false)
    {
        $canal = [];
        if ($can) {
            $canal = [
                'usuario' => $usuario['numero_telefono'],
                'canal' => env('CANAL_ID'),
                'correo_corporativo' => $usuario['correo_electronico'],
            ];
        }
        return ["usuario" => [
            "datos_generales" => $usuario,
            "direcciones" => [

            ],
            "canales" => $canal

            ,
            "movimientos" => [

            ]
        ]];

    }

    public static function createDto($usuario)
    {

        return [];
    }

}