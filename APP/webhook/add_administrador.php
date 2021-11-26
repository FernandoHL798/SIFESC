<?php 
include_once"../control/controlAdministrador.php";
$id_usuarioadministrador_fk="1";
$result=insertAdministrador($id_usuarioadministrador_fk);
echo $result;