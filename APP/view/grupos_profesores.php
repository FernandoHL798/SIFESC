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


                <div class="row">
                                <div class="">
                                    <a href="http://localhost/SIFESC/APP/view/index.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi    bi-arrow-left-circle" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>


    <div class="titulo">
        Mis grupos asignados
    </div>
    <div class="">
        <div class="row">
            <div class="col-lg-12">
                <table id="example" class="table table-bordered">
                    <thead>
                        <tr class="informacion" id="informacion">
                            <th colspan="2">ÁREA :
                                <div class="datos_personales">
                                    1
                                </div>
                            </th>
                            <th colspan="2">CLAVE DE PROFESOR:
                                <div class="datos_personales">12345678</div>
                            </th>
                            <th colspan="4">NOMBRE:
                                <div class="datos_personales">
                                    Maricela Lara Martínez
                                </div>
                            </th>
                            <th colspan="1">DEPARTAMENTO:
                                <div class="datos_personales">
                                    Informática
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th colspan="4">PERIODO:
                                <div class="datos_personales">
                                    2021/20
                                </div>
                            </th>
                            <th colspan="3">PLANTEL:
                                <div class="datos_personales">
                                    106 - F.E.S. CUAUTITLÁN
                                </div>
                            </th>
                            <th colspan="2">NO SE QUE VA AQUI</th>
                        </tr>
                        <tr class="informacion" id="informacion">
                            <th>NO</th>
                            <th>PLAN DE ESTUDIOS</th>
                            <th>NOMBRE DE LA CARRERA</th>
                            <th>CLAVE ASIGNATURA</th>
                            <th>NOM. ASIG</th>
                            <th>GPO.</th>
                            <th>TIPO GPO.</th>
                            <th>SEM.</th>
                            <th>ACCION</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td data-label="NÚMERO">1</td>
                            <td data-label="PLAN DE ESTUDIOS">1119</td>
                            <td data-label="CARRERA">LIC. INFORMÁTICA</td>
                            <td data-label="CLAVE. ASIGNAT.">12</td>
                            <td data-la data-label="NOM. ASIGNAT">PROGRAMACIÓN I</td>
                            <td data-label="GRUPO">1701</td>
                            <td data-label="TIPO GRUPO">ORDINARIO</td>
                            <td data-label="SEMESTRE">1</td>
                            <td>
                                <button type="button" class="btn btn-info btn-sm d-grid gap-2 col-6 mx-auto">
                                    <a class="text-black" href="./grupos_profesores_alumnos.php">
                                        <i class='bx bx-show'></i>
                                    </a>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="NÚMERO">1</td>
                            <td data-label="PLAN DE ESTUDIOS">1131</td>
                            <td data-label="CARRERA">CONTADURIA</td>
                            <td data-label="CLAVE. ASIGNAT.">135</td>
                            <td data-la data-label="NOM. ASIGNAT">COMPUTO I</td>
                            <td data-label="GRUPO">1103</td>
                            <td data-label="TIPO GRUPO">ORDINARIO</td>
                            <td data-label="SEMESTRE">2</td>
                            <td>
                                <button type="button" class="btn btn-info btn-sm d-grid gap-2 col-6 mx-auto">
                                    <a class="text-black" href="./grupos_profesores_alumnos.php">
                                        <i class='bx bx-show'></i>
                                    </a>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="NÚMERO">1</td>
                            <td data-label="PLAN DE ESTUDIOS">1119</td>
                            <td data-label="CARRERA">LIC. INFORMÁTICA</td>
                            <td data-label="CLAVE. ASIGNAT.">12</td>
                            <td data-la data-label="NOM. ASIGNAT">PROGRAMACIÓN I</td>
                            <td data-label="GRUPO">1751</td>
                            <td data-label="TIPO GRUPO">ORDINARIO</td>
                            <td data-label="SEMESTRE">1</td>
                            <td>
                                <button type="button" class="btn btn-info btn-sm d-grid gap-2 col-6 mx-auto">
                                    <a class="text-black" href="./grupos_profesores_alumnos.php">
                                        <i class='bx bx-show'></i>
                                    </a>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="NÚMERO">1</td>
                            <td data-label="PLAN DE ESTUDIOS">1121</td>
                            <td data-label="CARRERA">ITSE</td>
                            <td data-label="CLAVE. ASIGNAT.">113</td>
                            <td data-la data-label="NOM. ASIGNAT">PROGRAMACIÓN V</td>
                            <td data-label="GRUPO">1502</td>
                            <td data-label="TIPO GRUPO">EXTRAORDINARIO</td>
                            <td data-label="SEMESTRE">5</td>
                            <td>
                                <button type="button" class="btn btn-info btn-sm d-grid gap-2 col-6 mx-auto">
                                    <a class="text-black" href="./grupos_profesores_alumnos.php">
                                        <i class='bx bx-show'></i>
                                    </a>
                                </button>
                            </td>
                        </tr>
                </table>
            </div>
        </div>
    </div>

            <!-- Button trigger modal -->


<!-- MODAL DE BAJA DE ASIGNATURA -->
     <div class="modal fade" id="Modal_baja" tabindex="-1" aria-labelledby="Modal_baja" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="Modal_b">ADVERTENCIA</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="mt-3 mb-2"></div>
            <div class="form-group" id="Edit_plan_grup">
                    <H5>¿Esta seguro que desea dar de baja la materia?</H5>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary">Aceptar</button>
          </div>
        </div>
      </div>
    </div>

    <script src="../service/grupo-profesor.js"></script>
    <script src="../tools/sidebar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
    

</body>
</html>
