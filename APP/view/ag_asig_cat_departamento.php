<?php include_once "./includes/session_verify.php";?>
<!DOCTYPE html>
<html>
<?php $titulo="Departamentos | SIFESC";
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
                        <h3 id="head3" class="text-center">Agrega asignatura a profesores</h3>
                    </div>
                    <div class="clock">
                      <div class="hours">
                        <div class="first">
                          <div class="number">0</div>
                        </div>
                        <div class="second">
                          <div class="number">0</div>
                        </div>
                      </div>
                      <div class="tick">:</div>
                      <div class="minutes">
                        <div class="first">
                          <div class="number">0</div>
                        </div>
                        <div class="second">
                          <div class="number">0</div>
                        </div>
                      </div>
                    </div>     
                </div> 

                    <div class="mt-4 mb-6">
                        <p class="text-center mb-5">Selecciona un departamento con el botón de la columna acciones para poder visualizar a los profesores que pertenecen a él. Posteriormente selecciona al profesor al cual deseas agregar, editar o eliminar asignaturas.</p>
                    </div>
                </div>

                    <table class="table table-bordered  display nowrap table-responsive mt-3" cellspacing="0" width="100%">
                    <thead>
                        <tr class="text-center">
                            <th style="width: 50px;">Clave DEPTO.</th>
                            <th style="width: 100px;">Nombre DEPTO.</th>
                            <th style="width: 100px;">Acciones</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td data-label="Clave">0011</td>
                            <td data-label="Nombre">Departamento de informática</td>
                            <td data-label="Acciones">
                                <a href="./AsignaProfesor.php"><button type="button" title="Ver profesores" class="btn btn-info"><i class='bx bx-show'></i></button>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td data-label="Clave">0012</td>
                            <td data-label="Nombre">Departamento de administración</td>
                            <td data-label="Acciones">
                                <a href="./AsignaProfesor.php"><button type="button" title="Ver profesores" class="btn btn-info"><i class='bx bx-show'></i></button>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td data-label="Clave">0013</td>
                            <td data-label="Nombre">Departamento ITSE</td>
                            <td data-label="Acciones">
                                <a href="./AsignaProfesor.php"><button type="button" title="Ver profesores" class="btn btn-info"><i class='bx bx-show'></i></button>
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
    <?php include "./modal/modal-agregar-depto.php"; ?>
    <?php include "./modal/modal-edit-plan-estu.php"; ?>
    <?php include "./modal/modal-baja_plan_e.php"; ?>

</body>
</html>