<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" >
		<title>Registrarse</title>
		<link href="estilos.css" rel="stylesheet">
	</head>

	<body>
		<form method="post" action="registro_pr.php">
			<label for="usuario">Usuario</label>
			<input type="text" name="usuario" id="usuario" >
			
			<!-- Acá se mostrará si el nombre de usuario ya está o no ocupado -->
			<span id="respuesta"></span>
			
			<label for="clave">Contraseña</label>
			<input type="password" name="clave" id="clave" >
			
			<label for="nombre">Nombre Completo</label>
			<input type="text" name="nombre" id="nombre">
			
			<label for="email">Email</label>
			<input type="text" name="email" id="email" >
			
			<input type="submit" value="Registrarse">
		</form>
		
		<script src="consultar.js"></script>
		
	</body>
</html>








