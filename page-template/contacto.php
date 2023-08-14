<?php
/*
    Template name: contacto
*/

get_header();

?>

<div class="screen-top relative">
    <img src="<?php echo get_field("fongo_pagina_contacto")["url"] ?>"
        alt="<?php echo get_field("fongo_pagina_contacto")["alt"] ?>"
        width="<?php echo get_field("fongo_pagina_contacto")["width"] ?>"
        height="<?php echo get_field("fongo_pagina_contacto")["height"] ?>"
        class="w-full h-full object-cover absolute left-0 top-0 z-[1]" />
    <div class="container">
        <div class="max-w-[85%] w-full min-h-[264px] py-12 flex items-center justify-start">
            <h1 class="section-title section-title--xl section-title--white z-[2] relative text-white-150">
                <?php echo get_field("titulo_pagina_contacto") ?>
            </h1>
        </div>
    </div>
</div>

<div class="bg-white-150 pt-20 pb-14">
    <div class="container">
        <div class="max-w-[90%] mx-auto">
            <div class="grid grid-cols-2 gap-16">
                <div>
                    <p class="font-gordita-regular text-25 text-text-primary mb-10">Si deseas más información sobre
                        nuestros
                        servicios o productos,
                        no dudes en contactarnos:</p>
                    <ul class="flex flex-col gap-6 max-w-[360px] mb-10">
                        <li class="flex gap-4 items-center">
                            <img src="<?php echo IMG ?>/Contacto/Grupo 155.svg" />
                            <span class="text-celeste-100 text-25 font-gordita-regular"><?php echo get_option('correo') ?></span>
                        </li>
                        <li class="flex gap-4 items-center">
                            <img src="<?php echo IMG ?>/Contacto/Grupo 156.svg" />
                            <span class="text-celeste-100 text-25 font-gordita-regular"><?php echo get_option('nro_1') ?></span>
                        </li>
                        <li class="flex gap-4 items-center">
                            <img src="<?php echo IMG ?>/Contacto/Grupo 157.svg" />
                            <span class="text-celeste-100 text-25 font-gordita-regular">APV. Agua Buena J-7, San
                                Sebastián,
                                Cusco.</span>
                        </li>
                    </ul>
                    <p class="font-gordita-regular text-25 text-text-primary mb-8">También puedes seguirnos en nuestras
                        redes:
                    </p>
                    <ul class="grid-cols-3 gap-8 inline-grid">
                        <?php if(!empty(get_option('facebook'))): ?>
                        <li>
                            <a href="<?php echo get_option('facebook') ?>" target="_blank">
                                <img src="<?php echo IMG ?>/Contacto/Icon awesome-facebook-square.svg" alt="Correo">
                            </a>
                        </li>
                        <?php endif; ?>

                        <?php if(!empty(get_option('instagram'))): ?>
                        <li>
                            <a href="<?php echo get_option('instagram') ?>" target="_blank">
                                <img src="<?php echo IMG ?>/Contacto/Icon awesome-instagram.svg" alt="instagram">
                            </a>
                        </li>
                        <?php endif; ?>

                        <?php if(!empty(get_option('tiktok'))): ?>
                        <li>
                            <a href="<?php echo get_option('tiktok') ?>" target="_blank">
                                <img src="<?php echo IMG ?>/Contacto/Grupo 29.svg" alt="tiktok">
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-black bg-opacity-20 h-[761px]"></div>

<?php get_footer(); ?>