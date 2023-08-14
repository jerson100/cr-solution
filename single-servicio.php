<?php
/*
    Template name: single
*/

get_header();

$ID = intval(get_the_ID());

?>

<?php //the_title() 
?>

<?php
// Obtén la ID de la entrada actual
$post_id = get_the_ID();

// Obtiene las categorías asociadas a la entrada
$categories = get_the_terms($post_id, 'serviciosgenero'); // Cambia 'category' al nombre de la taxonomía que estás utilizando

//echo $categories;

?>

<?php if (!empty(get_field("banner"))) : ?>
    <div class="screen-top relative">
        <img src="<?php echo get_field("banner")["url"] ?>" alt="<?php echo get_field("banner")["alt"] ?>" title="<?php echo get_field("banner")["title"] ?>" width="<?php echo get_field("banner")["width"] ?>" height="<?php echo get_field("banner")["height"] ?>" class="w-full h-full object-cover absolute left-0 top-0 z-[1]" />
        <div class="container">
            <div class="max-w-[85%] w-full min-h-[264px] py-12 flex items-center justify-start">
                <h1 class="section-title section-title--xl section-title--white z-[2] relative text-white-150">
                    <?php the_title(); ?>
                </h1>
            </div>
        </div>
    </div>
<?php else : ?>
    <div class="screen-top"></div>
<?php endif; ?>

<div class="pb-[48px] pt-[63px]">
    <div class="container">
        <div class="grid grid-cols-[1044px_1fr] gap-[27px] overflow-hidden">
            <?php if (!empty(get_field("imagen_contenido"))) : ?>
                <div class="h-[505px] relative rounded-[10px] overflow-hidden">
                    <img src="<?php echo get_field("imagen_contenido")["url"] ?>" alt="<?php echo get_field("imagen_contenido")["alt"] ?>" title="<?php echo get_field("imagen_contenido")["title"] ?>" width="<?php echo get_field("imagen_contenido")["width"] ?>" height="<?php echo get_field("imagen_contenido")["height"] ?>" class="absolute left-0 top-0 w-full h-full object-cover" />
                    <!-- <h2 class=""></h2> -->
                </div>
            <?php endif; ?>
            <div class="bg-gray-50 py-4 px-5 rounded-[10px]">
                <div class="overflow-hidden">
                    <div class="splide custom-splide custom-splide--vertical vertical-slider custom-splide--first-hidden" id="splide_services">
                        <div class="splide__track">
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
                            <?php if (have_posts()) : ?>
                                <ul class="splide__list">
                                    <?php while (have_posts()) :
                                        the_post(); ?>
                                        <li class="splide__slide">
                                            <article class="grid grid-cols-[128px_1fr] gap-4 py-9 border-b border-[#707070]">
                                                <?php
                                                $thumbID = get_post_thumbnail_id($post->ID);
                                                $imgDestacada = wp_get_attachment_image_src($thumbID, 'thumbnail');
                                                echo '<img class="h-[128px] w-[128px] rounded-[10px] border contain border-[#707070]" src="' . $imgDestacada[0] . '" alt="' . get_the_title() . '" title="' . get_the_title() . '">';
                                                ?>
                                                <div class="flex items-center">
                                                    <a href="<?php the_permalink(); ?>" class="line-clamp-3">
                                                        <h2 class="text-20 font-gordita-bold text-blue">
                                                            <?php echo get_the_title(); ?>
                                                        </h2>
                                                    </a>
                                                </div>
                                            </article>
                                        </li>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                    <?php wp_reset_query(); ?>
                                <?php endif; ?>
                                <!-- Agrega más diapositivas según sea necesario -->
                                </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php if(have_rows('sectores')): ?>
<section class="mb-10">
    <div class="container">
        <div class="bg-gray-50 mb-10 rounded-[10px]">
            <h1 class="text-30 font-gordita-bold text-center pt-8 pb-6 text-blue">
                SECTORES CON LOS QUE TRABAJAMOS:
            </h1>
        </div>
        <ul class="flex flex-wrap justify-center gap-y-8">
            <?php while(have_rows('sectores')): the_row(); ?>
            <li class="w-[270px]">
                <img class="rounded-[10px] mx-auto mb-2" 
                    src="<?php echo get_sub_field('imagen_sec')['url'] ?>" 
                    alt="<?php echo get_sub_field('imagen_sec')['alt'] ?>" 
                    title="<?php echo get_sub_field('imagen_sec')['title'] ?>" 
                    width="<?php echo get_sub_field('imagen_sec')['width'] ?>" 
                    height="<?php echo get_sub_field('imagen_sec')['height'] ?>" 
                    loading="lazy"
                />
                <p class='text-20 font-gordita-bold text-blue text-center'><?php echo get_sub_field('nombre_sec') ?></p>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
