


app.controller('competenciasController', function(){
	var barChartData = {
  labels : ["LECT. CRITICA","MATEMATICAS","C. NATURALES","C. SOCIALES","INGES","COMP. CIUDADANA","FISICA"],
  datasets : [
  {
    fillColor : "#00e676",
    strokeColor : "#ffffff",
    highlightFill: "#1864f2",
    highlightStroke: "#ffffff",
    data : [100,30,10,80,15,5,15]
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
});