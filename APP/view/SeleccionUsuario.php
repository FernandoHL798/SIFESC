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
        <select name="combobox" class="form-control">
          <option type="option" name="usuario" value="1" onClick="redirect(./index.php)" >Administrador</option>

        </select>
      </center>

    </div>

  </body>
</html>
