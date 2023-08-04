<?php
/*
    Template name: inicio
*/

get_header();
?>

<div class="main-banner bg-opacity-25 screen-top h-screen-top">
    <div class="container min-h-[inherit]">
        <div class="grid grid-cols-2 py-10 min-h-[inherit]">
            <div class="flex items-center">
                <div class="flex flex-col gap-4 items-start text-white">
                    <h1 class="text-[57px] leading-[84px] uppercase font-gordita-black">
                        <?php echo get_field('titulo_hero') ?>
                    </h1>
                    <div class="bg-[#0097B2] px-4 py-2 rounded-md font-gordita-medium">
                        <p class="text-[29px] leading-[34px] max-w-[470px]">
                            <?php echo get_field('descripcion_hero') ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="absolute right-[-8%] z-[1] overflow-hidden">
                    <div id="initial-top-hero">
                        <div
                            class="w-[600px] h-[400px] [&>img]:w-full [&>img]:h-full [&>img]:object-cover [&>img]:absolute [&>img]:left-0 [&>img]:top-0 relative">
                            <?php if (have_rows('imagenes_hero')):
                                while (have_rows('imagenes_hero')):
                                    the_row(); ?>
                                    <?php if (get_sub_field('posicion') == 'top'): ?>
                                        <img src="<?php echo get_sub_field('imagen')['url'] ?>"
                                            alt="<?php echo get_sub_field('imagen')['alt'] ?>"
                                            width="<?php echo get_sub_field('imagen')['width'] ?>"
                                            height="<?php echo get_sub_field('imagen')['height'] ?>"
                                            title="<?php echo get_sub_field('imagen')['title'] ?>"
                                            class="object-cover rounded-xl active" />
                                    <?php endif; ?>
                                <?php endwhile; endif; ?>
                        </div>
                        <p
                            class="uppercase text-white font-gordita-black text-[28px] leading-[33px] px-8 py-7 bg-blue inline-flex absolute bottom-[16%]">
                            <?php if (have_rows('imagenes_hero')):
                                while (have_rows('imagenes_hero')):
                                    the_row(); ?>
                                    <span>
                                        <?php if (get_sub_field('posicion') == 'top'): ?>
                                            <?php echo get_sub_field('texto') ?>
                                        <?php endif; ?>
                                    </span>
                                <?php endwhile; endif; ?>
                        </p>
                    </div>
                </div>
                <div class="absolute bottom-0 left-[-5%] overflow-hidden">
                    <div id="initial-bottom-hero">
                        <div
                            class="w-[600px] h-[400px] [&>img]:w-full [&>img]:h-full [&>img]:object-cover [&>img]:absolute [&>img]:left-0 [&>img]:top-0 relative">
                            <?php if (have_rows('imagenes_hero')):
                                while (have_rows('imagenes_hero')):
                                    the_row(); ?>
                                    <?php if (get_sub_field('posicion') == 'bottom'): ?>
                                        <img src="<?php echo get_sub_field('imagen')['url'] ?>"
                                            alt="<?php echo get_sub_field('imagen')['alt'] ?>"
                                            width="<?php echo get_sub_field('imagen')['width'] ?>"
                                            height="<?php echo get_sub_field('imagen')['height'] ?>"
                                            title="<?php echo get_sub_field('imagen')['title'] ?>"
                                            class="object-cover rounded-xl active" />
                                    <?php endif; ?>
                                <?php endwhile; endif; ?>
                        </div>
                        <p
                            class="uppercase text-white font-gordita-black text-[28px] leading-[33px] px-8 py-7 bg-blue absolute bottom-[16%]">
                            <?php if (have_rows('imagenes_hero')):
                                while (have_rows('imagenes_hero')):
                                    the_row(); ?>
                                    <?php if (get_sub_field('posicion') == 'bottom'): ?>
                                        <span>
                                            <?php echo get_sub_field('texto') ?>
                                        </span>
                                    <?php endif; ?>
                                <?php endwhile; endif; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo get_template_part('inc/quienes-somos') ?>

<?php
global $wp_query;
$wp_query = new WP_Query(
    array(
        'post_type' => 'servicio',
        'posts_per_page' => 100,
        'post_status' => 'publish'
    )
);
?>

