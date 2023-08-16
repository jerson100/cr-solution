<?php
/* Template Name: plantillas */
get_header();
?>

<div class="screen-top relative">
    <img src="<?php echo get_field("fondo_pagina_plantillas")["url"] ?>"
        alt="<?php echo get_field("fondo_pagina_plantillas")["alt"] ?>"
        width="<?php echo get_field("fondo_pagina_plantillas")["width"] ?>"
        height="<?php echo get_field("fondo_pagina_plantillas")["height"] ?>"
        class="w-full h-full object-cover absolute left-0 top-0 z-[1] object-right" />
    <div class="containerc">
        <div
            class="laptop:max-w-[85%] w-full min-h-[160px] py-4 tablet:min-h-[200px] laptop:min-h-[230px] desktop-large:min-h-[264px] laptop:py-12 flex items-center justify-start">
            <h1 class="section-title section-title--white z-[2] relative text-white-150 margin-b-0">
                <?php echo get_field("titulo_pagina_plantillas") ?>
            </h1>
        </div>
    </div>
</div>

<?php
global $wp_query;
$taxonomy = 'plantilla';

$wp_query = new WP_Query(
    array(
        'post_type' => $taxonomy,
        'posts_per_page' => 100,
        'post_status' => 'publish'
    )
);

$terms = get_terms(
    array(
        'taxonomy' => $taxonomy . 'sgenero',
        'hide_empty' => false
    )
);

?>


