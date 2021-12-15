function listaplandeestudios(){
    $.ajax({
        url: "../webhook/lista_plandeestudios.php",
        type:'POST',
        data : {},
        success: function (response){
            console.log(response);
            let PLANESESTUDIO =JSON.parse(response);
            console.log(PLANESESTUDIO);
            let template="";
            PLANESESTUDIO.forEach(planes=>{
                template += `<tr class="text-center">
                        <td data-label="Clave">${planes.id_plan}</td>
                        <td data-label="Nombre">${planes.nombre_plan}</td>
                        <td data-label="Acciones">
                            <a href="./saturacion_prof.php"><button type="button" title="Ver Saturación" class="btn btn-info"><i class='bx bx-show'></i></button>
                            </td>
                        </tr>`
            });
        }
    });
}