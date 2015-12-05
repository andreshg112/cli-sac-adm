<div id="container3"> 
    <center>
        <div class="card-panel" style="width:105%;">                         
            <div class="row center" style="width:100%;">     
                <br> 
                <table class="bordered">
                    <thead>
                        <tr><td></td>     
                            <th>Filtro:</th><td><input type="text" ng-model="vm.filtro" ng-change="vm.cargarUsuarios()"></td></tr>
                    </thead>
                    <thead>
                        <tr>
                            <th data-field="id">Nombres</th>
                            <th data-field="name">Apellidos</th>
                            <th data-field="price">Email</th>
                            <th data-field="name">Sexo</th>
                            <th data-field="price">Modificar</th>
                            <th data-field="price">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="usuario in vm.usuarios">
                            <td>
                                {{usuario.NOMBRE}}
                            </td>
                            <td>
                                {{usuario.APELLIDO}}
                            <td>
                                {{usuario.EMAIL}}
                            </td>
                            <td>
                                {{usuario.SEXO}}
                            </td>
                            <td>
                                <a ng-click="vm.asignarDatos(usuario);" 
                                   class="modal-trigger btn-floating btn-large waves-effect waves-light red"
                                   onclick="$('#modal1').openModal();">
                                    <i class="large material-icons">edit</i>
                                </a>                     
                            </td>
                            <td>
                                <a ng-click="vm.eliminar(usuario);" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">clear</i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <!-- falta la paginacion-->
            </div>
        </div>
    </center>
    <!--una modal de texto-->
    <!--    <div id="modalAdd" class="modal">
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
        </div>-->
    <!--una modal de imagenes-->
    <!--    <div id="modalAddImagenes" class="modal">
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
        </div>-->
    <!--una modal de modificar-->
    <!--    <div id="modalAdd" class="modal">
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
        </div>-->

    <!-- esta es la modal que estoy haciendo-->
    <!-- Modal Trigger -->
    <!--    <a class="modal-trigger waves-effect waves-light btn" href="#modal1">Modal</a>-->

    <!-- Modal Structure -->
    <div id="modal1" class="modal modal-fixed-footer">
        <div class="modal-content">
            <center>
                <div class="card-panel" style="width:70%;">                         
                    <div class="row center" style="width:80%;">
                        <br>
                        <label><h2><b>Actualización de datos</b></h2></label>
                        <br><br>					
                        <form>
                            <div class="row">
                                <label>Nombres</label>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">library_books</i>
                                    <input ng-model="vm.usuario.NOMBRE" id="first_name" type="text" class="validate">
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">library_books</i>
                                    <input ng-model="vm.usuario.APELLIDO" id="first_name" type="text" class="validate">
                                    <label>Apellidos</label>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">library_books</i>
                                    <input ng-model="vm.usuario.EMAIL" id="first_name" type="text" class="validate">
                                    <label>Email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">library_books</i>
                                    <input ng-model="vm.usuario.CONTRASENIA" id="password" type="password" class="validate">
                                    <label>Contraseña</label>
                                </div>
                            </div>
                            <div class="left-align">
                                <label>Sexo:</label>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <select ng-model="vm.usuario.SEXO" class="browser-default">
                                        <option value="F">F</option>
                                        <option value="M">M</option>
                                    </select>
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

    <!--aqui termina la modal que estoy haciendo-->
</div>