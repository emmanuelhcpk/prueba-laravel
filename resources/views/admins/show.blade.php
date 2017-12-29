@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Administrador
        </h1>
    </section>

                <div class="row" style="padding-left: 20px">
                    @include('admins.show_fields')
                    <a href="{!! route('gestion-admins.index') !!}" class="btn btn-default">Atras</a>
                </div>

@endsection
