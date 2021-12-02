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
    include "./includes/sidebar2.php";
    ?>
    
	<!--              AQUI VA EL CONTENIDO                -->
	<div class="home_content2">
		<div class="texthome"> 
            <form>
                <div class="">
                    <div class="row">
                        <div class="">
                                <a href="http://localhost/SIFESC/APP/view/index.php" title="Volver"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                                    </svg>
                                </a>
                        </div>        
                    </div>    
                    <div class="row">
                          
                            <p class="mb-4"></p>
                            <h3 id="head3" class="text-center">Cambio de Contraseña</h3>
                            <p class="mt-3 mb-4"></p>
                    </div>   
                    <div class="mt-3 mb-2"></div>
                        </div>
                        <div class="row">      
                        <div class="mt-3 mb-2"></div>
                        <div class="row">
                            <div class="col-5 mx-auto">
                                <input type="email" class="form-control mt-2" style="height: 55px;" id="floatingInput" placeholder="Contraseña actual:" required="" autofocus=""> 
                                </div>
                            </div>
                            <div class="mt-3 mb-2"></div>
                        <div class="row">
                            <div class="col-5 mx-auto">
                                <input type="email" class="form-control" style="height: 55px;" id="floatingInput" placeholder="Contraseña nueva:" required="" autofocus=""> 
                                </div>
                            </div>
                        <div class="mt-3 mb-2"></div>
                        <div class="row">
                            <div class="col-5 mx-auto">
                                <input type="email" class="form-control" style="height: 55px;" id="floatingInput" placeholder="Confirmar contraseña :" required="" autofocus=""> 
                                </div>
                            </div>
                        <div class="mt-3 mb-2"></div>
                        <div class="d-grid gap-2 col-3 mx-auto">




                            <div class="modal-content">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFY lzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

		<script>
			$(document).ready(function() {
				$('#example').DataTable({
					responsive: true
				});
			} );

		</script>
		<?php include "./modal/modal-confirma-cambio-contra.php"; ?>
	</body>
	</html>
