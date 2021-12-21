$(document).ready(function(){
    listaplandeestudios();
});
function listaplandeestudios(){
    $.ajax({
        url: "../webhook/lista_planestudios.php",
        type:'POST',
        data : {},
        success: function (response){
            let PLANESESTUDIO =JSON.parse(response);
            console.log(PLANESESTUDIO);
            let template="";
            PLANESESTUDIO.forEach(planes=>{
                template += `<tr class="text-center">
                        <td data-label="Clave">${planes.id_plan}</td>
                        <td data-label="Nombre">${planes.nombre_plan}</td>
                        <td data-label="Acciones">
                            <a href="./saturacion_prof.php?idPlan=${planes.id_plan}"><button type="button" title="Ver Saturación" class="btn btn-info"><i class='bx bx-show'></i></button>
                            </td>
                        </tr>`
            });
            $("#tbl-lista-plan").html(template);
            $("#tbl-lista-planes-alumnos").html(template);
        }
    });
}