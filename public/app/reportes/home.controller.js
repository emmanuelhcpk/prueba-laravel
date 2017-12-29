/**
 * Created by Mac on 12/12/16.
 */
(function () {
    'use strict';

    angular
        .module('reportes.controllers')
        .controller('HomeController', HomeController);

    HomeController.$inject = ['Frame', '$rootScope', 'ProyectoCache', 'HerramientaApi', 'ProyectoApi', 'BodegaApi', '$stateParams', '$state'];
    function HomeController(Frame, $rootScope, ProyectoCache, HerramientaApi, ProyectoApi, BodegaApi, $stateParams, $state) {
        var vm = this;
        vm.go = $state.go
        vm.bodegas = []
        vm.proyectos = []
        vm.newHerramienta = {}
        //funciones
        vm.addTag = addTag
        vm.removeTag = removeTag
        vm.guardar = guardar
        vm.actualizar = actualizar
        vm.eliminar = eliminar
        vm.ubicacion = ubicacion
        vm.editarModal = editarModal
        vm.editarModalAbstractas = editarModalAbstractas
        vm.herramientaPadre = herramientaPadre
        Frame.remove();
        vm.newTag = '';
        //event listeners
        activate();
        ////////////////
        function activate() {

            HerramientaApi.getAll().then(function (herramientas) {
                vm.herramientas = herramientas;
                vm.herramientasAbstractas = vm.herramientas.filter(function (herr) {
                    return herr.value.simulador == true
                })
            })

            ProyectoApi.getAll().then(function (proyectos) {
                vm.proyectos = proyectos
            })

            BodegaApi.getAll().then(function (bodegas) {
                vm.bodegas = bodegas
            })

        }

        function herramientaPadre(id) {
            var herramienta = vm.herramientasAbstractas.filter(function (herr) {
                return herr.value._id == id
            })
            if (herramienta.length > 0) {
                return herramienta[0].value
            }

        }

        function ubicacion(herramienta) {
            if (herramienta.id_bodega) {
                var res = vm.bodegas.filter(function (bodega) {
                    return bodega.value._id = herramienta.id_bodega
                })
                if (res.length > 0) {
                    return res[0].value
                }
            } else if (herramienta.id_proyecto) {
                var res = vm.proyectos.filter(function (proyecto) {
                    return proyecto.value._id = herramienta.id_proyecto
                })
                if (res.length > 0) {
                    return res[0].value
                }
            }


        }

        function addTag(herramienta, tag) {

            if (herramienta.hasOwnProperty('tags')) {
                herramienta.tags.push(tag)
            }
            else {
                herramienta.tags = []
                herramienta.tags.push(tag)
            }
            vm.newTag = '';
        }

        function removeTag(herramienta, tag) {
            var indice = herramienta.tags.indexOf(tag)
            herramienta.tags.splice(indice, 1)
        }

        function guardar(simulador) {// recibe de parametro si al herramienta es abstracta o no
            Frame.add()
            console.log
            vm.newHerramienta.document_type = 'herramientas'
            vm.newHerramienta.simulador = simulador
            HerramientaApi.save(vm.newHerramienta).then(function (data) {
                vm.newHerramienta._id = data.id
                vm.newHerramienta._rev = data.rev
                vm.herramientas.push({value: vm.newHerramienta})
                angular.element('#newHerramientaAbstracta').modal('hide');
                angular.element('#newHerramienta').modal('hide');
                Frame.remove()
                vm.newHerramienta = {}
            })

        }

        function actualizar() {
            Frame.add()
            HerramientaApi.update(vm.updateHerramienta).then(function (data) {
                vm.updateHerramienta._rev = data.rev
                angular.element('#editarHerramienta').modal('hide');
                Frame.remove()
            })


        }

        function eliminar() {
            Frame.add()
            HerramientaApi.delete(vm.deleteHerramienta).then(function (data) {
                Frame.remove()
            })

        }

        function editarModal(herr) {
            vm.updateHerramienta = herr
            angular.element('#editarHerramienta').modal('show');
        }

        function editarModalAbstractas(herr) {
            vm.updateHerramienta = herr
            angular.element('#editHerramientaAbstracta').modal('show');
        }

    }
})();