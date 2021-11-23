<!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title>Menú responsivo UNAM</title>
	<link rel="stylesheet" type="text/css" href="../../css/styles_menu.css">
<!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<meta charset="utf-8">
</head>
<body id="body">
	<?php
include "./includes/sidebar2.php";
	?>

	<div class="home_content2">
		<div class="texthome">
	<div class="px-lg-5 pt-lg-4 p-4 w-100 align-self-center mb-4 mx-auto">
	<div class="titulo">
	<center>SISTEMA DE INSCRIPCIÓN</center>
	</div>
	<div class="container" id="contenido">
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
							<th colspan="1">Periodo:
								<div class="datos_personales">
									2022-1
								</div>
							</th>
						</tr>
						<tr class="informacion" id="informacion">
							<th>NO</th>
							<th>CLAVE</th>
							<th>NOMBRE DE LA ASIGNATURA</th>
							<th>CRED.</th>
							<th>SEM.</th>
							<th>GPO.</th>
							<th colspan="5"
								<div class="datos_personales">
									Movimiento:
								</div>
							</th>
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
							<td colspan="5"
								<div class="MOVIMIENTO">
									ALTA
								</div>
							</td>
							<tr>
							<td data-label="NÚMERO">2</td>
							<td data-label="CLAVE">1307</td>
							<td data-label="NOMBRE ASIGNATURA">MATEMATICAS VI</td>
							<td data-label="CREDITOS">8</td>
							<td data-la data-label="SEMESTRE">7</td>
							<td data-label="GRUPO">1701</td>
							<td colspan="5"
								<div class="MOVIMIENTO">
									ALTA
								</div>
							</td>
						</tr>
						<tr>
							<td data-label="NÚMERO">3</td>
							<td data-label="CLAVE">1304</td>
							<td data-label="NOMBRE ASIGNATURA">LABO. SISTEMAS COMP. VI</td>
							<td data-label="CREDITOS">12</td>
							<td data-la data-label="SEMESTRE">7</td>
							<td data-label="GRUPO">1701</td>
							<td colspan="5"
								<div class="MOVIMIENTO">
									ALTA
								</div>
							</td>
						</tr>
						<tr>
							<td data-label="NÚMERO">4</td>
							<td data-label="CLAVE">1311</td>
							<td data-label="NOMBRE ASIGNATURA">SEMINARIO DE INVESTIGACIÓN</td>
							<td data-label="CREDITOS">8</td>
							<td data-la data-label="SEMESTRE">7</td>
							<td data-label="GRUPO">1701</td>
							<td colspan="5"
								<div class="MOVIMIENTO">
									ALTA
								</div>
							</td>
						</tr>
						<tr>
							<td data-label="NÚMERO">5</td>
							<td data-label="CLAVE">1307</td>
							<td data-label="NOMBRE ASIGNATURA">ANALISIS</td>
							<td data-label="CREDITOS">12</td>
							<td data-la data-label="SEMESTRE">7</td>
							<td data-label="GRUPO">1701</td>
							<td colspan="5"
								<div class="MOVIMIENTO">
									ALTA
								</div>
							</td>
							</tr>

				</table>
			</div>
		</div>
	</div>


	<div class="col-lg-12 mt-4">
		<div  class="d-grid gap-2 col-11 mx-auto">
			<button class="btn btn-secondary" type="button" onclick="printData()">IMPRIMIR</button>

			<button class="btn btn-secondary" type="button" class="btn btn-outline-success mt-1">SALIR</button>
		</div>
	</div>

			</div>
	</div>





	<!-- JavaScript Bundle with Popper -->
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

		<script>

			function printData()
				{
				   var divToPrint=document.getElementById("contenido");
				   newWin= window.open("");
				   newWin.document.write(divToPrint.outerHTML);
				   newWin.document.write('<link rel="stylesheet" type="text/css" href="../../css/styles_menu.css">');
				   newWin.document.write('<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">');
				   newWin.print();
				   newWin.close();
				}

				$('Imprimir').on('click',function(){
				printData();
				})

		</script>
</body>
</html>
</body>

</html>
