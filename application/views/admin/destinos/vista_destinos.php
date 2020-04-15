<style type="text/css">
    #inputNombre:hover{
     cursor: not-allowed;
    }
    #idDestino:hover{
     cursor: not-allowed;
    }

</style>
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
                        <h2 class="kt-font-primary">REGISTRAR DESTINOS</h2>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <h3>X</h3>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="kt-section">
                        <div class="kt-section__info">
                            <button type="button" class="btn btn-outline-brand" data-toggle="modal" data-target=".bd-example-modal-lg"><span class="flaticon2-add"> Añadir Destinos</span></button>
                        </div>
                        <div class="kt-section_content kt-shape-bg-color-2">
                            <table class="table table-striped- table-bordered table-hover table-checkable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Lugar</th>
                                        <th>Operaciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($destino)): ?>
                                        <?php foreach ($destino as $destino): ?>
                                            <tr>
                                                <td><?php echo $destino->id; ?></td>
                                                <td><?php echo $destino->lugar; ?></td>
                                                <td>
                                                    <a id="btEditarC" onclick="LoadValue(<?php echo $destino->id; ?>,'<?php echo $destino->lugar; ?>');" class="btn btn-danger" data-toggle="modal" data-target=".editar">
                                                    <span class="flaticon2-edit"></span></a>
                                                    <a  id="btEliminarD" onclick="Pasaid(<?php echo $destino->id; ?>,'<?php echo $destino->lugar; ?>');" class="btn btn-warning" data-toggle="modal" data-target=".eliminar"><span class="flaticon2-rubbish-bin-delete-button"></span>
                                                </td>
                                            </tr>
                                        <?php endforeach;?>
                                    <?php endif;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">DESTINOS</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="kt-form" id="kt_form" method="POST" action="<?php echo base_url(); ?>matenimiento/destino/store">
                                        <!--begin: Form Wizard Step 1-->
                                        <div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
                                            <div class="kt-form__section kt-form__section--first">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="form-group">
                                                            <label>Lugar:</label>
                                                            <input type="text" class="form-control" name="lugar_d" placeholder="Ingrese destino de llegada">
                                                            <span class="form-text text-muted">Porfavor ingresar bien los datos</span>
                                                        </div>
                                                    </div>
                                                    <div class="kt-login-v2__actions">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <!--<button type="submit" class="btn btn-brand btn-elevate btn-pill" id="kt_login_submit">Registrar</button>-->
                                                        <button type="button" class="btn btn-outline-brand" data-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-outline-brand" id="kt_login_submit">Guardar Cambios</button>
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
                    <div class="modal fade editar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">EDITAR DESTINO</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="kt-form" id="kt_form" method="POST" action="<?php echo base_url(); ?>matenimiento/destino/editar">
                                        <!--begin: Form Wizard Step 1-->
                                        <div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
                                            <div class="kt-form__section kt-form__section--first">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="form-group">
                                                            <label>ID</label>
                                                            <input type="number" id="idDestino" class="form-control" readonly="" name="idDestino">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="form-group">
                                                            <label>Lugar:</label>
                                                            <input type="text" id="lugarDestino" class="form-control" name="lugar_d" placeholder="Ingrese destino de llegada">
                                                            <span class="form-text text-muted">Porfavor ingresar bien los datos</span>
                                                        </div>
                                                    </div>
                                                    <div class="kt-login-v2__actions">


                                                    </div>
                                                    <div class="modal-footer">
                                                        <!--<button type="submit" class="btn btn-brand btn-elevate btn-pill" id="kt_login_submit">Registrar</button>-->
                                                        <button type="button" class="btn btn-outline-brand" data-dismiss="modal">Cancelar</button>
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
                    <!--fin de edita-->
                    <!--eliminar-->
                    <div class="modal fade eliminar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">ELIMINAR DESTINO</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- <form class="kt-form" id="kt_form" method="POST" action="<?php echo base_url(); ?>matenimiento/destino/eliminar"> -->
                                        <!--begin: Form Wizard Step 1-->
                                        <div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
                                            <div class="kt-form__section kt-form__section--first">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="form-group">
                                                            <label>Lugar:</label>
                                                            <input type="text" class="form-control" name="lugar_d" id="inputNombre" readonly=""placeholder="Ingrese destino de llegada">
                                                            <span class="form-text text-muted">Porfavor ingresar bien los datos</span>
                                                        </div>
                                                    </div>
                                                    <div class="kt-login-v2__actions">


                                                    </div>
                                                    <div class="modal-footer">
                                                        <!--<button type="submit" class="btn btn-brand btn-elevate btn-pill" id="kt_login_submit">Registrar</button>-->
                                                        <button type="button" class="btn btn-outline-brand" data-dismiss="modal">CANCELAR</button>
                                                        <a  id="#yes" class="btn btn-outline-brand">ELIMINAR</a>
                                                        <!-- <button type="submit" class="btn btn-outline-brand" id="kt_login_submit">Save changes</button> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- </form> -->
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
<script type="text/javascript">
   function LoadValue(x,y){

    document.getElementById("idDestino").value = x;

    document.getElementById("lugarDestino").value = y;

     // alert(x+' '+y);
  }

  function Pasaid(id,nombre){

    document.getElementById('inputNombre').value=nombre;

    var a = document.getElementById("#yes");
    a.setAttribute("href","<?php echo base_url(); ?>matenimiento/destino/eliminar/"+id);

  }

</script>