<?php 
if (isset($_POST["usuario"]) && isset($_POST["pass"]) && isset($_POST["email"]) ) {
 	echo "<h1>Formulario valido</h1>";

 	if (($_POST["usuario"] != "") && ($_POST["pass"] != "") && ($_POST["email"] != "")) {
 		echo "<h1>Usuario agregado</h1>";
 	}
 	else
 	{
 		echo "<h1>No hay datos</h1>";
 	}
 }
 else
 {
 	echo "<h1>Formulario invalido</h1>";
 } ?>