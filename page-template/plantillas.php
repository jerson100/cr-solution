<?php
/* Template Name: plantillas */
get_header();
?>

<div class="screen-top relative">
    <img src="<?php echo get_field("fondo_pagina_plantillas")["url"] ?>"
        alt="<?php echo get_field("fondo_pagina_plantillas")["alt"] ?>"
        width="<?php echo get_field("fondo_pagina_plantillas")["width"] ?>"
        height="<?php echo get_field("fondo_pagina_plantillas")["height"] ?>"
        class="w-full h-full object-cover absolute left-0 top-0 z-[1]" />
    <div class="container">
        <div class="max-w-[85%] w-full min-h-[264px] py-12 flex items-center justify-start">
            <h1 class="section-title section-title--white z-[2] relative text-white-150">
                <?php echo get_field("titulo_pagina_plantillas") ?>
            </h1>
        </div>
    </div>
</div>

<section class="page-section">
    <div class="container">
        <div class="mb-14">
            <h2 class="section-title text-center max-w-[850px] mx-auto">
                <?php echo get_field("titulo_seccion_plantillas_page") ?>
            </h2>
            <p class="text-25 font-gordita-regular text-center text-text-primary">
                <?php echo get_field("descripcion_seccion_plantillas_page") ?>
            </p>
        </div>
        <div class="flex bg-[#F2F2F2] px-20 py-3 mb-14">
            <div><button class="button button--rounded-md button-size-md">Todos</button></div>
            <ul class="flex items-center flex-wrap gap-y-4 justify-center">
                <li>
                    <button class="text-celeste-100 text-25 font-gordita-regular py-[8px] px-[25px]">Análisis de trabajo
                        seguro</button>
                </li>
                <li>
                    <button class="text-celeste-100 text-25 font-gordita-regular py-[8px] px-[25px]">Permisos de
                        Trabajo</button>
                </li>
                <li>
                    <button class="text-celeste-100 text-25 font-gordita-regular py-[8px] px-[25px]">Inspección de
                        herramientas y
                        materiales</button>
                </li>
                <li>
                    <button class="text-celeste-100 text-25 font-gordita-regular py-[8px] px-[25px]">Inspección de
                        equipos</button>
                </li>
                <li>
                    <button class="text-celeste-100 text-25 font-gordita-regular py-[8px] px-[25px]">Registros de
                        SST</button>
                </li>
                <li>
                    <button class="text-celeste-100 text-25 font-gordita-regular py-[8px] px-[25px]">Tarjetas de
                        inspección</button>
                </li>
            </ul>
        </div>
        <ul class="grid grid-cols-3 gap-10">
            <?php
            if (have_rows("plantillas_pagina_plantillas")):
                while (have_rows("plantillas_pagina_plantillas")):
                    the_row();
                    ?>
                    <li data-category="<?php echo get_sub_field("categoria_de_plantilla") ?>"
                        class="rounded-lg bg-[#313131] flex flex-col">
                        <div class="h-[264px] rounded-t-lg"></div>
                        <div
                            class="flex justify-between items-center gap-4 shadow-custom px-8 py-4 rounded-lg bg-white-150 flex-grow">
                            <h3 class="font-gordita-bold flex-shrink text-22 line-clamp-2">
                                <?php echo get_sub_field("titulo") ?>
                            </h3>
                            <div class="flex gap-6 flex-shrink-0">
                                <button data-title="<?php echo get_sub_field("titulo") ?>" class="flex-shrink-0">
                                    <img src="<?php echo IMG ?>/Plantillas/bookmarks.svg" />
                                </button>
                                <button class="flex-shrink-0">
                                    <img src="<?php echo IMG ?>/Plantillas/downloade.svg" />
                                </button>
                            </div>
                        </div>
                    </li>
                <?php endwhile; endif; ?>
        </ul>
    </div>
</section>

<?php
get_footer();
?>