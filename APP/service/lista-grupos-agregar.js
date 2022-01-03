$(document).ready(function(){
	listaGruposAsignatura();
	datosPlandeestudios();


	let idPlan=$("#idPlanAsig").val();
	$("#back_ag_grupos").prop("href", "./ag_asig.php?idPlan="+idPlan);


	$("#frm_baja_grupo").on("submit", function(e){
    var formData = new FormData(document.getElementById("frm_baja_grupo"));
    console.log();
    formData.append("id_grupo", $("#idgrupo").val());
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
        	datosPlandeestudios();
        	listaGruposAsignatura();
        	console.log(res);
        	$("#frm_baja_grupo").trigger('reset');
        	$("#Modal_baja_grupo").modal('hide');
        });
        
    e.preventDefault();
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




function listaGruposAsignatura(){
    $.ajax({
        url: "../webhook/lista_grupos_asignatura_codigo.php",
        type:'POST',
        data : {
        	idAsignatura:$("#idPlanAsig").val(),
        	codigo:$("#clave_asig").val()
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
            	if(grupo.estatus==1){
            		cont++;
            	console.log(cont);
            	$("#nombre_Asig_gru").html(grupo.nombre);
            	$("#clave_Asig_gru").html($("#clave_asig").val());
            	$("#semestre_Asig_gru").html(grupo.semestre);
            	$("#cr_Asig_gru").html(grupo.creditos);
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
                }else if(grupo.turno=='2'){
                	tipotx="Extraordinario";
                }
                $("#caracter_Asig_gru").html(caractertx);

                template += `<tr>
                                <td>${cont}</td>
                                <td>${grupo.nombre_grupo}</td>
                                <td>${turnotx}</td>
                                <td>${tipotx}</td>
                                <td data-label="Acciones" class="text-center">
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
$('#agrega_grupo').modal('show');
$("#btnGrupo_add").prop("disabled", true );
}