<?php 
include_once"../control/controlCarrera.php";
$id_carrera="1";
$result=deleteCarrera($id_carrera);
echo $result;