<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
  <!--begin::Dashboard 2-->
  <!--begin::Row-->
  <div class="row">
    <div class="col-lg-12 col-xl-8 order-lg-1 order-xl-1">
      <div class="kt-portlet kt-portlet--height-fluid">
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h2 class="kt-font-primary">INFOMACION DE USUARIO</h2>
          </div>
        </div>
      <!--empieza --->
                <div>
                  <?php if (!empty($informacionPersona)): ?>
                      <?php foreach ($informacionPersona as $key): ?>
                          <tr>
                              <?php $key->dni;?>
                              <?php $key->nombre;?>
                              <?php $key->apellidos;?>
                          </tr>
                      <?php endforeach;?>
                  <?php endif;?>
                </div>
               <div class="table-responsive">
                 <table class="table table-dark">
                      <thead class="bg-info">
                        <tr>
                          <th scope="col">DATOS</th>
                          <th scope="col">INFOMACION DEL USUARIO</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">DNI</th>
                          <td><?php echo $key->dni; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">NOMBRE</th>
                          <td><?php echo $key->nombre; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">APELLIDO</th>
                          <td><?php echo $key->apellidos; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">DIRECCION</th>
                          <td><?php echo $key->direccion; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">CELULAR</th>
                          <td><?php echo $key->celular; ?></td>
                        </tr>
                        <tr>
                          <th scope="row">CORREO</th>
                          <td><?php echo $key->correo; ?></td>
                        </tr>
                      </tbody>
                </table>
               </div>
      <!--TERMINA-->

    </div>
    </div>
  <!--end::Row-->
  <!--end::Dashboard 2-->
  </div>
<!-- end:: Content -->
</div>
