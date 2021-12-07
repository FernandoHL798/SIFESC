<?php include_once "./includes/session_verify.php";?>
<!DOCTYPE html>
<html>
<?php $titulo="Asignacion | SIFESC";
include_once "./includes/header.php";?>
<body id="body">
    <?php
include "./includes/sidebar2.php";
    ?>

    
    <!--              AQUI VA EL CONTENIDO                -->
            <div class="home_content2">
                <div class="texthome">
                    <form class="mb-4">              
                        <div class="">
                            <div class="row">
                                <div class="">
                                    <a href="http://localhost/SIFESC/APP/view/AsignaProfesor.php" title="Volver"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi    bi-arrow-left-circle" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                                        </svg>
                                    </a>
                                </div>        
                            </div> 
                                <div class="row">
                          
                            <p class=""></p>
                            <h3 id="head3" class="text-center">Asignación de materias a profesor:</h3>
                            <p class="mt-3 mb-4"></p>
                                <div class="d-grid gap-2 col-3 mx-auto">
                                    <div class="modal-content">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar Materia</button>
                                    </div>
                                </div>
                                </div>
                                    <div class="mt-3 mb-2"></div>
                    
                                
                        </div>
                            <div class="">
        <div class="row">
            <div class="col-lg-12">
                <table id="example" class="table table-bordered">
                    <thead>
                        <tr>
                            <th colspan="3">RFC
                                <div class="datos_personales">
                                    LAOP001009389
                                </div>
                            </th>
                            <th colspan="3">DEPARTAMENTO :
                                <div class="datos_personales">
                                    INFORMÁTICA
                                </div>
                            </th>
                            <th colspan="3">ÁREA :
                                <div class="datos_personales">
                                    1
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="3">NOMBRE :
                                <div class="datos_personales">
                                    JOSE
                                </div>
                            </th>
                            <th colspan="3">Primer Apellido :
                                <div class="datos_personales">
                                    SANDOVAL
                                </div>
                            </th>
                            <th colspan="3">Segundo Apellido :
                                <div class="datos_personales">
                                    HERNÁNDEZ
                                </div>
                            </th>
                            
                            
                        </tr>
                        <tr class="informacion" id="informacion">
                            
                            <th>Clave Plan de estudios</th>
                            <th>Plan de estudios</th>
                            <th>Clave de la Asignatura</th>
                            <th>Asignatura</th>
                            <th>Sem</th>
                            <th>Grupo</th>
                            <th>créditos</th>
                            <th>carácter</th>
                            <th>ACCION</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td data-label="No">1</td>
                            <td data-label="Clave">1305</td>
                            <td data-label="Nombre de la Asig">INFORMÁTICA VI</td>
                            <td data-label="Cred">12</td>
                            <td data-label="Sem">7</td>
                            <td data-label="Gpo">1701</td>
                            <td data-label="Mov">Alta</td>
                            <td data-label="Mov">Alta</td>
                            <td colspan="2" class="text-center">
                                <button type="button" class="btn btn-danger btn-sm col-5" data-bs-toggle="modal"  data-bs-target="#Modal_baja"><i class='bx bx-trash'></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="No">1</td>
                            <td data-label="Clave">1305</td>
                            <td data-label="Nombre de la Asig">MATEMATICAS</td>
                            <td data-label="Cred">12</td>
                            <td data-label="Sem">7</td>
                            <td data-label="Gpo">1701</td>
                            <td data-label="Mov">Alta</td>
                            <td data-label="Mov">Alta</td>
                            <td colspan="2" class="text-center">
                                <button type="button" class="btn btn-danger btn-sm col-5" data-bs-toggle="modal"  data-bs-target="#Modal_baja"><i class='bx bx-trash'></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="No">1</td>
                            <td data-label="Clave">1311</td>
                            <td data-label="Nombre de la Asig">INFORMÁTICA VI</td>
                            <td data-label="Cred">12</td>
                            <td data-label="Sem">7</td>
                            <td data-label="Gpo">1701</td>
                            <td data-label="Mov">Alta</td>
                            <td data-label="Mov">Alta</td>
                            <td colspan="2" class="text-center">
                                <button type="button" class="btn btn-danger btn-sm col-5" data-bs-toggle="modal"  data-bs-target="#Modal_baja"><i class='bx bx-trash'></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="No">1</td>
                            <td data-label="Clave">1305</td>
                            <td data-label="Nombre de la Asig">INFORMÁTICA VI</td>
                            <td data-label="Cred">12</td>
                            <td data-label="Sem">7</td>
                            <td data-label="Gpo">1701</td>
                            <td data-label="Mov">Alta</td>
                            <td data-label="Mov">Alta</td>
                            <td colspan="2" class="text-center">
                                <button type="button" class="btn btn-danger btn-sm col-5" data-bs-toggle="modal"  data-bs-target="#Modal_baja"><i class='bx bx-trash'></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="No">1</td>
                            <td data-label="Clave">1305</td>
                            <td data-label="Nombre de la Asig">INFORMÁTICA VI</td>
                            <td data-label="Cred">12</td>
                            <td data-label="Sem">7</td>
                            <td data-label="Gpo">1701</td>
                            <td data-label="Mov">Alta</td>
                            <td data-label="Mov">Alta</td>
                            <td colspan="2" class="text-center">
                                <button type="button" class="btn btn-danger btn-sm col-5" data-bs-toggle="modal"  data-bs-target="#Modal_baja"><i class='bx bx-trash'></i></button>
                            </td>
                        </tr>
                </table>
            </div>
        </div>
        <!-- Se utiliza para darle espacio al final de la tabla -->
                                <div class="mt-3 mb-2"></div>
                                    <div class="d-grid gap-2 col-3 mx-auto">
                                        <p class="mt-3 mb-2"></p>
                                    </div>

             
            <script src="../tools/sidebar.js"></script>
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

            
        <?php include "./modal/modal-asignacion.php"; ?>
        <?php include "./modal/modal-baja-asignacion.php"; ?>

</body>
</html>