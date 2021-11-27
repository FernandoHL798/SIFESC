<?php 
include_once "../control/controlProfesor.php";
$params=[
	"nombre"=> $_POST['nombre_profesor'],
	"app"=> $_POST['app'],
	"apm"=> $_POST['apm'],
	"fecha_nacimiento"=> $_POST['fechaNacimiento'],
	"rfc"=> $_POST['rfc'],
	"correo"=> $_POST['correo'],
	"telefono"=> $_POST['telefono']
];
echo insertProfesor($params);
