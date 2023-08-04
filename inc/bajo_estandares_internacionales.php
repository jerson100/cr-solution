<div class="bg-[#1F4690] py-4">
    <div class="container">
        <div class="flex justify-between pl-28 pr-28">
            <div class="max-w-[400px]">
                <p class="text text-white font-bold">
                    <?php echo get_field("title_bajo_estandares_internacionales", "option") ?>
                </p>
            </div>
            <ul class="flex gap-10 items-center">
                <?php
                if (have_rows("logo_bajo_estandares_internaciones", "option")):
                    while (have_rows("logo_bajo_estandares_internaciones", "option")):
                        the_row(); ?>
                        <?php if (!empty(get_sub_field("imagen_estandar_internacional"))): ?>
                            <li class="splide__slide">
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
</div>