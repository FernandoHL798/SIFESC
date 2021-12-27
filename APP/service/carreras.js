$(document).ready(function(){
});
window.onload = function() {
    carrerasAlumno();
};
function carrerasAlumno(){
	$.ajax({
        url: "../webhook/lista_estudia.php",
        type: 'POST',
        data : {   idUsuario: $("#idUsuario").val()},
        success: function (response) {
            //Convertimos el string a JSON
            let CARRERAS = JSON.parse(response);  
            let template="";
	        CARRERAS.forEach(carrera => {
                template += `
                <input value="${carrera.id_plan_fk}" class="form-check-input" type="radio" name="carrera" id="carrera" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                    | ${carrera.id_plan_fk} | <br>${carrera.nombre_carrera}
            </label>    <br>
                `;    
                $("#idPlan").val(carrera.id_plan_fk);
            });
            $("#rdo-carrera").html(template);
            }
    });
}