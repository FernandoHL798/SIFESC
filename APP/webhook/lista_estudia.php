<?php 
include_once"../control/controlEstudia.php";
$idAlumno=$_POST['idUsuario'];
$result=consultaEstudia($idAlumno);
echo $result;