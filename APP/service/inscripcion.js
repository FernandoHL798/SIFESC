$(document).ready(function(){
        let id_inscripcion=0;
        datosAlumno(id_inscripcion);
        $("#asig_materia").change(function(){
            var idAsignatura=$("#asig_materia").val();
            gruposAsig(idAsignatura);
        });
        var credMaxim=0;
        var credMinimo=0;
        tramiteTerminado();
});

function datosAlumno(id_inscripcion){
    $.ajax({
        url: "../webhook/lista_alumnos.php",
        type: 'POST',
        data : {   idUsuario: $("#idUsuario").val(),
                    idPlan: $("#idPlan").val()     },
        success: function (response) {
            //Convertimos el string a JSON
            let ALUMNO = JSON.parse(response);  
            //Generamos la fecha actual con el formato Date() para poder tener la hora en la cual se esta logueando
            var hoy = new Date();
            var hora = hoy.getHours() + ':' + hoy.getMinutes() + ':' + hoy.getSeconds();
            var fecha = hoy.getFullYear()+ '-' + ( hoy.getMonth() + 1 ) + '-' +hoy.getDate();
            if(ALUMNO[0].estatusInscripcion==1){
            if(ALUMNO[0].fecha_inscripcion==fecha){
                if(ALUMNO[0].hora_inscripcion<=hora){
                //Se imprimen los datos de el alumno
                $("#cuenta_alumno").html(ALUMNO[0].cuenta_alumno);
                $("#nombreAlumno").html(ALUMNO[0].nombre+' '+ALUMNO[0].primer_apellido+' '+ALUMNO[0].segundo_apellido);
                $("#anioEstudia").html(ALUMNO[0].anio);
                $("#idCarrera").html(ALUMNO[0].carrera_clave);
                $("#Plantel").html(ALUMNO[0].id_plantel+' - '+ALUMNO[0].nombre_plantel);
                $("#Plan").html(ALUMNO[0].id_plan+' - '+ALUMNO[0].nombre_plan);
                $("#creditoMaximo").html(ALUMNO[0].maximo_creditos);
                $("#idInscripcionAlumno").html(ALUMNO[0].id_inscripcion);
                id_inscripcion=ALUMNO[0].id_inscripcion;
                document.getElementById('anuncio').style.display = 'none';
                credMaxim=$("#creditoMaximo").text();
                credMinimo=ALUMNO[0].minimo_creditos;
                document.getElementById('noInscripcion').style.display = 'none';
                listaMovimientos(id_inscripcion);
                document.getElementById('terminoInscr').style.display = 'none';
            }else{
                document.getElementById('inscripcion').style.display = 'none';
                document.getElementById('textosInscripcion').style.display = 'none';
                document.getElementById('btnInscripciones1').style.display = 'none';
                document.getElementById('btnInscripciones2').style.display = 'none';
                document.getElementById('anuncio').style.display = 'block';
                document.getElementById('noInscripcion').style.display = 'block';
                document.getElementById('terminoInscr').style.display = 'none';
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
                id_inscripcion=ALUMNO[0].id_inscripcion;
                document.getElementById('anuncio').style.display = 'none';
                document.getElementById('noInscripcion').style.display = 'none';
                credMaxim=$("#creditoMaximo").text();
                credMinimo=ALUMNO[0].minimo_creditos;
                listaMovimientos(id_inscripcion);
                document.getElementById('terminoInscr').style.display = 'none';
            }}else{
                document.getElementById('inscripcion').style.display = 'none';
                document.getElementById('textosInscripcion').style.display = 'none';
                document.getElementById('btnInscripciones1').style.display = 'none';
                document.getElementById('btnInscripciones2').style.display = 'none';
                document.getElementById('anuncio').style.display = 'block';
                document.getElementById('terminoInscr').style.display = 'none';
                /*Se oculta la tabla y se imprime un AUN NO ES TU HORA DE INSCRIPCIÓN*/
            }
            }
            }else{
                document.getElementById('terminoInscr').style.display = 'block';
                document.getElementById('inscripcion').style.display = 'none';
                document.getElementById('noInscripcion').style.display = 'none';
                document.getElementById('textosInscripcion').style.display = 'none';
                document.getElementById('btnInscripciones1').style.display = 'none';
                document.getElementById('btnInscripciones2').style.display = 'none';
                document.getElementById('anuncio').style.display = 'none';
            }
     }       
    });

}

