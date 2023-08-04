<section class="bg-white page-section overflow-x-hidden wow animate__animated animate__fadeIn" data-wow-duration="1s">
    <div class="container">
        <div class="flex justify-between">
            <div class="flex items-center w-[40%] wow animate__animated animate__backInLeft" data-wow-duration="1s">
                <div class="flex flex-col">
                    <!-- <h2 class="section-title">¿Quiénes somos?</h2> -->
                    <h2 class="section-title">
                        <?php echo get_field("titulo_quienes_somos", 'option') ?>
                    </h2>
                    <p class="section-text mb-8">
                        <?php echo get_field("descripcion_quienes_somos", 'option') ?>
                    </p>
                    <div>
                        <a href=" #" class="button">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center relative w-[45%] wow animate__animated animate__backInRight"
                data-wow-duration="1s">
                <div class="bg-celeste-50 absolute left-[-20px] top-[20px] h-full w-full rounded-xl"></div>
                <img src="<?php echo get_field("imagen_quienes_somos", 'option')["url"] ?>"
                    alt="<?php echo get_field("imagen_quienes_somos", 'option')["alt"] ?>"
                    title="<?php echo get_field("imagen_quienes_somos", 'option')["title"] ?>"
                    width="<?php echo get_field("imagen_quienes_somos", 'option')["width"] ?>"
                    height="<?php echo get_field("imagen_quienes_somos", 'option')["height"] ?>"
                    class="rounded-xl z-[1]" />
            </div>
        </div>
    </div>
</section>