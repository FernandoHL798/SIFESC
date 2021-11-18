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
<script>
	let btn = document.querySelector("#btn");
	let sidebar = document.querySelector(".sidebar");
	btn.onclick = function(){
		sidebar.classList.toggle("active");
	}
</script>
</body>
</html>
