<div id="container3"> 
    <center>
        <div class="card-panel" style="width:100%;">                         
            <div class="row center" style="width:100%;">
                 <div class="right-align">
                    <a class="waves-effect waves-light btn" href="#/Registro/Areas"  style="background-color: #ee6e73;">Registrar</a>
                </div> 
                <br>  
                <table class="bordered">                   
                    <thead>
                        <tr>
                            <th data-field="id">&Aacute;rea</th>                            
                            <th data-field="price">Modificar</th>
                            <th data-field="price">Eliminar</th>     
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="area in vm.areas">
                            <td>{{area.NOMAREA}}</td>                             
                            <td>
                                <a ng-click="vm.asignarDatos(area);" 
                                   class="modal-trigger btn-floating btn-large waves-effect waves-light red"
                                   onclick="$('#modal1').openModal();">
                                    <i class="large material-icons">edit</i>
                                </a>                     
                            </td>
                            <td>
                                <a ng-click="vm.eliminar(area);" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">clear</i></a>
                            </td>
                        </tr>


                    </tbody>
                </table>  
                <br>
            </div>
        </div>
    </center>
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
                                <label>Área</label>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">library_books</i>
                                    <input ng-model="vm.area.NOMAREA" id="first_name" type="text" class="validate">
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
</div>