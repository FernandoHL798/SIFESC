<?php 
include_once"../control/controlAsignaturas.php";
$idPlan="023";
$codigo="5568";
$nombre="Matematicas V";
$creditos="12";
$antecesor="Matematicas III";
$sucesor="Matematicas VI";
$caracter="ob";
$semestre="5";
var_dump(insertAsigantura($idPlan,$codigo,$nombre,$creditos,$antecesor,$sucesor,$caracter,$semestre));