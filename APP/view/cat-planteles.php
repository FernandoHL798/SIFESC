<?php include_once "./includes/session_verify.php";?>
<!DOCTYPE html>
<html>
<?php $titulo="Planteles | SIFESC";
include_once "./includes/header.php";?>
<body id="body">
<?php include "./includes/sidebar2.php";?>

    
    <!--              AQUI VA EL CONTENIDO PARA AGREGAR DEPARTAMENTOS DE LA  FESC                -->
    <div class="home_content2">
        <div class="texthome">          
            <div class="mb-4">
                <div class="grid">
                    <div class="">
                        <a href="./index.php" title="Volver"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi    bi-arrow-left-circle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                            </svg>
                        </a>
                    </div>
                    <div>
                        <h3 id="head3" class="text-center">Planteles</h3>
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
                <p class="text-center mb-3">Selecciona el plantel al que pertenece el departamento</p>
                <div class="d-grid gap-2 col-3 mx-auto">
            </div>

            <table class="table table-bordered order-table display nowrap table-responsive mt-3" cellspacing="0" width="100%">
                <thead>
                    <tr class="text-center">
                        <th style="width: 50px;">Clave</th>
                        <th style="width: 100px;">Nombre Plantel</th>
                        <th style="width: 100px;">Acciones</th>

                    </tr>
                </thead>
                <tbody id="tbl-planteles-dep">
                    
                </tbody>
            </table>
                <!-- Se utiliza para darle espacio al final de la tabla -->
                <div class="mt-3 mb-2"></div>
                <div class="d-grid gap-2 col-3 mx-auto">

                </div>
                <div class="text-center mb-2">
                    <img class=" img-fluid mt-4" src="UNAM.jpg" width="350" height="350">
                </div>
        </div>  
    </div>

    <!-- JavaScripts-->
    <?php include_once "./includes/js.php"; ?>
    <!-- Modales -->
    
    <script src="../service/lista-plantel-dep.js"></script>
</body>
</html>