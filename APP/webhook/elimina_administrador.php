<?php 
include_once"../control/controlAdministrador.php";
$id_usuarioadministrador_fk="1";
$result=deleteAdministrador($id_usuarioadministrador_fk);
echo $result;