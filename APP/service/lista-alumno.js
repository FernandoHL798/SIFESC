$(document).ready(function(){
	datosAlumno();
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
            $("#nombreAlumno").html(ALUMNO[0].nombre);
            }
        
    });
}