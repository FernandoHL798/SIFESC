$(document).ready(function(){
	console.log("Escuchando Acciones");
});

function cargaAlumnosAsignacion(){
    $.ajax({
        url: "../webhook/lista_profesor.php",
        type: 'POST',
        data : { idProfesor: $("#idUsuario").val()},
        success: function (response) {
            //Convertimos el string a JSON
            let PROFESORES = JSON.parse(response);  
            console.log(PROFESORES);
            
            }
    });
}