$(document).ready(function(){

  $("#frm_m_a_plan_estudios").on("submit", function(e){
       var f = $(this);
      var formData = new FormData(document.getElementById("frm_m_a_plan_estudios"));
      formData.append("dato", "valor");
      $.ajax({
          url: "../webhook/add_planestudios.php",
          type: 'POST',
          dataType: "html",
          data: formData,
          cache: false,
          contentType: false,
          processData: false
      })
          .done(function(res){
          console.log(res);
          $("#frm_m_a_plan_estudios").trigger('reset');
          $("#Agrega_Plan").modal('hide');
          listaProfesores();
          });


  });

  });
