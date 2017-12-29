<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrdenPago;
use Illuminate\Http\Request;

class ReportesController extends Controller
{
    private $componente;
    public function __construct(){

    }

    public function index()
    {
        $meses = OrdenPago::getIntervaloMeses();
        return view('reportes.reporte')->with('meses',$meses);
    }
}
