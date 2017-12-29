<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-filled">
            <div class="panel-heading">
                <div class="panel-tools">
                    <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                    <a class="panel-close"><i class="fa fa-times"></i></a>
                </div>
                Filtre para generar el reporte interesado
            </div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-lg-4">
                        <p>
                            Seleccione el periodo de evaluación respectivo
                        </p>
                    </div>
                    <div class="col-lg-2">
                        <p>

                        </p>
                    </div>
                    <div class="col-lg-4">
                        <table>
                            <tr>
                                {{--<td>    <a href="" class="btn btn-w-md btn-warning">Generar impresión</a></td>--}}
                                <td><a href="" ng-click="descargar()" class="btn btn-w-md btn-success">Tabular
                                        información en excel</a></td>
                            </tr>
                        </table>


                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-8">
                        <form class="form">
                            <select class="select2_demo_1 form-control select2-hidden-accessible" style="width: 100%"
                                    tabindex="-1" aria-hidden="true" ng-model="mes">
                                @foreach($meses as $mes)
                                    <option value="{{$mes['numero']}}">{{$mes['nombre']}}</option>
                                @endforeach
                            </select>
                        </form>
                    </div>
                    <div class="col-sm-4">
                        <div class="btn btn-info" ng-click="getReporte()"> Buscar</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>