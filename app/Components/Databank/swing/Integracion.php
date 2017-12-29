<?php
namespace App\Components\Databank\swing;
use App\Components\Admin\HttpComponent;

/**
 * Created by PhpStorm.
 * User: emmanuelhcpk
 * Date: 1/08/17
 * Time: 2:49 PM
 */
class Integracion{

    public static function getPin(){ //simulando la llamada a la api databank
        $digits = 4;
        $pin = str_pad(rand(0, pow(10, $digits) - 1), $digits, '0', STR_PAD_LEFT);
        return strval($pin);
    }
    private $baseURl;
    private $http;

    public function __construct(){

        $this->baseURl = env('DATABANK_URL');
        $this->http = new HttpComponent();
    }

    public function hacerAdquisicion($movimiento){

        $url = $this->baseURl.$this->adquisicion;
        return $this->http->post($url,$movimiento);
    }

    public function hacerTransferencia($movimiento){

        $url = $this->baseURl.$this->transferencia;
        return $this->http->post($url,$movimiento);
    }
    
    public function hacerUso($movimiento){

        $url = $this->baseURl.$this->uso;
        return $this->http->post($url,$movimiento);
        
    }
    public function hacerPenalidad($movimiento){

        $url = $this->baseURl.$this->penalidades;
        return $this->http->post($url,$movimiento);

    }

    private $adquisicion = 'swing/GestionOperacionAdquisicion';// 'post'
    private $transferencia = 'swing/GestionOperacionTransferencia';// 'post'
    private $uso = 'swing/GestionOperacionUso'; //'post'
    private $penalidades = 'swing/GestionOperacionPenalidades'; //'post'
}