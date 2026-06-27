<!DOCTYPE html>
<html class="scroll-smooth" lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
    <title>Colocación de Prótesis - HAIRPRESTIGE</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            line-height: 1;
            text-transform: none;
            letter-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            direction: ltr;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(226, 232, 240, 0.5);
        }
        .before-after-overlay {
            transition: opacity 0.4s ease;
        }
        .image-container:hover .before-after-overlay {
            opacity: 1;
        }
        .before-after-container { position: relative; width: 100%; overflow: hidden; }
        .slider-handle { position: absolute; top: 0; bottom: 0; width: 4px; background: white; cursor: ew-resize; z-index: 10; left: 50%; transform: translateX(-50%); }
        .slider-handle::after { content: '↔'; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 40px; height: 40px; background: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; box-shadow: 0 4px 6px rgba(0,0,0,0.1); color: #006591; }
        .comparison-img { position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; }
        .before-img { z-index: 1; }
        .after-img { z-index: 2; clip-path: inset(0 0 0 50%); }
        body {
          min-height: max(884px, 100dvh);
          -webkit-tap-highlight-color: transparent;
        }
    </style>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-tertiary-fixed": "#251a00",
                        "outline-variant": "#c6c6cd",
                        "tertiary-fixed": "#ffdf9d",
                        "on-error-container": "#93000a",
                        "secondary-fixed-dim": "#89ceff",
                        "surface-container-high": "#e6e8ea",
                        "on-error": "#ffffff",
                        "inverse-on-surface": "#eff1f3",
                        "surface-bright": "#f7f9fb",
                        "on-surface": "#191c1e",
                        "tertiary-container": "#251a00",
                        "secondary-fixed": "#c9e6ff",
                        "surface-tint": "#565e74",
                        "primary": "#000000",
                        "surface-container-low": "#f2f4f6",
                        "error": "#ba1a1a",
                        "on-primary-container": "#7c839b",
                        "on-error": "#ffffff",
                        "inverse-primary": "#bec6e0",
                        "error-container": "#ffdad6",
                        "on-secondary-fixed": "#001e2f",
                        "on-primary-fixed-variant": "#3f465c",
                        "inverse-surface": "#2d3133",
                        "secondary": "#006591",
                        "on-primary": "#ffffff",
                        "secondary-container": "#39b8fd",
                        "surface-container": "#eceef0",
                        "on-surface-variant": "#45464d",
                        "primary-fixed-dim": "#bec6e0",
                        "outline": "#76777d",
                        "on-secondary": "#ffffff",
                        "surface": "#f7f9fb",
                        "on-tertiary-container": "#9b8047",
                        "primary-container": "#131b2e",
                        "on-tertiary-fixed-variant": "#594410",
                        "background": "#f7f9fb",
                        "surface-variant": "#e0e3e5",
                        "on-secondary-container": "#004666",
                        "tertiary-fixed-dim": "#e2c383",
                        "surface-dim": "#d8dadc",
                        "on-secondary-fixed-variant": "#004c6e",
                        "surface-container-highest": "#e0e3e5",
                        "tertiary": "#000000",
                        "surface-container-lowest": "#ffffff",
                        "on-primary-fixed": "#131b2e",
                        "primary-fixed": "#dae2fd",
                        "on-background": "#191c1e"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "container-max": "1280px",
                        "gutter": "24px",
                        "margin-desktop": "48px",
                        "margin-mobile": "16px",
                        "base": "8px"
                    },
                    "fontFamily": {
                        "headline-lg": ["Hanken Grotesk"],
                        "body-md": ["Inter"],
                        "label-md": ["Inter"],
                        "headline-xl": ["Hanken Grotesk"],
                        "headline-md": ["Hanken Grotesk"],
                        "body-lg": ["Inter"],
                        "label-sm": ["Inter"],
                        "headline-lg-mobile": ["Hanken Grotesk"]
                    },
                    "fontSize": {
                        "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                        "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                        "label-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "500"}],
                        "headline-xl": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                        "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                        "label-sm": ["12px", {"lineHeight": "16px", "fontWeight": "600"}],
                        "headline-lg-mobile": ["28px", {"lineHeight": "36px", "fontWeight": "600"}]
                    }
                },
            },
        }
    </script>
</head>
<body class="bg-background text-on-surface font-body-md antialiased">

