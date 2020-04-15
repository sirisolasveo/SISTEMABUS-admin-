<style type="text/css">
	.block:hover{
      cursor: not-allowed;
	}
</style><!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
	<!--begin::Dashboard 2-->
	<!--begin::Row-->
	<div class="row">
		<div class="col-lg-12 col-xl-8 order-lg-1 order-xl-1">
			<!--begin::Portlet-->
			<div class="kt-portlet kt-portlet--height-fluid">
				<div class="kt-portlet__head">
					<div class="kt-portlet__head-label">
						<h2 class="kt-font-primary">REGISTRAR PUBLICACIONES</h2>
					</div>
					<div class="kt-portlet__head-toolbar">
						<h3>X</h3>
					</div>
				</div>
				<div class="kt-portlet__body">
					<div class="kt-section">
						<div class="kt-section__info">
							<button type="button" class="btn btn-outline-brand" data-toggle="modal" data-target=".mlAgregar"><span class="flaticon2-add"> Destinos</span></button>
						</div>
						<div class="kt-section_content kt-shape-bg-color-2">
						  <div class="table-responsive">
							<table class="table table-striped- table-bordered table-hover table-checkable">
								<thead class="thead-dark">
									<tr>
										<th>Id</th>
										<th>Empresa</th>
										<th>Destino</th>
										<th>Hora de salida</th>
										<th>Precio</th>
										<th>Operaciones</th>
									</tr>
								</thead>
								<tbody>
									<?php if (!empty($publicacion)): ?>
										<?php foreach ($publicacion as $publicaciones): ?>						<?php if ($publicaciones->empresa == $this->session->userdata("empresa")): ?>
												<tr>
													<td><?php echo $publicaciones->id; ?></td>
													<td><?php echo $publicaciones->empresa; ?></td>
													<td><?php echo $publicaciones->destino; ?></td>
													<td><?php echo $publicaciones->hora; ?></td>
													<td><?php echo $publicaciones->costo; ?></td>

													<td>
													<a href="#modalEditar" onclick="LoadValue(<?php echo $publicaciones->id; ?>,'<?php echo $publicaciones->empresa; ?>','<?php echo $publicaciones->destino; ?>','<?php echo $publicaciones->hora; ?>','<?php echo $publicaciones->costo; ?>');" id="editarT" data-toggle="modal" class="btn btn-danger" ><span class="flaticon2-edit"></span></a>
                                                    <a href="#modalEliminar" onclick="Pasaid(<?php echo $publicaciones->id; ?>,'<?php echo $publicaciones->empresa; ?>','<?php echo $publicaciones->destino; ?>');" id="eliminarT"  data-toggle="modal" class="btn btn-warning" ><span class="flaticon2-rubbish-bin-delete-button"></span></a>
													</td>
												</tr>
								         	<?php endif;?>
										<?php endforeach;?>
									<?php endif;?>
								</tbody>
							</table>
						   </div>
						</div>
					</div>
					<!--empieza agregar ml-->
					<div class="modal fade mlAgregar "tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">NUEVA PUBLICACION</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form class="kt-form" method="POST" action="<?php echo base_url(); ?>matenimiento/publicaciones/store">
										<!--begin: Form Wizard Step 1-->
										<div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
											<div class="kt-form__section kt-form__section--first">
												<div class="row">
													<div class="col-xl-6">
														<div class="form-group">
															<input type="hidden" name="empresa" value="<?php echo $this->session->userdata("empresa"); ?>">
															<label>Destino:</label>
															<select name="destino" id="destino" class="form-control">
																<?php
