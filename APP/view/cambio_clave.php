<!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Menú responsivo UNAM</title>
	<link rel="stylesheet" type="text/css" href="../../css/styles_menu.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<meta charset="utf-8">

</head>
<body id="body">
	<?php
	include "./includes/sidebar2.php";
	?>
	<!--              AQUI VA EL CONTENIDO                -->
	
	<div class="home_content2">
		<div class="texthome">
		<div class="row">
			<div class="mt-3">
				<a href="http://localhost/SIFESC/APP/view/index.php"> 
					<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi    bi-arrow-left-circle" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
					</svg>
				</a>
			</div>        
		</div>
		
		<div class="modal-dialog text-center">


			<div class="col-sm-8 main-section">
				<div class="titulo">
			<h3> Cambio de contraseña</h3> 
		</div>
				<div class="modal-content">
					<div class="col-12">
						<div class="container">
						</div>
					</div>
					<div class="mt-3 mb-2"></div>
					<div class="form-group" id="actual-pass-group">
						<input type="text" placeholder="Contraseña actual" class="form-control">
					</div>
					<div class="mt-3 mb-2"></div>
					<div class="form-group" id="password-group">
						<input type="password" placeholder="Contraseña nueva" class="form-control">
					</div>
					<div class="mt-3 mb-2"></div>
					<div class="form-group" id="password-group">
						<input type="password" placeholder="Confirma contraseña" class="form-control">
					</div>
					<div class="mt-3 mb-2"></div>
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalLong">
						Cambiar contraseña
					</button>

					<!-- Modal -->
					<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Confirmar cambio</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									Estas a punto de cambiar tu contraseña actual, ¿Estas seguro de que deseas continuar?
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary" data-dismiss="modal">Regresar</button>
									<button type="button" class="btn btn-danger">Continuar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<script>
		
		let arrow = document.querySelectorAll(".arrow");
		console.log(arrow);
		for (var i = 0; i < arrow.length; i++) {
			arrow[i].addEventListener("click",(e)=>{
				let arrowParent = e.target.parentElement.parentElement;
				
				arrowParent.classList.toggle("showMenu");

			});
		}

		let sidebar = document.querySelector(".sidebar");
		let sidebarBtn = document.querySelector(".bx-menu");
		console.log(sidebarBtn);

		sidebarBtn.addEventListener("click", ()=>{
			sidebar.classList.toggle("close");
		});


	</script>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

		<!--   Datatables-->
		<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>

		<!-- extension responsive -->
		<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>



		<script>
			$(document).ready(function() {
				$('#example').DataTable({
					responsive: true
				});
			} );

		</script>

	</body>
	</html>
