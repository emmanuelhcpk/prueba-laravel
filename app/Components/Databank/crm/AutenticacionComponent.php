<?php
namespace App\Components\Databank\crm;
use App\Components\Admin\HttpComponent;

/**
 * Created by PhpStorm.
 * User: emmanuelhcpk
 * Date: 1/08/17
 * Time: 2:49 PM
 */
class AutenticacionComponent{

    private $baseURl;
    private $http;

    public function __construct(){
        $this->baseURl = env('DATABANK_URL');
        $this->http = new HttpComponent();
    }

    public function getInformacionUsuario($usuario){
        $url = $this->baseURl.$this->obtener;
        return $this->http->post($url,$usuario);
    }

    public function getInformacion360Usuario($usuario){
        $url = $this->baseURl.$this->obtener360;
        return $this->http->post($url,$usuario);
    }

    public function registrarUsuario($usuario){
        $url = $this->baseURl.$this->registrar;
        return $this->http->post($url,$usuario);

    }
    public function actualizar($usuario){
        $url = $this->baseURl.$this->actualizar;
        return $this->http->post($url,$usuario);

    }
    public function actualizarDirecciones($usuario){
        $url = $this->baseURl.$this->actualizarDirecciones;
        return $this->http->post($url,$usuario);

    }
    public function registrarCanal($usuario){
        $url = $this->baseURl.$this->registrarCanal;
        return $this->http->post($url,$usuario);

    }
    public function asociadoCanal($usuario){ //me dice si un usuario esta asociado al canal
        $url = $this->baseURl.$this->asociadoCanal;
        return $this->http->post($url,$usuario);

    }

    private $obtener = 'crm/getInformacionUsuario';// 'post'
    private $obtener360 = 'crm/getInformacion360Usuario';// 'post'
    private $registrar = 'crm/registrarUsuario'; //'post'
    private $actualizar = 'crm/actualizarInformacionBasicaUsuario'; //'post'
    private $actualizarDirecciones = 'crm/actualizarDireccionesUsuario'; //'post'
    private $asociadoCanal = 'crm/usuarioAsociadoCanal'; //'post'
    private $registrarCanal = 'crm/registrarUsuarioACanal'; //'post'

}