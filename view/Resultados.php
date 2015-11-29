<div id="container3"> 
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



