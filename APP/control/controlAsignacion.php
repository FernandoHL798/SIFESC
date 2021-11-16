<?php
//LFHL
function consultaAsignacion(){
 include_once "../model/ASIGNACION.php"   ;
 $ASIGNACION = new ASIGNACION();
 return json_encode($ASIGNACION->queryconsultaAsignacion());
}

