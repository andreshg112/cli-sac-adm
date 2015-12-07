<div id="container3">
    <center>
        <div class="card-panel" style="width:100%;">                         
            <div class="row center" style="width:80%;">
                <br>
                <label><h2><b>Registrar Usuarios</b></h2></label>
                <br><br>                    
                <form>                        
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">library_books</i>
                            <input  id="first_name" type="text" class="validate" ng-model="vm.usuario.NOMBRE">
                            <label>Nombres</label>
                        </div>
                    </div>  
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">library_books</i>
                            <input  id="first_name" type="text" class="validate" ng-model="vm.usuario.APELLIDO">
                            <label>Apellidos</label>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">library_books</i>
                            <input  id="first_name" type="text" class="validate" ng-model="vm.usuario.EMAIL">
                            <label>Email</label>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">library_books</i>
                            <input id="password" type="password" class="validate" ng-model="password" ng-model="vm.usuario.CONTRASENIA">        
                            <label>Password</label>
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
                    <br><br> <br><br>
                    <div class="right-align">
                        <a ng-click="vm.mostrar(vm.usuario);
                             vm.registrar(vm.usuario);" class="waves-effect waves-light btn" style="background-color: #ee6e73;">Guardar</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="waves-effect waves-light btn"    style="background-color: #ee6e73;">Cancelar</a>
                    </div>  
                </form>
            </div>
            <br>                 
        </div>
    </center>
</div>
<script type="text/javascript">
            $(document).ready(function () {
                $('select').material_select();
            });
</script>