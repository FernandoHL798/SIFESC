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
                    <div class="grid mt-3 mb-4">
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
                        <div class="clock">
                          <div class="hours">
                            <div class="first">
                              <div class="number">0</div>
                            </div>
                            <div class="second">
                              <div class="number">0</div>
                            </div>
                          </div>
                          <div class="tick">:</div>
                          <div class="minutes">
                            <div class="first">
                              <div class="number">0</div>
                            </div>
                            <div class="second">
                              <div class="number">0</div>
                            </div>
                          </div>

                          <!--PROBLEMAS CON EL SEGUNDERO, NO LO AGREGO POR EL MOMENTO (EMMANUEL)
                          <div class="tick">:</div>
                          <div class="seconds">
                            <div class="first">
                              <div class="number">0</div>
                            </div>
                            <div class="second infinite">
                              <div class="number">0</div>
                            </div>
                          </div>
                            -->
                        </div>     
                    </div>  
                        
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

    <!-- SCRIPTS -->
        
        <script src="../tools/sidebar.js"></script>
        <script src="../tools/clock.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFY lzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- LIBRERIA AJAX requeried-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="../service/lista-alumno.js"></script>

    <!-- PHP DE MODALES -->
    <?php include "./modal/modal-avs-pregunta.php"; ?>


</body>
</html>