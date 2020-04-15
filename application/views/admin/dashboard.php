	<!-- begin:: Content -->
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
		<!--begin::Dashboard 2-->
		<!--begin::Row-->
		<div class="row">
			<div class="col-lg-12 col-xl-8 order-lg-1 order-xl-1">
				<!--begin::Portlet-->
				<div class="kt-portlet kt-portlet--height-fluid">
					<div class="kt-portlet__head">
						<div class="kt-portlet__head-label">
							<h3 class="kt-portlet__head-title"></h3>
						</div>
						<div class="kt-portlet__head-toolbar">

						</div>
					</div>
					<div class="kt-portlet__body">

                        <div class="text-center">
		                  <h1>BIENVENIDO AL SISTEMA AHORA PUEDES ADMINISTRAR TUS PUBLICACIONES</h1>
                          <a href="<?php echo base_url(); ?>/matenimiento/publicaciones" class="btn btn-danger">CREAR UNA PUBLICAION NUEVA</a>
		                  <div class="kt-login-v2__image" id="imagen">
                           <img  width="200" src="<?php echo base_url(); ?>/assets/images/busv1.png" alt="">
                          </div>
                        </div>


						<div class="kt-widget-18">
							<div class="kt-widget-18__summary">
								<div class="kt-widget-18__total">
									<?php if (!empty($usuario)): ?>
										<?php foreach ($usuario as $usuario): ?>
											<?php echo $usuario->nombre ?>
										<?php endforeach;?>
									<?php endif;?>
								</div>
								<div class="kt-widget-18__label"></div>
							</div>
						</div>
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

	<style type="text/css">
		#imagen a{
           width: 20px;
		}
	</style>