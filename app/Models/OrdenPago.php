<?php

namespace App\Models;

use App\Components\Admin\ProcesoOrdenes\Estados\EstadosOrden;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class OrdenPago extends Model
{
    private static $ultimos_estados = "(SELECT `trazabilidads`.`orden_pago_id`, max(`trazabilidads`.`id`) as `id` FROM `trazabilidads` GROUP by `trazabilidads`.`orden_pago_id`) `estados`";

    public static function getOrdenes($mes)
    {
        $base = new Carbon($mes . '/01' . '/2017');
        $desde = $base->toDateString();
        $hasta = $base->addDays(30)->toDateString();
        return OrdenPago::whereDate('created_at', '>=', $desde)
        ->whereDate('created_at', '<=', $hasta)
        ->get();

    }

    public static function getCountUsuarios()
    {
        return OrdenPago::groupBy('numero_celular')->count();
    }
    public static function buscar($texto)
    {
        return OrdenPago::ultimosEstados()->join('prm_estados','trazabilidads.estado_id','prm_estados.id')->where('nombre_usuario', 'LIKE', '%'.$texto.'%')->orWhere('numero_celular', 'LIKE', '%'.$texto.'%')->select('orden_pagos.*','prm_estados.estado')->orderBy('id','DESC')->paginate(20);

    }
    public static function getAll()
    {
        return OrdenPago::ultimosEstados()->join('prm_estados','trazabilidads.estado_id','prm_estados.id')->select('orden_pagos.*','prm_estados.estado')->orderBy('id','DESC')->paginate(20);

    }

    public static function ultimosEstados()
    {
        return OrdenPago::leftJoin(\DB::raw(OrdenPago::$ultimos_estados),'orden_pagos.id','=','estados.orden_pago_id')
            ->join('trazabilidads','estados.id','trazabilidads.id');

    }
    public static function sumarPorColumna($columna)
    {
        return OrdenPago::ultimosEstados()->where('estado_id','=',EstadosOrden::$ID_APROBADA)
            ->sum($columna);
    }
    public static $meses = ['','Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];

    public static function getIntervaloMeses()
    {
        $fin = OrdenPago::orderBy('id','DESC')->first();
        $inicio = OrdenPago::first();
        $period = new \DatePeriod(
            new \DateTime($inicio->created_at),
            new \DateInterval('P1M'),
            new \DateTime($fin->created_at)
        );
        $meses = [];
        foreach ($period as $date) {
            $fecha = new Carbon($date->format('d-m-Y'));
            array_push($meses,['nombre'=>OrdenPago::$meses[$fecha->month].' '.$fecha->year,'numero'=>$fecha->month]);
        }
        return $meses;
    }
}
