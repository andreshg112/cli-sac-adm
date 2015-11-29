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
              <textarea class="materialize-textarea" ng-model="encabezado"></textarea>
              <label>Nombre</label>
            </div>
          </div>      
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">library_books</i>
              <textarea class="materialize-textarea" ng-model="enunciado"></textarea>
              <label>Descripción</label>
            </div>



            <div id="lista">

            </div>


          </div>
         <!-- <label class="left-align">Área:</label>-->
          <div class="row">
            <div class="input-field col s6">
             <select name="TipoEncabezado">
              <option value="0" disabled selected>Seleccionar Área</option>
              <option value="areaUno">Area 1 </option>
              <option value="areaDos">Area 2</option>
              <option value="areaTres">Area 3 </option>
            </select>       
          </div>
        </div> 
        <div class="right-align">
          <a class="waves-effect waves-light btn" href="#" ng-click="#" style="background-color: #ee6e73;">Guardar</a>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a class="waves-effect waves-light btn" href="#"  ng-click="#" style="background-color: #ee6e73;">Cancelar</a>
        </div>           
      </form>         
    </form>
  </div>
</div>
</center>
</div>
<script type="text/javascript">
$(document).ready(function(){        
  $('select').material_select();
});
</script>