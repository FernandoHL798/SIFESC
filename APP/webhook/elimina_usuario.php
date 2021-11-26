<?php 
include_once"../control/controlUsuario.php";
$id_usuario="1";
$result=deleteUsuario($id_usuario);
echo $result;