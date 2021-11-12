<?php 
include_once"../control/controlUsuario.php";
$params=[
"id_usuario"=>"3",
"cuentaAdmi"=>"uhduhduhd",
"cuentaAlumn"=>"321084654",
"cuentaProf"=>"uhdudgas",
"nombre"=>"paco",
"app"=>"lopez",
"apm"=>"ramirez",
"correo"=>"pacolr@gmail.com",
"telefono"=>"5516516878"
];

$result=updateUsuario($params);
echo $result;