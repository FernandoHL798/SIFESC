$(document).ready(function(){
	datosAlumno();
    getAsignaturas();
    getListaMovimientos();
    $("#asig_materia").change(function(){
        var idAsignatura=$("#asig_materia").val();
        getAsignaciones(idAsignatura);
});
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
        url: "../webhook/lista_grupos.php",
        type: 'POST',
        data : {      idAsignatura:idAsignatura    },
        success: function (response) {
            //Convertimos el string a JSON
            let ASIGNACIONES = JSON.parse(response);  
            console.log(ASIGNACIONES);
            let htmlGrupos="";
            htmlGrupos+=  `<option selected>Selecciona el grupo</option>`;
            ASIGNACIONES.forEach(asignacion=>{
                htmlGrupos += `
                        <option value="${asignacion.id_asignacion}">${asignacion.nombre_grupo}</option>`;
            });
            $("#grupo").html(htmlGrupos);
            }
        });
}
function getListaMovimientos(){
    $.ajax({
        url: "../webhook/lista_movimiento.php",
        type: 'POST',
        data : {      idInscripcion:7    },
        success: function (response) {
            //Convertimos el string a JSON
            let MOVIMIENTOS = JSON.parse(response);  
            console.log(MOVIMIENTOS);
            let tblMovimientos="";
            let cont=0;
            MOVIMIENTOS.forEach(movimiento=>{
                cont++;
                tblMovimientos += `
                        <tr idMovimiento=${movimiento.id_movimiento}>
                            <td data-label="No">${cont}</td>
                            <td data-label="Clave">${movimiento.id_asignatura}</td>
                            <td data-label="Nombre de la Asig">${movimiento.nombre}</td>
                            <td data-label="Cred">${movimiento.creditos}</td>
                            <td data-label="Sem">${movimiento.semestre}</td>
                            <td data-label="Gpo">${movimiento.nombre_grupo}</td>
                            <td data-label="Mov">Alta</td>
                            <td colspan="2" class="text-center">
                                <button type="button" title="Eliminar Materia" class="btn btn-danger btn-sm col-7" data-bs-toggle="modal"  data-bs-target="#Modal_baja"><i class='bx bx-trash'></i></button>
                            </td>
                        </tr>
                        `;
            });
            $("#tbl-movimiento").html(tblMovimientos);
            }
        });
}