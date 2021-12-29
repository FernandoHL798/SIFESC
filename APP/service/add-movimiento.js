$(document).ready(function(){
    let id_inscripcion=0;
    $("#frm-add-movimiento").on("submit", function(e){
    var f = $(this);
    var formData = new FormData(document.getElementById("frm-add-movimiento"));
    formData.append("idInscripcion", $("#idInscripcionAlumno").text());
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
        id_inscripcion=$("#idInscripcionAlumno").text();
        if(res!=1){
            var formData = new FormData(document.getElementById("frm_baja_asignatura_inscrip"));
            formData.append("idAsignacion", $("#grupo").val());
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
            listaMovimientos(id_inscripcion);
            $("#frm-add-movimiento").trigger('reset');
            $("#Asig_Mat_P").modal('hide');
            });
        
    e.preventDefault();
        }else{
            listaMovimientos(id_inscripcion);
        $("#frm-add-movimiento").trigger('reset');
        $("#Asig_Mat_P").modal('hide');
        }});
    e.preventDefault();
});
});
/* funcion escucha para agregar al movimiento */