<!-- ========================================== -->
<!--            DESKTOP LAYOUT (md+)            -->
<!-- ========================================== -->
<div class="hidden md:block">
    <!-- TopNavBar -->
    <header class="fixed top-0 w-full z-50 bg-surface-container-lowest shadow-sm border-b border-outline-variant transition-all duration-300 ease-in-out">
        <div class="flex justify-between items-center px-margin-mobile md:px-margin-desktop py-4 max-w-container-max mx-auto">
            <a class="font-headline-md text-headline-md font-bold text-on-surface tracking-tight" href="/">HAIRPRESTIGE</a>
            <nav class="hidden md:flex items-center gap-8">
                <a class="text-on-surface-variant hover:text-secondary transition-colors font-label-md text-label-md" href="/">Inicio</a>
                <a class="text-on-surface-variant hover:text-secondary transition-colors font-label-md text-label-md" href="/tienda">Tienda</a>
                <a class="text-secondary font-bold border-b-2 border-secondary font-label-md text-label-md" href="/colocacion">Colocación</a>
                <a class="text-on-surface-variant hover:text-secondary transition-colors font-label-md text-label-md" href="/capacitaciones">Capacitaciones</a>
            </nav>
            <div class="flex items-center gap-4">
                <a href="https://wa.me/yournumber" target="_blank" class="hidden md:flex items-center gap-2 bg-secondary text-on-secondary px-6 py-2 rounded-lg font-label-md text-label-md hover:opacity-90 transition-opacity">
                    WhatsApp
                </a>
                <a href="/tienda" class="relative p-2 text-on-surface-variant hover:bg-surface-container-low rounded-full transition-all">
                    <span class="material-symbols-outlined">shopping_cart</span>
                </a>
            </div>
        </div>
    </header>

    <main class="pt-24">
        <!-- Hero Section: Servicio Profesional -->
        <section class="relative py-16 md:py-24 overflow-hidden">
            <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid md:grid-cols-2 gap-12 items-center">
                <div class="z-10">
                    <span class="inline-block px-4 py-1 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm mb-6 uppercase tracking-wider">Expertos en Capilaridad</span>
                    <h1 class="font-headline-xl text-headline-xl mb-6 text-primary">Servicio Profesional de Colocación</h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant mb-8 max-w-lg">
                        En HairPrestige, combinamos precisión médica con estética de alto nivel. Nuestro proceso de colocación garantiza un resultado indetectable, cómodo y totalmente personalizado a tu fisionomía.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a class="bg-secondary text-on-secondary px-8 py-4 rounded-lg font-label-md text-label-md font-bold shadow-md hover:scale-[1.02] transition-transform" href="#contacto-desktop">Agendar Evaluación</a>
                        <div class="flex items-center gap-3 px-6 py-4">
                            <span class="material-symbols-outlined text-secondary" style="font-variation-settings: 'FILL' 1;">verified</span>
                            <span class="font-label-md text-label-md text-on-surface-variant">Garantía de Naturalidad</span>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="aspect-[4/5] rounded-2xl overflow-hidden shadow-xl">
                        <img class="w-full h-full object-cover" data-alt="A professional hair restoration specialist applying a system." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBEbRWWDb8-rGADWK9s-b3tn1ZTEklohepfq6FJIgApc94u9a5EkB7u_3DUKzQr9iFBNclFWuAtT_LooVV7QDadIk4W7JKpbCim2aGd8mUJIkGxLbBzyjiWsRAXJjYV_-7nhq9XQ1iDHLqjAs2HxD3sGIwhPnAzBHzqcHG8UyVYP1Xh5DEJSfMqWNosKskgDBEYg3_qgQjUetScWvC_c7M6phiMGZXJk350XZUsaWxCEYPLLyTkj58sYw"/>
                    </div>
                    <div class="absolute -bottom-6 -left-6 glass-card p-6 rounded-xl shadow-lg hidden md:block">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-secondary-container rounded-full flex items-center justify-center text-on-secondary-container">
                                <span class="material-symbols-outlined">schedule</span>
                            </div>
                            <div>
                                <p class="font-label-md text-label-md font-bold">Proceso Express</p>
                                <p class="text-label-sm text-on-surface-variant">Listo en menos de 2 horas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Decorative Element -->
            <div class="absolute top-0 right-0 -z-10 opacity-10 translate-x-1/2">
                <svg fill="none" height="600" viewbox="0 0 600 600" width="600">
                    <circle cx="300" cy="300" fill="url(#grad1)" r="300"></circle>
                    <defs>
                        <radialgradient cx="0" cy="0" gradienttransform="translate(300 300) rotate(90) scale(300)" gradientunits="userSpaceOnUse" id="grad1" r="1">
                            <stop stop-color="#006591"></stop>
                            <stop offset="1" stop-color="#006591" stop-opacity="0"></stop>
                        </radialgradient>
                    </defs>
                </svg>
            </div>
        </section>

        <!-- Antes y Después Gallery -->
        <section class="bg-surface-container-low py-20">
            <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
                <div class="text-center mb-16">
                    <h2 class="font-headline-lg text-headline-lg mb-4 text-primary">Resultados Reales</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mx-auto">
                        La confianza se recupera con hechos. Explora nuestra galería de transformaciones logradas con nuestras prótesis premium y técnica de colocación avanzada.
                    </p>
                </div>
                <!-- Bento Grid Gallery -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
                    <!-- Gallery Item 1 -->
                    <div class="group relative overflow-hidden rounded-xl bg-surface-container-lowest shadow-sm h-[400px]">
                        <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="Swiss Lace before and after" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCD4mB-JSLMdkegD68e8cjJTiY_K-7DCIBmnfwu7Wg0olYO_bDgatK6W6LLS5nRUbulh5z6vLdtbuQOi3OoOgJtSUXGmYYIkroRCcw8dg0JXqKeq-R2XD-w5JCYuWazl7BYKSz95RJsYPBmd4nmFJB4mjN6jEiT4SLluXQisAba2f8PMMXKqkXnouXKNF6i3YYtXJIJlx_4QU5fsvg_fvZzrNULiDpZCQt93R4TK5hseYf5qjUeS9GeEg"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-6">
                            <span class="text-on-primary font-bold font-label-md">Sistema: Silk Base Premium</span>
                            <p class="text-on-primary/80 text-label-sm">Resultado 100% indetectable al tacto.</p>
                        </div>
                        <div class="absolute top-4 left-4 bg-white/90 px-3 py-1 rounded-full text-label-sm font-bold text-secondary shadow-sm">Antes &amp; Después</div>
                    </div>
                    <!-- Gallery Item 2 (Vertical Large) -->
                    <div class="group md:row-span-2 relative overflow-hidden rounded-xl bg-surface-container-lowest shadow-sm h-[400px] md:h-auto">
                        <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="Bio-Skin Integration" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFrMU2woYUo444K8CB1m5C7-BtV94WLDptXeL-VXI5kfUkkFRjMCT0j0yffk5D_K5in-X8LGl4gvPjeYv1SfoDqjBF5BOcwE7cxiwaEQrJVcJudu3UmWK19BzCR3R2J9doBnerAEiu4uzrbHll88xBp-It_0ZoMiuVdZdHcqe2NO9GLUCKM8_r5ASRFmAMvPH-JN2SDTKZgDfCYBaHZsaZChtQSdwBa57I2wudtTr7Mlu72YP3yIA-2Q"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-6">
                            <span class="text-on-primary font-bold font-label-md">Sistema: Bio-Skin Ultra Thin</span>
                            <p class="text-on-primary/80 text-label-sm">Diseñado para máxima transpirabilidad y confort diario.</p>
                        </div>
                        <div class="absolute top-4 left-4 bg-white/90 px-3 py-1 rounded-full text-label-sm font-bold text-secondary shadow-sm">Frontal Natural</div>
                    </div>
                    <!-- Gallery Item 3 -->
                    <div class="group relative overflow-hidden rounded-xl bg-surface-container-lowest shadow-sm h-[400px]">
                        <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="Modern styling result" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCix87i8pVGzUWXiZ0myNx82ipuA66Ccrbz01blB2HJQlMN9VzDlSUHn5S2zSg2_OxFaKAuAo-rG8PoIPu6lBP50Jnrl-0rks3_27QJtPqMg6H0Mzgb0J3SIO9pRM0xyi2qyEQr8gNxHMysB1RlwT0RShGzdzARQSrRr-7BdqIqaRj-07Vi5wWp6I2umUn5JPr9JaWl6JB6AKGXPROc4sw5goZni8nd1Lef7wfDNfm7tiNxo5UjE38woQ"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-6">
                            <span class="text-on-primary font-bold font-label-md">Corte &amp; Estilo Personalizado</span>
                            <p class="text-on-primary/80 text-label-sm">Nuestros estilistas adaptan el sistema a tu estilo de vida.</p>
                        </div>
                        <div class="absolute top-4 left-4 bg-white/90 px-3 py-1 rounded-full text-label-sm font-bold text-secondary shadow-sm">Estilo Moderno</div>
                    </div>
                    <!-- Gallery Item 4 -->
                    <div class="group relative overflow-hidden rounded-xl bg-surface-container-lowest shadow-sm h-[400px]">
                        <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="Lace detailing close-up" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCinJVLkIjkappP6kdOL35Wm1hV2kkclrh7IzdtQGC5cyPyoN5QwxCJUTTQnQamx3Ak1zclaUF2IV8XXuGLJwHqM0pE_rf0qKZtKBxEZhyjcUqlLcgJYfL6TiU6uAQf1RJwH4R1vinbF6aK-eLocLxHF7D2qjcWcD8PoQvagDtmBUlJliS8jw1XiS6jlH5o7tArCSCMs6lM18NGHyEkEZWJxHeLDP9Aw6gM5KtVihJcaWOqsQLIXkGfhw"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-6">
                            <span class="text-on-primary font-bold font-label-md">Tecnología de Unión Invisible</span>
                            <p class="text-on-primary/80 text-label-sm">Seguridad total para actividades deportivas y natación.</p>
                        </div>
                        <div class="absolute top-4 left-4 bg-white/90 px-3 py-1 rounded-full text-label-sm font-bold text-secondary shadow-sm">Detalle de Malla</div>
                    </div>
                </div>
                <div class="mt-12 text-center">
                    <button class="border-2 border-secondary text-secondary px-8 py-3 rounded-lg font-bold hover:bg-secondary hover:text-on-secondary transition-all">Ver Más Casos</button>
                </div>
            </div>
        </section>

        <!-- Formulario y Ubicación -->
        <section class="py-20 bg-surface-container-lowest" id="contacto-desktop">
            <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid md:grid-cols-2 gap-16">
                <!-- Info & Location Column -->
                <div>
                    <h2 class="font-headline-lg text-headline-lg mb-6 text-primary">Agenda tu Turno</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-10">
                        Nuestras colocaciones son programadas para garantizar la privacidad y el tiempo necesario para un acabado perfecto.
                    </p>
                    <div class="space-y-8">
                        <div class="flex gap-4">
                            <div class="w-12 h-12 flex-shrink-0 bg-surface-container rounded-full flex items-center justify-center">
                                <span class="material-symbols-outlined text-secondary">location_on</span>
                            </div>
                            <div>
                                <p class="font-bold text-on-surface">Ubicación</p>
                                <p class="text-on-surface-variant">Av. Corrientes 1234, CABA, Argentina</p>
                                <a class="text-secondary text-label-sm font-bold mt-1 inline-block hover:underline" href="#">Ver en Google Maps</a>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 flex-shrink-0 bg-surface-container rounded-full flex items-center justify-center">
                                <span class="material-symbols-outlined text-secondary">schedule</span>
                            </div>
                            <div>
                                <p class="font-bold text-on-surface">Horarios de Atención</p>
                                <ul class="text-on-surface-variant space-y-1">
                                    <li class="flex justify-between"><span>Lunes a Viernes:</span> <span>09:00 - 19:00</span></li>
                                    <li class="flex justify-between"><span>Sábados:</span> <span>10:00 - 14:00</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 flex-shrink-0 bg-surface-container rounded-full flex items-center justify-center">
                                <span class="material-symbols-outlined text-secondary">contact_support</span>
                            </div>
                            <div>
                                <p class="font-bold text-on-surface">Consultas Directas</p>
                                <p class="text-on-surface-variant">atencion@hairprestige.com</p>
                                <p class="text-on-surface-variant">+54 11 4455-6677</p>
                            </div>
                        </div>
                    </div>
                    <!-- Map Placeholder -->
                    <div class="mt-10 rounded-xl overflow-hidden h-48 bg-surface-container-high relative">
                        <img class="w-full h-full object-cover grayscale opacity-60" data-location="Buenos Aires" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBJ-8qVjppc4IFO1LLKgF7uriYxqLtCTccMa37Dwmni5q8DrWENJ8hob8_thxVcAi1A4DYZwp2wFJR9cLcp5dlv1buvpOyo0xCzr8ZoU7fjXGvvth64OMGmlrbc-5gGRdHB_HkQ0bfyok4H54PEv3PB2coiwpN9BAHifM4GNmwbVPncLwFgBEgvj7yyTXSzHO0pBl51Ly1bEulaTDfUNsIMBR7lRTMJ49z7ezs8e8NgwTcf5Qklp0HEHA"/>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="bg-secondary text-white px-4 py-2 rounded-lg font-bold shadow-lg flex items-center gap-2">
                                <span class="material-symbols-outlined">map</span>
                                Abrir Mapa
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Form Column -->
                <div class="bg-surface-container-low p-8 md:p-10 rounded-2xl shadow-sm">
                    <h3 class="font-headline-md text-headline-md mb-8 text-primary">Formulario de Consulta</h3>
                    <form class="space-y-6" onsubmit="event.preventDefault(); alert('Consulta enviada con éxito. Nos contactaremos a la brevedad.');">
                        <div>
                            <label class="block font-label-md text-label-md text-on-surface-variant mb-2">Nombre Completo</label>
                            <input class="w-full bg-surface-container-lowest border border-outline-variant rounded-lg px-4 py-3 focus:ring-2 focus:ring-secondary focus:border-secondary outline-none transition-all" placeholder="Ej. Juan Pérez" required="" type="text"/>
                        </div>
                        <div>
                            <label class="block font-label-md text-label-md text-on-surface-variant mb-2">Teléfono / WhatsApp</label>
                            <input class="w-full bg-surface-container-lowest border border-outline-variant rounded-lg px-4 py-3 focus:ring-2 focus:ring-secondary focus:border-secondary outline-none transition-all" placeholder="+54 9 11 0000-0000" required="" type="tel"/>
                        </div>
                        <div>
                            <label class="block font-label-md text-label-md text-on-surface-variant mb-2">Consulta</label>
                            <textarea class="w-full bg-surface-container-lowest border border-outline-variant rounded-lg px-4 py-3 focus:ring-2 focus:ring-secondary focus:border-secondary outline-none transition-all resize-none" placeholder="Cuéntanos qué necesitas o si tienes dudas sobre el proceso..." required="" rows="4"></textarea>
                        </div>
                        <button class="w-full bg-primary text-on-primary py-4 rounded-lg font-bold text-headline-md hover:bg-on-primary-container transition-all" type="submit">
                            Enviar Consulta
                        </button>
                        <p class="text-center text-label-sm text-on-surface-variant">
                            Tus datos son tratados con absoluta discreción y confidencialidad.
                        </p>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-surface-container-highest border-t border-outline-variant mt-16">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-gutter px-margin-mobile md:px-margin-desktop py-12 max-w-container-max mx-auto">
            <div class="col-span-1 md:col-span-1">
                <span class="font-headline-sm text-headline-sm font-bold text-on-surface">HAIRPRESTIGE</span>
                <p class="mt-4 text-on-surface-variant font-body-md text-body-md">
                    Líderes en soluciones capilares premium. Calidad médica al servicio de tu imagen.
                </p>
            </div>
            <div>
                <h4 class="font-bold mb-6 text-on-surface">Enlaces</h4>
                <ul class="space-y-4 text-label-sm text-label-sm">
                    <li><a class="text-on-surface-variant hover:text-secondary transition-colors" href="/">Inicio</a></li>
                    <li><a class="text-on-surface-variant hover:text-secondary transition-colors" href="/tienda">Tienda</a></li>
                    <li><a class="text-on-surface-variant hover:text-secondary transition-colors" href="/colocacion">Colocación</a></li>
                    <li><a class="text-on-surface-variant hover:text-secondary transition-colors" href="/capacitaciones">Capacitaciones</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-6 text-on-surface">Soporte</h4>
                <ul class="space-y-4 text-label-sm text-label-sm">
                    <li><a class="text-on-surface-variant hover:text-secondary transition-colors" href="#">Contacto</a></li>
                    <li><a class="text-on-surface-variant hover:text-secondary transition-colors" href="#">Envíos</a></li>
                    <li><a class="text-on-surface-variant hover:text-secondary transition-colors" href="#">Términos y Condiciones</a></li>
                    <li><a class="text-on-surface-variant hover:text-secondary transition-colors" href="#">Privacidad</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-6 text-on-surface">Newsletter</h4>
                <p class="text-on-surface-variant text-label-sm mb-4">Recibe novedades sobre nuevos sistemas y promociones.</p>
                <div class="flex">
                    <input class="bg-surface-container-lowest border border-outline-variant px-3 py-2 rounded-l-lg w-full focus:outline-none" placeholder="Email" type="email"/>
                    <button class="bg-primary text-on-primary px-4 py-2 rounded-r-lg font-bold">OK</button>
                </div>
            </div>
        </div>
        <div class="border-t border-outline-variant/30 py-6 text-center px-margin-mobile">
            <p class="text-label-sm text-on-surface-variant">© 2024 HairPrestige Medical Capillary. Todos los derechos reservados.</p>
        </div>
    </footer>
