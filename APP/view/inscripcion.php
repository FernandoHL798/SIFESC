<?php include_once "./includes/session_verify.php";?>
<!DOCTYPE html>
<html>
<?php $titulo="Inscripcion | SIFESC";
include_once "./includes/header.php";?>
<body id="body">
<?php include "./includes/sidebar2.php";?>

    
    <!--              AQUI VA EL CONTENIDO                -->
            <div class="home_content2">
                <div class="texthome">
                    <form class="mb-4" id=frm-inscripcion>              
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
                                    <h3 id="head3" class="text-center">Sistema de inscripción</h3>
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
                                    <!-- RELOJ FUNCIONAL Y BONITO ---------------------------- -->      
                                </div>       
                            </div> 
                            <div class="mt-3 mb-2"><h4 class="text-center mb-5" id="anuncio" >AÚN NO ES TU FECHA U HORA DE INSCRIPCIÓN</h4></div>
                            <div class="mt-3 mb-2"><h4 class="text-center mb-5" id="noInscripcion" >NO GENERASTE TU INSCRIPCIÓN</h4></div>
                            <div class="mt-3 mb-2"><h4 class="text-center mb-5" id="terminoInscr" >YA HAS COMPLETADO TU TRAMITE</h4></div>
                            <div class="mt-3 mb-2" id="textosInscripcion">
                            <h4 class="text-center mb-5" >Selecciona las asignaturas que inscribirás en este nuevo periodo</h4>
                            <p class="text-center mb-4">Para dar de alta una asignatura selecciona el botón << Agregar asignatura >> y rellena los campos requeridos.<br>
                            Para dar de baja la asignatura presiona el botón de eliminar ubicado en la columna de "ACCIÓN". Seleccione este botón de acuerdo a la fila en donde se encuente su asignatura a dar de baja.</p>  </div>
                        </div>
                        <div class="">
                            <div class="row">
                                <div class="col-lg-12" id="inscripcion">
                                    <table id="table" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th colspan="1">Numero de cuenta:
                                                    <div class="datos_personales">
                                                        <span id="cuenta_alumno"></span>
                                                        <span id="idInscripcionAlumno"></span>
                                                    </div>
                                                </th>
                                                <th colspan="3">Nombre:
                                                    <div class="datos_personales">
                                                        <span id="nombreAlumno"></span>
                                                    </div>
                                                </th>
                                                <th colspan="2">Año de Ingreso:
                                                    <div class="datos_personales">
                                                        <span id="anioEstudia"></span>
                                                    </div>
                                                </th>
                                                <th colspan="2">Carrera:
                                                    <div class="datos_personales">
                                                        <span id="idCarrera"></span>
                                                    </div>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th colspan="3">Plantel:
                                                    <div class="datos_personales">
                                                        <span id="Plantel"></span>
                                                    </div>
                                                </th>
                                                <th colspan="3">Plan de estudios:
                                                    <div class="datos_personales">
                                                        <span id="Plan"></span>
                                                    </div>
                                                </th>
                                                <th colspan="2">Periodo :
                                                    <div class="datos_personales">
                                                        <span id="Periodo"></span>Ejemplo de periodo
                                                    </div>
                                                </th>

                                            </tr>
                                            <tr class="informacion" id="informacion">
                                                
                                                <th>No</th>
                                                <th>Clave</th>
                                                <th>Nombre de la Asignatura</th>
                                                <th>Cred
                                                    <div class="datos_personales">
                                                        Contador de creditos (<span id="creditoMaximo"></span>)
                                                    </div>
                                                </th>
                                                <th>Sem</th>
                                                <th>Gpo</th>
                                                <th>Mov</th>
                                                <th>ACCION</th>
                                            </tr>
                                        </thead>

                                        <tbody id="tbl-movimiento">
                                            <!-- AJAX RESPONSE Lista alumno.js-->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> 

                            <!-- Se utiliza para darle espacio al final de la tabla -->
                                <div class="mt-3 mb-2"></div>
                                <div class="d-grid gap-2 col-3 mx-auto">
                                    
                                </div>
                                <div  id="btnInscripciones1">
                                <div class="d-grid gap-2 col-3 mx-auto">
                                    <div class="modal-content" >
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Asig_Mat_P">Agregar Asignatura</button>
                                    </div>
                                </div>
                                </div>
                                <div id="btnInscripciones2">
                                <div class=" col-3 mx-auto mt-2">
                                    <div class="modal-content mb-4">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-avs-inscripcion">Completar trámite</button>
                                            </div>
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
            <!-- JavaScripts-->
            <?php include_once "./includes/js.php"; ?>
            <script src="../service/baja-movimiento.js"></script>
            <script src="../service/inscripcion.js"></script>
            <script src="../service/add-movimiento.js"></script>
            
                
        <?php include "./modal/modal-asignacion.php"; ?>
        <?php include "./modal/modal-avs-inscripcion.php"; ?>
        <?php include "./modal/modal-baja-asignacion.php"; ?>

</body>
</html>