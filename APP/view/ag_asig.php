<?php include_once "./includes/session_verify.php";
$idPlan = "";
if (!isset($_GET['idPlan'])){
    echo "<script>location.href ='javascript:history.back()';</script>";
}
else{
    $idPlan = $_GET['idPlan'];
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
        <div class="grid">
            <div class="">
                <a href="./plan_de_estudios_asignatura.php" title="Volver"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi    bi-arrow-left-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                    </svg>
                </a>
            </div>
            <div>
                <h3 id="head3" class="text-center">Agrega asignaturas</h3>
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
        <div class="mt-2 mb-3 text-center">
            <p>Agrega las materias que correspondan al plan de estudios seleccionado</p>
        </div>
        <div class="d-grid gap-2 col-3 mx-auto mb-3">
            <input type="hidden" name="idPlanAsig" id="idPlanAsig" value="<?php echo $idPlan;?>">
            <div class="modal-content">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Asig_Modal_Asig">Agregar Asignatura</button>
            </div>
        </div> 
        <div class="input-group mb-4 mt-4">
            <input class="form-control col-md-3 light-table-filter" data-table="order-table" type="text" placeholder="Buscar asignaturas...">
        </div>
        <div class="">
            <div class="row">
                <div class="col-lg-12">
                    <table id="table" class="table table-bordered order-table">
                        <thead>
                            <tr>
                                <th colspan="4">PLAN DE ESTUDIOS:
                                    <div class="datos_personales">
                                        LICENCIADO EN Informática
                                    </div>
                                </th>
                                <th colspan="3">CLAVE:
                                    <div class="datos_personales">
                                        1119 - LICENCIADO EN INFORMÁTICA
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th colspan="2">DURACIÓN:
                                    <div class="datos_personales">
                                        9 SEMESTRES
                                    </div>
                                </th>
                                <th colspan="2">CRÉDITOS OBLIGATORIOS:
                                    <div class="datos_personales">
                                        450
                                    </div>
                                </th>
                                <th colspan="1">CRÉDITOS OPTATIVAS:
                                    <div class="datos_personales">
                                        80
                                    </div>
                                </th>
                                <th colspan="2">CRÉDITOS TOTALES:
                                    <div class="datos_personales">
                                        450
                                    </div>
                                </th>
                            </tr>
                            <tr class="informacion" id="informacion">

                                <th>CLAVE ASIGN</th>
                                <th>NOMBRE DE LA ASIGNATURA</th>
                                <th>SEMESTRE</th>
                                <th>CRÉDITOS</th>
                                <th>CARÁCTER</th>
                                <th>GRUPOS</th>
                                <th>ACCIÓN</th>
                            </tr>
                        </thead>

                        <tbody id="tbl-lista-asignatura">
                            <!-- ajax lista asignatura -->
                            
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
    </div> 
</div> 


           <?php include_once "./includes/js.php"; ?>
            <script>
                $(document).ready(function() {
                    $('#example').DataTable({
                        responsive: true
                    });
                } );  

            </script>
            <script src="../service/lista-asignaturas.js"></script>
            <?php include "./modal/ag_asinatura.php"; ?>
            <?php include "./modal/edit_asig.php"; ?> 
            <?php include "./modal/modal-baja-asignatura.php"; ?> 

</body>
</html>