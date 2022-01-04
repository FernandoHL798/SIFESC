<?php 
include_once"../control/controlMovimiento.php";
$idInscripcion=$_POST['idInscripcion'];
$result=consultaInsMovimiento($idInscripcion);
echo $result;