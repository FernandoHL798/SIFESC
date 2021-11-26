<?php 
include_once"../control/controlAlumno.php";
$params=[
	"id_usuarioalumno_fk"=>"1",
	"id_generacion_fk"=>"1",
	"pregunta_secreta"=>"2",
	"respuesta_secreta"=>"manchas"
];
$result=insertAlumno($params);
echo $result;