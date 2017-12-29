<?php

namespace App\Http\Controllers\Admin;

use App\Components\Admin\OrdenComponent;
use App\Components\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdquirirController extends Controller
{
    private $componente;
    private $response;
    public function __construct(){
        $this->response = new Response();
        $this->componente = new OrdenComponent($this->response);

    }

    public function callback(Request $request)
    {
        $this->componente->callback($request->all());
        response()->json('Operación Exitosa',200);
    }
}
