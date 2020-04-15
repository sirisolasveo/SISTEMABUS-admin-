<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <!--begin::Dashboard 2-->
    <!--begin::Row-->
    <div class="row">
        <div class="col-lg-12 col-xl-8 order-lg-1 order-xl-1">
            <!--begin::Portlet-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h2 class="kt-font-primary">Reservas</h2>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <h3>X</h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="kt-section">
                        <div class="kt-section_content kt-shape-bg-color-2">
                            <table class="table table-striped- table-bordered table-hover table-checkable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>NUMERO DE ASIENTOS</th>
                                        <th><?php echo $status; ?></th>
                                        <th>ACCION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($asientos_extra)) : ?>
                                        <?php foreach ($asientos_extra as $key) : ?>
                                            <tr>
                                                <td><?php echo $key->numero; ?></td>
                                                <?php
                                                if ($key->estado == "off") {
                                                    echo "<td>DISPONIBLE</td>";
                                                } else {
                                                    echo "<td class='bg-danger'>OCUPADO</td>";
                                                }
                                                ?>
                                                <td>
                                                    <form action="<?php echo base_url(); ?>matenimiento/reservas/updateAsiento" method="post">
                                                        <input type="hidden" name="estado_real" value="<?php echo $key->estado; ?>">
                                                        <input type="hidden" name="tabla" value="<?php echo $tabla; ?>">
                                                        <input type="hidden" name="numero" value="<?php echo $key->numero; ?>">
                                                        <input type="hidden" name="estado" value="<?php echo $status; ?>">
                                                        <input type="submit" class="btn btn-info" value="CANCELAR">
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Row-->
    <!--end::Dashboard 2-->
</div>
<!-- end:: Content -->
</div>