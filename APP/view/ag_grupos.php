<?php include_once "./includes/session_verify.php";
$idPlan = "";
$claveAsig="";
$idasignaturafk="";
if (!isset($_GET['idPlan'])){
    echo "<script>location.href ='javascript:history.back()';</script>";
}
else{
    $idPlan = $_GET['idPlan'];
    $claveAsig = $_GET['codigo_asi'];
    $idasignaturafk = $_GET['id_asignaturafk'];
}
?>
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
                                    <a id="back_ag_grupos"  title="Volver"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi    bi-arrow-left-circle" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                                        </svg>
                                    </a>
                                </div>
                                <div>
                                    <h3 id="head3" class="text-center">Agrega grupos</h3>
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
                            <div class="mt-3 mb-2"><h4 class="text-center mb-5" id="anuncio" ><span id="nom_plan"></span> || Plan: <span id="clave_pln"></span></h4></div> 
                            <div class="mt-3 mb-2"><h4 class="text-center mb-5" id="anuncio" >Agrega grupos a la materia seleccionada</h4></div>
                        </div>
                        <div class="">
                            <div class="row">
                                <div class="col-lg-12" id="inscripcion">
                                    <input type="text" name="idPlanAsig" id="idPlanAsig" value="<?php echo $idPlan;?>" hidden>
                                    <input type="text" name="clave_asig" id="clave_asig" value="<?php echo $claveAsig;?>" hidden>
                                    <input type="text" name="id_asignatura" id="id_asignatura" value="<?php echo $idasignaturafk;?>" hidden>
                                    <table id="table" class="table table-bordered">
                                        <input type="hidden" id="idasignaturagrupo" name="idasignaturagrupo">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Clave de asignatura
                                                    <div class="datos_personales">
                                                        <span id="clave_Asig_gru"></span>
                                                    </div>
                                                </th>
                                                <th colspan="3">Nombre de la asignatura:
                                                    <div class="datos_personales">
                                                        <span id="nombre_Asig_gru"></span>
                                                    </div>
                                                </th>

                                            </tr>
                                            <tr>
                                                <th colspan="1">Semestre:
                                                    <div class="datos_personales">
                                                        <span id="semestre_Asig_gru"></span>
                                                    </div>
                                                </th>
                                                <th colspan="1">Créditos:
                                                    <div class="datos_personales">
                                                        <span id="cr_Asig_gru"></span>
                                                    </div>
                                                </th>
                                                <th colspan="3">Carácter:
                                                    <div class="datos_personales">
                                                        <span id="caracter_Asig_gru"></span>
                                                    </div>
                                                </th>

                                            </tr>
                                            <tr class="informacion" id="informacion">
                                                
                                                <th>No</th>
                                                <th>GRUPOS</th>
                                                <th>TURNO</th>
                                                <th>TIPO</th>
                                                <th>ACCION</th>
                                            </tr>
                                        </thead>

                                        <tbody id="tbl-grupos">
                                        <!--  Ajax tabla grupos   -->
                                            
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
                                        <button type="button" class="btn btn-primary" onclick="altaGrupo();">Agregar Grupos</button>
                                    </div>
                                </div>
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
            
        <script src="../service/lista-grupos-agregar.js"></script>
        <?php include "./modal/modal-agregar-grupo.php"; ?>
        <?php include "./modal/modal-baja-grupo.php"; ?>
        <?php include "./modal/modal-editar-grupo.php"; ?>

</body>
</html>