<div id="container3">  
    <form action="" class="col s10">       
      <div class="row">
        <div class="input-field col s10">
          <i class="material-icons prefix">library_books</i>
          <input  id="first_name" type="number" class="validate">
          <label>Identificacion</label>
        </div>
      </div>                
    </form>
    <br>
    <form action="" class="col s10">       
      <div class="row">
        <div class="input-field col s10">
          <table class="striped" border="1">
            <thead>
              <tr>
                <th data-field="id">Preguntas</th>
                <th data-field="name">Correctas</th>
                <th data-field="name">Incorrectas</th>          
              </tr>
            </thead>
            <tbody>
              <tr style="background-color: #f9fbe7;">
                <td>1789</td>
                <td>1000</td>
                <td>789</td>
              </tr>         
            </tbody>
          </table>
        </div>
      </div> 
      <br><br><br>              
    </form> 
  <div id="canvas-holder">
    <canvas id="chart-area3" width="600" height="300"></canvas>
  </div>
</div>
<script src="Chart.js"></script>
<script>
var barChartData = {
  labels : ["MATEMATICAS","QUIMICA","BIOLOGIA","GEOGRAFIA","SOCIALES","ESTADISTICA","FISICA"],
  datasets : [
  {
    fillColor : "#00e676",
    strokeColor : "#ffffff",
    highlightFill: "#1864f2",
    highlightStroke: "#ffffff",
    data : [90,30,10,80,15,5,15]
  },
  {
    fillColor : "#f44336",
    strokeColor : "#ffffff",
    highlightFill : "#ee7f49",
    highlightStroke : "#ffffff",
    data : [40,50,70,40,85,55,15]
  }
  ]

} 
var ctx3 = document.getElementById("chart-area3").getContext("2d");
window.myPie = new Chart(ctx3).Bar(barChartData, {responsive:true});
</script>



