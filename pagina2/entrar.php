<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta charset="UTF-8">
	<title>Registro</title>
</head>
<body>
	<header class="jumbotron">
		<h1>Inicio de Sesion</h1>
	</header>
	<form class="form-horizontal" role="form">
		<div class="form-group">
			<label for="usuario" class="col-sm-2 control-label">Usuario: </label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="usuario" placeholder="Usuario">
			</div>
		</div>

		<div class="form-group">
			<label for="contras" class="col-sm-2 control-label">Contraseña: </label>
			<div class="col-sm-10">
				<input type="password" class="form-control" id="contras" placeholder="Contraseña">
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Enviar</button>
			</div>
		</div>
	</form>

	<div>
		<a href="index.php" type="button" class="btn btn-info">Inicio</a>
	</div>
</body>
</html>