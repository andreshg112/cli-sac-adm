<!DOCTYPE html>
<html lang="en" ng-app="app">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>SaberApp Cloud</title>
        <link rel="stylesheet" href="css/materialize.min.css">
        <link rel="stylesheet" href="css/estilos.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="libs/ui-grid/ui-grid.css" type="text/css"/>
    </head>
    <body>   
        <header>
            <nav class="top-nav">
                <div class="container1">
                    <div class="nav-wrapper">
                        <center>
                            <a class="title center-align" style="color: #fff;" >
                                <FONT FACE="impact" SIZE=6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SaberApp
                                </FONT>
                            </a>
                        </center>
                    </div>
                </div>
            </nav>
            <div class="container"><a  data-activates="nav-mobile"  class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only"><i class="mdi-navigation-menu"></i></a></div>
            <ul id="nav-mobile" class="side-nav fixed" style="width: 240px;">
                <li class="logo"><a id="logo-container" href="#/Gestionar/Principal" class="brand-logo">
                        <object id="front-page-logo" type="image/svg+xml" data="res/materialize.svg"><img src="saberapp.png" id="img" class="img"></object></a>
                </li>
                <br><br><br><br>

                <li class="bold"><a href="#/Gestionar/Preguntas" class="waves-effect waves-teal">Gestionar Preguntas</a></li>
                <li class="bold"><a href="#/Gestionar/Usuarios" class="waves-effect waves-teal">Gestionar Usuarios</a></li>
                <li class="bold"><a href="#/Gestionar/Area" class="waves-effect waves-teal">Gestionar &Aacute;rea</a></li>
                <li class="bold"><a href="#/Gestionar/Resultados_generales" class="waves-effect waves-teal">Resultados Generales</a></li>
                <li class="bold"><a  href="#/Gestionar/Resultados_especificos" class="waves-effect waves-teal">Resultados Especificos</a></li>
                <li class="bold"><a href="#/Gestionar/Preguntasimu" class="waves-effect waves-teal">Preguntas</a></li>
            </ul>
        </header>

        <br><br><br><br>
        <main><div class="container" id="container2">
                <div class="row">
                    <div class="col s12 offset-s2 grid-example">

                        <div ng-view>

                        </div> 
                    </div> 
                </div>    
            </div>  
        </main>

        <!--scripts -->
        <script type="text/javascript" src="scripts/jquery.min.js"></script>
        <script type="text/javascript" src="scripts/angular.min.js"></script>
        <script type="text/javascript" src="scripts/materialize.min.js"></script>
        <script type="text/javascript" src="Modules/appModule.js"></script>
        <script type="text/javascript" src="Controllers/competenciasController.js"></script>
        <script src="js/controllers.js"></script>        
        <script src="js/services.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
                $('.modal-trigger').leanModal();
                $('select').material_select();
            });
        </script>
        <script src="libs/angularjs/angular-touch.js"></script>
        <script src="libs/angularjs/angular-animate.js"></script>
        <script src="libs/angularjs/angular-route.js"></script>
        <script src="libs/ui-grid/csv.js"></script>
        <!--<script src="libs/ui-grid/pdfmake.js"></script>-->
        <script src="libs/ui-grid/vfs_fonts.js"></script>
        <script src="libs/ui-grid/ui-grid.js"></script>
    </body>
</html>