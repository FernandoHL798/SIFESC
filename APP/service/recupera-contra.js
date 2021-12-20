$(document).ready(function(){
    $("#frm-olvide-contra").on("submit", function(e){
    var formData = new FormData(document.getElementById("frm-olvide-contra"));
    formData.append("correo", $("#verifica_correo").val());
    formData.append("fecha", $("#verifica_fecha").val());
    formData.append("pregunta", $("#floatingSelect").val());
    formData.append("respuesta", $("#verifica_resp").val());
    $.ajax({
        url: "./APP/webhook/olvide_contra.php",
        type: 'POST',
        data: formData,
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function(res){
        console.log(res);
        if(res>0){
            let template=`<div class="alert alert-success" role="alert">
                            <div class="d-flex align-items-center">
                                <strong> Se te ha enviado un correo con tu nueva contraseña </strong>
                                <div class="spinner-border ml-auto" role="status" aria-hidden="true">
                                </div>
                            </div>
                        </div>`;
            $("#mjeContra").html(template);

            $("#frm-olvide-contra").trigger('reset');
        } else{
            let template=`<div class="alert alert-success" role="alert">
                            <div class="d-flex align-items-center">
                                <strong> Verifica tus datos </strong>
                                <div class="spinner-border ml-auto" role="status" aria-hidden="true">
                                </div>
                            </div>
                        </div>`;
           $("#mjeContra").html(template);
        }
    });
        
    e.preventDefault();
    });
});

