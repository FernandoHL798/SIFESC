$(document).ready(function(){
listaAdminPeriodo();
listaFechasPeriodo();
tblDeptoEstatus();
    
});

    /* LISTA PERIODOS -------------------------*/
function listaAdminPeriodo(){
    $.ajax({
        url: "../webhook/lista_periodo.php",
        type:'POST',
        data : {},
        success: function (response){
            let ADMINPERIODO =JSON.parse(response);
            console.log(ADMINPERIODO);
            let template="";
            ADMINPERIODO.forEach(adminperiodo=>{
                template += `<tr class="text-center">
                        <td data-label="Periodo">${adminperiodo.periodo}.</td>
                        <td data-label="Fecha Inicio">${adminperiodo.fecha_inscripcion_inicio}</td>
                        <td data-label="Fecha Fin">${adminperiodo.fecha_inscripcion_fin}</td>
                        <td data-label="Act./Des.">
                            <label class="switch">
                              <input type="checkbox" checked>
                              <span class="slider round"></span>
                          </label>
                        </td>
                        <td data-label="Acciones">
                            <button type="submit" title="Elimina Período" class="btn btn-danger" onclick="eliminaPeriodo('${adminperiodo.id_periodo}','${adminperiodo.periodo}');"><i class='bx bx-trash'></i></button> 
                            <button type="button" title="Editar Período" class="btn btn-success" onclick="editarDepart('${adminperiodo.fecha_periodo_inicio}','${adminperiodo.fecha_periodo_fin}');"><i class='bx bxs-pencil'></i></button>
                            <a href="./periodos_informa.php?idPeriodo=${adminperiodo.id_periodo}"><button type="button" title="Ver acciones del período" class="btn btn-info"><i class='bx bx-show'></i></button>

                            </td>
                        </tr>`
            });
            $("#tbl-adminperiodo").html(template);
        }
    });
}
/* LISTA FECHAS PERIODO -------------------------*/

function listaFechasPeriodo(){
$.ajax({
        url: "../webhook/lista_periodo.php",   
        type: 'POST',                               
        data : {},                           
        success: function (response) {              
            //Convertimos el string a JSON
            let FECHASPER = JSON.parse(response);
            console.log(FECHASPER);
            let template="";
            FECHASPER.forEach(fechas=> {
                template += `<tr class=" text-center">
                                    <th style="width: 350px;">Fecha de inicio de la dosificación</th>
                                    <td style="width: 350px;"><input type="date" placeholder="Fecha de Nacimiento:" class="form-control" style="height: 60px" id="fechaFinPeriodo" name="fechaFinPeriodo"max=""> </td>
                                </tr>
                                <tr class=" text-center">
                                    <th style="width: 350px;">Fecha de fin de la dosificación</th>
                                    <td><input type="date" placeholder="Fecha de Nacimiento:" class="form-control" style="height: 60px" id="fechaFinPeriodo" name="fechaFinPeriodo"max=""> </td>
                                </tr>
                                <tr class=" text-center">
                                    <th style="width: 350px;">Fecha de inicio de inscripciones</th>
                                    <td><input type="date" placeholder="Fecha de Nacimiento:" class="form-control" style="height: 60px" id="fechaFinPeriodo" name="fechaFinPeriodo"max=""> </td>
                                </tr>
                                <tr class=" text-center">
                                    <th style="width: 350px;">Fecha de fin de inscripciones</th>
                                    <td><input type="date" placeholder="Fecha de Nacimiento:" class="form-control" style="height: 60px" id="fechaFinPeriodo" name="fechaFinPeriodo"max=""> </td>
                                </tr>
                                <tr class=" text-center">
                                    <th style="width: 350px;">Fecha de inicio de la dosificación (ALTAS Y BAJAS)</th>
                                    <td><input type="date" placeholder="Fecha de Nacimiento:" class="form-control" style="height: 60px" id="fechaFinPeriodo" name="fechaFinPeriodo"max=""> </td>
                                </tr>
                                <tr class=" text-center">
                                    <th style="width: 350px;">Fecha de fin de la dosificación (ALTAS Y BAJAS)</th>
                                    <td><input type="date" placeholder="Fecha de Nacimiento:" class="form-control" style="height: 60px" id="fechaFinPeriodo" name="fechaFinPeriodo"max=""> </td>
                                </tr>
                                <tr class=" text-center">
                                    <th style="width: 350px;">Fecha de inicio de inscripciones (ALTAS Y BAJAS)</th>
                                    <td><input type="date" placeholder="Fecha de Nacimiento:" class="form-control" style="height: 60px" id="fechaFinPeriodo" name="fechaFinPeriodo"max=""> </td>
                                </tr>
                                <tr class=" text-center">
                                    <th style="width: 350px;">Fecha de fin de inscripciones (ALTAS Y BAJAS)</th>
                                    <td><input type="date" placeholder="Fecha de Nacimiento:" class="form-control" style="height: 60px" id="fechaFinPeriodo" name="fechaFinPeriodo"max=""> </td>
                                </tr>`;    
            });
            $("#tbl-fechasPerido").html(template);
        } 
    }); 
}

