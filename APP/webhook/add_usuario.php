<?php 
include_once"../control/controlUsuario.php";
$params=[
"id_usuario"=>"4",
"cuentaAdmi"=>"uhduhduhd",
"cuentaAlumn"=>"321084654",
"cuentaProf"=>"uhdudgas",
"nombre"=>"paco",
"app"=>"lopez",
"apm"=>"ramirez",
"correo"=>"pacolr@gmail.com",
"pwd"=>"0000",
"telefono"=>"5516516878"
];

$result=insertUsuario($params);
echo $result;