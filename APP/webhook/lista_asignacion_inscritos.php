<?php
include_once "../control/controlAsignacion.php";
$idAsignacion = $_POST['idAsignacion'];
$result=consultaInscritosAsignacion($idAsignacion);
echo $result;