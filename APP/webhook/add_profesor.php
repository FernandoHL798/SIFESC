<?php
include_once "../control/controlProfesor.php";
$params=[

	"nombre"=>$_POST['nombre_profesor_ag'],
	"app"=>$_POST['app_ag'],
	"apm"=>$_POST['apm_ag'],
	"fecha_nacimiento"=>$_POST['fechaNacimiento_ag'],
	"rfc"=>$_POST['rfc_ag'],
	"correo"=>$_POST['correo_ag'],
	"telefono"=>$_POST['telefono_ag'],
	"idDepartamento"=>$_POST['idDepartamento']

];
$result = insertProfesor($params);
echo $result;
