<?php
//LFHL
function consultaAlumno(){
   include_once "../model/ALUMNO.php";
   $ALUMNO = new ALUMNO();
   $result = $ALUMNO->queryConsultaAlumno();
   return json_encode($result);
}

function updatePreguntaAlumno($params){
    include_once "../model/ALUMNO.php";
   $ALUMNO = new ALUMNO();
   $ALUMNO->setUsuarioIdFk($params['id_Alumno']);
   $ALUMNO->setRequestPw($params['']);
   $ALUMNO->setAnsRequest($params['']);
   $result= $ALUMNO->queryUpdateRPwdAlumno();
   return $result;
}

function insertAlumno($params){
   include_once "../model/ALUMNO.php";
   $ALUMNO = new ALUMNO();
   $ALUMNO->setUsuarioIdFk($params['id_usuarioalumno_fk']);
   $ALUMNO->setIdGeneraciónFk($params['id_generacion_fk']);
   $ALUMNO->setRequestPw($params['request_pw']);
   $ALUMNO->setAnsRequest($params['ans_request']);
   //Cuando un alumno se crea, el valor del estatus es 1 (Activo)
   $ALUMNO->setEstatus(1);
   //Cuando se crea un Alumno nuevo, el valor predefinido de bajas es 0
   $ALUMNO->setBaja(0);
   return $ALUMNO->queryInsertAlumno();
}

function deleteAlumno($id_Alumno){
    include_once "../model/ALUMNO.php";
    $ALUMNO = new ALUMNO();
    return $ALUMNO->queryDeleteAlumno($id_Alumno);
}
//Funcion actualizar estatus del alumno
function updateEstatusAlumno($id_Alumno,$estatus){
    include_once "../model/ALUMNO.php";
    $ALUMNO = new ALUMNO();
    $ALUMNO->setEstatus($estatus);
    $ALUMNO->setUsuarioIdFk($id_Alumno);
    return $ALUMNO->queryUpdateEstatusAlumno();
}