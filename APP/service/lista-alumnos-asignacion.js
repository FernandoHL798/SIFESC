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
            cargaAlumnosAsignacion(GRUPOS[0].id_plan);
            }
    });
}

function cargaAlumnosAsignacion(idPlan){
    $.ajax({
        url: "../webhook/lista_Movimientos_Asignacion.php",
        type: 'POST',
        data : { idAsignacion: $("#idAsignacion").val(),
                 idPlan: idPlan},
        success: function (response) {
            //Convertimos el string a JSON
            let ALUMNOS = JSON.parse(response);
            let alumnosVal= ALUMNOS.length;
            let template="";
            let cont=0;
            //Generamos el dato de el grupo
            let datos= ALUMNOS[0];
            $("#idPlan").html(datos.id_plan);
            if(alumnosVal>0){
            ALUMNOS.forEach(alumno => {
                if(alumno.estatus==1){
                    estaAlum='Activo';
                    console.log(estaAlum);
                }else{
                    if(alumno.estatus==2){
                        estaAlum='Baja temporal por semestre';
                    }else{
                        if(alumno.estatus==3){
                            estaAlum='Baja temporal por año';
                        }else{
                            if(alumno.estatus==4){
                                estaAlum='Baja total';
                            }else{
                                if(alumno.estatus==5){
                                    estaAlum='Titulado';
                                }else{
                                    estaAlum='No definido';
                                }
                            }
                        }
                    }
                }
                cont++;
                template += `
                <tr>
                            <td data-label="NÚMERO">${alumno.cuenta_alumno}</td>
                            <td data-label="NOM ALUMNO">${alumno.primer_apellido+" "+ alumno.segundo_apellido+ " "+ alumno.nombre_alumno}</td>
                            <td data-label="CORREO">${alumno.correo}</td>
                            <td data-label="TELEFONO">${alumno.telefono}</td>
                            <td data-la data-label="ESTATUS">${estaAlum}</td>
                        </tr>
                `;    
            });
            $("#tbl-alumnos-asignacion").html(template);   
            if(cont==0){
                document.getElementById('avisoAlum').style.display = 'block';
            } else{
                document.getElementById('avisoAlum').style.display = 'none';
            }   
        } else{
             if(cont==0){
                document.getElementById('avisoAlum').style.display = 'block';
            } else{
                document.getElementById('avisoAlum').style.display = 'none';
            }
            $("#tbl-alumnos-asignacion").html(template); 
        }
            
            }
    });
}