<?php
	$usuario = $_POST['usuario'];
	$clave   = md5($_POST['clave']);
	$nombre  = $_POST['nombre'];
	$email   = $_POST['email'];
	
	include("conexion.php");
	
	$insertar = "INSERT INTO usuarios
				 VALUES(
					NULL,
					'$usuario',
					'$clave',
					'$nombre',
					'$email'
				 )";
	
	$ej = mysqli_query($conexion, $insertar);
	
	if($ej === true){
		header("location:index.php");
		
	} else {
		echo "Error, ver SQL";
	}
	
?>