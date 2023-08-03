<?php
/*
    Template name: single
*/

get_header();

$ID = intval(get_the_ID());

?>

<div class="screen-top"></div>




<form method="post">
    <input type="hidden" name="product_id" value="17">
    <input type="submit" value="Comprar plantilla">
</form>



<?php get_footer(); ?>