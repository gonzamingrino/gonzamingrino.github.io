<?php

	ob_start();
    session_start();

	require('conexion.php');
	
	$usuario = $_POST['usuario'];
	
	$clave = md5($_POST['clave']);
	
	
	$preguntar = "SELECT * FROM usuarios
				  WHERE
				   usuario = '$usuario'
				   AND
				   clave   = '$clave'";
	
	$p_ej = mysqli_query($conexion, $preguntar);
	
	if ($p_ej === false) {
	
		echo "Por favor intente nuevamente.";
	} else {		
		if (mysqli_num_rows($p_ej) === 1) {
			echo "Los datos son correctos!";
			

			$reg = mysqli_fetch_array($p_ej);

			
			
			
			$_SESSION['id'] = $reg['id_usuario'];			
			
			header("location: interno.php");
			exit();
		} else {
			echo "INCORRECTO!";
		}
	}
	
?>







