$(document).ready(function(){
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