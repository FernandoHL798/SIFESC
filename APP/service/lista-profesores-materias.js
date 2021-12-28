$(document).ready(function(){
    listaProfesoresMaterias();
});

function listaProfesoresMaterias(){                         /* NOMBRO COMO QUIERA */
    $.ajax({
        url: "../webhook/lista-profesores-departamento.php",       /* NOMBRE DEL WEBHOOK DEL MICRO SERVICIO A UTILIZAR */
        type: 'POST',                               /*  */
        data : {  idDepartamento : $("#idDepartamento").val()
             },                           /*Es para mandar los valores para traer un registro en especifico idUsuario: $('#idUsuario').val()*/
        success: function (response) {              /*  */
            //Convertimos el string a JSON
            console.log(response);
            let PROFESORES = JSON.parse(response);  /* SE CONVIERTE DE STRIN A JSON || EL NOMBRE PUEDE SER COMO SEA PERO 
                                                    DE PREFERENCIA EL NOMBRE DEL CONSTRUCTOR   (PROFESOR)*/
            console.log(PROFESORES);                /* CONSOLE.LOG MANDA A IMPRIMIR --- PROFESOR */
            let template="";                        /* DECLARA VARIABLE NULL 
                                                        SI SOLO ES UN REGISTRO EL QUE SE LLAMA NO SE UTILIZA EL "LET TEMPLATE"
                                                        SOLO SE UTILIZA PARA LAS LISTAS*/

            PROFESORES.forEach(profesor=> {         /* "profesor" se nombra como sea */   
                                                    /* los datos tienen que ser de la base de datos  */

                template += `<tr class="text-center" idProfesor="${profesor.id_usuario}">      
                                <td data-label="Clave">${profesor.cuenta_profesor}</td>
                                <td data-label="Nombre">${profesor.nombre}</td>
                                <td data-label="Apellido P">${profesor.primer_apellido}</td>
                                <td data-label="Apellido M">${profesor.segundo_apellido}</td>
                                <td data-label="Correo">${profesor.correo}</td>
                                <td data-label="Acciones">
                                <a href="./AsignaProfesor_materia.php"><button type="button" title="Ver Profesor" class="btn btn-info"><i class='bx bx-show'></i></button>
                                </td>
                            </tr>`;    
            });
            $("#tbl_lista_profesores_materias").html(template);     /* id de la tabla de front */
        }
        
    });
}