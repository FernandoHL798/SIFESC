<!-- Modal Editar Alumno-->


  <div class="modal fade" id="Edit_Modal_P" tabindex="-1" aria-labelledby="Modal_Edit_P" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="frm_m_edit_alumno">
          <div class="modal-header">
            <h5 class="modal-title" id="Modal_Asig_P">Modificar Alumno</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mt-3 mb-2"></div>
            <div class="form-group" id="actual-pass-group">
              <div class="form-group">
                <input type="text" placeholder="Número de cuenta:" class="form-control" style="height: 60px" id="num_cuenta" name="num_cuenta">
              </div>
            </div>

            <div class="mt-3 mb-2"></div>
            <div class="form-group" id="">
              <input type="text" placeholder="Nombre(s):" class="form-control" style="height: 60px" id="nombre_alumno" name="nombre_alumno">
            </div>
            <div class="mt-3 mb-2"></div>
            <div class="form-group" id="">
              <input type="text" placeholder="Primer Apellido:" class="form-control" style="height: 60px" id="app" name="app">
            </div>
            <div class="mt-3 mb-2"></div>
            <div class="form-group" id="">
              <input type="text" placeholder="Segundo Apellido:" class="form-control" style="height: 60px" id="apm" name="apm">
            </div>
            <div class="mt-3 mb-2"></div>
            <div class="form-group" id="">
              <input type="text" placeholder="Correo:" class="form-control" style="height: 60px" id="correo" name="Correo">
            </div>
            <div class="mt-3 mb-2"></div>
            <div class="form-group" id="password-group">
              <input type="text" placeholder="Teléfono:" class="form-control" style="height: 60px" id="telefono" name="telefono">
            </div>
              <div class="mt-3 mb-2"></div>
                <div class="form-group" id="">
                        <input type="text" placeholder="Generación: " class="form-control" style="height: 60px" id="generacion" name="generacion">
                </div>
                <div class="mb-4">
                  <div class="mt-3 mb-2"></div>
            <div class="form-floating">
              <select class="form-select mb-4" id="estatus">
                <option hidden=""></option>
                <option value="1">Activo</option>
                <option value="2">Baja temporal por semestre</option>
                <option value="3">Baja temporal por año</option>
                <option value="4">Baja total</option>
                <option value="5">Titulado</option>
              </select>
              <label for="estatus"><font SIZE=3>Seleccione estatus</font></label>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-primary">Guardar</button>
            </div>
          </div>
          </form>
        </div>
    </div>

  </div>
