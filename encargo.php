<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gonzamingrino.com</title>
    <link rel="stylesheet" href="encargo.css">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
    <link rel="icon" href="mediafiles/favicon.png">

</head>

<body>
    
    <header class="cabecera">
        <a href="index.html">Home</a>
        <a href="experiencia.html">Experiencia</a>
        <a href="encargo.php">Tu encargo</a>
        <a href="contacto.html">Contacto</a>
    </header>

    <section class="texto">
        <article>
            <h1>Tu encargo</h1>
            <p>Logueate para saber el estado en que se encuentra el trabajo que comisionaste.</p>
        </article>
    </section>

    <form method="post" action="login_pr.php">
			<label for="usuario">Usuario</label>
			<input type="text" name="usuario" id="usuario">

			<label for="clave">Contraseña</label>
			<input type="password" name="clave" id="clave">
			
			<input type="submit" name="button" value="Ingresar">
		</form>
		
		<br>
		<a class="newuser" href="registro.php">Registrar nuevo usuario</a>
        
    <footer class="footer">
            <a href=#><p></p> <img src="mediafiles/twitter.png" alt=""></a>
            <a href=#><p></p> <img src="mediafiles/facebook.png" alt=""></a>
            <a href=#><p></p> <img src="mediafiles/instagram.png" alt=""></a>
            <a href=#><p></p> <img src="mediafiles/youtube.png" alt=""></a>
    </footer>
    

</body>