<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>SaberApp_Cloud</title>
        <link rel="stylesheet" href="css/materialize.min.css">
        <link rel="stylesheet" href="css/estilos.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>
    <body style="background-color: #fafafa !important;">
        <main>
            <div  style="margin-top: -0.5rem; padding: 15px; background-color: #0072C6 !important;">
                <h5 class="title center-align" style="color: #fff;">SaberApp</h5>
            </div>
            <br><br><br>
            <center>
                <div class="card-panel" style="width:70%;">                         
                    <div class="row center" style="width:80%;">
                        <br>
                        <label><h2><b>Registro</b></h2></label>
                        <br><br>					
                        <form action="" > 					      
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">library_books</i>
                                    <input  id="first_name" type="text" class="validate">
                                    <label>Nombres</label>
                                </div>
                            </div>  
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">library_books</i>
                                    <input  id="first_name" type="text" class="validate">
                                    <label>Apellidos</label>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">library_books</i>
                                    <input  id="first_name" type="text" class="validate">
                                    <label>Email</label>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">library_books</i>
                                    <input id="password" type="password" class="validate" ng-model="password">        
                                    <label>Password</label>
                                </div>
                            </div>  
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">library_books</i>
                                    <input id="password" type="password" class="validate" ng-model="password1">        
                                    <label>Repetir Password</label>
                                </div>
                            </div> 
                            <div class="left-align"> 	
                                <label>Sexo:</label>
                            </div>											
                            <div class="row">						
                                <div class="input-field col s6">
                                    <select name="TipoEncabezado">
                                        <option value="0" disabled selected>Seleccionar sexo</option>
                                        <option value="areaUno">M </option>
                                        <option value="areaDos">F</option>        
                                    </select>       
                                </div>    
                                <div class="row">
                                    <div class="input-field col s6">
                                        <select name="TipoEncabezado">
                                            <option value="0" disabled selected>Nivel Educativo</option>
                                            <option value="areaUno">9 </option>
                                            <option value="areaDos">11</option>        
                                        </select>       
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">library_books</i>
                                            <input  id="first_name" type="date" class="validate">
                                            <!--<label>Fecha Nacimiento</label-->
                                        </div>
                                    </div>  
                                </div> 
                                <div class="right-align">
                                    <a class="waves-effect waves-light btn" href="#" ng-click="#" style="background-color:#0072C6;">Registrar</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a class="waves-effect waves-light btn" href="#"  ng-click="#" style="background-color: #0072C6;">Cancelar</a>
                                </div>  
                        </form>
                    </div>
                    <br><br>					
                </div>
            </center>
        </main>
    </div>
    <footer class="page-footer"  style=" background-color: #eeeeee !important;">		
        <div class="footer-copyright">
            <div class="container" style="color:#0072C6;">
                © 2015 Copyright 
                <a class="text-lighten-4 right" href="#!" style="color:#0072C6;">Appoyamos tu saber</a>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="scripts/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/angular.min.js"></script>
    <script type="text/javascript" src="scripts/materialize.min.js"></script>
    <script type="text/javascript" src="scripts/angular-route.min.js"></script>
    <script type="text/javascript" src="Modules/appModule.js"></script>
    <script type="text/javascript" src="Controllers/competenciasController.js"></script>
    <script type="text/javascript">
                                                                $(document).ready(function () {
                                                                    $('select').material_select();
                                                                });
    </script>
</body>
</html>