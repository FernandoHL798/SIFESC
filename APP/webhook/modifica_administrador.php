<?php 
include_once"../control/controlAdministrador.php";
$id_usuarioadministrador_fk="1";
$estatus="";
$result=updateAdministrador($id_usuarioadministrador_fk,$estatus);
echo $result;