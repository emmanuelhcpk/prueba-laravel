@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="view-header">
                    <div class="pull-right text-right" style="line-height: 14px">
                        <small>Canal Pasarela<br>Admin<br> <span class="c-white">{{env('VERSION')}}</span></small>
                    </div>
                    <div class="header-icon" style="margin-right: 10px;">
                        <i class="fa fa-bar-chart"></i>
                    </div>
                    <div class="header-title">
                        <h3 class="m-b-xs">Pasarela de pagos y adquisciones</h3>
                        <small> Se visualiza la diversa información referente a las ordenes de compra de puntos coins</small>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-xs-6">
                <div class="panel panel-filled">

                    <div class="panel-body">
                        <h3 class="m-b-none">
                            {!! $metricas['ordenes'] !!}
                        </h3>
                        <div class="small">Numero de ordenes de compra </div>


                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xs-6">
                <div class="panel panel-filled">
                    <div class="panel-body">
                        <h3 class="m-b-none">
                            {!! $metricas['usuarios'] !!}
                        </h3>
                        <div class="small">Cantidad de usuarios que han realizado recargas </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xs-6">
                <div class="panel panel-filled">
                    <div class="panel-body">
                        <h3 class="m-b-none">
                            ${!! number_format($metricas['valor'],2)!!}
                        </h3> <h5>COP</h5>
                        <div class="small">Cantidad o valor en pesos de las recargas</div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xs-6">
                <div class="panel panel-filled">
                    <div class="panel-body">
                        <h3 class="m-b-none">
                            ${!! number_format($metricas['comision'],2) !!}
                        </h3> <h5>COP</h5>
                        <div class="small">Valor Total de las comisiones de la pasarela</div>

                    </div>
                </div>
            </div>
@endsection
