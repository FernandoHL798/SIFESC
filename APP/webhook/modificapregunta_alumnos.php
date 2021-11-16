<?php 
include_once"../control/controlAlumno.php";
$params=[
   "id_Alumno"=>"1",
   "RequestPwd"=>"2",
   "AnsRequest"=>"amarillo"
];
var_dump(updatePreguntaAlumno($params));