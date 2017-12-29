<?php
/**
 * Created by PhpStorm.
 * User: emmanuelhcpk
 * Date: 5/09/17
 * Time: 9:29 AM
 */

namespace App\Components;


class Response
{
    public function __construct(){
        
        
    }

    public function getError($body,$error='',$codigo=500){
        $response = [
            'error'=>$error,
            'codigo'=>$codigo,
            'success'=>false,
            'object'=>$body
        ];
        return $response;
    }

    public function getSuccess($body,$error='',$codigo=200){
        $response = [
            'error'=>$error,
            'codigo'=>$codigo,
            'success'=>true,
            'object'=>$body
        ];
        return $response;
    }

}