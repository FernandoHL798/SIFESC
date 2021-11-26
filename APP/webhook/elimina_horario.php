<?php 
include_once"../control/controlHorario.php";
$id_horario="1";
$result=deleteHorario($id_horario);
echo $result;