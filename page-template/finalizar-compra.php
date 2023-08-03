<?php
/*
    Template name: finalizar-compra
*/

get_header();

?>

<style>
    /*#customer_details > .col-2,#order_review_heading,.payment_methods,.woocommerce-terms-and-conditions-wrapper{display: none !important;}*/

    .woocommerce-terms-and-conditions-wrapper,
    .woocommerce table.shop_table,
    .woocommerce-form-coupon-toggle {
        display: none !important;
    }

    #payment {
        background: none !important;
    }

    #payment .place-order {
        padding: 0 !important;
    }

    #customer_details>.col-1 {
        width: 100% !important;
    }
</style>

<section class="datos_cliente screen-top h-screen-top">
    <div class="container">
        <div class="w-full">
            <div class="datos_cliente_box">
                <div class="w-full">
                    <?php echo do_shortcode('[woocommerce_checkout]'); ?>
                </div>
            </div>
            <div class="datos_cliente_button to_continue" id="toggleButton1">
                <p>Continuar</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>