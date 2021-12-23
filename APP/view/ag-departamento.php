<?php include_once "./includes/session_verify.php";
$idPlantel ="";
if (!isset($_GET['idPlantel'])){
    echo "<script>location.href ='javascript:history.back()';</script>";
}
else{
    $idPlantel = $_GET['idPlantel'];
}
?>
<!DOCTYPE html>
<html>
<?php $titulo="Departamentos | SIFESC";
include_once "./includes/header.php";?>
<body id="body">
<?php include "./includes/sidebar2.php";?>

    
    <!--              AQUI VA EL CONTENIDO PARA AGREGAR DEPARTAMENTOS DE LA  FESC                -->
    <div class="home_content2">
        <div class="texthome">          
            <div class="mb-4">
                <div class="grid">
                    <div class="">
                        <a href="./cat-planteles.php" title="Volver"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi    bi-arrow-left-circle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                            </svg>
                        </a>
                    </div>
                    <div>
                        <h3 id="head3" class="text-center">Departamentos</h3>
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
                <p class="text-center mb-3">Aquí podrás visualizar los departamentos de este plantel.</p>
                <div class="d-grid gap-2 col-3 mx-auto">
                    <input type="text" id="idPlantel" name="idPlantel" value="<?php echo $idPlantel;?>">
                    <div class="modal-content">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Add_depto_Modal">
                            Agregar Departamento
                        </button>
                    </div>
                </div>
                <div class="input-group mb-1 mt-4">
                    <input class="form-control col-md-3 light-table-filter" data-table="order-table" type="text" placeholder="Buscar departamento...">
                </div>
            </div>

            <table class="table table-bordered order-table display nowrap table-responsive mt-3" cellspacing="0" width="100%">
                <thead>
                    <tr class="text-center">
                        <th style="width: 50px;">Clave DEPTO.</th>
                        <th style="width: 100px;">Nombre DEPTO.</th>
                        <th style="width: 100px;">Acciones</th>

                    </tr>
                </thead>
                <tbody id="tbl-departamentos">
                    
                </tbody>
            </table>
            <!-- Se utiliza para darle espacio al final de la tabla -->
            <div class="mt-3 mb-2"></div>
            <div class="d-grid gap-2 col-3 mx-auto">
                <p class="mt-3 mb-2"></p>
            </div>
        </div>  
    </div>

    <!-- JavaScripts-->
    <?php include_once "./includes/js.php"; ?>
    <!-- Modales -->
    <?php include "./modal/modal-agregar-depto.php"; ?>
    <?php include "./modal/modal-edit-departamento.php"; ?>
    <?php include "./modal/modal-baja-depto.php"; ?>
    <script src="../service/lista-plantel-dep.js"></script>
    
</body>
</html>
