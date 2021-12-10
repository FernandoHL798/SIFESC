$(document).ready(function(){

    $('#frm-verifica-contra').submit(function (e){
      // alert("Si entro");
      var pw1 = $("#pwd").val();
      var pw2 =  $("#exampleInputPassword1").val();
      if(pw1=='' && pw2==''){
        document.getElementById('btnConfirmarContra').style.display = 'none';
        $("#confirmarContra").trigger();
    }else{
        if (pw1 == pw2)
        {
            document.getElementById('btnConfirmarContra').style.display = 'block';
        }
        else
        {
            $("#confirmarContra").trigger();
            document.getElementById('btnConfirmarContra').style.display = 'none';
        }}
        e.preventDefault();
    })
    $('#pwd, #exampleInputPassword1').on('keyup', function () {
      if ($('#pwd').val() == $('#exampleInputPassword1').val()) {
        $("#confirmarContra").trigger();
    } else 
        alert("Las contraseñas no coinciden");
});
});