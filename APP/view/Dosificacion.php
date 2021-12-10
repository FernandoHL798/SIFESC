<?php include_once "./includes/session_verify.php";?>
<!DOCTYPE html>
<html>
<?php $titulo="Dosificacion | SIFESC";
include_once "./includes/header.php"; ?>
<body id="body">
    <?php
include "./includes/sidebar2.php";
    ?>
    <!--              AQUI VA EL CONTENIDO                -->
    <div class="home_content2">
        <div class="texthome">
            <form class="mb-4">              
                <div class="mb-4">
                    <div class="grid">
                        <div class="">
                            <a href="http://localhost/SIFESC/APP/view/index.php" title="Volver"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi    bi-arrow-left-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                                </svg>
                            </a>
                        </div>
                        <div>
                            <h3 id="head3" class="text-center">Dosificación para el periodo 2022-I</h3>
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
                    <div class="mt-5 mb-2">
                        <div class="mt-3 mb-2"></div>
                        <p class="text-center mb-4">Aquí podrás consultar la fecha y hora en la cual te corresponde realizar tu inscripción.</p>

                        <table class="tabled table-bordered  display nowrap table-responsive mt-3" cellspacing="0" width="100%">
                            <tbody>
                                <tr class=" text-center">
                                    <th style="width: 350px;">Número de cuenta</th>
                                    <td style="width: 350px;" data-label="Asig">419068581</td>
                                </tr>
                                <tr class=" text-center">
                                    <th style="width: 350px;">Nombre del alumno</th>
                                    <td style="width: 350px;" data-label="Asig">Omar Romo Bautista</td>
                                </tr>
                                <tr class=" text-center">
                                    <th style="width: 350px;">Turno</th>
                                    <td style="width: 350px;" data-label="Asig">Matutino</td>
                                </tr>
                                <tr class=" text-center">
                                    <th style="width: 350px;">Carrera</th>
                                    <td style="width: 350px;" data-label="Asig">308 - Informática</td>
                                </tr>       
                                <tr class=" text-center">
                                    <th style="width: 350px;">Fecha de atención</th>
                                    <td style="width: 350px;" data-label="Asig">19-Enero-2022</td>
                                </tr>
                                <tr class=" text-center">
                                    <th style="width: 350px;">Horario de atención</th>
                                    <td style="width: 350px;" data-label="Asig">10:45</td>
                                </tr>       

                            </tbody>
                        </thead>
                    </table>
                </div>

                <!-- Se utiliza para darle espacio al final de la tabla -->
                <div class="mt-3 mb-2"></div>
                <div class="d-grid gap-2 col-3 mx-auto">

                </div>
                <div class="text-center mb-2">
                    <img class=" img-fluid mt-4" src="UNAM.jpg" width="350" height="350">
                </div>
                <!-- Se utiliza para darle espacio al final de la tabla -->
                <div class="mt-3 mb-2"></div>
                <div class="d-grid gap-2 col-3 mx-auto">
                    <p class="mt-3 mb-2"></p>
                </div>
            </form>
        </div>                     
    </div>
<!-- JavaScripts-->
<?php include_once "./includes/js.php"; ?>
</body>
</html>
