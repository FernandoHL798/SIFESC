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
        let estat=0;
        perdisteTramite(id_inscripcion);
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
        document.getElementById('finTramite').style.display = 'none';
        $("#anuncio").html("AUN NO HAS SELECCIONADO O NO TIENES ASIGNADO UN PLAN DE ESTUDIOS, REVISA EN MIS CARRERAS PARA CONTINUAR");
    }
});
function perdisteTramite(id_inscripcion,fechaInscrip,fechaAltasB){
    $.ajax({
        url: "../webhook/lista_inscripcion.php",
        type: 'POST',
        data : {   idUsuario: $("#idUsuario").val(),
                    idPlan: $("#idPlan").val()     },
        success: function (response) {
            console.log(response);
            if(response!=false && response!="[]"){
                let INSCRIPCION = JSON.parse(response);
                var hoy = new Date();
                var hora = hoy.getHours() + ':' + hoy.getMinutes() + ':' + hoy.getSeconds();
                var fecha = hoy.getFullYear()+ '-' + ( ""+hoy.getMonth() + 1 ) + '-' +("0"+hoy.getDate());
                if(INSCRIPCION[0].fecha_altas_bajas<fecha && INSCRIPCION[0].estatus==2){
                    document.getElementById('btnInscripciones1').style.display = 'none';
                    document.getElementById('btnInscripciones2').style.display = 'none';
                    document.getElementById('textosInscripcion').style.display = 'none';
                    document.getElementById('inscripcion').style.display='none';
                    document.getElementById('finTramite').style.display = 'block';
                    document.getElementById('anuncio').style.display = 'none';
                    id_inscripcion=INSCRIPCION[0].id_inscripcion;
                    fechaInscrip=INSCRIPCION[0].fecha_inscripcion;
                    fechaAltasB=INSCRIPCION[0].fecha_altas_bajas;
                    inscritos=INSCRIPCION[0].inscritos;
                    console.log(fechaAltasB);
                    bajaAltasBajas(id_inscripcion,fechaAltasB,fechaInscrip,inscritos);
                }else if(INSCRIPCION[0].fecha_inscripcion<fecha && INSCRIPCION[0].estatus==2 && INSCRIPCION[0].fecha_altas_bajas>fecha){
                    document.getElementById('btnInscripciones1').style.display = 'none';
                    document.getElementById('btnInscripciones2').style.display = 'none';
                    document.getElementById('textosInscripcion').style.display = 'none';
                    document.getElementById('inscripcion').style.display='none';
                    document.getElementById('finTramite').style.display = 'block';
                    document.getElementById('anuncio').style.display = 'none';
                    id_inscripcion=INSCRIPCION[0].id_inscripcion;
                    inscritos=INSCRIPCION[0].inscritos;
                    bajaInsc(id_inscripcion,inscritos);
                }else{
                    document.getElementById('finTramite').style.display = 'none';
                    estatusAlum(id_inscripcion);
                }
            }else{
                document.getElementById('finTramite').style.display = 'none';
                    estatusAlum(id_inscripcion);
            }
        } 
    });
}
function bajaInsc(id_inscripcion,inscritos){
    $.ajax({
        url: "../webhook/lista_movimiento.php",
        type: 'POST',
        data : {   idInscripcion: id_inscripcion },
        success: function (response) {
            console.log(response);
            let BAJAINS = JSON.parse(response);
            BAJAINS.forEach(bajasi=>{
                if(bajasi.estatus==1){
                    console.log(bajasi.id_asignacion);
                    var formData = new FormData(document.getElementById("frm-inscripcion"));
                    formData.append("idInscripcion", id_inscripcion);
                    formData.append("idAsignacion", bajasi.id_asignacion);
                    formData.append("estatus", "2");
                    $.ajax({
                        url: "../webhook/modifica_movimiento.php",
                        type: "post",
                        dataType: "html",
                        data :formData,
                        cache: false,
                        contentType: false,
                        processData: false
                    })
                    .done(function(res){
                        console.log(res);
                        if(res==1){
                            formData.append("idAsignacion", bajasi.id_asignacion);
                            formData.append("inscritos", inscritos);
                            $.ajax({
                                url: "../webhook/modifica_inscritos_asignacion.php",
                                type: 'POST',
                                data: formData,
                                dataType: "html",
                                cache: false,
                                contentType: false,
                                processData: false
                            })
                            .done(function(res){
                                console.log(res);
                                console.log("se cambio");
                            });
                        }
                    });
                }
            });
        } 
    });
}

