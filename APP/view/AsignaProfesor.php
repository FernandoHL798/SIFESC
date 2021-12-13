<?php include_once "./includes/session_verify.php";?>
<!DOCTYPE html>
<html>
<?php $titulo="Asignaciones | SIFESC";
include_once "./includes/header.php";?>
<body id="body">
    <?php include "./includes/sidebar2.php";?>

    <!--              AQUI VA EL CONTENIDO                -->
    <div class="home_content2">
      <div class="texthome">
        <form class="mb-4">
          <div class="mb-4">

            <div class="grid">
              <div class="">
                <a href="./ag_asig_cat_departamento.php" title="Volver"> 
                  <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi    bi-arrow-left-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                  </svg>
                </a>
              </div>
              <div>
                <h3 id="head3" class="text-center">Asigna materias a los profesores</h3>
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
            <div class="mt-3 mb-2 text-center">
              <p>Selecciona el profesor al cual desea agregarle materias</p>
            </div>
            <div class="d-grid gap-2 col-3 mx-auto">
              <p class="mt-3 mb-2"></p>
            </div>

            <!-- Barra de busqueda -->
            <div class="input-group mb-3">
              <input class="form-control col-md-3 light-table-filter" data-table="order-table" type="text" placeholder="Buscar profesor...">
            </div>
            <!-- Barra de busqueda -->
          </div>

          <table class="table table-bordered order-table display nowrap table-responsive mt-3" cellspacing="0" width="100%">
            <thead>
              <tr class="text-center">
                <th style="width: 70px;">RFC</th>
                <th style="width: 100px;">Nombre</th>
                <th style="width: 100px;">Primer Apellido</th>
                <th style="width: 100px;">Segundo Apellido</th>
                <th style="width: 100px;">correo</th> 
                <th style="width: 140px;">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-center">
                <td data-label="Id_usuarioprofesor">MALA985762HDF4LC</td>
                <td data-label="Nombre">Maricela</td>
                <td data-label="Apellido P">Lara</td>
                <td data-label="Apellido M">Martinez</td>
                <td data-label="Id_asignacion">maricela@gmail.com</td>
                <td data-label="Acciones">
                  <a href="./AsignaProfesor_materia.php"><button type="button" title="Ver Profesor" class="btn btn-info"><i class='bx bx-show'></i></button>
                  </td>
                </tr>
                <tr class="text-center">
                  <td data-label="Id_usuarioprofesor">JASO986575DJDJCL</td>
                  <td data-label="Nombre">Mauricio</td>
                  <td data-label="Apellido P">Jaques</td>
                  <td data-label="Apellido M">Soto</td>
                  <td data-label="Id_asignacion">mau@hotmail.com</td>
                  <td data-label="Acciones">
                    <a href="./AsignaProfesor_materia.php"><button type="button" title="Ver Profesor" class="btn btn-info"><i class='bx bx-show'></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>

            </tbody>

          </table>
          <!-- Se utiliza para darle espacio al final de la tabla -->
          <div class="mt-3 mb-2"></div>
          <div class="d-grid gap-2 col-3 mx-auto">
            <p class="mt-3 mb-2"></p>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
    <!-- JavaScripts-->
    <?php include_once "./includes/js.php"; ?>



    <!-- script para busqueda -->
    <!-- Bootstrap core JavaScript
    ==================================================
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="SIFESC/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function () {
       (function($) {
           $('#FiltrarContenido').keyup(function () {
                var ValorBusqueda = new RegExp($(this).val(), 'i');
                $('.BusquedaRapida tr').hide();
                 $('.BusquedaRapida tr').filter(function () {
                    return ValorBusqueda.test($(this).text());
                  }).show();
                    })
          }(jQuery));
    });
    </script>

 -->


    <!-- script para busqueda -->

    <?php include "./modal/modal-AsignaProfesor.php"; ?>
    <?php include "./modal/modal-editAsignaProfesor.php"; ?>
    <?php include "./modal/modal-baja-asigna-prof.php"; ?>

</body>
</html>
