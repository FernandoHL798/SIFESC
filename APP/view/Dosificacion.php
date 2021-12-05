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
    <title>Dosificación</title>
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
                                <div class="grid mt-3 mb-4">
                                    <div class="">
                                        <a href="http://localhost/SIFESC/APP/view/index.php" title="Volver"> 
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi    bi-arrow-left-circle" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div>
                                        <h3 id="head3" class="text-center">Dosificación para el periodo de altas y bajas 2022-I</h3>
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
                                <div class="mt-5 mb-2">
                                    
                            
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

            <script src="../tools/sidebar.js"></script>
            <script src="../tools/clock.js"></script>
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            <!-- LIBRERIA AJAX requeried-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="../service/lista-alumno.js"></script>
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

            

</body>
</html>
