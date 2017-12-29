<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    public static function getNotificacionesByUsuario($id){
        return Notificacion::where('usuario_id','=',$id)
            ->orderBy('id', 'desc')
            ->get();

    }
}
