<?php 
include_once "../control/controlGrupos.php";
$idAsignacion=$_POST['idAsignacion'];
$idProfesor=$_POST['idUsuario'];
echo consultaGruposAsignatura($idAsignacion,$idProfesor);
