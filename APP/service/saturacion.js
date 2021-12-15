$(document).ready(function () {
    detallesSaturacion();
    detallesSaturacionPlan();
});

function detallesSaturacion(){
    $.ajax({
        url: "../webhook/lista_asignacion.php",
        type: 'POST',
        data: {
            idPlan : "9",
            idAsignatura:"0"
        },
        success: function (response) {
             //COnvertimos el string a JSON
           let SATURACIONES = JSON.parse(response);  
            let template="";
            let cont=0;
            console.log(SATURACIONES);
            SATURACIONES.forEach(saturacion => {
                if(cont<=(parseInt(saturacion.id_asignacion)+1)){
                if(SATURACIONES[cont].nombre_grupo==SATURACIONES[cont+1].nombre_grupo){
                    cont++;
                template += `<tr class="text-center">
                                <td data-label="Clave Asig">${saturacion.codigo}</td>
                                <td data-label="Nombre">${saturacion.nombre}</td>
                                <td data-label="Gpo">${saturacion.nombre_grupo}</td>
                                <td data-label="Se">${saturacion.semestre}</td>
                                <td data-label="Cr">${saturacion.creditos}</td>
                                <td data-label="Cup">${saturacion.cupo}</td>
                                <td data-label="In">${saturacion.inscritos}</td>
                            </tr> `;
                }else{if(cont==(parseInt(saturacion.id_asignacion)-1)){
cont++;
                template += `<tr class="text-center">
                    <th style="width: 100px;">Clave Asig</th>
                    <th style="width: 600px;">Nombre</th>
                    <th style="width: 106px;">Gpo.</th>
                    <th style="width: 70px;">Se.</th>
                    <th style="width: 70px;">Cr.</th>
                    <th style="width: 93px;">Cupo</th>
                    <th style="width: 70px;">In</th>
                </tr><tr class="text-center">
                                <td data-label="Clave Asig">${saturacion.codigo}</td>
                                <td data-label="Nombre">${saturacion.nombre}</td>
                                <td data-label="Gpo">${saturacion.nombre_grupo}</td>
                                <td data-label="Se">${saturacion.semestre}</td>
                                <td data-label="Cr">${saturacion.creditos}</td>
                                <td data-label="Cup">${saturacion.cupo}</td>
                                <td data-label="In">${saturacion.inscritos}</td>
                            </tr> `;
                }else{
                            cont++;
                    template += `
                <tr class="text-center">
                                <td data-label="Clave Asig">${saturacion.codigo}</td>
                                <td data-label="Nombre">${saturacion.nombre}</td>
                                <td data-label="Gpo">${saturacion.nombre_grupo}</td>
                                <td data-label="Se">${saturacion.semestre}</td>
                                <td data-label="Cr">${saturacion.creditos}</td>
                                <td data-label="Cup">${saturacion.cupo}</td>
                                <td data-label="In">${saturacion.inscritos}</td>
                            </tr> <tr class="text-center">
                    <th style="width: 100px;">Clave Asig</th>
                    <th style="width: 600px;">Nombre</th>
                    <th style="width: 106px;">Gpo.</th>
                    <th style="width: 70px;">Se.</th>
                    <th style="width: 70px;">Cr.</th>
                    <th style="width: 93px;">Cupo</th>
                    <th style="width: 70px;">In</th>
                </tr>`;
                        }}}
            });
            $("#tbl-asignaciones").html(template);
        }
        
    });
}


/*  FUNCION PARA SATURACION PARA MATERIAS EN PLAN DE ESTUDIO .......................................................................................................................*/

function detallesSaturacionPlan(){
    $.ajax({
        url: "../webhook/lista_asignacion.php",
        type: 'POST',
        data: {
            idPlan : "9",
            idAsignatura:"0"
        },
        success: function (response) {
             //COnvertimos el string a JSON
           let SATURACIONES = JSON.parse(response);  
            let template="";
            let cont=0;
            console.log(SATURACIONES);
            SATURACIONES.forEach(saturacion => {
                if(cont<=(parseInt(saturacion.id_asignacion)+1)){
                if(SATURACIONES[cont].nombre_grupo==SATURACIONES[cont+1].nombre_grupo){
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
                }else{if(cont==(parseInt(saturacion.id_asignacion)-1)){
cont++;
                template += `<tr class="text-center">
<th style="width: 100px;">Asig</th>
                            <th style="width: 400px;">Nombre</th>
                            <th style="width: 106px;">Gpo</th>
                            <th style="width: 70px;">Sem</th>
                            <th style="width: 70px;">Cr</th>
                            <th style="width: 93px;">Cup</th>
                            <th style="width: 70px;">In</th>
                            <th style="width: 140px;">Acciones</th>
                </tr><tr class="text-center">
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
                    template += `
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
            $("#tbl-sturacion-asignaciones").html(template);
        }
        
    });
}


