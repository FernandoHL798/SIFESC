<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,600;1,400&family=Spartan:wght@300;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@300;600&family=Lora:ital,wght@0,600;1,400&family=Spartan:wght@300;600&display=swap" rel="stylesheet">
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
            <h1 class="mb-4">Bienvenido estudiante</h1>
            <form>
              <div class="mb-4">
                <label for="exampleInputEmail1" class="form-label font-weight-bold">Número de cuenta</label>
                <input type="email" class="form-control" placeholder="Ingresa tu número de cuenta" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-4">
                <label for="exampleInputPassword1" class="form-label font-weight-bold">Contraseña</label>
                <input type="password" class="form-control mb-2" placeholder="Ingresa tu contraseña" id="exampleInputPassword1">
                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
              </div>
              <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
            </form>
          </div>
           <div class="px-lg-5 pt-lg-3 pb-lg-4 p-4 w-100 mt-auto">
           </div>
        </div>
      </div>
    </section>
  </body>
</html>
