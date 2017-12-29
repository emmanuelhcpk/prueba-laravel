@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Administrador
        </h1>
    </section>
    <div class="col-sm-12">

        <div class="row">
            {!! Form::model($usuario, ['route' => ['gestion-admins.update', $usuario->id], 'method' => 'patch']) !!}

            @include('admins.fields')

            {!! Form::close() !!}
        </div>
    </div>

@endsection