</div>

<!-- ========================================== -->
<!--            MOBILE LAYOUT (max-md)          -->
<!-- ========================================== -->
<div class="block md:hidden">
    <!-- TopAppBar -->
    <header class="fixed top-0 w-full bg-surface dark:bg-surface-container-highest border-b border-outline-variant dark:border-outline shadow-sm flex justify-between items-center px-4 h-16 z-50">
        <div class="flex items-center gap-4">
            <button class="active:scale-95 transition-transform text-primary dark:text-on-primary-fixed" onclick="document.getElementById('mobile-drawer').classList.remove('-translate-x-full')">
                <span class="material-symbols-outlined">menu</span>
            </button>
            <h1 class="font-headline-md text-headline-md font-bold tracking-tight text-primary dark:text-primary-fixed uppercase">CAPILLAR PREM</h1>
        </div>
        <a href="/tienda" class="active:scale-95 transition-transform text-primary dark:text-on-primary-fixed">
            <span class="material-symbols-outlined">shopping_cart</span>
        </a>
    </header>

    <!-- Navigation Drawer (SideNav Overlay) -->
    <div class="fixed inset-0 z-[70] transition-transform -translate-x-full" id="mobile-drawer">
        <div class="absolute inset-0 bg-black/40 backdrop-blur-sm" onclick="this.parentElement.classList.add('-translate-x-full')"></div>
        <aside class="fixed inset-y-0 left-0 z-[60] flex flex-col h-full w-80 rounded-r-xl bg-surface dark:bg-surface-container-low shadow-xl transition-all duration-300 ease-in-out">
            <div class="p-6">
                <h2 class="font-headline-md text-headline-md font-bold text-primary mb-6">Menú Principal</h2>
                <nav class="space-y-2">
                    <a class="flex items-center gap-4 py-3 px-4 text-on-surface-variant hover:bg-surface-container-high rounded-full mx-2 transition-all" href="/">
                        <span class="material-symbols-outlined">face</span>
                        <span class="font-label-md text-label-md">Sistemas Capilares</span>
                    </a>
                    <a class="flex items-center gap-4 py-3 px-4 bg-secondary-container text-on-secondary-container font-bold rounded-full mx-2 transition-all" href="/colocacion">
                        <span class="material-symbols-outlined">content_cut</span>
                        <span class="font-label-md text-label-md">Servicios de Colocación</span>
                    </a>
                    <a class="flex items-center gap-4 py-3 px-4 text-on-surface-variant hover:bg-surface-container-high rounded-full mx-2 transition-all" href="/capacitaciones">
                        <span class="material-symbols-outlined">school</span>
                        <span class="font-label-md text-label-md">Capacitaciones</span>
                    </a>
                    <a class="flex items-center gap-4 py-3 px-4 text-on-surface-variant hover:bg-surface-container-high rounded-full mx-2 transition-all" href="/tienda">
                        <span class="material-symbols-outlined">shopping_bag</span>
                        <span class="font-label-md text-label-md">Tienda Online</span>
                    </a>
                    <a class="flex items-center gap-4 py-3 px-4 text-on-surface-variant hover:bg-surface-container-high rounded-full mx-2 transition-all" href="#">
                        <span class="material-symbols-outlined">person</span>
                        <span class="font-label-md text-label-md">Mi Cuenta</span>
                    </a>
                </nav>
            </div>
        </aside>
    </div>

    <main class="pt-16 pb-24">
        <!-- Hero Section -->
        <section class="relative w-full h-[397px] overflow-hidden">
            <div class="bg-cover bg-center w-full h-full transform scale-105" data-alt="A professional hair restoration procedure." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuApAesT82QwLbId_eeFq5oHr_wXYGh4F9CnLTCXfrKxE9ljMTbyK2Nricu4cKTBkrfUYn1eZY3R74NT6IQ9HBiqRWjUu2dayrePlhvHBrpnjSWm_KdPUpDLoVK9YcBq0GKGhW-RcfuzD_-D_fT9fm5xOG87b96oC169YSzpqCBMwcCzyb-9vKpQCEz6ykKGuNIA9PgfRqymgWOXruav4zLKBzn7P3pUh12yX_5CtJzBDSx24UfSTURU6Q')"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-background via-background/40 to-transparent"></div>
            <div class="absolute bottom-0 left-0 p-margin-mobile w-full">
                <span class="inline-block px-3 py-1 bg-secondary-container text-on-secondary-container font-label-sm text-label-sm rounded-full mb-3 uppercase tracking-wider">Servicio Profesional</span>
                <h2 class="font-headline-lg-mobile text-headline-lg-mobile text-on-surface mb-2">Colocación de Excelencia</h2>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-xs">Restauración capilar invisible con técnicas de vanguardia y acabados naturales garantizados.</p>
            </div>
        </section>

        <!-- Service Description Chips -->
        <section class="px-margin-mobile py-8 flex gap-3 overflow-x-auto no-scrollbar">
            <div class="flex-shrink-0 bg-surface-container-low border border-outline-variant rounded-xl p-4 w-40">
                <span class="material-symbols-outlined text-secondary mb-2" style="font-variation-settings: 'FILL' 1;">timer</span>
                <p class="font-label-md text-label-md text-on-surface font-bold">Proceso Rápido</p>
                <p class="font-label-sm text-label-sm text-on-surface-variant">90 - 120 minutos</p>
            </div>
            <div class="flex-shrink-0 bg-surface-container-low border border-outline-variant rounded-xl p-4 w-40">
                <span class="material-symbols-outlined text-secondary mb-2" style="font-variation-settings: 'FILL' 1;">verified</span>
                <p class="font-label-md text-label-md text-on-surface font-bold">Garantía Total</p>
                <p class="font-label-sm text-label-sm text-on-surface-variant">Acabado invisible</p>
            </div>
            <div class="flex-shrink-0 bg-surface-container-low border border-outline-variant rounded-xl p-4 w-40">
                <span class="material-symbols-outlined text-secondary mb-2" style="font-variation-settings: 'FILL' 1;">medical_services</span>
                <p class="font-label-md text-label-md text-on-surface font-bold">Material Pro</p>
                <p class="font-label-sm text-label-sm text-on-surface-variant">Adhesivos grado médico</p>
            </div>
        </section>

        <!-- Before & After Vertical Gallery -->
        <section class="px-margin-mobile py-6">
            <h3 class="font-headline-md text-headline-md text-on-surface mb-6">Resultados Reales</h3>
            <div class="space-y-12">
                <!-- Comparison Item 1 -->
                <div class="group">
                    <div class="before-after-container aspect-[4/5] rounded-xl shadow-sm border border-outline-variant bg-surface-container-high" id="slider1">
                        <img class="comparison-img before-img" data-alt="Male pattern baldness before shot" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAbtlbyeIlKof5vNG6-dQplSydPxKGFwMErE5I4CLM_IKNYVInM3eHdqhkJK2J6ml4OlG_1DA5mGzgHc6MYCU_g45foS5KVW6RBXX4IXdcx4MHBzLdAowGv23eKYa211TTD54N0j4ASrhbFfxDPMdHpzgcXtU6tXCtOKks5hiuHWskpmJUvAJstF2qspP-XKFjdHJApioQ-UvI0bPGB5UHDnX9LJ23w0FAls9NOFe17vN8vQRC7d-AbGA"/>
                        <img class="comparison-img after-img" data-alt="Full hair restoration after shot" id="after1" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDteqfleqsUMbbZXPkhs_t7o3A-VCWds2tSeUPGiYABoBiWjQNHMCZ2mOn5jy4sxwdMqfjf8Xy1VyJEabX8O-JhfWTf_lr3bRMGJ3krdsoFlzGGWqStqQgciAwaAiyPKF1ZIsbIPzc1VSNEJtZ1NoE89ARvsWHKVqidk7YJPp714z5J_RsHx1mo0BOKIGEG-7vg8-w0ugG5Z2GroTkVLFaPt-ePXRNtfrIRwcY8Bs73YmJw66yZQE0AFA"/>
                        <div class="slider-handle" id="handle1"></div>
                        <div class="absolute bottom-4 left-4 z-20 bg-black/40 backdrop-blur-md text-white px-3 py-1 rounded-full text-xs font-bold">ANTES</div>
                        <div class="absolute bottom-4 right-4 z-20 bg-secondary text-white px-3 py-1 rounded-full text-xs font-bold">DESPUÉS</div>
                    </div>
                    <div class="mt-3">
                        <p class="font-label-md text-label-md font-bold text-on-surface">Sistema de Malla Suiza</p>
                        <p class="font-body-md text-body-md text-on-surface-variant">Densidad 110%, Estilo degradado natural.</p>
                    </div>
                </div>
                <!-- Comparison Item 2 -->
                <div class="group">
                    <div class="before-after-container aspect-[4/5] rounded-xl shadow-sm border border-outline-variant bg-surface-container-high" id="slider2">
                        <img class="comparison-img before-img" data-alt="Advanced baldness scalp shot" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCwY534QunOe9R5PXpUBqu_CPBGp4YUQCDkCxfS-A1lvFGbYGfgbL0EqcVYhnIusfPDAy5kTgTxXEI1mXC_p2WO6L2Tks3PEtzkFdNXREkX8HARMy97bEUM_YNXg6B4cMQHrCnI9o33B7Vg2w7aTvimFv9OPq_qKHJba06bXqRPsjcSUVoCsW4wMRQrBlnYV5bod4JYsNMdfn13FQsuj7F3FExJmdhCzeTbX7dLmO03meIxwKiBqxzvXQ"/>
                        <img class="comparison-img after-img" data-alt="Hair system top-down integrated view" id="after2" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDwXJTlIr2q37DZ6tZidBDGaJm6sX4F5oG2yXDRL8Dy5Lu5w2k8hPI-zG2tXfsjCkng6wtDb2dmKfuCYZyFkmHks8gDQYjHuE4sG_aydTuKFbjkDeACQhB9DtHp0XQMy0aMMnjhDc3rDmYa-K2XJc4G2d4ivQiovSUemlIOz3HWdMG2DC8YxR8adQZBwET4ONiByTqT9Uo-LAGQskw4t8fUga-8TYGL1S9ZikVG9iYir21_OhA3GAUDTQ"/>
                        <div class="slider-handle" id="handle2"></div>
                        <div class="absolute bottom-4 left-4 z-20 bg-black/40 backdrop-blur-md text-white px-3 py-1 rounded-full text-xs font-bold">ANTES</div>
                        <div class="absolute bottom-4 right-4 z-20 bg-secondary text-white px-3 py-1 rounded-full text-xs font-bold">DESPUÉS</div>
                    </div>
                    <div class="mt-3">
                        <p class="font-label-md text-label-md font-bold text-on-surface">Skin Ultra-Fino 0.03mm</p>
                        <p class="font-body-md text-body-md text-on-surface-variant">Integración frontal indetectable.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Simplified Mobile Form -->
        <section class="mx-margin-mobile mt-10 p-6 bg-surface-container rounded-2xl border border-outline-variant/50">
            <h3 class="font-headline-md text-headline-md text-on-surface mb-2">Reserva tu Turno</h3>
            <p class="font-body-md text-body-md text-on-surface-variant mb-6">Completa tus datos y un especialista te contactará.</p>
            <form class="space-y-4" onsubmit="event.preventDefault(); alert('Consulta de turno enviada con éxito.');">
                <div>
                    <label class="block font-label-md text-label-md text-on-surface mb-2">Nombre Completo</label>
                    <input class="w-full bg-surface border border-outline-variant focus:border-secondary focus:ring-0 rounded-lg p-3 text-body-md transition-colors" placeholder="Ej. Juan Pérez" type="text" required/>
                </div>
                <div>
                    <label class="block font-label-md text-label-md text-on-surface mb-2">Tipo de Sistema</label>
                    <select class="w-full bg-surface border border-outline-variant focus:border-secondary focus:ring-0 rounded-lg p-3 text-body-md transition-colors">
                        <option>Malla Suiza</option>
                        <option>Skin Ultra-fino</option>
                        <option>Sistema Híbrido</option>
                        <option>Consulta General</option>
                    </select>
                </div>
                <button class="w-full bg-primary text-on-primary font-label-md text-label-md py-4 rounded-xl font-bold active:scale-95 transition-transform mt-4" type="submit">
                    SOLICITAR INFORMACIÓN
                </button>
                <div class="relative py-4 flex items-center gap-4">
                    <div class="flex-grow border-t border-outline-variant"></div>
                    <span class="text-on-surface-variant text-xs font-bold uppercase tracking-widest">o búscanos en</span>
                    <div class="flex-grow border-t border-outline-variant"></div>
                </div>
                <a class="w-full bg-[#25D366] text-white flex items-center justify-center gap-3 py-4 rounded-xl font-bold active:scale-95 transition-transform" href="https://wa.me/5491100000000" target="_blank">
                    <svg class="w-6 h-6 fill-current" viewbox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.72.94 3.659 1.437 5.634 1.437h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"></path></svg>
                    WHATSAPP DIRECTO
                </a>
            </form>
        </section>

        <!-- Footer -->
        <footer class="w-full py-12 px-margin-mobile flex flex-col items-center gap-8 bg-surface-container-highest dark:bg-surface-container-lowest mt-16 pb-32">
            <h1 class="font-headline-md text-headline-md font-bold text-primary">CAPILLAR PREM</h1>
            <div class="flex flex-wrap justify-center gap-6">
                <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">Privacidad</a>
                <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">Términos</a>
                <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">Envíos</a>
                <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">Contacto</a>
            </div>
            <p class="font-body-md text-body-md text-center text-on-surface-variant opacity-70">
                © 2024 Capillar Premium. Excelencia en restauración capilar.
            </p>
        </footer>

        <!-- BottomNavBar -->
        <nav class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-6 py-3 pb-safe bg-surface/90 dark:bg-surface-container-lowest/90 backdrop-blur-md border-t border-outline-variant/30 shadow-[0_-4px_6px_-1px_rgba(15,23,42,0.05)] rounded-t-xl">
            <a class="flex items-center justify-center text-on-surface-variant p-3 hover:scale-110 transition-transform active:scale-90" href="/">
                <span class="material-symbols-outlined">home</span>
            </a>
            <a class="flex items-center justify-center text-on-surface-variant p-3 hover:scale-110 transition-transform active:scale-90" href="/tienda">
                <span class="material-symbols-outlined">search</span>
            </a>
            <a class="flex items-center justify-center bg-secondary-container text-on-secondary-container rounded-full p-3 hover:scale-110 transition-transform active:scale-90" href="/colocacion">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">content_cut</span>
            </a>
            <a class="flex items-center justify-center text-on-surface-variant p-3 hover:scale-110 transition-transform active:scale-90" href="https://wa.me/5491100000000" target="_blank">
                <span class="material-symbols-outlined">chat</span>
            </a>
            <a class="flex items-center justify-center text-on-surface-variant p-3 hover:scale-110 transition-transform active:scale-90" href="/colocacion">
                <span class="material-symbols-outlined">support_agent</span>
            </a>
        </nav>
    </main>
