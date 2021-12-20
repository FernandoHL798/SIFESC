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
                            <input class="form-check-input" onclick="cambiaPlanAlumno(${carrera.id_plan});" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        </div>
                    </td>
                </tr>
                `;    
                $("#idPlan").val(carrera.id_plan);
            });
            $("#tbl-carreras").html(template);
            }
    });
}

function cambiaPlanAlumno(idPlan){
    console.log(idPlan);
     $.ajax({
        url: "../../APP/webhook/update-plan-alumno.php", //webhook actualiza el plan del alumno en el session
        type: 'POST',
        data: { idplan:idPlan},
        dataType: "html",
        cache: false,
        contentType: false,
        processData: false
    })
    .done(function(res){
        console.log(res);
        e.preventDefault();
    });
        
    
}