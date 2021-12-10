$(document).ready(function(){
    $('#psw, #exampleInputPassword1').on('keyup', function () {
    if ($('#psw').val() == $('#exampleInputPassword1').val()) {
        $("#confirmarContra").show();
        $("#confirmarContra").trigger();
    } else 
        $("#confirmarContra").hide();
});
});