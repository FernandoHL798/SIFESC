<?php 
include_once "../control/controlProfesor.php";
$idAsignatura=$_POST['idAsignatura'];
$idProfesor=$_POST['idProfesor'];
$idPeriodo=$_POST['idPeriodo'];
echo consultaGruposPeriodo($idAsignatura,$idProfesor,$idPeriodo);
