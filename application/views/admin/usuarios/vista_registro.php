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

<body class="kt-login-v2--enabled kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--static kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">
    <!-- begin::Page loader -->
    <!-- end::Page Loader -->
    <!-- begin:: Page -->
    <div class="kt-grid kt-grid--ver kt-grid--root">
        <div class="kt-grid__item   kt-grid__item--fluid kt-grid  kt-grid kt-grid--hor kt-login-v2" id="kt_login_v2">
            <!--begin::Item-->
            <div class="kt-grid__item  kt-grid--hor">
                <!--begin::Heade-->
                <div class="kt-login-v2__head">
                    <div class="kt-login-v2__logo">
                        <a href="#">
                            <h3 class="text-white">TERMINAPUERTO MALDONADO</h3>
                        </a>
                    </div>
                </div>
                <!--begin::Head-->
            </div>
            <!--end::Item-->
            <!--begin::Item-->
            <div class="kt-grid__item  kt-grid  kt-grid--ver  kt-grid__item--fluid">
                <!--begin::Body-->
                <div class="kt-login-v2__body">
                    <!--begin::Wrapper-->
                    <div class="kt-login-v2__wrapper">
                        <div class="kt-login-v2__container">
                            <div class="kt-login-v2__title">
                                <h3>Formulario de registro</h3>
                            </div>
                            <!--begin::Form-->
                            <form class="kt-login-v2__form kt-form" method="POST" action="<?php echo base_url(); ?>usuarios/store" autocomplete="off" id="kt_login_form">
                                <div class="form-group">
                                    <label>Nombre Empresa</label>
                                    <input class="form-control" type="text" placeholder="Nombre" name="nombre" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Apellido" name="apellido" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="date" placeholder="dd-mm-aa" name="nacimiento" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="email" name="email" autocomplete="off">
                                </div>
                                <!--begin::Action-->
                                <div class="kt-login-v2__actions">
                                    <button type="submit" class="btn btn-brand btn-elevate btn-pill" id="kt_login_submit">REGISTRARSE</button>
                                </div>
                                <!--end::Action-->
                            </form>
                            <!--end::Form-->
                            <!--begin::Separator-->
                            <div class="kt-separator kt-separator--space-lg  kt-separator--border-solid"></div>
                            <!--end::Separator-->
                            <!--begin::Options-->
                            <!--end::Options-->
                        </div>
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Image-->
                    <div class="kt-login-v2__image">
                        <!--AGREGAR UNA IMAGEN DE FONDO SI HAY TIEMPO
                        <img src="https://www.freepik.es/iconos-gratis/delante-autobus_716854.htm#page=3&query=bus&position=24" alt="">-->
                    </div>
                    <!--begin::Image-->
                </div>
                <!--begin::Body-->
            </div>
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
</html>