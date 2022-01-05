$(document).ready(function(){
    carrerasAlumno();
});
function carrerasAlumno(){
	$.ajax({
        url: "../webhook/lista_carrera_alumnos.php",
        type: 'POST',
        data : {   idUsuario: $("#idUsuario").val()},
        success: function (response) {
            //Convertimos el string a JSON
            let CARRERA = JSON.parse(response);  
            console.log(CARRERA);
            let template="";
	        CARRERA.forEach(carrera => {
                template += `
                <tr class="text-center" idPlan=${carrera.id_plan}>
                    <td data-label="Plantel">${carrera.id_plantel}</td>
                    <td data-label="Carrera">${carrera.clave}</td>
                    <td data-label="idPlan">${carrera.id_plan}</td>
                    <td data-label="NombrePlan">${carrera.nombre_plan}</td>
                    <td data-label="Turno">${carrera.turno}</td>
                    <td data-label="Generacion">${carrera.anio}</td>
                    <td data-label="Acciones">
                        <div class="">
                            <input class="form-check-input" onclick="cambiaPlanAlumno(${carrera.id_plan},${carrera.id_carrera});" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        </div>
                    </td>
                </tr>
                `;    
            });
            $("#tbl-carreras").html(template);
            }
    });
}

function cambiaPlanAlumno(idPlan,idCarrera){
    console.log(idPlan);
    var formData = new FormData();
    formData.append("idPlan", idPlan);
    formData.append("idCarrera", idCarrera);
     $.ajax({
        url: "../webhook/update-plan-alumno.php", //webhook actualiza el plan del alumno en el session
        type: 'POST',
        data: formData,
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function(res){
        console.log(res);
        $("#idPlan").val(idPlan);
        document.getElementById('idPlan').style.display = 'block';
    });
        
    
}