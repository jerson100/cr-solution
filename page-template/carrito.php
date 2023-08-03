<?php
/*
    Template name: carrito
*/

get_header();

?>

<section class="screen-top h-screen-top">
    <div class="container">
        <?php echo do_shortcode('[woocommerce_cart]'); ?>
    </div>
</section>

<?php get_footer(); ?>