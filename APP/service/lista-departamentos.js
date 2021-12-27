$(document).ready(function(){
    listaDepartamentos();
});

function listaDepartamentos(){
$.ajax({
        url: "../webhook/lista_departamento.php",   
        type: 'POST',                               
        data : {  id_plantel: '0'     },                           
        success: function (response) {              
            //Convertimos el string a JSON
            console.log(response);
            let DEPARTAMENTOS = JSON.parse(response);
            console.log(DEPARTAMENTOS);
            let template="";
            DEPARTAMENTOS.forEach(departamento=> {
                template += `<tr class="text-center">
                            <td data-label="Clave">${departamento.id_departamento}</td>
                            <td data-label="Nombre">${departamento.nombre}</td>
                            <td data-label="Acciones">
                                <a href="./ag_prof.php?idDepartamento=${departamento.id_departamento}"><button type="button" title="Ver profesores" class="btn btn-info"><i class='bx bx-show'></i></button>
                                </td>
                            </tr>`;    
            });
            $("#tbl-lista-departamentos").html(template);
        }
        
    });
}