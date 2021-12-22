<?php include_once "./includes/session_verify.php";?>
<!DOCTYPE html>
<html>
<?php $titulo="Imprimir Grupos | SIFESC";
include_once "./includes/header.php"; ?>
<body id="body" onload= printData()>

    <!--              AQUI VA EL CONTENIDO                -->
    <div class="home_content2">
      <div class="texthome">

        <div class="grid">
          <div class="">
            <a href="./index.php" title="Volver">
            </a>
          </div>
          <div>
            <h3 id="head3" class="text-center">Mis grupos asignados</h3>
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

        <div>
          <div class="input-group mb-1 mt-4">
            <input class="form-control col-md-3 light-table-filter" data-table="order-table" type="text" placeholder="Buscar mis asignaturas...">
          </div>
        </div>

        <div class="mt-3" id="contenido">
          <div class="row">
            <div class="col-lg-12">
              <table id="table" class="table table-bordered order-table">
                <thead>
                  <tr class="informacion" id="informacion">
                    <th colspan="3">CLAVE DE PROFESOR:
                      <div class="datos_personales">
                        <span id=rfc_profesor></span></div>
                    </th>
                    <th colspan="4">NOMBRE:
                      <div class="datos_personales">
                        <span id="nombre_profesor"></span>
                      </div>
                    </th>
                    <th colspan="3">DEPARTAMENTO:
                      <div class="datos_personales">
                        <span id="deptos"></span>
                      </div>
                    </th>
                  </tr>
                  <tr>
                    <th colspan="3">PERIODO:
                      <div class="">
                        <select class="form-select" id="periodo" aria-label="Default select example">

                        </select>
                      </div>
                    </th>
                    <th colspan="4">PLANTEL:
                      <div class="datos_personales">
                        <span id="nombre_plantel"></span>
                      </div>
                    </th>
                    <th colspan="3">Total de alumnos:
                      <div class="datos_personales">
                        <span id="total_alum">0</span>
                      </div>
                    </th>
                  </tr>
                </thead>

                <thead>
                  <tr class="informacion" id="informacion">
                    <th>NO</th>
                    <th>PLAN DE ESTUDIOS</th>
                    <th>NOMBRE DE LA CARRERA</th>
                    <th>CLAVE ASIGNATURA</th>
                    <th>NOM. ASIG</th>
                    <th>GPO.</th>
                    <th>TIPO GPO.</th>
                    <th>SEM.</th>
                    <th>Inscritos</th>
                  </tr>
                </thead>

                <tbody id="tbl-grupos-profesor">
                  <!-- Ajax responser Lista-grupos-->
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div id="aviso">
            <h3 id="avisoAsig" class="text-center">No tienes asignaciones</h3>
          </div>

      <div id="btnImpri" class="d-grid gap-2 col-11 mx-auto mb-4">
        <button class="btn btn-primary" type="button" onclick="printData()">IMPRIMIR</button>

        <!--<button class="btn btn-danger mb-5" type="button" class="btn btn-outline-success mt-1">SALIR</button>-->
      </div>
        <!-- Se utiliza para darle espacio al final de la tabla -->
        <div class="mt-3 mb-2"></div>
        <div class="d-grid gap-2 col-3 mx-auto">
          <p class="mt-3 mb-2"></p>
        </div>

      </div>

    </div>
    <!-- JavaScripts-->
    <?php include_once "./includes/js.php"; ?>
    <script src="../service/lista-grupos-profesores.js"></script>
</body>
</html>
