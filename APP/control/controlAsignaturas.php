<?php
//FUncion para consulta de todas las asignaturas.
function consultaAsignaturas(){
    include_once "../model/ASIGNATURAS.php";
    $ASIGNATURA= new ASIGNATURA();
    $result = $ASIGNATURA->queryConsultaAsignaturas();
    return json_encode($result);
}

//Funcion para agregar materia
//PARAMETROS CON ESTILO $params, se hará cuando se cree el MS
function insertAsignatura($idPlan,$codigo,$nombre,$creditos,$antecesor,$sucesor,$caracter,$semestre){
    include_once "../model/ASIGNATURAS.php";
    $ASIGNATURA= new ASIGNATURA();
    //Se genera el ID con una función despues. 
    $ASIGNATURA->setIdAsignatura();
    $ASIGNATURA->setIdPlanFk($idPlan);
    $ASIGNATURA->setCodigo($codigo);
    $ASIGNATURA->setNombre($nombre);
    $ASIGNATURA->setCreditos($creditos);
    $ASIGNATURA->setAntecesor($antecesor);
    $ASIGNATURA->setSucesor($sucesor);
    $ASIGNATURA->setCaracter($caracter);
    $ASIGNATURA->setSemestre($semestre);
    $result = $ASIGNATURA->queryInsertAsignaturas();
    return $result;
}
//funcion para actualizar asignaturas
//PARAMETROS CON ESTILO $params, se hará cuando se cree el MS
function updateAsignaturas($idAsignatura,$codigo,$nombre,$creditos,$antecesor,$sucesor,$caracter,$semestre){
    include_once "../model/ASIGNATURAS.php";
    $ASIGNATURA= new ASIGNATURA();
    $ASIGNATURA->setIdAsignatura($idAsignatura);
    $ASIGNATURA->setCodigo($codigo);
    $ASIGNATURA->setNombre($nombre);
    $ASIGNATURA->setCreditos($creditos);
    $ASIGNATURA->setAntecesor($antecesor);
    $ASIGNATURA->setSucesor($sucesor);
    $ASIGNATURA->setCaracter($caracter);
    $ASIGNATURA->setSemestre($semestre);
    $result = $ASIGNATURA->queryUpdateAsignaturas();
    return $result;
}
//funcion para eliminar asignaturas

function deleteAsignatura(){
    include_once "../model/ASIGNATURAS.php";
    $ASIGNATURA= new ASIGNATURA();
    $ASIGNATURA->setIdAsignatura($idAsignatura);
    $result= $ASIGNATURA->queryDeleteAsignaturas();
    return $result;
}