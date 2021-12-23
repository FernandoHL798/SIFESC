$(document).ready(function () {
    let peri="";
    periodo(peri);
    listaCarreras();
});

function periodo(peri){
    $.ajax({
        url: "../webhook/lista_periodo.php",
        type: 'POST',
        data : {    },
        success: function (response) {
            //Convertimos el string a JSON
            let PERIODOS = JSON.parse(response);
                $("#periodo_sat").html("Periodo: "+PERIODOS[0].periodo+" || ");
                peri= PERIODOS[0].periodo;
                detallesSaturacionPlan(peri);
            }
        });
}

function listaCarreras(){
$.ajax({
        url: "../webhook/lista_carrera.php",   
        type: 'POST',                               
        data : {  idPlan: $("#idPlanSat").val()    },                           
        success: function (response) {            
            //Convertimos el string a JSON
            let CARRERA = JSON.parse(response);
            CARRERA.forEach(carrera=> {
                $("#carrera_sat").html("Carrera: "+CARRERA[0].nombre+" || ");
            });
        }
        
    });
}

function detallesSaturacionPlan(peri){
    $.ajax({
        url: "../webhook/lista_asignacion.php",
        type: 'POST',
        data: {
            idPlan : $("#idPlanSat").val(),
            idAsignatura:"0",
            periodo: peri
        },
        success: function (response) {
            console.log(response);
             //COnvertimos el string a JSON
            let SATURACIONES =JSON.parse(response);
            let template="";
            let cont=0;
            let tamañoSaturacion=SATURACIONES.length;
            SATURACIONES.forEach(saturacion => {
                if(cont<tamañoSaturacion){
                if(cont<tamañoSaturacion-1 && SATURACIONES[cont].nombre_grupo==SATURACIONES[cont+1].nombre_grupo){
                    cont++;
                template += `<tr class="text-center">
                                <td data-label="Clave Asig">${saturacion.codigo}</td>
                                <td data-label="Nombre">${saturacion.nombre}</td>
                                <td data-label="Gpo">${saturacion.nombre_grupo}</td>
                                <td data-label="Se">${saturacion.semestre}</td>
                                <td data-label="Cr">${saturacion.creditos}</td>
                                <td data-label="Cup">${saturacion.cupo}</td>
                                <td data-label="In" type="hidden">${saturacion.inscritos}</td>
                                <td data-label="Acciones">
                                <button type="button" title="Editar Asignatura" class="btn btn-success" onclick="editarSaturacion('${saturacion.id_asignacion}','${saturacion.codigo}','${saturacion.nombre}','${saturacion.nombre_grupo}','${saturacion.semestre}','${saturacion.creditos}','${saturacion.cupo}');"><i class='bx bxs-pencil'></i></button>
                                <!--<button type="button" title="Eliminar Asignatura" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal_baja_asig_plan"><i class='bx bx-trash'></i></button> -->
                            </td>
                            </tr> `;
                }else{if(cont==(tamañoSaturacion)-1){
                    cont++;
                    template += `<tr class="text-center">
                                <td data-label="Clave Asig">${saturacion.codigo}</td>
                                <td data-label="Nombre">${saturacion.nombre}</td>
                                <td data-label="Gpo">${saturacion.nombre_grupo}</td>
                                <td data-label="Se">${saturacion.semestre}</td>
                                <td data-label="Cr">${saturacion.creditos}</td>
                                <td data-label="Cup">${saturacion.cupo}</td>
                                <td data-label="In">${saturacion.inscritos}</td>
                                <td data-label="Acciones">
                                <button type="button" title="Editar Asignatura" class="btn btn-success" onclick="editarSaturacion('${saturacion.id_asignacion}','${saturacion.codigo}','${saturacion.nombre}','${saturacion.nombre_grupo}','${saturacion.semestre}','${saturacion.creditos}','${saturacion.cupo}');"><i class='bx bxs-pencil'></i></button>
                                <!--<button type="button" title="Eliminar Asignatura" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal_baja_asig_plan"><i class='bx bx-trash'></i></button> -->
                            </td>
                            </tr> `;
                }else{
                            cont++;
                    template +=`
                                <tr class="text-center">
                                <td data-label="Clave Asig">${saturacion.codigo}</td>
                                <td data-label="Nombre">${saturacion.nombre}</td>
                                <td data-label="Gpo">${saturacion.nombre_grupo}</td>
                                <td data-label="Se">${saturacion.semestre}</td>
                                <td data-label="Cr">${saturacion.creditos}</td>
                                <td data-label="Cup">${saturacion.cupo}</td>
                                <td data-label="In">${saturacion.inscritos}</td>
                                <td data-label="Acciones">
                                <button type="button" title="Editar Asignatura" class="btn btn-success" onclick="editarSaturacion('${saturacion.id_asignacion}','${saturacion.codigo}','${saturacion.nombre}','${saturacion.nombre_grupo}','${saturacion.semestre}','${saturacion.creditos}','${saturacion.cupo}');"><i class='bx bxs-pencil'></i></button>
                                <!--<button type="button" title="Eliminar Asignatura" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal_baja_asig_plan"><i class='bx bx-trash'></i></button> -->
                                </td>
                            </tr> <tr class="text-center">
                            <th style="width: 100px;">CLAVE ASIG</th>
                            <th style="width: 400px;">NOMBRE</th>
                            <th style="width: 106px;">GPO</th>
                            <th style="width: 70px;">SEM</th>
                            <th style="width: 70px;">CR</th>
                            <th style="width: 93px;">CUP</th>
                            <th style="width: 70px;">IN</th>
                            <th style="width: 140px;">ACCIONES</th>
                            </tr>`;
                        }}}
            });
            $("#tbl-saturacion-asignaciones").html(template);
            $("#plan_de_estudios_sat").html("Plan de estudios: "+$("#idPlanSat").val());
        }
        
    });
}

function editarSaturacion(idasignacion, codigo, nombre, grupo, semestre, creditos, cupo){
   $('#Edit-Sat-Modal').modal('show');
   let id_usuario= $("#idUsuario").val();
   //Todas las variables que se pueden editar en el modal
   $("#idusuario_sat").val(id_usuario);
   $("#clave_asignatura_sat").val(codigo);
   $("#idasignacion_sat").val(idasignacion);
   $("#nombre_sat").val(nombre);
   $("#grupo_sat").val(grupo);
   $("#semestre_sat").val(semestre);
   $("#creditos_sat").val(creditos);
   $("#cupo_sat").val(cupo);
   console.log(id_usuario);

    $("#frm-edit-saturacion-prof").on("submit", function(e){
    //var f = $(this);
    var formData = new FormData(document.getElementById("frm-edit-saturacion-prof"));
    //formData.append("dato", "valor");
    formData.append("idAsignacionSat", $("#idasignacion_sat").val());
    formData.append("cupo", $("#cupo_sat").val());
    console.log(cupo);
    $.ajax({
        url: "../webhook/modifica_asignacion.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
        .done(function(res){
        //Ocultar modal, resetear form y cargar lista
        console.log(res);
        $("#frm-edit-saturacion-prof").trigger('reset');
        $("#Edit-Sat-Modal").modal('hide');
        periodo();
        
        });
    e.preventDefault();
});

}