/*ELIMINA DEPARTAMENTO -------------------------------------------------------------------*/  
function eliminaPeriodo(id_periodo, periodo){
    $("#elimina_periodo").modal('show');
    $("#idPeriodoM").val(id_periodo);
    $("#nombre_periodo").val(periodo);
    $("#nombre_periodo_el").html($("#nombre_periodo").val());
    console.log(periodo);
    //$("#contraUser").val(contrasenia);
    $("#frm_m_elimina_periodo").on("submit", function(e){
    var f = $(this);
    //aqui lleva el if de la contraseña 
    var formData = new FormData(document.getElementById("frm_m_elimina_periodo"));
            formData.append("id_periodo", $("#idPeriodo").val());
            formData.append("estatus", "2");
            $.ajax({
                url: "../webhook/elimina_periodo.php",
                type: 'POST',
                data: formData,
                dataType: "html",
                cache: false,
                contentType: false,
                processData: false
    })
        .done(function(res){
            listaAdminPeriodo();
            console.log(res);
           window.location.reload();
        $("#frm_m_elimina_periodo").trigger('reset');
        $("#elimina_periodo").modal('hide');
        });
    e.preventDefault();
    //else del if 
});   
}

// EDITA DEPARTAMENTO -------------------------------------------------------------------*/
function editarDepart(fecha_per_ini, fecha_per_fin, idpreiodo){
   $('#edit_periodo').modal('show');
   //Todas las variables que se pueden editar en el modal
   $("#fechaInicioPeriodo").val(fecha_per_ini);
   $("#fechaInicioPeriodo2").val(fecha_per_ini);
   $("#fechaFinPeriodo2").val(fecha_per_fin);
   $("#fechaFinPeriodo3").val(fecha_per_fin);
    $("#frm_m_edit_periodo").on("submit", function(e){
    //var f = $(this);
    var formData = new FormData(document.getElementById("frm_m_edit_periodo"));
    formData.append("dato", "valor");
    formData.append("fechaFinPeriodo2",$("#fechaFinPeriodo3").val());
    formData.append("estatus", "1");
    formData.append("idpreiodo", $("#id_Period").val());
    //formData.append("id_period", id_periodo);
    $.ajax({
        url: "../webhook/modifica_periodo.php",
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
        $("#frm_m_edit_periodo").trigger('reset');
        $("#edit_periodo").modal('hide');
        //listaAdminPeriodo();        
        });
    e.preventDefault();
});
}
//CONDICION QUE SI NO AH MODIFICADO NADA NO LO GUARDE
function verificarmod(){

let fechaini=$('#fechaInicioPeriodo2').val();
let fechaini2=$('#fechaInicioPeriodo').val();
let fechafin=$('#fechaFinPeriodo2').val();
let fechafin2=$('#fechaFinPeriodo3').val();

    if(fechaini==fechaini2 && fechafin==fechafin2){
                
                $("#BtnGuardarPer").prop("disabled", true);
            }else{
                if(fechaini2=='' || fechafin2==''){
                
                $("#BtnGuardarPer").prop("disabled", true);
            }else{
                $("#BtnGuardarPer").prop("disabled", false);
            }
            }                  
}

//AGREGA DEPARTAMENTO -----------------------------------------------------

