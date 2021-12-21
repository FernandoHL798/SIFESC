$(document).ready(function(){
    listaplandeestudios();
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
            ASIGNATURAS.forEach(asignatura=>{
                template += `<tr>
                                <td data-label="CLAVE">${asignatura.codigo}</td>
                                <td data-label="NOMBRE ASIGNATURA">${asignatura.nombre}</td>
                                <td data-la data-label="SEMESTRE">${asignatura.semestre}</td>
                                <td data-label="CRÉDITOS">${asignatura.creditos}</td>
                                <td data-label="CARACTER">${asignatura.caracter}</td>
                                <td data-label="GRUPOS">(??????), 1001, 1002, 1003</td>
                                <td data-label="ACCIONES" class="text-center" colspan="2">
                                    <button type="button" class="btn btn-success btn-sm col-5 mx-auto" data-bs-toggle="modal"  data-bs-target="#Edit_Modal_P"><i class='bx bxs-pencil'></i></button>
                                    <button type="button" class="btn btn-danger btn-sm col-5" data-bs-toggle="modal"  data-bs-target="#Modal_baja_Asig"><i class='bx bx-trash'></i></button>
                                </td>
                            </tr>`
            });
            $("#tbl-lista-asignatura").html(template);
            
        }
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