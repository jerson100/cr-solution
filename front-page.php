<?php
/*
    Template name: inicio
*/

get_header();
?>

<div class="main-banner bg-opacity-25 screen-top h-screen-top bg-cover bg-no-repeat"
    style="background-image:url(<?php echo get_field("fondo_hero")["url"] ?>);">
    <div class="containerc min-h-[inherit]">
        <div class="grid grid-cols-1 laptop:grid-cols-2 py-10 min-h-[inherit]">
            <div class="flex items-center">
                <div class="flex flex-col gap-4 items-start text-white">
                    <h1 class="text-57 uppercase font-gordita-black">
                        <?php echo get_field('titulo_hero') ?>
                    </h1>
                    <div class="bg-[#0097B2] px-4 py-2 rounded-md font-gordita-medium">
                        <p class="text-30 max-w-[424px] desktop-middle:max-w-[470px]">
                            <?php echo get_field('descripcion_hero') ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="absolute right-0 laptop:right-[-8%] z-[1] overflow-hidden">
                    <div id="initial-top-hero">
                        <div
                            class="w-[230] h-[160px] laptop:w-[400px] laptop:h-[250px] desktop-middle:w-[500px] desktop-middle:h-[300px] desktop-large:w-[600px] desktop-large:h-[400px] [&>img]:w-full [&>img]:h-full [&>img]:object-cover [&>img]:absolute [&>img]:left-0 [&>img]:top-0 relative">
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
                            class="uppercase text-white font-gordita-black  text-25 px-3 py-4 desktop:px-6 desktop:py-5 bg-blue inline-flex absolute bottom-[16%]">
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
                <div class="absolute bottom-0 left-0 laptop:left-[-5%] overflow-hidden">
                    <div id="initial-bottom-hero">
                        <div
                            class="w-[230px] h-[160px] laptop:w-[400px] laptop:h-[250px] desktop-middle:w-[500px] desktop-middle:h-[300px] desktop-large:w-[600px] desktop-large:h-[400px] [&>img]:w-full [&>img]:h-full [&>img]:object-cover [&>img]:absolute [&>img]:left-0 [&>img]:top-0 relative">
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
                            class="uppercase text-white font-gordita-black desktop-large:text-[28px] desktop-large:leading-[33px] px-3 py-4 desktop:px-6 desktop:py-5 bg-blue absolute bottom-[16%]">
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

