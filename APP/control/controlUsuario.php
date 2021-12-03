<?php 
//Funcion consulta Usuarios
//LFHL
function consultaUsuarios($correoUsu){
    include_once "../model/USUARIO.php";
    $USUARIOS= new USUARIO();
    $result=$USUARIOS->queryConsultaUsuario($correoUsu);
    return json_encode($result);
}

function updatePreguntaUsuario($params){
    include_once "../model/USUARIO.php";
   $USUARIO = new USUARIO();
   $USUARIO->setIdUsuario($params['id_usuario']);
   $USUARIO->setPreguntaSecreta($params['pregunta_secreta']);
   $USUARIO->setRespuestaSecreta($params['respuesta_secreta']);
   $result= $USUARIO->queryUpdateRPwdAlumno();
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
    $USUARIOS->setIdUsuario($params['id_usuario']);
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

function updatePassword($params){
    include_once "../model/USUARIO.php";
    $USUARIOS= new USUARIO();
    $USUARIOS->setIdUsuario($params['idUsuario']);
    $USUARIOS->setContrasenia($params['pwd']);
    return $USUARIOS->queryUpdatePassword();
}
//LFHL