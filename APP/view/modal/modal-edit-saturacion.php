<!-- Modal Editar SATURACION-->
              <div class="modal fade" id="Edit_Modal" tabindex="-1" aria-labelledby="Modal_Edit" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <form id="frm-edit-saturacion">
                    <div class="modal-header">
                      <h5 class="modal-title" id="Modal_Edit">Editar asignatura</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div class="mt-3 mb-2"></div>
                    <div class="form-group" id="actual-pass-group">
                    <div class="form-group">
                        <input type="text" placeholder="Clave de la asignatura:" class="form-control" style="height: 60px" disabled>
                    </div>
                    </div>
                      
                      <div class="mt-3 mb-2"></div>
                      <div class="form-group" id="password-group">
                        <input type="text" placeholder="Nombre de la asignatura" class="form-control" style="height: 60px" disabled>
                      </div>
                      <div class="mt-3 mb-2"></div>
                      <div class="form-group" id="password-group">
                        <div class="form-floating">
                                <select class="form-select" id="floatingSelect" id="edit-saturacion" name="edit-saturacion">
                                    <option hidden=""></option>
                                    <option value="1">1102</option>
                                    <option value="2">2102</option>
                                    <option value="3">3102</option>
                                </select>
                                    <label for="floatingSelect"><font SIZE=3.5>Grupo:</font></label>
                        </div>
                        <div class="mt-3 mb-2"></div>
                              
                        <div class="form-floating">
                                <select class="form-select" id="floatingSelect" id="edit-saturacion2" name="edit-saturacion2" disabled>
                                    <option hidden=""></option>
                                    <option value="1">3</option>
                                    <option value="2">5</option>
                                    <option value="3">7</option>
                                </select>
                                    <label for="floatingSelect"><font SIZE=3.5>Semestre:</font></label>
                        </div>
                        <div class="mt-3 mb-2"></div>
                              <div class="form-group">
                                <input type="text" placeholder="Numero de creditos:" class="form-control" style="height: 60px" id="edit-saturacion3" name="edit-saturacion3" disabled>
                              </div>
                              <div class="mt-3 mb-2"></div>
                              <div class="form-group">
                                <input type="text" placeholder="Cupo:" class="form-control" style="height: 60px" id="edit-saturacion4" name="edit-saturacion4">
                              </div>
                        </div>
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>