<section class="bg-white page-section overflow-x-hidden wow animate__animated animate__fadeIn" data-wow-duration="1s">
    <div class="containerc">
        <div class="flex justify-between flex-col laptop:flex-row gap-8 laptop:gap-0">
            <div class="flex items-center laptop:w-[40%] wow animate__animated animate__backInLeft" data-wow-duration="1s">
                <div class="flex flex-col items-center text-center laptop:items-start laptop:text-left">
                    <?php if (!empty(get_field("titulo_qs"))) : ?>
                    <h2 class="section-title">
                        <?php echo get_field("titulo_qs") ?>
                    </h2>
                    <?php endif; ?>

                    <?php if (!empty(get_field("descripcion_qs"))) : ?>
                    <p class="section-text mb-8">
                        <?php echo get_field("descripcion_qs") ?>
                    </p>
                    <?php endif; ?>
                    <div>
                        <a href="<?php echo esc_url(home_url('quienes-somos')) ?>" class="button">Ver más</a>
                    </div>
                </div>
            </div>
            <?php if (!empty(get_field("imagen_qs"))) : ?>
            <div class="flex items-center justify-center relative laptop:w-[45%] wow animate__animated animate__backInRight"
                data-wow-duration="1s">
                <div class="bg-celeste-50 absolute left-[-20px] top-[20px] h-full w-full rounded-xl"></div>
                <img src="<?php echo get_field("imagen_qs")["url"] ?>" 
                    alt="<?php echo get_field("imagen_qs")["alt"] ?>" 
                    title="<?php echo get_field("imagen_qs")["title"] ?>" 
                    width="<?php echo get_field("imagen_qs")["width"] ?>" 
                    height="<?php echo get_field("imagen_qs")["height"] ?>" 
                    loading="lazy" class="rounded-xl z-[1]" />
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

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
        <div class="containerc">
            <div class="flex flex-col gap-8">
                <div class="max-w-[700px] max-w-[1088px] w-full mx-auto text-center mb-8">
                    <?php if (!empty(get_field("titulo_ser"))) : ?>
                    <h2 class="section-title"><?php echo get_field('titulo_ser') ?></h2>
                    <?php endif; ?>
                    
                    <?php if (!empty(get_field("descripcion_ser"))) : ?>
                    <div class="flex justify-center">
                        <p class="section-text">
                            <?php echo get_field('descripcion_ser') ?>
                        </p>
                    </div>
                    <?php endif; ?>
                </div>
                <!-- <div
                id="servicios"
                class="grid grid-cols-4 gap-10 [&>div>div>p]:text-[20px] [&>article]:h-[364px] [&>article>img]:h-full [&>article>img]:w-full [&>article>img]:object-cover [&>article>img]:object-top [&>article]:rounded-xl [&>article]:overflow-hidden [&>article]:shadow-custom [&>article>div]:absolute [&>article>div]:bottom-0 [&>article]:relative services"> -->
                <div class="splide custom-splide px-9 desktop-middle:px-0" aria-label="Servicios" id="servicios">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php while (have_posts()):
                                the_post(); ?>
                                <li
                                    class="splide__slide [&>article]:h-[300px] desktop:[&>article]:h-[364px] [&>article>img]:h-full [&>article>img]:w-full [&>article>img]:object-cover [&>article>img]:object-top [&>article]:rounded-xl [&>article]:overflow-hidden [&>article]:shadow-custom [&>article>div]:absolute [&>article>div]:bottom-0 [&>article]:relative">
                                    <article class="flex flex-col services__item">
                                        <?php
                                        $thumbID = get_post_thumbnail_id($post->ID);
                                        $imgDestacada = wp_get_attachment_image_src($thumbID, 'thumbnail');
                                        echo '<img src="' . $imgDestacada[0] . '" alt="' . get_the_title() . '" title="' . get_the_title() . '">';
                                        ?>
                                        <div class="px-6 py-4 h-[105px] relative services__content w-full">
                                            <div
                                                class="from-[#1F4690] to-[#000000] flex-grow opacity-90 absolute h-full w-full left-0 top-0 bg-gradient-to-b services__bg">
                                            </div>
                                            <div class="relative z-[1]">
                                                <div class="flex items-center justify-center">
                                                    <h3
                                                        class="text-white font-gordita-bold text-center line-clamp-3 text-20">
                                                        <?php echo get_the_title(); ?>
                                                    </h3>
                                                </div>
                                                <div class="hidden services__description justify-center">
                                                    <p class="text-white text-center mt-4 line-clamp-6 text-20">
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
<?php wp_reset_postdata(); ?>
<?php wp_reset_query(); ?>

<?php echo get_template_part("inc/plantillas_gratis"); ?>

<?php echo get_template_part("inc/confian_en_nosotros"); ?>

