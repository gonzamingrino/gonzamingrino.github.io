

<?php


$nombre = $_POST['nombre'];
$correo= $_POST['email'];
$mensaje= $_POST['mensaje'];

$encabezado = 'From: ' . $correo;  

$mensaje = "Este mensaje fue enviado por : " . $nombre . " 
";
$mensaje .= "Su e-mail es : " . $correo. " 
";
$mensaje .= "Mensaje : " . $_POST['mensaje'] . " 

";

$para = 'gonzamingrino@gmail.com';
$asunto = 'Formulario enviado desde la pagina web';



if (mail($para, $asunto, $mensaje, $encabezado))
{   header("Location: index.html");
    exit();
} else {
    echo 'Se produjo un error en el envío del correo';
}

?>