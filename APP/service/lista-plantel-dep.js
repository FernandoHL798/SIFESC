$(document).ready(function(){
    listaplantelesdep();
    listaDepartamentos();
});
/* LISTA PLANTELES -------------------------*/
function listaplantelesdep(){
    $.ajax({
        url: "../webhook/lista_plantel.php",
        type:'POST',
        data : {},
        success: function (response){
            let PLANTELDEP =JSON.parse(response);
            console.log(PLANTELDEP);
            let template="";
            PLANTELDEP.forEach(planteldep=>{
                template += `<tr class="text-center">
                        <td data-label="Nombre Plantel">${planteldep.nombre}</td>
                        <td data-label="Acciones">
                            <a href="./ag-departamento.php"><button type="button" title="Ver Departamentos" class="btn btn-info"><i class='bx bx-show'></i></button>
                            </td>
                        </tr>`
            });
            $("#tbl-planteles-dep").html(template);
        }
    });
}
/* LISTA DEPARTAMENTOS -------------------------*/

function listaDepartamentos(){
$.ajax({
        url: "../webhook/lista_departamento.php",   
        type: 'POST',                               
        data : {},                           
        success: function (response) {              
            //Convertimos el string a JSON
            let DEPARTAMENTOS = JSON.parse(response);
            console.log(DEPARTAMENTOS);
            let template="";
            DEPARTAMENTOS.forEach(departamento=> {
                template += `<tr class="text-center">
                            <td id="clave_depto" data-label="Clave">${departamento.id_departamento}</td>
                            <td id="nombre_depto" data-label="Nombre">${departamento.nombre}</td>
                            <td data-label="Acciones">
                                <button type="button" title="Editar departamento" class="btn btn-success" data-bs-toggle="modal"  data-bs-target="#depto_edit_Modal"><i class='bx bxs-pencil'></i></button>
                                <button type="button" class="btn btn-danger" onclick="eliminaDepto(${departamento.id_departamento});"><i class='bx bx-trash'></i></button>
                                </td>
                            </tr>`;    
            });
            $("#tbl-departamentos").html(template);
            alert("cookie");
        } 
    }); 
}

function eliminaDepto(idDepto){
    alert("entro");
    alert(idDepto);
}