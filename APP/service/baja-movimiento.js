$(document).ready(function(){
    $("#frm_baja_asignatura_inscrip").on("submit", function(e){
        var formData = new FormData(document.getElementById("frm_baja_asignatura_inscrip"));
    formData.append("idInscripcion", "1");
    formData.append("idAsignacion", $("#idAsignacion").val());
    formData.append("estatus", "2");
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
        $("#Modal_baja").modal('hide');
        });
        
    e.preventDefault();
});
});


//esta es una funcion para eliminar el movimiento
function bajaMovimiento(idAsignacion){
    //idAsignacion es el valor que se va a mandar a llamar en cada uno de los datos a enviar.
    $("#idAsignacion").val(idAsignacion);
    $('#Modal_baja').modal('show');
}