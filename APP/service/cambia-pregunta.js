$(document).ready(function(){
    $("#frm-pregunta-seguridad").on("submit", function(e){
    var formData = new FormData(document.getElementById("frm-pregunta-seguridad"));
    formData.append("idUsuario", $("#idUsuario").val());
    formData.append("pregunta", $("#pregunta").val());
    formData.append("respuesta", $("#respuesta1").val());
    $.ajax({
        url: "../webhook/modificapregunta_usuario.php",
        type: 'POST',
        data : formData,
         dataType: "html",
        cache: false,
        contentType: false,
        processData: false
    })
        .done(function(res){
        console.log(res);
        $("#frm-pregunta-seguridad").trigger('reset');
        $("#RespModal").modal('hide');
        });
        
    e.preventDefault();
    });


    $('#respuesta1, #respuesta2').on('keyup', function () {
    if ($('#respuesta1').val() == $('#respuesta2').val()) {
        if($('#respuesta1').val()==''){
            document.getElementById('noPregunta').style.display = 'block';
        $("#btnConfirmarPregu").hide();
    }else{
        document.getElementById('noPregunta').style.display = 'none';
        $("#btnConfirmarPregu").show();
        $("#btnConfirmarPregu").trigger();
    }} else {
    document.getElementById('noPregunta').style.display = 'block';
        $("#btnConfirmarPregu").hide();
}});
});
