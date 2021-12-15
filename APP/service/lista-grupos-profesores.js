$(document).ready(function(){
	console.log("Escuchando Acciones");
});

function consultaGruposProfesor(){
    $.ajax({
        url: "../webhook/lista_grupos.php",
        type: 'POST',
        data : {   idAsignatura:"0",
                   idProfesor: $("#idUsuario").val()},
        success: function (response) {
            //Convertimos el string a JSON
            let GRUPOS = JSON.parse(response);  
            console.log(GRUPOS);
            let template="";
	        /*CARRERAS.forEach(carrera => {
                template += `
                <input class="form-check-input" type="radio" name="carrera" id="carrera" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                    | ${carrera.id_plan_fk} | <br>${carrera.nombre_carrera}
            </label>    <br>
                `;    
                $("#idPlan").val(carrera.id_plan_fk);
            });*/
            }
    });
}