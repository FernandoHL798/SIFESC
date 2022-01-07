$(document).ready(function(){
    listaMateriasProfesores();
    cargaPlanEstudios();
    $("#frm-add-asignacion").on("submit", function(e){
        //alert("Entrando holi");
            var formData = new FormData(document.getElementById("frm-add-asignacion"));
    formData.append("dato", "valor");
    formData.append("idProfesor", $("#idProfesor").val());

    $.ajax({
        url: "../webhook/add_asignacion.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })

    .done(function(res){
    console.log(res);
       $("#frm-add-asignacion").trigger('reset');
        $("#Add_Asignatura_prof").modal('hide');
        console.log($("#idProfesor").val());
        cargaAsignaturasProfesor($("#idProfesor").val());
    });
    e.preventDefault();
});
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


function cargaPlanEstudios(){
        $.ajax({
        url: "../webhook/lista_planestudios.php",
        type:'POST',
        data : {},
        success: function (response){
            let PLANESESTUDIO =JSON.parse(response);
            //console.log(PLANESESTUDIO);
            let template="";
            template= ` <option value="">Seleeciones un plan de estudio</option>`;
            PLANESESTUDIO.forEach(planes=>{
                template += `
                    <option value="${planes.id_plan}">${planes.id_plan} - ${planes.nombre_plan}</option>
                `
            });
            $("#plan_e_asignacion").html(template);
        }
    });
}

$( "#plan_e_asignacion" ).change(function() {
    let idPlan= $("#plan_e_asignacion").val();
    cargaAsignaturasPlan(idPlan);
});



function cargaAsignaturasPlan(idPlan){
//Funcion ajax que traiga las asignaturas por plan de estudios AUN NO FUNCIONA ADECUADAMENTE SIGO EN ELLO 
    $.ajax({
        url: "../webhook/lista-asignaturas-plan.php",
        type:'POST',
        data : {id_plan : idPlan},
        success: function (response){
            let ASIGNATURAS = JSON.parse(response);
            let template="";
            template= ` <option value="">Seleeciones una asignatura</option>`;
            ASIGNATURAS.forEach(asignatura=>{
                template += `
                <option value="${asignatura.id_asignatura}">${asignatura.codigo} - ${asignatura.nombre}</option>`
            }); 
            $("#asignatura_asignacion").html(template);   
        }
    });
}

$( "#asignatura_asignacion" ).change(function() {
    let idAsignatura= $("#asignatura_asignacion").val();
    cargaGruposAsignatura(idAsignatura);
});


function cargaGruposAsignatura (idAsignatura){
        $.ajax({
        url: "../webhook/consulta_grupos_asignatura.php",
        type:'POST',
        data : { idAsignatura : idAsignatura},   //izquierda micro servicio deracha función
        success: function (response){  
            let GRUPOS = JSON.parse(response);
            console.log(GRUPOS);
            let template="";

            GRUPOS.forEach(grupos=>{
                template += `
                <option value="${grupos.id_grupo}">${grupos.nombre_grupo}</option>`
            }); 
            
             $("#grupo_asignacion").html(template);   
        }
    });
}





