<?php 
include_once"../control/controlGrupos.php";
$id_grupo=$_POST['id_grupo'];
$result=queryUpdateGruposAs($id_grupo);
echo $result;
