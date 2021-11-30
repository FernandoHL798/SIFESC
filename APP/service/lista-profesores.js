function listaProfesores(){
    $.ajax({
        url: "../webhook/lista_profesor.php",
        type: 'POST',
        data : {        },
        success: function (response) {
            //Convertimos el string a JSON
            console.log(response);
            let PROFESORES = JSON.parse(response);  
            console.log(PROFESORES);
            let template="";

            PROFESORES.forEach(profesor=> {

                template += `<tr class="text-center" idProfesor="${profesor.usuario_id_fk}">
                                <td data-label="Clave">${profesor.cuenta_profesor}</td>
                                <td data-label="Nombre">${profesor.nombre}</td>
                                <td data-label="Apellido P">${profesor.primer_apellido}</td>
                                <td data-label="Apellido M">${profesor.segundo_apellido}</td>
                                <td data-label="Correo">${profesor.correo}</td>
                                <td data-label="Tel">${profesor.telefono}</td>
                                <td data-label="Acciones">
                                    <button type="button" class="btn btn-danger"><i class='bx bx-trash'></i></button> 
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Edit_Modal_P"><i class='bx bxs-pencil'></i></button> 
                                </td>
                            </tr>`;    
            });
            $("#tbl-profesores-ag").html(template);
        }
        
    });
}
