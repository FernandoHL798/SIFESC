<?php 
include_once"../control/controlHorario.php";
$idInscripcion=$_POST['idInscripcion'];
$result=consultaHorario($idInscripcion);
echo $result;