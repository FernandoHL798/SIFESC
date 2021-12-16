$(document).ready(function(){
    consultaVerificacionUsuario();
});
function consultaVerificacionUsuario(){
    $("#frm-olvide-contra").on("submit", function(e){
    var formData = new FormData(document.getElementById("frm-olvide-contra"));
    formData.append("correo", $("#verifica_correo").val());
    formData.append("fecha", $("#verifica_fecha").val());
    formData.append("pregunta", $("#floatingSelect").val());
    formData.append("respuesta", $("#verifica_resp").val());
    $.ajax({
        url: "./APP/webhook/pwd-recover.php",
        type: 'POST',
        data: formData,
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function(res){
        $("#frm-olvide-contra").trigger('reset');
        $("#validarDatos").modal('hide');
    });
        
    e.preventDefault();
    });
}

