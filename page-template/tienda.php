<?php
/*
    Template Name: tienda
*/
get_header();
?>

<div class="screen-top relative">
    <img src="<?php echo get_field("fondo_pagina_tienda")["url"] ?>"
        alt="<?php echo get_field("fondo_pagina_tienda")["alt"] ?>"
        width="<?php echo get_field("fondo_pagina_tienda")["width"] ?>"
        height="<?php echo get_field("fondo_pagina_tienda")["height"] ?>"
        class="w-full h-full object-cover absolute left-0 top-0 z-[1] object-right" />
    <div class="containerc">
        <div
            class="laptop:max-w-[85%] w-full min-h-[160px] py-4 tablet:min-h-[200px] laptop:min-h-[230px] desktop-large:min-h-[264px] laptop:py-12 flex items-center justify-start">
            <h1 class="section-title section-title--white z-[2] relative text-white-150 margin-b-0">
                <?php echo get_field("titulo_pagina_tienda") ?>
            </h1>
        </div>
    </div>
</div>

<div class="page-section bg-white-150">
    <div class="containerc">
        <div
            class="grid grid-cols-1 gap-8 laptop:grid-cols-[450px_1fr] desktop-middle:grid-cols-2 desktop-middle:gap-14">
            <div class="flex flex-col gap-8">
                <div class="grid grid-cols-[1fr_auto] gap-3">
                    <div class="bg-[#313131] rounded-[10px] shadow-custom"></div>
                    <ul class="flex flex-col gap-3">
                        <?php $i = 0;
                        while ($i++ < 4): ?>
                            <li
                                class="w-[70px] h-[60px] tablet:w-[90px] tablet:h-[75px] desktop-middle:w-[100px] desktop-middle:h-[85px] desktop-large:w-[143px] desktop-large:h-[115px] bg-[#313131] rounded-[10px] shadow-custom">
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
                <ul class="flex gap-4 justify-center flex-wrap">
                    <li>
                        <button class="button button--celeste button-rounded-sm"><svg
                                class="w-[18px] desktop-middle:w-[24px] desktop-large:w-[auto]"
                                xmlns="http://www.w3.org/2000/svg" width="25.31" height="22.146"
                                viewBox="0 0 25.31 22.146">
                                <path id="collection_icon_160223"
                                    d="M22.937,21.064H2.373a.791.791,0,0,1-.791-.791V9.2a.791.791,0,0,1,.791-.791H22.937a.791.791,0,0,1,.791.791V20.273A.791.791,0,0,1,22.937,21.064ZM2.373,22.646A2.373,2.373,0,0,1,0,20.273V9.2A2.373,2.373,0,0,1,2.373,6.827H22.937A2.373,2.373,0,0,1,25.31,9.2V20.273a2.373,2.373,0,0,1-2.373,2.373ZM3.164,4.455a.791.791,0,0,0,.791.791h17.4a.791.791,0,0,0,0-1.582H3.955A.791.791,0,0,0,3.164,4.455ZM6.327,1.291a.791.791,0,0,0,.791.791H18.191a.791.791,0,0,0,0-1.582H7.118a.791.791,0,0,0-.791.791Z"
                                    transform="translate(0 -0.5)" fill="#fff" fill-rule="evenodd" />
                            </svg>Añadir a
                            colección</button>
                    </li>
                    <li><button class="button button--celeste button-rounded-sm"><svg
                                class="w-[18px] desktop-middle:w-[24px] desktop-large:w-[auto]"
                                xmlns="http://www.w3.org/2000/svg" width="25.2" height="21.371"
                                viewBox="0 0 25.2 21.371">
                                <g id="Layer_54" data-name="Layer 54" transform="translate(0 0)">
                                    <path id="Trazado_89" data-name="Trazado 89"
                                        d="M13.613,24.66a2.521,2.521,0,0,1-1.79-.74L3.168,15.265A7.328,7.328,0,0,1,1.05,10.013,6.773,6.773,0,0,1,7.89,3.29,6.773,6.773,0,0,1,12.773,5.3l.84.84L14.3,5.45h0A7.051,7.051,0,0,1,23.546,4.7a6.933,6.933,0,0,1,.681,10.387L15.4,23.921a2.521,2.521,0,0,1-1.79.74ZM7.857,4.962a5.143,5.143,0,0,0-3.58,1.445,5.042,5.042,0,0,0-1.546,3.639A5.647,5.647,0,0,0,4.369,14.08l8.656,8.656a.84.84,0,0,0,1.193,0L23.05,13.9a5.252,5.252,0,0,0,1.487-4.034A5.193,5.193,0,0,0,22.5,6.038a5.353,5.353,0,0,0-7.034.6L14.21,7.92a.84.84,0,0,1-1.193,0L11.588,6.492a5.277,5.277,0,0,0-3.7-1.529Z"
                                        transform="translate(-1.049 -3.29)" fill="#fff" />
                                </g>
                            </svg>
                            Favoritos</button></li>
                    <li>
                        <button class="button button--celeste button-rounded-sm"><svg
                                class="w-[18px] desktop-middle: desktop-large:w-[auto]"
                                xmlns="http://www.w3.org/2000/svg" width="19.727" height="21.371"
                                viewBox="0 0 19.727 21.371">
                                <g id="share-social-interface-button_icon-icons.com_73164" transform="translate(0 0)">
                                    <g id="_x35__27_" transform="translate(0 0)">
                                        <g id="Grupo_57" data-name="Grupo 57">
                                            <path id="Trazado_90" data-name="Trazado 90"
                                                d="M41.117,13.151a4.1,4.1,0,0,0-3.455,1.9l-4.4-2.515A3.863,3.863,0,0,0,33.526,9.5l4.579-2.616a4.1,4.1,0,1,0-1.1-2.778A4.072,4.072,0,0,0,37.2,5.291L32.621,7.908a4.114,4.114,0,1,0-.53,6.033l-.016.032,4.976,2.844a4.166,4.166,0,0,0-.044.444,4.11,4.11,0,1,0,4.11-4.11Zm0-11.507A2.466,2.466,0,1,1,38.651,4.11,2.466,2.466,0,0,1,41.117,1.644ZM29.61,13.151a2.466,2.466,0,1,1,2.466-2.466A2.466,2.466,0,0,1,29.61,13.151Zm11.507,6.576a2.466,2.466,0,1,1,2.466-2.466A2.466,2.466,0,0,1,41.117,19.727Z"
                                                transform="translate(-25.5)" fill="#fff" />
                                        </g>
                                    </g>
                                </g>
                            </svg>Compartir</button>
                    </li>
                </ul>
            </div>
            <div class="mx-auto laptop:mx-[initial] max-w-[532px]">
                <h1 class="font-gordita-bold text-30 text-blue mb-4 laptop:mb-2 text-center laptop:text-left">Nombre de
                    la plantilla
                </h1>
                <p class="text-20 font-gordita-regular text-text-primary text-left mb-3">Descripción de la
                    plantilla Lorem
                    ipsum dolor
                    sit amet,
                    consectetuer adipiscing elit. Aenean commodo
                    ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                    nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla
                    consequat massa quis enim.</p>
                <div class="flex gap-2 items-center mb-16">
                    <ul class="flex gap-1">
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="23" viewBox="0 0 24 23">
                                <g id="Polígono_8" data-name="Polígono 8" fill="#fff026">
                                    <path
                                        d="M 18.5360050201416 21.7810173034668 L 12.28491973876953 17.44615936279297 L 12 17.24858093261719 L 11.71508026123047 17.44615936279297 L 5.463995456695557 21.7810173034668 L 7.6255202293396 14.44466018676758 L 7.722169876098633 14.11662006378174 L 7.451499938964844 13.9076099395752 L 1.418455958366394 9.248837471008301 L 9.012880325317383 9.053179740905762 L 9.357669830322266 9.044300079345703 L 9.471819877624512 8.718839645385742 L 12 1.510703921318054 L 14.52818012237549 8.718839645385742 L 14.64233016967773 9.044300079345703 L 14.98711967468262 9.053179740905762 L 22.58154487609863 9.248837471008301 L 16.54850006103516 13.9076099395752 L 16.27783012390137 14.11662006378174 L 16.37447929382324 14.44466018676758 L 18.5360050201416 21.7810173034668 Z"
                                        stroke="none" />
                                    <path
                                        d="M 12 3.021398544311523 L 9.715330123901367 9.535249710083008 L 2.8369140625 9.712465286254883 L 8.298430442810059 13.92990016937256 L 6.344387054443359 20.56204605102539 L 12 16.6401195526123 L 17.65561294555664 20.56204605102539 L 15.70156955718994 13.92990016937256 L 21.1630859375 9.712465286254883 L 14.28466987609863 9.535249710083008 L 12 3.021398544311523 M 12 0 L 15 8.553350448608398 L 24 8.785220146179199 L 16.85409927368164 14.3033504486084 L 19.41641044616699 23 L 12 17.85704040527344 L 4.583589553833008 23 L 7.145900726318359 14.3033504486084 L 0 8.785220146179199 L 9 8.553350448608398 L 12 0 Z"
                                        stroke="none" fill="#fff026" />
                                </g>
                            </svg>
                        </li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="23" viewBox="0 0 24 23">
                                <g id="Polígono_8" data-name="Polígono 8" fill="#fff026">
                                    <path
                                        d="M 18.5360050201416 21.7810173034668 L 12.28491973876953 17.44615936279297 L 12 17.24858093261719 L 11.71508026123047 17.44615936279297 L 5.463995456695557 21.7810173034668 L 7.6255202293396 14.44466018676758 L 7.722169876098633 14.11662006378174 L 7.451499938964844 13.9076099395752 L 1.418455958366394 9.248837471008301 L 9.012880325317383 9.053179740905762 L 9.357669830322266 9.044300079345703 L 9.471819877624512 8.718839645385742 L 12 1.510703921318054 L 14.52818012237549 8.718839645385742 L 14.64233016967773 9.044300079345703 L 14.98711967468262 9.053179740905762 L 22.58154487609863 9.248837471008301 L 16.54850006103516 13.9076099395752 L 16.27783012390137 14.11662006378174 L 16.37447929382324 14.44466018676758 L 18.5360050201416 21.7810173034668 Z"
                                        stroke="none" />
                                    <path
                                        d="M 12 3.021398544311523 L 9.715330123901367 9.535249710083008 L 2.8369140625 9.712465286254883 L 8.298430442810059 13.92990016937256 L 6.344387054443359 20.56204605102539 L 12 16.6401195526123 L 17.65561294555664 20.56204605102539 L 15.70156955718994 13.92990016937256 L 21.1630859375 9.712465286254883 L 14.28466987609863 9.535249710083008 L 12 3.021398544311523 M 12 0 L 15 8.553350448608398 L 24 8.785220146179199 L 16.85409927368164 14.3033504486084 L 19.41641044616699 23 L 12 17.85704040527344 L 4.583589553833008 23 L 7.145900726318359 14.3033504486084 L 0 8.785220146179199 L 9 8.553350448608398 L 12 0 Z"
                                        stroke="none" fill="#fff026" />
                                </g>
                            </svg>
                        </li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="23" viewBox="0 0 24 23">
                                <g id="Polígono_8" data-name="Polígono 8" fill="#fff026">
                                    <path
                                        d="M 18.5360050201416 21.7810173034668 L 12.28491973876953 17.44615936279297 L 12 17.24858093261719 L 11.71508026123047 17.44615936279297 L 5.463995456695557 21.7810173034668 L 7.6255202293396 14.44466018676758 L 7.722169876098633 14.11662006378174 L 7.451499938964844 13.9076099395752 L 1.418455958366394 9.248837471008301 L 9.012880325317383 9.053179740905762 L 9.357669830322266 9.044300079345703 L 9.471819877624512 8.718839645385742 L 12 1.510703921318054 L 14.52818012237549 8.718839645385742 L 14.64233016967773 9.044300079345703 L 14.98711967468262 9.053179740905762 L 22.58154487609863 9.248837471008301 L 16.54850006103516 13.9076099395752 L 16.27783012390137 14.11662006378174 L 16.37447929382324 14.44466018676758 L 18.5360050201416 21.7810173034668 Z"
                                        stroke="none" />
                                    <path
                                        d="M 12 3.021398544311523 L 9.715330123901367 9.535249710083008 L 2.8369140625 9.712465286254883 L 8.298430442810059 13.92990016937256 L 6.344387054443359 20.56204605102539 L 12 16.6401195526123 L 17.65561294555664 20.56204605102539 L 15.70156955718994 13.92990016937256 L 21.1630859375 9.712465286254883 L 14.28466987609863 9.535249710083008 L 12 3.021398544311523 M 12 0 L 15 8.553350448608398 L 24 8.785220146179199 L 16.85409927368164 14.3033504486084 L 19.41641044616699 23 L 12 17.85704040527344 L 4.583589553833008 23 L 7.145900726318359 14.3033504486084 L 0 8.785220146179199 L 9 8.553350448608398 L 12 0 Z"
                                        stroke="none" fill="#fff026" />
                                </g>
                            </svg>
                        </li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="23" viewBox="0 0 24 23">
                                <g id="Polígono_8" data-name="Polígono 8" fill="#fff026">
                                    <path
                                        d="M 18.5360050201416 21.7810173034668 L 12.28491973876953 17.44615936279297 L 12 17.24858093261719 L 11.71508026123047 17.44615936279297 L 5.463995456695557 21.7810173034668 L 7.6255202293396 14.44466018676758 L 7.722169876098633 14.11662006378174 L 7.451499938964844 13.9076099395752 L 1.418455958366394 9.248837471008301 L 9.012880325317383 9.053179740905762 L 9.357669830322266 9.044300079345703 L 9.471819877624512 8.718839645385742 L 12 1.510703921318054 L 14.52818012237549 8.718839645385742 L 14.64233016967773 9.044300079345703 L 14.98711967468262 9.053179740905762 L 22.58154487609863 9.248837471008301 L 16.54850006103516 13.9076099395752 L 16.27783012390137 14.11662006378174 L 16.37447929382324 14.44466018676758 L 18.5360050201416 21.7810173034668 Z"
                                        stroke="none" />
                                    <path
                                        d="M 12 3.021398544311523 L 9.715330123901367 9.535249710083008 L 2.8369140625 9.712465286254883 L 8.298430442810059 13.92990016937256 L 6.344387054443359 20.56204605102539 L 12 16.6401195526123 L 17.65561294555664 20.56204605102539 L 15.70156955718994 13.92990016937256 L 21.1630859375 9.712465286254883 L 14.28466987609863 9.535249710083008 L 12 3.021398544311523 M 12 0 L 15 8.553350448608398 L 24 8.785220146179199 L 16.85409927368164 14.3033504486084 L 19.41641044616699 23 L 12 17.85704040527344 L 4.583589553833008 23 L 7.145900726318359 14.3033504486084 L 0 8.785220146179199 L 9 8.553350448608398 L 12 0 Z"
                                        stroke="none" fill="#fff026" />
                                </g>
                            </svg>
                        </li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="23" viewBox="0 0 24 23">
                                <g id="Polígono_4" data-name="Polígono 4" fill="none">
                                    <path
                                        d="M12,0l3,8.553,9,.232L16.854,14.3,19.416,23,12,17.857,4.584,23l2.562-8.7L0,8.785l9-.232Z"
                                        stroke="none" />
                                    <path
                                        d="M 12 3.021398544311523 L 9.715330123901367 9.535249710083008 L 2.8369140625 9.712465286254883 L 8.298430442810059 13.92990016937256 L 6.344387054443359 20.56204605102539 L 12 16.6401195526123 L 17.65561294555664 20.56204605102539 L 15.70156955718994 13.92990016937256 L 21.1630859375 9.712465286254883 L 14.28466987609863 9.535249710083008 L 12 3.021398544311523 M 12 0 L 15 8.553350448608398 L 24 8.785220146179199 L 16.85409927368164 14.3033504486084 L 19.41641044616699 23 L 12 17.85704040527344 L 4.583589553833008 23 L 7.145900726318359 14.3033504486084 L 0 8.785220146179199 L 9 8.553350448608398 L 12 0 Z"
                                        stroke="none" fill="#8e8e8e" />
                                </g>
                            </svg>

                        </li>
                    </ul>
                    <span class="font-gordita-regular text-15 text-celeste-100">25 visulizaciones</span>
                </div>
                <div class="flex justify-center flex-col items-center gap-4">
                    <button class="button button-size-md">Descargar <svg xmlns="http://www.w3.org/2000/svg" width="42"
                            height="41" viewBox="0 0 42 41">
                            <g id="download" transform="translate(0.409 0.01)">
                                <rect id="Rectángulo_230" data-name="Rectángulo 230" width="42" height="41"
                                    transform="translate(-0.409 -0.01)" fill="#fff026" opacity="0" />
                                <rect id="Rectángulo_231" data-name="Rectángulo 231" width="28" height="3" rx="1"
                                    transform="translate(6.591 30.99)" fill="#fff026" />
                                <rect id="Rectángulo_232" data-name="Rectángulo 232" width="7" height="4" rx="1"
                                    transform="translate(6.591 33.99) rotate(-90)" fill="#fff026" />
                                <rect id="Rectángulo_233" data-name="Rectángulo 233" width="7" height="4" rx="1"
                                    transform="translate(30.591 33.99) rotate(-90)" fill="#fff026" />
                                <path id="Trazado_51" data-name="Trazado 51"
                                    d="M15.58,18.579a1.716,1.716,0,0,1-1-.309L7.722,13.431a1.716,1.716,0,1,1,1.99-2.8l5.868,4.1,5.833-4.392a1.716,1.716,0,1,1,2.059,2.745l-6.863,5.147a1.716,1.716,0,0,1-1.029.343Z"
                                    transform="translate(5.009 7.157)" fill="#fff026" />
                                <path id="Trazado_52" data-name="Trazado 52"
                                    d="M12.716,20.157A1.716,1.716,0,0,1,11,18.442V4.716a1.716,1.716,0,1,1,3.431,0V18.442A1.716,1.716,0,0,1,12.716,20.157Z"
                                    transform="translate(7.873 2.147)" fill="#fff026" />
                            </g>
                        </svg>
                    </button>
                    <p class="font-gordita-regular text-18 text-[#8E8E8E]">Tipo de archivo: PDF, JPG, Word</p>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="bg-[#D9D9D9] page-section page-section--sm">
    <div class="containerc">
        <h2 class="text-blue font-gordita-bold text-30 mb-10">Puede que también te interese</h2>
        <div class="splide custom-splide" role="group" aria-label="Splide Basic HTML Example"
            id="splide-mas-plantillas">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php
                    $count = 0;
                    while ($count++ < 10):
                        ?>
                        <li class="splide__slide">
                            <div
                                class="bg-[#313131] mx-[.3rem] mb-[.4rem] w-full h-[200px] laptop:h-[230px] desktop-large:h-[266px] relative rounded-[10px] shadow-custom">
                                <div
                                    class="absolute bottom-0 left-0 w-full bg-white-150 flex justify-center px-4 py-4 rounded-[10px] shadow-custom">
                                    <div class="flex gap-4">
                                        <button>
                                            <img src="<?php echo IMG ?>/Plantillas/bookmarks.svg" class="h-[24px]" />
                                        </button>
                                        <button>
                                            <img src="<?php echo IMG ?>/Plantillas/downloade.svg" class="h-[24px]" />
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>