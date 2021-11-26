<?php 
include_once"../control/controlAlumno.php";
$id_Alumno="1";
$estatus="0";
$result=updateEstatusAlumno($id_Alumno,$estatus);
echo $result;