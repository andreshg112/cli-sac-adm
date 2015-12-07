//Las propiedades/campos que se reciben de la base de datos, vienen en mayúsculas.
//Es decir, los campos de las tablas (propiedades de los objetos)
//deben usarse de la siguiente manera: objeto.PROPIEDAD

app.controller('gestionPreguntasCtrl', ['servicioPreguntas', 'servicioAreas', function (servicioPreguntas, servicioAreas) {
        console.log("gestionPreguntasCtrl");
        var vm = this;
        vm.preguntas = [];
        vm.areas = [];
        vm.areaSeleccionada = null;
        vm.pregunta = {};
//        vm.codpregunta="";
//        vm.filtro="";
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
        
        vm.eliminar = function (pregunta) {
            console.log(pregunta);
            var promise = servicioPreguntas.delete(pregunta.CODPREGUNTA);
            promise.then(
                    function (pl) {
                        var respuesta = pl.data;
                        alert(respuesta.mensaje);
                        if (respuesta.result) {
                            vm.loadPreguntas();
                        }
                    },
                    function (errorPl) {
                        console.log('Error: ', errorPl);
                    }
            );
        };
        vm.asignarDatos = function (pregunta) {
            //Se asignan los datos para la modificación.
            vm.pregunta = pregunta;
            vm.codpregunta = pregunta.CODPREGUNTA;
        };
        vm.modificar = function () {
            var promise = servicioPreguntas.put(vm.codpregunta, vm.pregunta);
            promise.then(
                    function (pl) {
                        var respuesta = pl.data;
                        console.log(respuesta);
                        alert(respuesta.mensaje);
                        if (respuesta.result) {
                            $('#modal1').closeModal();
                            vm.loadPreguntas();
                        }
                    },
                    function (errorPl) {
                        console.log('Error en la solicitud: ', errorPl);
                    });
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
        vm.area={};
        vm.codarea = "";
        vm.filtro = "";
        function cargarAreas() {
            var promiseGet = servicioAreas.getAll(vm.filtro);
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
        vm.eliminar = function (area) {
            console.log(area);
            var promise = servicioAreas.delete(area.CODAREA);
            promise.then(
                    function (pl) {
                        var respuesta = pl.data;
                        alert(respuesta.mensaje);
                        if (respuesta.result) {
                            vm.cargarAreas();
                        }
                    },
                    function (errorPl) {
                        console.log('Error: ', errorPl);
                    }
            );
        };
        vm.asignarDatos = function (area) {
            //Se asignan los datos para la modificación.
            vm.area = area;
            vm.codarea = area.CODAREA;
        };
        vm.modificar = function () {
            var promise = servicioAreas.put(vm.codarea, vm.area);
            promise.then(
                    function (pl) {
                        var respuesta = pl.data;
                        console.log(respuesta);
                        alert(respuesta.mensaje);
                        if (respuesta.result) {
                            $('#modal1').closeModal();
                            vm.cargarAreas();
                        }
                    },
                    function (errorPl) {
                        console.log('Error en la solicitud: ', errorPl);
                    });
        };
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
        vm.usuario = {}; //Representa al usuario que se seleccione para modificar
        vm.email = ""; //El email de quien se va a modificar
        vm.usuarios = [];
        vm.filtro = "";
        vm.cargarUsuarios = function () {
            vm.usuarios = [];
            var promiseGet = servicioUsuarios.getAll(vm.filtro);
            promiseGet.then(
                    function (pl) {
                        console.log(pl);
                        var respuesta = pl.data;
                        vm.usuarios = respuesta.usuarios;
                        console.log(vm.usuarios);
                    },
                    function (errorPl) {
                        console.log('Error: ', errorPl);
                    }
            );
        };
        vm.cargarUsuarios();
        vm.eliminar = function (usuario) {
            console.log(usuario);
            var promise = servicioUsuarios.delete(usuario.EMAIL);
            promise.then(
                    function (pl) {
                        var respuesta = pl.data;
                        alert(respuesta.mensaje);
                        if (respuesta.result) {
                            vm.cargarUsuarios();
                        }
                    },
                    function (errorPl) {
                        console.log('Error: ', errorPl);
                    }
            );
        };
        vm.asignarDatos = function (usuario) {
            //Se asignan los datos para la modificación.
            vm.usuario = usuario;
            vm.email = usuario.EMAIL;
        };
        vm.modificar = function () {
            var promise = servicioUsuarios.put(vm.email, vm.usuario);
            promise.then(
                    function (pl) {
                        var respuesta = pl.data;
                        console.log(respuesta);
                        alert(respuesta.mensaje);
                        if (respuesta.result) {
                            $('#modal1').closeModal();
                            vm.cargarUsuarios();
                        }
                    },
                    function (errorPl) {
                        console.log('Error en la solicitud: ', errorPl);
                    });
        };
    }]);

app.controller('registroUsuariosCtrl', ['servicioUsuarios', function (servicioUsuarios) {
        var vm = this;
        vm.usuarios = {
        };
        vm.NOMBRE = [];
        vm.APELLIDO = [];
        vm.EMAIL = [];
        vm.CONTRASENIA = [];
        vm.SEXO = [];
        vm.registrar = function (usuario) {
            var promisePost = servicioUsuarios.post(usuario);
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