<section class="page-section">
    <div class="containerc">
        <div class="mb-14">
            <h2 class="section-title text-center max-w-[530px] desktop-middle:max-w-[850px] mx-auto">
                <?php echo get_field("titulo_seccion_plantillas_page") ?>
            </h2>
            <p class="text-25 font-gordita-regular text-center text-text-primary">
                <?php echo get_field("descripcion_seccion_plantillas_page") ?>
            </p>
        </div>
        <?php if (!empty($terms) && !is_wp_error($terms)): ?>
            <div class="flex bg-[#F2F2F2] px-4 tablet-middle:px-20 py-3 mb-14">
                <ul class="flex items-center flex-wrap gap-y-4 justify-center">
                    <a href="<?php echo esc_url(home_url('plantillas')) ?>"
                        class="button button--rounded-md button-size-md">Todos</a>
                    <?php foreach ($terms as $term): ?>
                        <li class="flex items-center justify-center">
                            <a href="<?php echo get_term_link($term); ?>"
                                class="text-celeste-100 text-22 text-center font-gordita-regular py-[8px] px-[25px]"><?php echo $term->name; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <?php if (have_posts()): ?>
            <ul class="grid grid-cols-1 tablet-middle:grid-cols-2 laptop:grid-cols-3 gap-8 laptop:gap-10">
                <?php $f = 0; ?>
                <?php while (have_posts()):
                    the_post(); ?>
                    <li data-category="" class="rounded-lg bg-[#313131] flex flex-col">
                        <div class="h-[220px] desktop-middle:h-[264px] rounded-t-lg"></div>
                        <div
                            class="flex justify-between items-center gap-4 shadow-custom px-4 py-3 desktop-middle:px-8 desktop-middle:py-4 rounded-lg bg-white-150 flex-grow">
                            <h3 class="font-gordita-bold flex-shrink text-22 line-clamp-2">
                                <?php echo get_the_title(); ?>
                            </h3>
                            <div class="flex gap-6 flex-shrink-0">
                                <!-- <button data-title="plantilla_<?php echo $f; ?>" class="flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="34.148" height="46.345" viewBox="0 0 34.148 46.345">
                                        <path id="bookmark_save_storage_basic_icon_192482" d="M50.928,13H19.22A1.22,1.22,0,0,0,18,14.22v43.9a1.215,1.215,0,0,0,2.049.89L35.074,45.148,50.1,59.014a1.22,1.22,0,0,0,.829.329,1.341,1.341,0,0,0,.488-.1,1.22,1.22,0,0,0,.732-1.122V14.22A1.22,1.22,0,0,0,50.928,13Zm-1.22,42.343L35.9,42.6a1.22,1.22,0,0,0-1.659,0L20.439,55.343v-39.9h29.27Z" transform="translate(-18 -13)" fill="#0097b2" />
                                    </svg>
                                </button> -->
                                <button class="flex-shrink-0 .dowmload-button" data-modal-target="plantilla_<?php echo $f; ?>">
                                    <svg class="w-7 laptop:w-8 desktop-middle:w-9 desktop-large:w-[auto]" id="Componente_10_1"
                                        data-name="Componente 10 – 1" xmlns="http://www.w3.org/2000/svg" width="48.291"
                                        height="46.345" viewBox="0 0 48.291 46.345">
                                        <path id="Trazado_9" data-name="Trazado 9"
                                            d="M44.717,59.2a2.03,2.03,0,0,0,2.032-2.032V44.591h4.842V57.474a6.568,6.568,0,0,1-6.571,6.571H9.871A6.568,6.568,0,0,1,3.3,57.474V44.591H8.142V57.171A2.03,2.03,0,0,0,10.174,59.2Zm-26.8-41.5H36.892V34.69h7.263L27.424,51.032,10.693,34.69h7.263V17.7Z"
                                            transform="translate(-3.3 -17.7)" fill="#1f4690" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="modal modal--xl" data-modal-id="plantilla_<?php echo $f; ?>">
                            <div class="modal__container">
                                <div class="modal__wrapper">
                                    <div class="modal__content">
                                        <div class="modal__close modal__close--celeste">x</div>
                                        <div
                                            class="modal__body px-8 py-8 desktop-middle:px-14 desktop-middle:py-14 desktop-large:px-[72px] desktop-large:py-[71px]">
                                            <div
                                                class="grid grid-cols-1 tablet-middle:grid-cols-2 gap-4 tablet-middle:gap-8 desktop-middle:gap-20 desktop-large:gap-[103px]">
                                                <div>
                                                    <h2
                                                        class="font-gordita-bold text-blue text-30 mb-6 desktop-middle:mb-8 desktop-large:mb-10">
                                                        ¿Quieres llevar la
                                                        eficiencia de
                                                        tu trabajo en SST al siguiente nivel?</h2>
                                                    <p
                                                        class="text-20 font-gordita-regular text-text-primary mb-6 desktop-large:mb-8">
                                                        Estamos
                                                        encantados de ofrecerles
                                                        plantillas gratuitas
                                                        descargables, como una
                                                        forma de complementar y facilitar su arduo trabajo diario.</p>
                                                    <p
                                                        class="text-20 font-gordita-regular text-text-primary mb-6 desktop-large:mb-8">
                                                        Sabemos lo
                                                        importante que es para usted realizar una supervisión efectiva y
                                                        eficiente,
                                                        por lo que hemos diseñado estas plantillas con el objetivo de ahorrarte
                                                        tiempo y esfuerzo.</p>
                                                    <p
                                                        class="text-20 font-gordita-regular text-text-primary mb-6 desktop-large:mb-8">
                                                        Sólo debes
                                                        llenar el siguiente
                                                        formulario con tus datos
                                                        personales para poder mantenerte informado en materia de SST, nuevas
                                                        actualizaciones y sobre nuestros cursos que te ayudarán a enriquecer tus
                                                        conocimientos.</p>
                                                    <p
                                                        class="font-gordita-medium text-20 text-text-primary mb-6 desktop-large:mb-8">
                                                        ¡Es un placer
                                                        tenerte
                                                        como parte de
                                                        nuestra comunidad de
                                                        profesionales comprometidos con la seguridad laboral!</p>
                                                    </p>
                                                </div>
                                                <div
                                                    class="shadow-custom bg-[#D9D9D9] p-4 laptop:p-6 desktop-middle:p-8 desktop-large:p-10 rounded-[10px]">
                                                    <div
                                                        class="bg-[#8E8E8E] rounded-[15px] h-[180px] desktop-large:h-[247px] mb-6 shadow-custom">
                                                    </div>
                                                    <h2 class="font-gordita-bold text-20 text-blue mb-6">
                                                        <?php echo get_the_title(); ?>
                                                    </h2>
                                                    <form action=""
                                                        class="grid grid-rows-3 gap-4 modal-plantillas-form plantillas-form">
                                                        <input
                                                            class="px-6 py-3 w-full rounded-[10px] text-celeste-100 text-18 font-gordita-regular bg-white"
                                                            placeholder="Nombres y Apellidos" />
                                                        <input
                                                            class="px-6 py-3 w-full rounded-[10px] text-celeste-100 text-18 font-gordita-regular bg-white"
                                                            placeholder="Correo Electrónico" />
                                                        <input
                                                            class="px-6 py-3 w-full rounded-[10px] text-celeste-100 text-18 font-gordita-regular bg-white"
                                                            placeholder="Número de celular" />
                                                        <div class="flex justify-center mt-4">
                                                            <a href="<?php the_permalink() ?>" type="submit"
                                                                class="button">Descargar Plantilla Gratis</a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php $f++;
                endwhile; ?>
            </ul>
        <?php else: ?>
            <br><br>
            <p class="text-20 font-gordita-regular text-center text-text-primary">No se han encontrado plantillas</p>
        <?php endif; ?>
    </div>
</section>

<?php
get_footer();
?>