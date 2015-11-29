<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <title>SaberApp_Cloud</title>
  <link rel="stylesheet" href="css/materialize.min.css">
  <link rel="stylesheet" href="css/estilos.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>   
  <header>
      <nav class="top-nav">
        <div class="container">
          <div class="nav-wrapper"><a class="page-title">Color</a></div>
        </div>
      </nav>
      <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="mdi-navigation-menu"></i></a></div>
      <ul id="nav-mobile" class="side-nav fixed" style="width: 240px; left: -250px;">
        <li class="logo"><a id="logo-container" href="http://materializecss.com/" class="brand-logo">
            <object id="front-page-logo" type="image/svg+xml" data="res/materialize.svg" __idm_frm__="17">Your browser does not support SVG</object></a></li>
        <li class="search">
          <div class="search-wrapper card">
            <input id="search"><i class="material-icons">search</i>
            <div class="search-results"></div>
          </div>
        </li>
        <li class="bold"><a href="about.html" class="waves-effect waves-teal">Sobre Materialize</a></li>
        <li class="bold"><a href="getting-started.html" class="waves-effect waves-teal">Introducción</a></li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold active"><a class="collapsible-header active waves-effect waves-teal">CSS</a>
              <div class="collapsible-body" style="display: block;">
                <ul>
                  <li class="active"><a href="color.html">Color</a></li>
                  <li><a href="grid.html">Grid</a></li>
                  <li><a href="helpers.html">Helpers</a></li>
                  <li><a href="media-css.html">Media</a></li>
                  <li><a href="sass.html">Sass</a></li>
                  <li><a href="shadow.html">Shadow</a></li>
                  <li><a href="table.html">Table</a></li>
                  <li><a href="typography.html">Typography</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Components</a>
              <div class="collapsible-body" style="">
                <ul>
                  <li><a href="badges.html">Badges</a></li>
                  <li><a href="buttons.html">Buttons</a></li>
                  <li><a href="breadcrumbs.html">Breadcrumbs</a></li>
                  <li><a href="cards.html">Cards</a></li>
                  <li><a href="chips.html">Chips</a></li>
                  <li><a href="collections.html">Collections</a></li>
                  <li><a href="footer.html">Footer</a></li>
                  <li><a href="forms.html">Forms</a></li>
                  <li><a href="icons.html">Icons</a></li>
                  <li><a href="navbar.html">Navbar</a></li>
                  <li><a href="pagination.html">Pagination</a></li>
                  <li><a href="preloader.html">Preloader</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">JavaScript</a>
              <div class="collapsible-body" style="">
                <ul>
                  <li><a href="collapsible.html">Collapsible</a></li>
                  <li><a href="dialogs.html">Dialogs</a></li>
                  <li><a href="dropdown.html">Dropdown</a></li>
                  <li><a href="media.html">Media</a></li>
                  <li><a href="modals.html">Modals</a></li>
                  <li><a href="parallax.html">Parallax</a></li>
                  <li><a href="pushpin.html">Pushpin</a></li>
                  <li><a href="scrollfire.html">ScrollFire</a></li>
                  <li><a href="scrollspy.html">Scrollspy</a></li>
                  <li><a href="side-nav.html">SideNav</a></li>
                  <li><a href="tabs.html">Tabs</a></li>
                  <li><a href="transitions.html">Transitions</a></li>
                  <li><a href="waves.html">Waves</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        <li class="bold"><a href="http://materializecss.com/mobile.html" class="waves-effect waves-teal">Mobile</a></li>
        <li class="bold"><a href="showcase.html" class="waves-effect waves-teal">Vitrina</a></li>
      </ul>
    </header>

<!--scripts -->
<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script type="text/javascript" src="scripts/angular.min.js"></script>
<script type="text/javascript" src="scripts/materialize.min.js"></script>
<script type="text/javascript" src="scripts/angular-route.min.js"></script>
<script type="text/javascript" src="Modules/appModule.js"></script>
<script type="text/javascript" src="Controllers/competenciasController.js"></script>
<script type="text/javascript">
$(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();
        $('select').material_select();
      });
</script>
</body>
</html>




