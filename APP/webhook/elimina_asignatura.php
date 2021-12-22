<?php 
include_once"../control/controlAsignaturas.php";
$id_asignatura=  $_POST['idAsignatura'];
$estatus = $_POST['estatus'];
$result=deleteAsignatura($id_asignatura, $estatus);
echo $result;
//echo $_POST['estatus'];