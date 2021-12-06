<?php 
include_once"../control/controlUsuario.php";
$params=[
"id_usuario"=>"11",
"cuentaAdministrador"=>"uhduhduhd",
"cuentaAlumno"=>"321084654",
"cuentaProf"=>"uhdudgas",
"nombre"=>"Paco",
"primer_apellido"=>"lopez",
"segundo_apellido"=>"ramirez",
"correo"=>"pacolr@gmail.com",
"pwd"=>"0000",
"telefono"=>"5516516878",
"fecha_nacimiento"=>"2000-12-10",
"pregunta_secreta"=>"2",
"respuesta_secreta"=>"manchas"
];

$result=insertUsuario($params);
echo $result;