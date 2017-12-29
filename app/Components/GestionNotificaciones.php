<?php
/**
 * Created by PhpStorm.
 * User: emmanuelhcpk
 * Date: 18/10/17
 * Time: 9:15 AM
 */

namespace App\Components;


use App\Components\Notificacion\Notificacion;
use App\Mail\MailGenerico;
use App\Models\OrdenPago;
use Illuminate\Support\Facades\Mail;

class GestionNotificaciones
{
    public function __construct()
    {
    }

    private function enviar($asunto, $mensaje, OrdenPago $orden)
    {
        $correo = new MailGenerico($asunto, $mensaje);
        Notificacion::enviar($orden, $correo);
    }

    public function enviarExito(OrdenPago $orden)
    {
        $asunto = 'Transacción Exitosa !!!';
        $mensaje = "Hola {$orden->nombre_usuario}, esperamos que tengas un excelente día.
        <br><br>
        Desde la pasarela de pago, nos hemos dado cuenta que haz efectuado una adquisición o recarga de saldo Bc2, por el monto de {$orden->valor_total} y a la cuenta con identificación {$orden->numero_celular}.
        <br><br>
        La transacción fue exitosa y desde este momento, puedes usarlo o transferirlo a tus amigos en toda la red Bc2.
        <br><br>
        Tambien puedes comprar productos o servicios, los cuales puedes encontrar en nuestra página web <a href=’http://bluec2.com/’>bluec2.com</a>.
        <br><br>
        Muchas gracias por estar con nosotros,
        <br><br>
        ";
        $this->enviar($asunto, $mensaje, $orden);
    }

    public function enviarFracaso(OrdenPago $orden)
    {
        $asunto = 'La Transacción  no se ha podido realizar !!!';

        $mensaje = "Hola {$orden->nombre_usuario}, esperamos que tengas un excelente día.
        <br><br>
        Desde la pasarela de pago, nos hemos dado cuenta que haz efectuado una adquisición o recarga de saldo Bc2, por el monto de {$orden->valor_total} y a la cuenta con identificación {$orden->numero_celular}.
        <br><br>
        La transacción no fue exitosa y por lo tanto, tu dinero no se ha movido de su sitio. Puedes volver a intentar recargar saldo desde tu app.
        <br><br>
        Recuerda que con Bc2 puedes comprar productos o servicios, los cuales puedes encontrar en nuestra página web <a href=’http://bluec2.com/’>bluec2.com</a>.
        <br><br>
        Muchas gracias por estar con nosotros,
        <br><br>
        ";
        $this->enviar($asunto, $mensaje, $orden);

    }
}