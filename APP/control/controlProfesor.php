<?php
function consultaProfesor($idProfesor){
    include_once "../model/PROFESOR.php";
    $PROFESOR = new PROFESOR();
    return json_encode($PROFESOR->queryconsultaProfesor($idProfesor));
}

function updateEstatusProfesor($params){
    include_once "../model/PROFESOR.php";
    $PROFESOR = new PROFESOR();
    $PROFESOR->setIdUsuarioFk($params['id_usuarioprofesor_fk']);
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
        include_once "enviaMail.php";
        $PROFESOR->setIdUsuarioFk($PROFESOR->getIdUsuario());
        $PROFESOR->setEstatus(1);
        if($PROFESOR->queryInsertProfesor()){
            return enviaCorreoRegistro($PROFESOR->getCorreo(),$PROFESOR->getNombre(),$PROFESOR->getCuentaProfesor(),"SIFESC");
        } 
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