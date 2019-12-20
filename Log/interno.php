<?php
	include("funciones.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Hola <?php 
			echo nombre($_SESSION['id_usuario']); 
		?>!</title>
		<link href="estilos.css" rel="stylesheet">
	</head>

	<body>
		<h1><?php 
			echo nombre($_SESSION['id']); 
		?>, esta es la librería de Don Pepe!</h1>
		
		<a href="agregar.php">Agregar libro</a> |
		<a href="editar.php">Editar cover</a> |
		<a href="salir.php">Cerrar sesión</a>
		
		<hr>
		
		<div class="listado">
		
			<?php
				include("conexion.php");
				$ver = "SELECT * FROM libros";
				$ej = mysqli_query($conexion, $ver);
				if($ej === false){
					echo "error, ver SQL";
				} else {
				while($reg = mysqli_fetch_array($ej)){
			?>
			<a href="#" class="listado-libro">
				<h2><?php echo $reg['titulo']; ?>
					-
					<span class="listado-libro_autor">
						<?php echo $reg['autor']; ?>
					</span>
				</h2>
				<img src="covers/<?php 
					echo $reg['cover'];
				?>" alt="">
				<p>Precio: $<?php echo $reg['precio']; ?><br>
				   Rating:  XX/5
				</p>
			</a>
			<?php
		} 
				} 
			?>
			
		</div>
		
		
		
		
	</body>
</html>
