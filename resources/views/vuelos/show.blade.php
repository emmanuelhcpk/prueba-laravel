@extends('layouts.app')

@section('content')
    <div class="row">
        <section class="content-header">
            <h1>
                Vuelo Referencia : {{$vuelo->referencia}}
            </h1>
        </section>
    </div>
    <div class="row ">
        @include('vuelos.show_fields')

    </div>
@endsection
