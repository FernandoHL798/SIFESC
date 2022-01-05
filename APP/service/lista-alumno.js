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
            //Convertimos el string a JSON
            let ALUMNO = JSON.parse(response);
                $("#cuenta_alumno").html(ALUMNO[0].cuenta_alumno);
                $("#nombreAlumno").html(ALUMNO[0].nombre+' '+ALUMNO[0].primer_apellido+' '+ALUMNO[0].segundo_apellido);
                $("#anioEstudia").html(ALUMNO[0].anio);
                $("#idCarrera").html(ALUMNO[0].carrera_clave);
                $("#Plantel").html(ALUMNO[0].id_plantel+' - '+ALUMNO[0].nombre_plantel);
                $("#Plan").html(ALUMNO[0].id_plan+' - '+ALUMNO[0].nombre_plan);
                $("#idInscripcionAlumno").val(ALUMNO[0].id_inscripcion);
                $("#creditos").html(ALUMNO[0].maximo_creditos);
                $("#Periodo").html(ALUMNO[0].periodo);
                credMaxim=$("#creditos").text();
                tblConsultaIns(ALUMNO[0].id_inscripcion);
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
            var credMen=0;
            let creditos=0;
            let a=credMaxim;
            MOVIMIENTOS.forEach(movimiento=>{
                if(MOVIMIENTOS[cont].estatus==1){
                    c++;
                    credMen=parseInt(MOVIMIENTOS[cont].creditos); 
                    tblInscripcion += `<tr idMovimiento=${movimiento.id_movimiento}>
                                            <td data-label="No">${c}</td>
                                            <td data-label="Clave">${movimiento.codigo}</td>
                                            <td data-label="Nombre de la Asig">${movimiento.nombre}</td>
                                            <td data-label="Cred">${movimiento.creditos}</td>
                                            <td data-label="Sem">${movimiento.semestre}</td>
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