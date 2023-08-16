<?php
/*
    Template name: Quienessomos
*/

get_header();

?>
<div class="screen-top relative">
    <img src="<?php echo get_field("background_quienes_somos_page")["url"] ?>"
        alt="<?php echo get_field("background_quienes_somos_page")["alt"] ?>"
        width="<?php echo get_field("background_quienes_somos_page")["width"] ?>"
        height="<?php echo get_field("background_quienes_somos_page")["height"] ?>"
        class="w-full h-full object-cover absolute left-0 top-0 z-[1] object-right" />
    <div class="containerc">
        <div
            class="laptop:max-w-[85%] w-full min-h-[160px] py-4 tablet:min-h-[200px] laptop:min-h-[230px] desktop-large:min-h-[264px] laptop:py-12 flex items-center justify-start">
            <h1 class="section-title section-title--white z-[2] relative text-white-150 margin-b-0">
                <?php echo get_field("titulo_hero_quienes_somos_page") ?>
            </h1>
        </div>
    </div>
</div>
<div class="page-section page-section--sm">
    <div class="containerc">
        <div class="grid grid-cols-1 laptop:grid-cols-[40%_1fr] desktop-large:grid-cols-[1fr_800px] gap-16">
            <div class="content-editor laptop:pt-20 desktop-large:pt-28">
                <?php echo get_field("main_content_quienes_somos_page") ?>
            </div>
            <div
                class="flex flex-col gap-20 [&>div>img]:rounded-lg [&>div>img]:max-w-full [&>div>img]:w-[70%] desktop-large:[&>div>img]:w-[auto] [&>div>img]:object-cover">
                <?php if (have_rows("images_quienes_somos_page")):
                    while (have_rows("images_quienes_somos_page")):
                        the_row();
                        $image1 = get_sub_field("image1");
                        $image2 = get_sub_field("image2");
                        if ($image1 && $image2):
                            $direction = get_sub_field("direccion");
                            if ($direction == "rl"):
                                echo "<div class='flex flex-col'>
                                            <img src='{$image1["url"]}' width='{$image1["width"]}' height='{$image1["height"]}' alt='{$image1["title"]}' title='{$image1["title"]}' class='self-end relative z-[2]'>
                                            <img src='{$image2["url"]}' width='{$image2["width"]}' height='{$image2["height"]}' alt='{$image2["title"]}' title='{$image2["title"]}' class='self-start -mt-[11%] relative z-[1]'>
                                        </div>";
                            elseif ($direction == "lr"):
                                echo "<div class='flex flex-col'>
                                            <img src='{$image1["url"]}' width='{$image1["width"]}' height='{$image1["height"]}' alt='{$image1["title"]}' title='{$image1["title"]}' class='self-start relative z-[2]'>
                                            <img src='{$image2["url"]}' width='{$image1["width"]}' height='{$image2["height"]}' alt='{$image2["title"]}' title='{$image2["title"]}' class='self-end -mt-[11%] relative z-[1]'>
                                        </div>";
                            endif;
                        endif;
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</div>

<div class="page-section page-section--sm">
    <div class="containerc">
        <section class="bg-[#1F4690] grid grid-cols-1 laptop:grid-cols-2">
            <img class="w-full h-full object-cover order-2 laptop:order-1"
                src="<?php echo get_field("imagen_mision_quienes_somos_page")["url"] ?>"
                alt="<?php echo get_field("imagen_mision_quienes_somos_page")["title"] ?>"
                width="<?php echo get_field("imagen_mision_quienes_somos_page")["width"] ?>"
                height="<?php echo get_field("imagen_mision_quienes_somos_page")["height"] ?>"
                title="<?php echo get_field("imagen_mision_quienes_somos_page")["title"] ?>" />
            <div
                class="flex items-center p-8 justify-center flex-col tablet-middle:p-[40px] laptop:p-[50px] desktop:p-[80px] desktop-middle:[90px] desktop-large:p-[105px] order-1 laptop:order-2">
                <div>
                    <h2 class="section-title section-title--yellow text-center laptop:text-left">
                        <?php echo get_field("titulo_mision_quienes_somos_page") ?>
                    </h2>
                    <p class="text text-white-150 font-gordita-regular">
                        <?php echo get_field("descripcion_mision_quienes_somos_page") ?>.
                    </p>
                </div>
            </div>
        </section>
        <section class="bg-[#1F4690] grid grid-cols-1 laptop:grid-cols-2">
            <div
                class="flex items-center p-8 justify-center flex-col tablet-middle:p-[40px] laptop:p-[50px] desktop:p-[80px] desktop-middle:[90px] desktop-large:p-[105px]">
                <div>
                    <h2 class="section-title section-title--yellow text-center laptop:text-left">
                        <?php echo get_field("titulo_vision_quienes_somos_page") ?>
                    </h2>
                    <p class="text text-white-150 font-gordita-regular">
                        <?php echo get_field("descripcion_vision_quienes_somos_page") ?>
                    </p>
                </div>
            </div>
            <img class="w-full h-full object-cover"
                src="<?php echo get_field("imagen_vision_quienes_somos_page")["url"] ?>"
                alt="<?php echo get_field("imagen_vision_quienes_somos_page")["title"] ?>"
                width="<?php echo get_field("imagen_vision_quienes_somos_page")["width"] ?>"
                height="<?php echo get_field("imagen_vision_quienes_somos_page")["height"] ?>"
                title="<?php echo get_field("imagen_vision_quienes_somos_page")["title"] ?>" />
        </section>
    </div>
