<!-- Modal AGREGAR GRUPO -->

          
<div class="modal fade" id="edita_grupo" tabindex="-1" aria-labelledby="edita_grupo" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="frm_m_e_grupo">
        <div class="modal-header">
          <h5 class="modal-title" id="agrega_grupo_h5">Edita grupo: <span id="edita_grupo_mombre"></span></h5>
          <button type="button" onclick="limpiar();" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div>
            <p>Elije los datos que deseas modificar</p>
          </div>
          <input type="text" name="idPlanAsig_add_gr" id="idPlanAsig_add_gr" value="<?php echo $idPlan;?>">
          <input type="text" name="clave_asig_add_gr" id="clave_asig_add_gr" value="<?php echo $claveAsig;?>">
          <input type="text" name="id_asignatura_add_gr" id="id_asignatura_add_gr" value="<?php echo $idasignaturafk;?>">
          <input type="hidden" id="idasignaturagrupo_add" name="idasignaturagrupo_add">
          <div class="mt-3 mb-2"></div>
          <div class="form-group" id="actual-pass-group">
            <div class="form-group">
              <input type="text" minlength="1" maxlength="5" placeholder="Grupo: " class="form-control" style="height: 60px" id="grupo_agrega_edit" name="grupo_agrega_edit" onkeydown="verificarVacioGrupo();" onkeyup="verificarVacioGrupo();" onfocus="verificarVacioGrupo();" disabled>
            </div>
            <div class="mt-3 mb-2"></div>
                        <label for="tipo_add_edit">Tipo:</label>
                          <div class="form-floating">
                            <select class="form-select" id="tipo_add_edit" name="tipo_add_edit" onkeyup="activarBotonAgregar();" onkeyup="activarBotonAgregar();" onclick="activarBotonAgregar();">
                                <option hidden=""></option>
                                <option value="1">Ordinario</option>
                                <option value="2">Extraordinario</option>
                            </select>
                                <label for="tipo_add"><font SIZE=3>Tipo:</font></label>
                          </div>
            <div class="mt-3 mb-2"></div>
                        <label for="tipo_add">Turno:</label>
                          <div class="form-floating">
                            <select class="form-select" id="turno_add_edit" name="turno_add_edit" onkeyup="activarBotonAgregar();" onkeyup="activarBotonAgregar();" onclick="activarBotonAgregar();">
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