<!-- Modal Verificar identidad-->
<div class="modal fade" id="validarDatos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Verifica tu identidad</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-4">
            <label for="exampleInputEmail1" class="form-label font-weight-bold">Correo</label>
            <input type="email" class="form-control" placeholder="ejemplo@correo.com" id="verifica_correo" name="verifica_correo" aria-describedby="emailHelp">
          </div>
          <div class="mb-4">
            <label for="exampleInputfnacimiento" class="form-label font-weight-bold">Fecha de nacimiento</label>
            <input type="password" class="form-control mb-3" placeholder="ddmmaaaa" id="verifica_fecha" name="verifica_fecha">
          </div>
          <div class="mb-4">
            <div class="form-floating">
              <select class="form-select mb-4" id="floatingSelect">
                <option hidden=""></option>
                <option value="1">¿Como se llama su mamá?</option>
                <option value="2">¿Cual es el nombre de su primer mascota?</option>
                <option value="3">¿Cual es el nombre de su escuela primaria?</option>
              </select>
              <label for="floatingSelect"><font SIZE=3>Seleccione una pregunta secreta</font></label>
            </div>
            <div class="mb-4">
              <label for="exampleInputCPostal" class="form-label font-weight-bold">Respuesta a la pregunta secreta</label>
              <input type="email" class="form-control" placeholder="" id="verifica_resp" name="verifica_resp" aria-describedby="emailHelp">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Enviar</button>
        </div>
      </div>
    </div>
  </div>