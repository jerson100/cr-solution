<?php
/*
    Template name: inicio
*/

get_header();
?>

<div class="main-banner bg-opacity-25 screen-top h-screen-top">
    <div class="container min-h-[inherit]">
        <div class="grid grid-cols-2 py-10 min-h-[inherit]">
            <div class="flex items-center">
                <div class="flex flex-col gap-4 items-start text-white">
                    <h1 class="text-[57px] leading-[84px] uppercase font-gordita-black">
                        BIENVENIDOS AL EPICENTRO DE LA SEGURIDAD LABORAL
                    </h1>
                    <div class="bg-[#0097B2] px-4 py-2 rounded-md font-gordita-medium">
                        <p class="text-[29px] leading-[34px] max-w-[470px]">¡PROTEGIENDO VIDAS, CONSTRUYENDO EL FUTURO!
                        </p>
                    </div>
                </div>
            </div>
            <div class=" relative">
                <div class="absolute right-[-8%] z-[1]">
                    <div>
                        <img src="<?php echo IMG ?>/Inicio/HERRAMIENTAS.jpg" alt=""
                            class="w-[600px] h-[400px] object-cover rounded-xl" />
                        <p
                            class="uppercase text-white font-gordita-black text-[28px] leading-[33px] px-8 py-7 bg-blue inline-flex absolute bottom-[16%] right-0">
                            Herramientas</p>
                    </div>
                </div>
                <div class="absolute bottom-0 left-[-5%]">
                    <div>
                        <img src="<?php echo IMG ?>/Inicio/ASESORIA.jpg"
                            class="w-[600px] h-[400px] object-cover rounded-xl" alt="">
                        <p
                            class="uppercase text-white font-gordita-black text-[28px] leading-[33px] px-8 py-7 bg-blue absolute bottom-[16%] left-0">
                            Asesoría
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="bg-white page-section">
    <div class="container">
        <div class="flex justify-between">
            <div class="flex items-center w-[40%]">
                <div class="flex flex-col">
                    <h2 class="section-title">¿Quiénes somos?</h2>
                    <p class="section-text mb-8">
                        Somos una empresa especializada en Asesoría, Capacitación y
                        Entrenamiento en Seguridad y Salud Ocupacional, enfocados a la
                        creación de condiciones de trabajo seguros y eficientes.
                    </p>
                    <div>

                        <a href=" #" class="button">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center relative w-[45%]">
                <div class="bg-celeste-50 absolute left-[-20px] top-[20px] h-full w-full rounded-xl"></div>
                <img src="<?php echo IMG ?>/Inicio/concepto-trabajar-equipo-tres-arquitectos.jpg" alt=""
                    class="rounded-xl z-[1]" />
            </div>
        </div>
    </div>
</section>

<?php
global $wp_query;
$wp_query = new WP_Query(
    array(
        'post_type' => 'servicio',
        'posts_per_page' => 100,
        'post_status' => 'publish'
    )
);
?>

<?php if (have_posts()): ?>
    <section class="page-section bg-[#F2F2F2]">
        <div class="container">
            <div class="flex flex-col gap-8">
                <div class="max-w-[1088px] w-full mx-auto text-center mb-8">
                    <h2 class="section-title">Servicios</h2>
                    <div class="flex justify-center">
                        <p class="section-text">
                            Prioriza la seguridad laboral de tu equipo y descubre nuestras
                            soluciones especializadas para un entorno laboral más seguro y
                            eficiente. ¡No dejes que los riesgos te detengan!
                        </p>
                    </div>
                </div>
                <!-- <div
                id="servicios"
                class="grid grid-cols-4 gap-10 [&>div>div>p]:text-[20px] [&>article]:h-[364px] [&>article>img]:h-full [&>article>img]:w-full [&>article>img]:object-cover [&>article>img]:object-top [&>article]:rounded-xl [&>article]:overflow-hidden [&>article]:shadow-custom [&>article>div]:absolute [&>article>div]:bottom-0 [&>article]:relative services"> -->
                <div class="splide" aria-label="Servicios" id="servicios">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php while (have_posts()):
                                the_post(); ?>
                                <li
                                    class="splide__slide [&>div>div>p]:text-[20px] [&>article]:h-[364px] [&>article>img]:h-full [&>article>img]:w-full [&>article>img]:object-cover [&>article>img]:object-top [&>article]:rounded-xl [&>article]:overflow-hidden [&>article]:shadow-custom [&>article>div]:absolute [&>article>div]:bottom-0 [&>article]:relative">
                                    <article class="flex flex-col services__item">
                                        <?php
                                        $thumbID = get_post_thumbnail_id($post->ID);
                                        $imgDestacada = wp_get_attachment_image_src($thumbID, 'thumbnail');
                                        echo '<img src="' . $imgDestacada[0] . '" alt="' . get_the_title() . '" title="' . get_the_title() . '">';
                                        ?>
                                        <div class="px-6 py-4 h-[105px] relative services__content">
                                            <div
                                                class="from-[#1F4690] to-[#000000] flex-grow opacity-90 absolute h-full w-full left-0 top-0 bg-gradient-to-b services__bg">
                                            </div>
                                            <div class="relative z-[1]">
                                                <div class="flex items-center justify-center">
                                                    <h3 class="text-white font-gordita-bold text text-center line-clamp-3">
                                                        <?php echo get_the_title(); ?>
                                                    </h3>
                                                </div>
                                                <div class="hidden services__description justify-center">
                                                    <p class="text-white text-center mt-4 line-clamp-6">
                                                        <?php the_excerpt(); ?>
                                                    </p>
                                                    <div class="flex justify-center">
                                                        <a href="<?php the_permalink(); ?>" class="button">Ver más</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </section>
