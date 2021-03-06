$(document).ready(function () {
    let peri="";
    periodo(peri);
    listaCarreras();
   // detallesSaturacionPlan();
    
});

function periodo(peri){
    $.ajax({
        url: "../webhook/lista_periodo.php",
        type: 'POST',
        data : {    },
        success: function (response) {
            let cont=0;
            //Convertimos el string a JSON
            let PERIODOS = JSON.parse(response);
            console.log(cont);
            PERIODOS.forEach(periodo => {
                if($("#idPlan").val()>0){
                    if(PERIODOS[cont].estatus==1){
                        console.log(PERIODOS[cont].periodo);
                        $("#periodo").html("Periodo: "+PERIODOS[cont].periodo+" || ");
                        peri= PERIODOS[cont].periodo;
                        detallesSaturacion(peri);
                    }else{
                        console.log("No agarra");
                        cont++;
                    }
                }else{
                    $("#periodo").html("AUN NO HAS SELECCIONADO O NO TIENES ASIGNADO UN PLAN DE ESTUDIOS, REVISA EN MIS CARRERAS PARA CONTINUAR");
                }
            });
        }
    });
}

function listaCarreras(){
$.ajax({
        url: "../webhook/lista_carrera.php",   
        type: 'POST',                               
        data : {  idPlan: $("#idPlan").val()    },                           
        success: function (response) {
                console.log(response);       
            //Convertimos el string a JSON
        if($("#idPlan").val()>0){
            let CARRERA = JSON.parse(response);
            CARRERA.forEach(carrera=> {
                $("#carrera").html("Carrera: "+CARRERA[0].nombre+" || ");
            });
        }else{
        }
        }
        
    });
}

function detallesSaturacion(peri){
    $.ajax({
        url: "../webhook/lista_asignacion.php",
        type: 'POST',
        data: {
            idPlan : $("#idPlan").val(),
            idAsignatura:"0",
            periodo: peri
        },
        success: function (response) {
             //COnvertimos el string a JSON
                console.log(response);
             if($("#idPlan").val()>0){
           let SATURACIONES = JSON.parse(response);  
            let template="";
            let cont=0;
            let tama??oSaturacion=SATURACIONES.length;
            SATURACIONES.forEach(saturacion => {
                if(cont<tama??oSaturacion){
                if(cont<tama??oSaturacion-1 && SATURACIONES[cont].nombre_grupo==SATURACIONES[cont+1].nombre_grupo){
                    cont++;
                template += `<tr class="text-center">
                                <td data-label="Clave Asig">${saturacion.codigo}</td>
                                <td data-label="Nombre">${saturacion.nombre}</td>
                                <td data-label="Gpo">${saturacion.nombre_grupo}</td>
                                <td data-label="Se">${saturacion.semestre}</td>
                                <td data-label="Cr">${saturacion.creditos}</td>
                                <td data-label="Cup">${saturacion.cupo}</td>
                                <td data-label="In">${saturacion.inscritos}</td>
                            </tr> `;
                }else{if(cont==(tama??oSaturacion)-1){
                    cont++;
                    template += `
                    <tr class="text-center">
                        <td data-label="Clave Asig">${saturacion.codigo}</td>
                        <td data-label="Nombre">${saturacion.nombre}</td>
                        <td data-label="Gpo">${saturacion.nombre_grupo}</td>
                        <td data-label="Se">${saturacion.semestre}</td>
                        <td data-label="Cr">${saturacion.creditos}</td>
                        <td data-label="Cup">${saturacion.cupo}</td>
                        <td data-label="In">${saturacion.inscritos}</td>
                    </tr> `;
                }else{
                            cont++;
                    template += `
                <tr class="text-center">
                                <td data-label="Clave Asig">${saturacion.codigo}</td>
                                <td data-label="Nombre">${saturacion.nombre}</td>
                                <td data-label="Gpo">${saturacion.nombre_grupo}</td>
                                <td data-label="Se">${saturacion.semestre}</td>
                                <td data-label="Cr">${saturacion.creditos}</td>
                                <td data-label="Cup">${saturacion.cupo}</td>
                                <td data-label="In">${saturacion.inscritos}</td>
                            </tr> <tr class="text-center">
                    <th style="width: 100px;">Clave Asig</th>
                    <th style="width: 600px;">Nombre</th>
                    <th style="width: 106px;">Gpo.</th>
                    <th style="width: 70px;">Se.</th>
                    <th style="width: 70px;">Cr.</th>
                    <th style="width: 93px;">Cupo</th>
                    <th style="width: 70px;">In</th>
                </tr>`;
                        }}}
            });
            $("#tbl-asignaciones").html(template);
            $("#idPlanAlum").html("Plan de estudios: "+$("#idPlan").val());
        }
        }
    });
}