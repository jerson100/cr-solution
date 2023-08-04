<?php
/*
    Template name: Quienessomos
*/

get_header();

?>
<div class="screen-top relative">
    <img src="<?php echo get_field("fondo_quienes_somos_page")["url"] ?>"
        alt="<?php echo get_field("fondo_quienes_somos_page")["alt"] ?>"
        width="<?php echo get_field("fondo_quienes_somos_page")["width"] ?>"
        height="<?php echo get_field("fondo_quienes_somos_page")["height"] ?>"
        class="w-full h-full object-cover absolute left-0 top-0 z-[1]" />
    <div class="container">
        <div class="max-w-[85%] w-full min-h-[264px] py-12 flex items-center justify-start">
            <h1 class="section-title section-title--white z-[2] relative text-white-150">
                <?php echo get_field("title_quienes_somos_page") ?>
            </h1>
        </div>
    </div>
</div>
<div class="page-section page-section--sm">
    <div class="container">
        <div class="grid grid-cols-[1fr_800px] gap-16">
            <div class="content-editor pt-28">
                <?php echo the_content() ?>
            </div>
            <div class="flex flex-col gap-20 [&>div>img]:rounded-lg [&>div>img]:max-w-full [&>div>img]:object-cover">
                <!-- <div class="flex flex-col gap-20 [&>div>img]:max-w-[65%] [&>div>img]:object-cover"> -->
                <div class="flex flex-col">
                    <img src="<?php echo IMG ?>/Quienes somos/Grupo 142.jpg" alt="" class="self-end relative z-[2]">
                    <img src="<?php echo IMG ?>/Quienes somos/Grupo 143.jpg" alt=""
                        class="self-start -mt-[11%] relative z-[1]">
                </div>
                <div class="flex flex-col">
                    <img src="<?php echo IMG ?>/Quienes somos/Grupo 144.jpg" alt="" class="self-start relative z-[2]">
                    <img src="<?php echo IMG ?>/Quienes somos/Grupo 145.jpg" alt=""
                        class="self-end -mt-[11%] relative z-[1]">
                </div>
                <div class="flex flex-col">
                    <img src="<?php echo IMG ?>/Quienes somos/Grupo 146.jpg" alt="" class="self-end relative z-[2]">
                    <img src="<?php echo IMG ?>/Quienes somos/Grupo 147.jpg" alt=""
                        class="self-start relative z-[1] -mt-[11%]">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-section page-section--sm">
    <div class="container">
        <section class="bg-[#1F4690] grid grid-cols-2">
            <img src="<?php echo IMG ?>/Quienes somos/Grupo 148.jpg" alt="" />
            <div class="flex items-center justify-center flex-col px-[105px]">
                <div>
                    <h2 class="section-title section-title--yellow">Misión</h2>
                    <p class="text text-white-150 font-gordita-regular">Nuestra misión es brindar soluciones integrales
                        en Sistemas de Gestión de Seguridad y Salud Ocupacional y contribuir a la Formación profesional
                        y laboral de nuestros usuarios, a través de Asesorías y Capacitaciones especializadas,
                        impartidas por profesionales competentes y calificados, enfocadas a la creación de condiciones
                        de trabajo seguras y saludables.</p>
                </div>
            </div>
        </section>
        <section class="bg-[#1F4690] grid grid-cols-2">
            <div class="flex items-center justify-center flex-col px-[105px]">
                <div>
                    <h2 class="section-title section-title--yellow">Visión</h2>
                    <p class="text text-white-150 font-gordita-regular">Nuestra visión es ser una institución de
                        excelencia,
                        posicionada a nivel
                        nacional y líder en el desarrollo de Sistemas de Gestión de Seguridad y Salud en el Trabajo y
                        competencias laborales, a través de asesorías y capacitaciones de alto valor, que impulsen el
                        cambio
                        hacia prácticas laborales responsables, sostenibles y comprometidas con la seguridad y salud
                        ocupacional.</p>
                </div>
            </div>
            <img src="<?php echo IMG ?>/Quienes somos/Grupo 149.jpg" alt="" />
        </section>
    </div>
</div>

