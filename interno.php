<?php
	session_start();
	if (isset($_SESSION['id']) === false) {
		header("location: index.php");
	}
	include("conexion.php");
	include("funciones.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Tu encargo</title>
		<link href="interno.css" rel="stylesheet">
	</head>
	<body>
	<header class="cabecera">
    <a href="index.html">Home</a>
    <a href="experiencia.html">Experiencia</a>
    <a href="encargo.php">Tu encargo</a>
	<a href="contacto.html">Contacto</a>
	
</header>


		<h1>Bienvenido, <?php echo traerNombre($_SESSION['id']); ?>.</h1>
		<a id="cerrarsesion" href="salir.php">Cerrar sesión</a>
		
		
	<div class= "estadoencargo">Tu pedido <?php echo traerEstado($_SESSION['id']);?> <br></div>
	<div class="frasechau"> En cuanto tengamos novedades, te avisamos. Ante cualquier duda, contactate conmigo.</div>

	<footer class="footer">
    <a href="http://www.twitter.com/elfinal" target="_blank"><p></p> <img src="mediafiles/twitter.png" alt=""></a>
    <a href="http://www.facebook.com/gonzalomingrino" target="_blank"><p></p> <img src="mediafiles/facebook.png" alt=""></a>
    <a href="http://www.instagram.com/gonzamingrino" target="_blank"><p></p> <img src="mediafiles/instagram.png" alt=""></a>
    <a href="http://www.youtube.com" target="_blank"><p></p> <img src="mediafiles/youtube.png" alt=""></a> 
	</footer>

</body>
</html>
