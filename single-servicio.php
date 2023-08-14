<?php
/*
    Template name: single
*/

get_header();

$ID = intval(get_the_ID());

?>

<?php //the_title() ?>

<?php
// Obtén la ID de la entrada actual
$post_id = get_the_ID();

// Obtiene las categorías asociadas a la entrada
$categories = get_the_terms($post_id, 'serviciosgenero'); // Cambia 'category' al nombre de la taxonomía que estás utilizando
if (!empty($categories)):
    $first_category = reset($categories);
    // echo var_dump($first_category->name);
    if ($first_category->name == 'Capacitaciones'): ?>
        <div class="screen-top relative">
            <img src="<?php echo get_field("fondo_hero_servicio_capacitaciones")["url"] ?>"
                alt="<?php echo get_field("fondo_hero_servicio_capacitaciones")["alt"] ?>"
                width="<?php echo get_field("fondo_hero_servicio_capacitaciones")["width"] ?>"
                height="<?php echo get_field("fondo_hero_servicio_capacitaciones")["height"] ?>"
                class="w-full h-full object-cover absolute left-0 top-0 z-[1]" />
            <div class="container">
                <div class="max-w-[85%] w-full min-h-[264px] py-12 flex items-center justify-start">
                    <h1 class="section-title section-title--xl section-title--white z-[2] relative text-white-150">
                        <?php the_title(); ?>
                    </h1>
                </div>
            </div>
        </div>
        <div class="pb-[48px] pt-[63px]">
            <div class="container">
                <div class="grid grid-cols-[1044px_1fr] gap-[27px] overflow-hidden">
                    <div class="h-[505px] relative rounded-[10px] overflow-hidden">
                        <img src="
                    <?php echo get_field("imagen_principal_servicio_capacitaciones")["imagen"]["url"] ?>" alt="
                    <?php echo get_field("imagen_principal_servicio_capacitaciones")["imagen"]["alt"] ?>" width="
                    <?php echo get_field("imagen_principal_servicio_capacitaciones")["imagen"]["width"] ?>" height="
                    <?php echo get_field("imagen_principal_servicio_capacitaciones")["imagen"]["height"] ?>" class="absolute left-0 top-0
                    w-full h-full object-cover" />
                        <!-- <h2 class=""></h2> -->
                    </div>
                    <div class="bg-gray-50 py-4 px-5 rounded-[10px]">
                        <div class="overflow-hidden">
                            <div class="splide custom-splide custom-splide--vertical vertical-slider custom-splide--first-hidden"
                                id="splide_services">
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
                                    <?php if (have_posts()): ?>
                                        <ul class="splide__list">
                                            <?php while (have_posts()):
                                                the_post(); ?>
                                                <li class="splide__slide">
                                                    <article class="grid grid-cols-[128px_1fr] gap-4 py-9 border-b border-[#707070]">
                                                        <?php
                                                        $thumbID = get_post_thumbnail_id($post->ID);
                                                        $imgDestacada = wp_get_attachment_image_src($thumbID, 'thumbnail');
                                                        echo '<img class="h-[128px] w-[128px] rounded-[10px] border border-[#707070]" src="' . $imgDestacada[0] . '" alt="' . get_the_title() . '" title="' . get_the_title() . '">';
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
        <?php if (get_field("descripcion_servicio_capacitaciones", $post_id)): ?>
            <div class="">
                <div class="container">
                    <div class="bg-gray-50 rounded-[10px] px-6 py-10 content-editor-services">
                        <?php echo get_field("descripcion_servicio_capacitaciones", $post_id) ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="page-section page-section--sm">
            <div class="container">
                <div class="content-editor-services">
                    <?php
                    // Obtén los valores del repetidor "item_de_resumen_servicio_capacitaciones"
                    $items_de_resumen = get_field('item_de_resumen_servicio_capacitaciones', $post_id);

                    if ($items_de_resumen) {
                        foreach ($items_de_resumen as $item) {
                            $titulo = $item['titulo'];
                            $contenido = $item['contenido'];
                            $item_de_resumen = $item['item_de_resumen'];

                            // Mostrar detalles y resumen
                            ?>
                            <details class="mb-2">
                                <summary class="bg-gray-50 px-6 py-6 rounded-[10px]">
                                    <h2>
                                        <?php echo $titulo; ?>
                                    </h2>
                                </summary>
                                <?php if ($contenido): ?>
                                    <div class="px-6">
                                        <?php echo $contenido; ?>
                                    </div>
                                <?php endif; ?>
                                <?php
                                $items_de_resumen2 = $item_de_resumen;
                                if ($items_de_resumen2) { ?>
                                    <div class="pl-6">
                                        <?php
                                        foreach ($items_de_resumen2 as $item2) {
                                            $titulo2 = $item2['titulo'];
                                            $contenido2 = $item2['contenido'];
                                            ?>
                                            <details class="mb-2">
                                                <summary class="bg-gray-50 px-6 py-5 rounded-[10px]">
                                                    <h3>
                                                        <?php echo $titulo2; ?>
                                                    </h3>
                                                </summary>
                                                <div class="px-6">
                                                    <?php echo $contenido2; ?>
                                                </div>
                                            </details>
                                            <?php
                                        } ?>
                                    </div>
                                <?php }
                                ?>
                            </details>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
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
                        <input type="text" placeholder="Nombres y Apellidos"
                            class="bg-white-150 text-18 text-celeste-100 px-[22px] py-[14px] rounded-[10px] placeholder:text-celeste-100">
                        <input type="text" placeholder="DNI"
                            class="bg-white-150 text-18 text-celeste-100 px-[22px] py-[14px] rounded-[10px] placeholder:text-celeste-100">
                        <input type="text" placeholder="¿Cuenta con experiencia laboral?"
                            class="bg-white-150 text-18 text-celeste-100 px-[22px] py-[14px] rounded-[10px] placeholder:text-celeste-100">
                        <input type="text" placeholder="Sector en la que labora actualmente"
                            class="bg-white-150 text-18 text-celeste-100 px-[22px] py-[14px] rounded-[10px] placeholder:text-celeste-100">
                        <input type="text" placeholder="Correo electrónico"
                            class="bg-white-150 text-18 text-celeste-100 px-[22px] py-[14px] rounded-[10px] placeholder:text-celeste-100">
                        <input type="text" placeholder="Número de teléfono"
                            class="bg-white-150 text-18 text-celeste-100 px-[22px] py-[14px] rounded-[10px] placeholder:text-celeste-100">
                        <input type="text" placeholder="¿Se encuentra muy interesado en llevar el curso?"
                            class="bg-white-150 text-18 text-celeste-100 px-[22px] py-[14px] rounded-[10px] placeholder:text-celeste-100">
                        <div class="flex justify-center mt-4">
                            <button type="submit" class="button">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php elseif ($first_category->name == 'Asesorías'): ?>
        <div class="screen-top relative">
            <img src="<?php echo get_field("fondo_servicio_asesorias")["url"] ?>"
                alt="<?php echo get_field("fondo_servicio_asesorias")["alt"] ?>"
                width="<?php echo get_field("fondo_servicio_asesorias")["width"] ?>"
                height="<?php echo get_field("fondo_servicio_asesorias")["height"] ?>"
                class="w-full h-full object-cover absolute left-0 top-0 z-[1]" />
            <div class="container">
                <div class="max-w-[85%] w-full min-h-[264px] py-12 flex items-center justify-start">
                    <h1 class="section-title section-title--xl section-title--white z-[2] relative text-white-150">
                        <?php the_title(); ?>
                    </h1>
                </div>
            </div>
        </div>
        <div class="pb-[48px] pt-[63px]">
            <div class="container">
                <div class="grid grid-cols-[1044px_1fr] gap-[27px] overflow-hidden">
                    <div class="h-[505px] relative rounded-[10px] overflow-hidden">
                        <img src="
<?php echo get_field("imagen_servicio_asesorias")["url"] ?>" alt="
<?php echo get_field("imagen_servicio_asesorias")["alt"] ?>" width="
<?php echo get_field("imagen_servicio_asesorias")["width"] ?>" height="
<?php echo get_field("imagen_servicio_asesorias")["height"] ?>" class="absolute left-0 top-0
w-full h-full object-cover" />
                        <!-- <h2 class=""></h2> -->
                    </div>
                    <div class="bg-gray-50 py-4 px-5 rounded-[10px]">
                        <div class="overflow-hidden">
                            <div class="splide custom-splide custom-splide--vertical vertical-slider custom-splide--first-hidden"
                                id="splide_services">
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
                                    <?php if (have_posts()): ?>
                                        <ul class="splide__list">
                                            <?php while (have_posts()):
                                                the_post(); ?>
                                                <li class="splide__slide">
                                                    <article class="grid grid-cols-[128px_1fr] gap-4 py-9 border-b border-[#707070]">
                                                        <?php
                                                        $thumbID = get_post_thumbnail_id($post->ID);
                                                        $imgDestacada = wp_get_attachment_image_src($thumbID, 'thumbnail');
                                                        echo '<img class="h-[128px] w-[128px] rounded-[10px] border border-[#707070]" src="' . $imgDestacada[0] . '" alt="' . get_the_title() . '" title="' . get_the_title() . '">';
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
        <section class="mb-10">
            <div class="container">
                <div class="bg-gray-50 mb-10 rounded-[10px]">
                    <h1 class="text-30 font-gordita-bold text-center pt-8 pb-6 text-blue">
                        <?php echo get_field("titulo_sectores_servicio_asesoria", $post_id) ?>
                    </h1>
                </div>
                <ul class="flex flex-wrap justify-center gap-y-8">
                    <?php
                    // Obtén el ID de la entrada actual
            
                    // Obtén los valores del campo repetidor "imagenes_sectores_servicio_asesorias"
                    $repetidor_values = get_field("imagenes_sectores_servicio_asesorias", $post_id);

                    if ($repetidor_values) {
                        foreach ($repetidor_values as $repetidor_value) {
                            $imagen = $repetidor_value["imagen"];
                            $titulo = $repetidor_value["titulo"];

                            // Renderizar un elemento <li> para cada conjunto de valores
                            echo '<li class="w-[270px]">';
                            echo '<img class="rounded-[10px] mx-auto mb-2" src="' . $imagen['url'] . '" alt="' . $imagen['alt'] . '" width="' . $imagen['width'] . '" height="' . $imagen['height'] . '" />';
                            echo "<p class='text-25 font-gordita-bold text-blue text-center'>$titulo</p>";
                            echo '</li>';
                        }
                    }
                    ?>

                </ul>
            </div>
        </section>
        <?php if (get_field("descripcion_servicio_asesorias", $post_id)): ?>
            <div class="">
                <div class="container">
                    <div class="bg-gray-50 rounded-[10px] px-6 py-10 content-editor-services">
                        <?php echo get_field("descripcion_servicio_asesorias", $post_id) ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="page-section page-section--sm">
            <div class="container">
                <div class="content-editor-services">
                    <?php
                    // Obtén los valores del repetidor "item_de_resumen_servicio_capacitaciones"
                    $items_de_resumen = get_field('item_de_resumen', $post_id);

                    if ($items_de_resumen) {
                        foreach ($items_de_resumen as $item) {
                            $titulo = $item['titulo'];
                            $contenido = $item['contenido'];
                            $item_de_resumen = $item['item_de_resumen'];

                            // Mostrar detalles y resumen
                            ?>
                            <details class="mb-2">
                                <summary class="bg-gray-50 px-6 py-6 rounded-[10px]">
                                    <h2>
                                        <?php echo $titulo; ?>
                                    </h2>
                                </summary>
                                <?php if ($contenido): ?>
                                    <div class="px-6">
                                        <?php echo $contenido; ?>
                                    </div>
                                <?php endif; ?>
                                <?php
                                $items_de_resumen2 = $item_de_resumen;
                                if ($items_de_resumen2) { ?>
                                    <div class="pl-6">
                                        <?php
                                        foreach ($items_de_resumen2 as $item2) {
                                            $titulo2 = $item2['titulo'];
                                            $contenido2 = $item2['contenido'];
                                            ?>
                                            <details class="mb-2">
                                                <summary class="bg-gray-50 px-6 py-5 rounded-[10px]">
                                                    <h3>
                                                        <?php echo $titulo2; ?>
                                                    </h3>
                                                </summary>
                                                <div class="px-6">
                                                    <?php echo $contenido2; ?>
                                                </div>
                                            </details>
                                            <?php
                                        } ?>
                                    </div>
                                <?php }
                                ?>
                            </details>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
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
                        <input type="text" placeholder="Nombres y Apellidos"
                            class="bg-white-150 text-18 text-celeste-100 px-[22px] py-[14px] rounded-[10px] placeholder:text-celeste-100">
                        <input type="text" placeholder="DNI"
                            class="bg-white-150 text-18 text-celeste-100 px-[22px] py-[14px] rounded-[10px] placeholder:text-celeste-100">
                        <input type="text" placeholder="¿Cuenta con experiencia laboral?"
                            class="bg-white-150 text-18 text-celeste-100 px-[22px] py-[14px] rounded-[10px] placeholder:text-celeste-100">
                        <input type="text" placeholder="Sector en la que labora actualmente"
                            class="bg-white-150 text-18 text-celeste-100 px-[22px] py-[14px] rounded-[10px] placeholder:text-celeste-100">
                        <input type="text" placeholder="Correo electrónico"
                            class="bg-white-150 text-18 text-celeste-100 px-[22px] py-[14px] rounded-[10px] placeholder:text-celeste-100">
                        <input type="text" placeholder="Número de teléfono"
                            class="bg-white-150 text-18 text-celeste-100 px-[22px] py-[14px] rounded-[10px] placeholder:text-celeste-100">
                        <input type="text" placeholder="¿Se encuentra muy interesado en llevar el curso?"
                            class="bg-white-150 text-18 text-celeste-100 px-[22px] py-[14px] rounded-[10px] placeholder:text-celeste-100">
                        <div class="flex justify-center mt-4">
                            <button type="submit" class="button">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php elseif ($first_category->name == 'Entrenamientos'): ?>
        <div class="screen-top relative">
            <img src="<?php echo get_field("fondo_hero_servicio_herramientas")["url"] ?>" alt="
    <?php echo get_field("fondo_hero_servicio_herramientas")["alt"] ?>" width="
    <?php echo get_field("fondo_hero_servicio_herramientas")["width"] ?>" height="
    <?php echo get_field("fondo_hero_servicio_herramientas")["height"] ?>"
                class="w-full h-full object-cover absolute left-0 top-0 z-[1]" />
            <div class="container">
                <div class="max-w-[85%] w-full min-h-[264px] py-12 flex items-center justify-start">
                    <h1 class="section-title section-title--xl section-title--white z-[2] relative text-white-150">
                        <?php the_title(); ?>
                    </h1>
                </div>
            </div>
        </div>
        <div class="pb-[48px] pt-[63px]">
            <div class="container">
                <div class="grid grid-cols-[1044px_1fr] gap-[27px] overflow-hidden">
                    <div class="h-[505px] relative rounded-[10px] overflow-hidden">
                        <img src="
<?php echo get_field("imagen_principal_servicio_herramientas")["url"] ?>"
                            alt=" <?php echo get_field("imagen_principal_servicio_herramientas")["alt"] ?>" width="
<?php echo get_field("imagen_principal_servicio_herramientas")["width"] ?>"
                            height=" <?php echo get_field("imagen_principal_servicio_herramientas")["height"] ?>" class="absolute left-0 top-0
w-full h-full object-cover" />
                        <!-- <h2 class=""></h2> -->
                    </div>
                    <div class="bg-gray-50 py-4 px-5 rounded-[10px]">
                        <div class="overflow-hidden">
                            <div class="splide custom-splide custom-splide--vertical vertical-slider custom-splide--first-hidden"
                                id="splide_services">
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
                                    <?php if (have_posts()): ?>
                                        <ul class="splide__list">
                                            <?php while (have_posts()):
                                                the_post(); ?>
                                                <li class="splide__slide">
                                                    <article class="grid grid-cols-[128px_1fr] gap-4 py-9 border-b border-[#707070]">
                                                        <?php
                                                        $thumbID = get_post_thumbnail_id($post->ID);
                                                        $imgDestacada = wp_get_attachment_image_src($thumbID, 'thumbnail');
                                                        echo '<img class="h-[128px] w-[128px] rounded-[10px] border border-[#707070]" src="' . $imgDestacada[0] . '" alt="' . get_the_title() . '" title="' . get_the_title() . '">';
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
        <?php if (get_field("descripcion_servicio_herramientas", $post_id)): ?>
            <div class="">
                <div class="container">
                    <div class="bg-gray-50 rounded-[10px] px-6 py-10 content-editor-services">
                        <?php echo get_field("descripcion_servicio_herramientas", $post_id) ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="page-section page-section--sm">
            <div class="container">
                <div class="content-editor-services">
                    <?php
                    // Obtén los valores del repetidor "item_de_resumen_servicio_capacitaciones"
                    $items_de_resumen = get_field('item_de_resumen_servicio_entrenamiento', $post_id);

                    if ($items_de_resumen) {
                        foreach ($items_de_resumen as $item) {
                            $titulo = $item['titulo'];
                            $contenido = $item['contenido'];
                            $item_de_resumen = $item['item_de_resumen'];

                            // Mostrar detalles y resumen
                            ?>
                            <details class="mb-2">
                                <summary class="bg-gray-50 px-6 py-6 rounded-[10px]">
                                    <h2>
                                        <?php echo $titulo; ?>
                                    </h2>
                                </summary>
                                <?php if ($contenido): ?>
                                    <div class="px-6">
                                        <?php echo $contenido; ?>
                                    </div>
                                <?php endif; ?>
                                <?php
                                $items_de_resumen2 = $item_de_resumen;
                                if ($items_de_resumen2) { ?>
                                    <div class="pl-6">
                                        <?php
                                        foreach ($items_de_resumen2 as $item2) {
                                            $titulo2 = $item2['titulo'];
                                            $contenido2 = $item2['contenido'];
                                            ?>
                                            <details class="mb-2">
                                                <summary class="bg-gray-50 px-6 py-5 rounded-[10px]">
                                                    <h3>
                                                        <?php echo $titulo2; ?>
                                                    </h3>
                                                </summary>
                                                <div class="px-6">
                                                    <?php echo $contenido2; ?>
                                                </div>
                                            </details>
                                            <?php
                                        } ?>
                                    </div>
                                <?php }
                                ?>
                            </details>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    <?php elseif ($first_category->name == 'Herramientas'): ?>
        <div class="screen-top relative">
            <img src="<?php echo get_field("fondo_hero_servicio_herramientass")["url"] ?>" alt="
    <?php echo get_field("fondo_hero_servicio_herramientass")["alt"] ?>" width="
    <?php echo get_field("fondo_hero_servicio_herramientass")["width"] ?>" height="
    <?php echo get_field("fondo_hero_servicio_herramientass")["height"] ?>"
                class="w-full h-full object-cover absolute left-0 top-0 z-[1]" />
            <div class="container">
                <div class="max-w-[85%] w-full min-h-[264px] py-12 flex items-center justify-start">
                    <h1 class="section-title section-title--xl section-title--white z-[2] relative text-white-150">
                        <?php the_title(); ?>
                    </h1>
                </div>
            </div>
        </div>
        <div class="pt-[63px]">
            <div class="container">
                <div class="grid grid-cols-[1044px_1fr] gap-[27px] overflow-hidden">
                    <div class="h-[505px] relative rounded-[10px] overflow-hidden">
                        <img src="
                        <?php echo get_field("imagen_principal_servicio_herramientas")["url"] ?>" alt="
                <?php echo get_field("imagen_principal_servicio_herramientas")["alt"] ?>" width="
                <?php echo get_field("imagen_principal_servicio_herramientas")["width"] ?>" height="
                <?php echo get_field("imagen_principal_servicio_herramientas")["height"] ?>" class="absolute left-0
                top-0
                w-full h-full object-cover" />
                        <!-- <h2 class=""></h2> -->
                    </div>
                    <div class="bg-gray-50 py-4 px-5 rounded-[10px]">
                        <div class="overflow-hidden">
                            <div class="splide custom-splide custom-splide--vertical vertical-slider custom-splide--first-hidden"
                                id="splide_services">
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
                                    <?php if (have_posts()): ?>
                                        <ul class="splide__list">
                                            <?php while (have_posts()):
                                                the_post(); ?>
                                                <li class="splide__slide">
                                                    <article class="grid grid-cols-[128px_1fr] gap-4 py-9 border-b border-[#707070]">
                                                        <?php
                                                        $thumbID = get_post_thumbnail_id($post->ID);
                                                        $imgDestacada = wp_get_attachment_image_src($thumbID, 'thumbnail');
                                                        echo '<img class="h-[128px] w-[128px] rounded-[10px] border border-[#707070]" src="' . $imgDestacada[0] . '" alt="' . get_the_title() . '" title="' . get_the_title() . '">';
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
        <?php if (get_field("descripcion_servicio_herramientass", $post_id)): ?>
            <div class="">
                <div class="container">
                    <div class="bg-gray-50 rounded-[10px] px-6 py-10 content-editor-services">
                        <?php echo get_field("descripcion_servicio_herramientass", $post_id) ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="page-section page-section--sm">
            <div class="container">
                <div class="content-editor-services">
                    <?php
                    // Obtén los valores del repetidor "item_de_resumen_servicio_capacitaciones"
                    $items_de_resumen = get_field('item_de_resumen_servicio_herramientass', $post_id);

                    if ($items_de_resumen) {
                        foreach ($items_de_resumen as $item) {
                            $titulo = $item['titulo'];
                            $contenido = $item['contenido'];
                            $item_de_resumen = $item['item_de_resumen'];

                            // Mostrar detalles y resumen
                            ?>
                            <details class="mb-2">
                                <summary class="bg-gray-50 px-6 py-6 rounded-[10px]">
                                    <h2>
                                        <?php echo $titulo; ?>
                                    </h2>
                                </summary>
                                <?php if ($contenido): ?>
                                    <div class="px-6">
                                        <?php echo $contenido; ?>
                                    </div>
                                <?php endif; ?>
                                <?php
                                $items_de_resumen2 = $item_de_resumen;
                                if ($items_de_resumen2) { ?>
                                    <div class="pl-6">
                                        <?php
                                        foreach ($items_de_resumen2 as $item2) {
                                            $titulo2 = $item2['titulo'];
                                            $contenido2 = $item2['contenido'];
                                            ?>
                                            <details class="mb-2">
                                                <summary class="bg-gray-50 px-6 py-5 rounded-[10px]">
                                                    <h3>
                                                        <?php echo $titulo2; ?>
                                                    </h3>
                                                </summary>
                                                <div class="px-6">
                                                    <?php echo $contenido2; ?>
                                                </div>
                                            </details>
                                            <?php
                                        } ?>
                                    </div>
                                <?php }
                                ?>
                            </details>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="flex justify-center mb-12">
            <!-- <input type="hidden" name="product_id" value="17"> -->
            <button type="submit" class="button button--md" data-modal-target="modalcomprarpl">Comprar Plantilla</button>
            <div class="modal modal--xl" data-modal-id="modalcomprarpl" id="modal-comprar">
                <div class="modal__container">
                    <div class="modal__wrapper">
                        <div class="modal__content">
                            <div class="modal__close modal__close--celeste shadow-custom">x</div>
                            <div class="modal__body px-24 py-14 bg-white shadow-custom rounded-[10px]">
                                <div class="grid grid-cols-2 gap-10">
                                    <div class="bg-[#D9D9D9] p-8 rounded-[10px] shadow-custom">
                                        <div class="bg-gray-200 h-[492px] rounded-[10px] mb-6 shadow-custom">
                                        </div>
                                        <h2 class="text-20 font-gordita-bold text-blue">Nombre de la plantilla</h2>
                                    </div>
                                    <div class="py-10 max-w-[30rem]">
                                        <h2 class="text-blue text-30 font-gordita-bold mb-24">¡Simplifica tu trabajo y maximiza
                                            tu eficiencia con nuestra plantilla excepcional!
                                        </h2>
                                        <div class="max-w-[95%]">
                                            <div class="border-t-blue border-t-2 flex flex-col mb-14 pt-2 max-w-[89%]">
                                                <span class="text-20 font-gordita-bold text-blue">Total</span>
                                                <p class="font-gordita-bold text-celeste-100 text-[56px]">S/ 75.00</p>
                                            </div>
                                            <form method="post" class="flex justify-center w-full">
                                                <input type="hidden" name="product_id" value="17" />
                                                <button type="submit"
                                                    class="button button--celeste2 button--lg block w-full">Comprar
                                                    plantilla</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>

    <?php endif; ?>

<?php else: ?>
    <!-- si no hay categoria -->
<?php endif; ?>

<?php get_footer(); ?>