<?php 
//Funcion consulta Usuarios
//LFHL
include_once "../model/USUARIO.php";
function consultaUsuarios(){
    $USUARIOS= new USUARIO();
    $result=$USUARIOS->queryConsultaUsuario();
    return json_encode($result);
}
//Las variables que llegaran se cambiaran por una sola con el apartado $params
function updateUsuario($cuentaAdmi,$cuentaAlumn,$cuentaProf,$nombre,$app,$apm,$correo,$telefono,$usuario) {
    $USUARIOS= new USUARIO();
    $USUARIOS->setCuentaAdmi($cuentaAdmi);
    $USUARIOS->setCuentaAlumno($cuentaAlumn);
    $USUARIOS->setCuentaProfesor($cuentaProf);
    $USUARIOS->setNombre($nombre);
    $USUARIOS->setApp($app);
    $USUARIOS->setApm($apm);
    $USUARIOS->setCorreo($correo);
    $USUARIOS->setTelefono($telefono);
    $USUARIOS->setIdUsuario($usuario);
    $result = $USUARIOS->queryUpdateUsuario();
    return $result;
}
function insertUsuario($cuentaAdmi,$cuentaAlumn,$cuentaProf,$nombre,$app,$apm,$correo,$pwd,$telefono){
    $USUARIOS= new USUARIO();
    //FUNCION GENERADORA DE ID
    $USUARIOS->setIdUsuario();
    $USUARIOS->setCuentaAdmi($cuentaAdmi);
    $USUARIOS->setCuentaAlumno($cuentaAlumn);
    $USUARIOS->setCuentaProfesor($cuentaProf);
    $USUARIOS->setNombre($nombre);
    $USUARIOS->setApp($app);
    $USUARIOS->setApm($apm);
    $USUARIOS->setCorreo($correo);
    $USUARIOS->setContrasenia(md5($pwd));
    $USUARIOS->setTelefono($telefono);
    $result= $USUARIOS->queryInsertUsuario();
    return $result;
}
function deleteUsuario($id_usuario){
    $USUARIOS= new USUARIO();
    $USUARIOS->setIdUsuario($id_usuario);
    $result = $USUARIOS->queryDeleteUsuario();
    return $result;
}
//LFHL