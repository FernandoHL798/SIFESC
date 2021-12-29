<?php 
include_once"../control/controlDepartamento.php";
$params=[
	"id_departamento"=>$_POST['clave_depto_edit'],
	"nombre"=>$_POST['nombre_depto_edit'],
	"id_plantel_fk"=>$_POST['id_plantel']
];
$estatus = $_POST['estatus'];
$id_depto = $_POST['id_depto'];
$result=updateDepartamento($params, $estatus, $id_depto);
echo $result;