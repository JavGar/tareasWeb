<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/estilo.css">
	<meta charset="UTF-8">
	<title>Index</title>
</head>
<body>
	
		<header>
			<div class="jumbotron">
				<div class="col-lg-5" align="center">
					<img src="imag/logo.jpg" alt="logo" height="150px" width="150px">
				</div>
				<div class="col-lg-7 nav nav-pills">
					<li><a href="index.php">Inicio</a></li>
					<li><a href="">Productos</a></li>
					<li><a href="">Contacto</a></li>
					<li class="active"><a href="">Login</a></li>
					<li><a href="nosotros.html">Nosotros</a></li>
				</div>
			</div>
		</header>
	
		<div id="logeo" class="jumbotron">
			<div class="row">
				<!--registro de usuarios-->
				<div class="col-lg-5 presente">
					<h2>Registro</h2>
					<?php 
						if (isset($_POST["usuario"]) && isset($_POST["pass"]) && isset($_POST["email"])) {
							if (($_POST["usuario"] != "") && ($_POST["pass"] != "") && ($_POST["email"] != "")) {
								echo "<h4 class='alert-success'>Usuario agregado</h4>";
							}
							else
							{
								echo "<h4 class='alert-danger'>No hay datos</h4>";
							}
						}
						else
						{
							echo "<h4 class='alert-warning'>Formulario invalido</h4>";
						}
					 ?>
					<form class="form-horizontal" role="form" method="post" action="validarFormulario.php">
						<div class="form-group">
							<label for="usuario" class="col-sm-2 control-label">Usuario: </label>
						    <div class="col-sm-10">
								<input type="text" class="form-control" name="usuario" placeholder="Usuario">
					    	</div>
  						</div>

						<div class="form-group">
						    <label for="pass" class="col-sm-2 control-label">Contraseña: </label>
						    <div class="col-sm-10">
								<input type="password" class="form-control" name="pass" placeholder="Contraseña">
						    </div>
						</div>

						<div class="form-group">
						    <label for="email" class="col-sm-2 control-label">Email: </label>
						    <div class="col-sm-10">
							    <input type="email" class="form-control" name="email" placeholder="Email">
							</div>
						</div>

						<div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
							    <button type="submit" class="btn btn-default">Enviar</button>
						    </div>
						</div>
					</form>
				</div>
				<div class="col-lg-2"></div>
				<!--inicio de sesion-->
				<div class="col-lg-5 presente">
					<h2>Iniciar Sesión</h2>
					<?php 
						if (isset($_POST["usuario"]) && isset($_POST["pass"])) {
							if (($_POST["usuario"] == "admin") && ($_POST["pass"] == "root")) {
								echo "<h4 class='alert-success'>Bienvenido administrador</h4>";
							}
							else
							{
								echo "<h4 class='alert-danger'>Datos erroneos</h4>";
							}
						}
						else
						{
							echo "<h4 class='alert-warning'>Formulario invalido</h4>";
						}
					?>
					<form class="form-horizontal" role="form" method="post" action="validarFormulario.php">
						<div class="form-group">
						    <label for="usuario" class="col-sm-2 control-label">Usuario: </label>
						    <div class="col-sm-10">
							    <input type="text" class="form-control" name="usuario" placeholder="Usuario">
						    </div>
						</div>

						<div class="form-group">
						    <label for="pass" class="col-sm-2 control-label">Contraseña: </label>
						    <div class="col-sm-10">
							    <input type="password" class="form-control" name="pass" placeholder="Contraseña">
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
							    <button type="submit" class="btn btn-default">Enviar</button>
						    </div>
						</div>
					</form>
				</div>
			</div>
		</div>
</body>
</html>