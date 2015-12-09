<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>SaberApp Cloud</title>
        <link rel="stylesheet" href="css/materialize.min.css">
        <link rel="stylesheet" href="css/estilos.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>
    <body style="background-color: #fafafa !important;">
        <main>
            <br><br><br>
            <center>
                <div class="container1">
                    <div class="row">
                        <div class="grid-example col s6 m5.2">

                            <div class="card">
                                <div class="card-image">
                                    <img src="saber.png">             
                                </div> 
                                <center>          
                                    <div class="card-action">
                                        <a href="#">No esperes mas, comienza una nueva aventura.</a>
                                    </div>
                                </center>
                            </div>						
                        </div>
                        <div class="grid-example col s6 m5">
                            <div class="row">
                                <br><br><br><br><br><br><br><br>
                                <!--<center><img src="saberapp.png" id="img" class="imgs"></center-->
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">library_books</i>
                                    <input ng-model="vm.datos.EMAIL" id="first_name" type="text" class="validate">
                                    <label>Email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">library_books</i>
                                    <input ng-model="vm.datos.CONTRASENIA" id="first_name" type="password" class="validate">
                                    <label>Contraseña</label>
                                </div>
                                <div class="right-align">
                                    <a ng-click="vm.iniciarSesion();" class="waves-effect waves-light btn" style="background-color: #ee6e73;">Iniciar </a>
<!--                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a class="waves-effect waves-light btn" href="RegistrarUsu.php" style="background-color:#ee6e73;">Registrar</a>-->
                                </div>					
                            </div>
                        </div>
                    </div>
                </div>
            </center>
        </main>
    </div>

    <footer class="page-footer"  style=" background-color: #fce4ec !important;">		
        <div class="footer-copyright">
            <div class="container" style="color:#000;">
                © 2015 Copyright 
                <a class=" text-lighten-4 right" style="color:#000;">SaberApp</a>
            </div>
        </div>
    </footer>


    <script type="text/javascript" src="scripts/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/angular.min.js"></script>
    <script type="text/javascript" src="scripts/materialize.min.js"></script>
    <script type="text/javascript" src="scripts/angular-route.min.js"></script>
    <script type="text/javascript" src="Modules/appModule.js"></script>
    <script type="text/javascript" src="Controllers/competenciasController.js"></script>
</body>
</html>