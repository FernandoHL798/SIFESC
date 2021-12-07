<?php
include_once "../control/EMH_PRUEBA_CONTROL_PERIODO.php";

$id_periodo = "1";
$result=deletePeriodo($id_periodo);
echo $result;