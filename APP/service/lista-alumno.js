$(document).ready(function(){
	datosAlumno();
    getAsignaturas();
    getAsignaciones(5);
});
//Funcion para realizar peticion a un microservicio 
function datosAlumno(){
	$.ajax({
        url: "../webhook/lista_alumnos.php",
        type: 'POST',
        data : {   idUsuario: "8",
        			idPlan: "9"     },
        success: function (response) {
            //Convertimos el string a JSON
            let ALUMNO = JSON.parse(response);  
            console.log(ALUMNO);
	        $("#cuenta_alumno").html(ALUMNO[0].cuenta_alumno);
            $("#nombreAlumno").html(ALUMNO[0].nombre+' '+ALUMNO[0].primer_apellido+' '+ALUMNO[0].segundo_apellido);
            $("#anioEstudia").html(ALUMNO[0].anio);
            $("#idCarrera").html(ALUMNO[0].carrera_clave);
            $("#Plantel").html(ALUMNO[0].id_plantel+' - '+ALUMNO[0].nombre_facultad+' ('+ALUMNO[0].nombre_plantel+')');
            $("#Plan").html(ALUMNO[0].id_plan+' - '+ALUMNO[0].nombre_plan);
            $("#creditoMaximo").html(ALUMNO[0].maximo_creditos);
            }
            
    });
}
function getAsignaturas(){
    $.ajax({
        url: "../webhook/lista_asignatura.php",
        type: 'POST',
        data : {       idPlan: "1119"     },
        success: function (response) {
            //Convertimos el string a JSON
            let ASIGNATURAS = JSON.parse(response);  
            console.log(ASIGNATURAS);
            let template="";
            template+=  `<option selected>Selecciona la materia</option>`;
            ASIGNATURAS.forEach(asignatura=>{
                if(asignatura.semestre<="1"){
                template += `
                        <option value="${asignatura.id_asignatura}">${asignatura.nombre}</option>
                `;    
                }
                
            });
            $("#asig_materia").html(template);
            }
        });
}

function getAsignaciones(idAsignatura){
     $.ajax({
        url: "../webhook/lista_asignacion.php",
        type: 'POST',
        data : {       idPlan: "1119",
        idAsignatura:idAsignatura    },
        success: function (response) {
            //Convertimos el string a JSON
            let ASIGNACIONES = JSON.parse(response);  
            console.log(ASIGNACIONES);
            let template="";
            ASIGNACIONES.forEach(asignatura=>{
                
            });
            
            }
        });
}