<?php 
include_once"../control/controlGrupos.php";
$id_grupo=$_POST['id_grupo'];
$estatus=$_POST['estatus'];
$result=queryUpdateGruposAs($id_grupo,$estatus);
echo $result;
