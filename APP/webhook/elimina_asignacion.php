<?php 
include_once"../control/controlAsignacion.php";
$id_asignacion="2";
$result=deleteAsignacion($id_asignacion);
echo $result;