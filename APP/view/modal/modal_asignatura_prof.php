
<!-- Modal -->
<div class="modal fade" id="Add_Asignatura_prof" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="frm-add-asignacion">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Agregar asignatura</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">

					<!-- CONTENIDO DEL MODAL-->

					<div class="pruebass">
						<div class="mt-3 mb-2"></div>
						<label for="exampleInputEmail1" class="form-label">Plan de estudios: </label>
						<select class="form-select" aria-label="Default select example" id="plan_e_asignacion" name="plan_e_asignacion">

						</select><br>
						<label for="exampleInputEmail1" class="form-label">Asignatura</label>
						<select class="form-select" aria-label="Default select example" id="asignatura_asignacion" name="asignatura_asignacion">

						</select><br>
						<label for="exampleInputEmail1" class="form-label">Grupo: </label>
						<select class="form-select" aria-label="Default select example" id="grupo_asignacion" name="grupo_asignacion">

						</select><br>
						<label for="exampleInputEmail1" class="form-label">Cupo:</label>
						<input type="number" class="form-control" id="cupo_asignacion" name="cupo_asignacion" aria-describedby="emailHelp"><br>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
						<button type="submit" class="btn btn-primary">Agregar</button>
					</div>

				</div>

			</form> 
		</div>
	</div>
</div>

