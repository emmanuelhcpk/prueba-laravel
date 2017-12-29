<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trazabilidad extends Model
{
    public static function getEstados($id)
    {
        return Trazabilidad::join('prm_estados','trazabilidads.estado_id','prm_estados.id')
        ->select('trazabilidads.*','prm_estados.estado','prm_estados.definicion')
        ->where('trazabilidads.orden_pago_id','=',$id)
        ->get();
    }
}
