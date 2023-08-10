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

    <header class="bg-white fixed left-0 top-0 w-full py-[20px] z-10 shadow-sm">
        <div class="container">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <!-- <div class="h-[95px] bg-blue-600 w-[200px]"></div> -->
                    <img src="<?php echo IMG ?>/Inicio/LOGOC&R.svg" alt="Logo de Web CR Solutions"
                        class="w-auto h-[95px]" />
                </div>
                <div>
                    <nav class="header__nav">
                        <ul
                            class="flex gap-[93px] [&>li>a]:text-blue header__navigation [&>li>a]:font-gordita-medium items-center">
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
                </div>
            </div>
        </div>
    </header>