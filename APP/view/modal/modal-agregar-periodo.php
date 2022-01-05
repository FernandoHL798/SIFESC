<!-- Modal AGREGAR Periodo -->
        
            <div class="modal fade" id="Modal_Add_Periodo" tabindex="-1" aria-labelledby="Modal_Asig" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form id="frm_m_a_periodo">
                  <div class="modal-header">
                    <h5 class="modal-title" id="Modal_Asig">Agregar Periodo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="mt-3 mb-2"></div>
                    <div class="form-group" id="actual-pass-group">
                    <div class="form-group">
                        <input type="text" maxlength="6" pattern="[2-2]{1}[0-0]{1}[2-2]{1}[2-9]{1}[-]{1}[1-2]{1}" placeholder="Período: " class="form-control" style="height: 60px" id="periodoAg" name="periodoAg" title="Introduzca un periodo valido ej: '2021-1'" onkeyup="validarperiodoag()" onkeydown="validarperiodoag()">
                    </div>
                    </div>
                      <div class="mt-3 mb-2"></div>
                      <div class="form-group">
                        <label class="form-control"> Fecha inicio del período
                          <input type="date"  placeholder="Fecha de Nacimiento:" class="form-control" style="height: 60px" id="fechaIniPeriodo" name="fechaIniPeriodo" onkeyup="validarperiodoag()" onkeydown="validarperiodoag()">
                        </label>
                      </div>
                      <div class="mt-3 mb-2"></div>
                      <div class="form-group">
                        <label class="form-control"> Fecha fin del período
                          <input type="date" placeholder="Fecha de Nacimiento:" class="form-control" style="height: 60px" id="fechaFinPeriodo" name="fechaFinPeriodo" onkeyup="validarperiodoag()" onkeydown="validarperiodoag()"> 
                        </label>
                      </div>
                  </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                  <button type="submit" id="BtnPeriodoAg" class="btn btn-primary" disabled="">Agregar</button>
                </div>
                </form>
              </div>
            </div>
          </div>
      </div>