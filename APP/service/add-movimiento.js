$(document).ready(function(){
    $("#frm-add-movimiento").on("submit", function(e){
    var f = $(this);
    var formData = new FormData(document.getElementById("frm-add-movimiento"));
    formData.append("dato", "valor");
    $.ajax({
        url: "../webhook/add_movimiento.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
        .done(function(res){
            getListaMovimientos();
        console.log(res);
        $("#frm-add-movimiento").trigger('reset');
        $("#exampleModal").modal('hide');
        });
    e.preventDefault();
});
});
/* funcion escucha para agregar al movimiento */


 