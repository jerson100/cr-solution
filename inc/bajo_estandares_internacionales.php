<div class="bg-[#1F4690] py-4">
    <div class="containerc">
        <div
            class="flex flex-col items-center text-center laptop:text-left laptop:flex-row laptop:justify-between laptop:pl-28 laptop:pr-28 gap-10">
            <div class="max-w-[400px] text-center tablet-middle:text-left">
                <p class="text text-white font-bold">
                    <?php echo get_field("title_bajo_estandares_internacionales", "option") ?>
                </p>
            </div>
            <ul class="flex flex-nowrap gap-10 items-center">
                <?php
                if (have_rows("logo_bajo_estandares_internaciones", "option")):
                    while (have_rows("logo_bajo_estandares_internaciones", "option")):
                        the_row(); ?>
                        <?php if (!empty(get_sub_field("imagen_estandar_internacional"))): ?>
                            <li class="flex-shrink">
                                <img src="<?php echo get_sub_field("imagen_estandar_internacional")["url"] ?>"
                                    alt="<?php echo get_sub_field("imagen_estandar_internacional")["alt"] ?>"
                                    width="<?php echo get_sub_field("imagen_estandar_internacional")["width"] ?>"
                                    height="<?php echo get_sub_field("imagen_estandar_internacional")["height"] ?>"
                                    title="<?php echo get_sub_field("imagen_estandar_internacional")["title"] ?>" />
                            </li>
                        <?php endif; ?>
                    <?php endwhile; endif ?>
            </ul>
        </div>
    </div>