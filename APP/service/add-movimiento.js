$(document).ready(function(){
    let id_inscripcion=0;
    let inscritos=0;
    let cupo=0;
    $("#frm-add-movimiento").on("submit", function(e){
        var f = $(this);
        inscritos=parseInt($("#ins").text())+1;
        let cupo=parseInt($("#cup").text());
        console.log(cupo+">="+inscritos);
        if(cupo>=inscritos){
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
                console.log(res);
                id_inscripcion=$("#idInscripcionAlumno").text();
                if(res!=1){
                    var formData = new FormData(document.getElementById("frm_baja_asignatura_inscrip"));
                    formData.append("idInscripcion", $("#idInscripcionAlumno").text());
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
                        console.log(res);
                        if(res==1){
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
                                $("#frm-add-movimiento").trigger('reset');
                                $("#Asig_Mat_P").modal('hide');
                            });
                        }else{
                            $("#saturacionGrupoAsig").html("Fallo en inscripcion");
                        } 
                    });
                    e.preventDefault();
                }else if(res==1){
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
                        $("#frm-add-movimiento").trigger('reset');
                        $("#Asig_Mat_P").modal('hide');
                    });
                }            
            });
        }else{
            $("#saturacionGrupoAsig").html("El grupo esta saturado, elige otro");
        }
        e.preventDefault();
    });
});
/* funcion escucha para agregar al movimiento */