</section>
<?php endif; ?>

<?php if (!empty(get_field("descripcion_qya"))) : ?>
    <div class="w-full">
        <div class="container">
            <div class="bg-gray-50 rounded-[10px] px-6 py-10 content-editor-services">
                <?php echo get_field("descripcion_qya"); ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="page-section page-section--sm">
    <div class="container">
        <?php if (have_rows('item')) : ?>
            <div class="content-editor-services">
                <?php while (have_rows('item')) : the_row(); ?>

                    <details class="mb-2">
                        <summary class="bg-gray-50 px-6 py-6 rounded-[10px]">
                            <h2>
                                <?php echo get_sub_field('titulo_qa') ?>
                            </h2>
                        </summary>
                        <?php if (!empty(get_sub_field('contenido_qa'))) : ?>
                            <div class="px-6">
                                <?php echo get_sub_field('contenido_qa') ?>
                            </div>
                        <?php endif; ?>

                        <?php if (have_rows('subitem')) : ?>
                            <div class="pl-6">
                                <?php while (have_rows('subitem')) : the_row(); ?>
                                    <details class="mb-2">
                                        <summary class="bg-gray-50 px-6 py-5 rounded-[10px]">
                                            <h3>
                                                <?php echo get_sub_field('titulo_sqa') ?>
                                            </h3>
                                        </summary>
                                        <?php if (!empty(get_sub_field('contenido_sqa'))) : ?>
                                            <div class="px-6">
                                                <?php echo get_sub_field('contenido_sqa') ?>
                                            </div>
                                        <?php endif; ?>
                                    </details>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </details>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
    <?php if(get_field('opcion_de_comprar_plantilla')): ?>
    <div class="container">
        <form method="post" class="flex justify-center w-full to_buy">
            <input type="hidden" name="product_id" value="17" />
            <button type="submit" class="button button--celeste2 button--lg block w-full">Comprar plantilla</button>
        </form>
    </div>
    <?php endif; ?>
</div>


<?php if(get_field('formulario_contacto')): ?>
<br><br><br><br><br><br>
<section class="container mb-10">
    <div class="bg-[#0097B2] pt-[54px] pb-[161px] px-[78px] rounded-[10px]">
        <div class="grid grid-cols-[778px_1fr] gap-[70px]">
            <div class="flex items-end pb-14">
                <h2 class="text-white-150 text-50 font-gordita-bold">¡Llena el formulario y sé el primero en recibir
                    información
                    oficial sobre la
                    fecha de
                    lanzamiento de nuestro
                    curso!</h2>
            </div>
            <div class="bg-[#D8D8D8] px-[37px] py-[32px] flex flex-col gap-[14px] rounded-[10px] shadow-custom">
                <input type="text" placeholder="Nombres y Apellidos" class="bg-white-150 text-18 text-celeste-100 px-[22px] py-[14px] rounded-[10px] placeholder:text-celeste-100">
                <input type="text" placeholder="DNI" class="bg-white-150 text-18 text-celeste-100 px-[22px] py-[14px] rounded-[10px] placeholder:text-celeste-100">
                <input type="text" placeholder="¿Cuenta con experiencia laboral?" class="bg-white-150 text-18 text-celeste-100 px-[22px] py-[14px] rounded-[10px] placeholder:text-celeste-100">
                <input type="text" placeholder="Sector en la que labora actualmente" class="bg-white-150 text-18 text-celeste-100 px-[22px] py-[14px] rounded-[10px] placeholder:text-celeste-100">
                <input type="text" placeholder="Correo electrónico" class="bg-white-150 text-18 text-celeste-100 px-[22px] py-[14px] rounded-[10px] placeholder:text-celeste-100">
                <input type="text" placeholder="Número de teléfono" class="bg-white-150 text-18 text-celeste-100 px-[22px] py-[14px] rounded-[10px] placeholder:text-celeste-100">
                <input type="text" placeholder="¿Se encuentra muy interesado en llevar el curso?" class="bg-white-150 text-18 text-celeste-100 px-[22px] py-[14px] rounded-[10px] placeholder:text-celeste-100">
                <div class="flex justify-center mt-4">
                    <button type="submit" class="button">Enviar</button>
                </div>
            </div>
        </div>
    </div>
</section>
<?php else: ?>
<br><br><br><br>
<?php endif; ?>


<?php get_footer(); ?>