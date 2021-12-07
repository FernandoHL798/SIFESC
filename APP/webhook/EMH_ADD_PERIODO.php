<?php
include_once "../control/EMH_PRUEBA_CONTROL_PERIODO.php";
$params =[
"id_periodo" => "9",
"periodo" => "2047",
"fecha_inscripcion" => "06-01-2022",
"fecha_altas_bajas" => "29-12-2021"
];
$result = insertPeriodo($params);
echo $result;