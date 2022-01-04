<?php include_once "./includes/session_verify.php";?>
<!DOCTYPE html>
<html>
<?php $titulo="Mi Inscripcion | SIFESC";
include_once "./includes/header.php";?>
<body id="body">
	<?php
include "./includes/sidebar2.php";
	?>

	<div class="home_content2">
		<div class="texthome">
		<div class="mb-4">
			<div class="grid">
				<div class="">
					<a href="./index.php" title="Volver"> 
						<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi    bi-arrow-left-circle" viewBox="0 0 16 16">
							<path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
						</svg>
					</a>
				</div>
				<div>
					<h3 id="head3" class="text-center">Consulta Inscripción</h3>
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
		</div>
			<div class="container" id="contenido">
				<div class="row">
					<div class="col-lg-12">
						<table id="table" class="table table-bordered">
							<thead>
								<tr class="informacion" id="informacion">
									<th colspan="2">NÚMERO DE CUENTA:
										<div class="datos_personales">
											<span id="cuenta_alumno"></span>
										</div>
									</th>
									<th colspan="2">NOMBRE:
										<div class="datos_personales">
											<span id="nombreAlumno"></span>
										</div>
									</th>
									<th colspan="1">AÑO DE INGRESO:
										<div class="datos_personales">
											<span id="anioEstudia"></span>
										</div>
									</th>
									<th colspan="2">CARRERA:
										<div class="datos_personales">
											<span id="idCarrera"></span>
										</div>
									</th>
								</tr>
								<tr>
									<th colspan="1">PLANTEL:
										<div class="datos_personales">
											<span id="Plantel"></span>
										</div>
									</th>
									<th colspan="2">PLAN DE ESTUDIOS:
										<div class="datos_personales">
											<span id="Plan"></span>
										</div>
									</th>
									<th colspan="2">CREDITOS:
										<div class="datos_personales">
											<span id="creditos"></span>
										</div>
									</th>
									<th colspan="2">Periodo:
										<div class="datos_personales">
											<span id="Periodo"></span>Ejemplo de periodo
										</div>
									</th>
								</tr>
								<tr class="informacion" id="informacion">
									<th>NO.</th>
									<th>CLAVE</th>
									<th>NOMBRE DE LA ASIGNATURA</th>
									<th>CRED.</th>
									<th>SEM.</th>
									<th>GPO.</th>
									<th>
										<div class="datos_personales">
											Movimiento:
										</div>
									</th>
								</tr>
							</thead>

							<tbody id="tbl-consulta-inscripcion">
								<!--AJAX PARA LLENADO DE TABLA (RESPONSE Lista alumno.js)-->
							</tbody>

						</table>
					</div>
					<div class="mt-4 mb-6">
                        <p class="text-center mb-5">NOTA: LA VALIDEZ DE ESTE DOCUMENTO QUEDA SUJETA A LA REVISIÓN DEL PLAN DE ESTUDIOS Y COMPROBACIÓN DE TUS ASIGNATURAS EN LA PÁGINA DEL S.I.A.E. EN CASO DE NO COINCIDIR, PASAR A LA VENTANILLA DE TU CARRERA ANTES DEL 17 DE OCTUBRE DE 2021.</p>
                    </div>
				</div>
			
			<div class="mt-4">
					<p class="text-center mb-5">INSTRUCCIONES:</p>
			</div>
			<div class="mt-1 mb-2">
					<p class="mb-4">1. Tu inscripción ha quedado registrada con el folio 404084.</p>
					<p class="mb-4">2. No es necesario que acudas a Servicios Escolares para confirmar tu inscripción, los movimientos que realizaste en Inscripciones o los que realizaste hoy en Altas y Bajas es tu inscripción definitiva, que tendrás que revisar en la página <a href="https://www.dgae-siae.unam.mx/www_gate.php">www.dgae-siae.unam.mx</a>, cualquier aclaración o duda tendrás que acudir a la ventanilla de tu carrera antes del día 17 de octubre de 2021.</p>
					<p class="mb-4">3. Si requieres una constancia de inscripción (constancia de estudios), podrás tramitarla a partir del día 22 de septiembre de 2021 en la ventanilla virtual de Servicios Escolares.</p>
			</div>
		</div>




	<!-- LIBRERIA AJAX requeried-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<div class="col-lg-12 mt-4">
		<div  class="d-grid gap-2 col-11 mx-auto mb-4">
			<button class="btn btn-primary" type="button" onclick="printData()">IMPRIMIR</button>
			<!--<button class="btn btn-danger" type="button" class="btn btn-outline-success mt-1">SALIR</button>-->
		</div>
	</div>
	<!-- Se utiliza para darle espacio al final de la tabla -->
                <div class="mt-3 mb-2"></div>
                <div class="d-grid gap-2 col-3 mx-auto">
                <p class="mt-3 mb-2"></p>
                </div>

			</div>
	</div>

			<?php include_once "./includes/js.php"; ?>
            <script src="../service/lista-alumno.js"></script>
            <?php include_once "./includes/js.php"; ?>
</body>
</html>
</body>

</html>