</div>

<!-- ========================================== -->
<!--                  SCRIPTS                   -->
<!-- ========================================== -->
<script>
    function initSlider(containerId, handleId, afterId) {
        const container = document.getElementById(containerId);
        const handle = document.getElementById(handleId);
        const afterImg = document.getElementById(afterId);

        if (!container || !handle || !afterImg) return;

        let isResizing = false;

        const updateSlider = (e) => {
            if (!isResizing) return;
            const rect = container.getBoundingClientRect();
            const x = (e.touches ? e.touches[0].clientX : e.clientX) - rect.left;
            const percentage = Math.max(0, Math.min(100, (x / rect.width) * 100));
            
            handle.style.left = `${percentage}%`;
            afterImg.style.clipPath = `inset(0 0 0 ${percentage}%)`;
        };

        const startResizing = () => { isResizing = true; };
        const stopResizing = () => { isResizing = false; };

        handle.addEventListener('mousedown', startResizing);
        handle.addEventListener('touchstart', startResizing);
        window.addEventListener('mousemove', updateSlider);
        window.addEventListener('touchmove', updateSlider);
        window.addEventListener('mouseup', stopResizing);
        window.addEventListener('touchend', stopResizing);

        // Click anywhere on container to move handle
        container.addEventListener('click', (e) => {
            isResizing = true;
            updateSlider(e);
            isResizing = false;
        });
    }

    document.addEventListener('DOMContentLoaded', () => {
        initSlider('slider1', 'handle1', 'after1');
        initSlider('slider2', 'handle2', 'after2');
    });
</script>
</body>
</html>