<?php if (have_posts()): ?>
    <section class="page-section bg-[#F2F2F2] wow animate__animated animate__fadeIn" data-wow-duration="1s">
        <div class="container">
            <div class="flex flex-col gap-8">
                <div class="max-w-[1088px] w-full mx-auto text-center mb-8">
                    <h2 class="section-title">Servicios</h2>
                    <div class="flex justify-center">
                        <p class="section-text">
                            Prioriza la seguridad laboral de tu equipo y descubre nuestras
                            soluciones especializadas para un entorno laboral más seguro y
                            eficiente. ¡No dejes que los riesgos te detengan!
                        </p>
                    </div>
                </div>
                <!-- <div
                id="servicios"
                class="grid grid-cols-4 gap-10 [&>div>div>p]:text-[20px] [&>article]:h-[364px] [&>article>img]:h-full [&>article>img]:w-full [&>article>img]:object-cover [&>article>img]:object-top [&>article]:rounded-xl [&>article]:overflow-hidden [&>article]:shadow-custom [&>article>div]:absolute [&>article>div]:bottom-0 [&>article]:relative services"> -->
                <div class="splide" aria-label="Servicios" id="servicios">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php while (have_posts()):
                                the_post(); ?>
                                <li
                                    class="splide__slide [&>div>div>p]:text-[20px] [&>article]:h-[364px] [&>article>img]:h-full [&>article>img]:w-full [&>article>img]:object-cover [&>article>img]:object-top [&>article]:rounded-xl [&>article]:overflow-hidden [&>article]:shadow-custom [&>article>div]:absolute [&>article>div]:bottom-0 [&>article]:relative">
                                    <article class="flex flex-col services__item">
                                        <?php
                                        $thumbID = get_post_thumbnail_id($post->ID);
                                        $imgDestacada = wp_get_attachment_image_src($thumbID, 'thumbnail');
                                        echo '<img src="' . $imgDestacada[0] . '" alt="' . get_the_title() . '" title="' . get_the_title() . '">';
                                        ?>
                                        <div class="px-6 py-4 h-[105px] relative services__content">
                                            <div
                                                class="from-[#1F4690] to-[#000000] flex-grow opacity-90 absolute h-full w-full left-0 top-0 bg-gradient-to-b services__bg">
                                            </div>
                                            <div class="relative z-[1]">
                                                <div class="flex items-center justify-center">
                                                    <h3 class="text-white font-gordita-bold text text-center line-clamp-3">
                                                        <?php echo get_the_title(); ?>
                                                    </h3>
                                                </div>
                                                <div class="hidden services__description justify-center">
                                                    <p class="text-white text-center mt-4 line-clamp-6">
                                                        <?php the_excerpt(); ?>
                                                    </p>
                                                    <div class="flex justify-center">
                                                        <a href="<?php the_permalink(); ?>" class="button">Ver más</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </section>
