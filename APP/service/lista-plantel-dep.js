$(document).ready(function(){
    listaplantelesdep();
    listaDepartamentos();
    //tblDeptoEstatus();
    
});
/* LISTA PLANTELES -------------------------*/
function listaplantelesdep(){
    $.ajax({
        url: "../webhook/lista_plantel.php",
        type:'POST',
        data : {id_plantel:$("#idPlantel").val()},
        success: function (response){
            let PLANTELDEP =JSON.parse(response);
            console.log(PLANTELDEP);
            let template="";
            PLANTELDEP.forEach(planteldep=>{
                template += `<tr class="text-center">
                        <td data-label="Clave">${planteldep.id_plantel}</td>
                        <td data-label="Nombre Plantel">${planteldep.nombre}</td>
                        <td data-label="Acciones">
                            <a href="./ag-departamento.php?idPlantel=${planteldep.id_plantel}"><button type="button" title="Ver Departamentos" class="btn btn-info"><i class='bx bx-show'></i></button>
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
        data : {id_plantel:$("#idPlantel").val()},                           
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
                                <button type="submit" title="Editar departamento" class="btn btn-success" onclick="editarDepart('${departamento.id_departamento}','${departamento.nombre}');"><i class='bx bxs-pencil'></i></button>
                                <button type="submit" title="Elimina departamento" class="btn btn-danger" onclick="eliminaDepto('${departamento.id_departamento}');" ><i class='bx bx-trash'></i></button>
                                </td>
                            </tr>`;    
            });
            $("#tbl-departamentos").html(template);
        } 
    }); 
}
//ELIMINA DEPARTAMENTO -------------------------------------------------------------------
function eliminaDepto(id_departamento){
    $("#Modal_baja_depto").modal('show');
    $("#idDepartamento").val(id_departamento);
   $("#frm_baja_deptos").on("submit", function(e){

    var f = $(this);
    var formData = new FormData(document.getElementById("frm_baja_deptos"));
            formData.append("id_departamento", $("#clave_depto").val());
            formData.append("estatus", "2");
            $.ajax({
                url: "../webhook/elimina_departamento.php",
                type: 'POST',
                data: formData,
                dataType: "html",
                cache: false,
                contentType: false,
                processData: false
    })
        .done(function(res){
            listaDepartamentos();
            console.log(res);
            window.location.reload();
        $("#frm_baja_deptos").trigger('reset');
        $("#Modal_baja_depto").modal('hide');
        });
    e.preventDefault();
});   

}


