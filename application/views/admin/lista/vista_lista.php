<style type="text/css">
  .buttons_option div{
    display: inline-block;
  }
</style>
<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
  <!--begin::Dashboard 2-->
  <!--begin::Row-->
  <div class="row">
    <div class="col-lg-12 col-xl-8 order-lg-1 order-xl-1">
      <div class="kt-portlet kt-portlet--height-fluid">
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h2 class="kt-font-primary">LISTA DE RESERVAS</h2>
          </div>
        </div>
      <!--empieza --->
               <div>
                <a href="<?php echo base_url(); ?>matenimiento/lista/eliminar_todo" class="btn btn-success">ELIMINAR TODAS LAS RESERVAS</a>
                <br/><br/>
                <div class="table-responsive">
                  <table class="table table-striped- table-bordered table-hover table-checkable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Destino</th>
                                        <th>Hora</th>
                                        <th>Costo</th>
                                        <th>Fecha</th>
                                        <th>Reservador</th>
                                        <th>OPCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($informacion)): ?>
                                        <?php foreach ($informacion as $key): ?>
                                            <tr>
                                                <td><?php echo $key->destino; ?></td>
                                                <td><?php echo $key->hora; ?></td>
                                                <td><?php echo $key->costo; ?></td>
                                                <td><?php echo $key->fecha; ?></td>
                                                <td><?php echo $key->reservador; ?></td>
                                                <td>
                                                 <div class="buttons_option">
                                                  <div>
                                                     <form action="<?php echo base_url(); ?>matenimiento/lista/infoModal" method="post">
                                                       <input type="hidden" name="reservador" value="<?php echo $key->reservador; ?>">
                                                       <input href="#myModalInformacion" type="submit" value="VER" class="btn btn-info">
                                                     </form>
                                                   </div>
                                                  <div>
                                                      <a href="<?php echo base_url(); ?>matenimiento/lista/eliminar?reservador=<?php echo $key->reservador; ?>" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>
                                                  </div>
                                                 </div>
                                                </td>
                                            </tr>
                                        <?php endforeach;?>
                                    <?php endif;?>
                                </tbody>

                            </table>
                </div>
               </div>
      <!--TERMINA-->

    </div>
    </div>
  <!--end::Row-->
  <!--end::Dashboard 2-->
  </div>
<!-- end:: Content -->
</div>
