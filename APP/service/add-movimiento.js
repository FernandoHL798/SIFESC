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
        console.log(res);
        if(res!=1){
            var formData = new FormData(document.getElementById("frm_baja_asignatura_inscrip"));
            formData.append("idInscripcion", "1");
            formData.append("idAsignacion", "1");
            formData.append("estatus", "1");
            $.ajax({
                url: "../webhook/modifica_movimiento.php",
                type: 'POST',
                data: formData,
                dataType: "html",
                cache: false,
                contentType: false,
                processData: false
            })
            .done(function(res){
            getListaMovimientos();
            console.log(res);
            $("#frm-add-movimiento").trigger('reset');
            $("#Asig_Mat_P").modal('hide');
            });
        
    e.preventDefault();
        }else{
            getListaMovimientos();
        $("#frm-add-movimiento").trigger('reset');
        $("#Asig_Mat_P").modal('hide');
        }});
    e.preventDefault();
});
});
/* funcion escucha para agregar al movimiento */


 