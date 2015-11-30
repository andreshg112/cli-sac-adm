var app = angular.module("app", ["ngRoute", "ngTouch", "ui.grid", "ui.grid.pagination"]);
app.config(["$routeProvider",
    function ($routeProvider) {
        $routeProvider
                .when('/', {
                    templateUrl: 'view/principal.php',
                    controller: "competenciasController",
                    controllerAs: "vm"
                })
                .when('/Gestionar/Preguntas', {
                    templateUrl: 'view/gestionar.php',
                    controller: 'gestionPreguntasCtrl',
                    controllerAs: "vm"
                })
                .when('/Registro/Preguntas', {
                    templateUrl: 'view/registrarPreguntas.php',
                    controller: 'registroPreguntasCtrl',
                    controllerAs: "vm"
                })
                .when('/Gestionar/Usuarios', {
                    templateUrl: 'view/GestionarUsuarios.php',
                    controller: 'competenciasController',
                    controllerAs: "vm"
                })
                .when('/Gestionar/Area', {
                    templateUrl: 'view/GestionarArea.php',
                    controller: 'competenciasController',
                    controllerAs: "vm"
                })
                .when('/Gestionar/Resultados_generales', {
                    templateUrl: 'view/resultados.php',
                    controller: 'competenciasController',
                    controllerAs: "vm"
                })
                .when('/Gestionar/Resultados_especificos', {
                    templateUrl: 'view/resultadoEsp.php',
                    controller: 'competenciasController',
                    controllerAs: "vm"
                })
                .when('/Gestionar/Principal', {
                    templateUrl: 'view/principal.php',
                    controller: 'competenciasController',
                    controllerAs: "vm"
                })
                .when('/Gestionar/Preguntasimu', {
                    templateUrl: 'view/preguntas.php',
                    controller: 'competenciasController',
                    controllerAs: "vm"
                })
                .when('/Gestionar/Encabezados', {
                    templateUrl: 'view/registrarEncabezados.php',
                    controller: 'competenciasController',
                    controllerAs: "vm"
                })
                .when('/Registro/Areas', {
                    templateUrl: 'view/RegistrarAreas.php',
                    controller: 'competenciasController',
                    controllerAs: "vm"
                });
    }]);
