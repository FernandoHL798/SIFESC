<?php
include_once "../control/Control_Periodo_ORB.php";
$params = [
	"id_periodo" =>"45",
	"periodo" => "2021-2",
	"fecha_inscripcion" => "2021-11-28",
	"fecha_altas_bajas" => "2021-12-01"
];
$result = updatePeriodoorb($params);
echo $result;