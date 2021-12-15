<?php 
include_once"../control/controlMovimiento.php";
$params=[
	"id_inscripcion_fk"=>"1",
	"id_asignacion_fk"=>$_POST['grupo']
];
$result=insertMovimiento($params);
echo $result;