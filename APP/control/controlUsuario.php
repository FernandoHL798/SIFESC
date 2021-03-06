<?php 
//Funcion consulta Usuarios
//LFHL
function consultaUsuarios($correoUsu){
    include_once "../model/USUARIO.php";
    $USUARIOS= new USUARIO();
    $result=$USUARIOS->queryConsultaUsuario($correoUsu);
    return json_encode($result);
}

function pswRecuperaContraUsuarios($params){
    include_once "../model/USUARIO.php";
    $USUARIOS= new USUARIO();
    $USUARIOS->setCorreo($params['correo']);
    $USUARIOS->setFechaNacimiento($params['fecha']);
    $USUARIOS->setPreguntaSecreta($params['pregunta']);
    $USUARIOS->setRespuestaSecreta($params['respuesta']);
    $USUARIOS->setContrasenia(md5($params['contra']));
    $result=$USUARIOS->queryUpdateContraUsuario();
    return json_encode($result);
}


function updatePreguntaUsuario($params){
    include_once "../model/USUARIO.php";
   $USUARIO = new USUARIO();
   $USUARIO->setIdUsuario($params['id_usuario']);
   $USUARIO->setPreguntaSecreta($params['pregunta_secreta']);
   $USUARIO->setRespuestaSecreta($params['respuesta_secreta']);
   $result= $USUARIO->queryUpdateRPwdUsuario();
   return $result;
}

//Las variables que llegaran se cambiaran por una sola con el apartado $params
function updateUsuario($params) {
    include_once "../model/USUARIO.php";
    $USUARIOS= new USUARIO();
    $USUARIOS->setCuentaAdministrador($params['cuentaAdministrador']);
    $USUARIOS->setCuentaAlumno($params['cuentaAlumno']);
    $USUARIOS->setCuentaProfesor($params['cuentaProf']);
    $USUARIOS->setNombre($params['nombre']);
    $USUARIOS->setPrimerApellido($params['primer_apellido']);
    $USUARIOS->setSegundoApellido($params['segundo_apellido']);
    $USUARIOS->setCorreo($params['correo']);
    $USUARIOS->setTelefono($params['telefono']);
    $USUARIOS->setFechaNacimiento($params['fecha_nacimiento']);
    $USUARIOS->setIdUsuario($params['id_usuario']);
    $result = $USUARIOS->queryUpdateUsuario();
    return $result;
}
function insertUsuario($params){
    include_once "../model/USUARIO.php";
    $USUARIOS= new USUARIO();
    //FUNCION GENERADORA DE ID
    $USUARIOS->setIdUsuario($params['cuenta']);
    $USUARIOS->setCuentaAdministrador($params['cuentaAdministrador']);
    $USUARIOS->setCuentaAlumno($params['cuentaAlumno']);
    $USUARIOS->setCuentaProfesor($params['cuentaProf']);
    $USUARIOS->setNombre($params['nombre']);
    $USUARIOS->setPrimerApellido($params['primer_apellido']);
    $USUARIOS->setSegundoApellido($params['segundo_apellido']);
    $USUARIOS->setCorreo($params['correo']);
    $USUARIOS->setContrasenia(md5($params['pwd']));
    $USUARIOS->setTelefono($params['telefono']);
    $USUARIOS->setFechaNacimiento($params['fecha_nacimiento']);
    $USUARIOS->setPreguntaSecreta($params['pregunta_secreta']);
    $USUARIOS->setRespuestaSecreta($params['respuesta_secreta']);
    $result= $USUARIOS->queryInsertUsuario();
    return $result;
}
function deleteUsuario($id_usuario){
    include_once "../model/USUARIO.php";
    $USUARIOS= new USUARIO();
    $USUARIOS->setIdUsuario($id_usuario);
    $result = $USUARIOS->queryDeleteUsuario();
    return $result;
}

function consultaPassword($params){
    include_once "../model/USUARIO.php";
    $USUARIOS= new USUARIO();
    $USUARIOS->setIdUsuario($params['idUsuario']);
    $USUARIOS->setContrasenia(md5($params['pwdA']));
    $obj_user = $USUARIOS->queryConsultaPassword();
    if(count($obj_user)>0){
        $USUARIOS->setContrasenia(md5($params['pwd']));
        return $USUARIOS->queryUpdatePassword();
    }
    return false;
}

function verficaUsuario($correo, $pw){
    include_once "../model/USUARIO.php";
    $USUARIO = new USUARIO();
    $USUARIO->setCorreo($correo);
    $USUARIO->setContrasenia(md5($pw));
    $obj_user = $USUARIO->queryconsultaUsuario();
    if(count($obj_user) > 0 ){
        //creamos la sesion
        session_start();
        $_SESSION['id_usuario']    = $obj_user[0]['id_usuario'];
        $_SESSION['usuario']        = $obj_user[0]['nombre'];
        $_SESSION['app']       = $obj_user[0]['primer_apellido'];
        $_SESSION['apm']       = $obj_user[0]['segundo_apellido'];
        $_SESSION['numero_cuenta']         = $obj_user[0]['cuenta_alumno'];
        $_SESSION['rfc']   = $obj_user[0]['cuenta_profesor'];
        $_SESSION['no_trabajador']    = $obj_user[0]['cuenta_administrador'];
        $_SESSION['correo']    = $obj_user[0]['correo'];
        $_SESSION['sessionSuccess']    = true;
        return true;
    }
    return false;
}

function consultaUsuarioPreguntaCorreo($params){
    include_once "../model/USUARIO.php";
    $USUARIO = new USUARIO();
    $USUARIO->setCorreo($params['correo']);
    $USUARIO->setPreguntaSecreta($params['pregunta']);
    $USUARIO->setRespuestaSecreta($params['respuesta']);
    $obj_user = $USUARIO->queryConsultaUsuarioPreguntaCorreo();
    if(count($obj_user) > 0 ){
        include_once "tools/tools_id_generates.php";
        $USUARIO->setIdUsuario($obj_user[0]['id_usuario']) ;
        $npw = generar_password_complejo();
        $USUARIO->setContrasenia(md5($npw));
        if($USUARIO->queryUpdatePassword()){
            include_once "../send.php";
            return enviaCorreo($params['correo'],$obj_user[0]['nombre'],$npw);
        }
    }
    return false;
    
}
//LFHL