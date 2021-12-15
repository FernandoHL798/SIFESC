function listaProfesores(){                         /* NOMBRO COMO QUIERA */
    $.ajax({
        url: "../webhook/lista_profesor.php",       /* NOMBRE DEL WEBHOOK DEL MICRO SERVICIO A UTILIZAR */
        type: 'POST',                               /*  */
        data : {       },                           /*Es para mandar los valores para traer un registro en especifico idUsuario: $('#idUsuario').val()*/
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

                template += `<tr class="text-center" idProfesor="${profesor.usuario_id_fk}">      
                                <td data-label="Clave">${profesor.cuenta_profesor}</td>
                                <td data-label="Nombre">${profesor.nombre}</td>
                                <td data-label="Apellido P">${profesor.primer_apellido}</td>
                                <td data-label="Apellido M">${profesor.segundo_apellido}</td>
                                <td data-label="Correo">${profesor.correo}</td>
                                <td data-label="Correo">${profesor.fecha_nacimiento}</td>
                                <td data-label="Tel">${profesor.telefono}</td>
                                <td data-label="Acciones">
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" onclick="eliminaProfesor(${profesor.usuario_id_fk});"><i class='bx bx-trash'></i></button> 
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Edit_Modal_P"><i class='bx bxs-pencil'></i></button> 
                                </td>
                            </tr>`;    
            });
            $("#tbl-profesores-ag").html(template);     /* id de la tabla de front */
        }
        
    });
}

/*  TERMINA LA LISTA .......................................................................................................................*/


/*  FUNCION PARA ELIMINAR .......................................................................................................................*/
function eliminaProfesor(idProf){
    
    $('#Modal_baja_Prof').modal('show');
    $("#idProfesor").val(idProf);
}


$("#frm_baja_profesor").on("submit", function(e){
    alert("Entrando")
     var f = $(this);
    var formData = new FormData(document.getElementById("frm_baja_profesor"));
    formData.append("dato", "valor");
    $.ajax({
        url: "../webhook/elimina_profesor.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
        .done(function(res){
        console.log(res);
        $("#frm_baja_profesor").trigger('reset');
        $("#Modal_baja_Prof").modal('hide');
        listaProfesores();
        });
        
    e.preventDefault();
});
/* TERMINA FUNCION PARA ELIMINAR .......................................................................................................................*/