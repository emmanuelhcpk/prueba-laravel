(function () {
    'use strict';

    angular.module('ReportesApp', ['reportes.controllers', 'reportes.services', 'ui.router']).config(configFunction);
    configFunction.$inject = ['$stateProvider'];
    function configFunction($stateProvider) {
        $stateProvider
            .state('home', {
                url: '/',
                templateUrl: '/apps/gestion-herramientas/home.html',
                controller: 'HomeController',
                controllerAs: 'vm'
            })
    }

})();