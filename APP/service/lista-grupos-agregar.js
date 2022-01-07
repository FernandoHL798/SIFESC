$(document).ready(function(){
	listaGruposAsignatura();
    listaDatosGrupos();
	datosPlandeestudios();


	let idPlan=$("#idPlanAsig").val();
	$("#back_ag_grupos").prop("href", "./ag_asig.php?idPlan="+idPlan);


	$("#frm_baja_grupo").on("submit", function(e){
    var formData = new FormData(document.getElementById("frm_baja_grupo"));
    console.log();
    formData.append("id_grupo", $("#idgrupo").val());
    formData.append("estatus", "2");
    $.ajax({
        url: "../webhook/modifica-estatus-grupo.php",
        type: 'POST',
        data: formData,
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false
    })
        .done(function(res){
        	console.log(res);
        	datosPlandeestudios();
        	listaGruposAsignatura();
        	console.log(res);
        	$("#frm_baja_grupo").trigger('reset');
        	$("#Modal_baja_grupo").modal('hide');
        });
        
    e.preventDefault();
});



    $("#frm_m_a_grupo").on("submit", function(e){
    var formData = new FormData(document.getElementById("frm_m_a_grupo"));
    console.log();
    formData.append("idAsignatura", $("#idPlanAsig_add_gr").val());
    formData.append("id_asig_fk", $("#id_asignatura_add_gr").val());
    formData.append("nombre_grupo", $("#grupo_agrega").val());
    $.ajax({
        url: "../webhook/verifica_existe_grupo.php",
        type: 'POST',
        data: formData,
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false
    })
        .done(function(res){
            console.log(res);
            //let GRUPO =JSON.parse(res);
            if(res!=false){
                let GRUPO =JSON.parse(res);
                if(GRUPO[0].estatus=='2'){
                formData.append("id_grupo", GRUPO[0].id_grupo);
                formData.append("estatus", "1");
                $.ajax({
                    url: "../webhook/modifica-estatus-grupo.php",
                    type: 'POST',
                    data: formData,
                    dataType: "html",
                    cache: false,
                    contentType: false,
                    processData: false
                })
                .done(function(res){
                    console.log(res);
                    datosPlandeestudios();
                    listaGruposAsignatura();
                    alert("El grupo ya existe, se dara de alta");
                    $("#frm_m_a_grupo").trigger('reset');
                    $("#agrega_grupo").modal('hide');
                });
        
    e.preventDefault();

            }else if(GRUPO[0].estatus!='2'){
                alert("El grupo ya esta listado");
            }

        }else{
            formData.append("id_asig_fk", $("#id_asignatura_add_gr").val());
            //formData.append("codigo", $("#idasignaturagrupo_add").val());
            formData.append("nombre_grupo", $("#grupo_agrega").val());
            formData.append("tipo", $("#tipo_add").val());
            formData.append("turno", $("#turno_add").val());
            $.ajax({
                url: "../webhook/add_grupos.php",
                type: "post",
                dataType: "html",
                data: formData,
                cache: false,
                contentType: false,
                processData: false
            })
            .done(function(res){
                console.log(res);
                alert("Se Guardo con exito");
                listaGruposAsignatura();
                listaDatosGrupos();
                datosPlandeestudios();
                $("#frm_m_a_grupo").trigger('reset');
                $("#agrega_grupo").modal('hide');
                    /*if(res!=1){
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
                    }*/
                });
        }
            datosPlandeestudios();
            listaGruposAsignatura();
            $("#frm_m_a_grupo").trigger('reset');
            $("#agrega_grupo").modal('hide');
        });
        
    e.preventDefault();
});

$('input[name=clave_asignatura_edit]').bind('keypress', function(event) {
var regex = new RegExp("^[0-9A-Z_]+$");
var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
if (!regex.test(key)) {
event.preventDefault();
return false;
}
});


});




function datosPlandeestudios(){
	let idPlant=$("#idPlanAsig").val();
    $.ajax({
        url: "../webhook/lista_planestudios.php",
        type:'POST',
        data : {},
        success: function (response){
            let PLANESESTUDIO =JSON.parse(response);
            //console.log(PLANESESTUDIO);
            let template="";
            PLANESESTUDIO.forEach(planes=>{
                if(planes.id_plan==idPlant){
                	$("#nom_plan").html(planes.nombre_plan);
                	$("#clave_pln").html(idPlant);
                }
            });
        }
    });
}

function listaDatosGrupos(){
    $.ajax({
        url: "../webhook/consulta_datos_grupos.php",
        type:'POST',
        data : {
            idAsignatura:$("#idPlanAsig").val(),
            id_asig_fk:$("#id_asignatura").val()
        },
        success: function (response){
            let GRUPOS =JSON.parse(response);
            console.log(GRUPOS);
            GRUPOS.forEach(grupo=>{
                $("#nombre_Asig_gru").html(grupo.nombre);
                $("#clave_Asig_gru").html($("#clave_asig").val());
                $("#semestre_Asig_gru").html(grupo.semestre);
                $("#cr_Asig_gru").html(grupo.creditos);
                $("#idasignaturagrupo").val(grupo.id_asignatura);
            });
        }
    });
}



