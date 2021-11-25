$(document).ready(function(){
    alert("Hola Mundo");
  });
//Escucha de un form
$("#frm-add-profesor").on("submit", function(e){
    //let tipocontrato = $('input[name="contrato"]:checked').val();
    var f = $(this);
    var formData = new FormData(document.getElementById("frm-add-profesor"));
    formData.append("dato", "valor");
    //formData.append(f.attr("name"), $(this)[0].files[0]);
    $.ajax({
        url: "../webhook/add_profesor.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
        .done(function(res){
        alert("Jalo");
        });
    e.preventDefault();
});