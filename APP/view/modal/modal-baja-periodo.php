<!-- Modal AGREGAR Periodo -->
        
            <div class="modal fade" id="elimina_periodo" tabindex="-1" aria-labelledby="elimina_periodo" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form id="frm_m_elimina_periodo">
                    <input type="text" id="nombre_periodo" name="nombre_periodo"><br>
                    <input type="text" id="idPeriodoM" name="idPeriodoM">
                  <div class="modal-header">
                    <h5 class="modal-title" id="elim_pe">Eliminar Período</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="mb-3 text-center">
                      <h5>"""INFORMACIÓN DEL PERÍODO"""</h5>
                    </div>
                    <div class="mb-2">
                      <p>Para eliminar el siguiente período <span id="nombre_periodo_el"></span> es necesario que ingrese su contraseña:
                      </p>
                    </div>
                    <div class="form-group" id="actual-pass-group">
                      <div class="mx-auto">
                       <!-- <input type="password" class="form-control mt-2" style="height: 55px;" id="contraUser" placeholder="Contraseña actual:" required="" autofocus="">-->
                      </div>
                    </div>
                      <div class="mt-3 mb-2"></div>
                  </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
                </form>
              </div>
            </div>
          </div>
      </div>