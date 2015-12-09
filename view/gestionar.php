<div id="container3">
    <center>
        <div class="card-panel" style="width:105%;">                         
            <div class="row center" style="width:100%;">     
                <br>
                <div class="right-align">
                    <a class="waves-effect waves-light btn" href="#/Registro/Preguntas" style="background-color: #ee6e73;">Registrar</a>
                </div>
                <div class="row">
                    <div class="col s6">
                        <div class="col s3">Filtro:</div>
                        <div class="col s9"><input type="text"></div>
                    </div>
                </div>
                <table class="bordered">
                    <tr>
                        <!--<th data-field="id">Encabezado</th>-->
                        <!--<th data-field="name">Imagen</th>-->
                        <th data-field="price">Enunciado</th>
                        <!--<th data-field="id">Imagen_Enunciado</th>-->
                        <th data-field="name">Opciones</th>
                        <th data-field="price">Modificar</th>
                        <th data-field="price">Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="pregunta in vm.preguntas">
<!--                            <td>
                                <div class="text">
                                {{pregunta.encabezado.TITULO}}
                                 </div>
                            </td>-->
                            <!--<td><a class="modal-trigger" ng-click="vm.mostrarModal()" style="cursor: pointer;">Imagen</a></td>-->
                            <td>
                                <div class="text">
                                    {{pregunta.ENUNCIADO}}...
                                </div>
                            </td>
                            <!--<td><a class="modal-trigger" ng-click="vm.mostrarModal()" style="cursor: pointer;">Imagen_Enunciado</a></td>-->
                            <td>
                                <a class="modal-trigger" ng-click="vm.mostrarModal()" style="cursor: pointer;" onclick="$('#modal2').openModal();">Ver más</a>
                            </td>
                            <td>
                                <a ng-click="vm.asignarDatos(pregunta);" 
                                   class="modal-trigger btn-floating btn-large waves-effect waves-light red"
                                   onclick="$('#modal1').openModal();">
                                    <i class="large material-icons">edit</i>
                                </a>                     
                            </td>
                            <td>
                                <a ng-click="vm.eliminar(pregunta);" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">clear</i></a>
                            </td>
                        </tr>               
                    </tbody>
                </table>

                <!--div ui-grid="vm.gridOptions" ui-grid-pagination></div-->
                <br>
            </div>
        </div>
    </center>
    <!--una modal de texto-->
    <div id="modal1" class="modal modal-fixed-footer">
        <div class="modal-content">
            <center>
                <div class="card-panel" style="width:100%;">                         
                    <div class="row center" style="width:80%;">
                        <br>
                        <label><h2><b>Actualización de datos</b></h2></label>
                        <br><br>					
                        <form>
                            <div class="row">
                                <label>Enunciado</label>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">library_books</i>
                                    <textarea  ng-model="vm.pregunta.ENUNCIADO" id="first_name" type="text" class="validate"></textarea>
                                </div>
                            </div>  
                            <div class="row" ng-repeat="opcion in vm.pregunta.opciones">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">library_books</i>
                                    <input type="text" ng-model="opcion.DESCRIPCION">
                                </div>
                            </div>
                        </form>
                        <br><br>
                    </div>
                </div>
            </center>
        </div>
        <div class="modal-footer">
            <button ng-click="vm.modificar()" class="btn pink">Guardar</button>
        </div>
    </div>

    <!-- modal opciones-->
    <div id="modal2" class="modal modal-fixed-footer">
        <div class="modal-content">
            <center>
                <div class="card-panel" style="width:100%;">                         
                    <div class="row center" style="width:80%;">
                        <br>
                        <label><h2><b>Opciones</b></h2></label>
                        <br><br>					
                        <form>
                            <div class="row center" style="width:70%;" ng-repeat="opcion in vm.pregunta.opciones">                   
                                <center>
                                    <label>{{opcion.DESCRIPCION}}</label>
                                </center>
                            </div>
                        </form>
                        <br><br>
                    </div>
                </div>
            </center>
        </div>
    </div>
</div>
<script type="text/javascript">
            $(document).ready(function () {
                $('.modal-trigger').leanModal();
                $('select').material_select();
            });
</script>
<script>
            function mostrarmodal1() {
                $("#modalAddImagenes").fadeOut();
            }
</script>