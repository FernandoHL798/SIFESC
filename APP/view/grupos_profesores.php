<?php include_once "./includes/session_verify.php";?>
<!DOCTYPE html>
<html>
<?php $titulo="Grupos | SIFESC";
include_once "./includes/header.php"; ?>
<body id="body">
    <?php
include "./includes/sidebar2.php";
    ?>

    <!--              AQUI VA EL CONTENIDO                -->
    <div class="home_content2">
      <div class="texthome">

        <div class="grid">
          <div class="">
            <a href="./index.php" title="Volver"> 
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi    bi-arrow-left-circle" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
              </svg>
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
                      <div class="datos_personales">12345678</div>
                    </th>
                    <th colspan="4">NOMBRE:
                      <div class="datos_personales">
                        Maricela Lara Martínez
                      </div>
                    </th>
                    <th colspan="3">DEPARTAMENTO:
                      <div class="datos_personales">
                        Informática
                      </div>
                    </th>
                  </tr>
                  <tr>
                    <th colspan="3">PERIODO: 2021/2
                      <div class="">
                        <select class="form-select" aria-label="Default select example">
                          <option selected>Seleccione el periodo</option>
                          <option value="1">2201/1</option>
                          <option value="2">2020/2</option>
                          <option value="3">2020/1</option>
                          <option value="2">2019/2</option>
                          <option value="3">2019/1</option>
                        </select>
                      </div>
                    </th>
                    <th colspan="4">PLANTEL:
                      <div class="datos_personales">
                        106 - F.E.S. CUAUTITLÁN
                      </div>
                    </th>
                    <th colspan="3">Total de alumnos:
                      <div class="datos_personales">
                        SUMATORIA TOTAL ALUMNOS POR PERIODO
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
                    <th>ACCION</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td data-label="NÚMERO">1</td>
                    <td data-label="PLAN DE ESTUDIOS">1119</td>
                    <td data-label="CARRERA">LIC. INFORMÁTICA</td>
                    <td data-label="CLAVE. ASIGNAT.">12</td>
                    <td data-label="NOM. ASIGNAT">PROGRAMACIÓN I</td>
                    <td data-label="GRUPO">1701</td>
                    <td data-label="TIPO GRUPO">ORDINARIO</td>
                    <td data-label="SEMESTRE">1</td>
                    <td data-label="Inscritos">20</td>
                    <td class="text-center">
                      <a href="./grupos_profesores_alumnos.php"><button type="button" title="Ver Grupo" class="btn btn-info btn-sm col-6 mx-auto"><i class='bx bx-show'></i></button></a>
                    </td>
                  </tr>
                  <tr>
                    <td data-label="NÚMERO">1</td>
                    <td data-label="PLAN DE ESTUDIOS">1131</td>
                    <td data-label="CARRERA">CONTADURIA</td>
                    <td data-label="CLAVE. ASIGNAT.">135</td>
                    <td data-label="NOM. ASIGNAT">COMPUTO I</td>
                    <td data-label="GRUPO">1103</td>
                    <td data-label="TIPO GRUPO">ORDINARIO</td>
                    <td data-label="SEMESTRE">2</td>
                    <td data-label="Inscritos">20</td>
                    <td class="text-center">
                      <a href="./grupos_profesores_alumnos.php"><button type="button" title="Ver Grupo" class="btn btn-info btn-sm col-6 mx-auto"><i class='bx bx-show'></i></button></a>
                    </td>
                  </tr>
                  <tr>
                    <td data-label="NÚMERO">1</td>
                    <td data-label="PLAN DE ESTUDIOS">1119</td>
                    <td data-label="CARRERA">LIC. INFORMÁTICA</td>
                    <td data-label="CLAVE. ASIGNAT.">12</td>
                    <td data-label="NOM. ASIGNAT">PROGRAMACIÓN I</td>
                    <td data-label="GRUPO">1751</td>
                    <td data-label="TIPO GRUPO">ORDINARIO</td>
                    <td data-label="SEMESTRE">1</td>
                    <td data-label="Inscritos">20</td>
                    <td class="text-center">
                      <a href="./grupos_profesores_alumnos.php"><button type="button" title="Ver Grupo" class="btn btn-info btn-sm col-6 mx-auto"><i class='bx bx-show'></i></button></a>
                    </td>
                  </tr>
                  <tr>
                    <td data-label="NÚMERO">1</td>
                    <td data-label="PLAN DE ESTUDIOS">1121</td>
                    <td data-label="CARRERA">ITSE</td>
                    <td data-label="CLAVE. ASIGNAT.">113</td>
                    <td data-label="NOM. ASIGNAT">PROGRAMACIÓN V</td>
                    <td data-label="GRUPO">1502</td>
                    <td data-label="TIPO GRUPO">EXTRAORDINARIO</td>
                    <td data-label="SEMESTRE">5</td>
                    <td data-label="Inscritos">20</td>
                    <td class="text-center">
                      <a href="./grupos_profesores_alumnos.php"><button type="button" title="Ver Grupo" class="btn btn-info btn-sm col-6 mx-auto"><i class='bx bx-show'></i></button></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>



      <div class="d-grid gap-2 col-11 mx-auto mb-4">
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



        <?php include_once "./includes/js.php"; ?>
</body>
</html>
