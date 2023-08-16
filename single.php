<?php
/*
    Template name: single
*/

get_header();

$ID = intval(get_the_ID());

?>
<div class="screen-top relative">
    <img src="<?php echo IMG ?>/Blog/Banners-4.jpg" class="w-full h-full object-cover absolute left-0 top-0 z-[1]" />
    <div class="containerc">
        <div
            class="laptop:max-w-[85%] w-full min-h-[160px] py-4 tablet:min-h-[200px] laptop:min-h-[230px] desktop-large:min-h-[264px] laptop:py-12 flex items-center justify-start">
            <h1 class="section-title section-title--white z-[2] relative text-white-150 margin-b-0">
                <?php echo get_the_title() ?>
            </h1>
        </div>
    </div>
</div>
<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'post__not_in' => array($ID)
);
$loop = new WP_Query($args);
?>
<section class="page-section">
    <div class="containerc">
        <?php if (!$loop->have_posts()): ?>
            <div class="grid grid-cols-1">
            <?php else: ?>
                <div
                    class="grid grid-cols-1 laptop:grid-cols-[1fr_350px] desktop-large:grid-cols-[1fr_480px] laptop:gap-8 desktop-middle:gap-14 desktop-large:gap-16">
                <?php endif; ?>
                <div class="content-editor">
                    <?php
                    $thumbID = get_post_thumbnail_id($post->ID);
                    $imgDestacada = wp_get_attachment_image_src($thumbID, 'thumbnail');
                    if ($imgDestacada) {
                        echo '<img src="' . $imgDestacada[0] . '" alt="' . get_the_title() . '" title="' . get_the_title() . '" class="w-auto max-w-full"><br>';
                    }
                    ?>
                    <?php the_content(); ?>
                </div>
                <?php if ($loop->have_posts()): ?>
                    <aside class="pt-8 pr-4 desktop-large:pr-20">
                        <h2 class="text-25 text-blue mb-4 font-gordita-bold">Últimas Entradas</h2>
                        <ul class="grid grid-cols-1 tablet:grid-cols-2 laptop:grid-cols-1 gap-6">
                            <?php
                            while ($loop->have_posts()):
                                $loop->the_post();
                                ?>
                                <li class="grid grid-cols-[125px_1fr] gap-4 items-center pb-6 border-b-2 border-blue pl-2">
                                    <div class="[&>img]:h-[125px] [&>img]:object-cover [&>img]:rounded-lg">
                                        <?php echo get_the_post_thumbnail() ?>
                                    </div>
                                    <div class="">
                                        <h3 class="text text-celeste-100 font-gordita-bold">
                                            <a href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a>
                                        </h3>
                                        <p class="text text-blue font-gordita-regular">
                                            <?php echo wp_trim_words(get_the_excerpt(), 3) ?>
                                        </p>
                                        <p class="text text-text-primary font-gordita-regular">
                                            <?php echo get_the_date() ?>
                                        </p>
                                    </div>
                                </li>
                                <?php
                            endwhile;
                            wp_reset_postdata();
                            wp_reset_query();
                endif;
                ?>
                    </ul>
                </aside>
            </div>
        </div>
</section>
<div class="page-section">
    <div class="containerc">
        <div class="flex justify-center gap-20 items-center">
            <?php
            $anterior_entrada = get_previous_post();
            $siguiente_entrada = get_next_post();

            ?>
            <?php if ($anterior_entrada): ?>
                <a href=" <?php echo get_permalink($anterior_entrada) ?>" class="button">Entrada Anterior</a>
            <?php endif; ?>

            <a href="<?php
            $page = get_page_by_title('Blogs');
            $page_url = get_permalink($page->ID);
            echo $page_url = get_permalink($page->ID); ?>" class="text-celeste-50 font-gordita-regular text-25">Volver
                al blog</a>
            <?php if ($siguiente_entrada): ?>
                <a href="<?php echo get_permalink($siguiente_entrada) ?>" class="button">Siguiente Entrada</a>
            <?php endif; ?>
        </div>
    </div>
</div>



<?php get_footer(); ?>