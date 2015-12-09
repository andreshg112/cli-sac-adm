<div id="container3"> 
<!--  <div id="canvas-holder">
    <canvas id="chart-area3" width="600" height="300"></canvas>
  </div>-->
<form action="" class="col s10">       
      <div class="row">
        <div class="input-field col s10">
          <table class="striped" border="1">
            <caption>Resultados por área</caption>
            <thead>
                <tr>
                    <th>Área</th>
                    <th>Correctas</th>
                    <th>Incorrectas</th>
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat="resultado in vm.resultados">
                    <td>{{resultado.NOMAREA}}</td>
                    <td>{{resultado.CORRECTAS}}</td>
                    <td>{{resultado.INCORRECTAS}}</td>
                </tr>
            </tbody>
        </table>
        </div>
      </div> 
      <br><br><br>              
    </form> 
</div>
 <script src="Chart.js"></script>