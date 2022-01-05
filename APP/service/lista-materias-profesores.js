$(document).ready(function(){
    listaMateriasProfesores();
});

function listaMateriasProfesores(){                         /* NOMBRO COMO QUIERA */
    $.ajax({
        url: "../webhook/lista_profesor.php",       /* NOMBRE DEL WEBHOOK DEL MICRO SERVICIO A UTILIZAR */
        type: 'POST',                               /*  */
        data : {  idProfesor : $("#idProfesor").val()
             },                           /*Es para mandar los valores para traer un registro en especifico idUsuario: $('#idUsuario').val()*/
        success: function (response) {              /*  */
            //Convertimos el string a JSON
            let PROFESORES = JSON.parse(response);  /* SE CONVIERTE DE STRIN A JSON || EL NOMBRE PUEDE SER COMO SEA PERO 
                         SOLO SE UTILIZA PARA LAS LISTAS*/
            let profesor= PROFESORES[0];

            $("#rfc_profe").html(profesor.cuenta_profesor);
            $("#depto_profe").html(profesor.nombre)
            $("#nombre_profe").html(profesor.nombre_profesor)
            $("#pa_profe").html(profesor.primer_apellido)
            $("#sa_profe").html(profesor.segundo_apellido);     /* id de la tabla de front */



            cargaAsignaturasProfesor(profesor.usuario_id_fk);

        }
        
    });
}

function cargaAsignaturasProfesor(idProfesor){
     $.ajax({
        url: "../webhook/lista_asignaciones_profesor.php",       /* NOMBRE DEL WEBHOOK DEL MICRO SERVICIO A UTILIZAR */
        type: 'POST',                               /*  */
        data : {  idProfesor :  idProfesor },                           /*Es para mandar los valores para traer un registro en especifico idUsuario: $('#idUsuario').val()*/
    success: function (response) { 

        let ASIGNACIONES = JSON.parse(response);
        console.log(ASIGNACIONES);
        let template = "";
        ASIGNACIONES.forEach(asignacion=> {         /* "profesor" se nombra como sea */   
            /* los datos tienen que ser de la base de datos  */
            let caracter ="";
            if (asignacion.caracter == 1) {caracter = "OBLIGATORIA"}
                else if (asignacion.caracter == 2) {caracter = "OPTATIVA REQUERIDA"}
                    else (caracter = "OPTATIVA DE ELECCIÓN")
            template += `<tr idAsignacion="${asignacion.id_asignacion}">                                   
                            <td>${asignacion.clave_plan}</td>
                            <td>${asignacion.nombre_plan}</td>
                            <td>${asignacion.codigo}</td>
                            <td>${asignacion.nombre_asignatura}</td>
                            <td>${asignacion.semestre}</td>
                            <td>${asignacion.nombre_grupo}</td>
                            <td>${asignacion.creditos}</td>
                            <td>${caracter}</td>
                            <td><button type="button" title="Eliminar asignación" class="btn btn-danger" onclick="eliminaAsignacion(${asignacion.id_asignacion});"><i class="bx bx-trash"></i></button></td>
                        </tr>`;    
        });
        $("#tbl_materias_profesores").html(template);
           
        }
        
    });
}

function eliminaAsignacion(id_asignacion){
    $('#Modal_baja').modal('show');
    $("#idAsignacion").val(id_asignacion);
}


$("#frm_baja_asignatura_inscrip").on("submit", function(e){
    alert("Entrando")
     var f = $(this);
    var formData = new FormData(document.getElementById("frm_baja_asignatura_inscrip"));
    formData.append("dato", "valor");
    $.ajax({
        url: "../webhook/elimina_asignacion.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
        .done(function(res){
        console.log(res);
        $("#frm_baja_asignatura_inscrip").trigger('reset');
        $("#Modal_baja").modal('hide');
        cargaAsignaturasProfesor($("#idProfesor").val());
        });
        
    e.preventDefault();
});