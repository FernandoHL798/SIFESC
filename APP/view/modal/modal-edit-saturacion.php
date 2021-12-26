<!-- Modal Editar SATURACION-->
              <div class="modal fade" id="Edit-Sat-Modal" tabindex="-1" aria-labelledby="Edit-Sat-Modal" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <form id="frm-edit-saturacion-prof">
                    <div class="modal-header">
                      <h5 class="modal-title" id="Modal_Edit">Editar cupo asignatura:</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <div class="mt-3 mb-2"></div>
                    <div class="form-group" id="actual-pass-group">
                    <div class="form-group">
                        <input type="hidden" id="idusuario_sat" name="idusuario_sat" placeholder="ID Usuario" class="form-control" style="height: 45px" disabled>
                        <input type="hidden" id="idasignacion_sat" name="idasignacion_sat" placeholder="ID Asignacion" class="form-control" style="height: 45px" disabled>
                    </div>
                    </div>
                    <div class="mt-3 mb-2"></div>
                    <div class="form-group" id="actual-pass-group">
                    <div class="form-group">
                      <label for="clave_asignatura_sat">Clave:</label>
                        <input type="text" id="clave_asignatura_sat" name="clave_asignatura_sat" placeholder="Clave de la asignatura:" class="form-control" style="height: 45px" disabled>
                    </div>
                    </div>
                    <div class="mt-3 mb-2"></div>
                    <div class="form-group" id="actual-pass-group">
                    <div class="form-group">
                      <label for="nombre_sat">Nombre:</label>
                        <input type="text" id="nombre_sat" name="nombre_sat" placeholder="Nombre de la asignatura" class="form-control" style="height: 45px" disabled>
                    </div>
                    </div>
                      <div class="mt-3 mb-2"></div>
                      <div class="form-group" id="password-group">
                        <label for="semestre_sat">Semestre:</label>
                        <div class="form-floating">
                                <input type="text" id="semestre_sat" name="semestre_sat" placeholder="Semestre:" class="form-control" style="height: 45px" disabled>
                        <div class="mt-3 mb-2"></div>
                        </div>
                        <div class="mt-3 mb-2"></div>
                        <label for="grupo_sat">Grupo:</label>
                        <div class="form-floating">
                                <input type="text" placeholder="Numero de creditos:" class="form-control" style="height: 45px" id="grupo_sat" name="grupo_sat" disabled>
                        </div>
                        <div class="mt-3 mb-2"></div>
                              <div class="form-group">
                                <label for="creditos_sat">Creditos:</label>
                                <input type="text" placeholder="Numero de creditos:" class="form-control" style="height: 45px" id="creditos_sat" name="creditos_sat" disabled>
                              </div>
                              <div class="mt-3 mb-2"></div>
                              <div class="form-group">
                                <label for="cupo_sat">Saturacion:</label>
                                <input type="hidden" min="0" max="100"placeholder="Cupo:" class="form-control" style="height: 45px" id="cupo_sat2" name="cupo_sat2" disabled  >
                                <input type="number" min="0" max="100"placeholder="Cupo:" class="form-control" style="height: 45px" id="cupo_sat" name="cupo_sat" autofocus="autofocus" onfocus="this.select()" onkeydown="habilitar()" onkeyup="habilitar()">
                                <input type="hidden" min="0" max="100"placeholder="" class="form-control" style="height: 45px" id="cupo_sat3" name="cupo_sat3" disabled  >
                                <div class="alert alert-danger" id="sin-valor-alert">
                                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                                  <strong>¡Introduce un valor!</strong>
                                </div>
                              </div>
                        </div>
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" onclick="required()" class="btn btn-primary" id="btn-guardar">Guardar</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>