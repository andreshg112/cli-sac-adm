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
<body style="background-color: #fafafa; !important">
	<main>
		<div  style="margin-top: -0.5rem; padding: 15px; background-color: #0072C6; !important">
			<h5 class="title center-align" style="color: #fff;"><b>SaberApp</b></h5>
		</div>
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
								<input  id="first_name" type="text" class="validate">
								<label>Email</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<i class="material-icons prefix">library_books</i>
								<input  id="first_name" type="text" class="validate">
								<label>Password</label>
							</div>
							<div class="right-align">
								<a class="waves-effect waves-light btn" href="#" ng-click="#" style="background-color: #0072C6;">Iniciar</a>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a class="waves-effect waves-light btn" href="RegistrarUsu.php"  ng-click="#" style="background-color: #0072C6;">Registrar</a>
							</div>   
						</div> 
					</div>
				</div>
			</div>
		</center>
	</main>
</div>

<footer class="page-footer"  style=" background-color: #eeeeee; !important">		
	<div class="footer-copyright">
		<div class="container">
			© 2014 Copyright Text
			<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
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