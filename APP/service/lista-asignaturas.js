$(document).ready(function(){
    listaplandeestudios();
    actualizarasignatura();
    listaDatosPlan();
    $("#frm_m_a_asignatura").on("submit", function(e){
        var f = $(this);
        estatus=0;
        var formData= new FormData(document.getElementById("frm_m_a_asignatura"));
        //formData.append("dato", "valor");
        formData.append("idPlan", $("#idPlanAsig").val());
        formData.append("clave_asignatura", $("#clave_asignatura_add").val());
        formData.append("nom_asignatura", $("#nom_asignatura_add").val());
        formData.append("semestre", $("#semestre_add").val());
        formData.append("creditos", $("#creditos_add").val());
        formData.append("caracter", $("#caracter_add").val());
        $.ajax({
        url: "../webhook/lista-asignaturas-plan-consulta.php",
        type:'POST',
        data : {
            id_plan:$("#idPlanAsig").val(),
            clave_asignatura:$("#clave_asignatura_add").val()
        }})
        .done(function(res){
        console.log(res);
        if(res==false|| res=='[{"estatus":"2"}]'){
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
                if(res!=1){
                    formData.append("estatus", "1");
                    $.ajax({
                        url: "../webhook/modifica-estatus-asignatura.php",
                        type: 'POST',
                        data: formData,
                        dataType: "html",
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false
                    })
                        .done(function(res){
                        listaplandeestudios();
                        console.log(res);
                        $("#frm_m_a_asignatura").trigger('reset');
                        $("#Asig_Modal_Asig").modal('hide');
                        $("#Modal-confirmacion-ag-asig").modal('show');
            });
        }
        else{
            listaplandeestudios();
            $("#frm_m_a_asignatura").trigger('reset');
            $("#Asig_Modal_Asig").modal('hide');
            $("#Modal-confirmacion-ag-asig").modal('show');    
        }});

            }else{
                $("#existe_asig").html("¡AVISO! El departamento ya existe");
                $("#frm_m_a_asignatura").trigger('reset');
            }
    })
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
                                <td class="text-center"><a href="./ag_grupos.php"><button type="button" class="btn btn-primary btn-sm col-5 mx-auto"><i class='bx bxs-message-square-add'></i></button></td>
                                <td data-label="ACCIONES" class="text-center" colspan="2">
                                    <button type="button" class="btn btn-success btn-sm col-5 mx-auto" onclick="editarAsignatura(${asignatura.id_asignatura},'${asignatura.codigo}','${asignatura.nombre}',${asignatura.semestre},${asignatura.creditos},'${asignatura.caracter}');"><i class='bx bxs-pencil'></i></button>
                                    <button type="button" class="btn btn-danger btn-sm col-5" onclick="bajaAsignatura(${asignatura.id_asignatura});"><i class='bx bx-trash'></i></button>
                                </td>
                            </tr>`;    
                }
            });
            $("#tbl-lista-asignatura").html(template);
            $("#idPlanAsig_ag_asig").html($("#idPlanAsig").val());
        }
    });
}

function listaDatosPlan(){
    $.ajax({
        url: "../webhook/lista_datos_plan.php",
        type:'POST',
        data : {id_plan:$("#idPlanAsig").val()},
        success: function (response){
            let PLANESESTUDIO =JSON.parse(response);
            PLANESESTUDIO.forEach(planes=>{
                $("#nombre_plan").html(PLANESESTUDIO[0].nombre_plan);
                $("#duracion").html(PLANESESTUDIO[0].semestres+" Semestres");
                $("#cr_obl").html(PLANESESTUDIO[0].creditos_obligatorios);
                $("#cr_opt").html(PLANESESTUDIO[0].creditos_optativos);
                $("#cr_total").html(PLANESESTUDIO[0].creditos_totales);
            });
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

//Fucion que nos permite lanzar modal y deshabilitar los inputs
/*function verificavacio(){
    let clave= $("#clave_asignatura").val();
    //let clave2= $("#clave_asignatura_2").val();
    if(clave==""){
        $("#btnverifica").prop("disabled", true );
        $("#btnagregarasig").prop("disabled", true );
    }
    $("#btnverifica").prop("disabled", false );
}*/

/*function exiteasignaturaenplan(){
    $.ajax({
        url: "../webhook/lista-asignaturas-plan-consulta.php",
        type:'POST',
        data : {
            id_plan:$("#idPlanAsig").val(),
            clave_asignatura:$("#clave_asignatura").val()
        }})
    .done(function(res){
        console.log(res);
        if(res==false){
            return 1;
        }else{
            return 11;
        }
    })
}*/

/*function verificarexiste(){
    let clave= $("#clave_asignatura").val();
    if(clave==''){
        $("#btnagregarasig").prop("disabled", true );    
    }
    $("#btnagregarasig").prop("disabled", false );
    var control= exiteasignaturaenplan();
    console.log(control);
    if(control=='1'){
        alert("Funka");
    }
    event.preventDefault();
}*/

function modfunciones(){
    $('#Asig_Modal_Asig').modal('show');
    /*$("#btnverifica").prop("disabled", true );
    $("#btnagregarasig").prop("disabled", true );
    $("#nom_asignatura").prop("disabled", true );
    $("#semestre").prop("disabled", true );
    $("#creditos").prop("disabled", true );
    $("#caracter").prop("disabled", true );*/
}