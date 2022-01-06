<?php
function consultaProfesor($idProfesor){
    include_once "../model/PROFESOR.php";
    $PROFESOR = new PROFESOR();
    return json_encode($PROFESOR->queryconsultaProfesor($idProfesor));
}
function consultaNombreProfesor($idProfesor){
    include_once "../model/PROFESOR.php";
    $PROFESOR = new PROFESOR();
    return json_encode($PROFESOR->queryconsultaNombreProfesor($idProfesor));
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
    $contra= date_format($params['fecha_nacimiento'],"dmY");
    $PROFESOR = new PROFESOR();
//GENERAMOS AL USUARIO
    $PROFESOR->setIdUsuario($claveUsuario);
//Codigo de generar IDs
    $PROFESOR->setCuentaProfesor($params['rfc']);
    $PROFESOR->setNombre($params['nombre']);
    $PROFESOR->setPrimerApellido($params['app']);
    $PROFESOR->setSegundoApellido($params['apm']);
    $PROFESOR->setCorreo($params['correo']);
    $PROFESOR->setContrasenia(md5($contra));
    $PROFESOR->setTelefono($params['telefono']);
    $PROFESOR->setFechaNacimiento($params['fecha_nacimiento']);
//Si el USUARIO se crea correctamente, generamos al profesor
    if($PROFESOR->queryInsertUsuario()){
      //Nay aparytado de emails
        include_once "enviaMail.php";
        $PROFESOR->setIdUsuarioFk($PROFESOR->getIdUsuario());
        $PROFESOR->setEstatus(1);
        if($PROFESOR->queryInsertProfesor()){
          //Se tiene que agregar a un departamento
          include_once "controlProfesordepartamento.php";
          return insertProfesordepartamento($PROFESOR->getIdUsuario(),$params['idDepartamento']);
          //Checar correos con Nay porque Fer no supo como hacerlo 
            //return enviaCorreoRegistro($PROFESOR->getCorreo(),$PROFESOR->getNombre(),$PROFESOR->getCuentaProfesor(),"SIFESC");
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
function updateProfesor($params){
    include_once "../model/PROFESOR.php";
    $PROFESOR = new PROFESOR();
    //Setear datos del usuario
    $PROFESOR->setIdUsuario($params['idUsario']);
    $PROFESOR->setCuentaProfesor($params['rfc']);
    $PROFESOR->setNombre($params['nombre']);
    $PROFESOR->setPrimerApellido($params['app']);
    $PROFESOR->setSegundoApellido($params['apm']);
    $PROFESOR->setCorreo($params['correo']);
    $PROFESOR->setFechaNacimiento($params['fecha_nacimiento']);
    $PROFESOR->setTelefono($params['telefono']);
    $obj_user= $PROFESOR->queryUpdateUsuario();
    //Si la actualizacion en el usuario es correcta, entoncese actualizamos el profesor
    if($obj_user){
        return $PROFESOR->queryUpdateProfesor($params[/*Id del usuario que es el mismo del profesor */]);
    }
    return false;
}

function consultaProfesorDepartamento($idDepartamento){
    include_once "../model/PROFESOR.php";
    $PROFESOR = new PROFESOR();
    return json_encode($PROFESOR->queryConsultaProfesorDepartamento($idDepartamento));
}
