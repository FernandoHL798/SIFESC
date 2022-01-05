<?php
use PHPMailer\PHPMailer\PHPMailer;
require '../../vendor/autoload.php';

function enviaCorreo($correo, $nombre, $pwd){

/*** This example shows sending a message using PHP's mail() function.*/
//Import the PHPMailer class into the global namespace
//Create a new PHPMailer instance
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = "smtp.gmail.com";

// optional
// used only when SMTP requires authentication  
$mail->SMTPAuth = true;
$mail->Username = 'servicios.escolares.unam.sifesc@gmail.com';
$mail->Password = 'Sifesc2021*';
//Set who the message is to be sent from
$mail->setFrom('servicios.escolares.unam.sifesc@gmail.com');
//Set who the message is to be sent to
$mail->addAddress($correo);
//Set the subject line
$mail->Subject = 'Cambio de contraseña SIFESC';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//Replace the plain text body with one created manually
$mail->Body = 'Estimado usuario '.$nombre.', tu contraseña ha sido modificada exitosamente. Tu nueva contraseña es: '.$pwd;
//Attach an image file

//send the message, check for errors
return $mail->send();
}