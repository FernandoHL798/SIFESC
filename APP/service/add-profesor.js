$(document).ready(function(){
  });
//Escucha de un form
$("#frm-add-profesor").on("submit", function(e){
     var f = $(this);
    var formData = new FormData(document.getElementById("frm-add-profesor"));
    formData.append("dato", "valor");
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
        console.log(res);
        $("#frm-add-profesor").trigger('reset');
        $("#Asig_Modal_P").modal('hide');
        listaProfesores();
        });
        
    e.preventDefault();
});
/**

 */