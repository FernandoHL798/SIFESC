$(document).ready(function(){
    getPeriodo();
    verificaDosificacion();
});

function getPeriodo(){
    $.ajax({
        url: "../webhook/consultaPeriodo-dosificacion.php",
        type: 'POST',
        data : {   },
        success: function (response) {
            //Convertimos el string a JSON
            let PERIODOS = JSON.parse(response); 
            let template="";
            console.log(PERIODOS);
            $("#nombre_periodo").html(PERIODOS[0].periodo);
            getDatosAlumno();
            }
        });   
}

function getDatosAlumno(){
    $.ajax({
        url: "../webhook/lista-alumno-dosificacion.php",
        type: 'POST',
        data : {   idUsuario: $("#idUsuario").val(),
        			idPlan: $("#idPlan").val()     },
        success: function (response) {
            //Convertimos el string a JSON
            console.log(response);
            let ALUMNOS = JSON.parse(response); 
            let template="";
            console.log(ALUMNOS);
            let alumno= ALUMNOS[0];
            console.log(alumno.cuenta_alumno);
            $("#tbl-noCuenta").html(alumno.cuenta_alumno);
            $("#tbl-nombreAlumno").html(alumno.nombre_alumno+' '+alumno.primer_apellido+' '+ alumno.segundo_apellido);
            let turno = alumno.turno>1 ? "Vespertino" : "Matutino";
            $("#tbl-Turno").html(turno);
            $("#tbl-Carrera").html(alumno.clave+' - '+alumno.nombre_carrera);
            }
        });   
}

function verificaDosificacion(){
    $.ajax({
        url: "../webhook/consultaPeriodo-dosificacion.php",
        type: 'POST',
        data : {   },
        success: function (response) {
            //Convertimos el string a JSON
            let PERIODOS = JSON.parse(response); 
            let template="";
            console.log(PERIODOS);
            $("#nombre_periodo").html(PERIODOS[0].periodo);
            getDatosAlumno();
            }
        });      
}