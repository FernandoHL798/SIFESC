<!-- Modal Editar-->
<div class="modal fade" id="Edit_Modal_P" tabindex="-1" aria-labelledby="     Modal_Edit_P" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="frm-edit_profesor">
      <div class="modal-header">
        <h5 class="modal-title" id="Modal_Edit_P">Editar profesor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <div class="mt-3 mb-2"></div>
         <input type="text" id="id_usuario_edit" name="id_usuario_edit">
          <div class="form-group">
            <input type="text" placeholder="RFC:" class="form-control" style="height: 60px" id="rfc_edit" name="rfc_edit">
          </div>
        <div class="mt-3 mb-2"></div>
        <div class="form-group" id="">
          <input type="text" placeholder="Nombre:" class="form-control" style="height: 60px" id="nombre_profesor_edit" name="nombre_profesor_edit">
        </div>
        <div class="mt-3 mb-2"></div>
        <div class="form-group" id="">
          <input type="text" placeholder="Primer Apellido:" class="form-control" style="height: 60px" id="app_edit" name="app_edit">
        </div>
        <div class="mt-3 mb-2"></div>
        <div class="form-group" id="">
          <input type="text" placeholder="Segundo Apellido:" class="form-control" style="height: 60px" id="apm_edit" name="apm_edit">
        </div>
                <div class="mt-3 mb-2"></div>
        <div class="form-group" id="">
          <input type="text" placeholder="Correo:" class="form-control" style="height: 60px" id="correo_edit" name="correo_edit">
        </div>
        <div class="mt-3 mb-2"></div>
          <div class="form-group">
            <label class="form-control"> Fecha Nacimiento
              <input type="date" placeholder="Fecha de Nacimiento:" class="form-control" style="height: 60px" id="fechaNacimiento_edit" name="fechaNacimiento_edit"max="2004-10-08"> 
            </label>
          </div>
        <div class="mt-3 mb-2"></div>
        <div class="form-group" id="password-group">
          <input type="text" placeholder="Telefono:" class="form-control" style="height: 60px" id="telefono_edit" name="telefono_edit">
        </div>
        <div class="mt-3 mb-2"></div>                   
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </form>
    </div>
  </div>
</div>