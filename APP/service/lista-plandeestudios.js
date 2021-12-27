$(document).ready(function(){
    listaplandeestudios();
    listaplandeestudiosasig();
    listaPlanesAgAlumno();
    listaplandeestudiosAdmin();
});


function listaplandeestudios(){
    $.ajax({
        url: "../webhook/lista_planestudios.php",
        type:'POST',
        data : {},
        success: function (response){
            let PLANESESTUDIO =JSON.parse(response);
            //console.log(PLANESESTUDIO);
            let template="";
            PLANESESTUDIO.forEach(planes=>{
                template += `<tr class="text-center">
                        <td data-label="Clave">${planes.id_plan}</td>
                        <td data-label="Nombre">${planes.nombre_plan}</td>
                        <td data-label="Acciones">
                            <a href="./saturacion_prof.php?idPlan=${planes.id_plan}"><button type="button" title="Ver Saturación" class="btn btn-info"><i class='bx bx-show'></i></button>
                            </td>
                        </tr>`
            });
            $("#tbl-lista-plan").html(template);
        }
    });
}

/*  FUNCION PARA PLAN DE ESTUDIO ASIGNATURA (plan_de_estudios_asignatura).......................................................................................................................*/

function listaplandeestudiosasig(){
    $.ajax({
        url: "../webhook/lista_planestudios.php",
        type:'POST',
        data : {},
        success: function (response){
            let PLANESESTUDIO =JSON.parse(response);
            //console.log(PLANESESTUDIO);
            let template="";
            PLANESESTUDIO.forEach(planes=>{
                template += `<tr class="text-center">
                        <td data-label="Clave">${planes.id_plan}</td>
                        <td data-label="Nombre">${planes.nombre_plan}</td>
                        <td data-label="Acciones">
                                <a href="./ag_asig.php?idPlan=${planes.id_plan}"><button type="button" title="Ver Asignatura" class="btn btn-info"><i class='bx bx-show'></i></button></
                                </td>
                        </tr>`
            });
            $("#tbl-lista-plan-asignatura").html(template);
        }
    });
}

/*FUNCION PARA LISTA PLANES DE AGREGA ALUMNOS POR PLAN */

function listaPlanesAgAlumno(){
    $.ajax({
        url: "../webhook/lista_planestudios.php",
        type:'POST',
        data : {},
        success: function (response){
            let PLANESESTUDIO =JSON.parse(response);
            //console.log(PLANESESTUDIO);
            let template="";
            PLANESESTUDIO.forEach(planes=>{
                template += `<tr class="text-center">
                        <td data-label="Clave">${planes.id_plan}</td>
                        <td data-label="Nombre">${planes.nombre_plan}</td>
                        <td data-label="Acciones">
                            <a href="./ag_alumno.php?idPlan=${planes.id_plan}"><button type="button" title="Ver Saturación" class="btn btn-info"><i class='bx bx-show'></i></button>
                            </td>
                        </tr>`
            });
            $("#tbl-lista-planes-alumnos").html(template);
        }
    });
}

/*FUNCION PARA LISTA PLANES DE ESTUDIO EN ADMIN*/
function listaplandeestudiosAdmin(){
    $.ajax({
        url: "../webhook/lista_planestudios.php",
        type:'POST',
        data : {},
        success: function (response){
            let PLANESESTUDIO =JSON.parse(response);
            console.log(PLANESESTUDIO);
            let template="";
            PLANESESTUDIO.forEach(plan => {
              /*if(plan.maximo_materias!=""){
                maximomaterias= plan.maximo_materias;
              } else{
                maximomaterias="Ilimitado";
              }*/
              let maximomaterias= plan.maximo_materias==null ? "ILIMITADO" : plan.maximo_materias;
              template +=`
              <tr class="text-center">
                  <td data-label="Clave">${plan.id_plan}</td>
                  <td data-label="ClaveCarrera">${plan.id_carrera_fk}</td>
                  <td data-label="Nombre">${plan.nombre_plan}</td>
                  <td data-label="Duración">${plan.semestres}</td>
                  <td data-label="Limite de Inscr. por periodo">${maximomaterias}</td>
                  <td data-label="MaximoCreditos">${plan.maximo_creditos}</td>
                  <td data-label="MinimoCreditos">${plan.minimo_creditos}</td>
                  <td data-label="MaximoSemestres">${plan.maximo_semestres}</td>
                  <td data-label="MinimoMaterias">${plan.minimo_materias}</td>
                  <td data-label="Creditos Oblig.">${plan.creditos_obligatorios}</td>
                  <td data-label="Creditos Opt.">${plan.creditos_optativos}</td>
                  <td data-label="Creditos Tot.">${plan.creditos_totales}</td>
                  <td data-label="Acciones">
                      <button type="button" title="Editar Plan" class="btn btn-success" onclick="editaPlan(${plan.id_plan},'${plan.id_carrera_fk}',
                      '${plan.nombre_plan}','${plan.semestres}','${maximomaterias}','${plan.maximo_creditos}','${plan.minimo_creditos}','${plan.maximo_semestres}',
                      '${plan.minimo_materias}','${plan.creditos_obligatorios}','${plan.creditos_optativos}','${plan.creditos_totales}');"><i class='bx bxs-pencil'></i></button>
                      <button type="button" title="Eliminar Plan" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal_baja_Plan"><i class='bx bx-trash'></i></button>
                  </td>
              </tr>
              `;
            });
            $("#tbl-plan-estudios").html(template);
            }
    });
}

function editaPlan(idPlan,idCarrera,nombrePlan,planSem,maxMaterias,maxCreditos,minCreditos,maxSemestres,minMaterias,
    creditosObligatorios,creditosOptativos,creditosTotales){
    $('#Edit_Plan_Modal').modal('show');
    $('#clave_plan_estudios_edit').val(idPlan);
    $('#clave_carrera_edit').val(idCarrera);
    $('#nombre_plan_e_edit').val(nombrePlan);
    $('#Duracion_semestres_edit').val(planSem);
    $('#limite_insc_x_periodo_edit').val(maxMaterias);
    $('#max_creditos_edit').val(maxCreditos);
    $('#min_creditos_edit').val(minCreditos);
    $('#max_semestres_edit').val(maxSemestres);
    $('#min_materias_edit').val(minMaterias);
    $('#creditos_obli_edit').val(creditosObligatorios);
    $('#creditos_opta_edit').val(creditosOptativos);
    $('#creditos_totales_edit').val(creditosTotales);
}