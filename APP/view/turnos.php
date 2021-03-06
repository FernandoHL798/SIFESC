<?php include_once "./includes/session_verify.php";?>
<!DOCTYPE html>
<html>
<?php $titulo="Turno | SIFESC";
include_once "./includes/header.php";?>
<body id="body">
<?php include "./includes/sidebar2.php";?>
    <!--              AQUI VA EL CONTENIDO                -->
    <div class="home_content2">
        <div class="texthome">            
                <div class="row">
                <div class="grid">
          <div class="">
            <a href="./plan_de_estudios_alumnos.php" title="Volver"> 
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi    bi-arrow-left-circle" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
              </svg>
            </a>
          </div>
          <div>
            <h3 id="head3" class="text-center">Turnos</h3>
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
                </div>     
                <div class="row">
                    <p class="mb-2"></p>
                </div>
                    <h3 class="text-center">1119 || Lic. Informática</h3> <br>
                    <p class="text-center mb-4">Seleccione el turno al cual el alumno estará inscrito.</p>
                    <table class="table table-bordered display nowrap table-responsive mt-3" cellspacing="0" width="100%">
                    <thead>
                        <tr class="text-center">
                            <th style="width: 50px;">Turnos</th>
                            <th style="width: 100px;">Acciones</th>      
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td data-label="Clave">MATUTINO</td>
                            <td data-label="Acciones">
                                <a href="./ag_alumno.php"><button type="button" title="Agregar Alumno" class="btn btn-info"><i class='bx bx-show'></i></button>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td data-label="Clave">VESPERTINO</td>
                            <td data-label="Acciones">
                                <a href="./ag_alumno.php"><button type="button" title="Agregar Alumno" class="btn btn-info"><i class='bx bx-show'></i></button></a> 
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- Se utiliza para darle espacio al final de la tabla -->
                <div class="mt-3 mb-2"></div>
                <div class="d-grid gap-2 col-3 mx-auto">
                <p class="mt-3 mb-2"></p>
                </div>
            </div>
 
        </div>
    </div>
</div>
    <?php  include_once "./includes/js.php";
    include "./modal/modal-agregar-plan-estu.php"; 
     include "./modal/modal-edit-plan-estu.php"; 
    include "./modal/modal-baja_plan_e.php"; ?>

</body>
</html>