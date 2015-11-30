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
                        <textarea class="materialize-textarea" ng-model="vm.pregunta.encabezado"></textarea>
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
                        <select ng-model="vm.areaSeleccionada" ng-options="area.CODAREA as area.NOMAREA for area in vm.areas">
                        </select>
                    </div>
                </div>
                <label>Tipo Opciones</label>
                <div class="row">              
                    <div class="input-field col s6">
                        <select name="TipoEncabezado">
                            <option value="texto" disabled selected>Texto</option>                            <option value="imagen"> Imagen</option>                     
                        </select>       
                    </div>             
                    <div class="input-field col s6">                
                        <select name="TipoEncabezado">
                            <option value="0" disabled selected>Seleccionar Cantidad</option>
                            <option value="uno"> 1 </option>
                            <option value="dos"> 2 </option>
                            <option value="tres"> 3 </option>
                            <option value="cuatro"> 4 </option>
                            <option value="cinco"> 5 </option>
                            <option value="sexto"> 6 </option>
                            <option value="siete"> 7 </option>
                        </select>       
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">library_books</i>
                        <input  id="first_name" type="text" >
                        <label>Opcion</label>       
                    </div>             
                    <div class="input-field col s6">                
                        <form action="#">
                            <p>
                                <input type="checkbox" id="test5" />
                                <label for="test5">.</label>
                            </p>
                        </form>      
                    </div>
                </div>
                <div class="row">              
                    <div class="input-field col s6">
                        <i class="material-icons prefix">library_books</i>
                        <input  id="first_name1" type="text" >
                        <label>Opcion</label>       
                    </div>             
                    <div class="input-field col s6">                
                        <form action="#">
                            <p>
                                <input type="checkbox" id="test6" />
                                <label for="test6">.</label>
                            </p>
                        </form>      
                    </div>
                </div>
                <!-- check-box  -->                    
                <br><br>
                <div class="right-align">
                    <a class="waves-effect waves-light btn" href="#" style="background-color: #ee6e73;">Guardar</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="waves-effect waves-light btn" href="#" style="background-color: #ee6e73;">Cancelar</a>
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
                <div class="card-panel" style="width:100%;">                         
                    <div class="row center" style="width:90%;">          
                        <label><h2><b>Encabezados</b></h2></label>
                        <br>
                        <table class="bordered">
                            <thead>
                                <tr>     
                                    </div></td><th>Filtro</th><td><input type="text"></td>
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
