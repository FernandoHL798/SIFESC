<?php include_once "./includes/session_verify.php";

$idAsignacion = "";
if (!isset($_GET['idAsignacion'])){
    echo "<script>location.href ='javascript:history.back()';</script>";
}
else{
    $idAsignacion = $_GET['idAsignacion'];
}
?>
<!DOCTYPE html>
<html>
<?php $titulo="Lista Grupo | SIFESC";
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
                    <a href="./grupos_profesores.php" title="Volver"> 
                      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi    bi-arrow-left-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                    </svg>
                </a>
            </div>
            <div>
                <h3 id="head3" class="text-center">Detalles del grupo</h3>
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
        <input class="form-control col-md-3 light-table-filter" data-table="order-table" type="text" placeholder="Buscar mis alumnos...">
    </div>
    </div>
    <div class="" id="contenido">
        <div class="row">
            <div class="col-lg-12 mt-3">
                <input type="hidden" id="idAsignacion" name="idAsignacion" value="<?php echo $idAsignacion; ?>">
                <table id="table" class="table table-bordered order-table">
                    <thead>
                        <tr class="informacion" id="informacion">
                            <th colspan="2">PLAN DE ESTUDIOS:
                                <div class="datos_personales"><span id="idPlan"></span></div>
                            </th>
                            <th colspan="1">CARRERA:
                                <div class="datos_personales">
                                    LIC. INFORMÁTICA
                                </div>
                            </th>
                            <th colspan="1">CLAVE ASIGNATURA:
                                <div class="datos_personales">
                                    113
                                </div>
                            </th>
                            <th colspan="1">NOMBRE ASIGNATURA :
                                <div class="datos_personales">
                                    SEGURIDAD INFORMÁTICA
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="4">GRUPO:
                                <div class="datos_personales">
                                    1702
                                </div>
                            </th>
                            <th colspan="1">SEMESTRE:
                                <div class="datos_personales">
                                    7
                                </div>
                            </th>

                        </tr>
                    </thead>
                    <thead>
                        <tr>
                            <th>NO. DE CUENTA</th>
                            <th>NOM. ALUMNO</th>
                            <th>CORREO</th>
                            <th>TELÉFONO</th>
                            <th>ESTATUS</th>
                        </tr>
                    </thead>
                    <tbody id="tbl-alumnos-asignacion">
                        <!--AJAX response alumnos Asignacion -->
                </tbody>     
            </table>
        </div>
    </div>
    </div>
    <div class="d-grid gap-2 col-11 mx-auto mb-4 mt-3">
        <button class="btn btn-primary" type="button" id="btnImprimirSat" onclick="printData()">IMPRIMIR</button>
    </div>

    </div>
    </div>
    <!-- JavaScripts-->
    <?php include_once "./includes/js.php"; ?>     
    <script src="../service/lista-alumnos-asignacion.js"></script> 
    <!-- Modales-->
    <?php include "./modal/modal-prof-calif-alum.php"; ?>
</body>
</html>
