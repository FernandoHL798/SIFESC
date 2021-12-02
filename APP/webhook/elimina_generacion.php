<?php 
include_once"../control/controlEstudia.php";
$params=[
	"id_usuarioalumno_fk"="1",
	"id_plan_fk"="11"
];
$result=deleteEstudia($params);
echo $result;