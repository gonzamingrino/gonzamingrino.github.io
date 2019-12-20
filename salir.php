<?php
	// salir.php
	
	session_start();
	session_destroy();
	
	header("location: encargo.php");
?>