<?php 
include_once"../control/controlUsuario.php";
$params=[
"id_usuario"=>"1",
"cuentaAdministrador"=>"uhduhduhd",
"cuentaAlumno"=>"321084654",
"cuentaProf"=>"uhdudgas",
"nombre"=>"paco",
"primer_apellido"=>"lopez",
"segundo_apellido"=>"ramirez",
"correo"=>"pacolr@gmail.com",
"pwd"=>"0000",
"telefono"=>"5516516878",
"fecha_nacimiento"=>"2000-12-10"
];

$result=insertUsuario($params);
echo $result;