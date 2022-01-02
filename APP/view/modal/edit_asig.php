<!-- Modal Editar Asignatura-->

          
              <div class="modal fade" id="Edit_Modal_P" tabindex="-1" aria-labelledby="Modal_Edit_P" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <form id="frm_modal_edit_asignatura">
                      <div class="modal-header">
                        <h5 class="modal-title" id="Modal_Edit_P">Editar Asignatura</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <!-- <label for="idAsignatura" >id Asignatura:</label> -->
                      <input type="hidden" placeholder="idAsignatura" class="form-control"style="height: 45px" name="idAsignatura_edit" id="idAsignatura_edit">
                    <div class="mt-3 mb-2"></div>
                    <div class="form-group" id="actual-pass-group">
                    <div class="form-group">
                      <label for="clave_asignatura_edit">Clave:</label>
                      <input type="number" placeholder="Clave:" class="form-control"style="height: 45px" name="clave_asignatura_edit" id="clave_asignatura_edit" onkeydown="verificavacioedit()" onkeyup="verificavacioedit()" onblur="verificavacioedit()" onfocus="verificavacioedit()">
                    </div>
                    </div>
                      <div class="mt-3 mb-2"></div>
                      <div class="form-group" id="">
                        <label for="nom_asignatura_edit">Nombre asignatura:</label>
                        <input type="text" placeholder="Nombre de la asignatura:" class="form-control" style="height: 45px" id="nom_asignatura_edit" name="nom_asignatura_edit" onkeydown="verificavacioedit()" onkeyup="verificavacioedit()" onblur="verificavacioedit()" onfocus="verificavacioedit()" onkeyup="javascript:this.value=this.value.toUpperCase();">
                      </div>
                      <div class="mt-3 mb-2"></div>
                        <div class="form-group" id="">
                        <label for="caracter_edit">Carácter:</label>
                        <div class="form-floating">
                          <select class="form-select" id="caracter_edit" name="caracter_edit"onkeydown="funcionesEdit()" onkeyup="funcionesEdit()" onblur="funcionesEdit()" onfocus="funcionesEdit()" onselect="funcionesEdit()" onclick="funcionesEdit()">
                              <option hidden=""></option>
                              <option id="caracter_edit_1" value="1">Obligatoria</option>
                              <option id="caracter_edit_2"  value="2">Optativa requerida</option>
                              <option id="caracter_edit_3"  value="3">Optativa de elección</option>
                          </select>
                              <label for="floatingSelect"><font SIZE=3>Carácter:</font></label>
                        </div>
                      </div> 
                      <div class="mt-3 mb-2"></div>
                        <div class="form-group" id="">
                          <label for="semestre_edit">Semestre:</label>
                          <input type="number" min="0" max="20" placeholder="Semestre:" class="form-control"style="height: 45px"id="semestre_edit" name="semestre_edit" onkeydown="verificavacioedit()" onkeyup="verificavacioedit()" onblur="verificavacioedit()" onfocus="verificavacioedit()">
                        </div>
                      <div class="mt-3 mb-2"></div>
                      <div class="form-group" id="">
                        <label for="creditos_edit">Creditos:</label>
                        <input type="number" min="4" max="12" placeholder="Créditos:" class="form-control" style="height: 45px" id="creditos_edit" name="creditos_edit" onkeydown="verificavacioedit()" onkeyup="verificavacioedit()" onblur="verificavacioedit()" onfocus="verificavacioedit()">
                      </div>  
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submint" class="btn btn-primary" id="btnasigedit">Modificar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
      </div>
