<?php include_once "./includes/session_verify.php";?>
<!DOCTYPE html>
<html>
<?php $titulo="Periodo | SIFESC";
include_once "./includes/header.php";?>
<body id="body">
    <?php
    include "./includes/sidebar2.php";
    ?>
    <!--              AQUI VA EL CONTENIDO                -->
    <div class="home_content2">
        <div class="texthome">

            <div class="mb-4">
                <div class="grid">
                    <div class="">
                        <a href="./ag-periodo.php" title="Volver"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi    bi-arrow-left-circle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                            </svg>
                        </a>
                    </div>
                    <div>
                        <h3 id="head3" class="text-center">Período</h3>
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
                <h3 class="text-center mb-3">"""""INFORMACIÓN DEL PERÍODO""""</h3>
                <h5 class="text-center mb-3">Agrega periodos</h5>
                <p class="text-center mb-5">Agrega las fechas de este período. <br> El sistema para todos los usuarios se basara en el periodo activo. <br> Solo se puede tener activo un periodo a la vez. <br>Las fechas son generales para todos, pero cada alumno tendra días y horas diferentes en el caso de la inscripción </p>
                <div class="d-grid gap-2 col-3 mx-auto">
                    <div class="modal-content">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Asig_Modal">
                            Nuevo Periodo
                        </button>
                    </div>

                </div>
            </div>

            <table class="table table-bordered  display nowrap table-responsive mt-3" cellspacing="0" width="100%">
                <thead style="font-size: 5px!important">
                    <tr class="text-center">
                        <th >Dosificación inicio</th>
                        <th >Dosificación fin</th>
                        <th >Fecha de inscripción</th>
                        <th >Fin de fecha de inscripción</th>
                        <th >Dosificación altas y bajas</th>
                        <th >Fin de dosificación altas y bajas</th>
                        <th >Inscripción altas y bajas</th>
                        <th >Fin de inscripción altas y bajas</th>
                        <th >Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td data-label="Acciones">
                            <a href=""><button type="button" title="Estatus" class="btn btn-warning"><i class='bx bx-play-circle'></i></button></a>
                            <button type="button" title="Editar Período" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#depto_edit_Modal"><i class='bx bxs-pencil'></i></button>
                        </td>
                    </tr>
                    <tr class="text-center">
                    
                        <td data-label="Duración">09/08/2021</td>
                        <td data-label="Duración">19/08/2021</td>
                        <td data-label="Duración">09/09/2021</td>
                        <td data-label="Duración">19/09/2021</td>
                        <td data-label="Duración">09/09/2021</td>
                        <td data-label="Duración">19/09/2021</td>
                        <td data-label="Duración">09/09/2021</td>
                        <td data-label="Duración">19/09/2021</td>
                        <td data-label="Acciones">
                            <a href=""><button type="button" title="Estatus" class="btn btn-info"><i class='bx bx-pause-circle' ></i></button></a>
                            <button type="button" title="Editar Período" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#"><i class='bx bxs-pencil'></i></button>
                        </td>
                    </tr>
                    <tr class="text-center">
                    
                        <td data-label="Duración">09/01/2021</td>
                        <td data-label="Duración">19/01/2021</td>
                        <td data-label="Duración">09/09/2021</td>
                        <td data-label="Duración">19/09/2021</td>
                        <td data-label="Duración">09/09/2021</td>
                        <td data-label="Duración">19/09/2021</td>
                        <td data-label="Duración">09/09/2021</td>
                        <td data-label="Duración">19/09/2021</td>
                        <td data-label="Acciones">
                            <a href=""><button type="button" title="Estatus" class="btn btn-warning"><i class='bx bx-play-circle'></i></button></a>
                            <button type="button" title="Editar Período" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#"><i class='bx bxs-pencil'></i></button>
                        </td>
                    </tr>
                    <tr class="text-center">
                    
                        <td data-label="Duración">09/09/2021</td>
                        <td data-label="Duración">19/09/2021</td>
                        <td data-label="Duración">09/09/2021</td>
                        <td data-label="Duración">19/09/2021</td>
                        <td data-label="Duración">09/09/2021</td>
                        <td data-label="Duración">19/09/2021</td>
                        <td data-label="Duración">09/09/2021</td>
                        <td data-label="Duración">19/09/2021</td>
                        <td data-label="Acciones">
                            <a href=""><button type="button" title="Estatus" class="btn btn-warning"><i class='bx bx-play-circle'></i></button></a>
                            <button type="button" title="Editar Período" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#"><i class='bx bxs-pencil'></i></button>
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

<?php include "./includes/js.php"; ?>
<?php include "./modal/modal-agregar-periodo.php"; ?>
<?php include "./modal/modal-edit-plan-estu.php"; ?>
<?php include "./modal/modal-baja_plan_e.php"; ?>

</body>
</html>