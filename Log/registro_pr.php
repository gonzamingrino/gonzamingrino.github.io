<?php
	// registro_pr.php
	
	// 0. Consigo los datos
	$usuario = $_POST['usuario'];
	// Encriptamos la clave
	$clave   = md5($_POST['clave']);
	$nombre  = $_POST['nombre'];
	$email   = $_POST['email'];
	
	// 1. Conectarme a la BD
	include("conexion.php");
	
	// 2. Crear la query
	$insertar = "INSERT INTO usuarios
				 VALUES(
					NULL,
					'$usuario',
					'$clave',
					'$nombre',
					'$email'
				 )";
	
	// 3. Ejecutarla
	$ej = mysqli_query($conexion, $insertar);
	
	// 4. Preguntar si funcionó
	if($ej === true){
		//echo "Usuario agregado";
		
		// Redirección a index.php
		header("location:index.php");
		
	} else {
		echo "Error, ver SQL";
	}
	
?>








