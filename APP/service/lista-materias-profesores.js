$(document).ready(function(){
    listaMateriasProfesores();
});

function listaMateriasProfesores(){                         /* NOMBRO COMO QUIERA */
    $.ajax({
        url: "../webhook/lista_profesor.php",       /* NOMBRE DEL WEBHOOK DEL MICRO SERVICIO A UTILIZAR */
        type: 'POST',                               /*  */
        data : {  idProfesor : $("#idProfesor").val()
             },                           /*Es para mandar los valores para traer un registro en especifico idUsuario: $('#idUsuario').val()*/
        success: function (response) {              /*  */
            //Convertimos el string a JSON
            let PROFESORES = JSON.parse(response);  /* SE CONVIERTE DE STRIN A JSON || EL NOMBRE PUEDE SER COMO SEA PERO 
                                                    DE PREFERENCIA EL NOMBRE DEL CONSTRUCTOR   (PROFESOR)*/
            console.log(PROFESORES);                /* CONSOLE.LOG MANDA A IMPRIMIR --- PROFESOR */
            let template="";                        /* DECLARA VARIABLE NULL 
                                                        SI SOLO ES UN REGISTRO EL QUE SE LLAMA NO SE UTILIZA EL "LET TEMPLATE"
                                                        SOLO SE UTILIZA PARA LAS LISTAS*/
            let profesor= PROFESORES[0];
            console.log(profesor);
            $("#rfc_profe").html(profesor.cuenta_profesor);
            $("#depto_profe").html(profesor.nombre)
            $("#nombre_profe").html(profesor.nombre_profesor)
            $("#pa_profe").html(profesor.primer_apellido)
            $("#sa_profe").html(profesor.segundo_apellido);     /* id de la tabla de front */



            cargaAsignaturasProfesor(profesor.usuario_id_fk);

        }
        
    });
}

function cargaAsignaturasProfesor(idProfesor){
     $.ajax({
        url: "../webhook/lista_profesor.php",       /* NOMBRE DEL WEBHOOK DEL MICRO SERVICIO A UTILIZAR */
        type: 'POST',                               /*  */
        data : {  idProfesor : $("#idProfesor").val()
             },                           /*Es para mandar los valores para traer un registro en especifico idUsuario: $('#idUsuario').val()*/
        success: function (response) {              /*  */
            //Convertimos el string a JSON
            let PROFESORES = JSON.parse(response);  /* SE CONVIERTE DE STRIN A JSON || EL NOMBRE PUEDE SER COMO SEA PERO 
                                                    DE PREFERENCIA EL NOMBRE DEL CONSTRUCTOR   (PROFESOR)*/
            console.log(PROFESORES);                /* CONSOLE.LOG MANDA A IMPRIMIR --- PROFESOR */
            let template="";                        /* DECLARA VARIABLE NULL 
                                                        SI SOLO ES UN REGISTRO EL QUE SE LLAMA NO SE UTILIZA EL "LET TEMPLATE"
                                                        SOLO SE UTILIZA PARA LAS LISTAS*/
            let profesor= PROFESORES[0];
            console.log(profesor);
            $("#rfc_profe").html(profesor.cuenta_profesor);
            $("#depto_profe").html(profesor.nombre)
            $("#nombre_profe").html(profesor.nombre_profesor)
            $("#pa_profe").html(profesor.primer_apellido)
            $("#sa_profe").html(profesor.segundo_apellido);     /* id de la tabla de front */



            cargaAsignaturasProfesor(profesor.usuario_id_fk);

        }
        
    });
}