<?php
	// registro_pr.php
	
	// 0. Conectar al DB
	include('conexion.php');
	
	// 1. Conseguir los datos del form
	$nombre  = $_POST['nombre'];
	// Encriptamos la clave apenas la conseguimos
	$clave   = md5($_POST['clave']);
	$usuario = $_POST['usuario'];
	$email   = $_POST['email'];
	
	// 2. Creo la query
	$insertar = "INSERT INTO usuarios
				VALUES(
					NULL,
					'$usuario',
					'$clave',
					'$nombre',
					'$email',
					NULL
				)";
	
	// 3. Ejecutamos la query
	$insertar_ej = mysqli_query(
					$conexion, $insertar
				   );
				   
	// 4. Preguntar si funcionó
	if ($insertar_ej === true) {
		// echo "Registro insertado!";
		// Redirección a la home
		header("location: encargo.php");
	} else {
		echo "Error, ver SQL";
	}
?>







