<?php
/**
 * Created by PhpStorm.
 * User: emmanuelhcpk
 * Date: 20/07/17
 * Time: 9:49 PM
 */

namespace App\Components\Admin;


class Validacion //reglas de negocio
{
    public function valido($keys, $campos)
    { // verifica campos obligatorios$
        foreach ($keys as $key) {
            if (!isset($campos[$key])) {
                return false;
            }
        }
        return true;
    }
}