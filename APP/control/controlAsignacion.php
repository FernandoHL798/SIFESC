<?php
//LFHL
function consultaAsignacion($id_plan){
 include_once "../model/ASIGNACION.php"   ;
 $ASIGNACION = new ASIGNACION();
 return json_encode($ASIGNACION->queryconsultaAsignacion($id_plan));
}

