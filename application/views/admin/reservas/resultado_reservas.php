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
                </div>
                <div class="kt-portlet__body">
                    <div class="kt-section">
                        <div class="kt-section_content kt-shape-bg-color-2">
                           <div class="table-responsive">
                            <table class="table table-striped- table-bordered table-hover table-checkable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>NUMERO DE ASIENTOS</th>
                                        <th>ESTADO 1</th>
                                        <th>ESTADO 2</th>
                                        <th>ESTADO 3</th>
                                        <th>ESTADO 4</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($asientos)): ?>
                                        <?php foreach ($asientos as $key): ?>
                                            <tr>
                                                <td><?php echo $key->numero; ?></td>
                                                <td><?php
if ($key->estado1 = "off") {
    echo "DISPONIBLE";
} else {
    echo "OCUPADO";
}
?></td>
                                                <td>
                                                    <?php
if ($key->estado2 == "off") {
    echo "DISPONIBLE";
} else {
    echo "OCUPADO";
}
?>
                                                </td>
                                                <td>
                                                    <?php
if ($key->estado3 == "off") {
    echo "DISPONIBLE";
} else {
    echo "OCUPADO";
}
?>
                                                </td>
                                                <td>
                                                    <?php
if ($key->estado4 == "off") {
    echo "DISPONIBLE";
} else {
    echo "OCUPADO";
}
?>
                                                </td>
                                            </tr>
                                        <?php endforeach;?>
                                    <?php endif;?>
                                </tbody>

                            </table>
                           </div>
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