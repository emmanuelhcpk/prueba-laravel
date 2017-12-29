<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notificacion;
use App\Models\OrdenPago;
use App\Models\RegistroDatabank;
use App\Models\Trazabilidad;
use Illuminate\Http\Request;

class OrdenController extends Controller
{
    private $componente;
    public function __construct(){
        //$this->componente = new ReportesComponent();
        //$this->middleware('auth');
    }

    public function buscar(Request $request)
    {
        $texto = $request->get('texto');
        $ordenes = OrdenPago::buscar($texto);
        return view('ordenes.index')->with('ordenes',$ordenes);
    }

    public function index()
    {
        $ordenes = OrdenPago::getAll();
        return view('ordenes.index')->with('ordenes',$ordenes);
    }
    public function show($id)
    {
        $orden = OrdenPago::find($id);
        return view('ordenes.perfil.orden')->with('orden',$orden);
    }

    public function getNotificaciones($id)
    {
        return Notificacion::where('orden_pago_id','=',$id)->get();
    }
    public function getEstados($id)
    {
        return Trazabilidad::getEstados($id);
    }
    public function getRespuestas($id)
    {
        return RegistroDatabank::where('orden_pago_id','=',$id)->get();
    }
    public function getOrdenes($mes)
    {
        return OrdenPago::getOrdenes($mes);
    }
}
