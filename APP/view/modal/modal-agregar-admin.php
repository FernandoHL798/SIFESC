<!-- Modal AGREGAR PROFESOR  -->
<div class="modal fade" id="Modal_ag_Adm" tabindex="-1" aria-labelledby="Modal_Ag_Admin" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form id="frm-add-profesor">
            <div class="modal-header">
                <h5 class="modal-title" id="Modal_Ag_Aadmin">Agregar Adminisrador</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <div class="mt-3 mb-2"></div>
                        <div class="input-group">
                          <input type="text" placeholder="Introduzca un RFC o número de cuenta" class="form-control" style="height: 60px; width: 250px;" id="buscar_admin" name="buscar_admin"><span class="input-group-addon"><button style="height: 60px;" id="add_admin" name="add_admin" type="button" class= "btn btn-primary">Buscar</button></span>  
                      </div>
                      <div class="mt-3 mb-2"></div>
                      <div class="form-group" >
                        <input type="text" placeholder="Nombre:" class="form-control" style="height: 60px" id="nombre_profesor" name="nombre_profesor">
                      </div>
                      <div class="mt-3 mb-2"></div>
                      <div class="form-group">
                        <input type="text" placeholder="Primer Apellido:" class="form-control" style="height: 60px" id="app" name="app">
                      </div>
                      <div class="mt-3 mb-2"></div>
                      <div class="form-group">
                        <input type="text" placeholder="Segundo Apellido:" class="form-control" style="height: 60px" id="apm" name="apm">
                      </div>
                      <div class="mt-3 mb-2"></div>
                      <div class="form-group">
                        <label class="form-control"> Fecha Nacimiento
                        <input type="date" placeholder="Fecha de Nacimiento:" class="form-control" style="height: 60px" id="fechaNacimiento" name="fechaNacimiento"max="2004-10-08"> 
                      </label>
                      </div>
                      <div class="mt-3 mb-2"></div>
                      <div class="form-group">
                        <input type="text" placeholder="RFC:" class="form-control" style="height: 60px" id="rfc" name="rfc">
                      </div>
                      <div class="mt-3 mb-2"></div>
                      <div class="form-group">
                        <input type="text" placeholder="Correo:" class="form-control" style="height: 60px" id="correo" name="correo">
                      </div>
                      <div class="mt-3 mb-2"></div>
                      <div class="form-group">
                        <input type="text" placeholder="Telefono:" class="form-control" style="height: 60px" id="telefono" name="telefono">
                      </div>
                      <div class="mt-3 mb-2"></div>
                      <div class="form-group">  
                    </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                  </div>
            </div>             
      </form>
    </div>
  </div>
</div>