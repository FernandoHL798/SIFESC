<?php
//LFHL
function consultaAlumno($idUsuario,$idPlan){
    include_once "../model/ALUMNO.php";
    $ALUMNO = new ALUMNO();
    $result = $ALUMNO->queryConsultaAlumno($idUsuario,$idPlan);
    if(count($result)>0){
        return json_encode($result);
    }else{
        return false;
    }
}

function insertAlumno($params){
   include_once "../model/ALUMNO.php";
   $ALUMNO = new ALUMNO();
   //Verificamos si el usuario existe
   $obj_user= $ALUMNO->queryconsultaExisteUsuario($params['cuentaAlumno']);
   if(count($obj_user)>0){
       //Si existe, agregaremos al plan de estudios que esta.
       include_once "../model/ESTUDIA.php";
       $ESTUDIA= new ESTUDIA();
       $ESTUDIA->setIdUsuarioAlumnoFk($obj_user[0]['id_usuario']);
       $ESTUDIA->setIdPlanFk($params['plan']);
       $ESTUDIA->setAnio($params['generacion']);
       $ESTUDIA->setBaja(0);
       $ESTUDIA->setEstatus(1);
       $ESTUDIA->setTurno(/* Agregar al modal*/1);
       return $ESTUDIA->queryInsertEstudia();
   }
   //En caso de que no exista, creamos al usuario
    else{
        //Generamos a el usuario
        //Se genera el id por la fecha en la que se registro con el tools
        include_once "tools/tools_id_generates.php";
        $clave=genIdUsuario();
        $ALUMNO->setIdUsuario($clave);
        $ALUMNO->setCuentaAlumno($params['cuentaAlumno']);
        $ALUMNO->setNombre($params['nombre']);
        $ALUMNO->setPrimerApellido($params['primer_apellido']);
        $ALUMNO->setSegundoApellido($params['segundo_apellido']);
        $ALUMNO->setCorreo($params['correo']);
        $ALUMNO->setTelefono($params['telefono']);
        $ALUMNO->setFechaNacimiento($params['fecha_nace']);
        //Generamos la contraseña que es la fecha de naciomiento ddmmYYYY
        $date=date_create($params['fecha_nace']);
        $pwd= date_format($date,"dmY");
        $ALUMNO->setContrasenia(md5($pwd));
        $usuario= $ALUMNO->queryInsertUsuario();
        //Si el usuario es generado con exito, generamos al alumno
        if($usuario){
            $ALUMNO->setUsuarioIdFk($clave);
            $alumnoGen= $ALUMNO->queryInsertAlumno();
            //si se creo el alumno, se crea el plan de estudios en el cual esta inscribiendose
            if($alumnoGen){
                include_once "../model/ESTUDIA.php";
                $ESTUDIA= new ESTUDIA();
                $ESTUDIA->setIdUsuarioAlumnoFk($clave);
                $ESTUDIA->setIdPlanFk($params['plan']);
                $ESTUDIA->setAnio($params['generacion']);
                $ESTUDIA->setBaja(0);
                $ESTUDIA->setEstatus(1);
                $ESTUDIA->setTurno(/* Agregar al modal*/1);
                return $ESTUDIA->queryInsertEstudia();
            }
        }
        
       
   }
   
}

function deleteAlumno($id_Alumno){
    include_once "../model/ALUMNO.php";
    $ALUMNO = new ALUMNO();
    return $ALUMNO->queryDeleteAlumno($id_Alumno);
}
//Funcion actualizar estatus del alumno
function updateEstatusAlumno($id_Alumno,$estatus){
    include_once "../model/ALUMNO.php";
    $ALUMNO = new ALUMNO();
    $ALUMNO->setUsuarioIdFk($id_Alumno);
    return $ALUMNO->queryUpdateEstatusAlumno();
}