function bajaAltasBajas(id_inscripcion,fechaAltasB,fechaInscrip, inscritos){
    $.ajax({
        url: "../webhook/lista_movimiento_altas_bajas.php",
        type: 'POST',
        data : {   idInscripcion: id_inscripcion,
                    updated: fechaAltasB },
        success: function (response) {
            console.log(response);
            let cont=0;
            let BAJAALTAS = JSON.parse(response);
            BAJAALTAS.forEach(bajasal=>{
                if(BAJAALTAS[cont].estatus==1 && BAJAALTAS[cont].altas==0){
                    cont++;
                    console.log(bajasal.id_asignacion);
                    var formData = new FormData(document.getElementById("frm-inscripcion"));
                    formData.append("idInscripcion", id_inscripcion);
                    formData.append("idAsignacion", bajasal.id_asignacion);
                    formData.append("estatus", "2");
                    $.ajax({
                        url: "../webhook/modifica_movimiento.php",
                        type: "post",
                        dataType: "html",
                        data :formData,
                        cache: false,
                        contentType: false,
                        processData: false
                    })
                    .done(function(res){
                        console.log(res);
                        if(res==1){
                            formData.append("idAsignacion", bajasi.id_asignacion);
                            formData.append("inscritos", inscritos);
                            $.ajax({
                                url: "../webhook/modifica_inscritos_asignacion.php",
                                type: 'POST',
                                data: formData,
                                dataType: "html",
                                cache: false,
                                contentType: false,
                                processData: false
                            })
                            .done(function(res){
                                console.log(res);
                                console.log("se cambio");
                            });
                        }
                    });
                }else if(BAJAALTAS[cont].estatus==2 && BAJAALTAS[cont].altas==0){
                    cont++;
                    console.log(bajasal.id_asignacion);
                    var formData = new FormData(document.getElementById("frm-inscripcion"));
                    formData.append("idInscripcion", id_inscripcion);
                    formData.append("idAsignacion", bajasal.id_asignacion);
                    formData.append("estatus", "1");
                    $.ajax({
                        url: "../webhook/modifica_movimiento.php",
                        type: "post",
                        dataType: "html",
                        data :formData,
                        cache: false,
                        contentType: false,
                        processData: false
                    })
                    .done(function(res){
                        console.log(res);
                        if(res==1){
                            formData.append("idAsignacion", bajasi.id_asignacion);
                            formData.append("inscritos", inscritos);
                            $.ajax({
                                url: "../webhook/modifica_inscritos_asignacion.php",
                                type: 'POST',
                                data: formData,
                                dataType: "html",
                                cache: false,
                                contentType: false,
                                processData: false
                            })
                            .done(function(res){
                                console.log(res);
                                console.log("se cambio");
                            });
                        }
                    });
                }
            });
        } 
    });
}

function estatusAlum(id_inscripcion) {
    $.ajax({
        url: "../webhook/lista_estudia_estatus.php",
        type: 'POST',
        data : {   idUsuario: $("#idUsuario").val(),
                    idPlan: $("#idPlan").val()     },
        success: function (response) {
            console.log(response);
            let ESTUDIA = JSON.parse(response);
            if(ESTUDIA[0].estatus>=2){
                estat=1;
                document.getElementById('textosInscripcion').style.display = 'none';
                document.getElementById('btnInscripciones1').style.display = 'none';
                document.getElementById('btnInscripciones2').style.display = 'none';
                document.getElementById('inscripcion').style.display='none';
                document.getElementById('anuncio').style.display = 'block';
                if(ESTUDIA[0].estatus==2){
                    $("#anuncio").html("No puedes realizar tu inscripción puesto que te diste de baja temporal por un periodo.");
                }else if(ESTUDIA[0].estatus==3){
                    $("#anuncio").html("No puedes realizar tu inscripción puesto que te diste de baja temporal por un año.");
                }else if(ESTUDIA[0].estatus==4){
                    $("#anuncio").html("No puedes realizar tu inscripción puesto que te diste de baja definitiva.");
                }else if(ESTUDIA[0].estatus==5){
                    $("#anuncio").html("No puedes realizar tu inscripción puesto que estás titulado.");
                }else if(ESTUDIA[0].estatus==6){
                    $("#anuncio").html("No puedes realizar tu inscripción puesto que ya cumpliste con el 100% de tus creditos.");
               }
           }else{
                if(ESTUDIA[0].semestre>=2){
                    document.getElementById('btnInscripciones1').style.display = 'block';
                    document.getElementById('btnInscripciones2').style.display = 'block';
                    datosAlumno(id_inscripcion);
                }else{
                    document.getElementById('btnInscripciones1').style.display = 'none';
                    document.getElementById('btnInscripciones2').style.display = 'none';
                    document.getElementById('textosInscripcion').style.display = 'none';
                    document.getElementById('inscripcion').style.display='none';
                    document.getElementById('anuncio').style.display = 'block';
                    $("#anuncio").html("Alumno de primer semestre, dirigete a consulta tu inscripción");
                }
           }
        }
    });
}

