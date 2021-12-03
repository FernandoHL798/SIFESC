<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../css/styles_menu.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <title>Saturacion_Prof</title>
</head>
<body id="body">
    <?php
include "./includes/sidebar2.php";
    ?>

    
    <!--              AQUI VA EL CONTENIDO                -->
    <div class="home_content2">
        <div class="texthome">
 <form class="mb-4">              
            <div class="mb-4">
                <div class="row">
                    <div class="">
                        <a href="http://localhost/SIFESC/APP/view/index.php" title="Volver"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi    bi-arrow-left-circle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                            </svg>
                        </a>
                    </div>        
                </div> 
                        <h3 class="text-center mb-3">Planes de estudio</h3>
                        <p class="text-center mb-5">Agrega los planes de estudio existentes.</p>
                <div class="d-grid gap-2 col-3 mx-auto">
                    <div class="modal-content">
                    <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Asig_Modal">
                              Agregar Plan de Estudios
                        </button>
                          </div>

                    </div>
                </div>

                    <table class="table table-bordered  display nowrap table-responsive mt-3" cellspacing="0" width="100%">
                    <thead>
                        <tr class="text-center">
                            <th style="width: 50px;">Clave</th>
                            <th style="width: 100px;">Nombre</th>
                            <th style="width: 50px;">Duración</th>
                            <th style="width: 80px;">Límite inscripción por periodo</th>
                            <th style="width: 80px;">Créditos obligatorios</th>
                            <th style="width: 80px;">Créditos optativos</th>
                            <th style="width: 80px;">Créditos totales</th>
                            <th style="width: 100px;">Acciones</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td data-label="Clave">0017</td>
                            <td data-label="Nombre">
                            Informática</td>
                            <td data-label="Duración">9</td>
                            <td data-label="Limite de Inscr. por periodo">8</td>
                            <td data-label="Creditos Oblig.">359</td>
                            <td data-label="Creditos Opt.">72</td>
                            <td data-label="Creditos Tot.">431</td>
                            <td data-label="Acciones">
                                <button type="button" title="Editar Plan" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Edit_Plan_Modal"><i class='bx bxs-pencil'></i></button>
                                <button type="button" title="Eliminar Plan" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal_baja_Plan"><i class='bx bx-trash'></i></button> 
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td data-label="Clave">0017</td>
                            <td data-label="Nombre">Diseño Gráfico</td>
                            <td data-label="Duración">9</td>
                            <td data-label="Limite de Inscr. por periodo">8</td>
                            <td data-label="Creditos Oblig.">359</td>
                            <td data-label="Creditos Opt.">72</td>
                            <td data-label="Creditos Tot.">431</td>
                            
                            <td data-label="Acciones">
                                <button type="button" title="Editar Plan" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Edit_Plan_Modal"><i class='bx bxs-pencil'></i></button>
                                <button type="button" title="Eliminar Plan" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal_baja_Plan"><i class='bx bx-trash'></i></button>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td data-label="Clave">0017</td>
                            <td data-label="Nombre">Ingenieria Agricola</td>
                            <td data-label="Duración">9</td>
                            <td data-label="Limite de Inscr. por periodo">8</td>
                            <td data-label="Creditos Oblig.">359</td>
                            <td data-label="Creditos Opt.">72</td>
                            <td data-label="Creditos Tot.">431</td>
                            <td data-label="Acciones">
                                <button type="button" title="Editar Plan" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Edit_Plan_Modal"><i class='bx bxs-pencil'></i></button>
                                <button type="button" title="Eliminar Plan" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal_baja_Plan"><i class='bx bx-trash'></i></button> 
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


    <script src="../tools/sidebar.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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

    <?php include "./modal/modal-agregar-plan-estu.php"; ?>
    <?php include "./modal/modal-edit-plan-estu.php"; ?>
    <?php include "./modal/modal-baja_plan_e.php"; ?>

</body>
</html>
