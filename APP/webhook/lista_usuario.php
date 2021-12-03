<?php 
include_once"../control/controlUsuario.php";
$correoUsu="nayellisotoz@gmail.com";
$result=consultaUsuarios($correoUsu);
echo $result;