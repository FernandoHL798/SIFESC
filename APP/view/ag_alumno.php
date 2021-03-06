<?php include_once "./includes/session_verify.php";
$idPlan = "";
if (!isset($_GET['idPlan'])){
    echo "<script>location.href ='javascript:history.back()';</script>";
}
else{
    $idPlan = $_GET['idPlan'];
}
?>
<!DOCTYPE html>
<html>
<?php $titulo="Agrega Alumno | SIFESC";
include_once "./includes/header.php";?>
<body id="body">
<?php include "./includes/sidebar2.php";?>
    <!--              AQUI VA EL CONTENIDO                -->
    <div class="home_content2">
        <div class="texthome">            
                <div class="mb-4">
                    <div class="grid">
                        <div class="">
                            <a href="./plan_de_estudios_alumnos.php" title="Volver"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi    bi-arrow-left-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                                </svg>
                            </a>
                        </div>
                        <div>
                            <h3 id="head3" class="text-center">Agregar Alumno<br>PLAN DE ESTUDIO</h3>
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
                    <div class="mt-3 mb-2"></div>
                    <p class="text-center mb-4">Aqu?? podr??s agregar a los alumnos</p> 
                    <div class="mt-3 mb-2"></div>
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <div class="modal-content">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Asig_Modal_Alum">
                                Agregar Alumno
                            </button>
                        </div>
                    </div>

                    <input type="hidden" name="idPlanAlumnos" id="idPlanAlumnos" value="<?php echo $idPlan; ?>">
                    <div class="row col-10 mx-auto">
                    <div class="input-group mb-1 mt-4">
                        <input class="form-control light-table-filter" style="height: 58px;" data-table="order-table" type="text" placeholder="Buscar alumno..."><span class="input-group-addon">
                            
                            <div class="form-floating" style="margin-left: 25px; width: 280px; " >
                            <select class="form-select mb-4"id="turno">
                                <option value="0">Todos</option>
                                <option value="1">Matutino</option>
                                <option value="2">Vespertino</option>
                            </select>
                            <label for="estatus"><font SIZE=3>Seleccione Turno</font></label>
                        </div></span>
                    </div>
                </div>
                </div>

                <table class="table table-bordered order-table display nowrap table-responsive mt-3" cellspacing="0" width="100%">
                    <thead>
                        <tr class="text-center">
                            <th style="width: 70px;">N??mero de cuenta</th>
                            <th style="width: 100px;">Primer Apellido</th>
                            <th style="width: 100px;">Segundo Apellido </th>
                            <th style="width: 100px;">Nombre(s)</th>
                            <th style="width: 270px;">Correo</th>
                            <th style="width: 120px;">Tel??fono</th>
                            <th style="width: 120px;">Fecha de nacimiento</th>
                            <th style="width: 100px;">Generaci??n</th>
                            <th style="width: 100px;">Estatus</th>
                            <th style="width: 140px;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="tbl-alumnos-plan">
                        <!-- AJAX response-->
                    </tbody>
                </table>
        <!-- Se utiliza para darle espacio al final de la tabla -->
        <div class="mt-3 mb-2"></div>
        <div class="d-grid gap-2 col-3 mx-auto">
            <p class="mt-3 mb-2"></p>
        </div>
    </div>
</div>

<!-- JavaScripts-->
<?php include_once "./includes/js.php"; ?>
<script src="../service/control-alumnos-admin.js"></script>
<!-- Modales -->
<?php include "./modal/modal-agregar-alumno.php"; ?>
<?php include "./modal/modal-edit-alumno.php"; ?>
<?php include "./modal/modal-baja-alum.php"; ?>


</body>
</html>
