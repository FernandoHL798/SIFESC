$(document).ready(function(){
    let id_inscripcion=0;
    let inscritos=0;
    let cupo=0;
    $("#frm_baja_asignatura_inscrip").on("submit", function(e){
        var formData = new FormData(document.getElementById("frm_baja_asignatura_inscrip"));
        formData.append("idInscripcion",$("#idInscripcionAlumno").text());
        formData.append("idAsignacion", $("#idAsignacion").val());
        formData.append("estatus", "2");
        id_inscripcion=$("#idInscripcionAlumno").text();
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
            console.log(res);
            if(res==1){
                inscritos=parseInt($("#ins").text())-1;
                console.log($("#ins").val());
                var formData = new FormData(document.getElementById("frm_baja_asignatura_inscrip"));
                formData.append("idAsignacion", $("#grupo").val());
                formData.append("inscritos", inscritos);
                $.ajax({
                    url: "../webhook/modifica_inscritos_asignacion.php",
                    type: 'POST',
                    data: formData,
                    dataType: "html",
                    cache: false,
                    contentType: false,
                    processData: false
                })
                .done(function(res){
                    console.log(res);
                    listaMovimientos(id_inscripcion);
                    $("#frm_baja_asignatura_inscrip").trigger('reset');
                    $("#Modal_baja").modal('hide');
                });
            }
        });
        e.preventDefault();
    });
});

//esta es una funcion para eliminar el movimiento
function bajaMovimiento(idAsignacion){
    //idAsignacion es el valor que se va a mandar a llamar en cada uno de los datos a enviar.
    $("#idAsignacion").val(idAsignacion);
    $('#Modal_baja').modal('show');
}