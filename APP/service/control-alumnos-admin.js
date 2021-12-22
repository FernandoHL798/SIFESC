$(document).ready(function(){
    listaAlumnosPerPlan();
});
function listaAlumnosPerPlan(){
    $.ajax({
        url: "../webhook/lista_alumnos.php",
        type:'POST',
        data : {idUsuario : "0",
        idPlan :$("#idPlanAlumnos").val()},
        success: function (response){
            let ALUMNOS =JSON.parse(response);
            console.log(ALUMNOS);
            let template="";
            ALUMNOS.forEach(alumno=>{
                template += `
                        <tr class="text-center">
                            <td data-label="Clave">${alumno.cuenta_alumno}</td>
                            <td data-label="Apellido M">${alumno.primer_apellido}</td>
                            <td data-label="Apellido P">${alumno.segundo_apellido}</td>
                            <td data-label="Nombre">${alumno.nombre}</td>
                            <td data-label="Correo">${alumno.correo}</td>
                            <td data-label="Tel">${alumno.telefono}</td>
                            <td data-label="Fecha de nacimiento">${alumno.fecha_nacimiento}</td>
                            <td data-label="Generacion">${alumno.anio}</td>
                            <td data-label="Acciones">
                                <button type="button" title="Editar Alumno" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Edit_Modal_P"><i class='bx bxs-pencil'></i></button>
                                <button type="button" title="Eliminar Alumno" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal_baja_Alum"><i class='bx bx-trash'></i></button> 
                            </td>
                        </tr>
                
                `;
            });
            $("#tbl-alumnos-plan").html(template);
        }
    });
}