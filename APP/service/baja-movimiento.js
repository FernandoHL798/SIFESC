$(document).ready(function(){
    $("#frm_baja_asignatura_inscrip").on("submit", function(e){
    var formData = new FormData(document.getElementById("frm_baja_asignatura_inscrip"));
    formData.append("idInscripcion", "1");
    formData.append("idAsignacion", "1");
    $.ajax({
        url: "../webhook/modifica_movimiento.php",
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
        $("#frm_baja_asignatura_inscrip").trigger('reset');
        $("#Modal-baja-asignacion").modal('hide');
        });
        
    e.preventDefault();
});
});



