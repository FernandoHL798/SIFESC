<?php
include_once "../control/controlUsuario.php";
$params = [
"correo"=> $_POST['correo'],
"fecha"=> $_POST['fecha'],
"pregunta"=> $_POST['pregunta'],
"respuesta"=> $_POST['respuesta']
];
$result=pswRecuperaContraUsuarios($params);
echo $result;