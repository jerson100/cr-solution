<?php
/*
    Template name: blogs
*/

get_header();

?>



<div class="screen-top relative">
    <img src="<?php echo get_field("fondo_hero_blogs_page")["url"] ?>"
        alt="<?php echo get_field("fondo_hero_blogs_page")["alt"] ?>"
        width="<?php echo get_field("fondo_hero_blogs_page")["width"] ?>"
        height="<?php echo get_field("fondo_hero_blogs_page")["height"] ?>"
        class="w-full h-full object-cover absolute left-0 top-0 z-[1] object-right" />
    <div class="containerc">
        <div
            class="laptop:max-w-[85%] w-full min-h-[160px] py-4 tablet:min-h-[200px] laptop:min-h-[230px] desktop-large:min-h-[264px] laptop:py-12 flex items-center justify-start">
            <h1 class="section-title section-title--white z-[2] relative text-white-150 margin-b-0">
                <?php echo get_field("titulo_hero_blogs_page") ?>
            </h1>
        </div>
    </div>
</div>


<?php
global $wp_query;
$wp_query = new WP_Query(
    array(
        'post_type' => 'post',
        'posts_per_page' => 100,
        'post_status' => 'publish'
    )
);
?>

<div class="page-section">
    <div class="containerc">
        <div class="mx-auto max-w-[728px] flex justify-center mb-16">
            <p class="text-text-primary text-25 font-gordita-regular">
                <?php echo get_field("descripcion_blogs_page") ?>
            </p>
        </div>
        <ul class="grid grid-cols-1 tablet-middle:grid-cols-2 laptop:grid-cols-3 gap-4">
            <?php if (have_posts()):
                while (have_posts()):
                    the_post(); ?>
                    <li>
                        <article class="shadow-custom m-[.2rem]">
                            <div class="relative">
                                <ul class="absolute left-0 top-2">
                                    <span>+</span>
                                    <span>-</span>
                                </ul>
                                <div
                                    class="[&>img]:w-full [&>img]:h-[220px] desktop-large:[&>img]:h-[317px] [&>img]:object-cover [&>img]:object-center">
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php echo get_the_post_thumbnail() ?>
                                    <?php endif; ?>
                                </div>
                                <!-- <img src="/cr_solutions/wp-content/themes/theme_invitro/images/Inicio/hombre-vista-posterior-equipo-seguridad.jpg"
                                        alt="" class="" /> -->
                            </div>
                            <div class="p-4">
                                <h2 class="text-celeste-100 line-clamp-1 card-title">
                                    <?php echo the_title() ?>
                                </h2>
                                <p class="line-clamp-2 mb-5 text font-gordita-regular text-text-primary">
                                    <?php echo wp_trim_words(get_the_excerpt(), 3) ?>
                                </p>
                                <div class="bg-[#1F4690] h-[1px] w-full mb-4"></div>
                                <a href="<?php echo the_permalink() ?>" class="button">Ver más</a>
                            </div>
                        </article>
                    </li>

                <?php endwhile; endif; ?>
            <!-- cerrar loop -->

        </ul>
    </div>
</div>

<?php get_footer(); ?>