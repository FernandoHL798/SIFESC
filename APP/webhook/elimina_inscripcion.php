<?php 
include_once"../control/controlInscripcion.php";
$id_inscripcion="1";
$result=deleteInscripcion($id_inscripcion);
echo $result;