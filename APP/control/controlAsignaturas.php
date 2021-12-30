<?php
//FUncion para consulta de todas las asignaturas.
function consultaAsignaturas($id_plan,$periodo){
    include_once "../model/ASIGNATURAS.php";
    $ASIGNATURA= new ASIGNATURA();
    $result = $ASIGNATURA->queryConsultaAsignaturas($id_plan,$periodo);
    return json_encode($result);
}

//Funcion para agregar materia
//PARAMETROS CON ESTILO $params, se hará cuando se cree el MS
function insertAsignatura($params){
    include_once "../model/ASIGNATURAS.php";
    $ASIGNATURA= new ASIGNATURA();
    //Se genera el ID con una función despues. 
    $ASIGNATURA->setIdAsignatura($params['idasignatura']);
    $ASIGNATURA->setIdPlanFk($params['idPlan']);
    $ASIGNATURA->setCodigo($params['codigo']);
    $ASIGNATURA->setNombre($params['nombre']);
    $ASIGNATURA->setCreditos($params['creditos']);
    $ASIGNATURA->setAntecesor($params['antecesor']);
    $ASIGNATURA->setSucesor($params['sucesor']);
    $ASIGNATURA->setCaracter($params['caracter']);
    $ASIGNATURA->setSemestre($params['semestre']);
    $result = $ASIGNATURA->queryInsertAsignaturas();
    return $result;
}
//funcion para actualizar asignaturas
//PARAMETROS CON ESTILO $params, se hará cuando se cree el MS
function updateAsignaturas($params, $estatus){
    include_once "../model/ASIGNATURAS.php";
    $ASIGNATURA= new ASIGNATURA();
    $ASIGNATURA->setIdAsignatura($params['idasignatura']);
    $ASIGNATURA->setCodigo($params['codigo']);
    $ASIGNATURA->setNombre($params['nombre']);
    $ASIGNATURA->setCreditos($params['creditos']);
    $ASIGNATURA->setAntecesor($params['antecesor']);
    $ASIGNATURA->setSucesor($params['sucesor']);
    $ASIGNATURA->setCaracter($params['caracter']);
    $ASIGNATURA->setSemestre($params['semestre']);
    //$ASIGNATURA->setEstatus($params['estatus']);
    $result = $ASIGNATURA->queryUpdateAsignaturas($estatus);
    return $result;
}
//funcion para eliminar asignaturas

function deleteAsignatura($id_asignatura, $estatus){
    include_once "../model/ASIGNATURAS.php";
    $ASIGNATURA= new ASIGNATURA();
    $ASIGNATURA->setIdAsignatura($id_asignatura);
    $result= $ASIGNATURA->queryDeleteAsignaturas($estatus);
    return $result;
}

function updateestatusasignaturaplan($idPlan,$codigo,$estatus){
    include_once "../model/ASIGNATURAS.php";
    $ASIGNATURA= new ASIGNATURA();
    $result= $ASIGNATURA->queryUpdateEstatusAsignaturasPlan($idPlan,$codigo,$estatus);
    return $result;
}