// EDITA DEPARTAMENTO -------------------------------------------------------------------
function editarDepart(id_departamento, nombre){
   $('#depto_edit_Modal').modal('show');
   //Todas las variables que se pueden editar en el modal
   $("#clave_depto").val(id_departamento);
   $("#nombre_depto").val(nombre);
    $("#frm_m_edit_departamento").on("submit", function(e){
    //var f = $(this);
    var formData = new FormData(document.getElementById("frm_m_edit_departamento"));
    formData.append("dato", "valor");
    formData.append("id_plantel", $("#idPlantel").val());
    formData.append("estatus", "1");
    formData.append("id_depto", id_departamento);
    $.ajax({
        url: "../webhook/modifica_departamento.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    })
        .done(function(res){
        //Ocultar modal, resetear form y cargar lista
        console.log(res);
        $("#frm_m_edit_departamento").trigger('reset');
        $("#depto_edit_Modal").modal('hide');
        listaDepartamentos();        
        });
    e.preventDefault();
});
}

//AGREGA DEPARTAMENTO -----------------------------------------------------
$("#frm_m_a_departamento").on("submit", function(e){
    var f = $(this);
    var formData = new FormData(document.getElementById("frm_m_a_departamento"));
    formData.append("dato", "valor");
    formData.append("id_plantel", $("#idPlantel").val());
    $.ajax({
        url: "../webhook/add_departamento.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    }) 
        .done(function(res){
        console.log(res);
        if(res!=1){
            
            $.ajax({
                url: "../webhook/modifica_departamento.php",
                type: 'POST',
                data: formData,
                dataType: "html",
                cache: false,
                contentType: false,
                processData: false
            })
            .done(function(res){
            listaDepartamentos();
            console.log(res);
            $("#frm_m_a_departamento").trigger('reset');
            $("#Add_depto_Modal").modal('hide');
            });
        
        }else{
            listaDepartamentos();
        $("#frm_m_a_departamento").trigger('reset');
        $("#Add_depto_Modal").modal('hide');
        }});
    e.preventDefault();
}); 

//CONDICIONES ----------------------------------------------------------------------------


/*


// Condicion para estatus ------------------------------------------------------
function tblDeptoEstatus(DEPARTAMENTOS){
    
$.ajax({
        url: "../webhook/lista_departamento.php",
        type: 'POST',
        data : {id_plantel:$("#idPlantel").val()},
        success: function (response) {
            //Convertimos el string a JSON
            let DEPARTAMENTOS = JSON.parse(response);  
            let tblestausdep="";
            let cont=0;
            DEPARTAMENTOS.forEach(departamento=>{
                if(DEPARTAMENTOS[cont].estatus==1){
                tblestausdep += `
                        <tr class="text-center">
                            <td id="clave_depto" data-label="Clave">${departamento.id_departamento}</td>
                            <td id="nombre_depto" data-label="Nombre">${departamento.nombre}</td>
                            <td data-label="Acciones">
                                <button type="submit" title="Editar departamento" class="btn btn-success" onclick="editarDepart('${departamento.id_departamento}','${departamento.nombre}');"><i class='bx bxs-pencil'></i></button>
                                <button type="submit" title="Elimina departamento" class="btn btn-danger" onclick="eliminaDepto('${departamento.id_departamento}');" ><i class='bx bx-trash'></i></button>
                                </td>
                            </tr>
                        `;
                        
                    }else{
                    }
            });
            $("#tbl-departamentos").html(tblestausdep);
            }
        });      
}

//Condicion para campos vacios ------------------------------------------------------------------


//Condicion de que sean 15 caracteres los 1eros 4 numeros (el 1er numero que sea del area) y los demas letras 
var myInputD = document.getElementById("clave_depto");
  var letter = document.getElementById("letter");
  var capital = document.getElementById("capital");
  var number = document.getElementById("number");
  var length = document.getElementById("length");
  var a;
  var b;
  var c;
  var d;

// When the user starts to type something inside the password field
myInputD.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInputD.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
    a=1;
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
    a=0;
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInputD.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
    b=1;
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
    b=0;
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInputD.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
    c=1;
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
    c=0;
  }
  
  // Validate length
  if(myInputD.value.length >= 15) {
    length.classList.remove("invalid");
    length.classList.add("valid");
    d=1;
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
    d=0;
  }
}

//Condicion de que si no se han llenado los campos del modal mande un mensaje 
$("#frm_m_a_departamento").on("submit", function(e){
      if(a==1 && b==1 && c==1 && d==1){
//CONDICION DE QUE LOS CAMPOS NO DEBEN ESTAR VACIOS
            if($('#clave_depto').val()==''){
                alert("Entre");
            }else{
                var formData = new FormData(document.getElementById("frm_m_a_departamento"));
                formData.append("clave_depto", $("#clave_depto").val());
                formData.append("nombre_depto", $("#nombre_depto").val());
                $.ajax({
                  url: "../webhook/pwd-update.php",
                  type: 'POST',
                  data : formData,
                  dataType: "html",
                  cache: false,
                  contentType: false,
                  processData: false
                })
                .done(function(res){
                  console.log(res);
                  if(res){
                    $("#msjCorrecto").show();
                    $("#msjIncorrecto").hide();
                    $("#btnConfirmarContra").trigger("click");
                    $("#aceptar").click(function(){
                        document.location.href = "../view/seguridad.php";
                     });
                  } else{
                    $("#msjIncorrecto").show();
                     $("#msjCorrecto").hide();
                     $("#btnConfirmarContra").trigger("click");
                     $("#aceptar").click(function(){
                        $("#Modal_Cambio_Con").modal('hide');
                     });
                  }
                  $("#frm_m_a_departamento").trigger('reset');
                  $("#exampleModalLong").modal('hide');
                });
        
                e.preventDefault();
   
            } else {
          }}else{
            }
});

//Condicion de que si no se ah modificado nada mande un mensaje que esta igual


//

*/