<!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Menú responsivo UNAM</title>
	<link rel="stylesheet" type="text/css" href="../../css/styles_menu.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

	<meta charset="utf-8">
</head>
<body id="body">
	<?php
include "./includes/sidebar.php";
	?>

	<!--              AQUI VA EL CONTENIDO                -->
	<div class="home_content">
		<div class="text">
			<div class="titulo">
		SISTEMA DE INSCRIPCIÓN
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<table id="example" class="table table-bordered">
					<thead>
						<tr class="informacion" id="informacion">
							<th colspan="2">NÚMERO DE CUENTA:
								<div class="datos_personales">314243919</div>
							</th>
							<th colspan="4">NOMBRE:
								<div class="datos_personales">
									EMMANUEL MARTÍNEZ HERNÁNDEZ
								</div>
							</th>
							<th colspan="1">AÑO DE INGRESO:
								<div class="datos_personales">
									2019
								</div>
							</th>
							<th colspan="1">CARRERA:
								<div class="datos_personales">
									308
								</div>
							</th>
						</tr>
						<tr>
							<th colspan="3">PLANTEL:
								<div class="datos_personales">
									106 - F.E.S. CUAUTITLÁN (CONTADURIA)
								</div>
							</th>
							<th colspan="4">PLAN DE ESTUDIOS:
								<div class="datos_personales">
									1119 - LICENCIADO EN INFORMÁTICA
								</div>
							</th>
							<th colspan="1">NO SE QUE VA AQUI</th>
						</tr>
						<tr class="informacion" id="informacion">
							<th>NO</th>
							<th>CLAVE</th>
							<th>NOMBRE DE LA ASIGNATURA</th>
							<th>CRED.</th>
							<th>SEM.</th>
							<th>GPO.</th>
							<th>MOV.</th>
							<th>ACCION</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td data-label="NÚMERO">1</td>
							<td data-label="CLAVE">1305</td>
							<td data-label="NOMBRE ASIGNATURA">INFORMÁTICA VI</td>
							<td data-label="CREDITOS">12</td>
							<td data-la data-label="SEMESTRE">7</td>
							<td data-label="GRUPO">1701</td>
							<td data-label="MOVIMIENTO">ALTA</td>
							<td>
								<button type="button" class="btn btn-danger btn-sm d-grid gap-2 col-6 mx-auto">
									<i class='bx bx-trash'></i>
								</button>
							</td>
						</tr>
						<tr>
							<td data-label="NÚMERO">2</td>
							<td data-label="CLAVE">1307</td>
							<td data-label="NOMBRE ASIGNATURA">MATEMATICAS VI</td>
							<td data-label="CREDITOS">8</td>
							<td data-la data-label="SEMESTRE">7</td>
							<td data-label="GRUPO">1701</td>
							<td data-label="MOVIMIENTO">ALTA</td>
							<td>
								<button type="button" class="btn btn-danger btn-sm d-grid gap-2 col-6 mx-auto">
									<i class='bx bx-trash'></i>
								</button>
							</td>
						</tr>
						<tr>
							<td data-label="NÚMERO">3</td>
							<td data-label="CLAVE">1304</td>
							<td data-label="NOMBRE ASIGNATURA">LABO. SISTEMAS COMP. VI</td>
							<td data-label="CREDITOS">12</td>
							<td data-la data-label="SEMESTRE">7</td>
							<td data-label="GRUPO">1701</td>
							<td data-label="MOVIMIENTO">ALTA</td>
							<td>
								<button type="button" class="btn btn-danger btn-sm d-grid gap-2 col-6 mx-auto">
									<i class='bx bx-trash'></i>
								</button>
							</td>
						</tr>
						<tr>
							<td data-label="NÚMERO">4</td>
							<td data-label="CLAVE">1311</td>
							<td data-label="NOMBRE ASIGNATURA">SEMINARIO DE INVESTIGACIÓN</td>
							<td data-label="CREDITOS">8</td>
							<td data-la data-label="SEMESTRE">7</td>
							<td data-label="GRUPO">1701</td>
							<td data-label="MOVIMIENTO">ALTA</td>
							<td>
								<button type="button" class="btn btn-danger btn-sm d-grid gap-2 col-6 mx-auto">
									<i class='bx bx-trash'></i>
								</button>
							</td>
						</tr>
						<tr>
							<td data-label="NÚMERO">5</td>
							<td data-label="CLAVE">1307</td>
							<td data-label="NOMBRE ASIGNATURA">ANALISIS</td>
							<td data-label="CREDITOS">12</td>
							<td data-la data-label="SEMESTRE">7</td>
							<td data-label="GRUPO">1701</td>
							<td data-label="MOVIMIENTO">ALTA</td>
							<td>
								<button type="button" class="btn btn-danger btn-sm d-grid gap-2 col-6 mx-auto">
									<i class='bx bx-trash'></i>
								</button>
							</td>
						</tr>

						<!--
						<tr>
							<td data-label="NÚMERO">6</td>
							<td data-label="CLAVE"></td>
							<td data-label="NOMBRE ASIGNATURA"></td>
							<td data-label="CREDITOS"></td>
							<td data-la data-label="SEMESTRE"></td>
							<td data-label="GRUPO"></td>
							<td data-label="MOVIMIENTO"></td>
							<td data-label="ACCIONES"></td>
						</tr>


					</tbody>

					<tfoot>
						<tr>
							<th>NO</th>
							<th>CLAVE</th>
							<th>NOMBRE DE LA ASIGNATURA</th>
							<th>CRED.</th>
							<th>SEM.</th>
							<th>GPO.</th>
							<th>MOV.</th>
							<th>ACCION</th>
						</tr>
					</tfoot>

					-->
				</table>
			</div>
		</div>
	</div>

			<!-- Button trigger modal -->


	<div class="col-lg-12 mt-4">
		<div  class="d-grid gap-2 col-11 mx-auto">
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" id="boton">
			  Agregar asignatura
			</button>
			<button type="button" class="btn btn-outline-success mt-1">Solicitar</button>
		</div>
	</div>



		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  	<div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Agregar materia</h5>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
			        AQUI IRA LA INSCRUPCIÓN
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Save changes</button>
			      </div>
			    </div>
		 	</div>
		</div>
	<!-- JavaScript Bundle with Popper -->

		</div>
	</div>


	<script>
		let btn = document.querySelector("#btn");
		let sidebar = document.querySelector(".sidebar");

		btn.onclick = function(){
		sidebar.classList.toggle("active");
		}

	</script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#example').DataTable({
				responsive:true

			})
		});
	</script>

</body>
</html>
