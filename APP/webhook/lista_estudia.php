<?php 
include_once"../control/controlEstudia.php";
$idAlumno="8";
$result=consultaEstudia($idAlumno);
echo $result;