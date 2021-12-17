<?php
session_start();
$inactividad = 900;
// Comprobar si $_SESSION["timeout"] está establecida
if(isset($_SESSION["timeout"])){
    // Calcular el tiempo de vida de la sesión (TTL = Time To Live)
    $sessionTTL = time() - $_SESSION["timeout"];
    if($sessionTTL > $inactividad){
        session_destroy();
        header("Location: ./APP/webhook/c_logout.php");
    }
}
// El siguiente key se crea cuando se inicia sesión
$_SESSION["timeout"] = time();
if(isset($_SESSION['usuario']) && $_SESSION['sessionSuccess'])
{
    //Si ya existe una sesion reedirecciona a home
    header('Location: ./APP/view/index.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/master.css">

    <title>Acceso SIFESC</title>


    <style>
            .bg {
          background-image: url(img/UNAM_Fondo.jpg);
          background-position: 100% 100%;
          background-size: cover;
        }
    </style>

  </head>


  <body>
    <section>
      <div class="row g-0 align-items-stretch">

        <div class="col-lg-7 bg d-none d-lg-block d-flex justify-content-between">
          <!--
          <img src="img/UNAM_Fondo.jpg" class="img-profile">
          -->
        </div>


        <div class="col-lg-5 d-flex flex-column align-items-end min-vh-100">
          <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4 w-100 mb-auto">
            <img src="img/UNAM.jpg" class="img-fluid" width="120">
          </div>
          <div class="px-lg-5 pt-lg-4 p-4 w-100 align-self-center mb-4">
            <h1 class="mb-4">Bienvenido</h1>
            <form id="frm-login">
              <div class="mb-4">
                <label for="exampleInputEmail1" class="form-label font-weight-bold">Correo: </label>
                <input type="email" class="form-control" placeholder="correo@ejemplo.com" id="email" name="email" aria-describedby="emailHelp">
              </div>
              <div class="mb-4">
                <label for="exampleInputPassword1" class="form-label font-weight-bold">Contraseña: </label>
                <input type="password" class="form-control mb-2" placeholder="Ingresa tu contraseña" id="pw" name="pw">
                <a href="#" id="emailHelp" class="form-text text-muted text-decoration-none" data-bs-toggle="modal" data-bs-target="#validarDatos">¿Has olvidado tu contraseña?</a>
                
              </div>
              <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
            </form>
            <span id="mensaje"></span>
          </div>
           <div class="px-lg-5 pt-lg-3 pb-lg-4 p-4 w-100 mt-auto">
           </div>
        </div>
      </div>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- LIBRERIA AJAX requeried-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="./APP/service/login-ajax.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <!-- PHP DE MODALES -->
    <?php include_once "./includes/js.php";?>
    <?php include "./APP/view/modal/modal-valida-datos-recuperacion.php"; ?>
    <?php include ".APP/view/modal/modal-aviso-olvide-contraseña.php"; ?>
    <script src="./APP/service/recupera-contra.js"></script>


  </body>
</html>