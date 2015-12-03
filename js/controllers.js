app.controller('gestionPreguntasCtrl', ['servicioPreguntas', 'servicioAreas', function (servicioPreguntas, servicioAreas) {
        console.log("gestionPreguntasCtrl");
        var vm = this;
        vm.preguntas = [];
        vm.areas = [];
        vm.areaSeleccionada = null;
        vm.pregunta = {};
        vm.mostrar = function (algo) {
            if (algo === undefined) {
                algo = "";
            }
            console.log(algo);
        };
        function cargarAreas() {
            var promiseGet = servicioAreas.getAll();
            promiseGet.then(
                    function (pl) {
                        console.log(pl);
                        var respuesta = pl.data;
                        vm.areas = respuesta.areas;
                        console.log(vm.areas);
                        //vm.gridOptions1.data = vm.areas;
                    },
                    function (errorPl) {
                        console.log('Error: ');
                        console.log(errorPl);
                    }
            );
        }
        cargarAreas();
        function loadPreguntas() {
            var promiseGet = servicioPreguntas.getAll();
            promiseGet.then(
                    function (pl) {
                        console.log(pl);
                        var respuesta = pl.data;
                        vm.preguntas = respuesta.preguntas;
                        vm.gridOptions.data = vm.preguntas;
                    },
                    function (errorPl) {
                        console.log('Error: ');
                        console.log(errorPl);
                    }
            );
        }
        loadPreguntas();
        vm.gridOptions = {
            paginationPageSizes: [10, 20, 30],
            paginationPageSize: 10,
            columnDefs: [
                {name: "Encabezado", field: "encabezado.DESCRIPCION"},
                {
                    name: "Imagen de encabezado",
                    cellTemplate: '<a href="">Ver imagen{{ row.entity.CODPREGUNTA }}</a>'
                },
                {name: "Enunciado", field: "ENUNCIADO"},
                {
                    name: "Imagen de enunciado"
                },
                {
                    name: "Opciones",
                    cellTemplate: '<a href="">Ver opciones {{row.entity.CODPREGUNTA}}</a>'
                }
            ],
            data: vm.preguntas
        };
    }]);

app.controller('registroPreguntasCtrl', ['servicioPreguntas', 'servicioAreas', 'servicioEncabezados', function (servicioPreguntas, servicioAreas, servicioEncabezados) {
        var vm = this;
        vm.pregunta = {
            opciones: []
        };
        vm.encabezadoSeleccionado = {};
        vm.areas = [];
        vm.encabezados = [];
        vm.opciones = [];
        vm.num_opciones = 4;
        vm.inputOpciones = [];
        vm.variarOpciones = function () {
            vm.inputOpciones = [];
            for (var i = 1; i <= vm.num_opciones; i++) {
                vm.inputOpciones.push(i);
            }
        };
        vm.registrar = function (pregunta) {
            var promisePost = servicioPreguntas.post(pregunta);
            vm.mostrar(promisePost);
            promisePost.then(
                    function (pl) {
                        var respuesta = pl.data;
                        console.log(respuesta);
                        alert(respuesta.mensaje);
                    },
                    function (errorPl) {
                        console.log('Error: ');
                        console.log(errorPl);
                    });
        };
        function cargarAreas() {
            var promiseGet = servicioAreas.getAll();
            promiseGet.then(
                    function (pl) {
                        console.log(pl);
                        var respuesta = pl.data;
                        vm.areas = respuesta.areas;
                        //vm.gridOptions1.data = vm.areas;
                    },
                    function (errorPl) {
                        console.log('Error: ');
                        console.log(errorPl);
                    }
            );
        }
        cargarAreas();
        vm.mostrar = function (algo) {
            if (algo === undefined) {
                algo = "";
            }
            console.log(algo);
        };
        function cargarEncabezados() {
            var promiseGet = servicioEncabezados.getAll();
            promiseGet.then(
                    function (pl) {
                        console.log(pl);
                        var respuesta = pl.data;
                        vm.encabezados = respuesta.encabezados;
                        vm.gridOptions.data = vm.encabezados;
                    },
                    function (errorPl) {
                        console.log('Error: ');
                        console.log(errorPl);
                    }
            );
        }
        cargarEncabezados();
        vm.gridOptions = {
            paginationPageSizes: [10, 20, 30],
            paginationPageSize: 10,
            columnDefs: [
                {name: "Título", field: "TITULO"},
                {name: "Descripción", field: "DESCRIPCION"},
                {
                    name: "Selección",
                    cellTemplate: '<button ng-click="vm.setIdEncabezado({{row.entity.ID_ENCABEZADO }})">Seleccionar</button>'
                },
            ],
            data: vm.encabezados
        };
        vm.setIdEncabezado = function (id_encabezado) {
            vm.pregunta.ID_ENCABEZADO = id_encabezado;
        }
    }]);

