$(document).ready(function(){
    listaCarreras();
});

function listaCarreras(){
$.ajax({
        url: "../webhook/lista_carrera.php",   
        type: 'POST',                               
        data : {       },                           
        success: function (response) {              
            //Convertimos el string a JSON
            let CARRERAS = JSON.parse(response);
            console.log(CARRERAS);
            let template="";
            CARRERAS.forEach(carrera=> {
                template += `<tr class="text-center">
                            <td data-label="Clave">${carrera.id_carrera}</td>
                            <td data-label="Nombre">${carrera.nombre}</td>
                            <td data-label="Acciones">
                            <a href="./ag_alumno.php?idPlan=${carrera.id_carrera}"><button type="button" title="Ver Alumnos" class="btn btn-info"><i class='bx bx-show'></i></button>
                            </td></tr>`;    
            });
            $("#tbl-lista-carreras").html(template);
        }
        
    });
}
