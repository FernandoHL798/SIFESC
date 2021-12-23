$(document).ready(function(){
    listaplantelesdep();
    listaDepartamentos();
});
/* LISTA PLANTELES -------------------------*/
function listaplantelesdep(){
    $.ajax({
        url: "../webhook/lista_plantel.php",
        type:'POST',
        data : {id_plantel:$("#idPlantel").val()},
        success: function (response){
            let PLANTELDEP =JSON.parse(response);
            console.log(PLANTELDEP);
            let template="";
            PLANTELDEP.forEach(planteldep=>{
                template += `<tr class="text-center">
                        <td data-label="Clave">${planteldep.id_plantel}</td>
                        <td data-label="Nombre Plantel">${planteldep.nombre}</td>
                        <td data-label="Acciones">
                            <a href="./ag-departamento.php?idPlantel=${planteldep.id_plantel}"><button type="button" title="Ver Departamentos" class="btn btn-info"><i class='bx bx-show'></i></button>
                            </td>
                        </tr>`
            });
            $("#tbl-planteles-dep").html(template);
        }
    });
}
/* LISTA DEPARTAMENTOS -------------------------*/

function listaDepartamentos(){
$.ajax({
        url: "../webhook/lista_departamento.php",   
        type: 'POST',                               
        data : {},                           
        success: function (response) {              
            //Convertimos el string a JSON
            let DEPARTAMENTOS = JSON.parse(response);
            console.log(DEPARTAMENTOS);
            let template="";
            DEPARTAMENTOS.forEach(departamento=> {
                template += `<tr class="text-center">
                            <td id="clave_depto" data-label="Clave">${departamento.id_departamento}</td>
                            <td id="nombre_depto" data-label="Nombre">${departamento.nombre}</td>
                            <td data-label="Acciones">
                                <button type="button" title="Editar departamento" class="btn btn-success" data-bs-toggle="modal"  data-bs-target="#depto_edit_Modal"><i class='bx bxs-pencil'></i></button>
                                <button type="submit" class="btn btn-danger" data-bs-toggle="modal"  data-bs-target="#Modal_baja_depto"><i class='bx bx-trash'></i></button>
                                </td>
                            </tr>`;    
            });
            $("#tbl-departamentos").html(template);
        } 
    }); 
}
/*
function eliminaDepto(idDepto){
   
    $('#Modal_baja_depto').modal('show');
    $("#idDepartamento").val(idDepto);
}
*/





//EDITAR ---------------------------------------------------------------------
/*function editaDepto(){
    $("#frm_m_edit_departamento").on("submit", function(e){
        alert("Entrando a EDITAR")
        var formData = new FormData(document.getElementById("frm_m_edit_departamento"));
    formData.append("clave_depto", "1");
    formData.append("nombre_depto", $("#nombre_depto").val());
    formData.append("estatus", "1");
    $.ajax({
        url: "../webhook/modifica_departamento.php",
        type: 'POST',
        data: formData,
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false
    })
        .done(function(res){
            getListaMovimientos();
        console.log(res);
        $("#frm_m_edit_departamento").trigger('reset');
        $("#modal-edit-departamento").modal('hide');
        });
        
    e.preventDefault();
});
*/



//Opcion 2 -----------------------------------------------------
$("#frm_m_a_departamento").on("submit", function(e){
    var f = $(this);
    var formData = new FormData(document.getElementById("frm_m_a_departamento"));
    formData.append("id_departamento", "135");
    formData.append("nombre", "MECANICA DE ARRANCONES GG"); 
    formData.append("estatus", "1");
    $.ajax({
        url: "../webhook/add_departamento.php",
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
            
            $.ajax({
                url: "../webhook/modifica_departamento.php",
                type: 'POST',
                data: formData,
                dataType: "html",
                cache: false,
                contentType: false,
                processData: false
            })
            .done(function(res){
            listaDepartamentos();
            console.log(res);
            $("#frm_m_a_departamento").trigger('reset');
            $("#Add_depto_Modal").modal('hide');
            });
        
        }else{
            listaDepartamentos();
        $("#frm_m_a_departamento").trigger('reset');
        $("#Add_depto_Modal").modal('hide');
        }});
    e.preventDefault();
});

//Funcion Elimina! ----------------------------------------------------
$("#frm_baja_deptos").on("submit", function(e){
    var f = $(this);
    var formData = new FormData(document.getElementById("frm_baja_deptos"));
            formData.append("id_departamento", "306"); 
            formData.append("estatus", "2");
            $.ajax({
                url: "../webhook/elimina_departamento.php",
                type: 'POST',
                data: formData,
                dataType: "html",
                cache: false,
                contentType: false,
                processData: false
    })
        .done(function(res){
            listaDepartamentos();
            console.log(res);
        $("#frm_baja_deptos").trigger('reset');
        $("#Modal_baja_depto").modal('hide');
        });
    e.preventDefault();
});