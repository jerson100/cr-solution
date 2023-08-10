<?php
/*
    Template name: single
*/

get_header();

$ID = intval(get_the_ID());

?>

<div class="screen-top"></div>

<?php //the_title() ?>

<?php
// Obtén la ID de la entrada actual
$post_id = get_the_ID();

// Obtiene las categorías asociadas a la entrada
$categories = get_the_terms($post_id, 'serviciosgenero'); // Cambia 'category' al nombre de la taxonomía que estás utilizando
if (!empty($categories)):
    $first_category = reset($categories);

    if ($first_category == 'Capacitaciones'): ?>

    <?php elseif ($first_category == 'Asesorías'): ?>

    <?php elseif ($first_category == 'Entrenamientos'): ?>

    <?php else: ?>

    <?php endif; ?>

<?php else: ?>
    <!-- si no hay categoria -->
<?php endif; ?>

<form method="post">
    <input type="hidden" name="product_id" value="17">
    <input type="submit" value="Comprar plantilla">
</form>



<?php get_footer(); ?>