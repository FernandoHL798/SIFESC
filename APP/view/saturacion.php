<?php include_once "./includes/session_verify.php";?>
<!DOCTYPE html>
<html>
<?php $titulo="Saturacion | SIFESC";
include_once "./includes/header.php"; ?>
<body id="body">
	<?php
include "./includes/sidebar2.php";
	?>


	
	<!--              AQUI VA EL CONTENIDO                -->
	<div class="home_content2">
		<div class="texthome">
            <form>              
            <div class="">
               <div class="grid mt-3 mb-4">
                <div class="">
                    <a href="http://localhost/SIFESC/APP/view/index.php" title="Volver"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi    bi-arrow-left-circle" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                        </svg>
                    </a>
                </div>
                <div>
                    <h3 id="head3" class="text-center">Saturación Alumno</h3>
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
                    <table class="table table-bordered  display nowrap mt-3" cellspacing="0" width="100%">
                    <thead>
                        <tr class="text-center">
                            <th style="width: 100px;">Clave Asig</th>
                            <th style="width: 600px;">Nombre</th>
                            <th style="width: 106px;">Gpo.</th>
                            <th style="width: 70px;">Se.</th>
                            <th style="width: 70px;">Cr.</th>
                            <th style="width: 93px;">Cupo</th>
                            <th style="width: 70px;">In</th>
                        </tr>
                    </thead>
                    <tbody id="tbl-asignaciones">
                        <!--<tr class="text-center">
                            <td data-label="Clave Asig">0017</td>
                            <td data-label="Nombre">SEM DE COMERCIO ELECTRONICO II</td>
                            <td data-label="Gpo">1001</td>
                            <td data-label="Se">9</td>
                            <td data-label="Cr">8</td>
                            <td data-label="Cup">28</td>
                            <td data-label="In">2</td>
                        </tr>
                        <tr class="text-center">
                            <td data-label="Clave Asig">0147</td>
                            <td data-label="Nombre">ANALISIS. FINANC. MAT. SISTEM. ELECTRON.</td>
                            <td data-label="Gpo">1001</td>
                            <td data-label="Se">5</td>
                            <td data-label="Cr">8</td>
                            <td data-label="Cup">25</td>
                            <td data-label="In">24</td>
                        </tr>
                        <tr class="text-center">
                            <td data-label="Clave Asig">0162</td>
                            <td data-label="Nombre">INGLES II</td>
                            <td data-label="Gpo">1001</td>
                            <td data-label="Se">5</td>
                            <td data-label="Cr">8</td>
                            <td data-label="Cup">35</td>
                            <td data-label="In">29</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered  display nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr class="text-center">
                            <th style="width: 100px;">Asig</th>
                            <th style="width: 600px;">Nombre</th>
                            <th style="width: 106px;">Gpo</th>
                            <th style="width: 70px;">Se</th>
                            <th style="width: 70px;">Cr</th>
                            <th style="width: 93px;">Cup</th>
                            <th style="width: 70px;">In</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td data-label="Clave Asig">0064</td>
                            <td data-label="Nombre">SEM DE ANALISIS. EXTRAC. CONOC. BASE DA.</td>
                            <td data-label="Gpo">1002</td>
                            <td data-label="Se">8</td>
                            <td data-label="Cr">8</td>
                            <td data-label="Cup">30</td>
                            <td data-label="In">19</td>
                        </tr>
                        <tr class="text-center">
                            <td data-label="Clave Asig">0139</td>
                            <td data-label="Nombre">SEM DE SIST. INFORM. PARA INTEL. NEGO.</td>
                            <td data-label="Gpo">1002</td>
                            <td data-label="Se">8</td>
                            <td data-label="Cr">8</td>
                            <td data-label="Cup">27</td>
                            <td data-label="In">25</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered  display nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr class="text-center">
                            <th style="width: 100px;">Asig</th>
                            <th style="width: 600px;">Nombre</th>
                            <th style="width: 106px;">Gpo</th>
                            <th style="width: 70px;">Se</th>
                            <th style="width: 70px;">Cr</th>
                            <th style="width: 93px;">Cup</th>
                            <th style="width: 70px;">In</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td data-label="Clave Asig">0021</td>
                            <td data-label="Nombre">SEM DE INTELIGENCIA ARTIFIAL II</td>
                            <td data-label="Gpo">1003</td>
                            <td data-label="Se">9</td>
                            <td data-label="Cr">8</td>
                            <td data-label="Cup">25</td>
                            <td data-label="In">13</td>
                        </tr>
                        <tr class="text-center">
                            <td data-label="Clave Asig">0139</td>
                            <td data-label="Nombre">SEGURIDAD INFORMATICA</td>
                            <td data-label="Gpo">1003</td>
                            <td data-label="Se">5</td>
                            <td data-label="Cr">8</td>
                            <td data-label="Cup">22</td>
                            <td data-label="In">20</td>
                            
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered  display nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr class="text-center">
                            <th style="width: 100px;">Asig</th>
                            <th style="width: 600px;">Nombre</th>
                            <th style="width: 106px;">Gpo</th>
                            <th style="width: 70px;">Se</th>
                            <th style="width: 70px;">Cr</th>
                            <th style="width: 93px;">Cup</th>
                            <th style="width: 70px;">In</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td data-label="Clave Asig">0022</td>
                            <td data-label="Nombre">SEM DE REDES DE COMPUTADRAS II</td>
                            <td data-label="Gpo">1004</td>
                            <td data-label="Se">9</td>
                            <td data-label="Cr">8</td>
                            <td data-label="Cup">23</td>
                            <td data-label="In">4</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered  display nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr class="text-center">
                            <th style="width: 100px;">Asig</th>
                            <th style="width: 600px;">Nombre</th>
                            <th style="width: 106px;">Gpo</th>
                            <th style="width: 70px;">Se</th>
                            <th style="width: 70px;">Cr</th>
                            <th style="width: 93px;">Cup</th>
                            <th style="width: 70px;">In</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td data-label="Clave Asig">0016</td>
                            <td data-label="Nombre">SEM DE SISTEMAS OPERAT REDES II</td>
                            <td data-label="Gpo">0016</td>
                            <td data-label="Se">9</td>
                            <td data-label="Cr">8</td>
                            <td data-label="Cup">23</td>
                            <td data-label="In">2</td>
                        </tr>
                        <tr class="text-center">
                            <td data-label="Clave Asig">0019</td>
                            <td data-label="Nombre">SEM DE ADMON RECURS HUMS INFO II</td>
                            <td data-label="Gpo">1051</td>
                            <td data-label="Se">9</td>
                            <td data-label="Cr">8</td>
                            <td data-label="Cup">30</td>
                            <td data-label="In">22</td>
                        </tr>
                        <tr class="text-center">
                            <td data-label="Clave Asig">0020</td>
                            <td data-label="Nombre">SEM DE PROGRAMACION DE INTERNET II</td>
                            <td data-label="Gpo">1051</td>
                            <td data-label="Se">9</td>
                            <td data-label="Cr">8</td>
                            <td data-label="Cup">23</td>
                            <td data-label="In">14</td>
                        </tr> -->
                    </tbody>
                </table>
                <table class="table table-bordered  display nowrap mt-3" cellspacing="0" width="100%">
                    <thead>
                        <tr class="text-center">
                            <th style="width: 100px;">Clave Asig</th>
                            <th style="width: 600px;">Nombre</th>
                            <th style="width: 106px;">Gpo.</th>
                            <th style="width: 70px;">Se.</th>
                            <th style="width: 70px;">Cr.</th>
                            <th style="width: 93px;">Cupo</th>
                            <th style="width: 70px;">In</th>
                        </tr>
                    </thead>
                    <tbody id="tbl-asignaciones">
                        <tr class="text-center">
                            <td data-label="Clave Asig">0017</td>
                            <td data-label="Nombre">Sem. Redes de Computadoras II</td>
                            <td data-label="Gpo">1011</td>
                            <td data-label="Se">9</td>
                            <td data-label="Cr">8</td>
                            <td data-label="Cup">28</td>
                            <td data-label="In">2</td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr class="text-center">
                            <th style="width: 100px;">Clave Asig</th>
                            <th style="width: 600px;">Nombre</th>
                            <th style="width: 106px;">Gpo.</th>
                            <th style="width: 70px;">Se.</th>
                            <th style="width: 70px;">Cr.</th>
                            <th style="width: 93px;">Cupo</th>
                            <th style="width: 70px;">In</th>
                        </tr>
                    </thead>
                    <tbody id="tbl-asignaciones">
                        <tr class="text-center">
                            <td data-label="Clave Asig">0017</td>
                            <td data-label="Nombre">Ingles II</td>
                            <td data-label="Gpo">7201</td>
                            <td data-label="Se">9</td>
                            <td data-label="Cr">8</td>
                            <td data-label="Cup">28</td>
                            <td data-label="In">2</td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr class="text-center">
                            <th style="width: 100px;">Clave Asig</th>
                            <th style="width: 600px;">Nombre</th>
                            <th style="width: 106px;">Gpo.</th>
                            <th style="width: 70px;">Se.</th>
                            <th style="width: 70px;">Cr.</th>
                            <th style="width: 93px;">Cupo</th>
                            <th style="width: 70px;">In</th>
                        </tr>
                    </thead>
                    <tbody id="tbl-asignaciones">
                        <tr class="text-center">
                            <td data-label="Clave Asig">0017</td>
                            <td data-label="Nombre">Programación II</td>
                            <td data-label="Gpo">1043</td>
                            <td data-label="Se">9</td>
                            <td data-label="Cr">8</td>
                            <td data-label="Cup">28</td>
                            <td data-label="In">2</td>
                        </tr>
                    </tbody>
                    <thead>
                        <tr class="text-center">
                            <th style="width: 100px;">Clave Asig</th>
                            <th style="width: 600px;">Nombre</th>
                            <th style="width: 106px;">Gpo.</th>
                            <th style="width: 70px;">Se.</th>
                            <th style="width: 70px;">Cr.</th>
                            <th style="width: 93px;">Cupo</th>
                            <th style="width: 70px;">In</th>
                        </tr>
                    </thead>
                    <tbody id="tbl-asignaciones">
                        <tr class="text-center">
                            <td data-label="Clave Asig">0017</td>
                            <td data-label="Nombre">Sem. Multimedia I</td>
                            <td data-label="Gpo">2501</td>
                            <td data-label="Se">9</td>
                            <td data-label="Cr">8</td>
                            <td data-label="Cup">28</td>
                            <td data-label="In">2</td>
                        </tr>
                    </tbody>
                </table>

                
                <div class="d-grid gap-2 col-3 mx-auto">
                    <p class="mt-3 mb-2"></p>
                </div>






            </div>
        </form>   

            
		</div>
	</div>


    <script src="../tools/sidebar.js"></script>
    <script src="../tools/clock.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- LIBRERIA AJAX requeried-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="../service/lista-alumno.js"></script>
    <!--   Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
    <!-- extension responsive -->
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                responsive: true
            });
        } );  
    </script>
    <script src="../service/saturacion.js"></script>

</body>
</html>
