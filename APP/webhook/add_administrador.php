<?php 
include_once"../control/controlAdministrador.php";
$id_usuarioadministrador_fk="1";
$estatus="";
$result=insertAdministrador($id_usuarioadministrador_fk,$estatus);
echo $result;