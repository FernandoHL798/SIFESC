$(document).ready(function(){
    listaplantelesdep();
    listaDepartamentos();
    tblDeptoEstatus();
    var myInput = document.getElementById("clave_depto_ag2");
    var length = document.getElementById("length");
    var d;
    
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
        data : {id_plantel:$("#idPlantel").val()},                           
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
                                <button type="submit" title="Editar departamento" class="btn btn-success" onclick="editarDepart('${departamento.id_departamento}','${departamento.nombre}');"><i class='bx bxs-pencil'></i></button>
                                <button type="submit" title="Elimina departamento" class="btn btn-danger" onclick="eliminaDepto('${departamento.id_departamento}','${departamento.nombre}');" ><i class='bx bx-trash'></i></button>
                                </td>
                            </tr>`;    
            });
            $("#tbl-departamentos").html(template);
        } 
    }); 
}
//ELIMINA DEPARTAMENTO -------------------------------------------------------------------
function eliminaDepto(id_departamento, nombre){
    $("#Modal_baja_depto").modal('show');
    $("#idDepartamento").val(id_departamento);
    $("#nombre_depto").val(nombre);
    $("#nombre_depto_el").html($("#nombre_depto").val());
    console.log(nombre);
   $("#frm_baja_deptos").on("submit", function(e){

    var f = $(this);
    var formData = new FormData(document.getElementById("frm_baja_deptos"));
            formData.append("id_departamento", $("#clave_depto").val());
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
            window.location.reload();
        $("#frm_baja_deptos").trigger('reset');
        $("#Modal_baja_depto").modal('hide');
        });
    e.preventDefault();
});   

}


// EDITA DEPARTAMENTO -------------------------------------------------------------------
function editarDepart(id_departamento, nombre){
   $('#depto_edit_Modal2').modal('show');
   //Todas las variables que se pueden editar en el modal
   $("#clave_depto_edit").val(id_departamento);
   $("#clave_edit2").val(id_departamento);
   $("#nombre_depto_edit").val(nombre);
   $("#nombre_edit2").val(nombre);
    $("#frm_m_edit_departamento").on("submit", function(e){
    //var f = $(this);
    var formData = new FormData(document.getElementById("frm_m_edit_departamento"));
    formData.append("dato", "valor");
    formData.append("id_plantel", $("#idPlantel").val());
    formData.append("estatus", "1");
    formData.append("id_depto", id_departamento);
    $.ajax({
        url: "../webhook/modifica_departamento.php",
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
        $("#frm_m_edit_departamento").trigger('reset');
        $("#depto_edit_Modal2").modal('hide');
        listaDepartamentos();
        window.location.reload();        
        });
    e.preventDefault();
});
}
//Condicion de que si no se ah modificado no dejara guardar (modal edit)----------------------
function verificar(){

let clave1=$('#clave_edit2').val();
let clave2=$('#clave_depto_edit').val();
let nombre1=$('#nombre_edit2').val();
let nombre2=$('#nombre_depto_edit').val();

    if(clave1==clave2 && nombre1==nombre2){
                
                $("#BtnEditDepto").prop("disabled", true);
            }else{
                if(clave2=='' || nombre2==''){
                
                $("#BtnEditDepto").prop("disabled", true);
            }else{
                $("#BtnEditDepto").prop("disabled", false);
            }
            }                  
}


//AGREGA DEPARTAMENTO -----------------------------------------------------

$("#frm_m_a_departamento").on("submit", function(e){
    var f = $(this);
    var formData = new FormData(document.getElementById("frm_m_a_departamento"));
    formData.append("dato", "valor");
    formData.append("id_plantel", $("#idPlantel").val());
    $.ajax({
        url: "../webhook/lista-existe-departamento.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function(res){
        console.log(res);
        if (res!=true) {  
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
            formData.append("estatus", "1");
            $.ajax({
                url: "../webhook/modifica-estatus-departamento.php",
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

        // $('#Modal-confirmacion-ag-depto').modal('show');
        // $("#frm-conf-ag-depto").on("submit", function(e){
            });
        }
        else{
            listaDepartamentos(); 
        $("#frm_m_a_departamento").trigger('reset');
        $("#Add_depto_Modal").modal('hide');
        alert("El registro se hizo con exito");
        window.location.reload();
        }});
}else{
    $("#existe").html("¡AVISO! El departamento ya existe");
    $("#frm_m_a_departamento").trigger('reset');
}
});
    e.preventDefault();
});

$('input[name=clave_depto_ag2]').bind('keypress', function(event) {
var regex = new RegExp("^[A-Z 0-9 À-ÿ]+$");
var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
if (!regex.test(key)) {
event.preventDefault();
return false;
}
});
$('input[name=clave_depto_edit]').bind('keypress', function(event) {
var regex = new RegExp("^[A-Z 0-9 À-ÿ]+$");
var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
if (!regex.test(key)) {
event.preventDefault();
return false;
}
});

//Condicion para que no guarde campos vacios (add depto)--------------------------------
function validar(){
    
let cl2=$('#clave_depto_ag2').val();
let nom2=$('#nombre_depto_ag2').val();

    if(cl2=='' || nom2==''){
                
                $("#BtnGuardarag").prop("disabled", true);
            }else{
                $("#BtnGuardarag").prop("disabled", false); 
            }                  
}

// Condicion para estatus ------------------------------------------------------
function tblDeptoEstatus(DEPARTAMENTOS){
    
$.ajax({
        url: "../webhook/lista_departamento.php",
        type: 'POST',
        data : {id_plantel:$("#idPlantel").val()},
        success: function (response) {
            //Convertimos el string a JSON
            let DEPARTAMENTOS = JSON.parse(response);  
            let tblestausdep="";
            let cont=0;
            DEPARTAMENTOS.forEach(departamento=>{
                console.log(departamento.estatus);
                if(departamento.estatus==1){
                tblestausdep += `
                        <tr class="text-center">
                            <td id="clave_depto" data-label="Clave">${departamento.id_departamento}</td>
                            <td id="nombre_depto" data-label="Nombre">${departamento.nombre}</td>
                            <td data-label="Acciones">
                                <button type="submit" title="Editar departamento" class="btn btn-success" onclick="editarDepart('${departamento.id_departamento}','${departamento.nombre}');"><i class='bx bxs-pencil'></i></button>
                                <button type="submit" title="Elimina departamento" class="btn btn-danger" onclick="eliminaDepto('${departamento.id_departamento}','${departamento.nombre}');" ><i class='bx bx-trash'></i></button>
                               </td>
                            </tr>
                        `;   
                    }
            });
            $("#tbl-departamentos2").html(tblestausdep);
            }
        });      
}

//Condicion para campos vacios ------------------------------------------------------------------


//Condicion de que sean 15 caracteres los 1eros 4 numeros (los 1eros dos numeros que sea del area) y los demas letras 
  

        

           
                
            




