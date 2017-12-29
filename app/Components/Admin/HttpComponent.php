<?php
/**
 * Created by PhpStorm.
 * User: emmanuelhcpk
 * Date: 19/07/17
 * Time: 7:57 AM
 */

namespace App\Components\Admin;

use App\Models\Rol as RolModel;
use App\Models\Usuario;
use App\Models\Vuelo;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class HttpComponent
{
    protected $client;

    /**
     * @param Client $client
     */
    public function __construct(){

        $this->client = new Client();
        $this->token = env('TOKEN_CANAL');
    }

    public function post($url,$body){
        //dd(json_encode($body));
        try {
            $response = $this->client->post($url, [
                'body' => json_encode($body),
                'headers' => [
                    'Authorization' => "Bearer {$this->token}",
                    'Content-Type' => 'application/json',
                ],
            ]);
            return \GuzzleHttp\json_decode($response->getBody()->getContents());

        }catch (ClientException $exception){
            $response = $exception->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
            return $responseBodyAsString;
        }
        
    }

    public function get($url,$params){
        $response = $this->client->get($url,[
            'headers' => [
                'Authorization' => "Bearer {$this->token}",
                'Content-Type' => 'application/json',
            ],
        ]);
        return $response;
    }

    public function put($url,$body){
        $response = $this->client->post($url,[
            'body' => json_encode($body),
            'headers' => [
                'Authorization' => "Bearer {$this->token}",
                'Content-Type' => 'application/json',
            ],
        ]);
        return $response;
    }

}