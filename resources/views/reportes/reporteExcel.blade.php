<div>
    <div>
  
        <div class="row">
            <div class="col-sm-12 ">
                <div class="col-md-12">
                    <h3>Resumen</h3>
                    <div class="row">


                        <div class="col-md-12">
                            <div class="panel panel-filled">
                                <div class="panel-heading">
                                    <div class="panel-tools">
                                        <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a> <a
                                                class="panel-close"><i class="fa fa-times"></i></a>
                                    </div>
                                    Viajes realizados
                                </div>
                                <div class="panel-body">
                                    <p></p>
                                    <div class="table-responsive">

                                        <div id="tableExample2_wrapper"
                                             class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="dataTables_length" id="tableExample2_length">
                                                        <label>Mostrar <select name="tableExample2_length"
                                                                               aria-controls="tableExample2" class="form-control input-sm"><option
                                                                        value="6">6</option>
                                                                <option value="25">25</option>
                                                                <option value="50">50</option>
                                                                <option value="-1">All</option></select> Operaciones
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div id="tableExample2_filter" class="dataTables_filter">
                                                        <label>Buscar por:<input ng-model="filtro" type="search"
                                                                                 class="form-control input-sm" placeholder=""
                                                                                 aria-controls="tableExample2"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <table id="tableExample2"
                                                   class="table table-striped table-hover dataTable no-footer"
                                                   role="grid" aria-describedby="tableExample2_info">
                                                <thead>
                                                <tr role="row">
                                                    <th>Id</th>
                                                    <th>Referencia</th>
                                                    <th>Celular</th>
                                                    <th >Nombres</th>
                                                    <th>Lugar inicio</th>
                                                    <th>Lugar destino</th>
                                                    <th >Hora de Llegada</th>
                                                    <th >Estado</th>
                                                    <th >Costo</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($vuelos as $vuelo)
                                                <tr role="row" class="odd" >
                                                    <td>{{ $vuelo->id }}</td>
                                                    <td>{{ $vuelo->referencia }}</td>
                                                    <td>{{ $vuelo->numero_telefono }}</td>
                                                    <td>{{ $vuelo->nombres }} {{$vuelo->apellidos}}</td>
                                                    <td>{{ $vuelo->direccion_inicio }}</td>
                                                    <td>{{ $vuelo->direccion_final }}</td>
                                                    <td>{{ $vuelo->hora_salida }}</td>
                                                    <td>{{ $vuelo->estado }}</td>
                                                    <td>{{ $vuelo->costo_aplicado}}</td>
                                                </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <div class="row">
                                                <div class="col-sm-10">
                                                    <div class="dataTables_info" id="tableExample2_info"
                                                         role="status" aria-live="polite">Mostrando 1 entrada de 100</div>
                                                </div>
                                                <center>

                                                </center>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>                </div>
            </div>
        </div>
    </div>
</div>


