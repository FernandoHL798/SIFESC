<?php include_once "./includes/session_verify.php";
$idProfesor = "";
if (!isset($_GET['idProfesor'])){
    echo "<script>location.href ='javascript:history.back()';</script>";
}
else{
    $idProfesor = $_GET['idProfesor'];
}
?>

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
                    <div class="grid">
                        <div class="">
                            <a href="./ag_asig_cat_departamento.php" title="Volver"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi    bi-arrow-left-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                                </svg>
                            </a>
                        </div>
                        <div>
                            <h3 id="head3" class="text-center">Agrega materias a profesores</h3>
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
                    <div class="row">
                        <p class="mb-2 text-center">Asigna al profesor las materias que impartira en el periodo <<2021/2>></p>             
                    </div>
                    <div class="mt-3 mb-2"></div>
                    <div class="d-grid gap-2 col-3 mx-auto">
                        <div class="modal-content">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Add_Asignatura_prof">Agregar Asignatura</button>
                        </div>
                    </div>

                    <div class="input-group mb-1 mt-4">
                        <input class="form-control col-md-3 light-table-filter" data-table="order-table" type="text" placeholder="Buscar materia...">
                    </div>
                </div>
                <div class="">
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="hidden" name="idProfesor" id="idProfesor" value="<?php echo $idProfesor;?>">
                            <table class="table table-bordered order-table display nowrap table-responsive mt-3" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th colspan="6">RFC
                                            <div class="datos_personales">
                                                <span id="rfc_profe"></span>
                                            </div>
                                        </th>
                                        <th colspan="3">DEPARTAMENTO :
                                            <div class="datos_personales">
                                                <span id="depto_profe"></span>
                                            </div>
                                        </th>

                                    </tr>
                                    <tr>
                                        <th colspan="2">NOMBRE :
                                            <div class="datos_personales">
                                                <span id="nombre_profe"></span>
                                            </div>
                                        </th>
                                        <th colspan="3">Primer Apellido :
                                            <div class="datos_personales">
                                                <span id="pa_profe"></span>
                                            </div>
                                        </th>
                                        <th colspan="4">Segundo Apellido :
                                            <div class="datos_personales">
                                                <span id="sa_profe"></span>
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

                                <tbody id="tbl_materias_profesores">
                                   
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
        <script src="../service/lista-materias-profesores.js"></script>

</body>
</html>