function asignaturas(credito,nombres){
    $.ajax({
        url: "../webhook/lista_asignatura.php",
        type: 'POST',
        data : {       idPlan: $("#idPlan").val()    },
        success: function (response) {
            //Convertimos el string a JSON
            let ASIGNATURAS = JSON.parse(response); 
            let template="";
            template+=  `<option selected>Selecciona la materia</option>`;
            ASIGNATURAS.forEach(asignatura=>{
                if(asignatura.semestre<="1"){
                    if(credito==68){
                        template += `
                        <option value="${asignatura.id_asignatura}">${asignatura.nombre}</option>
                `;
            }else{
                console.log(credito+"-"+asignatura.creditos);
                    if(asignatura.creditos<=credito || credito==''){
                        
                        if(asignatura.nombre!=nombres){
                template += `
                        <option value="${asignatura.id_asignatura}">${asignatura.nombre}</option>
                `;   
                }}
              }  }
            });
            $("#asig_materia").html(template);
            }
        });
}

function gruposAsig(idAsignatura){
     $.ajax({
        url: "../webhook/lista_grupos.php",
        type: 'POST',
        data : {      idAsignatura:idAsignatura,
                      idProfesor : "0"  },
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

function listaMovimientos(id_inscripcion){
    console.log(id_inscripcion);
    $.ajax({
        url: "../webhook/lista_movimiento.php",
        type: 'POST',
        data : {      idInscripcion: id_inscripcion   },
        success: function (response) {
            //Convertimos el string a JSON
            console.log(response);
            let MOVIMIENTOS = JSON.parse(response);  
            console.log(MOVIMIENTOS);
            let tblMovimientos="";
            let cont=0;
            var credMen=0;
            let c=0;
            let nombres='';
            let a=credMaxim;
            MOVIMIENTOS.forEach(movimiento=>{
                if(MOVIMIENTOS[cont].estatus==1){
                    c++;
                    credMen=parseInt(MOVIMIENTOS[cont].creditos); 
                        tblMovimientos += `
                        <tr idMovimiento=${movimiento.id_movimiento}>
                            <td data-label="No">${c}</td>
                            <td data-label="Clave">${movimiento.codigo}</td>
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
                        
                    a=parseInt(a)-parseInt(credMen);
                $("#creditoMaximo").html(parseInt(a));
                 nombres=MOVIMIENTOS;
                        cont++;
                 if(movimiento.maximo_materias==null || movimiento.maximo_materias>=(c)){
                    document.getElementById('btnInscripciones1').style.display = 'block';

                    }else{
                        document.getElementById('btnInscripciones1').style.display = 'none';
                    }
                   
                }else{
                       cont++;
                       if(c==0 && cont==1){
                            a=credMaxim;
                            $("#creditoMaximo").html(parseInt(a));
                            nombres='';
                       }
                }
                if(a<=credMinimo || credMinimo==''){
                document.getElementById('btnInscripciones1').style.display = 'none';
                }else{
                    document.getElementById('btnInscripciones1').style.display = 'block';
                }

            });
            asignaturas(a,nombres);
            $("#tbl-movimiento").html(tblMovimientos);
            }
        });
}

function tramiteTerminado(){
    $("#frm_aviso_pregunta_guardada").on("submit", function(e){
        var formData = new FormData(document.getElementById("frm_aviso_pregunta_guardada"));
    formData.append("idInscripcion",$("#idInscripcionAlumno").text());
    formData.append("estatus", "2");
    $.ajax({
        url: "../webhook/modifica_estatus_inscripcion.php",
        type: 'POST',
        data: formData,
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false
    })
        .done(function(res){
            console.log(res);
        $("#frm-inscripcion").trigger('reset');
        });
        
    e.preventDefault();
});
}