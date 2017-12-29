<!-- Id Field -->
<style>
    img {
        max-height: 300px;
    }
</style>
<div class="col-md-12">
    <div class="panel panel-filled">

        <div class="panel-body">

            <div class="row">
                <div class="col-md-6">
                    <h4>Conductor del Viaje</h4>
                    <div class="media">
                            @if(isset($vuelo->conductor)&&isset($vuelo->conductor->fotografia))
                            <a href="{!! route('gestion-usuarios.show',$vuelo->conductor->id) !!}">

                                <img alt="image" class="img-rounded image-lg"
                                     src="{!! $vuelo->conductor->fotografia !!}">
                            </a>

                            @else
                                <img alt="image" class="img-rounded image-lg"
                                     src="{{url('conductor.png')}}">
                            @endif

                        @if(isset($vuelo->conductor))
                            <h2 class="m-t-xs m-b-none">{!! $vuelo->conductor->nombres !!}</h2>
                            <small> {!! $vuelo->conductor->correo_electronico !!} |
                                +57 {!! $vuelo->conductor->numero_telefono !!}
                                <br> <span

                                        class="label label-success pull-left">{{$vuelo->conductor->rol}}</span>
                            </small>
                            <small>
                                Placa : {{$vuelo->placa}}
                            </small>
                            @else
                                <h2 class="m-t-xs m-b-none">Sin Conductor Asignado</h2>
                        @endif

                    </div>

                </div>

                <div class="col-md-3 m-t-sm">
                    <span class="c-white"> Contacto directo </span> <br>
                    <small> Enviar
                        un email por el panel de administración
                    </small>
                    @if(isset($vuelo->conductor))
                    <div class="btn-group m-t-sm">
                        <a href="#" class="btn btn-default btn-sm"><i
                                    class="fa fa-envelope"></i> Enviar email ahora!</a> <a
                                href="mailto:{!! $vuelo->conductor->correo_electronico !!}"
                                class="btn btn-default btn-sm"><i class="fa fa-check"></i> LLamar
                            al +57 {!! $vuelo->conductor->numero_telefono !!}</a>
                    </div>
                    @endif

                </div>


            </div>
        </div>
    </div>
</div>
<br>
<div class="col-sm-12">
    <div class="panel panel-filled">

        <div class="panel-body">

            <h4>Pasajeros del viaje</h4>
            @foreach($vuelo->pasajeros as $pasajero)
                <div class="media">
                    <a href="{!! route('gestion-usuarios.show',$pasajero->usuario_pasajero_id) !!}">

                    @if(isset($pasajero->fotografia))

                        <img alt="image" class="img-rounded image-lg"
                             src="{!! $pasajero->fotografia !!}">
                    @else
                        <img alt="image" class="img-rounded image-lg"
                             src="{{url('pasajero.png')}}">
                    @endif
                    <h2 class="m-t-xs m-b-none">{!! $pasajero->nombre !!}</h2>
                    <small> {!! $pasajero->correo_electronico !!} | +57 {!! $pasajero->numero_telefono !!}
                        <br> <span

                                class="label label-success pull-left">{{$pasajero->rol}}</span>
                    </small>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="col-sm-12">
    <div class="panel panel-filled">
        <div class="panel-body">

            <h4>Datos generales del viaje:</h4>
            <div class="form-group col-sm-4">
                {!! Form::label('id', 'Referencia:') !!}
                <p>{!! $vuelo->referencia !!}</p>
            </div>

            <div class="form-group col-sm-4">
                {!! Form::label('id', 'Direccion inicio:') !!}
                <p>{!! $vuelo->direccion_inicio !!}</p>
            </div>

            <div class="form-group col-sm-4">
                {!! Form::label('id', 'Latitud inicial:') !!}
                <p>{!! $vuelo->direccion_inicio !!}</p>

            </div>

            <div class="form-group col-sm-4">
                {!! Form::label('id', 'Longitud inicial:') !!}
                <p>{!! $vuelo->latitud_inicio !!}</p>

            </div>
            <div class="form-group col-sm-4">
                {!! Form::label('id', 'Direccion final:') !!}
                <p>{!! $vuelo->direccion_final !!}</p>
            </div>

            <div class="form-group col-sm-4">
                {!! Form::label('id', 'Latitud final:') !!}
                <p>{!! $vuelo->direccion_final !!}</p>

            </div>

            <div class="form-group col-sm-4">
                {!! Form::label('id', 'Longitud final:') !!}
                <p>{!! $vuelo->latitud_final !!}</p>

            </div>
            <div class="form-group col-sm-4">
                {!! Form::label('id', 'Hora salida:') !!}
                <p>{!! $vuelo->hora_salida !!}</p>

            </div>
            <div class="form-group col-sm-4">
                {!! Form::label('id', 'Costo:') !!}
                <p>{!! $vuelo->costo_aplicado !!}</p>
            </div>

            <div class="form-group col-sm-4">
                {!! Form::label('id', 'fecha:') !!}
                <p>{!! $vuelo->created_at !!}</p>
            </div>


        </div>
    </div>
</div>