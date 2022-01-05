<?php 
include_once"../control/controlAsignacion.php";
$id_asignacion= $_POST['idAsignacion'];
$result=deleteAsignacion($id_asignacion);
echo $result;