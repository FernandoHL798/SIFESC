<?php 
include_once"../control/controlGrupos.php";
$idAsignatura= $_POST['idAsignatura'];
$idProfesor= $_POST['idProfesor'];
$result=consultaGrupos($idAsignatura,$idProfesor);
echo $result;