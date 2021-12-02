<?php
include_once"../control/controlAlumno.php";
$params=[
	"id_usuarioalumno_fk"=>"1"
];
$result=insertAlumno($params);
echo $result;
