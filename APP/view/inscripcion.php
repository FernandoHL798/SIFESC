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
                        <div class="">
                            <div class="grid">
                                <div class="">
                                    <a href="http://localhost/SIFESC/APP/view/index.php" title="Volver"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi    bi-arrow-left-circle" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                                        </svg>
                                    </a>
                                </div>
                                <div>
                                    <h3 id="head3" class="text-center">Sistema de Inscripción</h3>
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

                                  <!--PROBLEMAS CON EL SEGUNDERO, NO LO AGREGO POR EL MOMENTO (EMMANUEL)
                                  <div class="tick">:</div>
                                  <div class="seconds">
                                    <div class="first">
                                      <div class="number">0</div>
                                    </div>
                                    <div class="second infinite">
                                      <div class="number">0</div>
                                    </div>
                                  </div>
                                    -->
                                </div>     
                            </div> 
                            <div class="mt-3 mb-2"></div>
                            <h4 class="text-center mb-5">Selecciona las materias que inscribiras en este nuevo periodo</h4>
                            <p class="text-center mb-4">Para dar de alta una materia selecciona el botón << Agregar asignatura >> y rellena los campos requeridos<br>
                            Para dar de baja la materia presiona el botón de eliminar ubicado en la columna de "ACCION". Seleccione este botón de acuerdo a la fila en donde se encuente su materia a dar de baja</p>  
                        </div>
    <div class="">
        <div class="row">
            <div class="col-lg-12">
                <table id="example" class="table table-bordered">
                    <thead>
                        <tr>
                            <th colspan="1">Numero de cuenta:
                                <div class="datos_personales">
                                    314243919
                                </div>
                            </th>
                            <th colspan="3">Nombre:
                                <div class="datos_personales">
                                    Omar Romo Bautista
                                </div>
                            </th>
                            <th colspan="2">Año de Ingreso:
                                <div class="datos_personales">
                                    2019
                                </div>
                            </th>
                            <th colspan="2">Carrera:
                                <div class="datos_personales">
                                    308
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="3">Plantel:
                                <div class="datos_personales">
                                    106 - F.E.S Cuautitlan (Contaduria)
                                </div>
                            </th>
                            <th colspan="3">Plan de estudios:
                                <div class="datos_personales">
                                    1119 - licenciado en informatica
                                </div>
                            </th>
                            <th colspan="2">Periodo :
                                <div class="datos_personales">
                                    Ejemplo de periodo
                                </div>
                            </th>

                        </tr>
                        <tr class="informacion" id="informacion">
                            
                            <th>No</th>
                            <th>Clave</th>
                            <th>Nombre de la Asignatura</th>
                            <th>Cred
                                <div class="datos_personales">
                                    Contador de creditos (68)
                                </div>
                            </th>
                            <th>Sem</th>
                            <th>Gpo</th>
                            <th>Mov</th>
                            <th colspan="2">ACCION</th>
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
                            <td colspan="2" class="text-center">
                                <button type="button" title="Eliminar Materia" class="btn btn-danger btn-sm col-7" data-bs-toggle="modal"  data-bs-target="#Modal_baja"><i class='bx bx-trash'></i></button>
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
                            <td colspan="2" class="text-center">
                                <button type="button" title="Eliminar Materia" class="btn btn-danger btn-sm col-7" data-bs-toggle="modal"  data-bs-target="#Modal_baja"><i class='bx bx-trash'></i></button>
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
                            <td colspan="2" class="text-center">
                                <button type="button" title="Eliminar Materia" class="btn btn-danger btn-sm col-7" data-bs-toggle="modal"  data-bs-target="#Modal_baja"><i class='bx bx-trash'></i></button>
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
                            <td colspan="2" class="text-center">
                                <button type="button" title="Eliminar Materia" class="btn btn-danger btn-sm col-7" data-bs-toggle="modal"  data-bs-target="#Modal_baja"><i class='bx bx-trash'></i></button>
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
                            <td colspan="2" class="text-center">
                                <button type="button" title="Eliminar Materia" class="btn btn-danger btn-sm col-7" data-bs-toggle="modal"  data-bs-target="#Modal_baja"><i class='bx bx-trash'></i></button>
                            </td>
                        </tr>
                </table>
            </div>
        </div>
    </div> 

                            <!-- Se utiliza para darle espacio al final de la tabla -->
                                <div class="mt-3 mb-2"></div>
                                <div class="d-grid gap-2 col-3 mx-auto">
                                    
                                </div>
                                <div class="d-grid gap-2 col-3 mx-auto">
                                    <div class="modal-content">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar Asignatura</button>
                                    </div>
                                </div>
                                <div class=" col-3 mx-auto mt-2">
                                    <div class="modal-content mb-4">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-outline-success" onclick="window.location.href='./ConsultaInscripcion.php'">Solicitar</button>
                                            </div>
                                        </div>
                                        <div class="mt-3 mb-4"></div>
                                <div class="d-grid gap-2 col-3 mx-auto mb-4">
                                    <p class="mt-3 mb-2"></p>
                                </div>
                                <div class="d-grid gap-2 col-3 mx-auto mb-4">
                                    <p class="mt-3 mb-2"></p>
                                </div>
                                    </div>
                                </div>
                                      
                    </div> 
                </form>
            </div>    
              
             
            <script src="../tools/sidebar.js"></script>
            <script src="../tools/clock.js"></script>
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
        <?php include "./modal/modal-asignacion.php"; ?>
        <?php include "./modal/modal-baja-asignacion.php"; ?>

</body>
</html>