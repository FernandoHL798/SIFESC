<?php 
include_once"../control/controlEdificio.php";
$id_edificio="1";
$result=deleteEdificio($id_edificio);
echo $result;