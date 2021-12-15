<?php 
include_once"../control/controlUsuario.php";
$params=[
   "id_usuario"=>$_POST['idUsuario'],
   "pregunta_secreta"=>$_POST['pregunta'],
   "respuesta_secreta"=>$_POST['respuesta']
];
$result=updatePreguntaUsuario($params);
echo $result;