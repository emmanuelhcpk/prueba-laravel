<?php


namespace App\Components\Notificacion;

use App\Models\Dispositivo;
use App\Models\OrdenPago;
use Illuminate\Support\Facades\Mail;
use \App\Models\Notificacion as NotificacionModel;
class Notificacion
{
    public static function enviar(OrdenPago $orden,$correo)
    {
        $notificacion = new NotificacionModel();
        $notificacion->orden_pago_id = $orden->id;
        $notificacion->mensaje = $correo->mensaje;
        $notificacion->asunto = $correo->asunto; //se guarda el asunto
        $notificacion->save();
        $correo->id_notificacion = $notificacion->id;
        try{
            Mail::to($orden->correo_electronico)->queue($correo);
        }catch (\Exception $e){
            dd($e);
        };

    }

    public static function getByUsuario($id){
        return NotificacionModel::where('usuario_id','=',$id)->paginate(10);
    }
}