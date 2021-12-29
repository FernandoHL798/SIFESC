<!-- Modal AGREGAR DEPARTAMENTO  -->
        
            <div class="modal fade"  id="Add_depto_Modal" tabindex="-1" aria-labelledby="Modal_depto" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form id="frm_m_a_departamento">
                  <div class="modal-header">
                    <h5 class="modal-title" id="Modal_Asig">Agregar Departamento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="mt-3 mb-2"></div>
                    <div class="form-group" id="actual-pass-group">
                    <div class="form-group">
                        
                        <input type="text" maxlength="15" required pattern="[0-0]{1}[1-4]{1}[0-9]{2}[a-z A-Z À-ÿ]{11}" placeholder="Clave de departamento:" class="form-control" style="height: 60px" id="clave_depto_ag2" name="clave_depto_ag2" title="Los primeros 2 numeros deben ser acorde al area (01-04) luego 2 numeros aleatorios y despues letras (11)." onkeyup="validar()" onkeydown="validar()">
                    </div>
                    </div>
                      <div class="mt-3 mb-2"></div>
                      <div class="form-group" id="">
                        <input type="text" maxlength="30" placeholder="Nombre del departamento:" class="form-control" style="height: 60px" id="nombre_depto_ag2" name="nombre_depto_ag2" onkeyup="validar()" onkeydown="validar()" >
                      </div>
                      
                      <div class="mt-3 mb-1">
                        <span class="" id="existe"></span>
                      </div>
                      
                  </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-primary" id="BtnGuardarag" disabled>Guardar</button>
                </div>
                </form>
              </div>
            </div>
          </div>
      </div>