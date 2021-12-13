$(document).ready(function () {
    detallesSaturacion();
});

function detallesSaturacion(){
    $.ajax({
        url: "../webhook/lista_asignacion.php",
        type: 'POST',
        data: {
            idPlan : "9",
            idAsignatura:"0"
        },
        success: function (response) {
             //COnvertimos el string a JSON
           let SATURACIONES = JSON.parse(response);  
            let template="";
            SATURACIONES.forEach(saturacion => {
                template += `<tr class="text-center">
                                <td data-label="Clave Asig">${saturacion.codigo}</td>
                                <td data-label="Nombre">${saturacion.nombre}</td>
                                <td data-label="Gpo">${saturacion.nombre_grupo}</td>
                                <td data-label="Se">${saturacion.semestre}</td>
                                <td data-label="Cr">${saturacion.creditos}</td>
                                <td data-label="Cup">${saturacion.cupo}</td>
                                <td data-label="In">2</td>
                            </tr> `;    
            });
            $("#tbl-asignaciones").html(template);
        }
        
    });
}