foreach ($lugares as $value) {
    ?>
																	<option value="<?php echo $value->id; ?>"><?php echo $value->lugar; ?></option>
																<?php
}
?>
															</select>
															<span class="form-text text-muted">Por favor ingresar bien los datos</span>
														</div>
													</div>
													<div class="col-xl-6">
														<div class="form-group">
															<label>Hora de Salida:</label>
															<input type="text"  name="hora_s" placeholder="por ejemplo (7:30) ">
															<select name="option">
																<option value="AM">AM</option>
																<option value="PM">PM</option>
															</select>
															<span class="form-text text-muted">Porfavor ingresar bien los datos</span>
														</div>
													</div>

													<div class="col-xl-6">
														<div class="form-group">
															<label>Precio $:</label>
															<input type="text" class="form-control" name="precioa" placeholder="Ingrese precio">
															<span class="form-text text-muted">Porfavor ingresar bien los datos</span>
														</div>
													</div>

													<div class="modal-footer">
														<!--<button type="submit" class="btn btn-brand btn-elevate btn-pill" id="kt_login_submit">Registrar</button>-->
														<button type="button" class="btn btn-outline-brand" data-dismiss="modal">Close</button>
														<button type="submit" class="btn btn-outline-brand" id="kt_login_submit">Guardar</button>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!--fin de agregar-->
					<!--editar-->
					<div class="modal fade editar" id="modalEditar"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">EDITAR PUBLICACION</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form class="kt-form" id="kt_form" method="POST" action="<?php echo base_url(); ?>matenimiento/publicaciones/update">
										<!--begin: Form Wizard Step 1-->
										<div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
											<div class="kt-form__section kt-form__section--first">
												<div class="row">
													<div class="col-xl-6">
														<div class="form-group">
															<label>Id:</label>
															<input type="number" class="form-control block" id="id_e" name="id_e" placeholder="Ingrese hora de salida" readonly="">
															<span class="form-text text-muted">Porfavor ingresar bien los datos</span>
														</div>
													</div>
													<div class="col-xl-6">
														<div class="form-group">
															<label>Empresa:</label>
															<input type="text" class="form-control block" id="empresa_e" name="empresa_e" placeholder="Ingrese hora de salida" readonly="">
															<span class="form-text text-muted">Porfavor ingresar bien los datos</span>
														</div>
													</div>
													<div class="col-xl-6">
														<div class="form-group">
															<label>Destino:</label>
															<select name="destino_e" id="destino_e" class="form-control" required="">
																<?php
foreach ($lugares as $value) {
    ?>
																	<option value="<?php echo $value->id; ?>"><?php echo $value->lugar; ?></option>
																<?php
}
?>
															</select>
															<span class="form-text text-muted">Por favor ingresar bien los datos</span>
														</div>
													</div>

													<div class="col-xl-6">
														<div class="form-group">
															<label>Hora de Salida:</label>
															<input type="text" class="form-control" id="hora_e" name="hora_e" placeholder="Ingrese hora de salida">
															<span class="form-text text-muted">Porfavor ingresar bien los datos</span>
														</div>

													</div>

													<div class="col-xl-6">
														<div class="form-group">
															<label>Precio (SOLES):</label>
															<input type="number" class="form-control" id="costo_e" name="precio_e" placeholder="Ingrese precio">
															<span class="form-text text-muted">Porfavor ingresar bien los datos</span>
														</div>
													</div>
													<div class="modal-footer">
														<!--<button type="submit" class="btn btn-brand btn-elevate btn-pill" id="kt_login_submit">Registrar</button>-->
														<button type="button" class="btn btn-outline-brand" data-dismiss="modal">Cerrar</button>
														<button type="submit" class="btn btn-outline-brand">Editar</button>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!--fin de edita-->
					<!--eliminar-->
					<div class="modal fade eliminar" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-xl">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">PUBLICACION</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form class="kt-form" method="POST" action="<?php echo base_url(); ?>matenimiento/publicaciones/eliminar">
								    <input type="hidden" id="put_id" name="id_delete" >
								    <input type="hidden" id="put_empresa" name="empresa_delete">
								    <input type="hidden" id="put_destino" name="destino_delete" >

										<!--begin: Form Wizard Step 1-->
										<div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
											<div class="kt-form__section kt-form__section--first">
												<div class="row">
													<h2>¿ESTA SEGURO DE ELIMINAR ESTA PUBLICACION?</h2>
													<div class="modal-footer">
														<!--<button type="submit" class="btn btn-brand btn-elevate btn-pill" id="kt_login_submit">Registrar</button>-->
														<button type="button" class="btn btn-outline-brand" data-dismiss="modal">NO</button>
														<button type="submit" class="btn btn-outline-brand">SI</button>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!--fin eliminar-->
				</div>
			</div>
			<!--end::Portlet-->
		</div>
	</div>
	<!--end::Row-->
	<!--end::Dashboard 2-->
</div>
<!-- end:: Content -->
</div>


<script>
     function LoadValue(id,empresa,destino,hora,costo){

    document.getElementById("id_e").value = id;
    document.getElementById("empresa_e").value = empresa;
    document.getElementById("destino_e").value = destino;
    document.getElementById("hora_e").value = hora;
    document.getElementById("costo_e").value = costo;

     // alert(x+' '+y);
  }

  function Pasaid(id,empresa,destino){
    document.getElementById("put_id").value = id;
    document.getElementById("put_empresa").value = empresa;
    document.getElementById("put_destino").value = destino;
  }

</script>