<!-- Modal Editar DEPARTAMENTO  -->
        
            <div class="modal fade" id="depto_edit_Modal2" tabindex="-1" aria-labelledby="Modal_depto" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form id="frm_m_edit_departamento">
                  <div class="modal-header">
                    <h5 class="modal-title" id="Modal_Asig">Editar Departamento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="mt-3 mb-2"></div>
                    <div class="form-group" id="actual-pass-group">
                    <div class="form-group">
                      <input type="hidden" class="form-control" disabled="" id="clave_edit2" name="clave_edit2">
                        <input type="text" maxlength="15" pattern="[0-0]{1}[1-4]{1}[0-9]{2}[A-Z À-ÿ]{1,}" placeholder="Clave de departamento:" class="form-control" style="height: 60px" id="clave_depto_edit" name="clave_depto_edit" title="Los primeros 2 numeros deben ser acorde al area (01-04) luego 2 numeros aleatorios y despues letras (11)." onkeyup="verificar()" onkeydown="verificar()">
                    </div>
                    </div>
                      <div class="mt-3 mb-2"></div>
                      <div class="form-group" id="">
                        <input type="hidden" class="form-control" disabled="" id="nombre_edit2" name="nombre_edit2">
                        <input type="text" maxlength="30" pattern="[A-Z À-ÿ]{1,}"  placeholder="Nombre del departamento:" class="form-control" style="height: 60px" id="nombre_depto_edit" name="nombre_depto_edit" onkeyup="verificar()" onkeydown="verificar()">
                        
                      </div>
                      
                      
                  </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-primary" id="BtnEditDepto" disabled="">Guardar</button>
                </div>
                </form>
              </div>
            </div>
          </div>
      </div>