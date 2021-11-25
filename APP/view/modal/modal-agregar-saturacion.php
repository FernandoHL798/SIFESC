<!-- Modal AGREGAR SATURACIÓN -->

          <form id="frm_m_a_saturacion" name="frm_m_a_saturacion">
              <div class="modal fade" id="Asig_Modal" tabindex="-1" aria-labelledby="Modal_Asig" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="Modal_Asig">Agregar asignatura</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div class="mt-3 mb-2"></div>
                    <div class="form-group" id="actual-pass-group">
                    <div class="form-group">
                        <input type="text" placeholder="Clave de la asignatura:" class="form-control" style="height: 60px" id="clave_asignatura" name="clave_asignatura">
                    </div>
                    </div>
                      
                      <div class="mt-3 mb-2"></div>
                      <div class="form-group" id="password-group">
                        <input type="text" placeholder="Nombre de la asignatura" class="form-control" style="height: 60px" id="nom_asignatura" name="nom_asignatura">
                      </div>
                      <div class="mt-3 mb-2"></div>
                      <div class="form-group" id="password-group">
                <div class="form-floating">
                        <select class="form-select" id="floatingSelect" id="grupos" name="grupos">
                            <option hidden=""></option>
                            <option value="1">1102</option>
                            <option value="2">2102</option>
                            <option value="3">3102</option>
                        </select>
                            <label for="floatingSelect"><font SIZE=3.5>Grupo:</font></label>
                </div>
                <div class="mt-3 mb-2"></div>
                      
                <div class="form-floating">
                        <select class="form-select" id="floatingSelect" id="semestre" name="semestre">
                            <option hidden=""></option>
                            <option value="1">3</option>
                            <option value="2">5</option>
                            <option value="3">7</option>
                        </select>
                            <label for="floatingSelect"><font SIZE=3.5>Semestre:</font></label>
                </div>
                <div class="mt-3 mb-2"></div>
                      <div class="form-group">
                        <input type="text" placeholder="Numero de creditos:" class="form-control" style="height: 60px" id="creditos" name="creditos">
                      </div>
                      <div class="mt-3 mb-2"></div>
                      <div class="form-group">
                        <input type="text" placeholder="Cupo:" class="form-control" style="height: 60px" id="cupo" name="cupo">
                      </div>
            </div>
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Agregar</button>
                  </div>
                </div>
              </div>
            </div>
          </form>