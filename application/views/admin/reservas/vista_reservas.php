<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
	<!--begin::Dashboard 2-->
	<!--begin::Row-->
	<div class="row">
		<div class="col-lg-12 col-xl-8 order-lg-1 order-xl-1">
			<div class="kt-portlet kt-portlet--height-fluid">
				<div class="kt-portlet__head">
					<div class="kt-portlet__head-label">
						<h2 class="kt-font-primary">VER RESERVAS</h2>
					</div>
				</div>
			<!--empieza --->
			<ul class="nav nav-pills nav-tabs-btn nav-pills-btn-brand" role="tablist">
				<li class="nav-item">
					<form method="post" action="<?php echo base_url(); ?>matenimiento/reservas/showTables">
						<input type="hidden" name="empresa" value="<?php echo $this->session->userdata("empresa"); ?>">					
						<button class="nav-link active" type="submit" value="VER TODAS LA RESERVAS">
							<span class="nav-link-icon"><i class="flaticon2-checking"></i></span>
							<span class="nav-link-title">Todas las reservas</span>
						</button>
					</form>
				</li>

				<?php if (!empty($salidas)) : ?>
					<?php foreach ($salidas as $key) : ?>
						<?php if ($key->empresa == $this->session->userdata("empresa")) : ?>
							
							<li class="nav-item">
								<form method="post" action="<?php echo base_url(); ?>matenimiento/reservas/showTables">
									<input type="hidden" name="empresa" value="<?php echo $this->session->userdata("empresa"); ?>">
									<input type="hidden" name="destino" value="<?php echo $key->lugar; ?>">					
									<button class="nav-link active" type="submit" value="VER RESERVAS  A <?php echo $key->lugar; ?> ">
										<span class="nav-link-icon"><i class="flaticon2-checking"></i></span>
										<span class="nav-link-title">RESERVAS  A <?php echo $key->lugar;?></span>
									</button>
						
								</form>
							</li>							
							
						<?php endif; ?>
					<?php endforeach; ?>
				<?php endif; ?>
			</ul>
			<!--TERMINA-->
		
		</div>
		</div>
	<!--end::Row-->
	<!--end::Dashboard 2-->
	</div>
<!-- end:: Content -->
</div>