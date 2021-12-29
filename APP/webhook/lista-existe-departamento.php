<?php 
include_once"../control/controlDepartamento.php";
$idPlantel=$_POST['id_plantel'];
$nombre=$_POST['nombre_depto_ag2'];
$result=consultaExisteDepartamento($idPlantel, $nombre);
echo $result;