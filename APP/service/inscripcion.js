$(document).ready(function(){
    if($("#idPlan").val()>0){
        let id_inscripcion=0;
        var idAsignatura=0;
        var idAsignacion=0;
        let peri=0;
        let turnoAlu=0;
        let fechaInscrip=0;
        let fechaAltasB=0;
        let estatusIns=0;
        let semestre=0;
        datosAlumno(id_inscripcion);
        $("#asig_materia").change(function(){
            idAsignatura=$("#asig_materia").val();
            gruposAsig(idAsignatura);
        });
        $("#grupo").change(function(){
            idAsignacion=$("#grupo").val();
            saturacionGrupo(idAsignatura,idAsignacion);
        });
        var credMaxim=0;
        var credMinimo=0;
        tramiteTerminado();
        document.getElementById('anuncio').style.display = 'none';
    }else{
        document.getElementById('textosInscripcion').style.display = 'none';
        document.getElementById('btnInscripciones1').style.display = 'none';
        document.getElementById('btnInscripciones2').style.display = 'none';
        document.getElementById('inscripcion').style.display='none';
        document.getElementById('anuncio').style.display = 'block';
        $("#anuncio").html("AUN NO HAS SELECCIONADO O NO TIENES ASIGNADO UN PLAN DE ESTUDIOS, REVISA EN MIS CARRERAS PARA CONTINUAR");
    }
});

function datosAlumno(id_inscripcion){
    $.ajax({
        url: "../webhook/lista_alumnos.php",
        type: 'POST',
        data : {   idUsuario: $("#idUsuario").val(),
                    idPlan: $("#idPlan").val()     },
        success: function (response) {
            console.log(response);
            //Convertimos el string a JSON
            if(response!=false){
                let ALUMNO = JSON.parse(response);  
                //Generamos la fecha actual con el formato Date() para poder tener la hora en la cual se esta logueando
                var hoy = new Date();
                var hora = hoy.getHours() + ':' + hoy.getMinutes() + ':' + hoy.getSeconds();
                var fecha = hoy.getFullYear()+ '-' + ( hoy.getMonth() + 1 ) + '-' +hoy.getDate();
                if(ALUMNO[0].semestre>1){
                    if(ALUMNO[0].estatusAlumno==1){
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
                                    $("#Periodo").html(ALUMNO[0].periodo);
                                    $("#semestreAlu").html(ALUMNO[0].semestre);
                                    $("#fechaIns").html(ALUMNO[0].fecha_inscripcion);
                                    $("#fechaAltas").html("");
                                    $("#estatusIns").html(ALUMNO[0].estatusInscripcion);
                                    semestre=ALUMNO[0].semestre;
                                    fechaInscrip=ALUMNO[0].fecha_inscripcion;
                                    fechaAltasB=0;
                                    estatusIns=ALUMNO[0].estatusInscripcion;
                                    turnoAlu=ALUMNO[0].turno;
                                    peri=ALUMNO[0].periodo;
                                    id_inscripcion=ALUMNO[0].id_inscripcion;
                                    credMaxim=$("#creditoMaximo").text();
                                    credMinimo=ALUMNO[0].minimo_creditos;
                                    listaMovimientos(id_inscripcion);
                                }else{
                                    document.getElementById('textosInscripcion').style.display = 'none';
                                    document.getElementById('btnInscripciones1').style.display = 'none';
                                    document.getElementById('btnInscripciones2').style.display = 'none';
                                    document.getElementById('inscripcion').style.display='none';
                                    document.getElementById('anuncio').style.display = 'block';
                                    $("#anuncio").html("AÚN NO ES TU FECHA U HORA DE INSCRIPCIÓN");
                                    /*Se oculta la tabla y se imprime un AUN NO ES TU HORA DE INSCRIPCIÓN*/
                                }
                            }else{
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
                                        $("#Periodo").html(ALUMNO[0].periodo);
                                        $("#semestreAlu").html(ALUMNO[0].semestre);
                                        $("#fechaIns").html("");
                                        $("#fechaAltas").html(ALUMNO[0].fecha_altas_bajas);
                                        $("#estatusIns").html(ALUMNO[0].estatusInscripcion);
                                        semestre=ALUMNO[0].semestre;
                                        fechaInscrip=0;
                                        fechaAltasB=ALUMNO[0].fecha_altas_bajas;
                                        estatusIns=ALUMNO[0].estatusInscripcion;
                                        turnoAlu=ALUMNO[0].turno;
                                        peri=ALUMNO[0].periodo;
                                        id_inscripcion=ALUMNO[0].id_inscripcion;
                                        credMaxim=$("#creditoMaximo").text();
                                        credMinimo=ALUMNO[0].minimo_creditos;
                                        listaMovimientos(id_inscripcion)
                                    }
                                }else{
                                    document.getElementById('textosInscripcion').style.display = 'none';
                                    document.getElementById('btnInscripciones1').style.display = 'none';
                                    document.getElementById('btnInscripciones2').style.display = 'none';
                                    document.getElementById('inscripcion').style.display='none';
                                    document.getElementById('anuncio').style.display = 'block';
                                    $("#anuncio").html("AÚN NO ES TU FECHA U HORA DE INSCRIPCIÓN");
                                    /*Se oculta la tabla y se imprime un AUN NO ES TU HORA DE INSCRIPCIÓN*/
                                }
                            }
                        }else{
                            document.getElementById('textosInscripcion').style.display = 'none';
                            document.getElementById('btnInscripciones1').style.display = 'none';
                            document.getElementById('btnInscripciones2').style.display = 'none';
                            document.getElementById('inscripcion').style.display='none';
                            document.getElementById('anuncio').style.display = 'block';
                            $("#anuncio").html("YA HAS COMPLETADO TU TRAMITE");
                        }
                    }else{
                        document.getElementById('textosInscripcion').style.display = 'none';
                        document.getElementById('btnInscripciones1').style.display = 'none';
                        document.getElementById('btnInscripciones2').style.display = 'none';
                        document.getElementById('inscripcion').style.display='none';
                        document.getElementById('anuncio').style.display = 'block';
                        if(ALUMNO[0].estatusAlumno==2){
                            $("#anuncio").html("Te diste de baja de semestre");
                        }else if(ALUMNO[0].estatusAlumno==3){
                            $("#anuncio").html("Te diste de baja de año");
                        }else if(ALUMNO[0].estatusAlumno==4){
                            $("#anuncio").html("Te diste de baja definitiba");
                        }else if(ALUMNO[0].estatusAlumno==5){
                            $("#anuncio").html("Te titulaste");
                        }
                    }
                }else{
                    document.getElementById('textosInscripcion').style.display = 'none';
                    document.getElementById('btnInscripciones1').style.display = 'none';
                    document.getElementById('btnInscripciones2').style.display = 'none';
                    document.getElementById('inscripcion').style.display='none';
                    document.getElementById('anuncio').style.display = 'block';
                    $("#anuncio").html("Alumno de primer semestre, dirigete a consulta tu inscripción");
                }
            }else{
                document.getElementById('textosInscripcion').style.display = 'none';
                document.getElementById('btnInscripciones1').style.display = 'none';
                document.getElementById('btnInscripciones2').style.display = 'none';
                document.getElementById('inscripcion').style.display='none';
                document.getElementById('anuncio').style.display = 'block';
                $("#anuncio").html("NO GENERASTE TU INSCRIPCIÓN");
            }
        }       
    });
}

