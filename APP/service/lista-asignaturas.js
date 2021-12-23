$(document).ready(function(){
    listaplandeestudios();
    actualizarasignatura();
    $("#frm_m_a_asignatura").on("submit", function(e){
    var f = $(this);
    var formData = new FormData(document.getElementById("frm_m_a_asignatura"));
    formData.append("dato", "valor");
    formData.append("idPlan", $("#idPlanAsig").val());
    $.ajax({
        url: "../webhook/add_asignatura.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
        .done(function(res){
        console.log(res);
        //Ocultar modal, resetear form y cargar lista de los planes
        console.log(res);
        $("#frm_m_a_asignatura").trigger('reset');
        $("#Asig_Modal_Asig").modal('hide');
        listaplandeestudios();
        
        });
    e.preventDefault();
});

});
function listaplandeestudios(){
    $.ajax({
        url: "../webhook/lista-asignaturas-plan.php",
        type:'POST',
        data : {id_plan:$("#idPlanAsig").val()},
        success: function (response){
            let ASIGNATURAS =JSON.parse(response);
            console.log(ASIGNATURAS);
            let template="";
            cont=0;
            ASIGNATURAS.forEach(asignatura=>{
                if(asignatura.estatus<2){
                template += `<tr>
                                <td data-label="CLAVE">${asignatura.codigo}</td>
                                <td data-label="NOMBRE ASIGNATURA">${asignatura.nombre}</td>
                                <td data-la data-label="SEMESTRE">${asignatura.semestre}</td>
                                <td data-label="CRÉDITOS">${asignatura.creditos}</td>
                                <td data-label="CARACTER">${asignatura.caracter}</td>
                                <td data-label="ESTATUS">
                                    <li>${asignatura.estatus}</li>
                                </td>
                                <td data-label="GRUPOS"><li>1001</li>
                                    <li>1002</li>
                                    <li>1003</li>
                                    <li>1051</li>
                                </td>
                                <td class="text-center"> <button type="button" class="btn btn-primary btn-sm col-5 mx-auto" data-bs-toggle="modal"  data-bs-target="#Edit_Modal_P"><i class='bx bxs-message-square-add'></i></button></td>
                                <td data-label="ACCIONES" class="text-center" colspan="2">
                                    <button type="button" class="btn btn-success btn-sm col-5 mx-auto" onclick="editarAsignatura(${asignatura.id_asignatura},'${asignatura.codigo}','${asignatura.nombre}',${asignatura.semestre},${asignatura.creditos},'${asignatura.caracter}');"><i class='bx bxs-pencil'></i></button>
                                    <button type="button" class="btn btn-danger btn-sm col-5" onclick="bajaAsignatura(${asignatura.id_asignatura});"><i class='bx bx-trash'></i></button>
                                </td>
                            </tr>`;    
                }
            });
            $("#tbl-lista-asignatura").html(template);
            
        }
    });
}

//funcion para editar asignatura
function editarAsignatura(idAsignatura,clave,nombre,semestre,creditos,caracter){
   $('#Edit_Modal_P').modal('show');
   //Todas las variables que se pueden editar en el modal
   $("#idAsignatura_edit").val(idAsignatura);
   $("#clave_asignatura_edit").val(clave);
   $("#nom_asignatura_edit").val(nombre);
   $("#semestre_edit").val(semestre);
   $("#creditos_edit").val(creditos);
   $("#caracter_edit").val(caracter);
   //document.getElementById("caracter_edit").value = 2;
}

function actualizarasignatura(){
    $("#frm_modal_edit_asignatura").on("submit", function(e){
    //var f = $(this);
    var formData = new FormData(document.getElementById("frm_modal_edit_asignatura"));
    //formData.append("dato", "valor");
    formData.append("idAsignatura", $("#idAsignatura_edit").val());
    formData.append("codigo", $("#clave_asignatura_edit").val());
    formData.append("nombre", $("#nom_asignatura_edit").val());
    formData.append("semestre", $("#semestre_edit").val());
    formData.append("creditos", $("#creditos_edit").val());
    formData.append("caracter", $("#caracter_edit").val());
    formData.append("estatus", "1");
    $.ajax({
        url: "../webhook/modifica_asignatura.php",
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
        $("#frm_modal_edit_asignatura").trigger('reset');
        $("#Edit_Modal_P").modal('hide');
        listaplandeestudios();
        
        });
    e.preventDefault();
});
}


//Funcion quer sirve para enviar datos para agregar asignatura


/*
function listaplandeestudios(){
    $.ajax({
        url: "../webhook/lista_planestudios.php",
        type:'POST',
        data : {id_plan:$("#idPlanAsig").val(},
        success: function (response){
            let PLANESESTUDIO =JSON.parse(response);
            console.log(PLANESESTUDIO);
        }
    });
}
*/