app.controller('registroEncabezadosCtrl', ['servicioEncabezados', 'servicioAreas', function (servicioEncabezados, servicioAreas) {
        var vm = this;
        vm.encabezado = {
        };
        vm.areas = [];
        vm.registrar = function (registro) {
            var promisePost = servicioEncabezados.post(registro);
            vm.mostrar(promisePost);
            promisePost.then(
                    function (pl) {
                        var respuesta = pl.data;
                        console.log(respuesta);
                        alert(respuesta.mensaje);
                    },
                    function (errorPl) {
                        console.log('Error: ');
                        console.log(errorPl);
                    });
        };
        function cargarAreas() {
            var promiseGet = servicioAreas.getAll();
            promiseGet.then(
                    function (pl) {
                        console.log(pl);
                        var respuesta = pl.data;
                        vm.areas = respuesta.areas;
                        //vm.gridOptions1.data = vm.areas;
                    },
                    function (errorPl) {
                        console.log('Error: ');
                        console.log(errorPl);
                    }
            );
        }
        cargarAreas();
        vm.mostrar = function (algo) {
            if (algo === undefined) {
                algo = "";
            }
            console.log(algo);
        };
    }]);

app.controller('gestionarAreasCtrl', ['servicioAreas', function (servicioAreas) {
        console.log("gestionarAreasCtrl");
        var vm = this;
        vm.areas = [];
        function cargarAreas() {
            var promiseGet = servicioAreas.getAll();
            promiseGet.then(
                    function (pl) {
                        console.log(pl);
                        var respuesta = pl.data;
                        vm.areas = respuesta.areas;
                        console.log(vm.areas);
                        //vm.gridOptions1.data = vm.areas;
                    },
                    function (errorPl) {
                        console.log('Error: ');
                        console.log(errorPl);
                    }
            );
        }
        cargarAreas();
    }]);

app.controller('registroAreasCtrl', ['servicioAreas', function (servicioAreas) {
        var vm = this;
        vm.areas = {
        };
        vm.NOMAREA = [];
        vm.registrar = function (areas) {
            var promisePost = servicioAreas.post(areas);
            vm.mostrar(promisePost);
            promisePost.then(
                    function (pl) {
                        var respuesta = pl.data;
                        console.log(respuesta);
                        alert(respuesta.mensaje);
                    },
                    function (errorPl) {
                        console.log('Error: ');
                        console.log(errorPl);
                    });
        };
        vm.mostrar = function (algo) {
            if (algo === undefined) {
                algo = "";
            }
            console.log(algo);
        };
    }]);


app.controller('gestionarUsuariosCtrl', ['servicioUsuarios', function (servicioUsuarios) {
        console.log("gestionarUsuariosCtrl");
        var vm = this;
        vm.usuarios = [];
        function cargarUsuarios() {
            var promiseGet = servicioUsuarios.getAll();
            promiseGet.then(
                    function (pl) {
                        console.log(pl);
                        var respuesta = pl.data;
                        vm.usuarios = respuesta.usuarios;
                        console.log(vm.usuarios);
                        //vm.gridOptions1.data = vm.areas;
                    },
                    function (errorPl) {
                        console.log('Error: ');
                        console.log(errorPl);
                    }
            );
        }
        cargarUsuarios();
    }]);