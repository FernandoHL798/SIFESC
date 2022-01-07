$(document).ready(function(){
    var credMaxim=0;
    datosAlumno();
});
//Funcion para realizar peticion a un microservicio 
function datosAlumno(){
	$.ajax({
        url: "../webhook/lista_alumnos.php",
        type: 'POST',
        data : {   idUsuario: $("#idUsuario").val(),
        			idPlan: $("#idPlan").val(),
                    estatusPeriodo: 0     },
        success: function (response) {
            console.log(response);
            let ALUMNO = JSON.parse(response);
            let cont=0;
            ALUMNO.forEach(alumno=>{
            if(ALUMNO[cont].estatusInscripcion==1){
                $("#cuenta_alumno").html(ALUMNO[cont].cuenta_alumno);
                $("#nombreAlumno").html(ALUMNO[cont].nombre+' '+ALUMNO[cont].primer_apellido+' '+ALUMNO[cont].segundo_apellido);
                $("#anioEstudia").html(ALUMNO[cont].anio);
                $("#idCarrera").html(ALUMNO[cont].carrera_clave);
                console.log(ALUMNO[cont].carrera_clave);
                $("#Plantel").html(ALUMNO[cont].id_plantel+' - '+ALUMNO[cont].nombre_plantel);
                $("#Plan").html(ALUMNO[cont].id_plan+' - '+ALUMNO[cont].nombre_plan);
                $("#idInscripcionAlumno").val(ALUMNO[cont].id_inscripcion);
                $("#creditos").html(ALUMNO[cont].maximo_creditos);
                $("#Periodo").html(ALUMNO[cont].periodo);
                credMaxim=$("#creditos").text();
                tblConsultaIns(ALUMNO[cont].id_inscripcion);
                if(cont>0){
                    notas(ALUMNO[cont].periodo,"altas",ALUMNO[cont].id_inscripcion);
                }else{
                    notas(ALUMNO[cont].periodo,"inscripcion",ALUMNO[cont].id_inscripcion);
                }
                document.getElementById('table').style.display = 'block';
                document.getElementById('nota').style.display = 'block';
                document.getElementById('tituloIns').style.display = 'block';
                document.getElementById('instrucciones').style.display = 'block';
                document.getElementById('imprime').style.display = 'block';
                document.getElementById('aviso').style.display = 'none';
            }else{
                console.log(ALUMNO[cont].estatusInscripcion);
                cont++;
                document.getElementById('table').style.display = 'none';
                document.getElementById('nota').style.display = 'none';
                document.getElementById('tituloIns').style.display = 'none';
                document.getElementById('instrucciones').style.display = 'none';
                document.getElementById('imprime').style.display = 'none';
                document.getElementById('aviso').style.display = 'block';
                $("#aviso").html("No tienes inscripciones anteriores");
            }
            //Convertimos el string a JSON
                
            });
     }       
    });
}


function tblConsultaIns(id_inscripcion){
    $.ajax({
        url: "../webhook/lista_movimiento.php",
        type: 'POST',
        data : {      idInscripcion: id_inscripcion   },
        success: function (response) {
            //Convertimos el string a JSON
            let MOVIMIENTOS = JSON.parse(response);  
            let tblInscripcion="";
            let cont=0;
            let c=0;
            let semes;
            var credMen=0;
            let creditos=0;
            let a=credMaxim;
            MOVIMIENTOS.forEach(movimiento=>{
                if(MOVIMIENTOS[cont].estatus==1){
                    if((MOVIMIENTOS[0].semestreAlumno==movimiento.semestreMat) || (movimiento.semestreMat==20 || movimiento.semestreMat==0)){
                        semes=MOVIMIENTOS[0].semestreAlumno;
                        console.log(MOVIMIENTOS[0].semestreAlumno);
                    }else{
                        semes=movimiento.semestreMat;
                    }
                    c++;
                    credMen=parseInt(MOVIMIENTOS[cont].creditos); 
                    tblInscripcion += `<tr idMovimiento=${movimiento.id_movimiento}>
                                            <td data-label="No">${c}</td>
                                            <td data-label="Clave">${movimiento.codigo}</td>
                                            <td data-label="Nombre de la Asig">${movimiento.nombre}</td>
                                            <td data-label="Cred">${movimiento.creditos}</td>
                                            <td data-label="Sem">${semes}</td>
                                            <td data-label="Gpo">${movimiento.nombre_grupo}</td>
                                            <td data-label="Mov">Alta</td>
                                        </tr>`;
                    a=parseInt(a)-parseInt(credMen);
                    creditos=credMaxim-a;
                    $("#creditos").html(parseInt(creditos));
                    cont++;
                }else{
                    cont++;
                    if(c==0 && cont==1){
                        a=credMaxim;
                        $("#creditos").html(parseInt(a));
                    }
                }
            });
            $("#tbl-consulta-inscripcion").html(tblInscripcion);
        }
    });
}

