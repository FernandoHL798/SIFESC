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
                          <input type="number" maxlength="4" placeholder="" class="form-control" style="height: 45px" id="clave_asignatura_2" name="clave_asignatura_2" disabled hidden>
                          <input type="text" maxlength="4" pattern="[0-9]{4}" placeholder="Clave:" class="form-control" style="height: 45px" id="clave_asignatura_add" name="clave_asignatura_add" onkeydown="verificavacioag()" onkeyup="verificavacioag()" onblur="verificavacioag()" onfocus="verificavacioag()" title="Clave Incorrecta" title="Deben ser 4 caracteres">
                          <div class="alert alert-danger" id="do_exist">
                                  <a href="#" class="close" data-dismiss="alert">&times;</a>
                                  <strong>¡Aviso!</strong>La asignatura ya existe
                                </div>
                      </div>
                      </div>
                        <div class="mt-3 mb-2"></div>
                        <div class="form-group" id="">
                          <label for="nom_asignatura">Nombre de la asignatura:</label>
                          <input type="text" maxlength="50" pattern="[A-ZÀ-ÿ0-9]{1,}" placeholder="Nombre de la asignatura:" class="form-control" style="height: 45px" id="nom_asignatura_add" name="nom_asignatura_add" onkeydown="verificavacioag()" onkeyup="verificavacioag()" onblur="verificavacioag()" onfocus="verificavacioag()" onkeyup="javascript:this.value=this.value.toUpperCase();">
                        </div>
                        <div class="mt-3 mb-2"></div>
                        <label for="caracter">Carácter:</label>
                          <div class="form-floating">
                            <select class="form-select" id="caracter_add" name="caracter_add" onkeydown="funcionesadd()" onkeyup="funcionesadd()" onblur="funcionesadd()" onfocus="funcionesadd()" onselect="funcionesadd()" onclick="funcionesadd()">
                                <option hidden=""></option>
                                <option value="1">Obligatoria</option>
                                <option value="2">Optativa requerida</option>
                                <option value="3">Optativa de elección</option>
                            </select>
                                <label for="caracter"><font SIZE=3>Carácter:</font></label>
                          </div>
                        <div class="mt-3 mb-2"></div>
                          <div class="form-group">
                          <label for="semestre">Semestre:</label>
                          <input type="number" pattern="^[0-3]{1}" placeholder="Semestre:" class="form-control" style="height: 45px" id="semestre_add" name="semestre_add" onkeydown="verificavacioag()" onkeyup="verificavacioag()" onblur="verificavacioag()" onfocus="verificavacioag()" pattern="^[0-3]{1}">
                      </div>
                        <div class="mt-3 mb-2"></div>
                        <div class="form-group" id="">
                          <label for="creditos">Creditos:</label>
                          <input type="number" min="4" max="12" placeholder="Créditos:" class="form-control" style="height: 45px" id="creditos_add" name="creditos_add" onkeydown="verificavacioag()" onkeyup="verificavacioag()" onblur="verificavacioag()" onfocus="verificavacioag()">
                        </div>
                          <div>
                            <span class="" id="existe_asig"></span>
                          </div>
                      </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                      <button type="submit" class="btn btn-primary" id="btnagregarasig">Agregar</button>
                    </div>
                </form>
              </div>
            </div>
          </div>

