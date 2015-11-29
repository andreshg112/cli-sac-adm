var app = angular.module("app", ["ngRoute", "ngTouch", "ui.grid", "ui.grid.pagination"]);

function controladorPrincipal($http) {
    var vm = this;
    vm.buscaEnRegion = function () {
        $http.get(vm.url).success(
                function (respuesta) {
                    //console.log("res:", respuesta);
                    vm.paises = respuesta;
                }
        );
    };
}