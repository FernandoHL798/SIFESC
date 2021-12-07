<?php include_once "./includes/session_verify.php";?>
<!DOCTYPE html>
<html>
<?php $titulo="Inicio | SIFESC";
include_once "./includes/header.php"; ?>
<body id="body">
	<?php
	include "./includes/sidebar2.php";
	?>

	<!--EN ESTE DIV SE AGREGA TODO EL CONTENIDO -->
	<div class="home_content2">
		<div class="texthome">
				<div class="px-lg-5 pt-lg-4 p-4 w-100 align-self-center mb-4 mx-auto"> 
					<form>
						<div class="row">
							<div class="col-4"></div>
							<div class="col-4">                               
								<div class="text-center mb-2">
									<img class=" img-fluid mt-4" src="UNAM.jpg" width="350" height="350">
								</div>
							</div>
						</div>
						<div class="mt-3 mb-2 text-center">
							<div style="text-align:center;padding:1em 0;"> <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=medium&timezone=America%2FMexico_City" width="100%" height="115" frameborder="0" seamless></iframe> </div>
						</div>
						
						<div class="mt-3 mb-2 text-center">
							<div>
							<label class="mb-4">Recuerda, si realizó algún trámite de inscripción cerciórese de que sea publicado en
								<a href="https://www.dgae-siae.unam.mx/www_gate.php">DGAE/SIAE.</a>
							</label>
							</div>
							<div>
							<label class="">Si tuviste algún problema haciendo uso del sistema, envíanos un mensaje a 
								<a href="http://cuautitlan.dgae.unam.mx/">Servicios Escolares.</a>
							</label>
							</div>
						</div>                 
					</form>
				</div>
		</div>
	</div>
	
	<script src="../tools/sidebar.js"></script>

</body>
</html>
