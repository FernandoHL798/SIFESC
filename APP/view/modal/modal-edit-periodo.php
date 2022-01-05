<!-- Modal EDITAR Periodo -->
        
            <div class="modal fade" id="edit_periodo" tabindex="-1" aria-labelledby="edit_periodo" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form id="frm_m_edit_periodo">
                  <div class="modal-header">
                    <h5 class="modal-title" id="edit_periodo">Editar Período</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="mb-3 text-center">
                      <h5>"""INFORMACIÓN DEL PERÍODO"""</h5>
                    </div>
                    <div class="mb-2">
                      <p>Solo se pueden editar las fechas de inicio y fin del período 
                      </p>
                    </div>
                    <div class="mb-2">
                      <p>Si el período no corresponde con los datos que usted necesita eliminelo y vuelva a crearlo</p>
                    </div>
                      <div class="mt-3 mb-2"></div>
                      <div class="form-group">
                        <label class="form-control"> Fecha inicio del período
                          <input type="date" placeholder="Fecha Inicio Periodo:" class="form-control" style="height: 60px" id="fechaInicioPeriodo2" name="fechaInicioPeriodo2" disabled=""> 
                          <input type="date" placeholder="Fecha de Nacimiento:" class="form-control" style="height: 60px" id="fechaInicioPeriodo" name="fechaInicioPeriodo" onkeyup="verificarmod()" onkeydown="verificarmod()" onchange="verificarmod()"> 
                        </label>
                      </div>
                      <div class="mt-3 mb-2"></div>
                      <div class="form-group">
                        <label class="form-control"> Fecha fin del período
                          <input type="date" placeholder="Fecha de Nacimiento:" class="form-control" style="height: 60px" id="fechaFinPeriodo2" name="fechaFinPeriodo2" disabled="">
                          <input type="date" placeholder="Fecha de Nacimiento:" class="form-control" style="height: 60px" id="fechaFinPeriodo3" name="fechaFinPeriodo3" onkeyup="verificarmod()" onkeydown="verificarmod()" onchange="verificarmod()"> 
                        </label>
                      </div>
                  </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-primary" id="BtnGuardarPer" disabled="">Guardar</button>
                </div>
                </form>
              </div>
            </div>
          </div>
      </div>