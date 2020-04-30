<?php
$para      = 'ventas@malintek.com.mx';
$titulo    = 'Ozono vs Cloro';
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$build=$_POST['build'];
$room3=$_POST['room3'];
$room2=$_POST['room2'];
$comentarios=$_POST['comentarios'];
$mensaje   = 'Nombre: '.$firstname."\nApellido: ".$lastName."\nTelefono: ".$phone."\nEmail: ".$email."\nLugar: ".$build."\nHabitación m3: ".$room3."\nHabitación m2: ".$room2;
$cabeceras = 'From: ventas@malintek.com.mx' . "\r\n" .
    'Reply-To: ventas@malintek.com.mx' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($para, $titulo, $mensaje, $cabeceras);
header("Location:../index.html")
?>