<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailGenerico extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $mensaje;
    public $asunto;
    public $id_notificacion;
    public function __construct($asunto,$mensaje){
        $this->mensaje = $mensaje;
        $this->asunto = $asunto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){
        $fecha = \Carbon\Carbon::now();
        $fecha = $fecha->toDateTimeString();
        return $this->from('info@movapp.co')->subject('Notificación #'.$this->id_notificacion.' '.$this->asunto)->view('emails.generico');
    }
}
