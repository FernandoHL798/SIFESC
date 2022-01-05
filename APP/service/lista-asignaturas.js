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
        formData.append("caracter", $("#caracter_add").val());
        if ($("#caracter_add").val()=='3'){
            formData.append("semestre", $("#semestre_adds").val());
        }else if($("#caracter_add").val()!='3'){
            formData.append("semestre", $("#semestre_add").val());
        }
        formData.append("creditos", $("#creditos_add").val());
        console.log(formData);
        $.ajax({
            url: "../webhook/lista-asignaturas-plan-consulta.php",
            type:'POST',
            data : {
                id_plan:$("#idPlanAsig").val(),
                clave_asignatura:$("#clave_asignatura_add").val()
            }})
            .done(function(res){
            console.log(res);
            if(res==false){
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
                        $("#do_exist").prop("disabled", false );
                        $("#do_exist").fadeTo(2000, 500).slideUp(500, function(){
                            $("#do_exist").slideUp(500);
                        });
                        $("#do_exist").prop("disabled", true );
                        $("#existe_asig").html("¡AVISO! La asignatura ya existe");
                        $("#frm_m_a_asignatura").trigger('reset');
                    }else{
                        listaplandeestudios();
                        $("#frm_m_a_asignatura").trigger('reset');
                        $("#Asig_Modal_Asig").modal('hide');
                        $("#Modal-confirmacion-ag-asig").modal('show');    
                    }
                });
            }else if(res=='[{"estatus":"2"}]'){
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
                    alert("La materia ya existe! se dara de alta");
                    $("#Modal-confirmacion-ag-asig").modal('show');
                });
            }else if(res=='[{"estatus":"1"}]'){
                $("#do_exist").fadeTo(2000, 500).slideUp(500, function(){
                            $("#do_exist").slideUp(500);
                        });
                $("#existe_asig").html("¡AVISO! La asignatura ya existe");
                $("#frm_m_a_asignatura").trigger('reset');
            }
        })
        e.preventDefault();
    });


//Condicion para NOMBRE
$('input[name=nom_asignatura_add]').bind('keypress', function(event) {
var regex = new RegExp("^[A-ZÀ-ÿ0-9 ]+$");
var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
if (!regex.test(key)) {
event.preventDefault();
return false;
}
});

$('input[name=nom_asignatura_edit]').bind('keypress', function(event) {
var regex = new RegExp("^[A-ZÀ-ÿ0-9 ]+$");
var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
if (!regex.test(key)) {
event.preventDefault();
return false;
}
});

//Condicion para CLAVE
$('input[name=clave_asignatura_add]').bind('keypress', function(event) {
var regex = new RegExp("^[0-9_]+$");
var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
if (!regex.test(key)) {
event.preventDefault();
return false;
}
});

$('input[name=clave_asignatura_edit]').bind('keypress', function(event) {
var regex = new RegExp("^[0-9_]+$");
var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
if (!regex.test(key)) {
event.preventDefault();
return false;
}
});


//Condicion para CREDITOS
$('input[name=creditos_add]').bind('keypress', function(event) {
var regex = new RegExp("^[1-9_]+$");
var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
if (!regex.test(key)) {
event.preventDefault();
return false;
}
});

$('input[name=creditos_edit]').bind('keypress', function(event) {
var regex = new RegExp("^[1-9_]+$");
var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
if (!regex.test(key)) {
event.preventDefault();
return false;
}
});

});


