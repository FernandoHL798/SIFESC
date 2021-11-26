<?php 
include_once"../control/controlAsignaturas.php";
$id_asignatura="1";
$result=deleteAsignatura($id_asignatura);
echo $result;