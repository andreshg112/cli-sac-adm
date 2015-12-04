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
                        <tr ng-repeat="area in vm.areas| filter:filtro">
                            <td>{{area.NOMAREA}}</td>  
                            <td>
                                <p>                                    
                                    <a data-ng-click="edit(contact)" href="javascript:;">Edit</a> |
                                    <a data-ng-click="showconfirm(contact)" href="javascript:;">Delete</a>
                                </p>
                            </td>
                            <!--td>            
                                <a class="btn-floating btn-large waves-effect waves-light red"  ng-click="vm.modificar(usuario)"><i class="large material-icons">edit</i></a>                     
                            </td>
                            <td>
                                <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">clear</i></a>
                            </td-->
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
    <!--modal-->
    <div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                    <h4 class="modal-title" id="myModalLabel" ng-hide="editMode">Add Contacto</h4>
                    <h4 class="modal-title" id="H1" ng-show="editMode">Edit Contacto</h4>
                </div>
                <div class="modal-body">

                    <form class="form-horizontal" role="form">

                        <div class="form-group">

                            <label for="Id" class="col-sm-3 control-label">Id</label>
                            <div class="col-sm-9">
                                <input type="text" id="Id" name="Id" ng-model="Contact.Id" class="form-control" readonly="true" />
                            </div>

                            <label for="Name" class="col-sm-3 control-label">Nombre</label>
                            <div class="col-sm-9">
                                <input type="text" id="Name" name="Nombre" ng-model="Contact.Nombre" class="form-control" />
                            </div>

                            <label for="Id" class="col-sm-3 control-label">Telefono</label>
                            <div class="col-sm-9">
                                <input type="text" id="telefono" name="Telefono" ng-model="Contact.Telefono" class="form-control" />
                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="col-sm-offset-3 col-sm-9">

                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel" ng-click="cancel()" />

                        <span data-ng-hide="editMode">
                            <input type="submit" value="Add" data-ng-click="add()" class="btn btn-primary" />
                        </span>
                        <span data-ng-show="editMode">
                            <input type="submit" value="Update" data-ng-click="update()" class="btn btn-primary" />
                        </span>
                    </div>
                </div>
            </div>
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


