<?php

/** 
 *InVitro Agencia Digital
 *@link 
 *@package WordPress
 *@subpackage InVitro Agencia Digital
 *@since 1.0.0
 *@version 1.0.0
 */

define('URL', get_stylesheet_directory_uri());
define('IMG', URL . '/images');
define('JS', URL . '/libraries/js');
define('CSS', URL . '/libraries/css');



/**
 * Función para añadir un producto al carrito y redirigir a finalizar compra.
 *
 * @param int $product_id El ID del producto que se agregará al carrito.
 */
function agregar_producto_y_redirigir_a_finalizar_compra($product_id)
{
    if (wc_get_product($product_id)) {
        WC()->cart->add_to_cart($product_id);
        wp_redirect(wc_get_checkout_url());
        exit;
    }
}

add_action('wp', 'procesar_clic_boton_personalizado');
function procesar_clic_boton_personalizado()
{
    if (isset($_POST['product_id']) && is_numeric($_POST['product_id'])) {
        $product_id = intval($_POST['product_id']);
        agregar_producto_y_redirigir_a_finalizar_compra($product_id);
    }
}

// Función para agregar un campo de teléfono al formulario de checkout
function form_checkout($fields)
{
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_state']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_postcode']);

    unset($fields['order']['order_comments']);

    $fields['billing']['billing_first_name'] = array(
        'label' => 'Nombres',
        'placeholder' => 'Nombres',
        'required' => true,
        'class' => array('form-row'),
        'clear' => true,
        'autocomplete' => false,
    );
    $fields['billing']['billing_last_name'] = array(
        'label' => 'Apellidos',
        'placeholder' => 'Apellidos',
        'required' => true,
        'class' => array('form-row'),
        'clear' => true,
        'autocomplete' => false,
    );
    $fields['billing']['billing_dni'] = array(
        'label' => 'DNI',
        'placeholder' => 'Introduce tu DNI',
        'required' => true,
        'class' => array('form-row'),
        'clear' => true,
        'autocomplete' => false,
    );
    $fields['billing']['billing_phone'] = array(
        'label' => 'Teléfono',
        'placeholder' => 'Introduce tu teléfono',
        'required' => true,
        'class' => array('form-row'),
        'clear' => true,
        'autocomplete' => false,
    );
    $fields['billing']['billing_email'] = array(
        'label' => 'Correo electrónico',
        'placeholder' => 'Correo electrónico',
        'required' => true,
        'class' => array('form-row-wide'),
        'clear' => true,
        'autocomplete' => false,
    );

    return $fields;
}
add_filter('woocommerce_checkout_fields', 'form_checkout');


if (!function_exists('general_scripts')):
    function general_scripts()
    {
        wp_register_style('style', get_stylesheet_uri(), array(), '1.0.0', 'all');
        // wp_register_style('maincss', get_template_directory_uri().'/public/css/app.css','1.0.0','all');
        wp_register_style('cartcss', get_template_directory_uri() . '/cart/cart.css', '1.0.0', 'all');
        // wp_register_style('splidecss', get_template_directory_uri().'/libraries/css/splide.min.css','1.0.0','all');
        wp_register_style('bundlecss', get_template_directory_uri() . '/dist/bundle.css', '1.0.0', 'all');

        wp_enqueue_style('style');
        // wp_enqueue_style('maincss');
        wp_enqueue_style('cartcss');
        // wp_enqueue_style('splidecss');
        wp_enqueue_style('bundlecss');

        // wp_register_script('splidejs', get_template_directory_uri().'/libraries/js/splide.min.js',array(),'1.0.0',true);
        // wp_register_script('splideautoscrolljs', get_template_directory_uri().'/libraries/js/splide-extension-auto-scroll.min.js',array(),'1.0.0',true);
        // wp_register_script('mainjs', get_template_directory_uri() . '/public/js/main.min.js', array(), '1.0.0', true);
        // wp_register_script('stepjs', get_template_directory_uri() . '/cart/step.js', array('jquery'), '1.0.0', true);
        wp_register_script('bundlejs', get_template_directory_uri() . '/dist/bundle.js', array(), '1.0.0', true);

        // wp_enqueue_script('splidejs');
        // wp_enqueue_script('stepjs');
        // wp_enqueue_script('splideautoscrolljs');
        // wp_enqueue_script('mainjs');
        wp_enqueue_script('bundlejs');
    }
endif;
add_action('wp_enqueue_scripts', 'general_scripts');

//add postthumbnail function
if (function_exists('add_theme_support'))
    add_theme_support('post-thumbnails');

//excerpt 30 word
function my_excerpt_length($length)
{
    return 30;
}
add_filter('excerpt_length', 'my_excerpt_length');

//registrar menus
function register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('En la cabecera')
        )
    );
}
add_action('init', 'register_my_menus');


if (function_exists('acf_add_options_page')) {
    acf_add_options_page(
        array(
            'menu_title' => 'Secciones Repetidas',
            'menu_slug' => 'theme-general-settings',
            'icon_url' => 'dashicons-table-row-before',
            'redirect' => false
        )
    );
    acf_add_options_sub_page(
        array(
            'page_title' => '¿Quienes somos?',
            'menu_title' => 'Quienes somos',
            'parent_slug' => 'theme-general-settings'
        )
    );
    acf_add_options_sub_page(
        array(
            'page_title' => 'Confian en nosotros',
            'menu_title' => 'Confian en nosotros',
            'parent_slug' => 'theme-general-settings'
        )
    );
    acf_add_options_sub_page(
        array(
            'page_title' => 'Bajo Estándares Internacionales',
            'menu_title' => 'Bajo Estándares Internacionales',
            'parent_slug' => 'theme-general-settings'
        )
    );
    acf_add_options_sub_page(
        array(
            'page_title' => 'Vías de Contacto',
            'menu_title' => 'Vías de Contacto',
            'parent_slug' => 'theme-general-settings'
        )
    );
}



//modulo de redes - get option
require_once get_template_directory() . '/inc/modulo_informacion.php';
// require_once get_template_directory() . '/inc/productos.php';
require_once get_template_directory() . '/inc/servicios.php';
require_once get_template_directory() . '/inc/blog.php';