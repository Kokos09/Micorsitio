<?php
$para      = 'ventas@malintek.com.mx';
$titulo    = 'Paneles Solares';
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$mensaje=$_POST['message'];
$mensaje   = 'Nombre: ' .$fname."\nApellido: ".$lname."\nTelefono: ".$phone."\nEmail: ".$email."\nMensaje: ".$mensaje;
$cabeceras = 'From: ventas@malintek.com.mx' . "\r\n" .
    'Reply-To: ventas@malintek.com.mx' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($para, $titulo, $mensaje, $cabeceras);
header("Location:../index.html")
?>