function asignaturas(credito,nombres){
    $.ajax({
        url: "../webhook/lista_asignatura.php",
        type: 'POST',
        data : {       idPlan: $("#idPlan").val(),
                        periodo: peri    },
        success: function (response) {
            //Convertimos el string a JSON
            let ASIGNATURAS = JSON.parse(response); 
            let template="";
            template+=  `<option selected>Selecciona la materia</option>`;
            ASIGNATURAS.forEach(asignatura=>{
                if(asignatura.semestre==semestre){
                    if(credito==68){
                        template += `<option value="${asignatura.id_asignatura}">${asignatura.nombre}</option>`;
                    }else{
                        console.log(credito+"-"+asignatura.creditos);
                        if(asignatura.creditos<=credito || credito==''){
                            if(asignatura.nombre!=nombres){
                                template += `<option value="${asignatura.id_asignatura}">${asignatura.nombre}</option>`;   
                            }
                        }
                    }
                }
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
                      idProfesor : "0",
                      periodo: peri  },
        success: function (response) {
            console.log(peri);
            console.log(response);
            //Convertimos el string a JSON
            let ASIGNACIONES = JSON.parse(response);  
            console.log(ASIGNACIONES);
            var hoy = new Date();
            var hora = hoy.getHours() + ':' + hoy.getMinutes() + ':' + hoy.getSeconds();
            var fecha = hoy.getFullYear()+ '-' + ( hoy.getMonth() + 1 ) + '-' +hoy.getDate();
            let cont=0;
            let htmlGrupos="";
            htmlGrupos+=  `<option selected>Selecciona el grupo</option>`;
            ASIGNACIONES.forEach(asignacion=>{
                if(asignacion.estatus==1){
                    if(fechaInscrip==fecha){
                        if(asignacion.turno==turnoAlu){
                            console.log("entre ins");
                            cont++;
                            htmlGrupos += `<option value="${asignacion.id_asignacion}">${asignacion.nombre_grupo}</option>`;
                        }else{
                            cont++;
                        }
                    }else if(fechaAltasB==fecha){
                        console.log("entre bajas");
                        htmlGrupos += `<option value="${asignacion.id_asignacion}">${asignacion.nombre_grupo}</option>`;
                    }
                }
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
                    tblMovimientos += `<tr idMovimiento=${movimiento.id_movimiento}>
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
                                        </tr>`;
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
            $("#saturacionGrupoAsig").html("");
            if(c>0){
                document.getElementById('btnInscripciones2').style.display = 'block';
            }else{
                document.getElementById('btnInscripciones2').style.display = 'none';
            }
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

function saturacionGrupo(idAsignatura,idAsignacion){
    $.ajax({
        url: "../webhook/lista_asignacion_alumnos.php",
        type: 'POST',
        data: {
            idPlan : $("#idPlan").val(),
            idAsignatura:idAsignatura,
            periodo: peri,
            idAsignacion: idAsignacion
        },
        success: function (response) {
            console.log(response);
             //COnvertimos el string a JSON
            let SATURACIONES = JSON.parse(response);  
            $("#saturacionGrupoAsig").html(SATURACIONES[0].inscritos+" inscritos de un cupo de "+SATURACIONES[0].cupo);
            $("#ins").html(SATURACIONES[0].inscritos);
            $("#cup").html(SATURACIONES[0].cupo);
        }
    });
}