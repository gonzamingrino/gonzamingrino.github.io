<?php

if(isset($_POST['email'])) {
 
    $email_to = "gonzamingrino@gmail.com";
    $email_subject = "Recibiste una consulta";

    function died($error) {
        echo "Perdón. Hubo un error en tu formulario.";
        echo $error."<br /><br />";
        echo "Por favor intente nuevamente.<br /><br />";
        die();
    }
 
     if(!isset($_POST['nombre']) ||
        !isset($_POST['email']) ||
        !isset($_POST['mensaje'])) {
        died('Perdón hubo un error en tu formulario. Intente nuevamente.');       
    }
 
     
 
    $nombre = $_POST['nombre']; // required
    $email_from = $_POST['email']; // required
    $mensaje = $_POST['mensaje']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'El correo ingresado no es válido.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$nombre)) {
    $error_message .= 'El nombre ingresado no es válido.<br />';
  }
 
  if(strlen($mensaje) < 2) {
    $error_message .= 'Tu mensaje no es válido.<br/>';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 


    $email_message = "Abajo se encuentran los detalles del mensaje.\n\n";
 
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    $email_message .= "Nombre: ".clean_string($nombre)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Mensaje: ".clean_string($mensaje)."\n";
 
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);  
?>
 
 
<h1>Gracias por contactarse. En breve te responderé.</h1>
 
<?php
 
}
?>