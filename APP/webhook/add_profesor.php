<?php 
include_once "../control/controlProfesor.php";
$params=[
	"nombre"=> "Brenda Paola",
	"app"=> "Gonzalez",
	"apm"=> "Gonzalez",
	"fecha_nacimiento"=> "26-12-1999",
	"rfc"=> "GOBPSADAKOSA",
	"correo"=> "fernandohlqwe@gmail.com",
	"telefono"=> "5537091960"
];
echo insertProfesor($params);
