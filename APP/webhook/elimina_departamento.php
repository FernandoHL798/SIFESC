<?php 
include_once"../control/controlDepartamento.php";
$id_departamento="1";
$result=deleteDepartamento($id_departamento);
echo $result;