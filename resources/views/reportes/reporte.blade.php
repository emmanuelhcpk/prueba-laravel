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
                .controller('ReportesController', function ($scope, $http) {

                    $scope.currentPage = 0;
                    $scope.currentPageT = 0;
                    $scope.pageSize = 5;
                    $scope.data = [];
                    $scope.q = '';
                    $scope.ordenes=[];
                    $scope.mes = new Date().getMonth();
                    $scope.numberOfPages=function(){
                        return Math.ceil($scope.ordenes.length/$scope.pageSize);
                    }
                    $scope.descargar = function () {
                        return true;
                        if($scope.mes){
                            window.open(window.location.href+'/excel/'+$scope.mes);
                        }
                    }
                    function getReporte() {
                        $http.get('/ordenes/fecha/' + $scope.mes).then(function (data) {
                            $scope.ordenes = data.data;
                            console.log($scope.ordenes);
                        });
                    }
                    $scope.getReporte = getReporte;


                }).filter('startFrom', function () {
            return function (input, start) {
                start = +start; //parse to int
                return input.slice(start);
            }
        });
    </script>
    <div ng-app='myApp'>
        <div ng-controller='ReportesController'>
            @include( 'reportes.filter')
            <div class="row">
                @include('reportes.ordenes-realizados')
        </div>
    </div>

@endsection
