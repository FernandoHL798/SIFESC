<?php 
include_once"../control/controlAlumno.php";
$params=[
   "id_Alumno"=>"1",
   "pregunta_secreta"=>"2",
   "respuesta_secreta"=>"amarillo"
];
var_dump(updatePreguntaAlumno($params));