<?php if(have_rows('lista_de_capacitaciones')): ?>
<section class="page-section bg-[#F2F2F2] wow animate__animated animate__fadeIn" data-wow-duration="1s">
    <div class="containerc">
        <div class="grid grid-cols-1 gap-8 laptop:grid-cols-[510px_auto] laptop:gap-16 desktop-large:gap-32">
            <div class="flex items-end">
                <div class="flex flex-col text-center laptop:text-left">
                    <?php if (!empty(get_field("titulo_ca"))) : ?>
                    <h2 class="section-title section-title--celeste"><?php echo get_field('titulo_ca') ?></h2>
                    <?php endif; ?>

                    <?php if (!empty(get_field("descripcion_ca"))) : ?>
                    <p class="section-text">
                        <?php echo get_field('descripcion_ca') ?>
                    </p>
                    <?php endif; ?>
                </div>
            </div>
            <div
                class="overflow-x-hidden [&>div>div>ul>li>article>img]:w-full [&>div>div>ul>li]:rounded-md [&>div>div>ul>li>article>img]:rounded-md [&>div>div>ul>li>article>img]:object-cover [&>div>div>ul>li>article>img]:h-[250px]">
                <div class="splide custom-splide" id="capacitaciones-destacadas">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php while(have_rows('lista_de_capacitaciones')): the_row(); ?>
                            <li class="splide__slide">
                                <article class="shadow-custom flex flex-col h-full m-[.2rem]">
                                    <img 
                                        src="<?php echo get_sub_field('imagen_capa')['url'] ?>" 
                                        title="<?php echo get_sub_field('imagen_capa')['title'] ?>" 
                                        alt="<?php echo get_sub_field('imagen_capa')['alt'] ?>" 
                                        width="<?php echo get_sub_field('imagen_capa')['width'] ?>" 
                                        height="<?php echo get_sub_field('imagen_capa')['height'] ?>" 
                                        loading="lazy"
                                    >
                                    <div class="p-4 bg-white flex-grow">
                                        <h3
                                            class="text-20 mb-4 text-blue font-gordita-bold line-clamp-2">
                                            <?php echo get_sub_field('titulo_capa'); ?>
                                        </h3>
                                        <p class="text-[1.125rem] text-celeste-50 mb-4"><?php echo get_sub_field('descripcion_capa'); ?></p>
                                        <div class="flex justify-center">
                                            <a href="<?php echo get_sub_field('enlace_capa'); ?>" class="button">Ver más</a>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<section class="page-section bg-[#FFFFFF] wow animate__animated animate__fadeIn" data-wow-duration="1s">
    <div class="containerc">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <?php if (!empty(get_field("titulo_bl"))) : ?>
            <h2 class="section-title"><?php echo get_field('titulo_bl') ?></h2>
            <?php endif; ?>

            <?php if (!empty(get_field("descripcion_bl"))) : ?>
            <p class="section-text">
                <?php echo get_field('descripcion_bl') ?>
            </p>
            <?php endif; ?>
        </div>
        <div class="splide custom-splide" id="blog-slider">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php
                    global $wp_query;
                    $wp_query = new WP_Query(
                        array(
                            'post_type' => 'post',
                            'posts_per_page' => 10,
                            'post_status' => 'publish'
                        )
                    );
                    ?>
                    <?php
                    $i = 1;
                    if (have_posts()):
                        while (have_posts()):
                            the_post(); ?>
                            <li class="splide__slide">
                                <article class="shadow-custom m-[.2rem]">
                                    <div class="relative">
                                        <ul class="absolute left-0 top-2">
                                            <span>+</span>
                                            <span>-</span>
                                        </ul>
                                        <div
                                            class="w-full h-[220px] desktop-large:h-[317px] relative [&>img]:object-cover [&>img]:object-center [&>img]:absolute [&>img]:left-0 [&>img]:right-0 [&>img]:w-full [&>img]:h-full">
                                            <?php if (has_post_thumbnail()): ?>
                                                <?php echo get_the_post_thumbnail() ?>
                                            <?php endif; ?>
                                        </div>
                                        <!-- <img src="/cr_solutions/wp-content/themes/theme_invitro/images/Inicio/hombre-vista-posterior-equipo-seguridad.jpg"
                                            alt="" class=" " /> -->
                                    </div>
                                    <div class="p-4">
                                        <h3 class="text-celeste-50 line-clamp-1 card-title">
                                            <?php echo the_title() ?>
                                        </h3>
                                        <p class="line-clamp-2 mb-5 text">
                                            <?php echo wp_trim_words(get_the_excerpt(), 50) ?>
                                        </p>
                                        <div class="bg-[#1F4690] h-[1px] w-full mb-4"></div>
                                        <a href="<?php echo the_permalink() ?>" class="button">Ver más</a>
                                    </div>
                                </article>
                            </li>
                        <?php endwhile; endif; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="modal" data-modal-id="1" id="modal-inicio">
    <div class="modal__container">
        <div class="modal__wrapper">
            <div class="modal__content">
                <div class="modal__close">x</div>
                <div class="modal__body">
                    <img src="<?php echo IMG ?>/Inicio/hombre-vista-posterior-equipo-seguridad.jpg" alt="" title="" />
                </div>
            </div>
        </div>
    </div>
</div>

<?php //get_template_part('inc/section');?>

<?php get_footer(); ?>