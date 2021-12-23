<?php 
include_once"../control/controlDepartamento.php";
$id_departamento=$_POST['id_departamento'];
$estatus=$_POST['estatus'];
$result=deleteDepartamento($id_departamento,$estatus);
echo $result;