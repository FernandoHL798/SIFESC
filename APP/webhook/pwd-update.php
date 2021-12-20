<?php
include_once "../control/controlUsuario.php";
$params = [
"idUsuario"=> $_POST['idUsuario'],
"pwdA"=> $_POST['contraAct'],
"pwd"=> $_POST['psw']
];
$result=consultaPassword($params);
echo $result;