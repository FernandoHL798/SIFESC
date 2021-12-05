<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Menú responsivo UNAM</title>
    <link rel="stylesheet" type="text/css" href="../../css/styles_menu.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    
</head>
<body id="body">
    <?php
include "./includes/sidebar2.php";
    ?>

    <!--              AQUI VA EL CONTENIDO                -->
    <div class="home_content2">
        <div class="texthome">
            <div class="grid mt-3 mb-4">
                <div class="">
                    <a href="./profesores-cat-departamento.php" title="Volver"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi    bi-arrow-left-circle" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                        </svg>
                    </a>
                </div>
                <div>
                    <h3 id="head3" class="text-center">Detalles del grupo</h3>
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
            <div class="">
                <div class="row">
                    <div class="col-lg-12">
                        <table id="example" class="table table-bordered">
                            <thead>
                                <tr class="informacion" id="informacion">
                                    <th colspan="2">PLAN DE ESTUDIOS:
                                        <div class="datos_personales">1119</div>
                                    </th>
                                    <th colspan="3">CARRERA:
                                        <div class="datos_personales">
                                            LIC. INFORMÁTICA
                                        </div>
                                    </th>
                                    <th colspan="1">CLAVE ASIGNATURA:
                                        <div class="datos_personales">
                                            113
                                        </div>
                                    </th>
                                    <th colspan="1">NOMBRE ASIGNATURA :
                                        <div class="datos_personales">
                                            SEGURIDAD INFORMÁTICA
                                        </div>
                                    </th>
                                </tr>
                                <tr>
                                    <th colspan="3">GRUPO:
                                        <div class="datos_personales">
                                            1702
                                        </div>
                                    </th>
                                    <th colspan="4">SEMESTRE:
                                        <div class="datos_personales">
                                            7
                                        </div>
                                    </th>

                                </tr>
                                <tr class="informacion" id="informacion">
                                    <th>NO. DE CUENTA</th>
                                    <th>NOM. ALUMNO</th>
                                    <th>CORREO</th>
                                    <th>TELÉFONO</th>
                                    <th>ESTATUS</th>
                                    <th>CALIFICACIÓN</th>
                                    <th>ACCIÓN</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="NÚMERO">314243919</td>
                                    <td data-label="NOM ALUMNO">MARTÍNEZ HERNÁNDEZ EMMANUEL</td>
                                    <td data-label="CORREO">emmanuel_@gmail.com</td>
                                    <td data-label="TELEFONO">5458565251</td>
                                    <td data-la data-label="ESTATUS">EN CURSO</td>
                                    <td data-label="CALIFICACIÓN"></td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm d-grid gap-2 col-6 mx-auto" data-bs-toggle="modal" data-bs-target="#Modal_profesor_editalumno">
                                            
                                                <i class='bx bxs-pencil'></i>
                                            
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                   <td data-label="NÚMERO">314243487</td>
                                    <td data-label="NOM ALUMNO">ARCOS PERALTA ERICK</td>
                                    <td data-label="CORREO">erick_@gmail.com</td>
                                    <td data-label="TELEFONO">5425565251</td>
                                    <td data-la data-label="ESTATUS">EN CURSO</td>
                                    <td data-label="CALIFICACIÓN"></td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm d-grid gap-2 col-6 mx-auto" data-bs-toggle="modal" data-bs-target="#Modal_profesor_editalumno">
                                            
                                                <i class='bx bxs-pencil'></i>
                                           
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td data-label="NÚMERO">314243814</td>
                                    <td data-label="NOM ALUMNO">HERNÁNDEZ LEDEZMA LUIS FERNANDO</td>
                                    <td data-label="CORREO">fernando_@gmail.com</td>
                                    <td data-label="TELEFONO">5458565698</td>
                                    <td data-la data-label="ESTATUS">EN CURSO</td>
                                    <td data-label="CALIFICACIÓN"></td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm d-grid gap-2 col-6 mx-auto" data-bs-toggle="modal" data-bs-target="#Modal_profesor_editalumno">
                                            
                                                <i class='bx bxs-pencil'></i>
                                            
                                        </button>
                                    </td>
                                </tr>
                            </tbody>     
                        </table>
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2 col-11 mx-auto mb-4 mt-3">
                <button class="btn btn-primary" type="button" onclick="printData()">IMPRIMIR</button>
            </div>
            Aun no funciona este botón de imprimir (EMH)
        </div>
    </div>


            



    <script src="../tools/sidebar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   <!-- LIBRERIA AJAX requeried-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="../service/lista-alumno.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#example').DataTable({
                responsive:true

            })
        });
    </script>

    <?php include "./modal/modal-prof-calif-alum.php"; ?>
</body>
</html>
