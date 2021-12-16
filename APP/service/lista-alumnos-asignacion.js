$(document).ready(function(){
	console.log("Escuchando Acciones");
    cargaAlumnosAsignacion();
});

function cargaAlumnosAsignacion(){
    $.ajax({
        url: "../webhook/lista_Movimientos_Asignacion.php",
        type: 'POST',
        data : { idAsignacion: $("#idAsignacion").val()},
        success: function (response) {
            //Convertimos el string a JSON
            let ALUMNOS = JSON.parse(response);  
            console.log(ALUMNOS);
            let alumnosVal= ALUMNOS.length;
            let template="";
            //Generamos el dato de el grupo
            let datos= ALUMNOS[0];
            console.log(datos);
            $("#idPlan").html(datos.id_plan);
            if(alumnosVal>0){
            ALUMNOS.forEach(alumno => {
                template += `
                <tr>
                            <td data-label="NÚMERO">${alumno.cuenta_alumno}</td>
                            <td data-label="NOM ALUMNO">${alumno.primer_apellido+" "+ alumno.segundo_apellido+ " "+ alumno.nombre_alumno}</td>
                            <td data-label="CORREO">${alumno.correo}</td>
                            <td data-label="TELEFONO">${alumno.telefono}</td>
                            //Preguntar el apartado del estatus
                            <td data-la data-label="ESTATUS">EN CURSO</td>
                        </tr>
                `;    
            });
            $("#tbl-alumnos-asignacion").html(template);    
        } else{
            template=`<h4> NO HAY ALUMNOS INSCRITOS </h4>`;
            //Falta ocultar boton imprimir
            $("#tbl-alumnos-asignacion").html(template); 
        }
            
            }
    });
}