function notas(periodo,tipo,id){
    $.ajax({
        url: "../webhook/lista_existe_periodo.php",
        type: 'POST',
        data : {   id_periodo: 0,
            periodoAg: periodo},
        success: function (response) {
            console.log(response);
            let NOTAS=JSON.parse(response);
            let fecha;
            $("#punto1").html("1. Tu inscripción ha quedado registrada con el folio "+id+".");
            if(tipo=="inscripcion"){
                var año=NOTAS[0].fecha_inscripcion_fin.charAt(0)+NOTAS[0].fecha_inscripcion_fin.charAt(1)+NOTAS[0].fecha_inscripcion_fin.charAt(2)+NOTAS[0].fecha_inscripcion_fin.charAt(3);
                var mes=NOTAS[0].fecha_inscripcion_fin.charAt(5)+NOTAS[0].fecha_inscripcion_fin.charAt(6);
                var dia=NOTAS[0].fecha_inscripcion_fin.charAt(8)+NOTAS[0].fecha_inscripcion_fin.charAt(9);
                if(mes=='01'){
                    fecha=dia+" de Enero del "+año;
                }if(mes=='02'){
                    fecha=dia+" de Febrero del "+año;
                }if(mes=='03'){
                    fecha=dia+" de Marzo del "+año;
                }if(mes=='04'){
                    fecha=dia+" de Abril del "+año;
                }if(mes=='05'){
                    fecha=dia+" de Mayo del "+año;
                }if(mes=='06'){
                    fecha=dia+" de Junio del "+año;
                }if(mes=='07'){
                    fecha=dia+" de Julio del "+año;
                }if(mes=='08'){
                    fecha=dia+" de Agosto del "+año;
                }if(mes=='09'){
                    fecha=dia+" de Septiembre del "+año;
                }if(mes=='10'){
                    fecha=dia+" de Octubre del "+año;
                }if(mes=='11'){
                    fecha=dia+" de Noviembre del "+año;
                }if(mes=='12'){
                    fecha=dia+" de Diciembre del "+año;
                }
                $("#nota").html("NOTA: LA VALIDEZ DE ESTE DOCUMENTO QUEDA SUJETA A LA REVISIÓN DEL PLAN DE ESTUDIOS Y COMPROBACIÓN DE TUS ASIGNATURAS EN LA PÁGINA DEL S.I.A.E. EN CASO DE NO COINCIDIR, PASAR A LA VENTANILLA DE TU CARRERA ANTES DEL "+fecha+".");
                $("#punto2").html(fecha+".");
                if(mes=='01'){
                    fecha=(parseInt(dia)+2)+" de Enero del "+año;
                }if(mes=='02'){
                    fecha=("0"+parseInt(dia)+2)+" de Febrero del "+año;
                }if(mes=='03'){
                    fecha=("0"+parseInt(dia)+2)+" de Marzo del "+año;
                }if(mes=='04'){
                    fecha=("0"+parseInt(dia)+2)+" de Abril del "+año;
                }if(mes=='05'){
                    fecha=("0"+parseInt(dia)+2)+" de Mayo del "+año;
                }if(mes=='06'){
                    fecha=("0"+parseInt(dia)+2)+" de Junio del "+año;
                }if(mes=='07'){
                    fecha=("0"+parseInt(dia)+2)+" de Julio del "+año;
                }if(mes=='08'){
                    fecha=("0"+parseInt(dia)+2)+" de Agosto del "+año;
                }if(mes=='09'){
                    fecha=("0"+parseInt(dia)+2)+" de Septiembre del "+año;
                }if(mes=='10'){
                    fecha=("0"+parseInt(dia)+2)+" de Octubre del "+año;
                }if(mes=='11'){
                    fecha=("0"+parseInt(dia)+2)+" de Noviembre del "+año;
                }if(mes=='12'){
                    fecha=("0"+parseInt(dia)+2)+" de Diciembre del "+año;
                }
                $("#punto3").html("3. Si requieres una constancia de inscripción (constancia de estudios), podrás tramitarla a partir del día "+fecha+" en la ventanilla virtual de Servicios Escolares.");
            }else{
                var año=NOTAS[0].fecha_altas_bajas_fin.charAt(0)+NOTAS[0].fecha_altas_bajas_fin.charAt(1)+NOTAS[0].fecha_altas_bajas_fin.charAt(2)+NOTAS[0].fecha_altas_bajas_fin.charAt(3);
                var mes=NOTAS[0].fecha_altas_bajas_fin.charAt(5)+NOTAS[0].fecha_altas_bajas_fin.charAt(6);
                var dia=NOTAS[0].fecha_altas_bajas_fin.charAt(8)+NOTAS[0].fecha_altas_bajas_fin.charAt(9);
                if(mes=='01'){
                    fecha=dia+" de Enero del "+año;
                }if(mes=='02'){
                    fecha=dia+" de Febrero del "+año;
                }if(mes=='03'){
                    fecha=dia+" de Marzo del "+año;
                }if(mes=='04'){
                    fecha=dia+" de Abril del "+año;
                }if(mes=='05'){
                    fecha=dia+" de Mayo del "+año;
                }if(mes=='06'){
                    fecha=dia+" de Junio del "+año;
                }if(mes=='07'){
                    fecha=dia+" de Julio del "+año;
                }if(mes=='08'){
                    fecha=dia+" de Agosto del "+año;
                }if(mes=='09'){
                    fecha=dia+" de Septiembre del "+año;
                }if(mes=='10'){
                    fecha=dia+" de Octubre del "+año;
                }if(mes=='11'){
                    fecha=dia+" de Noviembre del "+año;
                }if(mes=='12'){
                    fecha=dia+" de Diciembre del "+año;
                }
                $("#nota").html("NOTA: LA VALIDEZ DE ESTE DOCUMENTO QUEDA SUJETA A LA REVISIÓN DEL PLAN DE ESTUDIOS Y COMPROBACIÓN DE TUS ASIGNATURAS EN LA PÁGINA DEL S.I.A.E. EN CASO DE NO COINCIDIR, PASAR A LA VENTANILLA DE TU CARRERA ANTES DEL "+fecha+".");
                $("#punto2").html(fecha+".");
                if(mes=='01'){
                    fecha=(parseInt(dia)+2)+" de Enero del "+año;
                }if(mes=='02'){
                    fecha=("0"+parseInt(dia)+2)+" de Febrero del "+año;
                }if(mes=='03'){
                    fecha=("0"+parseInt(dia)+2)+" de Marzo del "+año;
                }if(mes=='04'){
                    fecha=("0"+parseInt(dia)+2)+" de Abril del "+año;
                }if(mes=='05'){
                    fecha=("0"+parseInt(dia)+2)+" de Mayo del "+año;
                }if(mes=='06'){
                    fecha=("0"+parseInt(dia)+2)+" de Junio del "+año;
                }if(mes=='07'){
                    fecha=("0"+parseInt(dia)+2)+" de Julio del "+año;
                }if(mes=='08'){
                    fecha=("0"+parseInt(dia)+2)+" de Agosto del "+año;
                }if(mes=='09'){
                    fecha=("0"+parseInt(dia)+2)+" de Septiembre del "+año;
                }if(mes=='10'){
                    fecha=("0"+parseInt(dia)+2)+" de Octubre del "+año;
                }if(mes=='11'){
                    fecha=("0"+parseInt(dia)+2)+" de Noviembre del "+año;
                }if(mes=='12'){
                    fecha=("0"+parseInt(dia)+2)+" de Diciembre del "+año;
                }
                $("#punto3").html("3. Si requieres una constancia de inscripción (constancia de estudios), podrás tramitarla a partir del día "+fecha+" en la ventanilla virtual de Servicios Escolares.");
            }
        }
    });
}