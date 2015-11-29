<div id="container3">
  <center>
    <div class="card-panel" style="width:100%;">                         
      <div class="row center" style="width:90%;">
        <br>
        <label><h2><b>Registrar Áreas</b></h2></label>
        <br><br>
        <form action="" class="col s12">       
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">library_books</i>
              <input  id="first_name" type="text" class="validate">
              <label>Codigo</label>
            </div>
          </div>      
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">library_books</i>
              <input  id="first_name" type="text" class="validate">
              <label>Área</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">library_books</i>
              <input  id="first_name" type="text" class="validate">
              <label>Categoria</label>
            </div>
          </div> 
        </div> 
        <br><br>
        <div class="right-align">
          <a class="waves-effect waves-light btn" href="#" ng-click="#" style="background-color: #ee6e73;">Guardar</a>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a class="waves-effect waves-light btn" href="#"  ng-click="#" style="background-color: #ee6e73;">Cancelar</a>
        </div>           
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