<!-- Modal AGREGAR Asignatura -->


  <div class="modal fade" id="Asig_Modal_Asig" tabindex="-1" aria-labelledby="Modal_Asig_Asig" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          <form id="frm_m_a_asignatura">
               <div class="modal-header">
                   <h5 class="modal-title" id="Modal_Asig_P">Agregar Asignatura</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                   <div class="modal-body">
                      <div class="mt-3 mb-2"></div>
                  <div class="form-group" id="actual-pass-group">
                      <div class="form-group">
                        <label for="clave_asignatura">Clave:</label>
                          <input type="number" placeholder="" class="form-control" style="height: 45px" id="clave_asignatura_2" name="clave_asignatura_2" disabled>
                          <input type="number" placeholder="Clave:" class="form-control" style="height: 45px" id="clave_asignatura_add" name="clave_asignatura_add" >
                          <button type="submit" class="btn btn-primary" id="btnverifica" disabled>Verificar</button>
                      </div>
                      </div>
                        <div class="mt-3 mb-2"></div>
                        <div class="form-group" id="">
                          <label for="nom_asignatura">Nombre de la asignatura:</label>
                          <input type="text" placeholder="Nombre de la asignatura:" class="form-control" style="height: 45px" id="nom_asignatura_add" name="nom_asignatura_add">
                        </div>
                        <div class="mt-3 mb-2"></div>
                          <div class="form-group">
                          <label for="semestre">Semestre:</label>
                          <input type="number" placeholder="Semestre:" class="form-control" style="height: 45px" id="semestre_add" name="semestre_add">
                      </div>
                        <div class="mt-3 mb-2"></div>
                        <div class="form-group" id="">
                          <label for="creditos">Creditos:</label>
                          <input type="number" placeholder="Créditos:" class="form-control" style="height: 45px" id="creditos_add" name="creditos_add">
                        </div>
                        <div class="mt-3 mb-2"></div>
                        <label for="caracter">Caracter:</label>
                          <div class="form-floating">
                            <select class="form-select" id="caracter_add" name="caracter_add">
                                <option hidden=""></option>
                                <option value="1">1 - Obligatoria</option>
                                <option value="2">2 - Optativa</option>
                            </select>
                                <label for="caracter"><font SIZE=3>Carácter:</font></label>
                          </div>
                          <div>
                            <span class="" id="existe_asig"></span>
                          </div>
                          <!--<div class="mt-3 mb-2"></div>
                        <div class="form-group" id="">
                          <label for="grupos">Grupos:</label>
                          <input type="text" placeholder="Grupos:" class="form-control" style="height: 45px" id="grupos" name="grupos">
                        </div>-->
                      </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                      <button type="submit" class="btn btn-primary" id="btnagregarasig">Agregar</button>
                    </div>
                </form>
              </div>
            </div>
          </div>