$("#frm_m_a_periodo").on("submit", function(e){
    var f = $(this);
    let estatus=0;
    var formData = new FormData(document.getElementById("frm_m_a_periodo"));
    formData.append("dato", "valor");
    //formData.append("id_plantel", $("#idPlantel").val());
    $.ajax({
        url: "../webhook/lista_existe_periodo.php",
        type: 'POST',
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function(res){
        console.log(res);
        if (res=='[{"estatus":"2"}]') {  
            formData.append("estatus", "1");
            $.ajax({
                url: "../webhook/modifica_estatus_periodo.php",
                type: 'POST',
                data: formData,
                dataType: "html",
                cache: false,
                contentType: false,
                processData: false
            })
            .done(function(res){
                listaAdminPeriodo();
                console.log(res);
                $("#frm_m_a_periodo").trigger('reset');
                $("#Modal_Add_Periodo2").modal('hide');
                $("#Modal-confirmacion-ag-periodo").modal('show');  
            });
        }else if(res==false){
            $.ajax({
                url: "../webhook/add_periodo.php",
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
                    $("#existep").html("¡AVISO! El departamento ya existe");
                    $("#frm_m_a_periodo").trigger('reset');
                }else{
                    listaAdminPeriodo();
                    $("#frm_m_a_periodo").trigger('reset');
                    $("#Modal_Add_Periodo2").modal('hide');
                    $("#Modal-confirmacion-ag-periodo").modal('show');
                }
            });
        }else{
            $("#existep").html("¡AVISO! El departamento ya existe");
            $("#frm_m_a_periodo").trigger('reset');
        }
    });
    e.preventDefault();
});


//CONDICIONES ---------------------------------------------------------------------------------

// Condicion para estatus ------------------------------------------------------
function tblDeptoEstatus(ADMINPERIODO){
    
$.ajax({
        url: "../webhook/lista_periodo.php",
        type: 'POST',
        data : {id_periodo:$("#idPeriodo").val()},
        success: function (response) {
            //Convertimos el string a JSON
            let ADMINPERIODO = JSON.parse(response);  
            let tblestausdep="";
            let cont=0;
            ADMINPERIODO.forEach(adminperiodo=>{
                console.log(adminperiodo.estatus);
                if(adminperiodo.estatus==1){
                tblestausdep += `
                        <tr class="text-center">
                        <td data-label="Periodo">${adminperiodo.periodo}.</td>
                        <td data-label="Fecha Inicio Per">${adminperiodo.fecha_periodo_inicio}</td>
                        <td data-label="Fecha Fin Per">${adminperiodo.fecha_periodo_fin}</td>
                        <td data-label="Act./Des.">
                            <label class="switch">
                              <input type="checkbox" checked>
                              <span class="slider round"></span>
                          </label>
                        </td>
                        <td data-label="Acciones">
                            <button type="submit" title="Elimina Período" class="btn btn-danger" onclick="eliminaPeriodo('${adminperiodo.id_periodo}','${adminperiodo.periodo}');"><i class='bx bx-trash'></i></button> 
                            <button type="button" title="Editar Período" class="btn btn-success" onclick="editarDepart('${adminperiodo.fecha_periodo_inicio}','${adminperiodo.fecha_periodo_fin}');"><i class='bx bxs-pencil'></i></button>
                            <a href="./periodos_informa.php?idPeriodo=${adminperiodo.id_periodo}"><button type="button" title="Ver acciones del período" class="btn btn-info"><i class='bx bx-show'></i></button>

                            </td>
                        </tr>
                        `;   
                    }
            });
            $("#tbl-adminperiodo2").html(tblestausdep);
            }
        });      
}

//CONDICION PARA QUE NO GUARDE CAMPOS VACIOS (ADD PERIODO)
function validarperiodoag(){
    
let nombre=$('#periodoAg').val();
//let fechaini=$('#fechaIniPeriodo').val();
//let fechafin=$('#fechaFinPeriodo').val();

    if(nombre==''){
                
                $("#BtnPeriodoAg").prop("disabled", true);
            }else{
                $("#BtnPeriodoAg").prop("disabled", false); 
            }                  
}
//Condicion solo acepta numeros
$('input[name=periodoAg]').bind('keypress', function(event) {
var regex = new RegExp("^[-0-9_]*$");
var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
if (!regex.test(key)) {
event.preventDefault();
return false;
}
});