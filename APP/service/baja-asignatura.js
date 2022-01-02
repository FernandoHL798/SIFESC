$(document).ready(function(){
    $("#frm_baja_asignatura_plan_e").on("submit", function(e){
    var formData = new FormData(document.getElementById("frm_baja_asignatura_plan_e"));
    console.log();
    formData.append("idAsignatura", $("#idAsignatura_baja").val());
    formData.append("estatus", "2");
    $.ajax({
        url: "../webhook/elimina_asignatura.php",
        type: 'POST',
        data: formData,
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false
    })
        .done(function(res){
        listaplandeestudios();
        console.log(res);
        $("#frm_baja_asignatura_plan_e").trigger('reset');
        $("#Modal_baja_Asig").modal('hide');
        });
        
    e.preventDefault();
    bajaAsignatura();
});
});

function bajaAsignatura(idAsignatura,nombre){
    let nombreasig=nombre;
   //$('#Modal_baja_Asig').modal('show');
   //Todas las variables que se pueden editar en el modal
   $("#idAsignatura_baja").val(idAsignatura);
   $('#Modal_baja_Asig').modal('show');
   console.log(nombreasig);
   $("#nombasigbaja").html(nombreasig);
}
