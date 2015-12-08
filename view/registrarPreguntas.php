<div id="container3">
    <center>
        <div class="card-panel" style="width:100%;">                         
            <div class="row center" style="width:90%;">
                <br>
                <label><h2><b>Registrar Preguntas</b></h2></label>
                <br><br>  
                <div class="row">
                    <div class="input-field col s6">
                        <h6>¿Con Encabezado?</h6>
                    </div>
                    <div class="input-field col s6">
                        <div class="switch">
                            <label>
                                Off
                                <input type="checkbox" id="switch" onchange="mostrarModalRegistro()" ng-model="eso">
                                <span class="lever"></span>
                                On
                            </label>
                        </div>      
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">library_books</i>
                        <textarea class="materialize-textarea" ng-model="vm.encabezadoSeleccionado.TITULO"></textarea>
                        <label>Encabezado</label>
                    </div>
                </div>  
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">library_books</i>
                        <textarea class="materialize-textarea" ng-model="vm.pregunta.enunciado"></textarea>
                        <label>Enunciado</label>
                    </div>
                </div>
                <label>Área:</label>
                <div class="row">
                    <div class="input-field col s6">
                        <select class="browser-default" ng-model="vm.pregunta.codarea" ng-options="area.CODAREA as area.NOMAREA for area in vm.areas track by area.CODAREA">
                        </select>
                    </div>
                </div>
                <label>Tipo Opciones</label>
                <div class="row">              
                    <div class="input-field col s6">
                        <select class="browser-default" ng-model="vm.pregunta.tipo_opciones">
                            <option value="TEXTO">Texto</option>
                            <option value="IMAGEN"> Imagen</option>                                        </select>       
                    </div>
                    <div class="input-field col s6">                
                        <select class="browser-default" ng-model="vm.num_opciones" ng-change="vm.variarOpciones();">
                            <option ng-repeat="option in [3, 4, 5, 6, 7]">{{option}}</option>
                        </select>
                    </div>
                </div>
                <br><br>
                <div class="row" ng-repeat="opcion in vm.inputOpciones">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">library_books</i>
                        <input type="text" ng-model="vm.pregunta.opciones[$index].descripcion">
                       <label class="left-align">Opción {{opcion}}</label>
                    </div>
                    <div class="input-field col s6">
                        <form action="#">
                            <p>
                                <input type="checkbox" id="check{{opcion}}" ng-model="vm.pregunta.opciones[$index].validez" ng-true-value="'CORRECTA'" ng-false-value="'INCORRECTA'"/>
                                <label for="check{{opcion}}">.</label>
                            </p>
                        </form>
                    </div>
                </div>
                <!-- check-box  -->
                <br><br>
                <div class="right-align">
                    <a ng-click="vm.mostrar(vm.pregunta);
                                vm.registrar(vm.pregunta);" class="waves-effect waves-light btn" style="background-color: #ee6e73;">Guardar</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="waves-effect waves-light btn" style="background-color: #ee6e73;">Cancelar</a>
                </div>
            </div>
        </div>
    </center>
    <!-- otra modal-->

    <div id="modalen" class="modal">
        <div class="modal-content center-align">
            <label>hola </label>
            <input type="text">
        </div>                   
        <br>              
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Aceptar</a>
            <a href="#" class="modal-action modal-close waves-effect waves-green btn-flat ">Nuevo</a>
            <a  class="modal-action modal-close waves-effect waves-green btn-flat"  ng-click="mostrarmodal1()">Close</a>
        </div>
    </div>

    <div id="modalAddEncabezados" class="modal">
        <div class="modal-content center-align">
            <center>
                <div class="card-panel" style="width:100%;">                                           <div class="row center" style="width:90%;">          
                        <label><h2><b>Encabezados</b></h2></label>
                        <br>
                        <!--
                        <table class="bordered">
                            <thead>
                                <tr>     
                                    <th>Filtro</th><td><input type="text"></td>
                                    <td></td>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th data-field="id">Nombre</th>
                                    <th data-field="name">Descripcion</th> 
                                    <th data-field="id">Imagen</th>              
                                    <th data-field="name">Seleccionado</th> 
                                    <th data-field="price">Modificar</th>
                                    <th data-field="price">Eliminar</th>    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Encabezado</td>     
                                    <td>Este es un encabezado</td> 
                                    <td>Imagen</td>     
                                    <td>Si</td>      
                                    <td>            
                                        <a class="btn-floating btn-large waves-effect waves-light red"><i class="large material-icons">edit</i></a>                     
                                    </td>
                                    <td>
                                        <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">clear</i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Encabezado</td>     
                                    <td>Este es un encabezado</td> 
                                    <td>Imagen</td>     
                                    <td>Si</td>      
                                    <td>            
                                        <a class="btn-floating btn-large waves-effect waves-light red"><i class="large material-icons">edit</i></a>                     
                                    </td>
                                    <td>
                                        <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">clear</i></a>
                                    </td>
                                </tr>  
                            </tbody>
                        </table>   
                        -->
                        <div ui-grid="vm.gridOptions" ui-grid-pagination></div>
                    </div>
                    <br>              
                    <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Aceptar</a>
                        <a  href="#/Gestionar/Encabezados" class="modal-action modal-close waves-effect waves-green btn-flat ">Nuevo</a>
                        <a  class="modal-action modal-close waves-effect waves-green btn-flat"  ng-click="mostrarmodal1()">Close</a>
                    </div>
                </div>
            </center>
        </div>
        <!--   fin modal -->
    </div>
</div>
<script type="text/javascript">
            $(document).ready(function () {
                $('select').material_select();
            });
</script>
<script>
            function mostrarmodal1() {
                $("#modalAddEncabezados").fadeOut();
            }
</script>
<script>
            function mostrarModalRegistro() {
                if ($("#switch").is(':checked')) {
                    $("#modalAddEncabezados").openModal();
                } else {
                    $("#modalAddEncabezados").closeModal();
                }
                ;
            }
</script>
