<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;
?>

<?php if($order): ?>
<div class="great">
	<div class="woocommerce-header">
		<h3>¡Felicitaciones!</h3>
		<p>Tu pedido esta siendo procesado</p>

		<ul class="plantillas-orders">
			<?php 
        	    $items = $order->get_items();
        	    foreach($items as $item):
        	    $product = $item->get_product();
        	?>
			<li>
				<div class="amounts">
					<div class="item">
						<p><?php echo $product->get_name(); ?></p>
						<p>Cantidad <span><?php echo $item->get_quantity(); ?></span></p>
						<p><?php echo wc_price($item->get_total()); ?></p>
					</div>
					<div class="total">
						<p></p>
						<small>Total:</small>
						<p><?php echo wc_price($order->get_total()); ?></p>
					</div>
				</div>
				<div class="like">
					<img src="<?php echo IMG; ?>/like.svg" alt="Like" title="Like">
				</div>
			</li>
			<?php endforeach; ?>
		</ul>

	</div>
</div>
<?php endif; ?>