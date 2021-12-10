$(document).ready(function(){

    $('#frm-verifica-contra').submit(function (e)
    {
      alert("Si entro");
        var pw1 = $("#pwd").val();
        var pw2 =  $("#exampleInputPassword1").val();
        if(pw1=='' && pw2==''){
            document.getElementById('btnConfirmarContra').style.display = 'none';
        }else{
        if (pw1 == pw2)
        {
            document.getElementById('btnConfirmarContra').style.display = 'block';
        }
        else
        {
            document.getElementById('btnConfirmarContra').style.display = 'none';
        }}
        e.preventDefault();
    })
});