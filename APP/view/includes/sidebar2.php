<div class="sidebar">
	<?php
	if($_SESSION['numero_cuenta']==""){
		$classAlumno="d-none";
	}
	if($_SESSION['rfc']==""){
		$classProfesor="d-none";	
	}
	if($_SESSION['no_trabajador']==""){
		$classAdmin="d-none";
	}
	?>
	<div class="logo-details">
			<i class='bx bxs-school'></i>
			<span class="logo_name">Sistema de inscripción</span>
		</div>

		<ul class="nav-links">
			<li>
				<a href="./index.php">
					<i class='bx bx-grid-alt'></i>
					<span class="link_name">Inicio</span>
				</a>
				<ul class="sub-menu blank">
					<li><a class="link_name" href="./index.php">Inicio</a></li>
				</ul>
			</li>

			<li>
				<a href="./seleccion_carrera.php">
					<i class='bx bxs-spreadsheet'></i>
					<span class="link_name">Mis carreras</span>
				</a>
				<ul class="sub-menu blank">
					<li><a class="link_name" href="./seleccion_carrera.php">Mis carreras</a></li>
				</ul>
			</li>

			<li>
				<div class="icon-link">
					<a>
						<i class='bx bx-shield-quarter' ></i>
						<span class="link_name">Seguridad</span>
					</a>
					<i class='bx bx-chevron-down arrow'></i>
				</div>
				<ul class="sub-menu">
					<li><a class="link_name" href="#">Seguridad</a></li>
					<li><a href="./cambio_clave.php">Cambia tu clave de acceso</a></li>
					<li><a href="./seguridad.php">Configuración de seguridad</a></li>
				</ul>
			</li>

			<li>
				<div class="icon-link <?php echo $classAlumno ?>">
					<a>
						<i class='bx bx-pencil'></i>
						<span class="link_name">Inscripción</span>
					</a>
					<i class='bx bx-chevron-down arrow'></i>
				</div>
				<ul class="sub-menu">
					<li><a class="link_name" href="#">Inscripción</a></li>
					<li><a href="./inscripcion.php">Realiza tu Inscripción</a></li>
					<li><a href="./ConsultaInscripcion.php">Consulta tu inscripción</a></li>
				</ul>
			</li>

			<li>
				<a href="./Dosificacion.php" class="<?php echo $classAlumno ?>">
					<i class='bx bx-calendar'></i>
					<span class="link_name">Dosificación</span>
				</a>
				<ul class="sub-menu blank">
					<li><a class="link_name" href="./Dosificacion.php">Dosificación</a></li>
				</ul>
			</li>

			<li>
				<a href="./saturacion.php" class="<?php echo $classAlumno ?>">
					<i class='bx bxs-error'></i>
					<span class="link_name">Saturación</span>
				</a>
				<ul class="sub-menu blank">
					<li><a class="link_name" href="./saturacion.php">Saturación</a></li>
				</ul>
			</li>

			<li>
				<div class="icon-link <?php echo $classProfesor?>" >
					<a>
						<i class='bx bxs-briefcase'></i>
						<span class="link_name">Profesor</span>
					</a>
					<i class='bx bx-chevron-down arrow'></i>
				</div>
				<ul class="sub-menu">
					<li><a class="link_name" href="#">Profesor</a></li>
					<li><a href="./grupos_profesores.php">Consulta grupos</a></li>
				</ul>
			</li>
			<li>
				<div class="icon-link <?php echo $classAdmin?>">
					<a>
						<i class='bx bx-archive'></i>
						<span class="link_name">Administrador</span>
					</a>
					<i class='bx bx-chevron-down arrow'></i>
				</div>
				<ul class="sub-menu">
					<li><a class="link_name" href="#">Administrador</a></li>
					<li><a href="./profesores-cat-departamento.php">Profesor</a></li>
					<li><a href="./ag_asig_cat_departamento.php">Asignar materia a profesor</a></li>
					<li><a href="./plan_de_estudios_alumnos.php">Alumnos</a></li>
					<li><a href="./ag-departamento.php">Departamentos</a></li>
					<li><a href="./plan_de_estudios.php">Plan de estudios</a></li>   <!-- CREA PLANES DE ESTUDIOS-->
					<li><a href="./plan_de_estudios_saturacion.php">Saturación</a></li>
					<li><a href="./plan_de_estudios_asignatura.php">Asignaturas</a></li>
					<li><a href="./admin_periodo.php">Periodo</a></li>
				</ul>
			</li>

			<li>
				<a href="../webhook/c_logout.php">
					<i class='bx bxs-log-out' ></i>
					<span class="link_name">Cerrar sesión</span>
				</a>
				<ul class="sub-menu blank">
					<li><a class="link_name">Cerrar sesión</a></li>
				</ul>
			</li>

			<li>
				<div class="profile_details">
					<div class="profile-content">
						<img src="../../img/logo_oro.png" alt="profile">
					</div>

						<div class="name-job">
							<div class="profile_name">
								<input type="hidden" name="idUsuario" id="idUsuario" value="<?php echo $_SESSION['id_usuario'] ?>">
								<?php echo $_SESSION['usuario']." ".$_SESSION['app']." ".$_SESSION['apm'] ?>
							</div>
							<div class="job">
								<input type="hidden" name="idPlan" id="idPlan">
								<div class="form-check" id="rdo-carrera">
									
								</div>
							</div>
						</div>
				</div>
			</li>
		</ul>
	</div>

	<section class="home-section">
		<div class="home-content">
			<i class='bx bx-menu'></i>
			<span class="titulounam">
				<!--AQUI SE CORRIGE EL PORCENTAJE DEL TITULO-->
			</span>
				<span class="text">
					Universidad Nacional Autónoma de México <br> SIFESC
				</span>
			<span class="titulounam"></span>
		</div>
	</section>

