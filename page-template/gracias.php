<?php
/*
    Template name: gracias
*/

get_header();

?>

<div class="screen-top h-screen-top relative wow animate__animated animate__fadeIn overflow-x-hidden"
    data-wow-duration="1s">
    <?php
    $imagen = get_field("fondo_gracias_page");
    echo "<img src='{$imagen['url']}' width='{$imagen['width']}' height='{$imagen['height']}' alt='{$imagen['alt']}' class='absolute left-0 top-0 w-full h-full z-[1] object-cover'>"
        ?>
    <div class="containerc min-h-[inherit] relative z-[2]">
        <div class="flex items-center h-full justify-center min-h-[inherit]">
            <div class="max-w-5xl text-center py-14">
                <h1 class="text-70 text-white-150 font-gordita-bold mb-8 wow animate__animated animate__fadeIn"
                    data-wow-delay="2s" data-wow-duration="2s">
                    <?php echo get_field("title_gracias_page") ?>
                </h1>
                <p class="text-38 font-gordita-regular mb-8 laptop:mb-14 text-white-150 wow animate__animated animate__fadeInLeft"
                    data-wow-duration="1s">
                    <?php echo get_field("description_gracias_page") ?>
                </p>
                <div class="flex justify-center mb-6 laptop:mb-10 desktop-large:mb-14">
                    <button class="button">Volver al inicio</button>
                </div>
                <div class="wow animate__animated animate__fadeInRight" data-wow-duration="1s">
                    <?php echo get_template_part("inc/redes") ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>