<?php 
include_once"../control/controlPeriodo.php";

$id_periodo="1";
$result=deletePeriodo($id_periodo);
echo $result;