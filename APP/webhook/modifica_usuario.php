<?php 
include_once"../control/controlUsuario.php";
$params=[
"id_usuario"=>"3",
"cuentaAdministrador"=>"uhduhduhd",
"cuentaAlumno"=>"321084654",
"cuentaProf"=>"uhdudgas",
"nombre"=>"paco",
"primer_apellido"=>"lopez",
"segundo_apellido"=>"ramirez",
"correo"=>"pacolr@gmail.com",
"telefono"=>"5516516878",
"fecha_nacimiento"=>"2000-12-10",
"pregunta_secreta"=>"1",
"respuesta_secreta"=>"negrita"
];

$result=updateUsuario($params);
echo $result;