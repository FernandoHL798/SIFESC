$(document).ready(function(){
    $("#periodo").change(function(){
            var idPeriodo=$("#periodo").val();
            consultaGruposProfesor(idPeriodo);
        });
    periodo();
    let Prof1=0;
    cargaDatosProfesor(Prof1);
    cargaDeptoProfesor(Prof1);
    let conta=0;
});

function periodo(){
    $.ajax({
        url: "../webhook/lista_periodo.php",
        type: 'POST',
        data : {    },
        success: function (response) {
            //Convertimos el string a JSON
            let PERIODOS = JSON.parse(response);  
            let cont=0;
            let template="";
            PERIODOS.forEach(periodo=>{
                if(cont<5){
                    cont++;
                template += `
                        <option value="${periodo.id_periodo}">${periodo.periodo}</option>
                `;   
                }
                
            });
            $("#periodo").html(template);
            }
        });
}

function cargaDatosProfesor(Prof1){
    $.ajax({
        url: "../webhook/lista_profesor.php",
        type: 'POST',
        data : { idProfesor: $("#idUsuario").val()},
        success: function (response) {
            //Convertimos el string a JSON
            let PROFESORES = JSON.parse(response);  
            console.log(PROFESORES);
            let profesor= PROFESORES[0];
            $("#nombre_profesor").html(profesor.primer_apellido+" "+ profesor.segundo_apellido+" "+ profesor.nombre_profesor);
            $("#rfc_profesor").html(profesor.cuenta_profesor);
            $("#nombre_plantel").html(profesor.id_plantel+" - "+profesor.nombre_plantel);
            }
    });
    cargaNombreProfesor(Prof1);
}

function cargaNombreProfesor(Prof1){
    if(Prof1==0){
    $.ajax({
        url: "../webhook/lista_nombreProfesor.php",
        type: 'POST',
        data : { idProfesor: $("#idUsuario").val()},
        success: function (response) {
            //Convertimos el string a JSON
            let PROFESOR = JSON.parse(response);
            let profe= PROFESOR[0];
            console.log(PROFESOR);
            $("#nombre_profesor").html(profe.primer_apellido+" "+ profe.segundo_apellido+" "+profe.nombre);
            $("#rfc_profesor").html(profe.cuenta_profesor);
            }
    });}
}

function cargaDeptoProfesor(){
    $.ajax({
        url: "../webhook/lista_profesordepartamento.php",
        type: 'POST',
        data : { idUsuario: $("#idUsuario").val()},
        success: function (response) {
            //Convertimos el string a JSON
            let DEPTOS = JSON.parse(response);  
            console.log(DEPTOS);
             let dep="";
             let cont=0;
             DEPTOS.forEach(deptos => {
                if(cont==0){
                    cont++;
                    dep = deptos.nombre;
                }else{
                    cont++;
                    dep = dep+", "+deptos.nombre;
                }
                });
             $("#deptos").html(dep);
            //se generan apartados con otras peticiones
            //Generamos las tablas de los grupos.
            }
    });
}

function consultaGruposProfesor(idPeriodo){
    $.ajax({
        url: "../webhook/lista_grupos_periodo.php",
        type: 'POST',
        data : {   idAsignatura:"0",
                   idProfesor: $("#idUsuario").val(),
                idPeriodo: idPeriodo},
        success: function (response) {
            //Convertimos el string a JSON
            let GRUPOS = JSON.parse(response);
            let template="";
            let cont=0;
            let ins=0;
	        GRUPOS.forEach(grupo => {
                ins= parseInt(ins)+parseInt(grupo.inscritos);
                cont++;
                if(grupo.tipo==1){
                    tipoG='Ordinario';
                }else{
                    if(grupo.tipo==2){
                        tipoG='Extraordinario';
                    }else{
                        tipoG='No definido';
                    }
                }
                template += `
                <tr>
                    <td data-label="NÚMERO">${cont}</td>
                    <td data-label="PLAN DE ESTUDIOS">${grupo.id_plan}</td>
                    <td data-label="CARRERA">${grupo.nombre_carrera}</td>
                    <td data-label="CLAVE. ASIGNAT.">${grupo.codigo}</td>
                    <td data-label="NOM. ASIGNAT">${grupo.nombre_asignatura}</td>
                    <td data-label="GRUPO">${grupo.nombre_grupo}</td>
                    <td data-label="TIPO GRUPO">${tipoG}</td>
                    <td data-label="SEMESTRE">${grupo.semestre}</td>
                    <td data-label="Inscritos">${grupo.inscritos}</td>
                    <td class="text-center">
                        <a href="./grupos_profesores_alumnos.php?idAsignacion=${grupo.id_asignacion}"><button type="button" title="Ver Grupo" class="btn btn-info btn-sm col-6 mx-auto"><i class='bx bx-show'></i></button></a>
                    </td>
              </tr>

                `;    
            });
            $("#tbl-grupos-profesor").html(template);
            $("#total_alum").html(ins);
            if(cont==0){
                document.getElementById('aviso').style.display = 'block';
            } else{
                document.getElementById('aviso').style.display = 'none';
            }}   
    });
    
}