function listaplandeestudios(){
    var idpasig= $("#idPlanAsig").val();
    $.ajax({
        url: "../webhook/lista-asignaturas-plan.php",
        type:'POST',
        data : {id_plan:$("#idPlanAsig").val()},
        success: function (response){
            let ASIGNATURAS =JSON.parse(response);
            console.log(ASIGNATURAS);
            let template="";
            let caractertxt;
            let estatustxt;
            cont=0;
            ASIGNATURAS.forEach(asignatura=>{
                if(asignatura.estatus<2){
                    if (asignatura.caracter=='1'){
                        caractertxt="Obligatoria";
                    }else if (asignatura.caracter=='2'){
                        caractertxt="Optativa requerida";
                    }else if (asignatura.caracter=='3'){
                        caractertxt="Optativa de elección";
                    }
                    if (asignatura.estatus='1'){
                        estatustxt="Activa";
                    }else if (asignatura.estatus='2'){
                        estatustxt="Inactiva";
                    }
                template += `<tr>
                                <td data-label="CLAVE">${asignatura.codigo}</td>
                                <td data-label="NOMBRE ASIGNATURA">${asignatura.nombre}</td>
                                <td data-la data-label="SEMESTRE">${asignatura.semestre}</td>
                                <td data-label="CRÉDITOS">${asignatura.creditos}</td>
                                <td data-label="CARACTER">${caractertxt}</td>
                                <td data-label="ESTATUS">${estatustxt}</td>
                                <td class="text-center"><a href="./ag_grupos.php?idPlan=${idpasig}&codigo_asi=${asignatura.codigo}&id_asignaturafk=${asignatura.id_asignatura}"><button type="button" class="btn btn-primary btn-sm col-5 mx-auto"><i class='bx bxs-message-square-add'></i></button></td>
                                <td data-label="ACCIONES" class="text-center" colspan="2">
                                    <button type="button" class="btn btn-success btn-sm col-5 mx-auto" onclick="editarAsignatura(${asignatura.id_asignatura},'${asignatura.codigo}','${asignatura.nombre}',${asignatura.semestre},${asignatura.creditos},'${asignatura.caracter}');"><i class='bx bxs-pencil'></i></button>
                                    <button type="button" class="btn btn-danger btn-sm col-5" onclick="bajaAsignatura(${asignatura.id_asignatura},'${asignatura.nombre}');"><i class='bx bx-trash'></i></button>
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
    var indiceDatos= caracter;
    console.log(caracter);
    console.log(indiceDatos);
    $('#Edit_Modal_P').modal('show');
    activarSemestreSelectAg();
    //Todas las variables que se pueden editar en el modal
    $("#idAsignatura_edit").val(idAsignatura);
    $("#clave_asignatura_edit").val(clave);
    $("#nom_asignatura_edit").val(nombre);
    $('#caracter_edit').val(caracter);
    $("#semestre_edit_s").val(semestre);
    $("#semestre_edit").val(semestre);
    if(caracter=='1'){
        $("#semestre_adds").prop("hidden", true );
        $("#semestre_add").prop("hidden", false );
        $("#semestre_edit").prop("disabled", false );
        
        
    }else if(caracter=='2'){
        $("#semestre_add").prop("hidden", false );
        $("#semestre_edit").prop("disabled", true );
        $("#semestre_adds").prop("hidden", true );
        
    }else if(caracter=='3'){
        $("#semestre_add").prop("hidden", true );
        $("#semestre_edit").prop("disabled", false );
        $("#semestre_adds").prop("hidden", false );
        
    }
   $("#creditos_edit").val(creditos);
}

function actualizarasignatura(){
    verificavacioedit();
    $("#frm_modal_edit_asignatura").on("submit", function(e){
    //var f = $(this);
    var formData = new FormData(document.getElementById("frm_modal_edit_asignatura"));
    //formData.append("dato", "valor");
    verificavacioedit();
    formData.append("idAsignatura", $("#idAsignatura_edit").val());
    formData.append("codigo", $("#clave_asignatura_edit").val());
    formData.append("nombre", $("#nom_asignatura_edit").val());
    formData.append("caracter", $("#caracter_edit").val());
    if($("#caracter_edit").val()=='3'){
        formData.append("semestre", $("#semestre_edit_s").val());
    }else if($("#caracter_edit").val()!='3'){
        formData.append("semestre", $("#semestre_edit").val());
    }
    formData.append("creditos", $("#creditos_edit").val());
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

function modfunciones(){
    $('#Asig_Modal_Asig').modal('show');
    $("#do_exist").hide();
    $("#btnagregarasig").prop("disabled", true );
    $("#nom_asignatura_add").prop("disabled", false );
    $("#caracter_add").prop("disabled", false );
    $("#semestre_add").prop("disabled", true );
    $("#creditos_add").prop("disabled", false );
}

function modprop(){
    $('#Asig_Modal_Asig').modal('show');
    $("#do_exist").hide();
    $("#btnverifica").prop("disabled", false );
    $("#btnagregarasig").prop("disabled", false );
    $("#nom_asignatura_add").prop("disabled", true );
    $("#semestre_add").prop("disabled", true );
    $("#creditos_add").prop("disabled", true );
    $("#caracter_add").prop("disabled", true );
}

function verificavacioag(){
    if(($("#clave_asignatura_add").val()!='')&&($("#nom_asignatura_add").val()!='')&&($("#semestre_add").val()!='')&&($("#creditos_add").val()!='')&&($("#caracter_add").val()!='')){
        console.log("estan llenos");
        $("#btnagregarasig").prop("disabled", false);    
    }else {
        console.log("no estan llenos");
        $("#btnagregarasig").prop("disabled", true);
    }
}

function verificavacioedit(){
    if(($("#idAsignatura_edit").val()!='')&&($("#clave_asignatura_edit").val()!='')&&($("#nom_asignatura_edit").val()!='')&&($("#creditos_edit").val()!='')&&($("#caracter_edit").val()!='')&&(($("#semestre_edit").val()!='')||($("#semestre_edit_s").val()!=''))){
        console.log("estan llenos");
        $("#btnasigedit").prop("disabled", false);    
    }else {
        console.log("no estan llenos");
        $("#btnasigedit").prop("disabled", true);
    }
}

function funcionesadd(){
    verificavacioag();
    activarSemestreSelectAg();
}

function activarSemestreSelectAg(){
    if(($("#caracter_add").val()=='1')||($("#caracter_add").val()=='2')||($("#caracter_add").val()=='3')){
        if(($("#caracter_add").val()=='1')){
            $("#semestre_add").prop("hidden", false );
            $("#semestre_add").prop("disabled", false );
            $("#semestre_adds").prop("hidden", true );
            $("#semestre_add").val('');
            $("#semestre_add").attr('min',1);
            $("#semestre_add").attr('max',9);
        }else if($("#caracter_add").val()=='2'){
            $("#semestre_add").val('20');
            $("#semestre_add").prop("hidden", false );
            $("#semestre_adds").prop("hidden", true );
            $("#semestre_add").prop("disabled", true );
        }else if(($("#caracter_add").val()=='3')){
            $("#semestre_add").prop("hidden", true );
            $("#semestre_adds").prop("hidden", false );
            $("#semestre_add").val('0');
            $("#semestre_add").prop("disabled", false );
            $("#semestre_edit").attr('min',0);
            $("#semestre_edit").attr('minlength',1);
            $("#semestre_edit").attr('maxlength',1);
        }
    }
}

function funcionesEdit(){
    verificavacioedit();
    activarSemestreSelectEdit();
}

function activarSemestreSelectEdit(){
    if(($("#caracter_edit").val()=='1')||($("#caracter_edit").val()=='2')||($("#caracter_edit").val()=='3')){
        if(($("#caracter_edit").val()=='1')){
            $("#semestre_edit").prop("hidden", false );
            $("#semestre_edit_s").prop("hidden", true );
            $("#semestre_edit").prop("disabled", false );
            $("#semestre_edit").val('');
            $("#semestre_edit").attr('min',1);
            $("#semestre_edit").attr('max',9);
            verificavacioedit();
        }else if($("#caracter_edit").val()=='2'){
            $("#semestre_edit").prop("hidden", false );
            $("#semestre_edit_s").prop("hidden", true );
            $("#semestre_edit").val('20');
            $("#semestre_edit").prop("disabled", true );
            verificavacioedit();
        }else if(($("#caracter_edit").val()=='3')){
            $("#semestre_edit").prop("hidden", true );
            $("#semestre_edit_s").prop("hidden", false );
            $("#semestre_edit").val('0');
            $("#semestre_edit").prop("disabled", false );
            $("#semestre_edit").attr('min',0);
            $("#semestre_edit").attr('minlength',1);
            $("#semestre_edit").attr('maxlength',1);
            verificavacioedit();
        }
    }
}