</div>

<section class="page-section page-section--sm">
    <div class="containerc">
        <div class="bg-gray-50 p-12 tablet-middle:p-16">
            <h2 class="section-title text-center">
                <?php echo get_field("title_valores_quienes_somos_page") ?>
            </h2>
            <ul class="grid grid-cols-1 tablet:grid-cols-3 gap-10 tablet:gap-8 tablet-middle:gap-14 laptop:gap-20">
                <?php if (have_rows("valores_quienes_somos_page")):
                    while (have_rows("valores_quienes_somos_page")):
                        the_row();
                        $image = get_sub_field("image");
                        $title = get_sub_field("title");
                        $description = get_sub_field("description");
                        ?>
                        <li>
                            <article class="flex flex-col gap-4 tablet:gap-8 items-center">
                                <img src="<?php echo $image["url"] ?>" alt="<?php echo $image["title"] ?>"
                                    width="<?php echo $image["width"] ?>" height="<?php echo $image["height"] ?>"
                                    title="<?php echo $image["title"] ?>"
                                    class="w-[8rem] h-[8rem] laptop:w-[178px] laptop:h-[178px] object-cover rounded-full" />

                                <h3 class="text-celeste-100 text-30 font-gordita-bold">
                                    <?php echo $title ?>
                                </h3>
                                <p class="text-center text font-gordita-regular text-25 text-text-primary">
                                    <?php echo $description ?>
                                </p>
                            </article>
                        </li>
                    <?php endwhile; endif; ?>
            </ul>
        </div>
    </div>
</section>

<section class="page-section page-section--sm">
    <div class="containerc">
        <div class="laptop:p-16">
            <h2 class="section-title section-title--m2 text-center">
                <?php echo get_field("title_valor_agregado_quienes_somos_page") ?>
            </h2>
            <div class="tablet:max-w-[90%] mx-auto">
                <ul>
                    <?php
                    $i = 0;
                    if (have_rows("valores_agregados_quienes_somos_page")):
                        while (have_rows("valores_agregados_quienes_somos_page")):
                            the_row();
                            $title = get_sub_field("title");
                            $description = get_sub_field("description");
                            $image = get_sub_field("image");
                            $i++;
                            ?>
                            <li class="border-t border-[#D8D8D8] py-10">
                                <div class="tablet:max-w-[90%] mx-auto flex gap-4 tablet-middle:gap-4 desktop-large:gap-24">
                                    <div class="w-[100px] tablet:w-[180px] laptop:w-[223px] flex-shrink-0">
                                        <img src="<?php echo $image["url"] ?>" alt="<?php echo $image["title"] ?>"
                                            width="<?php echo $image["width"] ?>" height="<?php echo $image["height"] ?>"
                                            title="<?php echo $image["title"] ?>" class="max-w-[100%]">
                                    </div>
                                    <div class="mt-[1.5rem]">
                                        <div class="grid grid-cols-[auto_1fr] gap-x-2 tablet:gap-x-4 laptop:gap-x-8 gap-y-2">
                                            <div
                                                class="bg-blue w-[36px] h-[36px] laptop:w-[48px] laptop:h-[48px] desktop-large:w-[98px] desktop-large:h-[98px] flex justify-center items-center rounded-full">
                                                <span class="text-yellow font-gordita-bold text-50">
                                                    <?php echo $i ?>
                                                </span>
                                            </div>
                                            <div class="flex items-center">
                                                <h3 class="text-30 font-gordita-bold text-celeste-100">
                                                    <?php echo $title ?>
                                                </h3>
                                            </div>
                                            <div class="col-start-2">
                                                <p class="text-25 font-gordita-regular text-text-primary max-w-[648px]">
                                                    <?php echo $description ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endwhile; endif; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php

get_footer();

?>