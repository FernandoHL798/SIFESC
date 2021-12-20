$(document).ready(function () {
  var myInput = document.getElementById("psw");
  var letter = document.getElementById("letter");
  var capital = document.getElementById("capital");
  var number = document.getElementById("number");
  var length = document.getElementById("length");
  var a;
  var b;
  var c;
  var d;

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
    a=1;
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
    a=0;
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
    b=1;
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
    b=0;
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
    c=1;
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
    c=0;
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
    d=1;
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
    d=0;
  }
}

//MODIFICA LA CONTRASEÑA EN LA DB COMPARANDO LA ACTUAL INGRESADA CON LA DE DB
$("#frm_m_contrasena_nueva").on("submit", function(e){
      if(a==1 && b==1 && c==1 && d==1){
//CONDICION DE QUE LAS CONTRASEÑAS NUEVAS SEAN IGUALES
        if ($('#psw').val() == $('#exampleInputPassword1').val()) {
//CONDICION DE QUE LAS CONTRASEÑAS NO DEBEN ESTAR VACIAS
            if($('#psw').val()==''){
            }else{
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
                  if(res){
                    alert("entre correcto");
                    $("#msjCorrecto").show();
                    $("#msjIncorrecto").hide();
                    $("#btnConfirmarContra").trigger("click");
                    $("#aceptar").click(function(){
                        document.location.href = "/equipo3/APP/view/seguridad.php";
                     });
                  } else{
                    alert("entre incorrecto");
                    $("#msjIncorrecto").show();
                     $("#msjCorrecto").hide();
                     $("#btnConfirmarContra").trigger("click");
                     $("#aceptar").click(function(){
                        $("#Modal_Cambio_Con").modal('hide');
                     });
                  }
                  $("#frm_m_contrasena_nueva").trigger('reset');
                  $("#exampleModalLong").modal('hide');
                });
        
                e.preventDefault();
   
            }} else {
          }}else{
            }
});

//QUITA LOS ESPACIOS EN EL RECUADRO DE LA NUEVA CONTRASEÑA    
    
    $("#psw").keyup(function(){              
        var ta      =   $("#psw");
        letras      =   ta.val().replace(/ /g, "");
        ta.val(letras)
    });$("#exampleInputPassword1").keyup(function(){              
        var ta      =   $("#psw");
        letras      =   ta.val().replace(/ /g, "");
        ta.val(letras)
    });
    $("#exampleInputPassword1").on('paste', function(e){
    e.preventDefault();
  });
    $("#psw").on('paste', function(e){
    e.preventDefault();
  });
//CONDICION DE QUE SE CUMPLAN RESTRICCIONES DE GENERAR LA CONTRASEÑA
      $('#psw, #exampleInputPassword1').on('keyup', function () {
      if(a==1 && b==1 && c==1 && d==1){
//CONDICION DE QUE LAS CONTRASEÑAS NUEVAS SEAN IGUALES
        if ($('#psw').val() == $('#exampleInputPassword1').val()) {
//CONDICION DE QUE LAS CONTRASEÑAS NO DEBEN ESTAR VACIAS
            if($('#psw').val()==''){
                document.getElementById('noContra').style.display = 'block';
                $("#confirmarContra").hide();
                //SI ESTAN VACIAS
            }else{
                document.getElementById('noContra').style.display = 'none';
                $("#confirmarContra").show();
                $("#confirmarContra").trigger();
        }} else {
            document.getElementById('noContra').style.display = 'block';
            $("#confirmarContra").hide();
    }}else{
        document.getElementById('noContra').style.display = 'block';
        $("#confirmarContra").hide();
    }});
});


    