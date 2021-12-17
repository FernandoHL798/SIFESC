$(document).ready(function(){
    cargaGrupo();
    cargaAlumnosAsignacion();
});

function cargaGrupo(){
    $.ajax({
        url: "../webhook/lista_grupos_asignatura.php",
        type: 'POST',
        data : { idAsignacion: $("#idAsignacion").val(),
                idUsuario: $("#idUsuario").val()},
        success: function (response) {
            //Convertimos el string a JSON
            let GRUPOS = JSON.parse(response);  
            let grupo= GRUPOS[0];
            $("#Plan").html(GRUPOS[0].nombre_plan);
            $("#carre").html(GRUPOS[0].nombre_carrera);
            $("#codigoAsig").html(grupo.codigo);
            $("#nombreAsig").html(grupo.nombre_asignatura);
            $("#grupo").html(grupo.nombre_grupo);
            $("#semestre").html(grupo.semestre);
            }
    });
}

function cargaAlumnosAsignacion(){
    $.ajax({
        url: "../webhook/lista_Movimientos_Asignacion.php",
        type: 'POST',
        data : { idAsignacion: $("#idAsignacion").val()},
        success: function (response) {
            //Convertimos el string a JSON
            let ALUMNOS = JSON.parse(response);
            let alumnosVal= ALUMNOS.length;
            let template="";
            //Generamos el dato de el grupo
            let datos= ALUMNOS[0];
            $("#idPlan").html(datos.id_plan);
            if(alumnosVal>0){
            ALUMNOS.forEach(alumno => {
                template += `
                <tr>
                            <td data-label="NÚMERO">${alumno.cuenta_alumno}</td>
                            <td data-label="NOM ALUMNO">${alumno.primer_apellido+" "+ alumno.segundo_apellido+ " "+ alumno.nombre_alumno}</td>
                            <td data-label="CORREO">${alumno.correo}</td>
                            <td data-label="TELEFONO">${alumno.telefono}</td>
                            <td data-la data-label="ESTATUS">${alumno.estatus}</td>
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