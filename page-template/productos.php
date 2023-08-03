<?php
/*
    Template name: productos
*/

get_header();

?>

<?php 
    global $wp_query;
    $wp_query = new WP_Query( array(
        'post_type' => 'producto', 
        'posts_per_page' => 500,
        'post_status' => 'publish'
    ));
?>

<?php get_footer(); ?>