<?php

/* Template Name: servicios */

get_header();

?>

<div class="screen-top relative">
    <img src="<?php echo get_field("fondo_pagina_servicios")["url"] ?>"
        alt="<?php echo get_field("fondo_pagina_servicios")["alt"] ?>"
        width="<?php echo get_field("fondo_pagina_servicios")["width"] ?>"
        height="<?php echo get_field("fondo_pagina_servicios")["height"] ?>"
        class="w-full h-full object-cover absolute left-0 top-0 z-[1] object-right" />
    <div class="containerc">
        <div
            class="laptop:max-w-[85%] w-full min-h-[160px] py-4 tablet:min-h-[200px] laptop:min-h-[230px] desktop-large:min-h-[264px] laptop:py-12 flex items-center justify-start">
            <h1 class="section-title section-title--white z-[2] relative text-white-150 margin-b-0">
                <?php echo get_field("titulo_pagina_servicios") ?>
            </h1>
        </div>
    </div>
</div>

<div class="page-section page-section--sm">
    <div class="containerc">
        <div class="grid laptop:grid-cols-[1fr_500px] desktop-large:grid-cols-[1fr_800px] gap-16">
            <div class="content-editor pt-28">
                <?php echo get_field("descripcion_pagina_servicios") ?>
            </div>
            <div class="flex flex-col gap-20 [&>div>img]:rounded-lg [&>div>img]:max-w-full [&>div>img]:object-cover">
                <!-- <div class="flex flex-col gap-20 [&>div>img]:max-w-[65%] [&>div>img]:object-cover"> -->
                <?php
                $image1 = get_field("image1_pagina_servicios");
                $image2 = get_field("imagen2_pagina_servicios");
                $direction = get_field("direccion_pagina_servicios");
                if ($direction == "rl"):
                    echo "<div class='flex flex-col'>
                                <img src='{$image1["url"]}' width='{$image1["width"]}' height='{$image1["height"]}' alt='{$image1["title"]}' title='{$image1["title"]}' class='self-end relative z-[2] w-[66%] object-cover'>
                                <img src='{$image2["url"]}' width='{$image2["width"]}' height='{$image2["height"]}' alt='{$image2["title"]}' title='{$image2["title"]}' class='self-start -mt-[11%] relative z-[1] w-[66%] object-cover'>
                            </div>";
                elseif ($direction == "lr"):
                    echo "<div class='flex flex-col'>
                                <img src='{$image1["url"]}' width='{$image1["width"]}' height='{$image1["height"]}' alt='{$image1["title"]}' title='{$image1["title"]}' class='self-start relative z-[2] w-[66%] object-cover'>
                                <img src='{$image2["url"]}' width='{$image1["width"]}' height='{$image2["height"]}' alt='{$image2["title"]}' title='{$image2["title"]}' class='self-end -mt-[11%] relative z-[1] w-[66%] object-cover'>
                            </div>";
                endif;
                // endif;
                ?>
            </div>
        </div>
    </div>
</div>



<section class="page-section bg-[#D9D9D9] wow animate__animated animate__fadeIn" data-wow-duration="1s">
    <div class="containerc">
        <div
            class="grid laptop:grid-cols-[200px_1fr] desktop-middle:grid-cols-[300px_1fr] desktop-large:grid-cols-[400px_1fr] gap-10">
            <div class="max-w-[700px] desktop-large:max-w-[1088px] w-full mx-auto text-left mb-8">
                <h2 class="section-title laptop:mt-20 text-center laptop:text-left">
                    <?php echo get_field("titulo_seccion_pagina_servicios") ?>
                </h2>
                <div class="flex justify-center">
                    <div class="section-text flex flex-col gap-8">
                        <?php echo get_field("descripcion_seccion_pagina_servicios") ?>
                    </div>
                </div>
            </div>
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
                <ul class="grid grid-cols-1 tablet:grid-cols-2 tablet-middle:grid-cols-6 gap-8 services_list">
                    <?php while (have_posts()):
                        the_post(); ?>
                        <li
                            class="[&>article]:h-[300px] desktop:[&>article]:h-[364px] [&>article>img]:h-full [&>article>img]:w-full [&>article>img]:object-cover [&>article>img]:object-top [&>article]:rounded-xl [&>article]:overflow-hidden [&>article]:shadow-custom [&>article>div]:absolute [&>article>div]:bottom-0 [&>article]:relative tablet-middle:col-span-2">
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
                                                class="text-white font-gordita-bold text-20 leading-[25px] text-center line-clamp-3">
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
                <?php endif; ?>
            </ul>
            <!-- </div> -->
        </div>
    </div>
</section>


<?php
get_footer();
?>