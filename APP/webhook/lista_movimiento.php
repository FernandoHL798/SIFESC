<?php 
include_once"../control/controlMovimiento.php";
$idInscripcion=$_POST['idInscripcion'];
$result=consultaMovimiento($idInscripcion);
echo $result;