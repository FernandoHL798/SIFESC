$(document).ready(function(){
	console.log("Escuchando Acciones");
    cargaDatosProfesor();
});

function cargaDatosProfesor(){
    $.ajax({
        url: "../webhook/lista_profesor.php",
        type: 'POST',
        data : { idProfesor: $("#idUsuario").val()},
        success: function (response) {
            //Convertimos el string a JSON
            let PROFESORES = JSON.parse(response);  
            console.log(PROFESORES);
            let profesor= PROFESORES[0];
            $("#nombre_profesor").html(profesor.nombre_profesor+" "+profesor.primer_apellido+" "+ profesor.segundo_apellido);
            $("#rfc_profesor").html(profesor.cuenta_profesor);
            $("#nombre_plantel").html(profesor.id_plantel+" - "+profesor.nombre_plantel);
            //se generan apartados con otras peticiones
            //Generamos las tablas de los grupos.
            consultaGruposProfesor();
            }
    });
}

function consultaGruposProfesor(){
    $.ajax({
        url: "../webhook/lista_grupos.php",
        type: 'POST',
        data : {   idAsignatura:"0",
                   idProfesor: $("#idUsuario").val()},
        success: function (response) {
            //Convertimos el string a JSON
            let GRUPOS = JSON.parse(response);  
            console.log(GRUPOS);
            let template="";
            let cont=0;
	        GRUPOS.forEach(grupo => {
                cont++;
                template += `
                <tr>
                    <td data-label="NÚMERO">${cont}</td>
                    <td data-label="PLAN DE ESTUDIOS">${grupo.id_plan}</td>
                    <td data-label="CARRERA">${grupo.nombre_carrera}</td>
                    <td data-label="CLAVE. ASIGNAT.">${grupo.codigo}</td>
                    <td data-label="NOM. ASIGNAT">${grupo.nombre_asignatura}</td>
                    <td data-label="GRUPO">${grupo.nombre_grupo}</td>
                    <td data-label="TIPO GRUPO">ORDINARIO</td>
                    <td data-label="SEMESTRE">${grupo.semestre}</td>
                    <td data-label="Inscritos">${grupo.inscritos}</td>
                    <td class="text-center">
                        <a href="./grupos_profesores_alumnos.php?idAsignacion=${grupo.id_asignacion}"><button type="button" title="Ver Grupo" class="btn btn-info btn-sm col-6 mx-auto"><i class='bx bx-show'></i></button></a>
                    </td>
              </tr>

                `;    
            });
            $("#tbl-grupos-profesor").html(template);
            
            }
            
    });
}