<?php endif; ?>
<?php echo get_template_part("inc/plantillas_gratis"); ?>
<?php echo get_template_part("inc/confian_en_nosotros"); ?>
<section class="page-section bg-[#F2F2F2] wow animate__animated animate__fadeIn" data-wow-duration="1s">
    <div class="container">
        <div class="grid grid-cols-[510px_auto] gap-32">
            <div class="flex items-end">
                <div class="flex flex-col">
                    <h2 class="section-title section-title--celeste">Capacitaciones destacadas</h2>
                    <p class="section-text">
                        ¡Desafía tus límites y obtén la certificación en trabajos de
                        alto riesgo para garantizar tu seguridad laboral! Explora
                        nuestros cursos y prepárate para afrontar los riesgos y desafíos
                        con confianza y conocimiento.
                    </p>
                </div>
            </div>
            <div
                class="overflow-x-hidden [&>div>div>ul>li>article>img]:w-full [&>div>div>ul>li]:rounded-md [&>div>div>ul>li>article>img]:rounded-md [&>div>div>ul>li>article>img]:object-cover [&>div>div>ul>li>article>img]:h-[250px]">
                <div class="splide" id="capacitaciones-destacadas">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <article class="shadow-custom flex flex-col h-full m-[.2rem]">
                                    <img src="<?php echo IMG ?>/Inicio/TRABAJOS EN CALIENTE Y PROTECCIÓN CONTRA INCENDIOS.jpg"
                                        alt="TRABAJOS EN CALIENTE Y PROTECCIÓN CONTRA INCENDIOS"
                                        title="TRABAJOS EN CALIENTE Y PROTECCIÓN CONTRA INCENDIOS" />
                                    <div class="p-4 bg-white flex-grow">
                                        <h3
                                            class="text-[1.25rem] leading-[1.563rem] mb-4 text-blue font-gordita-bold line-clamp-2">
                                            Trabajos en caliente y protección contra incendios
                                        </h3>
                                        <p class="text-[1.125rem] text-celeste-50 mb-4">Virtual 14 de junio</p>
                                        <div class="flex justify-center">
                                            <a href="#" class="button">Ver más</a>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="splide__slide">
                                <article class="shadow-custom flex flex-col h-full m-[.2rem]">
                                    <img src="<?php echo IMG ?>/Inicio/cheerful-industrial-climber-during-winterization-w-2021-09-02-04-29-12-utc.jpg"
                                        alt="cheerful-industrial-climber-during-winterization-w-2021-09-02-04-29-12-utc"
                                        title="cheerful-industrial-climber-during-winterization-w-2021-09-02-04-29-12-utc" />
                                    <div class="p-4 bg-white flex-grow">
                                        <h3
                                            class="text-[1.25rem] leading-[1.563rem] mb-4 text-blue font-gordita-bold line-clamp-2">
                                            Trabajos en altura y protección contra caídas
                                        </h3>
                                        <p class="text-[1.125rem] text-celeste-50 mb-4">Virtual 14 de junio</p>
                                        <div class="flex justify-center">
                                            <a href="#" class="button">Ver más</a>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="splide__slide">
                                <article class="shadow-custom flex flex-col h-full m-[.2rem]">
                                    <img src="<?php echo IMG ?>/Inicio/linkedin-In-Stream_Wide___RAY_2866-2.jpg"
                                        alt="linkedin-In-Stream_Wide___RAY_2866-2"
                                        title="linkedin-In-Stream_Wide___RAY_2866-2" />
                                    <div class="p-4 bg-white flex-grow">
                                        <h3
                                            class="text-[1.25rem] leading-[1.563rem] mb-4 text-blue font-gordita-bold line-clamp-2">
                                            Trabajos en espacios confinados
                                        </h3>
                                        <p class="text-[1.125rem] text-celeste-50 mb-4">Virtual 14 de junio</p>
                                        <div class="flex justify-center">
                                            <a href="#" class="button">Ver más</a>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="splide__slide">
                                <article class="shadow-custom flex flex-col h-full m-[.2rem]">
                                    <img src="<?php echo IMG ?>/Inicio/sirva-tecnico-electrico-que-trabaja-centralita-fusibles.jpg"
                                        alt="Seguridad en trabajos eléctricos"
                                        title="Seguridad en trabajos eléctricos" />
                                    <div class="p-4 bg-white flex-grow">
                                        <h3
                                            class="text-[1.25rem] leading-[1.563rem] mb-4 text-blue font-gordita-bold line-clamp-2">
                                            Seguridad en trabajos eléctricos
                                        </h3>
                                        <p class="text-[1.125rem] text-celeste-50 mb-4">Virtual 14 de junio</p>
                                        <div class="flex justify-center">
                                            <a href="#" class="button">Ver más</a>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="splide__slide">
                                <article class="shadow-custom flex flex-col h-full m-[.2rem]">
                                    <img src="<?php echo IMG ?>/Inicio/bg-single.jpg"
                                        alt="Seguridad en trabajos de izaje de carga"
                                        title="Seguridad en trabajos de izaje de carga" />
                                    <div class="p-4 bg-white flex-grow">
                                        <h3
                                            class="text-[1.25rem] leading-[1.563rem] mb-4 text-blue font-gordita-bold line-clamp-2">
                                            Seguridad en trabajos de izaje de cargas
                                        </h3>
                                        <p class="text-[1.125rem] text-celeste-50 mb-4">Virtual 14 de junio</p>
                                        <div class="flex justify-center">
                                            <a href="#" class="button">Ver más</a>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="splide__slide">
                                <article class="shadow-custom flex flex-col h-full m-[.2rem]">
                                    <img src="<?php echo IMG ?>/Inicio/persona-que-trabaja-edificacion-construccion.jpg"
                                        alt="Trabajos de demolición y excavaciones"
                                        title="Trabajos de demolición y excavaciones" />
                                    <div class="p-4 bg-white flex-grow">
                                        <h3
                                            class="text-[1.25rem] leading-[1.563rem] mb-4 text-blue font-gordita-bold line-clamp-2">
                                            Trabajos de demolición y excavaciones
                                        </h3>
                                        <p class="text-[1.125rem] text-celeste-50 mb-4">Virtual 14 de junio</p>
                                        <div class="flex justify-center">
                                            <a href="#" class="button">Ver más</a>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="splide__slide">
                                <article class="shadow-custom flex flex-col h-full m-[.2rem]">
                                    <img src="<?php echo IMG ?>/Inicio/TRABAJOS CON MATERIALES PELIGROSO.jpg"
                                        alt="Trabajos en espacios confinados" title="Trabajos en espacios confinados" />
                                    <div class="p-4 bg-white flex-grow">
                                        <h3
                                            class="text-[1.25rem] leading-[1.563rem] mb-4 text-blue font-gordita-bold line-clamp-2">
                                            Trabajo con materiales peligrosos
                                        </h3>
                                        <p class="text-[1.125rem] text-celeste-50 mb-4">Virtual 14 de junio</p>
                                        <div class="flex justify-center">
                                            <a href="#" class="button">Ver más</a>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="splide__slide">
                                <article class="shadow-custom flex flex-col h-full m-[.2rem]">
                                    <img src="<?php echo IMG ?>/Inicio/main_qEc.jpg"
                                        alt="Seguridad en bloqueo y etiquetado - LOTO"
                                        title="Seguridad en bloqueo y etiquetado - LOTO" />
                                    <div class="p-4 bg-white flex-grow">
                                        <h3
                                            class="text-[1.25rem] leading-[1.563rem] mb-4 text-blue font-gordita-bold line-clamp-2">
                                            Seguridad en bloqueo y etiquetado - LOTO
                                        </h3>
                                        <p class="text-[1.125rem] text-celeste-50 mb-4">Virtual 14 de junio</p>
                                        <div class="flex justify-center">
                                            <a href="#" class="button">Ver más</a>
                                        </div>
                                    </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section bg-[#FFFFFF] wow animate__animated animate__fadeIn" data-wow-duration="1s">
    <div class="container">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <h2 class="section-title">Blog</h2>
            <p class="section-text">
                El conocimiento es poder, y en nuestro blog encontrarás la llave que
                te abrirá las puertas hacia un futuro laboral más seguro y exitoso.
            </p>
        </div>
        <div class="splide" id="blog-slider">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php
                    $i = 1;
                    while ($i++ <= 5) { ?>
                        <li class="splide__slide">
                            <article class="shadow-custom m-[.2rem]">
                                <div class="relative">
                                    <ul class="absolute left-0 top-2">
                                        <span>+</span>
                                        <span>-</span>
                                    </ul>
                                    <img src="/cr_solutions/wp-content/themes/theme_invitro/images/Inicio/hombre-vista-posterior-equipo-seguridad.jpg"
                                        alt="" class="w-full h-[317px] object-cover object-center" />
                                </div>
                                <div class="p-4">
                                    <h3 class="text-celeste-50 line-clamp-1 card-title">Lorem ipsum
                                        dolor</h3>
                                    <p class="line-clamp-2 mb-5 text">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                        Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis parturient montes, nascetur
                                        ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                                        eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                                        pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                                        In enim jus
                                    </p>
                                    <div class="bg-[#1F4690] h-[1px] w-full mb-4"></div>
                                    <a href="#" class="button">Ver más</a>
                                </div>
                            </article>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<?php //get_template_part('inc/section');?>

<?php get_footer(); ?>