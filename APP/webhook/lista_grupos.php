<?php 
include_once"../control/controlGrupos.php";
$idAsignatura= $_POST['idAsignatura'];
$idProfesor= $_POST['idProfesor'];
$periodo=$_POST['periodo'];
$result=consultaGrupos($idAsignatura,$idProfesor,$periodo);
echo $result;