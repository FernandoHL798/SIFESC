<?php include_once "./includes/session_verify.php";?>
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
                            <a href="./turnos.php" title="Volver"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi    bi-arrow-left-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                                </svg>
                            </a>
                        </div>
                        <div>
                            <h3 id="head3" class="text-center">Agregar Alumno<br>--ADJUNTAR TURNO-- <br>PLAN DE ESTUDIO</h3>
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
                    <p class="text-center mb-4">Aquí podrás agregar a los alumnos</p> 
                    <div class="mt-3 mb-2"></div>
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <div class="modal-content">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Asig_Modal_Alum">
                                Agregar Alumno
                            </button>
                        </div>
                    </div>
                    <div class="input-group mb-1 mt-4">
                        <input class="form-control col-md-3 light-table-filter" data-table="order-table" type="text" placeholder="Buscar alumno...">
                    </div>
                </div>

                <table class="table table-bordered order-table display nowrap table-responsive mt-3" cellspacing="0" width="100%">
                    <thead>
                        <tr class="text-center">
                            <th style="width: 70px;">Número de cuenta</th>
                            <th style="width: 100px;">Primer Apellido</th>
                            <th style="width: 100px;">Segundo Apellido </th>
                            <th style="width: 100px;">Nombre(s)</th>
                            <th style="width: 270px;">Correo</th>
                            <th style="width: 120px;">Teléfono</th>
                            <th style="width: 120px;">Fecha de nacimiento</th>
                            <th style="width: 100px;">Generación</th>
                            <th style="width: 140px;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td data-label="Clave">419070375</td>
                            <td data-label="Apellido M">Villagomez</td>
                            <td data-label="Apellido P">Pichardo</td>
                            <td data-label="Nombre">Luis Antonio</td>
                            <td data-label="Correo">vipl891212@comunidad.unam.mx</td>
                            <td data-label="Tel">5531579580</td>
                            <td data-label="Fecha de nacimiento">08-09-1995</td>
                            <td data-label="Tel">2018</td>
                            <td data-label="Acciones">
                                <button type="button" title="Editar Alumno" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Edit_Modal_P"><i class='bx bxs-pencil'></i></button>
                                <button type="button" title="Eliminar Alumno" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal_baja_Alum"><i class='bx bx-trash'></i></button> 
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td data-label="Clave">314243919</td>
                            <td data-label="Apellido M">Martínez</td>
                            <td data-label="Apellido P">Hernández</td>
                            <td data-label="Nombre">Emmanuel</td>
                            <td data-label="Correo">emma@gmail.com</td>
                            <td data-label="Tel">5620907010</td>
                            <td data-label="Fecha de nacimiento">06-06-1998</td>
                            <td data-label="Tel">2017</td>
                            <td data-label="Acciones">  
                                <button type="button" title="Editar Alumno" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Edit_Modal_P"><i class='bx bxs-pencil'></i></button>
                                <button type="button" title="Eliminar Alumno" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal_baja_Alum"><i class='bx bx-trash'></i></button> 
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td data-label="Clave">3145698536</td>
                            <td data-label="Apellido M">Hernández</td>
                            <td data-label="Apellido P">Ledezma</td>
                            <td data-label="Nombre">Luis Fernando</td>
                            <td data-label="Correo">luis@hotmail.com</td>
                            <td data-label="Tel">5584986325</td>
                            <td data-label="Fecha de nacimiento">01-02-2000</td>
                            <td data-label="Tel">2018</td>
                            <td data-label="Acciones">
                                <button type="button" title="Editar Alumno" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Edit_Modal_P"><i class='bx bxs-pencil'></i></button>
                                <button type="button" title="Eliminar Alumno" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal_baja_Alum"><i class='bx bx-trash'></i></button>
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

<!-- JavaScripts-->
<?php include_once "./includes/js.php"; ?>
<!-- Modales -->
<?php include "./modal/modal-agregar-alumno.php"; ?>
<?php include "./modal/modal-edit-alumno.php"; ?>
<?php include "./modal/modal-baja-alum.php"; ?>


</body>
</html>
