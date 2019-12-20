<?php
	
	function traerNombre ($id) {
		include("conexion.php");
		$usuario = mysqli_query($conexion, "SELECT nombre FROM usuarios
							 WHERE id_usuario = $id");
		$reg = mysqli_fetch_array($usuario);
		return $reg['nombre'];
	}

	function traerEstado ($id) {
		include("conexion.php");
		$usuario = mysqli_query($conexion, "SELECT estadoencargo FROM usuarios
							 WHERE id_usuario = $id");
		$reg1 = mysqli_fetch_array($usuario);
		return $reg1['estadoencargo'];
	}



?>