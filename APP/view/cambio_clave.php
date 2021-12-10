<?php include_once "./includes/session_verify.php";?>
<!DOCTYPE html>
<html>
<?php $titulo="Seguridad | SIFESC";
include_once "./includes/header.php"; ?>

      <body id="body">
        <?php
        include "./includes/sidebar2.php";
        ?>

        <!--              AQUI VA EL CONTENIDO                -->
        <div class="home_content2">
          <div class="texthome"> 
            <form id="frm-verifica-contra">
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
                    <h3 id="head3" class="text-center">Cambio de contraseña</h3>
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
                <div class="mt-3 mb-2"></div>
              </div>
              <div class="row">      
                <div class="mt-3 mb-2"></div>
                <div class="row">
                  <div class="col-5 mx-auto">
                    <input type="password" class="form-control mt-2" style="height: 55px;" id="floatingInput" placeholder="Contraseña actual:" required="" autofocus=""> 
                  </div>
                </div>
                <div class="mt-3 mb-2"></div>
                <div class="row">
                  <div class="col-5 mx-auto">
                    <label for="psw"></label>
                    <input type="password" class="form-control mb-2" placeholder="Ingresa tu nueva contraseña:" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    <span id="mensaje"></span>

                  </div>
                </div>
                <div id="aviso_restr" class="col-5 mx-auto">
                  <h4 class="titulo_restr text-left" 
                  >La contraseña debe tener lo siguiente:</h4>
                  <p class="text-left" id="letter" class="invalid">Una letra <b>MINÚSCULA</b></p>
                  <p class="text-left" id="capital" class="invalid">Una letra <b>MAYÚSCULA</b></p>
                  <p class="text-left" id="number" class="invalid">Un <b>NÚMERO</b></p>
                  <p class="text-left" id="length" class="invalid">Mínimo de <b>8 caracteres</b></p>
                </div>

                <div class="mt-3 mb-2"></div>
                <div class="row">
                  <div class="col-5 mx-auto">
                    <input type="password" class="form-control mb-2" placeholder="Confirma tu contraseña:" id="exampleInputPassword1">
                  </div>
                </div>
                <div class="mt-3 mb-2"></div>
                <div class="d-grid gap-2 col-3 mx-auto">



                  <div id="btnConfirmarContra" class="d-none">
                  <div class="modal-content">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalLong" id="confirmarContra">
                      Confirmar
                    </button>
                  </div>
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

      <script src= ../service/verifica-contra.js></script>
      <script src="../tools/restriccionClave.js"></script>
      <!-- SCRIPTS -->
      <?php include_once "./includes/js.php";?>

      <?php include "./modal/modal-confirma-cambio-contra.php"; ?>



      </body>
    </html>
