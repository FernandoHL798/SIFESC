<?php include_once "./includes/session_verify.php";?>
<!DOCTYPE html>
<html>
<?php $titulo="Departamentos | SIFESC";
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
                        <a href="http://localhost/SIFESC/APP/view/index.php" title="Volver"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi    bi-arrow-left-circle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                            </svg>
                        </a>
                    </div>
                    <div>
                        <h3 id="head3" class="text-center">Departamentos FESC</h3>
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
                        <p class="text-center mb-5">Agrega los departamentos existentes de la FESC.</p>
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <div class="modal-content">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#depto_Modal">
                                  Agregar Departamento
                            </button>
                        </div>
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
                                <button type="button" title="Editar departamento" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#depto_edit_Modal"><i class='bx bxs-pencil'></i></button>
                                <button type="button" title="Eliminar departamento" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal_baja_depto"><i class='bx bx-trash'></i></button> 
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td data-label="Clave">0012</td>
                            <td data-label="Nombre">Departamento de administración</td>
                            <td data-label="Acciones">
                                <button type="button" title="Editar departamento" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#depto_edit_Modal"><i class='bx bxs-pencil'></i></button>
                                <button type="button" title="Eliminar departamento" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal_baja_depto"><i class='bx bx-trash'></i></button>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td data-label="Clave">0013</td>
                            <td data-label="Nombre">Departamento ITSE</td>
                            <td data-label="Acciones">
                                <button type="button" title="Editar departamento" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#depto_edit_Modal"><i class='bx bxs-pencil'></i></button>
                                <button type="button" title="Eliminar departamento" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal_baja_depto"><i class='bx bx-trash'></i></button> 
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
    <!-- Modales -->
    <?php include "./modal/modal-agregar-depto.php"; ?>
    <?php include "./modal/modal-edit-departamento.php"; ?>
    <?php include "./modal/modal-baja-depto.php"; ?>
</body>
</html>
