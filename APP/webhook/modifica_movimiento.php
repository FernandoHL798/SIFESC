<?php 
include_once"../control/controlMovimiento.php";
$params=[
    "id_inscripcion_fk"=>$_POST['idInscripcion'],
    "id_asignacion_fk"=>$_POST['idAsignacion'],
    "estatus"=>$_POST['estatus']
];
$result=updateMovimiento($params);
echo $result;