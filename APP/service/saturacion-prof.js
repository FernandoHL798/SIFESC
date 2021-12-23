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
                                <td data-label="In">${saturacion.inscritos}</td>
                                <td data-label="Acciones">
                                <button type="button" title="Editar Asignatura" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Edit_Modal"><i class='bx bxs-pencil'></i></button>
                                <button type="button" title="Eliminar Asignatura" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal_baja_asig_plan"><i class='bx bx-trash'></i></button>   
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
                                <button type="button" title="Editar Asignatura" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Edit_Modal"><i class='bx bxs-pencil'></i></button>
                                <button type="button" title="Eliminar Asignatura" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal_baja_asig_plan"><i class='bx bx-trash'></i></button>   
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
                                <td data-label="Acciones"><button type="button" title="Editar Asignatura" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Edit_Modal"><i class='bx bxs-pencil'></i></button><button type="button" title="Eliminar Asignatura" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal_baja_asig_plan"><i class='bx bx-trash'></i></button></td>
                            </tr> <tr class="text-center">
                            <th style="width: 100px;">Asig</th>
                            <th style="width: 400px;">Nombre</th>
                            <th style="width: 106px;">Gpo</th>
                            <th style="width: 70px;">Sem</th>
                            <th style="width: 70px;">Cr</th>
                            <th style="width: 93px;">Cup</th>
                            <th style="width: 70px;">In</th>
                            <th style="width: 140px;">Acciones</th>
                            </tr>`;
                        }}}
            });
            $("#tbl-saturacion-asignaciones").html(template);
            $("#plan_de_estudios_sat").html("Plan de estudios: "+$("#idPlanSat").val());
        }
        
    });
}