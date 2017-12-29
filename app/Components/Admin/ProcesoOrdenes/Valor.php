<?php
/**
 * Created by PhpStorm.
 * User: emmanuelhcpk
 * Date: 18/10/17
 * Time: 10:55 AM
 */

namespace App\Components\Admin\ProcesoOrdenes;


class Valor
{
    public function getValorComision($valor) //valor que cobra payu
    {
        $comision = $valor*(floatval(env('COSTO_PORCENTAJE'))/100);
        $total = $comision+floatval(env('COSTO_FIJO'));
        return $total;
    }
    public function getValorTotal($valor)
    {
        return $valor-$this->getValorAsumido($valor);
    }
    public function getValorAsumido($valor)//valor q asume el usuario
    {
        return $this->getValorComision($valor)*(1-floatval(env('PORCENTAJE_ASUMIDO')));

    }
    public function getValorAsumidoCoin($valor)//valor q asume coin
    {
        return $this->getValorComision($valor)*floatval(env('PORCENTAJE_ASUMIDO'));
    }

}