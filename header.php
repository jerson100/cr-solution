<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b72be65822.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>

    <?php if (is_404()): ?>
        <title>
            <?php esc_attr_e("InVitro | Página de Error"); ?>
        </title>
    <?php else: ?>
        <title>
            <?php the_title(); ?>
        </title>
    <?php endif; ?>

</head>

<body <?php body_class(); ?>>

    <!-- <header> -->



    <!-- <?php get_search_form(); ?> -->

    <!-- <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container_class' => 'top-menus-wrapper', 'menu_class' => 'ul_menu')); ?> -->

    <!-- </header> -->

    <header
        class="bg-white fixed left-0 top-0 w-full py-[.5rem] laptop:py-[1rem] desktop-large:py-[20px] z-10 shadow-sm h-[56px] laptop:h-[80px] desktop:h-[100px] desktop-large:h-[135px] page-header">
        <div class="containerc h-full">
            <div class="flex items-center justify-between h-full">
                <div class="flex items-center h-full">
                    <!-- <div class="h-[95px] bg-blue-600 w-[200px]"></div> -->
                    <a href="<?php echo esc_url(home_url('/')) ?>" class="inline-block w-auto h-full">
                        <img src="<?php echo IMG ?>/Inicio/LOGOC&R.svg" alt="Logo de Web CR Solutions"
                            class="w-auto h-full" />
                    </a>
                    <!-- </a> -->
                </div>
                <div class="h-full">
                    <nav class="header__nav h-full hidden laptop:block">
                        <ul
                            class="flex laptop:gap-8 desktop:gap-11 desktop-middle:gap-14 desktop-large:gap-[93px] [&>li>a]:text-blue header__navigation items-center [&>li]:flex [&>li]:items-center [&>li]:h-full [&>li]:relative h-full [&>li]:justify-center">
                            <li>
                                <a href="<?php echo home_url('/'); ?>" class="section-text header__link">Inicio</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('/quienes-somos'); ?>"
                                    class="section-text header__link">Nosotros</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('/servicios'); ?>"
                                    class="section-text header__link">Servicios</a>
                                <ul class="header_sub-list">
                                    <li><a href="<?php echo home_url('/servicio/capacitacion-practica-en-la-elaboracion-del-sistema-de-gestion-de-sst/'); ?>"
                                            class="header__link">Capacitaciones</a></li>
                                    <li><a href="<?php echo home_url('/servicio/asesoria-implementacion-y-mantenimiento-del-sistema-de-gestion-de-sst-para-mypes/'); ?>"
                                            class="header__link">Asesoría</a>
                                    </li>
                                    <li><a href="<?php echo home_url('/plantillas'); ?>"
                                            class="header__link">Plantillas</a></li>
                                    <li><a href="<?php echo home_url('/servicio/entrenamiento-personalizado-en-trabajos-de-alto-riesgo-con-equipos-in-situ/'); ?>"
                                            class="header__link">Entrenamientos</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo home_url('/blogs'); ?>" class="section-text header__link">Blog</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('/verificacion'); ?>"
                                    class="section-text header__link">Verifica aquí</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('/contacto'); ?>"
                                    class="section-text button button--celeste button--variant-2 button--rounded-xs ">Contacto</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="h-full flex items-center laptop:hidden">
                        <div class="flex flex-col w-[30px] h-[25px] gap-[5px] [&>div]:h-full [&>div]:bg-blue">
                            <div class=""></div>
                            <div class=""></div>
                            <div class=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>