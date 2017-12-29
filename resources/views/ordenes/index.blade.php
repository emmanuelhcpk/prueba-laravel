@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="view-header">

                <div class="pull-right text-right" style="line-height: 14px">
                    <small>Pasarela<br>Gov<br> <span class="c-white">{{env('VERSION')}}</span></small>
                </div>
                <div class="header-icon">
                    <i class="fa fa-users"></i>
                </div>
                <div class="header-title">
                    <h3 class="m-b-xs">Visualización de Ordenes</h3>
                    <small> </small>
                </div>

            </div>
            <hr>
        </div>
        <br>


    </div>

    <br>

    <div class="row">
        @include('ordenes.table')
    </div>

    <div class="content">
        <div class="clearfix"></div>
        {{--          <!-- @include('flash::message') -->
         --}}

        <div class="clearfix"></div>


    </div>
@endsection

