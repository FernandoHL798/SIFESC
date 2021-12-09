<?php 
include_once"../control/controlMovimiento.php";
$idUsuario="1";
$result=consultaTurnoMovimiento($idUsuario);
echo $result;