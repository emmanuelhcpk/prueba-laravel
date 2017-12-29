@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="text-center">
            Creacion de usuarios Administradores
        </h1>
    </section>

                <div class="row">
                    {!! Form::open(['route' => 'gestion-admins.store']) !!}

                        @include('admins.fields')

                    {!! Form::close() !!}
                </div>
@endsection
