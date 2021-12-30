
<!-- Modal -->
<div class="modal fade" id="Asig_Mat_P" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  	<div class="modal-dialog">
				    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Agregar asignatura</h5>
					        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					      </div>
					    <div class="modal-body">

					        <!-- CONTENIDO DEL MODAL-->
							<form id="frm-add-movimiento">
					                     <div class="mt-3 mb-2"></div>
									    <label for="exampleInputEmail1" class="form-label">Nombre de asignatura</label>
									    <select class="form-select" aria-label="Default select example" id="asig_materia" name="asig_materia">
											  <!-- AJAX RESPONSE LISTA ALUMNO-->
											</select><br>
											<label for="exampleInputEmail1" class="form-label">Selecciona grupo</label>
										    <select class="form-select" aria-label="Default select example" id="grupo" name="grupo">
												 <!-- AJAX RESPONSE LISTA ALUMNO-->
												</select><br>
										<label id="saturacionGrupoAsig"></label>
										<input type="hidden" id="ins"></input>
										<input type="hidden" id="cup"></input>
									</div>
						        <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
							        <button type="submit" class="btn btn-primary">Guardar cambios</button>
						        </div>
							</form>  
					    </div>

					
			 		</div>
				</div>
	</div>
</div>
