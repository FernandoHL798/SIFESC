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
            <form class="mb-4">              
                <div class="mb-4">
                    <div class="grid mt-3 mb-4">
                                    <div class="">
                                        <a href="./AsignaProfesor.php" title="Volver"> 
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi    bi-arrow-left-circle" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div>
                                        <h3 id="head3" class="text-center">Agrega asignatura a profesor</h3>
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
                        <div class="row">
                            <p class="mb-2"></p>             
                        </div>
                            <div class="mt-3 mb-2"></div>
                                <div class="d-grid gap-2 col-3 mx-auto">
                                    <div class="modal-content">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Add_Asignatura_prof">Agregar Asignatura</button>
                                    </div>
                                </div>
                </div>
                <div class="">
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table table-bordered  display nowrap table-responsive mt-3" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th colspan="6">RFC
                                            <div class="datos_personales">
                                                LAOP001009389
                                            </div>
                                        </th>
                                        <th colspan="3">DEPARTAMENTO :
                                            <div class="datos_personales">
                                                INFORMÁTICA
                                            </div>
                                        </th>
                                        
                                    </tr>
                                    <tr>
                                        <th colspan="2">NOMBRE :
                                            <div class="datos_personales">
                                                JOSE
                                            </div>
                                        </th>
                                        <th colspan="3">Primer Apellido :
                                            <div class="datos_personales">
                                                SANDOVAL
                                            </div>
                                        </th>
                                        <th colspan="4">Segundo Apellido :
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
                                        <td data-label="Clave Plan Est.">123</td>
                                        <td data-label="Plan de Estudios">Informática</td>
                                        <td data-label="Clave Asig">2501</td>
                                        <td data-label="Asig">Mate VI</td>
                                        <td data-label="Sem">7</td>
                                        <td data-label="Gpo">1701</td>
                                        <td data-label="Cred">8</td>
                                        <td data-label="Carácter">Obligatoria</td>
                                        <td colspan="2" class="text-center">
                                            <button type="button" class="btn btn-danger btn-sm col-5" data-bs-toggle="modal"  data-bs-target="#Modal_baja"><i class='bx bx-trash'></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-label="Clave Plan Est.">123</td>
                                        <td data-label="Plan de Estudios">Informática</td>
                                        <td data-label="Clave Asig">2501</td>
                                        <td data-label="Asig">Mate VI</td>
                                        <td data-label="Sem">7</td>
                                        <td data-label="Gpo">1701</td>
                                        <td data-label="Cred">8</td>
                                        <td data-label="Carácter">Obligatoria</td>
                                        <td colspan="2" class="text-center">
                                            <button type="button" class="btn btn-danger btn-sm col-5" data-bs-toggle="modal"  data-bs-target="#Modal_baja"><i class='bx bx-trash'></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-label="Clave Plan Est.">123</td>
                                        <td data-label="Plan de Estudios">Informática</td>
                                        <td data-label="Clave Asig">2501</td>
                                        <td data-label="Asig">Mate VI</td>
                                        <td data-label="Sem">7</td>
                                        <td data-label="Gpo">1701</td>
                                        <td data-label="Cred">8</td>
                                        <td data-label="Carácter">Obligatoria</td>
                                        <td colspan="2" class="text-center">
                                            <button type="button" class="btn btn-danger btn-sm col-5" data-bs-toggle="modal"  data-bs-target="#Modal_baja"><i class='bx bx-trash'></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-label="Clave Plan Est.">123</td>
                                        <td data-label="Plan de Estudios">Informática</td>
                                        <td data-label="Clave Asig">2501</td>
                                        <td data-label="Asig">Mate VI</td>
                                        <td data-label="Sem">7</td>
                                        <td data-label="Gpo">1701</td>
                                        <td data-label="Cred">8</td>
                                        <td data-label="Carácter">Obligatoria</td>
                                        <td colspan="2" class="text-center">
                                            <button type="button" class="btn btn-danger btn-sm col-5" data-bs-toggle="modal"  data-bs-target="#Modal_baja"><i class='bx bx-trash'></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td data-label="Clave Plan Est.">123</td>
                                        <td data-label="Plan de Estudios">Informática</td>
                                        <td data-label="Clave Asig">2501</td>
                                        <td data-label="Asig">Mate VI</td>
                                        <td data-label="Sem">7</td>
                                        <td data-label="Gpo">1701</td>
                                        <td data-label="Cred">8</td>
                                        <td data-label="Carácter">Obligatoria</td>
                                        <td colspan="2" class="text-center">
                                            <button type="button" class="btn btn-danger btn-sm col-5" data-bs-toggle="modal"  data-bs-target="#Modal_baja"><i class='bx bx-trash'></i></button>
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
            
            </form>                   
        </div>    
    </div>    
              

             <!-- JavaScripts-->
        <?php include_once "./includes/js.php"; ?>
        <?php include "./modal/modal_asignatura_prof.php"; ?>
        <?php include "./modal/modal-baja-asignacion.php"; ?>
        <?php include "./modal/ag_asinatura.php"; ?>

</body>
</html>