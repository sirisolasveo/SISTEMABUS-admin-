<!-- begin:: Aside -->
<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>

<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">
  <!-- begin:: Aside -->
  <div class="kt-aside__brand   kt-grid__item" id="kt_aside_brand">
    <div class="kt-aside__brand-logo">
      <a href="<?php echo base_url(); ?>Dashboard_controller" class="text-white"><h3>TERMINAL<h3></a>
    </div>
    <div class="kt-aside__brand-tools">
      <button class="kt-aside__brand-aside-toggler kt-aside__brand-aside-toggler--left" id="kt_aside_toggler"><span></span></button>
    </div>
  </div>
  <!-- end:: Aside -->
  <!-- begin:: Aside Menu -->
  <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
    <div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">
      <ul class="kt-menu__nav ">
        <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--open kt-menu__item--here" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon fa flaticon-file-2"></i><span class="kt-menu__link-text">REGISTROS</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
          <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
            <ul class="kt-menu__subnav">
              <li class="kt-menu__item " aria-haspopup="true"><a href="<?php echo base_url() ?>matenimiento/destino" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">DESTINOS</span></a></li>
              <li class="kt-menu__item " aria-haspopup="true"><a href="<?php echo base_url() ?>matenimiento/publicaciones" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">PUBLICACIONES</span></a></li>
            </ul>
          </div>
        </li>
        <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--open kt-menu__item--here" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon fa flaticon-edit-1"></i><span class="kt-menu__link-text">VISUALIZAR</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
          <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
            <ul class="kt-menu__subnav">
              <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text">REGISTROS</span></span></li>
              <li class="kt-menu__item " aria-haspopup="true"><a href="<?php echo base_url() ?>matenimiento/reservas" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">ADMINISTRAR RESERVASs</span></a></li>
              <li class="kt-menu__item " aria-haspopup="true"><a href="<?php echo base_url() ?>matenimiento/lista" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">INFORMACION RESERVASs</span></a></li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <!-- end:: Aside Menu -->
</div>
<!-- end:: Aside -->