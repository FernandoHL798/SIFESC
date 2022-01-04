<?php 
include_once"../control/controlMovimiento.php";
$idInscripcion=$_POST['idInscripcion'];
$updated=$_POST['updated'];
$result=consultaAltasMovimiento($idInscripcion,$updated);
echo $result;