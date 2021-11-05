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
<body id="body">
	<?php 
include "./includes/sidebar.php";
	?>


	<header>
		<div class="icon_menu">
			<i class='bx bx-menu' id="btn"></i>							
		</div>
		<div class="titulo">
			Universidad Nacional autonoma de México <br>
			Fesc
		</div>
	</header>




	<!--              AQUI VA EL CONTENIDO                -->
	<div class="home_content">
		<div class="text">




			AQUI VA EL CONTENIDO PRINCIPAL



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