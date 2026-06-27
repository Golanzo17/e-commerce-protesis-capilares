<!DOCTYPE html>
<html class="light" lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
    <title>CAPILLAR PREM | Sistemas Capilares de Excelencia</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "primary-fixed": "#dae2fd",
                    "primary-container": "#131b2e",
                    "surface-dim": "#d8dadc",
                    "on-primary-fixed": "#131b2e",
                    "on-tertiary-fixed": "#251a00",
                    "surface-bright": "#f7f9fb",
                    "secondary-container": "#39b8fd",
                    "surface-container-lowest": "#ffffff",
                    "on-tertiary-fixed-variant": "#594410",
                    "inverse-on-surface": "#eff1f3",
                    "surface-container": "#eceef0",
                    "tertiary": "#000000",
                    "on-primary-container": "#7c839b",
                    "tertiary-fixed": "#ffdf9d",
                    "inverse-primary": "#bec6e0",
                    "surface": "#f7f9fb",
                    "on-secondary-container": "#004666",
                    "surface-container-high": "#e6e8ea",
                    "surface-tint": "#565e74",
                    "inverse-surface": "#2d3133",
                    "tertiary-container": "#251a00",
                    "surface-container-low": "#f2f4f6",
                    "surface-container-highest": "#e0e3e5",
                    "primary": "#000000",
                    "on-primary": "#ffffff",
                    "outline-variant": "#c6c6cd",
                    "on-primary-fixed-variant": "#3f465c",
                    "outline": "#76777d",
                    "on-secondary-fixed": "#001e2f",
                    "on-surface": "#191c1e",
                    "on-tertiary": "#ffffff",
                    "background": "#f7f9fb",
                    "on-error": "#ffffff",
                    "on-error-container": "#93000a",
                    "secondary-fixed-dim": "#89ceff",
                    "primary-fixed-dim": "#bec6e0",
                    "error-container": "#ffdad6",
                    "error": "#ba1a1a",
                    "on-surface-variant": "#45464d",
                    "on-secondary-fixed-variant": "#004c6e",
                    "secondary": "#006591",
                    "secondary-fixed": "#c9e6ff",
                    "on-background": "#191c1e",
                    "tertiary-fixed-dim": "#e2c383",
                    "surface-variant": "#e0e3e5",
                    "on-tertiary-container": "#9b8047",
                    "on-secondary": "#ffffff"
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
    <style>
        body {
            background-color: #f7f9fb;
            color: #191c1e;
            -webkit-tap-highlight-color: transparent;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .shadow-clinical {
            box-shadow: 0 2px 4px rgba(15, 23, 42, 0.05);
        }
        .hero-gradient-desktop {
            background: linear-gradient(to right, rgba(247, 249, 251, 0.95), rgba(247, 249, 251, 0.7), transparent);
        }
        .hero-gradient-mobile {
            background: linear-gradient(to bottom, rgba(15, 23, 42, 0.4), rgba(15, 23, 42, 0.9));
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .pb-safe {
            padding-bottom: env(safe-area-inset-bottom);
        }
        body {
          min-height: max(884px, 100dvh);
        }
    </style>
</head>
<body class="font-body-md text-body-md overflow-x-hidden antialiased">

<!-- ========================================== -->
<!--            DESKTOP LAYOUT (md+)            -->
<!-- ========================================== -->
<div class="hidden md:block">
    <!-- TopNavBar -->
    <nav class="sticky top-0 z-50 bg-surface-container-lowest dark:bg-surface-dim border-b border-outline-variant dark:border-on-surface-variant shadow-sm transition-all duration-300 ease-in-out">
        <div class="flex justify-between items-center px-margin-mobile md:px-margin-desktop py-4 max-w-container-max mx-auto">
            <a href="/" class="font-headline-md text-headline-md font-bold text-on-surface dark:text-inverse-on-surface tracking-tight">HAIRPRESTIGE</a>
            <!-- Desktop Links -->
            <div class="flex gap-8 items-center">
                <a class="font-label-md text-label-md text-secondary dark:text-secondary-fixed-dim font-bold border-b-2 border-secondary transition-all" href="/">Inicio</a>
                <a class="font-label-md text-label-md text-on-surface-variant dark:text-outline-variant hover:text-secondary transition-colors" href="/tienda">Tienda</a>
                <a class="font-label-md text-label-md text-on-surface-variant dark:text-outline-variant hover:text-secondary transition-colors" href="/colocacion">Colocación</a>
                <a class="font-label-md text-label-md text-on-surface-variant dark:text-outline-variant hover:text-secondary transition-colors" href="/capacitaciones">Capacitaciones</a>
            </div>
            <!-- Actions -->
            <div class="flex items-center gap-4">
                <a href="https://wa.me/yournumber" target="_blank" class="flex items-center gap-2 bg-secondary text-on-secondary px-6 py-2 rounded-full font-label-md hover:opacity-90 transition-opacity">
                    WhatsApp
                </a>
                <a href="/tienda" class="p-2 hover:bg-surface-container-low rounded-full cursor-pointer transition-colors">
                    <span class="material-symbols-outlined text-on-surface-variant" data-icon="shopping_cart">shopping_cart</span>
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative h-[600px] flex items-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="w-full h-full bg-cover bg-center" data-alt="A cinematic, high-resolution close-up of a professional male hair restoration result." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDhOygGm6TfNK6zFxMtil0Ju1bx5_vQXm6OCQxBahqNV6HB11Z3XUeK5KIqsPCXvrPUV_ffNUxMAAypW6rgHGHxnzbpd8EnFpGpXbHnaFhvu8S4wQKIbJcQOBhxEQWhvAFx4EzjTLJw6ZYUs-9XdE1Ddt86ortKELxLryryVF0fYvhXgUCROril30ZmxB7iANmJB-zZ4VbksHE5FXZZr6ksxINzsz6SB6fuKKOTdOAEBWYbzMiP4QDN-A')"></div>
            <div class="absolute inset-0 hero-gradient-desktop"></div>
        </div>
        <div class="relative z-10 max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop w-full">
            <div class="max-w-2xl">
                <h1 class="font-headline-xl text-headline-xl mb-6 text-on-surface">Prótesis capilares e insumos importados de primera calidad.</h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant mb-10">Recuperá tu imagen con la tecnología más avanzada en sistemas capilares. Discreción, naturalidad y soporte profesional.</p>
                <div class="flex flex-wrap gap-4">
                    <a href="/tienda" class="bg-[#0EA5E9] text-white px-8 py-4 rounded-lg font-label-md text-lg shadow-clinical hover:brightness-110 transition-all flex items-center gap-2">
                        Ver Tienda
                        <span class="material-symbols-outlined" data-icon="arrow_forward">arrow_forward</span>
                    </a>
                    <a href="https://wa.me/yournumber" target="_blank" class="border-2 border-[#0F172A] text-[#0F172A] px-8 py-4 rounded-lg font-label-md text-lg hover:bg-[#0F172A] hover:text-white transition-all flex items-center justify-center">
                        Consultar por WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Shipping Banner -->
    <div class="bg-primary-container text-on-primary-fixed py-4">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop flex flex-col md:flex-row items-center justify-center gap-2 md:gap-8 text-center">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-secondary-container" data-icon="local_shipping">local_shipping</span>
                <span class="font-label-md">Envíos a toda Argentina.</span>
            </div>
            <div class="h-1 w-1 bg-outline-variant rounded-full hidden md:block"></div>
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-secondary-container" data-icon="inventory_2">inventory_2</span>
                <span class="font-label-md">Productos importados (entrega 2-4 semanas).</span>
            </div>
        </div>
    </div>

    <!-- Benefits Section -->
    <section class="py-24 bg-surface">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="flex flex-col items-center text-center p-8 bg-surface-container-lowest rounded-xl shadow-clinical border border-outline-variant/30">
                    <div class="w-16 h-16 bg-secondary-container/20 rounded-full flex items-center justify-center mb-6">
                        <span class="material-symbols-outlined text-secondary text-4xl" data-icon="visibility_off">visibility_off</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md mb-4">Naturalidad Total</h3>
                    <p class="font-body-md text-on-surface-variant">Sistemas diseñados para imitar el crecimiento natural del cabello, volviéndose imperceptibles incluso de cerca.</p>
                </div>
                <div class="flex flex-col items-center text-center p-8 bg-surface-container-lowest rounded-xl shadow-clinical border border-outline-variant/30">
                    <div class="w-16 h-16 bg-secondary-container/20 rounded-full flex items-center justify-center mb-6">
                        <span class="material-symbols-outlined text-secondary text-4xl" data-icon="verified_user">verified_user</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md mb-4">Confianza Plena</h3>
                    <p class="font-body-md text-on-surface-variant">Nuestros adhesivos y prótesis garantizan una fijación segura para que realices cualquier actividad sin preocupaciones.</p>
                </div>
                <div class="flex flex-col items-center text-center p-8 bg-surface-container-lowest rounded-xl shadow-clinical border border-outline-variant/30">
                    <div class="w-16 h-16 bg-secondary-container/20 rounded-full flex items-center justify-center mb-6">
                        <span class="material-symbols-outlined text-secondary text-4xl" data-icon="history">history</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md mb-4">Durabilidad</h3>
                    <p class="font-body-md text-on-surface-variant">Materiales de grado médico seleccionados por su resistencia al uso diario y mantenimiento sencillo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="py-24">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="font-headline-lg text-headline-lg mb-2">Productos Destacados</h2>
                    <p class="font-body-md text-on-surface-variant">Insumos y sistemas de nivel internacional.</p>
                </div>
                <a class="text-secondary font-label-md flex items-center gap-1 hover:underline" href="/tienda">
                    Ver todo <span class="material-symbols-outlined" data-icon="chevron_right">chevron_right</span>
                </a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter">
                <!-- Card 1 -->
                <div class="group bg-surface-container-lowest border border-outline-variant rounded-lg overflow-hidden shadow-clinical hover:shadow-lg transition-all duration-300">
                    <div class="aspect-square bg-surface-container-low relative overflow-hidden">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A premium professional hair system lace base unit." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBgniqrhxgSvsd1U3KIbk2lAP5QLvYCW-uCSrHXUV-ebcwPWkem0MOdQnOrJBR6FzCKMTSEi7xOpQ6yKzH7EE-R6vMiBb8jnQrRs9hqWtSCkqd6cCrR0S-eqreGFkZoyfVLKobGFvGJIKinUjvCpnrbHHj2mhAOjAl3oeQNHgvu2Jm8C-xS6OlgP3Ly9aE6dqqa-X8H66JIo7DsHXf_BEWCR9khb0W7eJ3lPwFl6Hj4AUnCaVOEO7HQXA"/>
                        <span class="absolute top-4 left-4 bg-tertiary-fixed text-on-tertiary-fixed px-3 py-1 rounded-full text-label-sm">Premium</span>
                    </div>
                    <div class="p-6">
                        <p class="text-label-sm text-outline mb-2">Prótesis</p>
                        <h4 class="font-headline-md text-headline-md mb-2 group-hover:text-secondary transition-colors">Sistema Swiss Lace</h4>
                        <p class="font-body-md text-secondary font-bold mb-4">$245.000</p>
                        <a href="/tienda" class="w-full text-center block border border-outline py-2 rounded-lg font-label-md group-hover:bg-primary group-hover:text-white group-hover:border-primary transition-all">Ver Detalle</a>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="group bg-surface-container-lowest border border-outline-variant rounded-lg overflow-hidden shadow-clinical hover:shadow-lg transition-all duration-300">
                    <div class="aspect-square bg-surface-container-low relative overflow-hidden">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A bottle of professional medical-grade hair system adhesive." src="https://lh3.googleusercontent.com/aida-public/AB6AXuApxNmsfu5582FZDNbZuGywudwtusPNSRhf3HRqJ81e5MswiHIUVpgIizkwgx2mNhaDOG-HChsvcfkyYHcejvBuaWT1jEkTm7h6-Z641Il7T5IrMoL-v5RRxot6N-EpaKC-cfY3emTVQhacACtxWziQBIMBW8f-wmn_4mviI73a3FD7_p6deX3LiFwf7S84GGHOY-LNyGaxSJQvxtTcruGr2K6w-UpQ0nXiSZytHDUp9Cvf567z1dsN2w"/>
                    </div>
                    <div class="p-6">
                        <p class="text-label-sm text-outline mb-2">Adhesivos</p>
                        <h4 class="font-headline-md text-headline-md mb-2 group-hover:text-secondary transition-colors">Ultra Hold 3.4oz</h4>
                        <p class="font-body-md text-secondary font-bold mb-4">$52.000</p>
                        <a href="/tienda" class="w-full text-center block border border-outline py-2 rounded-lg font-label-md group-hover:bg-primary group-hover:text-white group-hover:border-primary transition-all">Ver Detalle</a>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="group bg-surface-container-lowest border border-outline-variant rounded-lg overflow-hidden shadow-clinical hover:shadow-lg transition-all duration-300">
                    <div class="aspect-square bg-surface-container-low relative overflow-hidden">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A complete maintenance kit for hair systems." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDhdeE1mbxUsSIEGNyivyDTc4yzpLYaOBRE7wEA7Gt5zXqPx8NtZxkoG9N7W3daJD4O3mLW17CqUWM3lBaF5RQF4Zx2ET8cGEfQaKyt04rQUYqg47nstgC4rlqsRL1OyFOjUVtvdb-0beTr_R8FYJMnbq2NfME8WZWzFs-xY4dM9A8VQPyChUKCHEblGjr1aflcLeFGDaa3kT2hisoQsN9Ax1YE4RV8vzI2lFnksIs8Jk8JyUqNkc2tSQ"/>
                    </div>
                    <div class="p-6">
                        <p class="text-label-sm text-outline mb-2">Kits</p>
                        <h4 class="font-headline-md text-headline-md mb-2 group-hover:text-secondary transition-colors">Kit de Inicio</h4>
                        <p class="font-body-md text-secondary font-bold mb-4">$89.000</p>
                        <a href="/kit-premium" class="w-full text-center block border border-outline py-2 rounded-lg font-label-md group-hover:bg-primary group-hover:text-white group-hover:border-primary transition-all">Ver Detalle</a>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="group bg-surface-container-lowest border border-outline-variant rounded-lg overflow-hidden shadow-clinical hover:shadow-lg transition-all duration-300">
                    <div class="aspect-square bg-surface-container-low relative overflow-hidden">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A high-density hybrid hair system." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDnKQ3Kx7v3tIhZ0TgUe-EJnZL2g90MV2Y4LnzPtruDSfP6bPKbosen1IO7U4xxN_jIDl-IHni8ffUfgAr6EMywiQgI9YuGG7zoBPSeBZ9kxGgfIEzJVk2_IvkT7eJAnrl1hJX91KmICe73orCoH8vKn5zpQVWQQ1d5jXaOb_muvTNFgEeDKbgNkYx8c228dMfB6ply6XfcC0wGqc_AgRQS_2G3xWE_i_nQg0OoFvM370Rj01bFo26_Yw"/>
                    </div>
                    <div class="p-6">
                        <p class="text-label-sm text-outline mb-2">Prótesis</p>
                        <h4 class="font-headline-md text-headline-md mb-2 group-hover:text-secondary transition-colors">Hybrid Skin Base</h4>
                        <p class="font-body-md text-secondary font-bold mb-4">$210.000</p>
                        <a href="/tienda" class="w-full text-center block border border-outline py-2 rounded-lg font-label-md group-hover:bg-primary group-hover:text-white group-hover:border-primary transition-all">Ver Detalle</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-24 bg-surface-container-low overflow-hidden relative">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="font-headline-lg text-headline-lg mb-6">Expertos en Transformación</h2>
                    <p class="font-body-lg text-on-surface-variant mb-12">No solo proveemos los mejores insumos, acompañamos tu proceso con servicios profesionales de nivel médico para garantizar un resultado perfecto.</p>
                    <div class="space-y-8">
                        <div class="flex gap-6 group">
                            <div class="flex-shrink-0 w-14 h-14 bg-white rounded-lg flex items-center justify-center shadow-clinical border border-outline-variant group-hover:border-secondary transition-colors">
                                <span class="material-symbols-outlined text-secondary" data-icon="content_cut">content_cut</span>
                            </div>
                            <div>
                                <h4 class="font-headline-md text-headline-md mb-2">Colocación Profesional</h4>
                                <p class="font-body-md text-on-surface-variant mb-4">Servicio personalizado en cabina privada para tu total comodidad y discreción.</p>
                                <a class="text-secondary font-label-md underline decoration-2 underline-offset-4 hover:opacity-70 transition-opacity" href="/colocacion">Reservar Turno</a>
                            </div>
                        </div>
                        <div class="flex gap-6 group">
                            <div class="flex-shrink-0 w-14 h-14 bg-white rounded-lg flex items-center justify-center shadow-clinical border border-outline-variant group-hover:border-secondary transition-colors">
                                <span class="material-symbols-outlined text-secondary" data-icon="school">school</span>
                            </div>
                            <div>
                                <h4 class="font-headline-md text-headline-md mb-2">Capacitaciones</h4>
                                <p class="font-body-md text-on-surface-variant mb-4">Formate con nosotros para dominar las técnicas de colocación y mantenimiento de prótesis.</p>
                                <a class="text-secondary font-label-md underline decoration-2 underline-offset-4 hover:opacity-70 transition-opacity" href="/capacitaciones">Ver Cursos</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="rounded-2xl overflow-hidden shadow-2xl">
                        <img class="w-full h-[500px] object-cover" data-alt="A professional aesthetician working meticulously on a hair system." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBIdK9z7DHOUyv1OXg9XHk3_yTOpnCcasLIp5wth_l0sF96NoWrpNVvPJcAODrAbdJTv5pSm63EsZ0sooaR0gRGCopPVoL3dflZI0ogDX1-sxLaw5lPa6F1atxiRnH46KoWDxTLH4sMkzLeJS13wqu7lD5u9e70hTDqVG_8kLvBVbrWNI0E65U5Sib_txfHci9sKl-Sm0KIhnpDmrHBB_tGZJB4gI9CdkOmZK1L-jFDAFTN38TgElR-Vg"/>
                    </div>
                    <!-- Decorative element -->
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-secondary-container/30 rounded-full blur-3xl z-0"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-surface-container-highest dark:bg-inverse-surface mt-16 transition-all duration-300 ease-in-out opacity-90 hover:opacity-100">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-gutter px-margin-mobile md:px-margin-desktop py-12 max-w-container-max mx-auto">
            <!-- Brand Column -->
            <div class="space-y-6">
                <div class="font-headline-sm text-headline-sm font-bold text-on-surface dark:text-inverse-on-surface">HAIRPRESTIGE</div>
                <p class="font-body-md text-label-md text-on-surface-variant dark:text-outline-variant">Líderes en soluciones capilares no quirúrgicas e insumos importados para profesionales y particulares.</p>
            </div>
            <!-- Links Column -->
            <div class="space-y-4">
                <h5 class="font-label-md font-bold text-secondary dark:text-secondary-fixed-dim uppercase tracking-wider">Empresa</h5>
                <ul class="space-y-2">
                    <li><a class="font-body-md text-label-sm text-on-surface-variant dark:text-outline-variant hover:text-secondary transition-colors" href="#">Contacto</a></li>
                    <li><a class="font-body-md text-label-sm text-on-surface-variant dark:text-outline-variant hover:text-secondary transition-colors" href="#">Envíos</a></li>
                    <li><a class="font-body-md text-label-sm text-on-surface-variant dark:text-outline-variant hover:text-secondary transition-colors" href="#">Términos y Condiciones</a></li>
                    <li><a class="font-body-md text-label-sm text-on-surface-variant dark:text-outline-variant hover:text-secondary transition-colors" href="#">Privacidad</a></li>
                </ul>
            </div>
            <!-- Payments Column -->
            <div class="space-y-4">
                <h5 class="font-label-md font-bold text-secondary dark:text-secondary-fixed-dim uppercase tracking-wider">Medios de Pago</h5>
                <div class="flex flex-wrap gap-4 items-center">
                    <div class="bg-white p-2 rounded shadow-clinical h-8 flex items-center justify-center grayscale hover:grayscale-0 transition-all">
                        <img alt="Mercado Pago" class="h-4" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDM7DMq8I1GQSdB5v5XGDEKz_FRCtTn1N7FOjnMGi3HmVr_S81bJigStt6kTO3_Bk9dD2iKLWlAkQyyTwaqLrxrHyvZkPFUeFNuhIx02nTzHGeKYbQ9OZbQhQlAbTHQf9QWpAzEu_Zvn0Mpq5wc_MO4NRlCD5HtA9PHJuIdMr-jUrhiVZtSTQplU_RS15ZMC_qQf_bUnYQdoxs0VYLOR-HQuOH1b1UTctAGeR5nL_SJyTnTWelPmpTUTA"/>
                    </div>
                    <div class="bg-white p-2 rounded shadow-clinical h-8 flex items-center justify-center grayscale hover:grayscale-0 transition-all">
                        <span class="font-bold text-xs text-secondary">CUENTA DNI</span>
                    </div>
                    <div class="bg-white p-2 rounded shadow-clinical h-8 flex items-center justify-center grayscale hover:grayscale-0 transition-all">
                        <span class="material-symbols-outlined text-sm mr-1" data-icon="account_balance">account_balance</span>
                        <span class="font-bold text-xs">TRANSFERENCIA</span>
                    </div>
                </div>
            </div>
            <!-- Newsletter/Social -->
            <div class="space-y-4">
                <h5 class="font-label-md font-bold text-secondary dark:text-secondary-fixed-dim uppercase tracking-wider">Síguenos</h5>
                <div class="flex gap-4">
                    <a class="w-10 h-10 rounded-full bg-surface-container-low flex items-center justify-center hover:bg-secondary hover:text-white transition-all" href="#">
                        <span class="material-symbols-outlined" data-icon="public">public</span>
                    </a>
                    <a class="w-10 h-10 rounded-full bg-surface-container-low flex items-center justify-center hover:bg-secondary hover:text-white transition-all" href="#">
                        <span class="material-symbols-outlined" data-icon="photo_camera">photo_camera</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="border-t border-outline-variant/30 py-6 text-center">
            <p class="font-body-md text-label-sm text-on-surface-variant dark:text-outline-variant">
                © 2024 HairPrestige Medical Capillary. Todos los derechos reservados.
            </p>
        </div>
    </footer>
</div>

<!-- ========================================== -->
<!--            MOBILE LAYOUT (max-md)          -->
<!-- ========================================== -->
<div class="block md:hidden">
    <!-- TopAppBar -->
    <header class="fixed top-0 w-full bg-surface z-50 shadow-sm border-b border-outline-variant h-16 flex justify-between items-center px-4">
        <button class="active:scale-95 transition-transform p-2" id="menu-drawer-toggle">
            <span class="material-symbols-outlined text-primary" data-icon="menu">menu</span>
        </button>
        <span class="font-headline-md text-headline-md font-bold tracking-tight text-primary">CAPILLAR PREM</span>
        <a href="/tienda" class="active:scale-95 transition-transform p-2">
            <span class="material-symbols-outlined text-primary" data-icon="shopping_cart">shopping_cart</span>
        </a>
    </header>

    <main class="mt-16 pb-24">
        <!-- Hero Section -->
        <section class="relative w-full h-[751px] flex items-end overflow-hidden">
            <div class="absolute inset-0 z-0 bg-cover bg-center" data-alt="A high-end cinematic close-up of a perfectly styled hair restoration system." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBRnXr6aOIMZQf8B2ZNi69EvLAwhGDVdP1TMpvNzzxX5Z4LKZviAkUuIe4y-0lVseMAEU1gpUxwz_tL9EJ6aa67NVYi3bBYdl6pdi-NT_mMHSf-jf2HBLNQONn9-9zigqWKn_4e4ax4NyJ54AWGT2Z2gxLwqxmLiDGvFSl6u7TUZyQrSFCX84hXIUIIOiwUjQrkr4g3A0K86bph70cDT3h5EdiFdEXFSnXW-GyeRWrCD3PLTRVmiTuXTA')"></div>
            <div class="absolute inset-0 hero-gradient-mobile z-10"></div>
            <div class="relative z-20 px-margin-mobile pb-12 w-full">
                <div class="bg-[#0EA5E9]/10 border border-[#0EA5E9]/30 backdrop-blur-md rounded-full px-4 py-1 inline-flex items-center gap-2 mb-4">
                    <span class="w-2 h-2 rounded-full bg-secondary-container animate-pulse"></span>
                    <span class="text-secondary-container font-label-sm text-label-sm uppercase tracking-wider">Calidad de Importación</span>
                </div>
                <h1 class="font-headline-xl text-[40px] leading-[48px] text-on-primary mb-4">La Restauración que Mereces.</h1>
                <p class="font-body-lg text-body-lg text-on-primary/80 mb-8 max-w-[90%]">Tecnología capilar avanzada con terminaciones artesanales para un aspecto 100% natural.</p>
                <div class="flex flex-col gap-4">
                    <a href="/tienda" class="w-full text-center bg-secondary-container text-on-secondary-container font-label-md text-label-md py-4 rounded-xl font-bold shadow-lg active:scale-[0.98] transition-transform">Ver Catálogo Premium</a>
                    <a href="/colocacion" class="w-full text-center border-2 border-on-primary text-on-primary font-label-md text-label-md py-4 rounded-xl font-bold active:scale-[0.98] transition-transform">Consultoría Gratis</a>
                </div>
            </div>
        </section>

        <!-- Beneficios Section (Asymmetric Grid) -->
        <section class="py-12 px-margin-mobile bg-surface-container-low">
            <h2 class="font-headline-lg-mobile text-headline-lg-mobile mb-8 text-primary">Nuestros Pilares</h2>
            <div class="grid grid-cols-2 gap-4">
                <div class="col-span-2 bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant shadow-[0_2px_4px_rgba(15,23,42,0.05)]">
                    <div class="w-12 h-12 bg-secondary-container/20 rounded-xl flex items-center justify-center mb-4">
                        <span class="material-symbols-outlined text-secondary" data-icon="verified">verified</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md mb-2">Naturalidad</h3>
                    <p class="text-on-surface-variant font-body-md text-body-md">Bases de micro-malla invisibles que se funden con tu piel.</p>
                </div>
                <div class="bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant shadow-[0_2px_4px_rgba(15,23,42,0.05)]">
                    <div class="w-12 h-12 bg-secondary-container/20 rounded-xl flex items-center justify-center mb-4">
                        <span class="material-symbols-outlined text-secondary" data-icon="favorite">favorite</span>
                    </div>
                    <h3 class="font-label-md text-label-md font-bold mb-1">Confianza</h3>
                    <p class="text-on-surface-variant text-sm">Discreción absoluta en cada paso.</p>
                </div>
                <div class="bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant shadow-[0_2px_4px_rgba(15,23,42,0.05)]">
                    <div class="w-12 h-12 bg-secondary-container/20 rounded-xl flex items-center justify-center mb-4">
                        <span class="material-symbols-outlined text-secondary" data-icon="timer">timer</span>
                    </div>
                    <h3 class="font-label-md text-label-md font-bold mb-1">Durabilidad</h3>
                    <p class="text-on-surface-variant text-sm">Sistemas diseñados para el uso diario intenso.</p>
                </div>
            </div>
        </section>

        <!-- Featured Products (Bento Grid Style) -->
        <section class="py-12 px-margin-mobile">
            <div class="flex justify-between items-end mb-8">
                <div>
                    <span class="text-secondary font-label-sm text-label-sm uppercase tracking-widest font-bold">Best Sellers</span>
                    <h2 class="font-headline-lg-mobile text-headline-lg-mobile text-primary">Sistemas Destacados</h2>
                </div>
                <a href="/tienda" class="text-secondary font-label-md text-label-md font-bold underline underline-offset-4">Ver todo</a>
            </div>
            <div class="grid grid-cols-1 gap-6">
                <!-- Product 1 -->
                <div class="group relative bg-surface-container-lowest rounded-[2rem] overflow-hidden border border-outline-variant shadow-md">
                    <div class="aspect-[4/3] w-full bg-surface-container-high relative">
                        <div class="absolute inset-0 bg-cover bg-center" data-alt="Product photography of a 'Premium Lace' hair system." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDKVv8kShJKNFvnvBjZ5zYvyueHT_X---mp5gDL-HsvP5CmttMZy_rj3nYx_VvMx3yOijciDneIQbiZfw-Nmxorr4ZR23Bt9tqAMX9-AOjUGOIOj1YEUd-pvr_CSf_nynbanDWc55XymBvvpJRx-rNr5unBkxvNqP3jznKM-IR5nsQs1EV-Yjtlg_pAvjFqfKnUjJ5taSvsN1sgA20TV-3tU-T_w88jckJk8qdBWlJAeHNHu8r1vgL_bw')"></div>
                        <div class="absolute top-4 right-4 bg-tertiary-fixed text-on-tertiary-fixed px-3 py-1 rounded-full font-label-sm text-label-sm">Premium</div>
                    </div>
                    <div class="p-6">
                        <h4 class="font-headline-md text-headline-md mb-1">Sistema Premium Lace HD</h4>
                        <p class="text-on-surface-variant font-body-md text-body-md mb-4">Cabello humano virgen con base de encaje suizo ultra delgado.</p>
                        <div class="flex justify-between items-center">
                            <span class="font-headline-md text-primary">$1,250 USD</span>
                            <button class="w-10 h-10 bg-primary text-on-primary rounded-full flex items-center justify-center active:scale-90 transition-transform">
                                <span class="material-symbols-outlined" data-icon="add">add</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Product 2 (Horizontal Layout) -->
                <a href="/kit-premium" class="flex gap-4 p-4 bg-surface-container-high/50 rounded-2xl border border-outline-variant/50 cursor-pointer">
                    <div class="w-32 h-32 flex-shrink-0 bg-surface-container-low rounded-xl overflow-hidden">
                        <div class="w-full h-full bg-cover bg-center" data-alt="Close-up of a 'Skin Thin' hair system base." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA1EjuhkgxKv9zL_YG_rLU9lzHJBhHhb1ssV67wgRlsXqDbcivcikWMBzbuhD8d7I3oohRwwQ1J-OfHDq0mZjUdaw0w0eJ8pXFd3M7FcfafdONWVda1SgJEKtwbKmPdRLVgcKZBSQKvP97gACIMwGE8Tp3RXWYCOI4bWrbiNoKzoTanZ0iNediYFwPVh_xIgdV-d9oSKygwn-AR2TjM7IebfC_gAfpEYks4_KVhCbZ9ntO_aPdRwVsr1Q')"></div>
                    </div>
                    <div class="flex flex-col justify-center">
                        <h4 class="font-label-md text-label-md font-bold">Skin Thin Base</h4>
                        <p class="text-on-surface-variant text-sm mb-2">Ideal para estilos hacia atrás.</p>
                        <span class="text-secondary font-bold">$980 USD</span>
                    </div>
                </a>
            </div>
        </section>

        <!-- Services Section -->
        <section class="py-12 px-margin-mobile bg-primary text-on-primary">
            <h2 class="font-headline-lg-mobile text-headline-lg-mobile mb-8">Nuestros Servicios</h2>
            <div class="space-y-4">
                <a href="/colocacion" class="relative h-48 rounded-2xl overflow-hidden group block">
                    <div class="absolute inset-0 opacity-40 bg-cover bg-center" data-alt="A professional stylist performing a placement." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD2isOD_Mkj1rwd9dx5rIaNVtrKL9oShYYpcgPWTSXXnAfWAXH-P6K5qgAxK_psdREcXNZ7r2J0NAFcDo08xPjRP2RV91AqqS3oclNLrwHw85dTOBb7YboT_679VlXY_TCJWnEiV8wsR4VT3g4zZJk_ZFAscVTiZXFv1I05Tk1KXY4C6D4HBjXquj6Sm7_-apwRWNRaHuNe0wDjV7XgBBEyKKHzzexEB1z35nCOMDM6pU7Urxf5hLIp_g')"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-primary via-primary/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6">
                        <h3 class="font-headline-md text-headline-md mb-1">Colocación Profesional</h3>
                        <p class="text-on-primary/70 text-sm">Técnicas de fijación imperceptibles por expertos.</p>
                    </div>
                    <div class="absolute top-6 right-6">
                        <span class="material-symbols-outlined text-secondary-container" data-icon="content_cut">content_cut</span>
                    </div>
                </a>
                <a href="/capacitaciones" class="relative h-48 rounded-2xl overflow-hidden group block">
                    <div class="absolute inset-0 opacity-40 bg-cover bg-center" data-alt="A classroom demonstrating hair system techniques." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAIHzqptwi4fKkAyw2nmQaJ-D-Tv94lvxRGYVmsyvlvgI99mW43KvEec212ypuvOBhVI1cIqIbP9-y2rD-xw9UzJ42zPauz-Pa0PSEAWEQN5hU6wMQNmGdmFLOJyuPdFuT8f0nZRiSWtBCS5jljokOD4HRmskq2STE459qWKzWV8lztl2ybfKD7FGm3fIooST5uKuxLfSBAuTJVJj1PHsaVkdreRpcLGypeP-0xtek6UeQAfi6EF5zgtw')"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-primary via-primary/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6">
                        <h3 class="font-headline-md text-headline-md mb-1">Capacitaciones</h3>
                        <p class="text-on-primary/70 text-sm">Conviértete en un experto en sistemas capilares.</p>
                    </div>
                    <div class="absolute top-6 right-6">
                        <span class="material-symbols-outlined text-secondary-container" data-icon="school">school</span>
                    </div>
                </a>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-surface-container-highest py-12 px-margin-mobile mb-16 border-t border-outline-variant">
        <div class="mb-8">
            <span class="font-headline-md text-headline-md font-bold text-primary">CAPILLAR PREM</span>
            <p class="text-on-surface-variant font-body-md text-body-md mt-4">Líderes en importación y restauración capilar de alta gama.</p>
        </div>
        <div class="grid grid-cols-2 gap-8 mb-12">
            <div class="flex flex-col gap-4">
                <span class="font-label-md font-bold text-primary uppercase">Empresa</span>
                <a class="text-on-surface-variant hover:text-secondary transition-colors" href="#">Privacidad</a>
                <a class="text-on-surface-variant hover:text-secondary transition-colors" href="#">Términos</a>
            </div>
            <div class="flex flex-col gap-4">
                <span class="font-label-md font-bold text-primary uppercase">Ayuda</span>
                <a class="text-on-surface-variant hover:text-secondary transition-colors" href="#">Envíos</a>
                <a class="text-on-surface-variant hover:text-secondary transition-colors" href="#">Contacto</a>
            </div>
        </div>
        <div class="text-on-surface-variant font-label-sm text-label-sm opacity-70">
            © 2024 Capillar Premium. Excelencia en restauración capilar.
        </div>
    </footer>

    <!-- BottomNavBar -->
    <nav class="fixed bottom-0 left-0 w-full z-50 bg-surface/90 backdrop-blur-md border-t border-outline-variant/30 flex justify-around items-center px-6 py-3 pb-safe shadow-[0_-4px_6px_-1px_rgba(15,23,42,0.05)]">
        <a class="flex items-center justify-center bg-secondary-container text-on-secondary-container rounded-full p-3 active:scale-90 transition-all" href="/">
            <span class="material-symbols-outlined" data-icon="home" style="font-variation-settings: 'FILL' 1;">home</span>
        </a>
        <a class="flex items-center justify-center text-on-surface-variant p-3 hover:scale-110 active:scale-90 transition-all" href="/tienda">
            <span class="material-symbols-outlined" data-icon="search">search</span>
        </a>
        <a class="flex items-center justify-center text-on-surface-variant p-3 hover:scale-110 active:scale-90 transition-all" href="https://wa.me/yournumber" target="_blank">
            <span class="material-symbols-outlined" data-icon="chat">chat</span>
        </a>
        <a class="flex items-center justify-center text-on-surface-variant p-3 hover:scale-110 active:scale-90 transition-all" href="/colocacion">
            <span class="material-symbols-outlined" data-icon="support_agent">support_agent</span>
        </a>
    </nav>

    <!-- Drawer Overlay (Hidden by default) -->
    <div class="fixed inset-0 bg-black/50 z-[59] hidden transition-opacity duration-300 opacity-0" id="drawer-overlay"></div>
    <!-- NavigationDrawer (Mobile Only) -->
    <div class="fixed inset-y-0 left-0 z-[60] w-80 bg-surface shadow-xl transform -translate-x-full transition-transform duration-300 ease-in-out flex flex-col rounded-r-xl" id="navigation-drawer">
        <div class="p-6 border-b border-outline-variant">
            <span class="font-headline-md text-headline-md font-bold text-primary">Menú Principal</span>
        </div>
        <div class="flex-1 py-4 flex flex-col gap-1">
            <a href="/" class="flex items-center gap-4 px-6 py-4 bg-secondary-container text-on-secondary-container font-bold rounded-full mx-2">
                <span class="material-symbols-outlined" data-icon="face">face</span>
                <span class="font-label-md text-label-md">Sistemas Capilares</span>
            </a>
            <a href="/colocacion" class="flex items-center gap-4 px-6 py-4 text-on-surface-variant hover:bg-surface-container-high rounded-full mx-2">
                <span class="material-symbols-outlined" data-icon="content_cut">content_cut</span>
                <span class="font-label-md text-label-md">Servicios de Colocación</span>
            </a>
            <a href="/capacitaciones" class="flex items-center gap-4 px-6 py-4 text-on-surface-variant hover:bg-surface-container-high rounded-full mx-2">
                <span class="material-symbols-outlined" data-icon="school">school</span>
                <span class="font-label-md text-label-md">Capacitaciones</span>
            </a>
            <a href="/tienda" class="flex items-center gap-4 px-6 py-4 text-on-surface-variant hover:bg-surface-container-high rounded-full mx-2">
                <span class="material-symbols-outlined" data-icon="shopping_bag">shopping_bag</span>
                <span class="font-label-md text-label-md">Tienda Online</span>
            </a>
            <div class="mt-auto border-t border-outline-variant pt-4 mb-8">
                <a href="#" class="flex items-center gap-4 px-6 py-4 text-on-surface-variant hover:bg-surface-container-high rounded-full mx-2">
                    <span class="material-symbols-outlined" data-icon="person">person</span>
                    <span class="font-label-md text-label-md">Mi Cuenta</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- ========================================== -->
<!--                  SCRIPTS                   -->
<!-- ========================================== -->
<script>
    // Desktop intersection observer for reveal effects
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('opacity-100', 'translate-y-0');
                entry.target.classList.remove('opacity-0', 'translate-y-10');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.shadow-clinical').forEach(el => {
        el.classList.add('transition-all', 'duration-700', 'opacity-0', 'translate-y-10');
        observer.observe(el);
    });

    // Mobile Navigation Drawer Toggle Script
    const menuBtn = document.getElementById('menu-drawer-toggle');
    const drawer = document.getElementById('navigation-drawer');
    const overlay = document.getElementById('drawer-overlay');

    function toggleDrawer() {
        const isOpen = !drawer.classList.contains('-translate-x-full');
        if (isOpen) {
            drawer.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
            overlay.classList.remove('opacity-100');
        } else {
            drawer.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
            setTimeout(() => overlay.classList.add('opacity-100'), 10);
        }
    }

    if (menuBtn) menuBtn.addEventListener('click', toggleDrawer);
    if (overlay) overlay.addEventListener('click', toggleDrawer);

    // Micro-interactions for buttons
    document.querySelectorAll('button').forEach(btn => {
        btn.addEventListener('touchstart', () => btn.classList.add('scale-[0.98]'));
        btn.addEventListener('touchend', () => btn.classList.remove('scale-[0.98]'));
    });
</script>
</body>
</html>
