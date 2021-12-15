$(document).ready(function(){
    var terminoInsc;
	if(terminoInsc!=1){
        datosAlumno();
        getAsignaturas();
        getListaMovimientos();
        tblConsultaIns();
        var credMaxim=0;
        $("#asig_materia").change(function(){
            var idAsignatura=$("#asig_materia").val();
            getAsignaciones(idAsignatura);
        });
    }else{
        document.getElementById('inscripcion').style.display = 'none';
        document.getElementById('textosInscripcion').style.display = 'none';
        document.getElementById('btnInscripciones').style.display = 'none';
        document.getElementById('anuncio').style.display = 'block';
    }
});
//Funcion para realizar peticion a un microservicio 
function datosAlumno(){
	$.ajax({
        url: "../webhook/lista_alumnos.php",
        type: 'POST',
        data : {   idUsuario: $("#idUsuario").val(),
        			idPlan: 9     },
        success: function (response) {
            //Convertimos el string a JSON
            let ALUMNO = JSON.parse(response);  
            //Generamos la fecha actual con el formato Date() para poder tener la hora en la cual se esta logueando
            var hoy = new Date();
            //Variable que contiene la hora en el momento de usar
            var hora = hoy.getHours() + ':' + hoy.getMinutes() + ':' + hoy.getSeconds();
            //Este apartado funciona para convertir la hora en la cual se desea cerrar la hora de inscripcion
            numero = '1127';// Se define que es a las 11, tendrá que ir cambiando
            fin = numero.substr(0,2) + ':' + numero.substr(2,2);
            //Se condiciona para las horas, si la hora es mayor o igual a la hora de la inscripcion y que la hora sea menor a la hora de fin
            var fecha = hoy.getFullYear()+ '-' + ( hoy.getMonth() + 1 ) + '-' +hoy.getDate();
            if(ALUMNO[0].fecha_inscripcion==fecha){

                if(ALUMNO[0].hora_inscripcion<=hora){
                //Se imprimen los datos de el alumno
                $("#cuenta_alumno").html(ALUMNO[0].cuenta_alumno);
                $("#nombreAlumno").html(ALUMNO[0].nombre+' '+ALUMNO[0].primer_apellido+' '+ALUMNO[0].segundo_apellido);
                $("#anioEstudia").html(ALUMNO[0].anio);
                $("#idCarrera").html(ALUMNO[0].carrera_clave);
                $("#Plantel").html(ALUMNO[0].id_plantel+' - '+ALUMNO[0].nombre_facultad+' ('+ALUMNO[0].nombre_plantel+')');
                $("#Plan").html(ALUMNO[0].id_plan+' - '+ALUMNO[0].nombre_plan);
                $("#creditoMaximo").html(ALUMNO[0].maximo_creditos);
                $("#idInscripcionAlumno").html(ALUMNO[0].id_inscripcion);
                document.getElementById('anuncio').style.display = 'none';
                credMaxim=$("#creditoMaximo").text();
            }else{
                document.getElementById('inscripcion').style.display = 'none';
                document.getElementById('textosInscripcion').style.display = 'none';
                document.getElementById('btnInscripciones1').style.display = 'none';
                document.getElementById('btnInscripciones2').style.display = 'none';
                document.getElementById('anuncio').style.display = 'block';
                /*Se oculta la tabla y se imprime un AUN NO ES TU HORA DE INSCRIPCIÓN*/
            }}else{
                if(ALUMNO[0].fecha_altas_bajas==fecha){
                if(ALUMNO[0].hora_altas_bajas<=hora){
                //Se imprimen los datos de el alumno
                $("#cuenta_alumno").html(ALUMNO[0].cuenta_alumno);
                $("#nombreAlumno").html(ALUMNO[0].nombre+' '+ALUMNO[0].primer_apellido+' '+ALUMNO[0].segundo_apellido);
                $("#anioEstudia").html(ALUMNO[0].anio);
                $("#idCarrera").html(ALUMNO[0].carrera_clave);
                $("#Plantel").html(ALUMNO[0].id_plantel+' - '+ALUMNO[0].nombre_facultad+' ('+ALUMNO[0].nombre_plantel+')');
                $("#Plan").html(ALUMNO[0].id_plan+' - '+ALUMNO[0].nombre_plan);
                $("#creditoMaximo").html(ALUMNO[0].maximo_creditos);
                $("#idInscripcionAlumno").html(ALUMNO[0].id_inscripcion);
                document.getElementById('anuncio').style.display = 'none';
                credMaxim=$("#creditoMaximo").text();
            }}else{
                document.getElementById('inscripcion').style.display = 'none';
                document.getElementById('textosInscripcion').style.display = 'none';
                document.getElementById('btnInscripciones1').style.display = 'none';
                document.getElementById('btnInscripciones2').style.display = 'none';
                document.getElementById('anuncio').style.display = 'block';
                /*Se oculta la tabla y se imprime un AUN NO ES TU HORA DE INSCRIPCIÓN*/
            }
            }
     }       
    });
}
function getAsignaturas(){
    $.ajax({
        url: "../webhook/lista_asignatura.php",
        type: 'POST',
        data : {       idPlan: 9    },
        success: function (response) {
            //Convertimos el string a JSON
            let ASIGNATURAS = JSON.parse(response);  
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
        data : {      idInscripcion:1    },
        success: function (response) {
            //Convertimos el string a JSON
            let MOVIMIENTOS = JSON.parse(response);  
            let tblMovimientos="";
            let cont=0;
            var credMen=0;
            let c=0;
            let a=credMaxim;
            MOVIMIENTOS.forEach(movimiento=>{
                if(MOVIMIENTOS[cont].estatus==1){
                    c++;
                    credMen=parseInt(MOVIMIENTOS[cont].creditos); 
                        tblMovimientos += `
                        <tr idMovimiento=${movimiento.id_movimiento}>
                            <td data-label="No">${c}</td>
                            <td data-label="Clave">${movimiento.id_asignatura}</td>
                            <td data-label="Nombre de la Asig">${movimiento.nombre}</td>
                            <td data-label="Cred">${movimiento.creditos}</td>
                            <td data-label="Sem">${movimiento.semestre}</td>
                            <td data-label="Gpo">${movimiento.nombre_grupo}</td>
                            <td data-label="Mov">Alta</td>
                            <td colspan="2" class="text-center">
                                <button type="button" title="Eliminar Materia" class="btn btn-danger btn-sm col-7" onclick="bajaMovimiento(${movimiento.id_asignacion})"><i class='bx bx-trash'></i></button>
                            </td>
                        </tr>
                        `;
                        cont++;
                 if(movimiento.maximo_materias==null || movimiento.maximo_materias>(c+1)){

                    }else{
                        document.getElementById('btnInscripciones1').style.display = 'none';
                    }
                }else{
                       cont++;
                }
                    a=parseInt(a)-parseInt(credMen);
                    console.log(a   +" creditos");
                $("#creditoMaximo").html(parseInt(a));
                if(a<=6){
                document.getElementById('btnInscripciones1').style.display = 'none';
                }
            });
            
            $("#tbl-movimiento").html(tblMovimientos);
            }
        });
}




function tblConsultaIns(MOVIMIENTOS){
$.ajax({
        url: "../webhook/lista_movimiento.php",
        type: 'POST',
        data : {      idInscripcion:1    },
        success: function (response) {
            //Convertimos el string a JSON
            let MOVIMIENTOS = JSON.parse(response);  
            let tblInscripcion="";
            let cont=0;
            let c=0;
            MOVIMIENTOS.forEach(movimiento=>{
                if(MOVIMIENTOS[cont].estatus==1){c++;
                tblInscripcion += `
                        <tr idMovimiento=${movimiento.id_movimiento}>
                            <td data-label="No">${c}</td>
                            <td data-label="Clave">${movimiento.id_asignatura}</td>
                            <td data-label="Nombre de la Asig">${movimiento.nombre}</td>
                            <td data-label="Cred">${movimiento.creditos}</td>
                            <td data-label="Sem">${movimiento.semestre}</td>
                            <td data-label="Gpo">${movimiento.nombre_grupo}</td>
                            <td data-label="Mov">Alta</td>
                        </tr>
                        `;
                        cont++;
                    }else{
cont++;
                    }
            });
            
            $("#tbl-consulta-inscripcion").html(tblInscripcion);
            }
        });
}