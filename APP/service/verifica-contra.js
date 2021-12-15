$(document).ready(function(){
    $("#frm_m_contrasena_nueva").on("submit", function(e){
    var formData = new FormData(document.getElementById("frm_m_contrasena_nueva"));
    formData.append("idUsuario", $("#idUsuario").val());
    formData.append("contraAct", $("#contraAct").val());
    formData.append("psw", $("#psw").val());
    $.ajax({
        url: "../webhook/pwd-update.php",
        type: 'POST',
        data : formData,
         dataType: "html",
        cache: false,
        contentType: false,
        processData: false
})
    .done(function(res){
        console.log(res);
        $("#frm_m_contrasena_nueva").trigger('reset');
        $("#exampleModalLong").modal('hide');
        });
        
    e.preventDefault();
    });
    $("#psw").keyup(function(){              
        var ta      =   $("#psw");
        letras      =   ta.val().replace(/ /g, "");
        ta.val(letras)
}); $("#exampleInputPassword1").keyup(function(){              
        var ta      =   $("#psw");
        letras      =   ta.val().replace(/ /g, "");
        ta.val(letras)
}); 
    $('#psw, #exampleInputPassword1').on('keyup', function () {
    if ($('#psw').val() == $('#exampleInputPassword1').val()) {
        if($('#psw').val()==''){
            document.getElementById('noContra').style.display = 'block';
        $("#confirmarContra").hide();
    }else{
        document.getElementById('noContra').style.display = 'none';
        $("#confirmarContra").show();
        $("#confirmarContra").trigger();
    }} else {
    document.getElementById('noContra').style.display = 'block';
        $("#confirmarContra").hide();
}});
});