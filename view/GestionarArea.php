<div id="container3"> 
    <center>
        <div class="card-panel" style="width:100%;">                         
            <div class="row center" style="width:100%;">      
                <br><br>  
                <table class="bordered">                   
                    <thead>
                        <tr>
                            <th data-field="id">&Aacute;rea</th>                            
                            <th data-field="price">Modificar</th>
                            <th data-field="price">Eliminar</th>     
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="area in vm.areas | filter:filtro">
                            <td>{{area.NOMAREA}}</td>                  
                            <td>            
                                <a class="btn-floating btn-large waves-effect waves-light red"><i class="large material-icons">edit</i></a>                     
                            </td>
                            <td>
                                <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">clear</i></a>
                            </td>
                        </tr>


                    </tbody>
                </table>  
                <br>
                <div class="right-align">
                    <a class="waves-effect waves-light btn" href="#/Registro/Areas"  style="background-color: #ee6e73;">Registrar</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="waves-effect waves-light btn"  style="background-color: #ee6e73;">Cancelar</a>
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


