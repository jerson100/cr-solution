<section class="page-section bg-white wow animate__animated animate__fadeIn" data-wow-duration="1s">
    <div class="containerc">
        <div class="flex flex-col">
            <h2 class="section-title text-center w-full">
                <!-- Empresas que confían en nosotros: -->
                <?php echo get_field("titulo_confian_nosotros", "option") ?>
            </h2>
            <div class="relative">
                <div
                    class="absolute z-[2] left-0 top-1/2 -translate-y-1/2 h-full w-[200px] bg-gradient-to-r from-[18%] from-white to-transparent">
                </div>
                <div
                    class="absolute z-[2] right-0 top-1/2 -translate-y-1/2 h-full w-[200px] bg-gradient-to-l from-[18%] from-white to-transparent">
                </div>
                <div class="splide custom-splide custom-splide--dark z-[1]" id="confianNosotros">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php
                            if (have_rows("clientes_confian_nosotros", "option")):
                                while (have_rows("clientes_confian_nosotros", "option")):
                                    the_row(); ?>
                                    <li class="splide__slide">
                                        <img src="<?php echo get_sub_field("logo")["url"] ?>"
                                            alt="<?php echo get_sub_field("logo")["alt"] ?>"
                                            width="<?php echo get_sub_field("logo")["width"] ?>"
                                            height="<?php echo get_sub_field("logo")["height"] ?>"
                                            title="<?php echo get_sub_field("logo")["title"] ?>" />
                                    </li>
                                <?php endwhile; endif ?>
                            <!-- <li class="splide__slide">
                                <img src="<?php echo IMG ?>/Inicio/Logos/Aicon.jpg" alt="Aicon" title="Aicon" />
                            </li>
                            <li class="splide__slide">
                                <img src="<?php echo IMG ?>/Inicio/Logos/AIS Automation.jpg" alt="AIS Automation"
                                    title="AIS Automation" />
                            </li>
                            <li class="splide__slide">
                                <img src="<?php echo IMG ?>/Inicio/Logos/ArcaContinental copia 2.jpg"
                                    alt="Arca Continental" title="Arca Continental" />
                            </li>
                            <li class="splide__slide">
                                <img src="<?php echo IMG ?>/Inicio/Logos/Backus.jpg" alt="Backus" title="Backus" />
                            </li>
                            <li class="splide__slide">
                                <img src="<?php echo IMG ?>/Inicio/Logos/Cocoacola.jpg" alt="Cocoa cola"
                                    title="Cocoa cola" />
                            </li>
                            <li class="splide__slide">
                                <img src="<?php echo IMG ?>/Inicio/Logos/inka kola.jpg" alt="Inka Kola"
                                    title="Inka Kola" />
                            </li>
                            <li class="splide__slide">
                                <img src="<?php echo IMG ?>/Inicio/Logos/Jmc.jpg" alt="Jmc" title="Jmc" />
                            </li>
                            <li class="splide__slide">
                                <img src="<?php echo IMG ?>/Inicio/Logos/Lavoro.jpg" alt="Lavoro" title="Lavoro" />
                            </li>
                            <li class="splide__slide">
                                <img src="<?php echo IMG ?>/Inicio/Logos/MEPS.jpg" alt="Meps" title="Meps" />
                            </li>
                            <li class="splide__slide">
                                <img src="<?php echo IMG ?>/Inicio/Logos/Multiservicios Jean Franshesco.jpg"
                                    alt="Multiservicios Jean Franshesco" title="Multiservicios Jean Franshesco" />
                            </li>
                            <li class="splide__slide">
                                <img src="<?php echo IMG ?>/Inicio/Logos/Polindustria copia.jpg"
                                    alt="Polindustria copia" title="Polindustria copia" />
                            </li>
                            <li class="splide__slide">
                                <img src="<?php echo IMG ?>/Inicio/Logos/PuntoRojo.jpg" alt="Punto Rojo"
                                    title="Punto Rojo" />
                            </li>
                            <li class="splide__slide">
                                <img src="<?php echo IMG ?>/Inicio/Logos/Servikar.jpg" alt="Servikar"
                                    title="Servikar" />
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>