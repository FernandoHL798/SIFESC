<?php
function consultaProfesor(){
    include_once "../model/PROFESOR.php";
    $PROFESOR = new PROFESOR();
    return json_encode($PROFESOR->queryconsultaProfesor());
}

function updateEstatusProfesor($params){
    include_once "../model/PROFESOR.php";
    $PROFESOR = new PROFESOR();
    $PROFESOR->setIdUsuarioFk($params['id_usuarioprofesor_fk']);
    $PROFESOR->setIdDepartamentoFk($params['id_departamento_fk']);
    $PROFESOR->setEstatus($params['estatus']);
    return $PROFESOR->queryUpdateEstatusProfesor();
}

function insertProfesor($params){
    include_once "../model/PROFESOR.php";
    include "tools/tools_id_generates.php";
    $claveUsuario = genIdUsuario();
    $PROFESOR = new PROFESOR();
//GENERAMOS AL USUARIO
    $PROFESOR->setIdUsuario($claveUsuario);
//Codigo de generar IDs
    $PROFESOR->setCuentaProfesor($params['rfc']);
    $PROFESOR->setNombre($params['nombre']);
    $PROFESOR->setPrimerApellido($params['app']);
    $PROFESOR->setSegundoApellido($params['apm']);
    $PROFESOR->setCorreo($params['correo']);
    $PROFESOR->setContrasenia(md5($params['fecha_nacimiento']));
    $PROFESOR->setTelefono($params['telefono']);
    $PROFESOR->setFechaNacimiento($params['fecha_nacimiento']);
//Si el USUARIO se crea correctamente, generamos al profesor
    if($PROFESOR->queryInsertUsuario()){
        $PROFESOR->setIdUsuarioFk($PROFESOR->getIdUsuario());
        $PROFESOR->setIdDepartamentoFk($params['id_departamento_fk']);
        $PROFESOR->setEstatus(1);
        return $PROFESOR->queryInsertProfesor();
    }
    //Sino, retornamos error
    return false;
    
}

function deleteProfesor($idUsuario){
    include_once "../model/PROFESOR.php";
    $PROFESOR = new PROFESOR();
    $PROFESOR->setIdUsuarioFk($idUsuario);
    return $PROFESOR->queryDeleteProfesor();
}