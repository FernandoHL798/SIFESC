<?php
include_once "../control/controlUsuario.php";
use PHPMailer\PHPMailer\PHPMailer;
require '../../vendor/autoload.php';
function generar_password_complejo(){
    $cadena_base =  'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $cadena_base .= '0123456789' ;
    $cadena_base .= '!@#%^&*()_,./<>?;:[]{}\|=+';
    $password = '';
    $limite = strlen($cadena_base) - 1;
    for ($i=0; $i < 8; $i++)
    $password .= $cadena_base[rand(0, $limite)];
    return $password;
}
$newContra=generar_password_complejo();
$params = [
"correo"=> $_POST['correo'],
"fecha"=> $_POST['fecha'],
"pregunta"=> $_POST['pregunta'],
"respuesta"=> $_POST['respuesta'],
"contra"=> $newContra
];

$result=pswRecuperaContraUsuarios($params);
echo $result;

if($result){
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
$mail->addAddress($_POST['correo']);
//Set the subject line
$mail->Subject = 'Cambio de contraseña SIFESC';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//Replace the plain text body with one created manually
$mail->Body = 'La contraseña a sido cambiada exitosamente, tu nueva contraseña es: '.$newContra;
//Attach an image file

//send the message, check for errors

}
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}
?>