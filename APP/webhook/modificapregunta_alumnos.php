<?php 
include_once"../control/controlAlumno.php";
$params=[
   "id_Alumno"=>"1",
   "pregunta_secreta"=>"2",
   "respuesta_secreta"=>"amarillo"
];
$result=updatePreguntaAlumno($params);
echo $result;