<?php endif; ?>
<?php get_template_part("inc/plantillas_gratis.php"); ?>
<section class="page-section bg-white">
    <div class="container">
        <div class="flex flex-col">
            <h2 class="section-title text-center w-full">
                Empresas que confían en nosotros:
            </h2>
            <div class="relative">
                <div
                    class="absolute z-[2] left-0 top-1/2 -translate-y-1/2 h-full w-[200px] bg-gradient-to-r from-[18%] from-white to-transparent">
                </div>
                <div
                    class="absolute z-[2] right-0 top-1/2 -translate-y-1/2 h-full w-[200px] bg-gradient-to-l from-[18%] from-white to-transparent">
                </div>
                <div class="splide z-[1]" id="confianNosotros">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
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
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-section bg-[#F2F2F2]">
    <div class="container">
        <div class="grid grid-cols-[400px_auto] gap-10">
            <div class="flex items-end">
                <div class="flex flex-col">
                    <h2 class="section-title">Capacitaciones destacadas</h2>
                    <p class="section-text">
                        ¡Desafía tus límites y obtén la certificación en trabajos de
                        alto riesgo para garantizar tu seguridad laboral! Explora
                        nuestros cursos y prepárate para afrontar los riesgos y desafíos
                        con confianza y conocimiento.
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-8">
                <article class="shadow-md">
                    <img src="" alt="" />
                    <div class="p-4 bg-white">
                        <h3 class="text-[20px] leading-[25px] mb-6">
                            Trabajos en caliente y protección contra incendios
                        </h3>
                        <p class="text-[18px]">Virtual 14 de junio</p>
                        <div class="flex justify-center">
                            <a href="#" class="button">Ver más</a>
                        </div>
                    </div>
                </article>
                <article class="shadow-md">
                    <img src="" alt="" />
                    <div class="p-4 bg-white">
                        <h3 class="text-[20px] leading-[25px] mb-6">
                            Trabajos en altura y protección contra caídas
                        </h3>
                        <p class="text-[18px]">Virtual 14 de junio</p>
                        <div class="flex justify-center">
                            <a href="#" class="button">Ver más</a>
                        </div>
                    </div>
                </article>
                <article class="shadow-md">
                    <img src="" alt="" />
                    <div class="p-4 bg-white">
                        <h3 class="text-[20px] leading-[25px] mb-6">
                            Trabajos en espacios confinados
                        </h3>
                        <p class="text-[18px]">Virtual 14 de junio</p>
                        <div class="flex justify-center">
                            <a href="#" class="button">Ver más</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<section class="page-section bg-[#FFFFFF]">
    <div class="container">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <h2 class="section-title">Blog</h2>
            <p class="section-text">
                El conocimiento es poder, y en nuestro blog encontrarás la llave que
                te abrirá las puertas hacia un futuro laboral más seguro y exitoso.
            </p>
        </div>
        <div class="splide" id="blog-slider">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php
                    $i = 1;
                    while ($i++ <= 5) { ?>
                        <li class="splide__slide shadow-sm">
                            <article>
                                <div class="relative">
                                    <ul class="absolute left-0 top-2">
                                        <span>+</span>
                                        <span>-</span>
                                    </ul>
                                    <img src="/cr_solutions/wp-content/themes/theme_invitro/images/Inicio/hombre-vista-posterior-equipo-seguridad.jpg"
                                        alt="" class="w-full h-[317px] object-cover object-center" />
                                </div>
                                <div class="p-4">
                                    <h3 class="mb-4">Lorem ipsum dolor</h3>
                                    <p class="line-clamp-2 mb-4">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                        Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                                        natoque penatibus et magnis dis parturient montes, nascetur
                                        ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                                        eu, pretium quis, sem. Nulla consequat massa quis enim. Donec
                                        pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                                        In enim jus
                                    </p>
                                    <a href="#" class="button">Ver más</a>
                                </div>
                            </article>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<?php //get_template_part('inc/section');?>

<?php get_footer(); ?>