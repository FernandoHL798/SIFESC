<?php 
include_once"../control/controlPeriodo.php";
$id_periodo=$_POST['idPeriodoM'];
$estatus=$_POST['estatus'];
$result=UpdateEstatusPeriodo($id_periodo, $estatus);
echo $result;
/*
<?php 
include_once"../control/controlPeriodo.php";
$contrasenia=$_POST['contraUser'];
$result=consultaContraUser($contrasenia);
echo $result;
*/