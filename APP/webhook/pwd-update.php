<?php

$params = [
"idUsuario"=> "1",
"pwd"=> "1010"
];
include_once "../control/controlUsuario.php";
echo updatePassword($params);