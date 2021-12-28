$(document).ready(function(){
    listaProfesores();
 $("#frm-add-profesor").on("submit", function(e){
    //var f = $(this);
    var formData = new FormData(document.getElementById("frm-add-profesor"));
    //formData.append("dato", "valor");
    formData.append("dato","valor");
    
    $.ajax({
        url: "../webhook/add_profesor.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
        .done(function(res){
        //Ocultar modal, resetear form y cargar lista
        console.log(res);
        $("#frm-add-profesor").trigger('reset');
        $("Asig_Modal_P").modal('hide');
        listaProfesores();
        
        });
    e.preventDefault();
});

});


function listaProfesores(){                         /* NOMBRO COMO QUIERA */
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
                                <td data-label="Correo">${profesor.fecha_nacimiento}</td>
                                <td data-label="Tel">${profesor.telefono}</td>
                                <td data-label="Acciones">
                                    <button type="button" class="btn btn-danger" onclick="eliminaProfesor(${profesor.id_usuario});"><i class='bx bx-trash'></i></button> 
                                    <button type="button" class="btn btn-success"  onclick="editarProfesor(${profesor.id_usuario},'${profesor.cuenta_profesor}', '${profesor.nombre}' ,'${profesor.primer_apellido}', '${profesor.segundo_apellido}', '${profesor.correo}', '${profesor.fecha_nacimiento}', '${profesor.telefono}');"><i class='bx bxs-pencil'></i></button> 
                                </td>
                            </tr>`;    
            });
            $("#tbl-profesores-ag").html(template);     /* id de la tabla de front */
        }
        
    });
}

/*  TERMINA LA LISTA .......................................................................................................................*/

/* FUNCION PARA EDITAR ..........................................................................................................*/
function editarProfesor(idUsuario,cuenta_profesor, nombre, primer_apellido, segundo_apellido, correo, fecha_nacimiento, telefono){
    $('#Edit_Modal_P').modal('show');
    console.log(idUsuario);
    //VARIABLES QUE SE PUEDEN EDITAR EN EL MODAL
    $("#id_usuario_edit").val(idUsuario);
    $("#rfc_edit").val(cuenta_profesor);
    $("#nombre_profesor_edit").val(nombre);
    $("#app_edit").val(primer_apellido);
    $("#apm_edit").val(segundo_apellido);
    $("#correo_edit").val(correo);
    $("#fechaNacimiento_edit").val(fecha_nacimiento);
    $("#telefono_edit").val(telefono);
}

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