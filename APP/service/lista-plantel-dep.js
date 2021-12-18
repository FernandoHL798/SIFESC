$(document).ready(function(){
    listaplantelesdep();
    listaDepartamentos();
   /*agregaDepto();*/
   /*editaDepto();*/
   /*function bajaDepto();*/
/*function bajaDepto();*/
});
/* LISTA PLANTELES -------------------------*/
function listaplantelesdep(){
    $.ajax({
        url: "../webhook/lista_plantel.php",
        type:'POST',
        data : {},
        success: function (response){
            console.log(response);
            let PLANTELDEP =JSON.parse(response);
            console.log(PLANTELDEP);
            let template="";
            PLANTELDEP.forEach(planteldep=>{
                template += `<tr class="text-center">
                        <td data-label="Nombre Plantel">${planteldep.nombre}</td>
                        <td data-label="Acciones">
                            <a href="./ag-departamento.php"><button type="button" title="Ver Departamentos" class="btn btn-info"><i class='bx bx-show'></i></button>
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
            console.log(response);
            let DEPARTAMENTOS = JSON.parse(response);
            console.log(DEPARTAMENTOS);
            let template="";
            DEPARTAMENTOS.forEach(departamento=> {
                template += `<tr class="text-center">
                            <td id="clave_depto" data-label="Clave">${departamento.id_departamento}</td>
                            <td id="nombre_depto" data-label="Nombre">${departamento.nombre}</td>
                            <td data-label="Acciones">
                                <button type="button" title="Editar departamento" class="btn btn-success" data-bs-toggle="modal"  data-bs-target="#depto_edit_Modal"><i class='bx bxs-pencil'></i></button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" onclick="eliminaDepto();"><i class='bx bx-trash'></i></button>
                                </td>
                            </tr>`;    
            });
            $("#tbl-departamentos").html(template);
        } 
    });
}

/*ELIMINA DEPARTAMENTO ------------------------- */
/*function eliminaDepto(){
    $("#frm_baja_deptos").on("submit", function(e){
    alert("Entrando al summmmmmbiiiit")
     var f = $(this);
    var formData = new FormData(document.getElementById("frm_baja_deptos"));
    formData.append("dato", "valor");
    $.ajax({
        url: "../webhook/elimina_departamento.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
        .done(function(res){
        console.log(res);
        $("#frm_baja_deptos").trigger('reset');
        $("#Modal_baja_depto").modal('hide');
        listaDepartamentos();
        });
        
    e.preventDefault();
}); 
function eliminaDepto(idDepto){
    
    $('#Modal_baja_depto').modal('show');
    $("#idDepartamento").val(idDepto);
}
*/


//Modifica estatus ----------------------------------------------------------------
/*function bajaDepto(){
    $("#frm_baja_deptos").on("submit", function(e){
        alert("Entrando a cambiar estatus")
        var formData = new FormData(document.getElementById("frm_baja_deptos"));
    formData.append("clave_depto", $("#clave_depto").val());
    formData.append("nombre_depto", $("#nombre_depto").val());
    formData.append("estatus", "2");
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
        $("#frm_baja_deptos").trigger('reset');
        $("#modal-BAJA-depto").modal('hide');
        });
        
    e.preventDefault();
});
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


//Agrega departamento ---------------------------------------------------------
/*function agregaDepto(){
$("#frm_m_a_departamento").on("submit", function(e){
    alert("Entrando al sumbit gg")
     var f = $(this);
    var formData = new FormData(document.getElementById("frm_m_a_departamento"));
    formData.append("dato", "valor");
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
        $("#frm_m_a_departamento").trigger('reset');
        $("#Add_depto_Modal").modal('hide');
        listaDepartamentos();
        });
        
    e.preventDefault();
}); 
}
*/