function datosAlumno(id_inscripcion){
    $.ajax({
        url: "../webhook/lista_alumnos.php",
        type: 'POST',
        data : {   idUsuario: $("#idUsuario").val(),
                    idPlan: $("#idPlan").val(),
                    estatusPeriodo: 1    },
        success: function (response) {
            console.log(response);
            //Convertimos el string a JSON
            if(response!=false){
                let ALUMNO = JSON.parse(response);  
                //Generamos la fecha actual con el formato Date() para poder tener la hora en la cual se esta logueando
                var hoy = new Date();
                var hora = hoy.getHours() + ':' + hoy.getMinutes() + ':' + hoy.getSeconds();
                var fecha = hoy.getFullYear()+ '-' + ( ""+hoy.getMonth() + 1 ) + '-' +("0"+hoy.getDate());
                if(ALUMNO[0].estatusInscripcion==2){
                    if(ALUMNO[0].fecha_inscripcion==fecha){
                        if(ALUMNO[0].hora_inscripcion<=hora){
                            //Se imprimen los datos de el alumno
                            $("#cuenta_alumno").html(ALUMNO[0].cuenta_alumno);
                            $("#nombreAlumno").html(ALUMNO[0].nombre+' '+ALUMNO[0].primer_apellido+' '+ALUMNO[0].segundo_apellido);                                    $("#anioEstudia").html(ALUMNO[0].anio);
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
                            document.getElementById('btnInscripciones1').style.display = 'block';
                            document.getElementById('btnInscripciones2').style.display = 'block';
                            listaMovimientos(id_inscripcion);
                            $("#alta").html("1");
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
                                $("#Plantel").html(ALUMNO[0].id_plantel+' - '+ALUMNO[0].nombre_plantel);
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
                                console.log(fechaAltasB);
                                estatusIns=ALUMNO[0].estatusInscripcion;
                                turnoAlu=ALUMNO[0].turno;
                                peri=ALUMNO[0].periodo;
                                id_inscripcion=ALUMNO[0].id_inscripcion;
                                credMaxim=$("#creditoMaximo").text();
                                credMinimo=ALUMNO[0].minimo_creditos;
                                listaMovimientos(id_inscripcion)
                                document.getElementById('btnInscripciones1').style.display = 'block';
                                document.getElementById('btnInscripciones2').style.display = 'block';
                                $("#alta").html("2");
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
            console.log(response);
            console.log(nombres);
            let ASIGNATURAS = JSON.parse(response);
            console.log(ASIGNATURAS);
            let template="";
            let cont3=0;
            template+=  `<option selected>Selecciona la materia</option>`;
            ASIGNATURAS.forEach(asignatura=>{
                if(nombres==''){
                    console.log("Entre no nombres");
                    console.log(asignatura.semestre+" - "+semestre);
                    if(asignatura.semestre==semestre){
                        if(credito==68){
                            template += `<option value="${asignatura.id_asignatura}">${asignatura.nombre}</option>`;
                            cont3++;
                        }else{
                            if(asignatura.creditos<=credito || credito==''){
                                cont3++;
                                template += `<option value="${asignatura.id_asignatura}">${asignatura.nombre}</option>`;
                            }
                        }
                    }else if(asignatura.caracter==2 && semestre>=5 && semestre<=7 || semestre==20){
                        template += `<option value="${ASIGNATURAS[cont3].id_asignatura}">${ASIGNATURAS[cont3].nombre}</option>`;
                        cont3++;
                    }else if(asignatura.caracter==3 && semestre>=8 && semestre<=9 || semestre==0){
                        template += `<option value="${ASIGNATURAS[cont3].id_asignatura}">${ASIGNATURAS[cont3].nombre}</option>`;
                        cont3++;
                    }
                }else{
                    if(asignatura.caracter==1){
                        console.log("1-9");
                        if(ASIGNATURAS[cont3].semestre==semestre){
                            if(credito==68){
                                template += `<option value="${asignatura.id_asignatura}">${asignatura.nombre}</option>`;
                            }else{
                                console.log(credito+"-"+asignatura.creditos);
                                if(asignatura.creditos<=credito || credito==''){
                                    for(let cont2=1; cont2<(nombres.length); cont2++){
                                        if(ASIGNATURAS[cont3].nombre==nombres[cont2]){
                                            console.log(ASIGNATURAS[cont3].nombre+" - "+nombres[cont2]);
                                            ASIGNATURAS[cont3]='';
                                            console.log(ASIGNATURAS[cont3].nombre);
                                            console.log("igual");
                                            cont=ASIGNATURAS.length;
                                            cont2=nombres.length;
                                        }else{
                                            console.log(ASIGNATURAS[cont3].nombre+" - "+nombres[cont2]);
                                            //cont=nombres.length;
                                            //cont2=ASIGNATURAS.length;
                                        }
                                    }
                            }
                        }
                        console.log(ASIGNATURAS[cont3].nombre);
                        if(ASIGNATURAS[cont3].nombre==undefined){
                            cont++;
                        }else{
                            $("#saturacionGrupoAsig").html("Las materias que ya diste de alta no se visualizaran aqui, a menos de que la des de baja primero");
                            template += `<option value="${ASIGNATURAS[cont3].id_asignatura}">${ASIGNATURAS[cont3].nombre}</option>`;
                            console.log("diferente");
                            cont3++;
                        }
                    }else{
                        cont3++;
                    }

                }else if(asignatura.caracter==2 && semestre>=5 && semestre<=7 || semestre==20){
                    console.log("5-7");
                    template += `<option value="${ASIGNATURAS[cont3].id_asignatura}">${ASIGNATURAS[cont3].nombre}</option>`;
                    cont3++;
                }else if(asignatura.caracter==3 && semestre>=8 && semestre<=9 || semestre==0){
                    console.log("8-9");
                    template += `<option value="${ASIGNATURAS[cont3].id_asignatura}">${ASIGNATURAS[cont3].nombre}</option>`;
                    cont3++;
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
            
            $("#saturacionGrupoAsig").html("");
            console.log(peri);
            console.log(response);
            //Convertimos el string a JSON
            let ASIGNACIONES = JSON.parse(response);  
            console.log(ASIGNACIONES);
            var hoy = new Date();
            var hora = hoy.getHours() + ':' + hoy.getMinutes() + ':' + hoy.getSeconds();
            var fecha = hoy.getFullYear()+ '-' + ( ""+hoy.getMonth() + 1 ) + '-' +("0"+hoy.getDate());
            let cont=0;
            let htmlGrupos="";
            htmlGrupos+=  `<option selected>Selecciona el grupo</option>`;
            ASIGNACIONES.forEach(asignacion=>{
                console.log(asignacion.estatus, asignacion.periodo);
                if(asignacion.estatus==1){
                    console.log(fecha+" = "+fechaAltasB);
                    if(fechaInscrip==fecha){
                        console.log("entre ins");
                        if(asignacion.turno==turnoAlu){
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
    $.ajax({
        url: "../webhook/lista_movimiento.php",
        type: 'POST',
        data : {      idInscripcion: id_inscripcion   },
        success: function (response) {
            console.log(response);
            //Convertimos el string a JSON
            let MOVIMIENTOS = JSON.parse(response);
            let tblMovimientos="";
            let cont=0;
            var credMen=0;
            let c=0;
            let semes;
            var nombres=new Array();
            let a=credMaxim;
            MOVIMIENTOS.forEach(movimiento=>{
                if(MOVIMIENTOS[cont].estatus==1){
                    c++;
                    if((MOVIMIENTOS[0].semestreAlumno==movimiento.semestreMat) || (movimiento.semestreMat==20 || movimiento.semestreMat==0)){
                        semes=MOVIMIENTOS[0].semestreAlumno;
                        console.log(MOVIMIENTOS[0].semestreAlumno);
                    }else{
                        semes=movimiento.semestreMat;
                    }
                    credMen=parseInt(MOVIMIENTOS[cont].creditos); 
                    tblMovimientos += `<tr idMovimiento=${movimiento.id_movimiento}>
                                            <td data-label="No">${c}</td>
                                            <td data-label="Clave">${movimiento.codigo}</td>
                                            <td data-label="Nombre de la Asig">${movimiento.nombre}</td>
                                            <td data-label="Cred">${movimiento.creditos}</td>
                                            <td data-label="Sem">${semes}</td>
                                            <td data-label="Gpo">${movimiento.nombre_grupo}</td>
                                            <td data-label="Mov">Alta</td>
                                            <td colspan="2" class="text-center">
                                                <button type="button" title="Eliminar Materia" class="btn btn-danger btn-sm col-7" onclick="bajaMovimiento(${movimiento.id_asignacion})"><i class='bx bx-trash'></i></button>
                                            </td>
                                        </tr>`;
                    a=parseInt(a)-parseInt(credMen);
                    $("#creditoMaximo").html(parseInt(a));
                    nombres[c]=MOVIMIENTOS[cont].nombre;
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
                    }
                }
                if(a<=credMinimo || credMinimo==''){
                    document.getElementById('btnInscripciones1').style.display = 'none';
                }else{
                    document.getElementById('btnInscripciones1').style.display = 'block';
                }
            });
            asignaturas(a,nombres);
            traslape(id_inscripcion);
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
        formData.append("estatus", "1");
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

function traslape(id_inscripcion){
    console.log(id_inscripcion);
    $.ajax({
        url: "../webhook/lista_horario.php",
        type: 'POST',
        data : {   idInscripcion: id_inscripcion },
        success: function (response) {
            console.log(response);
            let TRASLAPAN = JSON.parse(response);
            let cont=0;
            let tras='';
            let tamañoMaterias=TRASLAPAN.length;
            TRASLAPAN.forEach(traslapa=>{
                console.log(TRASLAPAN[cont].dia);
                if(cont<(tamañoMaterias-1))
                if(TRASLAPAN[cont].dia==TRASLAPAN[cont+1].dia){
                    if((TRASLAPAN[cont+1].inicio==TRASLAPAN[cont].inicio && TRASLAPAN[cont+1].fin==TRASLAPAN[cont].fin) ||  (TRASLAPAN[cont+1].fin>TRASLAPAN[cont].inicio && TRASLAPAN[cont].inicio>TRASLAPAN[cont+1].inicio)){
                        console.log("inicio"+TRASLAPAN[cont].inicio+"-"+TRASLAPAN[cont+1].inicio);
                        console.log("fin"+TRASLAPAN[cont].fin+"-"+TRASLAPAN[cont+1].fin);
                        if(TRASLAPAN[cont].dia==1){
                            $("#traslapan").html(tras+"Traslape con "+TRASLAPAN[cont+1].nombre+" y "+TRASLAPAN[cont].nombre+" el día Lunes");
                            tras=$("#traslapan").text();
                            cont++;
                        }else if(TRASLAPAN[cont].dia==2){
                            $("#traslapan").html(tras+"Traslape con "+TRASLAPAN[cont+1].nombre+" y "+TRASLAPAN[cont].nombre+" el día Martes");
                            tras=$("#traslapan").text();
                            cont++;
                        }else if(TRASLAPAN[cont].dia==3){
                            $("#traslapan").html(tras+"Traslape con "+TRASLAPAN[cont+1].nombre+" y "+TRASLAPAN[cont].nombre+" el día Miercoles");
                            tras=$("#traslapan").text();
                            cont++;
                        }else if(TRASLAPAN[cont].dia==4){
                            $("#traslapan").html(tras+"Traslape con "+TRASLAPAN[cont+1].nombre+" y "+TRASLAPAN[cont].nombre+" el día Jueves");
                            tras=$("#traslapan").text();
                            cont++;
                        }else if(TRASLAPAN[cont].dia==5){
                            $("#traslapan").html(tras+"Traslape con "+TRASLAPAN[cont+1].nombre+" y "+TRASLAPAN[cont].nombre+" el día Viernes");
                            tras=$("#traslapan").text();
                            cont++;
                        }else if(TRASLAPAN[cont].dia==6){
                            $("#traslapan").html(tras+"Traslape con "+TRASLAPAN[cont+1].nombre+" y "+TRASLAPAN[cont].nombre+" el día Sabado");
                            tras=$("#traslapan").text();
                            cont++;
                        }
                        console.log(TRASLAPAN[cont+1].nombre+"-"+TRASLAPAN[cont+1].dia+" inicio: "+TRASLAPAN[cont+1].inicio+", fin: "+TRASLAPAN[cont+1].fin);
                        console.log(TRASLAPAN[cont].nombre+"-"+TRASLAPAN[cont].dia+" inicio: "+TRASLAPAN[cont].inicio+", fin: "+TRASLAPAN[cont].fin);
                    }
                    console.log("solo mismo dia");
                }else{
                    cont++;
                    console.log("diferente dia");
                }
            });
        } 
    });
}