<!-- MODAL DE BAJA DE ASIGNATURA 
    RELACIONADA CON LA BAJA DE ASIGNATURAS CORRESPONDIENTE A UN PLAN DE ESTUDIOS, PANTALLA ag_asig.php
-->
	 

  
   <div class="modal fade" id="Modal_baja_Asig" tabindex="-1" aria-labelledby="Modal_baja_Asignatura" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <form id="frm_baja_asignatura_plan_e">
              <div class="modal-header">
                <h5 class="modal-title" id="Modal_b">ADVERTENCIA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              <div class="mt-3 mb-2"></div>
              <div class="form-group" id="Edit_plan_grup">
              		<H5>¿Esta seguro que desea dar de baja esta asignatura?</H5>
              </div>
              <input type="hidden" placeholder="idAsignatura baja" class="form-control"style="height: 45px" name="idAsignatura_baja" id="idAsignatura_baja">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary">Aceptar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  