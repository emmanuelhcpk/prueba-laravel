@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="view-header">
                <div class="pull-right text-right" style="line-height: 14px">
                    <small>Pasarela<br>Gov<br> <span class="c-white">{{env('VERSION')}}</span></small>
                </div>
                <div class="header-icon">
                    <i class="fa fa-briefcase"></i>
                </div>
                <div class="header-title">
                    <h3 class="m-b-xs">Pasarela - Administración</h3>
                    <small> Gestion de Usuario de administración </small>
                </div>
            </div>
            <hr>
        </div>
    </div>
    <div class="row">
        <h1 class="pull-right">
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('gestion-admins.create') !!}">Agregar Usuario Administrador</a>

        </h1>

                    @include('admins.table')
            </div>

@endsection

