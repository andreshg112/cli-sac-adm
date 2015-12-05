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
                        <tr ng-repeat="area in vm.areas">
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


