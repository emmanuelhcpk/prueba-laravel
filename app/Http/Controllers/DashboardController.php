<?php

namespace App\Http\Controllers;

use App\Components\Response;

use App\Models\OrdenPago;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $response;
    public function __construct(){
        //$this->middleware('auth');
        $this->response = new Response();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $metricas =
            ['ordenes'=> OrdenPago::all()->count(),
             'usuarios'=> OrdenPago::getCountUsuarios(),
             'valor'=> OrdenPago::sumarPorColumna('valor_total'),
              'comision'=> OrdenPago::sumarPorColumna('valor_comision'),
                ];
        return view('home')->with('metricas',$metricas);
    }


    public function reportes()
    {
        return view('reportes.reporte');
    }
}
