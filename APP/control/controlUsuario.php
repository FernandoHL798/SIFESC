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
function updateUsuario($params) {
    $USUARIOS= new USUARIO();
    $USUARIOS->setCuentaAdmi($params['cuentaAdmi']);
    $USUARIOS->setCuentaAlumno($params['cuentaAlumn']);
    $USUARIOS->setCuentaProfesor($params['cuentaProf']);
    $USUARIOS->setNombre($params['nombre']);
    $USUARIOS->setApp($params['app']);
    $USUARIOS->setApm($params['apm']);
    $USUARIOS->setCorreo($params['correo']);
    $USUARIOS->setTelefono($params['telefono']);
    $USUARIOS->setIdUsuario($params['id_usuario']);
    $result = $USUARIOS->queryUpdateUsuario();
    return $result;
}
function insertUsuario($params){
    $USUARIOS= new USUARIO();
    //FUNCION GENERADORA DE ID
    $USUARIOS->setIdUsuario($params['id_usuario']);
    $USUARIOS->setCuentaAdmi($params['cuentaAdmi']);
    $USUARIOS->setCuentaAlumno($params['cuentaAlumn']);
    $USUARIOS->setCuentaProfesor($params['cuentaProf']);
    $USUARIOS->setNombre($params['nombre']);
    $USUARIOS->setApp($params['app']);
    $USUARIOS->setApm($params['apm']);
    $USUARIOS->setCorreo($params['correo']);
    $USUARIOS->setContrasenia(md5($params['pwd']));
    $USUARIOS->setTelefono($params['telefono']);
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