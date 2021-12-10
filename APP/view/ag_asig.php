<?php include_once "./includes/session_verify.php";?>
<!DOCTYPE html>
<html>
<?php $titulo="Asignacion | SIFESC";
include_once "./includes/header.php";?>
<body id="body">
<?php include "./includes/sidebar2.php"; ?>
<!--              AQUI VA EL CONTENIDO                -->
<div class="home_content2">
    <div class="texthome">
        <div class="grid">
            <div class="">
                <a href="./plan_de_estudios_asignatura.php" title="Volver"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi    bi-arrow-left-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                    </svg>
                </a>
            </div>
            <div>
                <h3 id="head3" class="text-center">Agrega asignaturas</h3>
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
        <div class="mt-2 mb-3 text-center">
            <p>Agrega las materias que correspondan al plan de estudios seleccionado</p>
        </div>
        <div class="d-grid gap-2 col-3 mx-auto mb-3">
            <div class="modal-content">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Asig_Modal_Asig">Agregar Asignatura</button>
            </div>
        </div> 
        <div class="">
            <div class="row">
                <div class="col-lg-12">
                    <table id="table" class="table table-bordered">
                        <thead>
                            <tr>
                                <th colspan="4">PLAN DE ESTUDIOS:
                                    <div class="datos_personales">
                                        LICENCIADO EN Informática
                                    </div>
                                </th>
                                <th colspan="3">CLAVE:
                                    <div class="datos_personales">
                                        1119 - LICENCIADO EN INFORMÁTICA
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th colspan="2">DURACIÓN:
                                    <div class="datos_personales">
                                        9 SEMESTRES
                                    </div>
                                </th>
                                <th colspan="2">CRÉDITOS OBLIGATORIOS:
                                    <div class="datos_personales">
                                        450
                                    </div>
                                </th>
                                <th colspan="1">CRÉDITOS OPTATIVAS:
                                    <div class="datos_personales">
                                        80
                                    </div>
                                </th>
                                <th colspan="2">CRÉDITOS TOTALES:
                                    <div class="datos_personales">
                                        450
                                    </div>
                                </th>
                            </tr>
                            <tr class="informacion" id="informacion">

                                <th>CLAVE ASIGN</th>
                                <th>NOMBRE DE LA ASIGNATURA</th>
                                <th>SEMESTRE</th>
                                <th>CRÉDITOS</th>
                                <th>CARÁCTER</th>
                                <th>GRUPOS</th>
                                <th>ACCIÓN</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td data-label="CLAVE">1305</td>
                                <td data-label="NOMBRE ASIGNATURA">INFORMÁTICA VI</td>
                                <td data-la data-label="SEMESTRE">7</td>
                                <td data-label="CRÉDITOS">12</td>
                                <td data-label="CARACTER">Obligatoria</td>
                                <td data-label="GRUPOS">2</td>
                                <td data-label="ACCIONES" class="text-center" colspan="2">
                                    <button type="button" class="btn btn-success btn-sm col-5 mx-auto" data-bs-toggle="modal"  data-bs-target="#Edit_Modal_P"><i class='bx bxs-pencil'></i></button>
                                    <button type="button" class="btn btn-danger btn-sm col-5" data-bs-toggle="modal"  data-bs-target="#Modal_baja_Asig"><i class='bx bx-trash'></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td data-label="CLAVE">1307</td>
                                <td data-label="NOMBRE ASIGNATURA">MATEMATICAS VI</td>
                                <td data-la data-label="SEMESTRE">7</td>
                                <td data-label="CRÉDITOS">8</td>
                                <td data-label="CARACTER">Optativa</td>
                                <td data-label="GRUPOS">2</td>
                                <td data-label="ACCIONES" class="text-center" colspan="2">
                                    <button type="button" class="btn btn-success btn-sm col-5 mx-auto" data-bs-toggle="modal"  data-bs-target="#Edit_Modal_P"><i class='bx bxs-pencil'></i></button>
                                    <button type="button" class="btn btn-danger btn-sm col-5" data-bs-toggle="modal"  data-bs-target="#Modal_baja_Asig"><i class='bx bx-trash'></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td data-label="CLAVE">1304</td>
                                <td data-label="NOMBRE ASIGNATURA">LABO. SISTEMAS COMP. VI</td>
                                <td data-label="SEMESTRE">7</td>
                                <td data-label="CRÉDITOS">12</td>
                                <td data-label="CARACTER">Obligatoria</td>
                                <td data-label="GRUPOS">2</td>
                                <td data-label="ACCIONES" class="text-center" colspan="2">
                                    <button type="button" class="btn btn-success btn-sm col-5 mx-auto" data-bs-toggle="modal"  data-bs-target="#Edit_Modal_P"><i class='bx bxs-pencil'></i></button>
                                    <button type="button" class="btn btn-danger btn-sm col-5" data-bs-toggle="modal"  data-bs-target="#Modal_baja_Asig"><i class='bx bx-trash'></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td data-label="CLAVE">1311</td>
                                <td data-label="NOMBRE ASIGNATURA">SEMINARIO DE INVESTIGACIÓN</td>
                                <td data-la data-label="SEMESTRE">7</td>
                                <td data-label="CRÉDITOS">8</td>
                                <td data-label="CARACTER">Obligatoria</td>
                                <td data-label="GRUPOS">2</td>
                                <td data-label="ACCIONES" class="text-center" colspan="2">
                                    <button type="button" class="btn btn-success btn-sm col-5 mx-auto" data-bs-toggle="modal"  data-bs-target="#Edit_Modal_P"><i class='bx bxs-pencil'></i></button>
                                    <button type="button" class="btn btn-danger btn-sm col-5" data-bs-toggle="modal"  data-bs-target="#Modal_baja_Asig"><i class='bx bx-trash'></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td data-label="CLAVE">1307</td>
                                <td data-label="NOMBRE ASIGNATURA">ANALISIS</td>
                                <td data-label="SEMESTRE">7</td>
                                <td data-label="CRÉDITOS">12</td>
                                <td data-label="CARACTER">Obligatoria</td>
                                <td data-label="GRUPOS">2</td>
                                <td data-label="ACCIONES" class="text-center" colspan="2">
                                    <button type="button" class="btn btn-success btn-sm col-5 mx-auto" data-bs-toggle="modal"  data-bs-target="#Edit_Modal_P"><i class='bx bxs-pencil'></i></button>
                                    <button type="button" class="btn btn-danger btn-sm col-5" data-bs-toggle="modal"  data-bs-target="#Modal_baja_Asig"><i class='bx bx-trash'></i></button>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> 
        </div> 
        <!-- Se utiliza para darle espacio al final de la tabla -->
        <div class="mt-3 mb-2"></div>
        <div class="d-grid gap-2 col-3 mx-auto">
            <p class="mt-3 mb-2"></p>
        </div>
    </div> 
</div> 


            <script src="../tools/sidebar.js"></script>
            <script src="../tools/clock.js"></script>
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            <!-- LIBRERIA AJAX requeried-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <!--   Datatables-->
            <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  

            <!-- extension responsive -->
            <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

            <!--Scrip para Modal-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <script>
                $(document).ready(function() {
                    $('#example').DataTable({
                        responsive: true
                    });
                } );  

            </script>

            <?php include "./modal/ag_asinatura.php"; ?>
            <?php include "./modal/edit_asig.php"; ?> 
            <?php include "./modal/modal-baja-asignatura.php"; ?> 

</body>
</html>