<section class="page-section page-section--sm">
    <div class="container">
        <div class="bg-gray-50 px-16 py-16">
            <h2 class="section-title text-center">
                Valores
            </h2>
            <ul class="grid grid-cols-3 gap-20">
                <li>
                    <article class="flex flex-col gap-8 items-center">
                        <img class="w-[178px] h-[178px] object-cover rounded-full"
                            src="<?php echo IMG ?>/Quienes somos/integridad.png" alt="" class="rounded-full">
                        <h3 class="text-celeste-100 text-30 font-gordita-bold">Integridad</h3>
                        <p class="text-center text font-gordita-regular text-25 text-text-primary">“Siempre es el
                            momento apropiado para
                            hacer lo correcto”</p>
                    </article>
                </li>
                <li>
                    <article class="flex flex-col gap-8 items-center">
                        <img class="w-[178px] h-[178px] object-cover rounded-full"
                            src="<?php echo IMG ?>/Quienes somos/female-engineers-working-in-industry-factory-2022-02-24-15-39-20-utc.png">
                        <h3 class="text-celeste-100 text-30 font-gordita-bold">Integridad</h3>
                        <p class="text-center text font-gordita-regular text-25 text-text-primary">“Amamos lo que
                            hacemos, nuestro equipo busca con pasión la excelencia en nuestros servicios”</p>
                    </article>
                </li>
                <li>
                    <article class="flex flex-col gap-8 items-center">
                        <img class="w-[178px] h-[178px] object-cover rounded-full"
                            src="<?php echo IMG ?>/Quienes somos/metalwork-industry-worker-2021-12-09-20-23-49-utc.png">
                        <h3 class="text-celeste-100 text-30 font-gordita-bold">Integridad</h3>
                        <p class="text-center text font-gordita-regular text-25 text-text-primary">“Nos exigimos lo
                            mejor para superar los estándares y expectativas de nuestros clientes”</p>
                    </article>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="page-section page-section--sm">
    <div class="container">
        <div class="px-16 py-16">
            <h2 class="section-title section-title--m2 text-center">
                Nuestro Valor Agregado
            </h2>
            <div class="max-w-[90%] mx-auto">
                <ul>
                    <li class="border-t border-[#D8D8D8] py-10">
                        <div class="max-w-[90%] mx-auto flex gap-24 ">
                            <div class="w-[223px]">
                                <img src="<?php echo IMG ?>/Quienes somos/Grupo 150.jpg" alt="" class="max-w-[100%]">
                            </div>
                            <div class="mt-[1.5rem]">
                                <div class="grid grid-cols-[auto_1fr] gap-x-8 gap-y-2">
                                    <div
                                        class="bg-blue w-[98px] h-[98px] flex justify-center items-center rounded-full">
                                        <span class="text-yellow font-gordita-bold text-50">1</span>
                                    </div>
                                    <div class="flex items-center">
                                        <h3 class="text-30 font-gordita-bold text-celeste-100">PROFESIONALES</h3>
                                    </div>
                                    <div class="col-start-2">
                                        <p class="text-25 font-gordita-regular text-text-primary max-w-[648px]">Contamos
                                            con
                                            un equipo de ingenieros competentes y altamente calificados para la
                                            ejecución de nuestros servicios.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="border-t border-[#D8D8D8] py-10">
                        <div class="max-w-[90%] mx-auto flex gap-24 ">
                            <div class="w-[223px]">
                                <img src="<?php echo IMG ?>/Quienes somos/Grupo 151.jpg" alt="" class="max-w-[100%]">
                            </div>
                            <div class="mt-[1.5rem]">
                                <div class="grid grid-cols-[auto_1fr] gap-x-8 gap-y-2">
                                    <div
                                        class="bg-blue w-[98px] h-[98px] flex justify-center items-center rounded-full">
                                        <span class="text-yellow font-gordita-bold text-50">2</span>
                                    </div>
                                    <div class="flex items-center">
                                        <h3 class="text-30 font-gordita-bold text-celeste-100">ESTÁNDARES
                                            INTERNACIONALES</h3>
                                    </div>
                                    <div class="col-start-2">
                                        <p class="text-25 font-gordita-regular text-text-primary max-w-[648px]">Contamos
                                            con
                                            un equipo de ingenieros competentes y altamente calificados para la
                                            ejecución de nuestros servicios.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="border-t border-[#D8D8D8] py-10">
                        <div class="max-w-[90%] mx-auto flex gap-24 ">
                            <div class="w-[223px]">
                                <img src="<?php echo IMG ?>/Quienes somos/Grupo 152.jpg" alt="" class="max-w-[100%]">
                            </div>
                            <div class="mt-[1.5rem]">
                                <div class="grid grid-cols-[auto_1fr] gap-x-8 gap-y-2">
                                    <div
                                        class="bg-blue w-[98px] h-[98px] flex justify-center items-center rounded-full">
                                        <span class="text-yellow font-gordita-bold text-50">3</span>
                                    </div>
                                    <div class="flex items-center">
                                        <h3 class="text-30 font-gordita-bold text-celeste-100">ASESORÍA GRATUITA</h3>
                                    </div>
                                    <div class="col-start-2">
                                        <p class="text-25 font-gordita-regular text-text-primary max-w-[648px]">Contamos
                                            con
                                            un equipo de ingenieros competentes y altamente calificados para la
                                            ejecución de nuestros servicios.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php

get_footer();

?>