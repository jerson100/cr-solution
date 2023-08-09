<?php
/*
    Template name: single
*/
get_header();
$ID = intval(get_the_ID());
?>
<div class="screen-top relative">
    <img src="<?php echo IMG ?>/Blog/Banners-4.jpg" class="w-full h-full object-cover absolute left-0 top-0 z-[1]" />
    <div class="container">
        <div class="max-w-[85%] w-full min-h-[264px] py-12 flex items-center justify-start">
            <h1 class="section-title section-title--white z-[2] relative text-white-150">
                <?php echo get_the_title() ?>
            </h1>
        </div>
    </div>
</div>
<section class="page-section">
    <div class="container">
        <div class="grid grid-cols-[1fr_480px] gap-16">
            <div class="content-editor">
                <?php the_content(); ?>
            </div>
            <aside class="pt-8 pr-20">
                <h2 class="text-25 text-blue mb-4 font-gordita-bold">Últimas Entradas</h2>
                <?php
                $args = array(
                    'post_type' => 'blog',
                    'posts_per_page' => 3,
                    'post__not_in' => array($ID)
                );

                $loop = new WP_Query($args);

                if ($loop->have_posts()):
                    echo '<ul class="flex flex-col gap-6">';
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
                    echo '</ul>';
                endif;
                ?>
            </aside>
        </div>
    </div>
</section>
<div class="page-section">
    <div class="container">
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