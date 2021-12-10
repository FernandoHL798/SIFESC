<?php include_once "./includes/session_verify.php";?>
<!DOCTYPE html>
<html>
<?php $titulo="Agrega asignatura | SIFESC";
include_once "./includes/header.php";?>
<body id="body">
<?php include "./includes/sidebar2.php";?>
    <!--              AQUI VA EL CONTENIDO                -->
    <div class="home_content2">
        <div class="texthome">
            <form class="mb-4">              
                <div class="mb-4">
                    <div class="grid">
                        <div class="">
                            <a href="./plan_de_estudios_saturacion.php" title="Volver"> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi    bi-arrow-left-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                                </svg>
                            </a>
                        </div>
                        <div>
                            <h3 id="head3" class="text-center">SATURACIÓN</h3>
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
                        </div>     
                    </div> 
                                    <div class="row">
                                        <p class="mb-2"></p>
                                        <h4 id="head3" class="text-center">1119 || Lic. Informática</h4>
                                        <p class="mt-3"></p>
                                        <p class="text-center mb-4">Aquí puedes agregar la saturación de las asignaturas del plan de estudios.</p>
                                    </div>
                                        <div class="mt-3 mb-2"></div>
                                    <div class="d-grid gap-2 col-2 mx-auto">
                                        
                                        <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Asig_Modal">Agregar Asignatura</button>
                                        
                                    </div>
                            </div>
                                <table class="table table-bordered  display nowrap table-responsive mt-3" cellspacing="0" width="100%">
                                    <thead>
                                        <tr class="text-center">
                                            <th style="width: 100px;">Asig</th>
                                            <th style="width: 400px;">Nombre</th>
                                            <th style="width: 106px;">Gpo</th>
                                            <th style="width: 70px;">Sem</th>
                                            <th style="width: 70px;">Cr</th>
                                            <th style="width: 93px;">Cup</th>
                                            <th style="width: 70px;">In</th>
                                            <th style="width: 140px;">Acciones</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                            <tr class="text-center">
                                                <td data-label="Asig">0017</td>
                                                <td data-label="Nombre">SEM DE COMERCIO ELECTRONICO II</td>
                                                <td data-label="Gpo">1001</td>
                                                <td data-label="Sem">9</td>
                                                <td data-label="Cr">8</td>
                                                <td data-label="Cup">28</td>
                                                <td data-label="In">2</td>
                                                <td data-label="Acciones">
                                                    <button type="button" title="Editar Asignatura" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Edit_Modal"><i class='bx bxs-pencil'></i></button>
                                                    <button type="button" title="Eliminar Asignatura" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal_baja_asig_plan"><i class='bx bx-trash'></i></button>  
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td data-label="Asig">0147</td>
                                                <td data-label="Nombre">ANALISIS FINANC. MAT. SISTEM. ELECTRON.</td>
                                                <td data-label="Gpo">1001</td>
                                                <td data-label="Sem">5</td>
                                                <td data-label="Cr">8</td>
                                                <td data-label="Cup">25</td>
                                                <td data-label="In">24</td>
                                                <td data-label="Acciones">
                                                    <button type="button" title="Editar Asignatura" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Edit_Modal"><i class='bx bxs-pencil'></i></button>
                                                    <button type="button" title="Eliminar Asignatura" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal_baja_asig_plan"><i class='bx bx-trash'></i></button>  
                                                </td>
                                                
                                            </tr>
                                            <tr class="text-center">
                                                 <td data-label="Clave Asig">0162</td>
                                                <td data-label="Nombre">INGLES II</td>
                                                <td data-label="Gpo">1001</td>
                                                <td data-label="Se">5</td>
                                                <td data-label="Cr">8</td>
                                                <td data-label="Cup">35</td>
                                                <td data-label="In">29</td>
                                                <td data-label="Acciones">
                                                    <button type="button" title="Editar Asignatura" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Edit_Modal"><i class='bx bxs-pencil'></i></button>
                                                    <button type="button" title="Eliminar Asignatura" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal_baja_asig_plan"><i class='bx bx-trash'></i></button>   
                                                </td>
                                            </tr>
                                        </tbody>
                                </table>
                                    <table class="table table-bordered  display nowrap table-responsive" cellspacing="0" width="100%">
                                        <thead>
                                            <tr class="text-center">
                                                <th style="width: 100px;">Asig</th>
                                                <th style="width: 400px;">Nombre</th>
                                                <th style="width: 106px;">Gpo</th>
                                                <th style="width: 70px;">Se</th>
                                                <th style="width: 70px;">Cr</th>
                                                <th style="width: 93px;">Cup</th>
                                                <th style="width: 70px;">In</th>
                                                <th style="width: 140px;">Acciones</th>
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
                                                <td data-label="Acciones">
                                                    <button type="button" title="Editar Asignatura" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Edit_Modal"><i class='bx bxs-pencil'></i></button>
                                                    <button type="button" title="Eliminar Asignatura" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal_baja_asig_plan"><i class='bx bx-trash'></i></button>   
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td data-label="Clave Asig">0139</td>
                                                <td data-label="Nombre">SEM DE SIST. INFORM. PARA INTEL. NEGO.</td>
                                                <td data-label="Gpo">1002</td>
                                                <td data-label="Se">8</td>
                                                <td data-label="Cr">8</td>
                                                <td data-label="Cup">27</td>
                                                <td data-label="In">25</td>
                                                <td data-label="Acciones">
                                                    <button type="button" title="Editar Asignatura" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Edit_Modal"><i class='bx bxs-pencil'></i></button>
                                                    <button type="button" title="Eliminar Asignatura" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal_baja_asig_plan"><i class='bx bx-trash'></i></button>  
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                        <table class="table table-bordered  display nowrap table-responsive" cellspacing="0" width="100%">
                                            <thead>
                                                <tr class="text-center">
                                                    <th style="width: 100px;">Asig</th>
                                                    <th style="width: 400px;">Nombre</th>
                                                    <th style="width: 106px;">Gpo</th>
                                                    <th style="width: 70px;">Se</th>
                                                    <th style="width: 70px;">Cr</th>
                                                    <th style="width: 93px;">Cup</th>
                                                    <th style="width: 70px;">In</th>
                                                    <th style="width: 140px;">Acciones</th>
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
                                                <td data-label="Acciones">
                                                    <button type="button" title="Editar Asignatura" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Edit_Modal"><i class='bx bxs-pencil'></i></button>
                                                    <button type="button" title="Eliminar Asignatura" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal_baja_asig_plan"><i class='bx bx-trash'></i></button>   
                                                </td>
                                            </tr>
                                            <tr class="text-center">
                                                <td data-label="Clave Asig">0139</td>
                                                <td data-label="Nombre">SEGURIDAD INFORMATICA</td>
                                                <td data-label="Gpo">1003</td>
                                                <td data-label="Se">5</td>
                                                <td data-label="Cr">8</td>
                                                <td data-label="Cup">22</td>
                                                <td data-label="In">20</td>
                                                <td data-label="Acciones">
                                                    <button type="button" title="Editar Asignatura" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Edit_Modal"><i class='bx bxs-pencil'></i></button>
                                                    <button type="button" title="Eliminar Asignatura" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal_baja_asig_plan"><i class='bx bx-trash'></i></button>   
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table-bordered  display nowrap table-responsive" cellspacing="0" width="100%">
                                        <thead>
                                            <tr class="text-center">
                                                <th style="width: 100px;">Asig</th>
                                                <th style="width: 400px;">Nombre</th>
                                                <th style="width: 106px;">Gpo</th>
                                                <th style="width: 70px;">Se</th>
                                                <th style="width: 70px;">Cr</th>
                                                <th style="width: 93px;">Cup</th>
                                                <th style="width: 70px;">In</th>
                                                <th style="width: 140px;">Acciones</th>
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
                                                <td data-label="Acciones">
                                                    <button type="button" title="Editar Asignatura" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Edit_Modal"><i class='bx bxs-pencil'></i></button>
                                                    <button type="button" title="Eliminar Asignatura" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal_baja_asig_plan"><i class='bx bx-trash'></i></button>   
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table-bordered  display nowrap table-responsive" cellspacing="0" width="100%" class="mb-4">
                                        <thead>
                                            <tr class="text-center">
                                                <th style="width: 100px;">Asig</th>
                                                <th style="width: 400px;">Nombre</th>
                                                <th style="width: 106px;">Gpo</th>
                                                <th style="width: 70px;">Se</th>
                                                <th style="width: 70px;">Cr</th>
                                                <th style="width: 93px;">Cup</th>
                                                <th style="width: 70px;">In</th>
                                                <th style="width: 140px;">Acciones</th>
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
                                                <td data-label="Acciones">
                                                    <button type="button" title="Editar Asignatura" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Edit_Modal"><i class='bx bxs-pencil'></i></button>
                                                    <button type="button" title="Eliminar Asignatura" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal_baja_asig_plan"><i class='bx bx-trash'></i></button>   
                                                </td>
                                            </tr>
                                                <tr class="text-center">
                                                    <td data-label="Clave Asig">0019</td>
                                                    <td data-label="Nombre">SEM DE ADMON RECURS HUMS INFO II</td>
                                                    <td data-label="Gpo">1051</td>
                                                    <td data-label="Se">9</td>
                                                    <td data-label="Cr">8</td>
                                                    <td data-label="Cup">30</td>
                                                    <td data-label="In">22</td>
                                                    <td data-label="Acciones">
                                                        <button type="button" title="Editar Asignatura" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Edit_Modal"><i class='bx bxs-pencil'></i></button>
                                                        <button type="button" title="Eliminar Asignatura" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal_baja_asig_plan"><i class='bx bx-trash'></i></button>  
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td data-label="Clave Asig">0020</td>
                                                    <td data-label="Nombre">SEM DE PROGRAMACION DE INTERNET II</td>
                                                    <td data-label="Gpo">1051</td>
                                                    <td data-label="Se">9</td>
                                                    <td data-label="Cr">8</td>
                                                    <td data-label="Cup">23</td>
                                                    <td data-label="In">14</td>
                                                    <td data-label="Acciones">
                                                        <button type="button" title="Editar Asignatura" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Edit_Modal"><i class='bx bxs-pencil'></i></button>
                                                        <button type="button" title="Eliminar Asignatura" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal_baja_asig_plan"><i class='bx bx-trash'></i></button>   
                                                    </td>
                                                </tr>
                                        </tbody>
                                    </table>
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
        <!-- Modales -->
            <?php include "./modal/modal-agregar-saturacion.php"; ?>
            <?php include "./modal/modal-edit-saturacion.php"; ?>
            <?php include "./modal/modal-baja-asig-plan.php"; ?>

</body>
</html>
