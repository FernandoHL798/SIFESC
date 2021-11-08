<!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Menú responsivo UNAM</title>
	<link rel="stylesheet" type="text/css" href="../../css/styles_menu.css">

	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<meta charset="utf-8">
</head>
<body id="bodyseg">
	<?php
include "./includes/sidebar.php";
	?>


	<header>
		<div class="icon_menu">
			<i class='bx bx-menu' id="btn"></i>
		</div>
		<div class="UNAMFESC">

			<title1 class="UNAM"><center>UNIVERSIDAD NACIONAL AUTONOMA DE MÉXICO</center></title1>
			<title2 class="fesc"><center><br>Facultad de Estudios Superiores Cuautitlán</center></title2>

			</div>
	</header>




	<!--              AQUI VA EL CONTENIDO                -->
	<div class="home_content">
		<div class="text">
			<div class="px-lg-5 pt-lg-4 p-4 w-100 align-self-center mb-4 mx-auto"> 
            <form>
                <div class="container">
                    <div class="row">
                        <div class="col-3 mt-3 p-2">
                                <a href="www.google.com"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                                    </svg>
                                </a>
                        </div>        
                    </div>    
                        <div class="row">
                            <div class="col mb-4 mt-3">  
                                <p class="mb-4"></p>
                                <h3 id="head3">Añada su correo electrónico para la recuperación de su cuenta</h3>
                                <p class="mt-3 mb-2"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4">
                                <div class="form-floating mx-auto">
                                    <input type="text" class="form-control mb-2" id="correo" placeholder="Correo" required="" autofocus="">
                                    <label for="floatingPassword">Introduzca su correo electronico:</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4">
                                <div class="form-floating mx-auto">
                                    <input type="text" class="form-control mb-2" id="cf_correo" placeholder="Confirmacion de correo" required="" autofocus="">
                                    <label for="floatingPassword">Confirme su correo:</label>
                                </div>
                            </div>
                        </div>
                    <div class="mt-3 mb-2"></div>
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#miModal" >Confirmar</button>
                        <p class="mt-3 mb-2"></p>
                    <!-- Modal -->
                        <div class="modal fade" id="miModal" tabindex="-1" aria-labelledby="miModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Atención</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    Favor de confirmar el corrreo enviado a: 
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Aceptar</button>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-3"></div>
                            <div class="col-lg-6">
                                <div class="form-floating mx-auto">
                                    <select class="form-select" id="preg_s">
                                        <option hidden=""></option>
                                        <option value="1">¿Como se llama su mamá?</option>
                                        <option value="2">¿Cual es el nombre de su primer mascota?</option>
                                        <option value="3">¿Le gusta el jamon?</option>
                                    </select>
                                        <label for="floatingSelect">Seleccione una pregunta secreta</label>
                                </div>

                            </div>
                        </div>
                        <div class="mt-3 mb-2"></div>
                        <div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4">
                                <div class="form-floating mx-auto">
                                    <input type="text" class="form-control mb-2" id="res" placeholder="Correo" required="">
                                    <label for="floatingPassword">Agregue su respuesta:</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4">
                                <div class="form-floating mx-auto">
                                    <input type="text" class="form-control mb-2" id="cf_res" placeholder="Confirmacion de correo" required="">
                                    <label for="floatingPassword">Confirme su respuesta:</label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 mb-2"></div>
                            <div class="d-grid gap-2 col-3 mx-auto">
                                <button class="btn btn-primary mt-2" type="button">Confirmar</button>
                                <p class="mt-3 mb-2"></p>
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

</body>
</html>