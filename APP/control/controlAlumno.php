<?php
/*funcion para consulta alumnos*/
function consultaAlumnos(){
	include_once"../model/ALUMNOS.php";
	$obj_alumnos=new ALUMNOS();
	$resultado=$obj_alumnos->queryconsultaAlumnos();
	return $resultado;
}

/* funcion para insertar alumnos*/
function insertarAlumno(){
	include_once"../model/ALUMNO.php";
	$obj_alumnos=new ALUMNOS();
	$obj_alumnos->setNumCuenta("316039109");
	$obj_alumnos->setNombre("Nayelli");
	$obj_alumnos->setApp("Soto");
	$obj_alumnos->setApm("Zuñiga");
	$obj_alumnos->setFechaNacimiento("2000-10-06");
	$obj_alumnos->setCorreo("nayellisotoz@gmail.com");
	$obj_alumnos->setPwd("1234");
	$obj_alumnos->setPregunta("color favorito?");
	$obj_alumnos->setRespuesta("Morado");
	$resultado=$obj_alumnos->queryInsertAlumno();
	return $resultado;
}