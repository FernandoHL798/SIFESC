<?php 
include_once"../control/controlGeneracion.php";
$id_generacion="1";
$result=deleteGeneracion($id_generacion);
echo $result;