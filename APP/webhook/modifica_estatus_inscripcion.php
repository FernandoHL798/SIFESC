<?php 
include_once"../control/controlInscripcion.php";
$params=[
	"id_inscripcion"=>$_POST['idInscripcion'],
	"estatus"=>$_POST['estatus']
];
//$result=updateEstatusInscripcion($params);
//echo $result;
echo $params['estatus'];