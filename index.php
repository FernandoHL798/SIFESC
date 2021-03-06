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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- LIBRERIA AJAX requeried-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--   Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
    <!-- extension responsive -->
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <!--Scrip para Modal-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- PHP DE MODALES -->
    <?php include "./APP/view/modal/modal-valida-datos-recuperacion.php"; ?>
    <script src="./APP/service/login-ajax.js"></script>
    <script src="./APP/service/recupera-contra.js"></script>
  </body>
</html>