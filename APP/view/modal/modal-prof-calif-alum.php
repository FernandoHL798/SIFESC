<!-- MODAL PARA ACTUALIZAR LA CALIFICACION DEL ALUMNO-->
           
            <div class="modal fade" id="Modal_profesor_editalumno" tabindex="-1" aria-labelledby="Modal_profesor_editalumno" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="Modal_Edit_P">Agregar calificación</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <label for="disabledTextInput" class="form-label">Alumno : </label>
                        <input class="form-control" id="Alumno" type="text" placeholder="MARTÍNEZ HERNÁNDEZ EMMANUEL" aria-label="Disabled input example" disabled>
                        <div class="mt-3 mb-2"></div>
                        <label for="disabledTextInput" class="form-label">Número de cuenta : </label>
                        <input class="form-control" id="No-cuenta" type="text" placeholder="314243919" aria-label="Disabled input example" disabled>
                        <div class="mt-3 mb-2"></div>
                        <div class="mt-3 mb-2"></div>
                        <div class="form-group" id="Edit_plan_grup">
                        <div class="form-group">
                            <input type="text" placeholder="Calificación: (solo acepta valores enteros)" class="form-control" style="height: 60px">
                        </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Guardar</button>
                  </div>
                </div>
              </div>
            </div>