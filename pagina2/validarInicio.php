<?php 
if (isset($_POST["usuario"]) && isset($_POST["pass"])) {
 	echo "<h1>Formulario valido</h1>";

 	if (($_POST["usuario"] == "admin") && ($_POST["pass"] == "root")) {
 		echo "<h1>Bienvenido administrador</h1>";
 	}
 	else
 	{
 		echo "<h1>Datos erroneos</h1>";
 	}
 }
 else
 {
 	echo "<h1>Formulario invalido</h1>";
 } ?>