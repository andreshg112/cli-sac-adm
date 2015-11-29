<div id="container3">
    <center>
        <div class="card-panel" style="width:105%;">                         
            <div class="row center" style="width:100%;">     
                <br>
                <!--
                <table class="bordered">
                    <thead>
                        <tr><td></td><th>Áreas:</th><td>     
                                <select ng-model="areaSeleccionada" ng-options="area as area.nomarea for area in areas track by area.CODAREA">
                                </select>
                            </td><th>Filtro</th><td><input type="text"></td></tr>
                    </thead>
                    <thead>
                        <tr>
                            <th data-field="id">Encabezado</th>
                            <th data-field="name">Imagen</th>
                            <th data-field="price">Enunciado</th>
                            <th data-field="id">Imagen_Enunciado</th>
                            <th data-field="name">Opciones</th>
                            <th data-field="price">Modificar</th>
                            <th data-field="price">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                Este es un Encabezado
                                <a class="modal-trigger" ng-click="vm.mostrarModal()" style="cursor: pointer;">Ver más</a>
                            </td>
                            <td><a class="modal-trigger" ng-click="vm.mostrarModal()" style="cursor: pointer;">Imagen</a></td>
                            <td>
                                Enuciado
                                <a class="modal-trigger" ng-click="vm.mostrarModal()" style="cursor: pointer;">Ver más</a>
                            </td>
                            <td><a class="modal-trigger" ng-click="vm.mostrarModal()" style="cursor: pointer;">Imagen_Enunciado</a></td>
                            <td>
                                opciones
                                <a class="modal-trigger" ng-click="vm.mostrarModal()" style="cursor: pointer;">Ver más</a>
                            </td>
                            <td>            
                                <a class="btn-floating btn-large waves-effect waves-light red"><i class="large material-icons">edit</i></a>                     
                            </td>
                            <td>
                                <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">clear</i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Este es un Encabezado
                                <a class="modal-trigger" ng-click="vm.mostrarModal()" style="cursor: pointer;">Ver más</a>
                            </td>
                            <td><a class="modal-trigger" ng-click="vm.mostrarModal()" style="cursor: pointer;">Imagen</a></td>
                            <td>
                                Enuciado
                                <a class="modal-trigger" ng-click="vm.mostrarModal()" style="cursor: pointer;">Ver más</a>
                            </td>
                            <td><a class="modal-trigger" ng-click="vm.mostrarModal()" style="cursor: pointer;">Imagen_Enunciado</a></td>
                            <td>
                                opciones
                                <a class="modal-trigger" ng-click="vm.mostrarModal()" style="cursor: pointer;">Ver más</a>
                            </td>
                            <td>            
                                <a class="btn-floating btn-large waves-effect waves-light red"><i class="large material-icons">edit</i></a>                     
                            </td>
                            <td>
                                <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">clear</i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Este es un Encabezado
                                <a class="modal-trigger" ng-click="vm.mostrarModal()" style="cursor: pointer;">Ver más</a>
                            </td>
                            <td><a class="modal-trigger" ng-click="vm.mostrarModal()" style="cursor: pointer;">Imagen</a></td>
                            <td>
                                Enuciado
                                <a class="modal-trigger" ng-click="vm.mostrarModal()" style="cursor: pointer;">Ver más</a>
                            </td>
                            <td><a class="modal-trigger" ng-click="vm.mostrarModal()" style="cursor: pointer;">Imagen_Enunciado</a></td>
                            <td>
                                opciones
                                <a class="modal-trigger" ng-click="vm.mostrarModal()" style="cursor: pointer;">Ver más</a>
                            </td>
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
                <br>
                <div class="right-align">
                    <a class="waves-effect waves-light btn" href="#/Registro/Preguntas" ng-click="#" style="background-color: #ee6e73;">Registrar</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="waves-effect waves-light btn" href="#"  ng-click="#" style="background-color: #ee6e73;">Cancelar</a>
                </div> 
            </div>
        </div>
    </center>
    <!--una modal de texto-->
    <div id="modalAdd" class="modal">
        <div class="modal-content center-align">    
            <div class="row center-align">
                <div class="input-field col s12" >
                    <i class="material-icons prefix">library_books</i>
                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                    <label>lo que sea</label>
                </div>
            </div>    
        </div>        
        <div class="modal-footer">
            <a ng-click="addCompetencia()" class="modal-action waves-effect waves-green btn-flat">Nuevo</a>
            <a  class="modal-action modal-close waves-effect waves-green btn-flat"  ng-click="mostrarmodal1()">Close</a>
        </div>
    </div>	
    <!--una modal de imagenes-->
    <div id="modalAddImagenes" class="modal">
        <div class="modal-content center-align">   
            <div class="row center-align">
                <div class="input-field col s12" >
                    <i class="material-icons prefix">library_books</i>
                    <input type="text" class="validate" ng-model="newCompetencia.NOM_COMPETENCIA"> 
                    <label>van imagenes</label>       
                </div>
            </div>    
        </div>        
        <div class="modal-footer">
            <a ng-click="addCompetencia()" class="modal-action waves-effect waves-green btn-flat">Registrar</a>
            <a  class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
        </div>
    </div>
    <!--una modal de modificar-->
    <div id="modalAdd" class="modal">
        <div class="modal-content center-align">
            <h4>Modificar</h4>
            <div class="row center-align">
                <div class="input-field col s12" >
                    <i class="material-icons prefix">library_books</i>
                    <input type="text" class="validate" ng-model="newCompetencia.NOM_COMPETENCIA">
                    <label>Competencia</label>
                </div>
            </div>

            <div class="row center-align">
                <div class="input-field col s12">
                    <i class="material-icons prefix">library_books</i>
                    <input type="text" class="validate" ng-model="newCompetencia.CATEGORIA">
                    <label>Categoria</label>
                </div>
            </div>
        </div>        
        <div class="modal-footer">
            <a ng-click="addCompetencia()" class="modal-action waves-effect waves-green btn-flat">Registrar</a>
            <a  class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
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