function listaGruposAsignatura(){
    $.ajax({
        url: "../webhook/lista_grupos_asignatura_codigo.php",
        type:'POST',
        data : {
        	idAsignatura:$("#idPlanAsig").val(),
        	codigo:$("#id_asignatura").val()
    	},
        success: function (response){
            let GRUPOS =JSON.parse(response);
            console.log(GRUPOS);
            let template="";
            let caractertx='';
            let turnotx='';
            let tipotx='';
            cont=0;
            GRUPOS.forEach(grupo=>{
            caractertx='';
            turnotx='';
            tipotx='';
            	if(grupo.estatus==1){
            		cont++;
            	console.log(cont);
            	$("#nombre_Asig_gru").html(grupo.nombre);
            	$("#clave_Asig_gru").html($("#clave_asig").val());
            	$("#semestre_Asig_gru").html(grupo.semestre);
            	$("#cr_Asig_gru").html(grupo.creditos);
                $("#idasignaturagrupo").val(grupo.id_asignatura);
            	if (grupo.caracter=='1'){
            		caractertx="Obligatoria";
                }else if (grupo.caracter=='2'){
                    caractertx="Optativa requerida";
                }else if (grupo.caracter=='3'){
                    caractertx="Optativa de elección";
                }
                if(grupo.turno=='1'){
                	turnotx="Matutino";
                }else if(grupo.turno=='2'){
                	turnotx="Vespertino";
                }else{
                	turnotx="Inactivo";
                }
                 if(grupo.tipo=='1'){
                	tipotx="Ordinario";
                }else if(grupo.tipo=='2'){
                	tipotx="Extraordinario";
                }
                $("#caracter_Asig_gru").html(caractertx);

                template += `<tr>
                                <td>${cont}</td>
                                <td>${grupo.nombre_grupo}</td>
                                <td>${turnotx}</td>
                                <td>${tipotx}</td>
                                <td data-label="Acciones" class="text-center">
                                <button type="button" class="btn btn-success btn-sm col-5 mx-auto" onclick="editarGrupo('${grupo.id_grupo}','${grupo.nombre_grupo}','${grupo.turno}','${grupo.tipo}');"><i class='bx bxs-pencil'></i></button>
                                <button type="button" title="Eliminar grupo" class="btn btn-danger" onclick="bajaGrupo('${grupo.nombre}','${grupo.estatus}','${grupo.nombre_grupo}','${grupo.id_grupo}');"><i class='bx bx-trash'></i></button>
                                 </td>
                             </tr>`;
            	}
            });
            $("#tbl-grupos").html(template);
            $("#idPlanAsig_ag_asig").html($("#idPlanAsig").val());
        }
    });
}

function bajaGrupo(nombre, estatus, grupo, idgrupo){
$('#Modal_baja_grupo').modal('show');
$("#baja_gupo_asig").html(grupo);
$("#idgrupo").val(idgrupo);
}

function altaGrupo(){
    let iasig=$("#idasignaturagrupo").val();
    $('#agrega_grupo').modal('show');
    $("#idasignaturagrupo_add").val(iasig);
    $("#turno_add").prop("disabled", true );
    $("#tipo_add").prop("disabled", true );
    $("#btnGrupo_add").prop("disabled", true );
}

function verificarVacioGrupo(){
    if ($("#grupo_agrega").val()==''){
        $("#turno_add").prop("disabled", true );
        $("#tipo_add").prop("disabled", true );
        $("#btnGrupo_add").prop("disabled", true );
    }else{
        $("#turno_add").prop("disabled", false );
        $("#tipo_add").prop("disabled", false );
    }
}



function activarBotonAgregar(){
    if(($("#grupo_agrega").val()=='')||($("#turno_add").val()=='')||($("#tipo_add").val()=='')){
        $("#btnGrupo_add").prop("disabled", true );
    }else{
        $("#btnGrupo_add").prop("disabled", false );
    }
}

function limpiar(){
    $("#frm_m_a_grupo").trigger('reset');
    $("#agrega_grupo").modal('hide');
}

function editarGrupo(idgrupo,nombre,turno,tipo){
    $('#edita_grupo').modal('show');
    $("#edita_grupo_mombre").html(nombre);
    $("#grupo_agrega_edit").val(nombre);
    $("#tipo_add_edit").val(tipo);
    $("#turno_add_edit").val(turno);

    $("#frm_m_e_grupo").on("submit", function(e){
    var formData = new FormData(document.getElementById("frm_m_e_grupo"));
    console.log();
    formData.append("id_grupo", idgrupo);
    formData.append("id_asignatura_fk", $("#id_asignatura_add_gr").val());
    formData.append("nombre", $("#grupo_agrega_edit").val());
    formData.append("tipo", $("#tipo_add_edit").val());
    formData.append("turno", $("#turno_add_edit").val());
    formData.append("estatus", "1");
    $.ajax({
        url: "../webhook/modifica_grupos.php",
        type: 'POST',
        data: formData,
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false
    })
        .done(function(res){
            console.log(res);
            console.log(res);
            $("#frm_m_e_grupo").trigger('reset');
            listaGruposAsignatura();
            listaDatosGrupos();
            datosPlandeestudios();
            $("#edita_grupo").modal('hide');
        });
        
    e.preventDefault();
});

}