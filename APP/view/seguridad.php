<?php include_once "./includes/session_verify.php";?>
<!DOCTYPE html>
<html>
<?php $titulo="Seguridad | SIFESC";
include_once "./includes/header.php";?>
<body id="body">
      <?php
      include "./includes/sidebar2.php";
      ?>

      <!--              AQUI VA EL CONTENIDO                -->
      <div class="home_content2">
        <div class="texthome"> 
          <form>
            <div class="">
              <div class="grid">
                <div class="">
                  <a href="http://localhost/SIFESC/APP/view/index.php" title="Volver"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi    bi-arrow-left-circle" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                    </svg>
                  </a>
                </div>
                <div>
                  <h3 id="head3" class="text-center">Configuración de seguridad</h3>
                </div>
                <!-- RELOJ FUNCIONAL Y BONITO ------------------------------------------------------------ -->
                <div class="widget_clock">
                  <div class="reloj_clock">
                    <p id="horas_clock" class="horas_clock"></p>
                    <p>:</p>
                    <p id="minutos_clock" class="minutos_clock"></p>
                    <p>:</p>
                    <div class="cajaSegundos">
                      <p id="segundos_clock" class="segundos_clock"></p>
                    </div>
                    <p id="ampm" class="ampm"></p>
                  </div>
                  <!-- RELOJ FUNCIONAL Y BONITO ------------------------------------------------------------ -->      
                </div>       
              </div> 
              <div class="mt-2 mb-2">
              </div>
              <p class="text-center mb-4">La pregunta secreta es una medida de seguridad, ya que en caso de olvidar tu contraseña, con ella es posible identificarte. </p> 
              <div class="mt-5 mb-2"></div>
              <div class="row mt-5 mb-4">
                <div class="col-6 mx-auto">
                  <div class="form-floating">
                    <select class="form-select" id="floatingSelect">
                      <option hidden=""></option>
                      <option value="1">¿Cuál es tu color favorito?</option>
                      <option value="2">¿Cuál es el nombre de su primer mascota?</option>
                      <option value="3">¿Cuál es el nombre de su escuela primaria?</option>
                    </select>
                    <label for="floatingSelect"><font SIZE=3>Seleccione una pregunta secreta</font></label>
                  </div>
                </div>
                <div class="mt-3 mb-2"></div>
                <div class="row">
                  <div class="col-5 mx-auto">
                    <input type="email" class="form-control mt-2" style="height: 55px;" id="floatingInput" placeholder="Introduzca su respuesta:" required="" autofocus=""> 
                  </div>
                </div>
                <div class="mt-3 mb-2"></div>
                <div class="row">
                  <div class="col-5 mx-auto">
                    <input type="email" class="form-control" style="height: 55px;" id="floatingInput" placeholder="Confirme su respuesta:" required="" autofocus=""> 
                  </div>
                </div>
                <div class="mt-3 mb-2"></div>
                <div class="d-grid gap-2 col-3 mx-auto">



                  <div class="modal-content">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#RespModal">
                      Confirmar
                    </button>
                  </div>
                  <p class="mt-3 mb-2"></p>
                  <div class="mb-4"></div>

                </div> 

              </div>

            </div>                
          </form>
        </div>
      </div>
    </div>
    <!-- JavaScripts-->
    <?php include_once "./includes/js.php"; ?>
    <!-- PHP DE MODALES -->
    <?php include "./modal/modal-avs-pregunta.php"; ?>


</body>
</html>