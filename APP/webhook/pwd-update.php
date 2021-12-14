<?php
include_once "../control/controlUsuario.php";
$params = [
"idUsuario"=> $_POST['idUsuario'],
"pwd"=> $_POST['pwd']
];
echo updatePassword($params);