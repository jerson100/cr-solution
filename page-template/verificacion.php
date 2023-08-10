<?php
/*
    Template name: verificacion
*/
get_header();
?>

<div class="screen-top relative">
    <img src="<?php echo get_field("fondo_verificacion_page")["url"] ?>"
        alt="<?php echo get_field("fondo_verificacion_page")["alt"] ?>"
        title="<?php echo get_field("fondo_verificacion_page")["alt"] ?>"
        width="<?php echo get_field("fondo_verificacion_page")["width"] ?>"
        height="<?php echo get_field("fondo_verificacion_page")["height"] ?>"
        class="w-full h-full object-cover absolute left-0 top-0 z-[1]" />
    <div class="container">
        <div class="max-w-[85%] w-full min-h-[264px] py-12 flex items-center justify-start">
            <h1 class="section-title section-title--xl section-title--white z-[2] relative text-white-150">
                <?php echo get_field("titulo_verificacion_page") ?>
            </h1>
        </div>
    </div>
</div>
<div class="page-section page-section--sm">
    <div class="container">
        <div
            class="pl-[71px] pt-[163px] pb-[61px] pr-[135px] from-[#1F4690] to-[#0D1C39] bg-gradient-to-b rounded-[20px]">
            <div class="grid grid-cols-2 gap-[119px] mb-36">
                <div class="flex items-center">
                    <div
                        class="flex gap-4 items-center h-[61px] bg-white px-5 py-1 rounded-[10px] w-full self-end -translate-y-[60%] focus-within:flex-row-reverse">
                        <svg xmlns="http://www.w3.org/2000/svg" width="39.333" height="39.333"
                            viewBox="0 0 39.333 39.333">
                            <g id="magnifier-1_icon-icons.com_56924_1_" data-name="magnifier-1_icon-icons.com_56924 (1)"
                                transform="translate(-0.001)">
                                <g id="Grupo_24" data-name="Grupo 24" transform="translate(0.001)">
                                    <path id="Trazado_39" data-name="Trazado 39"
                                        d="M310.475,305.267l-9.024-9.024a17.37,17.37,0,0,1-5.215,5.214l9.024,9.024a3.687,3.687,0,0,0,5.214-5.214Z"
                                        transform="translate(-272.222 -272.228)" fill="#1f4690" />
                                    <path id="Trazado_40" data-name="Trazado 40"
                                        d="M29.5,14.75A14.75,14.75,0,1,0,14.751,29.5,14.751,14.751,0,0,0,29.5,14.75ZM14.751,25.812A11.062,11.062,0,1,1,25.814,14.75,11.074,11.074,0,0,1,14.751,25.812Z"
                                        transform="translate(-0.001)" fill="#1f4690" />
                                    <path id="Trazado_41" data-name="Trazado 41"
                                        d="M75.817,84.42h2.458a6.153,6.153,0,0,1,6.146-6.146V75.816A8.615,8.615,0,0,0,75.817,84.42Z"
                                        transform="translate(-69.671 -69.67)" fill="#1f4690" />
                                </g>
                            </g>
                        </svg>
                        <input alt="" placeholder="Ingrese su DNI"
                            class="font-gordita-medium text-18 text-celeste-100 border-none outline-none h-full w-full placeholder:text-celeste-100" />
                    </div>
                </div>
                <div class="flex items-center verification__description">
                    <?php echo get_field("descripcion_verificacion_page") ?>
                </div>
            </div>
            <div class="flex justify-center mb-[60px]">
                <button class="button" id="btn-aceptar-verificacion">Aceptar</button>
            </div>
            <div class="grid-cols-[1fr_auto] max-w-[1018px] mx-auto rounded-[20px] bg-[#D9D9D9] px-[51px] py-[56px] gap-[91px] hidden"
                id="details-form">
                <form class="flex flex-col gap-4">
                    <input type="text"
                        class="font-gordita-regular text-18 leading-[30px] text-celeste-100 h-[51px] bg-white placeholder:text-celeste-100 rounded-[15px] px-7 py-4 w-full block"
                        placeholder="Correo Electrónico" />
                    <input type="text"
                        class="font-gordita-regular text-18 leading-[30px] text-celeste-100 h-[51px] bg-white placeholder:text-celeste-100 rounded-[15px] px-7 py-4 w-full block"
                        placeholder="Nombre" />
                    <input type="text"
                        class="font-gordita-regular text-18 leading-[30px] text-celeste-100 h-[51px] bg-white placeholder:text-celeste-100 rounded-[15px] px-7 py-4 w-full block"
                        placeholder="Fecha" />
                    <input type="text"
                        class="font-gordita-regular text-18 leading-[30px] text-celeste-100 h-[51px] bg-white placeholder:text-celeste-100 rounded-[15px] px-7 py-4 w-full block"
                        placeholder="Capacitación" />
                    <input type="text"
                        class="font-gordita-regular text-18 leading-[30px] text-celeste-100 h-[51px] bg-white placeholder:text-celeste-100 rounded-[15px] px-7 py-4 w-full block"
                        placeholder="Vigencia" />
                    <div class="flex justify-center">
                        <button class="button">Descargar certificado</button>
                    </div>
                </form>
                <div class="flex items-center">
                    <div class="w-[330px] h-[330px] bg-[#313131] rounded-[20px]"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>