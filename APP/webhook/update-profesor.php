<?php
$params = [
"idUsario"=>$_POST['id_usuario_edit'],
"nombre"=>$_POST['nombre_profesor_edit'],
"app"=>$_POST['app_edit'],
"apm"=>$_POST['apm_edit'],
"correo"=>$_POST['correo_edit'],
"fecha_nacimiento"=>$_POST['fechaNacimiento_edit'],
"telefono"=>$_POST['telefono_edit'],
"rfc"=>$_POST['rfc_edit'],
];
include_once "../control/controlProfesor.php";
echo $params;