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
                        <a href="./index.php" title="Volver"> 
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

                <h5 class="text-center mb-3">Agrega periodos</h5>
                <p class="text-center mb-2">Agrega los nuevos periodos. <br> El sistema para todos los usuarios se basara en el periodo activo. <br> Solo se puede tener activo un periodo a la vez. </p>
                <div class="d-grid gap-2 col-3 mx-auto">
                    <div class="modal-content">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Asig_Modal">
                            Nuevo Periodo
                        </button>
                    </div>

                </div>

                <div class="input-group mb-3 mt-3">
                    <input class="form-control col-md-3 light-table-filter" data-table="order-table" type="text" placeholder="Buscar período...">
                </div>
            </div>

            <table class="table table-bordered order-table display nowrap table-responsive mt-3" cellspacing="0" width="100%">
                <thead style="font-size: 5px!important">
                    <tr class="text-center">
                        <th >Periodo</th>
                        <th >Fecha de inicio del período</th>
                        <th >Fecha de fin del período</th>
                        <th >ACTIVAR / DESACTIVAR</th>
                        <th >ACCIONES</th>

                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td data-label="Clave">2022/1</td>
                        <td></td>
                        <td></td>
                        <td>
                            <label class="switch">
                              <input type="checkbox">
                              <span class="slider round"></span>
                          </label>
                        </td>
                        <td data-label="Acciones">
                            <button type="button" title="Eliminar Período" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#elimina_periodo"><i class='bx bx-trash'></i></button> 
                            <button type="button" title="Editar Período" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit_periodo"><i class='bx bxs-pencil'></i></button>
                            <a href="./periodos_informa.php"><button type="button" title="Ver acciones del período" class="btn btn-info"><i class='bx bx-show'></i></button>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td data-label="Clave">2021/2</td>
                        <td data-label="Duración">09/08/2021</td>
                        <td data-label="Duración">19/08/2021</td>
                        <td>
                            <label class="switch">
                              <input type="checkbox" checked>
                              <span class="slider round"></span>
                          </label>
                        </td>
                        <td data-label="Acciones">
                            <button type="button" title="Eliminar Período" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#elimina_periodo"><i class='bx bx-trash'></i></button> 
                            <button type="button" title="Editar Período" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit_periodo"><i class='bx bxs-pencil'></i></button>
                            <a href="./periodos_informa.php"><button type="button" title="Ver acciones del período" class="btn btn-info"><i class='bx bx-show'></i></button>

                            </td>
                        </tr>
                        <tr class="text-center">
                            <td data-label="Clave">2021/1</td>
                            <td data-label="Duración">09/01/2021</td>
                            <td data-label="Duración">19/01/2021</td>
                            <td>
                                <label class="switch">
                                  <input type="checkbox">
                                  <span class="slider round"></span>
                              </label>
                          </td>

                          <td data-label="Acciones">
                            <button type="button" title="Eliminar Período" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#elimina_periodo"><i class='bx bx-trash'></i></button> 
                            <button type="button" title="Editar Período" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit_periodo"><i class='bx bxs-pencil'></i></button>
                            <a href="./periodos_informa.php"><button type="button" title="Ver acciones del período" class="btn btn-info"><i class='bx bx-show'></i></button>

                            </td>
                        </tr>
                        <tr class="text-center">
                            <td data-label="Clave">2020/2</td>
                            <td data-label="Duración">09/09/2021</td>
                            <td data-label="Duración">19/09/2021</td>
                            <td>
                                <label class="switch">
                                  <input type="checkbox">
                                  <span class="slider round"></span>
                              </label>
                          </td>

                          <td data-label="Acciones">
                            <button type="button" title="Eliminar Período" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#elimina_periodo"><i class='bx bx-trash'></i></button> 
                            <button type="button" title="Editar Período" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit_periodo"><i class='bx bxs-pencil'></i></button>
                            <a href="./periodos_informa.php"><button type="button" title="Ver acciones del período" class="btn btn-info"><i class='bx bx-show'></i></button>

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
<?php include "./modal/modal-edit-periodo.php"; ?>
<?php include "./modal/modal-baja-periodo.php"; ?>

</body>
</html>