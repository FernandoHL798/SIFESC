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
"telefono"=>"5516516878"
];

$result=updateUsuario($params);
echo $result;