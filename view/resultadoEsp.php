<div id="container3">  
    <form action="" class="col s10">       
        <div class="row">
            <div class="input-field col s3">
                <label style="color:#000;">Buscar Usuario</label>
            </div>
            <div class="input-field col s6"> 
                <input ng-model="vm.filtro" ng-change="vm.cargarUsuarios();" id="first_name" type="text" class="validate" style="color:#000;">
            </div>
        </div> 

        <div class="row">
            <div class="input-field col s3">
                <label style="color:#000;">Usuario Seleccionado</label>
            </div>
            <div class="input-field col s6"> 

                <li class="collection-item left-align" ng-repeat="usuario in vm.usuarios">
                    <label ng-click="vm.almacenarEnSesion(usuario)" style="cursor: pointer;"><h6>{{usuario.NOMBRE + " " + usuario.APELLIDO}}</h6></label>
                     <div class="right-align">
                <a onclick="$('#modal1').openModal();" ng-click="vm.cargarResultadosEspecificos();" class="modal-trigger waves-effect waves-light btn"  style="background-color: #ee6e73;">Seleccionar</a>
            </div>
                </li>

            </div>
           
        </div> 

    </form>
    <br>
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
                        <tr ng-repeat="resultado in vm.resultadoespecifico">
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
    <!--    <div id="canvas-holder">
            <canvas id="chart-area3" width="600" height="300"></canvas>
        </div>-->
    <div id="modal1" class="modal modal-fixed-footer">
        <div class="modal-content">
            <h4>{{vm.retoSeleccionado.NOMRETO}}</h4>
            <!--<p>A bunch of text</p>-->
            <table class="centered">
                <thead>
                    <tr>
                        <th>Area</th>
                        <th>Correctas</th>
                        <th>Incorrectas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="resultadoespecifico in vm.resultadoespecifico">
                        <td>{{resultadoespecifico.NOMAREA}}</td>
                        <td>{{resultadoespecifico.CORRECTAS}}</td>
                        <td>{{resultadoespecifico.INCORRECTAS}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
            <button ng-if="vm.tipoReto === 'responde'" 
                    class="modal-action modal-close waves-effect waves-blue btn light-blue" ng-click="vm.continuarReto()"
                    onclick="$('#modal1').closeModal();">Continuar</button>
        </div>
    </div>
</div>
<script src="Chart.js"></script>
<!--<script>
                                        var barChartData = {
                                            labels: ["MATEMATICAS", "QUIMICA", "BIOLOGIA", "GEOGRAFIA", "SOCIALES", "ESTADISTICA", "FISICA"],
                                            datasets: [
                                                {
                                                    fillColor: "#00e676",
                                                    strokeColor: "#ffffff",
                                                    highlightFill: "#1864f2",
                                                    highlightStroke: "#ffffff",
                                                    data: [90, 30, 10, 80, 15, 5, 15]
                                                },
                                                {
                                                    fillColor: "#f44336",
                                                    strokeColor: "#ffffff",
                                                    highlightFill: "#ee7f49",
                                                    highlightStroke: "#ffffff",
                                                    data: [40, 50, 70, 40, 85, 55, 15]
                                                }
                                            ]

                                        }
                                        var ctx3 = document.getElementById("chart-area3").getContext("2d");
                                        window.myPie = new Chart(ctx3).Bar(barChartData, {responsive: true});
</script>-->



