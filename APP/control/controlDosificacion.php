<?php

function consultaDosificacion(){
    include_once "../model/DOSIFICACION.php";
    $DOSIFICACION = new DOSIFICACION();
    return json_encode($DOSIFICACION->queryconsultaDosificacion());
}

function updateDosificacion($params){
    include_once "../model/DOSIFICACION.php";
    $DOSIFICACION = new DOSIFICACION();
    $DOSIFICACION->setIdUsuarioAlumnoFk($params['id_usuarioalumno_fk']);
    $DOSIFICACION->setIdPeriodoFk($params['id_periodo_fk']);
    $DOSIFICACION->setFechaInscripcion($params['fecha_inscripcion']);
    $DOSIFICACION->setHoraInscripcion($params['hora_inscripcion']);
    $DOSIFICACION->setFechaAltaBaja($params['fecha_altabaja']);
    return $DOSIFICACION->queryUpdateDosificacion();
}

function insertDosificacion($params){
    include_once "../model/DOSIFICACION.php";
    $DOSIFICACION = new DOSIFICACION();
    $DOSIFICACION->setIdUsuarioAlumnoFk($params['id_usuarioalumno_fk']);
    $DOSIFICACION->setIdPeriodoFk($params['id_periodo_fk']);
    $DOSIFICACION->setFechaInscripcion($params['fecha_inscripcion']);
    $DOSIFICACION->setHoraInscripcion($params['hora_inscripcion']);
    $DOSIFICACION->setFechaAltaBaja($params['fecha_altabaja']);
    return $DOSIFICACION->queryInsertDosificacion();
}

function deleteDosificacion($params){
    include_once "../model/DOSIFICACION.php";
    $DOSIFICACION = new DOSIFICACION();
    $DOSIFICACION->setIdUsuarioAlumnoFk($params['id_usuarioalumno_fk']);
    $DOSIFICACION->setIdPeriodoFk($params['id_periodo_fk']);
    return $DOSIFICACION->queryDeleteDosificacion();
}

function consultaDosificacionPeriodo($idUsuario,$idPeriodo){
    include_once "../model/DOSIFICACION.php";
    $DOSIFICACION = new DOSIFICACION();
    //Verificamos que exista la dosificacion con el ultimo periodo
    $obj_dosificacion= $DOSIFICACION->queryconsultaDosificacionPeriodo($idUsuario,$idPeriodo);
    //Si existe, retornará ese mismo valor que esta en la DB
    if(count($obj_dosificacion)>0){
        return json_encode($obj_dosificacion);
    } else{
        //Sino, generaremos la dosificacion con los seteos para la dosificacion 
        //Generar el algoritmo para la fecha y hora de inscripcion
        $DOSIFICACION->setIdUsuarioAlumnoFk($idUsuario);
        $DOSIFICACION->setIdPeriodoFk($idPeriodo);
        $DOSIFICACION->setFechaInscripcion();
        $DOSIFICACION->setHoraInscripcion();
        //Agregamos la dosificacion
        $result= $DOSIFICACION->queryInsertDosificacion();
        //Si la agregacion fue correcta, retornamos la informacion
        if($result){
            $obj_dosificacion= $DOSIFICACION->queryconsultaDosificacionPeriodo($idUsuario,$idPeriodo);
            return json_encode($obj_dosificacion);
        }
        
    }
}