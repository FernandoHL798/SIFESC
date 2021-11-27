<?php 
include_once"../control/controlUsuario.php";
$params=[
   "id_usuario"=>"1",
   "pregunta_secreta"=>"2",
   "respuesta_secreta"=>"amarillo"
];
$result=updatePreguntaUsuario($params);
echo $result;