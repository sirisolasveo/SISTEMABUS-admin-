<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="kt-portlet kt-widget kt-widget--fit kt-widget--general-3">
        <div class="kt-portlet__body">
            <div class="kt-widget__top">
                <div class="kt-media kt-media--xl kt-media--circle">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQTXpzxQHiZuJqWbNBHTQ4d0xg_mCZfWvPP4m2e9R0DhpWUFmP7" alt="image">
                </div>
                <div class="kt-widget__wrapper">
                    <div class="kt-widget__label">
                        <a href="#" class="kt-widget__title">
                            <?php if (!empty($usuario)) : ?>
                                <?php if (!empty($daUsuario)) : ?>
                                    <?php foreach ($usuario as $algo) : ?>
                                        <?php foreach ($daUsuario as $usuarios) : ?>                                            
                                            <?php if ($algo->user == $usuarios->user) : ?>
                                                <?php foreach ($datosUser as $datas) : ?>
                                                    <?php if ($usuarios->id == $datas->idUser) : ?>
                                                        <?php echo $datas->nombre . " " . $datas->apellido ?>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        </a>
                        <span class="kt-widget__desc">
                            <?php if (!empty($usuario)) : ?>
                                <?php foreach ($usuario as $usuario) : ?>
                                    <?php echo $usuario->user ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </span>
                    </div>
                    <div class="kt-widget__label">
                        
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="kt-portlet__foot kt-portlet__foot--fit">
            <div class="kt-widget__nav ">
                <ul class="nav nav-tabs nav-tabs-space-xl nav-tabs-line nav-tabs-clear nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand kt-portlet__space-x" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#kt_apps_user_edit_tab_1" role="tab">
                            <i class="flaticon2-calendar-3"></i> Perfil
                        </a>
                    </li>                
                </ul>
            </div>
        </div>
    </div>
    <!--end::Portlet-->
</div>