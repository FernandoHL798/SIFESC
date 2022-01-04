<!-- Modal AGREGAR GRUPO -->

          
<div class="modal fade" id="agrega_grupo" tabindex="-1" aria-labelledby="agrega_grupo" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="frm_m_a_grupo">
        <div class="modal-header">
          <h5 class="modal-title" id="agrega_grupo_h5">Agregar grupo</h5>
          <button type="button" onclick="limpiar();" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div>
            <p>Escribe el grupo que deseas agregar</p>
          </div>
          <input type="hidden" name="idPlanAsig_add_gr" id="idPlanAsig_add_gr" value="<?php echo $idPlan;?>">
          <input type="hidden" name="clave_asig_add_gr" id="clave_asig_add_gr" value="<?php echo $claveAsig;?>">
          <input type="hidden" id="idasignaturagrupo_add" name="idasignaturagrupo_add">
          <div class="mt-3 mb-2"></div>
          <div class="form-group" id="actual-pass-group">
            <div class="form-group">
              <input type="text" minlength="1" maxlength="5" placeholder="Grupo: " class="form-control" style="height: 60px" id="grupo_agrega" name="grupo_agrega" onkeydown="verificarVacioGrupo();" onkeyup="verificarVacioGrupo();" onfocus="verificarVacioGrupo();">
            </div>
            <div class="mt-3 mb-2"></div>
                        <label for="tipo_add">Tipo:</label>
                          <div class="form-floating">
                            <select class="form-select" id="tipo_add" name="tipo_add" onkeyup="activarBotonAgregar();" onkeyup="activarBotonAgregar();" onclick="activarBotonAgregar();">
                                <option hidden=""></option>
                                <option value="1">Ordinario</option>
                                <option value="2">Extraordinario</option>
                            </select>
                                <label for="tipo_add"><font SIZE=3>Tipo:</font></label>
                          </div>
            <div class="mt-3 mb-2"></div>
                        <label for="tipo_add">Turno:</label>
                          <div class="form-floating">
                            <select class="form-select" id="turno_add" name="turno_add" onkeyup="activarBotonAgregar();" onkeyup="activarBotonAgregar();" onclick="activarBotonAgregar();">
                                <option hidden=""></option>
                                <option value="1">Matutino</option>
                                <option value="2">Vespertino</option>
                            </select>
                                <label for="turno_add"><font SIZE=3>Turno:</font></label>
                          </div>
          </div>
        </div>
      <div class="modal-footer">
        <button type="button" onclick="limpiar();" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" id="btnGrupo_add" class="btn btn-primary">Agregar</button>
      </div>
    </form>
  </div>
</div>
</div>