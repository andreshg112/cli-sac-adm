<div id="container3">
    <center>
        <div class="card-panel" style="width:100%;">
            <div class="row center" style="width:90%;">
                <br>
                <label><h2><b>Registrar Encabezados</b></h2></label>
                <br><br>
                <form action="" class="col s12">       
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">library_books</i>
                            <textarea class="materialize-textarea" ng-model="vm.encabezado.titulo"></textarea>
                            <label>Título</label>
                        </div>
                    </div>      
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">library_books</i>
                            <textarea class="materialize-textarea" ng-model="vm.encabezado.descripcion"></textarea>
                            <label>Descripción</label>
                        </div>
                        <div id="lista">
                        </div>
                    </div>
                    <div class="right-align">
                        <a class="waves-effect waves-light btn" style="background-color: #ee6e73;" ng-click="vm.registrar(vm.encabezado);">Guardar</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="waves-effect waves-light btn" style="background-color: #ee6e73;">Cancelar</a>
                    </div>           
                </form>
            </div>
        </div>
    </center>
</div>
<script type="text/javascript">
            $(document).ready(function () {
                $('select').material_select();
            });
</script>