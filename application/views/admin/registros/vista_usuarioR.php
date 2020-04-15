<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8" />
    <title>LOGIN</title>
    <meta name="description" content="User login example">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--begin::Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
    <!--end::Fonts -->
    <!--begin::Page Custom Styles(used by this page) -->
    <link href="<?php echo base_url(); ?>assets/template/dist/assets/css/pages/login/login-v2.css" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles -->
    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="<?php echo base_url(); ?>assets/template/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/template/dist/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles -->
    <!--begin::Layout Skins(used by all pages) -->
    <link href="<?php echo base_url(); ?>assets/template/dist/assets/css/skins/aside/brand.css" rel="stylesheet" type="text/css" />
    <!--end::Layout Skins -->
    <!-- Hotjar Tracking Code for keenthemes.com -->
    <link rel="icon" type="image/png" tamaños="32x32" href="<?php echo base_url(); ?>assets/images/icoBus.png">
    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 1070954,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37564768-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-37564768-1');
    </script>
</head>
<!-- end::Head -->

<!-- begin::Body -->

<body class="kt-login-kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--static kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">
    <!-- begin::Page loader -->
    <!-- end::Page Loader -->
    <!-- begin:: Page -->
    <div class="kt-grid kt-grid--ver kt-grid--root">
        <div class="kt-grid__item   kt-grid__item--fluid kt-grid  kt-grid kt-grid--hor kt-login-v2">
            <!--begin::Item-->
            <div class="kt-grid__item  kt-grid--hor bg-dark" id="topDesing">
                <!--begin::Heade-->
                <div class="kt-login-v2__head">
                    <div class="kt-login-v2__logo">
                        <a href="#" class="text-white">
                            <h3>TERMINAL TERRESTRE-PUERTO MALDONADO</h3>
                        </a>
                    </div>
                    <div class="kt-login-v2__signup" id="registrar">
                        <span>Ya tienes una cuenta?</span>
                        <a href="<?php echo base_url(); ?>usuarios/" class="btn btn-info text-white">Inicia sesion aqui!!</a>
                    </div>
                </div>
                <!--begin::Head-->
            </div>
        </div>
    </div>
    <br/>

    <div class="kt-grid kt-grid--hor kt-grid--root">

        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper">
            <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="genera-box">
                <div class="row">

                    <div class="col-xl-4 col-lg-8 bg-dark">
                        <!--begin::Portlet-->
                        <div class="kt-portlet kt-portlet--height-fluid">
                            <div class="kt-portlet__head">
                                <div class="kt-portlet__head-label">
                                    <h3>FORMULARIO DE REGISTRO</h3>
                                </div>
                            </div>
                            <div class="kt-portlet__body">
                                <div class="kt-widget-18">
                                    <form class="kt-form" method="POST" action="<?php echo base_url(); ?>usuarios/store" onsubmit="return comprobarClave();">
                                        <div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
                                            <div class="kt-form__section kt-form__section--first">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="form-group">
                                                            <label>SELECCIONE EL NOMBRE DE LA EMPRESA</label>
                                                            <select class="form-control" name="empresa">
                                                                <?php if (!empty($empresas)): ?>
                                                                    <?php foreach ($empresas as $value): ?>
                                                                        <option value="<?php echo $value->id; ?>"><?php echo $value->nombre; ?></option>
                                                                    <?php endforeach;?>
                                                                <?php endif;?>
                                                            </select>
                                                            <!-- <input class="form-control" type="text" require placeholder="Nombre de usuario" required="" name="user" autocomplete="off"> -->
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="kt-portlet__head">
                                                            <div class="kt-portlet__head-label">
                                                                <h3>DATOS DE ENCARGADO</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="form-group">
                                                            <label>Nombre:</label>
                                                            <input class="form-control" type="text" require placeholder="Ingrese su nombre" required="" name="nombre" autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="form-group">
                                                            <label>Apellidos:</label>
                                                            <input class="form-control" type="text" require placeholder="Ingrese su apellidos" required="" name="apellidos" autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="form-group">
                                                            <label>Dni:</label>
                                                            <input class="form-control" type="number" require placeholder="Ingrese su dni" required="" name="dni" autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="form-group">
                                                            <label>Numero Celular:</label>
                                                            <input class="form-control" type="number" require placeholder="Ingrese su numero" required="" name="numero" autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="form-group">
                                                            <label>Email:</label>
                                                            <input class="form-control" type="email" require placeholder="Ingrese su email" required="" name="email" autocomplete="off">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="kt-portlet__head">
                                                    <div class="kt-portlet__head-label">
                                                        <h3>DATOS DEL SISTEMA</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label>Usuario:</label>
                                                    <input class="form-control" type="text" require placeholder="Ingrese su usuario" required="" name="usuario" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label>Contraseña:</label>
                                                    <input class="form-control" type="password" require placeholder="Ingrese su dni" id="pass_1" required="" name="password" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group">
                                                    <label>Confirma contraseña:</label>
                                                    <input class="form-control" type="password" require id="pass_2" placeholder="Confime su contraseña" required="" name="password2" autocomplete="off">
                                                </div>
                                            </div>
                                            <!--begin::Action-->
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary btn-lg" >REGISTRAR</button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <!--end::Action-->
                            </form>
                        </div>
                    </div>
                </div>
                <!--end::Portlet-->
            </div>
        </div>
    </div>
    </div>

    </div>

    <!--end::Item-->
    <!--begin::Item-->
    <!--end::Item-->
    <!--begin::Item-->
    <div class="kt-grid__item">
        <div class="kt-login-v2__footer">
            <div class="kt-login-v2__link">
                <a href="#" class="kt-link kt-font-brand">----</a>
                <a href="#" class="kt-link kt-font-brand">----</a>
                <a href="#" class="kt-link kt-font-brand">----</a>
                <a href="#" class="kt-link kt-font-brand">----</a>
                <a href="#" class="kt-link kt-font-brand">----</a>
                <a href="#" class="kt-link kt-font-brand">----</a>
            </div>

            <div class="kt-login-v2__info">
                <a href="#" class="kt-link">&copy; ñol</a>
            </div>
        </div>
    </div>
    <!--end::Item-->
    </div>
    </div>
    <!-- end:: Page -->
    <!-- begin::Global Config(global config for global JS sciprts) -->
    <script>
        var KTAppOptions = {
            "colors": {
                "state": {
                    "brand": "#5578eb",
                    "metal": "#c4c5d6",
                    "light": "#ffffff",
                    "accent": "#00c5dc",
                    "primary": "#5867dd",
                    "success": "#34bfa3",
                    "info": "#36a3f7",
                    "warning": "#ffb822",
                    "danger": "#fd3995",
                    "focus": "#9816f4"
                },
                "base": {
                    "label": [
                        "#c5cbe3",
                        "#a1a8c3",
                        "#3d4465",
                        "#3e4466"
                    ],
                    "shape": [
                        "#f0f3ff",
                        "#d9dffa",
                        "#afb4d4",
                        "#646c9a"
                    ]
                }
            }
        };
    </script>
    <!-- end::Global Config -->
    <!--begin::Global Theme Bundle(used by all pages) -->
    <script src="<?php echo base_url(); ?>assets/template/dist/assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/template/dist/assets/js/scripts.bundle.js" type="text/javascript"></script>
    <!--end::Global Theme Bundle -->
    <!--begin::Page Scripts(used by this page) -->
    <script src="<?php echo base_url(); ?>assets/template/dist/assets/js/pages/custom/user/login.js" type="text/javascript"></script>
    <!--end::Page Scripts -->
</body>
<!-- end::Body -->
<!-- Mirrored from keenthemes.com/keen/preview/demo2/custom/login/login-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Mar 2020 09:42:15 GMT -->
<script type="text/javascript">
        function comprobarClave() {
        clave1 = document.getElementById('pass_1').value;
        clave2 = document.getElementById('pass_2').value;
        if (clave1 == clave2) {
            alert("Creando cuenta.....")
            return true;
        } else {
            alert("Las contraseñas no son iguales...")
            return false;
        }
    }
</script>
</html>