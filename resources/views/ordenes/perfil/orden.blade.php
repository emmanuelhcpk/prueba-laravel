@extends('layouts.app')

@section('content')
    <script src="{{url('bower_components/angular/angular.js')}}"></script>
    <script src="{{url('bower_components/d3/d3.js')}}"></script>
    <script src="{{url('bower_components/nvd3/build/nv.d3.js')}}"></script> <!-- or use another assembly -->
    <script src="{{url('bower_components/angular-nvd3/dist/angular-nvd3.js')}}"></script>
    <script>
        angular.module('myApp', ['nvd3'], function ($interpolateProvider) {
                    $interpolateProvider.startSymbol('[[');
                    $interpolateProvider.endSymbol(']]');
                })
                .controller('OrdenController', function ($scope, $http) {

                    var pathArray = window.location.pathname.split('/');
                    $scope.id = pathArray[pathArray.length-1]; //id del usuario
                    $scope.currentPageEstados = 0;
                    $scope.currentPageRespuestas = 0;
                    $scope.currentPageNotificaciones = 0;
                    $scope.pageSize = 5;
                    $scope.estados = [];
                    $scope.notificaciones = [];
                    $scope.respuestas = [];
                    $scope.q = '';
                    $scope.mes = new Date().getMonth();
                    $scope.numberOfPages = function (array) {
                        return Math.ceil(array.length / $scope.pageSize);
                    }

                    $scope.getInfo = function () {
                        $http.get('/ordenes/estados/' + $scope.id).then(function (data) {
                            $scope.estados = data.data;
                        });
                        $http.get('/ordenes/notificaciones/' + $scope.id).then(function (data) {
                            $scope.notificaciones = data.data;
                        });
                        $http.get('/ordenes/respuestas/' + $scope.id).then(function (data) {
                            $scope.respuestas = data.data;
                        });
                    }
                    $scope.getInfo();

                }).filter('startFrom', function () {
            return function (input, start) {
                start = +start; //parse to int
                return input.slice(start);
            }
        });
    </script>

    <div ng-app='myApp'>
        <div ng-controller='OrdenController'>
            @include('ordenes.perfil.headProfile')


            <div class="row">
                <div class="col-md-6">
                    @include('ordenes.perfil.estados')
                    <br>
                    @include('ordenes.perfil.notificaciones')

                </div>
                <div class="col-md-6">
                    @include('ordenes.perfil.respuestas')
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection