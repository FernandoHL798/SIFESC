<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Selecciona la opcion de acceso</title>
  </head>
  <style>
    .combobox{
      padding: 1% 7%;
      border: 3px solid #333;
      box-shadow: 8px 8px 5px #444;
      background-image: linear-gradient(180deg, #fff, #ddd 40%, #ccc);
      font-size:20px;
    	margin-top: 15%;
    }
    .contenido{
      width: 100%;
      margin: 0 auto;
      background-image: url("../../img/unam-escudo-azul.png");
      background-position: 100% 100%;
      background-size: cover;
    }

  </style>

  <body>
    <div id="contenido">
      <center><H1><br>SELECCIONA UNA OPCION DE ACCESO</H1></center>

      <center>
        <form name="FormSelecciona">
            <select name="selecciona" id="selecciona">
              <option value="nada" selected="selected">selecciona una opcion</option>
              <option value="#">119 | Licenciatura Medico Veterinario Zoorecnista</option>
              <option value="#">Profesor</option>
              <option value="http://localhost/SIFESC/APP/view/index.php">Administrador</option>
              <option value="#">116 | Licenciatuta en informática</option>
            </select>
        </form>
      </center>
<script type="text/javascript">
  var urlMenu = document.getElementById('selecciona');
  urlMenu.onchange = function() {
    var userOption = this.options(this.selectedIndex);
    if (userOption.value != "nada") {
      window.open(userOption.value, "Opciones", "");
    }
  }
</script>
    </div>
<!--- link del ejemplo
https://www.youtube.com/watch?v=jFC91RVs4NE&t=742s --->
  </body>
</html>
