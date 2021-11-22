<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../css/styles_menu.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <title>Seguridad</title>
</head>
<body id="body">
    <?php
    include "./includes/sidebar.php";
    ?>
    <div class="home_content">
        <header>
            <div class="icon_menu">
                <i class='bx bx-menu' id="btn"></i>
            </div>
            <div class="titulo">
                <title1 class="UNAM"><center></center></title1>
                <title2 class="fesc"><center><br></center></title2>
            </div>
        </header>
	




	<!--              AQUI VA EL CONTENIDO                -->
	
		<div class="text"> 
            <form>
                <div class="">
                    <div class="row">
                        <div class="">
                                <a href="http://localhost/SIFESC/APP/view/index.php"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                                    </svg>
                                </a>
                        </div>        
                    </div>    
                        <div class="row">
                            <div class="col-9 mx-auto">  
                                <p class="mb-4"></p>
                                <h3 id="head3">Añada su correo electrónico para la recuperación de su cuenta</h3>
                                <p class="mt-3 mb-4"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5 mx-auto">
                                <input type="email" class="form-control mb-3 mt-3" style="height: 55px;" id="floatingInput" placeholder="Introduzca su correo:" required="" autofocus=""> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-5 mx-auto">
                                    <input type="text" class="form-control" style="height: 55px;" id="cf_correo" placeholder="Confirme su correo:" required="" autofocus="">
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 mb-2"></div>
                        <div class="d-grid gap-2 col-3 mx-auto">
                            <div class="modal-content">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                          Confirmar
                                </button>
                            </div>
                            <p class="mt-3 mb-2"></p>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">¡ATENCIÓN!</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <div class="mt-3 mb-2"></div>
                                      <label>Se ha enviado un correo de confirmación a la direccion: AQUI IRIA EL CORREO AGREGADO</label>
                                       </form>
                                    </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                    </div>
                        <div class="row">
                            
                            <div class="col-6 mx-auto">
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect">
                                        <option hidden=""></option>
                                        <option value="1">¿Como se llama su mamá?</option>
                                        <option value="2">¿Cual es el nombre de su primer mascota?</option>
                                        <option value="3">¿Cual es el nombre de su escuela primaria?</option>
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
                               <!-- Modal -->
                            <div class="modal fade" id="RespModal" tabindex="-1" aria-labelledby="RespModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="RespModalLabel">¡ATENCIÓN!</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <div class="mt-3 mb-2"></div>
                                      <label> Tus respuestas se han guardado satisfactoriamente</label>
                                       </form>
                                    </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                    </div> 



</div>





                </div>                
            </form>
        	</div>
		</div>
	</div>
	<script>
		let btn = document.querySelector("#btn");
		let sidebar = document.querySelector(".sidebar");

		btn.onclick = function(){
		sidebar.classList.toggle("active");
		}

	</script>
	<!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFY lzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>