$(document).ready(function(){
    listaAlumnosPerPlan();
    agregaAlumnos();
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
                if(alumno.estatus==1){
                    estaAlum='Activo';
                    console.log(estaAlum);
                }else{
                    if(alumno.estatus==2){
                        estaAlum='Baja temporal por semestre';
                    }else{
                        if(alumno.estatus==3){
                            estaAlum='Baja temporal por año';
                        }else{
                            if(alumno.estatus==4){
                                estaAlum='Baja total';
                            }else{
                                if(alumno.estatus==5){
                                    estaAlum='Titulado';
                                }else{
                                    estaAlum='No definido';
                                }
                            }
                        }
                    }
                }
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
                            <td data-label="Estatus">${estaAlum}</td>
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

function agregaAlumnos(){
    $("#frm_m_a_alumno").on("submit", function(e){
    var f = $(this);
    var formData = new FormData(document.getElementById("frm_m_a_alumno"));
    formData.append("dato", "valor");
    $.ajax({
        url: "../webhook/consulta_existe_usuario.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
        .done(function(res){
        console.log(res);
    });
    e.preventDefault();
});
}