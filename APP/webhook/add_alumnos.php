<?php 
include_once "../control/controlAlumno.php";
$params=[
	"cuentaAlumno"=>$_POST['num_cuenta'],
	"nombre"=>$_POST['nombre_alumno'],
	"primer_apellido"=>$_POST['app'],
	"segundo_apellido"=>$_POST['apm'],
	"fecha_nace"=>$_POST['fechaNacimiento'],
	"correo"=>$_POST['correo'],
	"telefono"=>$_POST['telefono'],
	"generacion"=>$_POST['generacion'],
	"estatus"=>$_POST['estatus'],
	"plan"=>$_POST['idPlan']
];
var_dump ($params);
$result=insertAlumno($params);
echo $result;