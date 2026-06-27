<!DOCTYPE html>
<html class="light" lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
    <title>Kit Inicial Premium - HAIRPRESTIGE</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(226, 232, 240, 0.8);
        }
        .product-shadow {
            box-shadow: 0 2px 4px rgba(15, 23, 42, 0.05);
        }
        .active-thumb {
            border: 2px solid #006591;
        }
        body {
            min-height: max(884px, 100dvh);
            -webkit-tap-highlight-color: transparent;
            scroll-behavior: smooth;
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
<body class="bg-background text-on-surface font-body-md selection:bg-secondary-fixed selection:text-on-secondary-fixed">

<!-- ========================================== -->
<!--            DESKTOP LAYOUT (md+)            -->
<!-- ========================================== -->
<div class="hidden md:block">
    <!-- TopNavBar -->
    <nav class="sticky top-0 z-50 bg-surface-container-lowest border-b border-outline-variant shadow-sm transition-all duration-300 ease-in-out">
        <div class="flex justify-between items-center px-margin-mobile md:px-margin-desktop py-4 max-w-container-max mx-auto">
            <a class="font-headline-md text-headline-md font-bold text-on-surface tracking-tight" href="/">HAIRPRESTIGE</a>
            <div class="hidden md:flex items-center gap-8">
                <a class="text-on-surface-variant hover:text-secondary transition-colors font-label-md text-label-md" href="/">Inicio</a>
                <a class="text-on-surface-variant hover:text-secondary transition-colors font-label-md text-label-md" href="/tienda">Tienda</a>
                <a class="text-on-surface-variant hover:text-secondary transition-colors font-label-md text-label-md" href="/colocacion">Colocación</a>
                <a class="text-on-surface-variant hover:text-secondary transition-colors font-label-md text-label-md" href="/capacitaciones">Capacitaciones</a>
            </div>
            <div class="flex items-center gap-4">
                <a href="/tienda" class="material-symbols-outlined text-secondary transition-all hover:bg-surface-container-low p-2 rounded-full" data-icon="shopping_cart">shopping_cart</a>
                <a href="https://wa.me/yournumber" target="_blank" class="bg-secondary text-on-secondary px-6 py-2 rounded-full font-label-md text-label-md hover:opacity-90 transition-opacity">WhatsApp</a>
            </div>
        </div>
    </nav>

    <main class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-12">
        <!-- Product Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-20">
            <!-- Gallery Left -->
            <div class="flex flex-col gap-4">
                <div class="aspect-square bg-surface-container-low rounded-xl overflow-hidden border border-outline-variant group">
                    <img id="main-product-image" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="Kit Premium principal" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB7Ghv7bELk8wGb3beJ60EZFdod9sKId9rwE_t_W7RZSCnuFqb_KQj7122aamUhSK8WOD7yv6eA0FaLscl8xfBiJhUJq_7_vaYd58m4KSzlZhTcYbhpruqaJHoJuD-xIotBObmzQymM7JoxJuRv3_FdTcmfIpiMgUc4AdYSgQ7PlULDeP_be5sH5clihmr0N19Smy5aCkld-g9R-mNvRyhR6onJvU5QMhM8Z0QgkuOI8pEfNGpE7Q_40Q"/>
                </div>
                <div class="grid grid-cols-4 gap-4">
                    <button class="aspect-square rounded-lg overflow-hidden border-2 border-secondary p-1 bg-surface-container-lowest transition-colors">
                        <img class="w-full h-full object-cover rounded" data-alt="Kit Premium principal" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB7Ghv7bELk8wGb3beJ60EZFdod9sKId9rwE_t_W7RZSCnuFqb_KQj7122aamUhSK8WOD7yv6eA0FaLscl8xfBiJhUJq_7_vaYd58m4KSzlZhTcYbhpruqaJHoJuD-xIotBObmzQymM7JoxJuRv3_FdTcmfIpiMgUc4AdYSgQ7PlULDeP_be5sH5clihmr0N19Smy5aCkld-g9R-mNvRyhR6onJvU5QMhM8Z0QgkuOI8pEfNGpE7Q_40Q"/>
                    </button>
                    <button class="aspect-square rounded-lg overflow-hidden border border-outline-variant p-1 bg-surface-container-lowest hover:border-secondary transition-colors">
                        <img class="w-full h-full object-cover rounded" data-alt="Lace base detail" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCedjH6k7Lq8ZTuKCj_4m5PJlLmRR3H_qVR5JhSBoDj1pFHu5qZV1huzR350-wLAw9yFO9rt7WxeoR61Cmo59TGc8WjFVZHGWNuxuvE1ST7LjMLwtCvSa_9JGJss3-o8s92D6cPW88WgEbrVFnf4csQe-dF-RuT2HTD4EHin3d392qNqIszotN-8xGEW76LsFYJpOBoaRk_HXbuOXA-NjobicnVVKpOqhlD24Ri_Ano76Bxg6KHL3sFPg"/>
                    </button>
                    <button class="aspect-square rounded-lg overflow-hidden border border-outline-variant p-1 bg-surface-container-lowest hover:border-secondary transition-colors">
                        <img class="w-full h-full object-cover rounded" data-alt="Maintenance tools" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCNucS8XrRMXeofS0OJh3gbtn-Qhy-Xw2A0FmF1weqRkph90bwd6NRnkcLZNjYiRoYOeduLTIPjhLPkDL3TGkOiVPvnb0yajF-gRx8Du7oKSQd76GnxZ5VQv1qa-ldgUNNq3roDEA0rbJSaSajAhk-BFyNrQ6B2s5q3-T7UbNa68L7oc5EpDVQf1lwteyM2bc2G5hMyInKY5qql8PXrAYM6_honAB_eYX1Vft_9nVEUT-5jA34P2r0w2w"/>
                    </button>
                    <button class="aspect-square rounded-lg overflow-hidden border border-outline-variant p-1 bg-surface-container-lowest hover:border-secondary transition-colors">
                        <img class="w-full h-full object-cover rounded" data-alt="Starter box contents" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA_0Y-PnqgtBo99HMfpvVChLeaUjZtbSc1OxnguGSk0OF9fvnRddjKfq1DUJVp_RkXbs1iz10cT0lHU17yJBk9nhGaE2NvXR7B2bYyhvdNffmMU8aT536YFuuXoP1CMGcm1Udarg3ybRdCOIw5ftkI5ckxOI6KyuZ0y2NxJFEtEPloCSTnCu-vXPW8be-3_FVGJP73IF1mJrtPQ-XN91ckjac-4xuDAUNS8CyY_Axwbe_0__jrblt1eMg"/>
                    </button>
                </div>
            </div>
            <!-- Content Right -->
            <div class="flex flex-col gap-6">
                <div class="space-y-2">
                    <span class="inline-block px-3 py-1 bg-tertiary-fixed text-on-tertiary-fixed text-label-sm font-label-sm rounded-full tracking-wider uppercase">Lo más vendido</span>
                    <h1 class="font-headline-xl text-headline-xl text-on-surface leading-tight">Kit Inicial Premium</h1>
                    <div class="flex items-center gap-2 text-secondary">
                        <span class="font-headline-md text-headline-md">$249.000</span>
                        <span class="text-on-surface-variant line-through text-label-md">$285.000</span>
                    </div>
                </div>
                <div class="p-6 bg-surface-container-low rounded-xl border border-outline-variant">
                    <h3 class="font-label-md text-label-md text-on-surface-variant uppercase tracking-widest mb-4">Lo que incluye:</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-secondary mt-0.5" data-icon="check_circle">check_circle</span>
                            <div>
                                <strong class="text-on-surface">Prótesis Capilares de Alta Gama:</strong>
                                <p class="text-on-surface-variant text-body-md">Base de micro-malla transpirable con cabello humano seleccionado.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-secondary mt-0.5" data-icon="check_circle">check_circle</span>
                            <div>
                                <strong class="text-on-surface">Kit de Adhesivos &amp; Cintas:</strong>
                                <p class="text-on-surface-variant text-body-md">Sujeción ultra-fuerte de grado médico, resistente al agua.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-secondary mt-0.5" data-icon="check_circle">check_circle</span>
                            <div>
                                <strong class="text-on-surface">Removedor Profesional:</strong>
                                <p class="text-on-surface-variant text-body-md">Fórmula solvente cítrica para una limpieza segura y sin residuos.</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="material-symbols-outlined text-secondary mt-0.5" data-icon="check_circle">check_circle</span>
                            <div>
                                <strong class="text-on-surface">Guía Básica de Uso:</strong>
                                <p class="text-on-surface-variant text-body-md">Manual paso a paso para la aplicación, corte y mantenimiento diario.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="space-y-4 pt-4 border-t border-outline-variant">
                    <div class="flex gap-4">
                        <div class="flex items-center border border-outline rounded-lg bg-surface-container-lowest">
                            <button class="p-3 text-on-surface-variant hover:text-primary transition-colors" onclick="this.nextElementSibling.stepDown()">
                                <span class="material-symbols-outlined" data-icon="remove">remove</span>
                            </button>
                            <input class="w-12 text-center bg-transparent border-none focus:ring-0 font-bold text-on-surface" min="1" type="number" value="1"/>
                            <button class="p-3 text-on-surface-variant hover:text-primary transition-colors" onclick="this.previousElementSibling.stepUp()">
                                <span class="material-symbols-outlined" data-icon="add">add</span>
                            </button>
                        </div>
                        <button class="flex-1 bg-secondary text-on-secondary font-headline-md text-headline-md py-4 rounded-xl hover:opacity-90 transition-all flex items-center justify-center gap-2" onclick="alert('Producto añadido al carrito.')">
                            Comprar Ahora
                            <span class="material-symbols-outlined" data-icon="arrow_forward">arrow_forward</span>
                        </button>
                    </div>
                </div>
                <!-- Shipping Info -->
                <div class="p-4 bg-secondary-container/10 rounded-lg border border-secondary/20 flex items-start gap-3">
                    <span class="material-symbols-outlined text-secondary" data-icon="local_shipping">local_shipping</span>
                    <div class="text-label-md">
                        <p class="text-on-secondary-container font-bold">Información de Envío Detallada</p>
                        <p class="text-on-secondary-container opacity-80">Producto importado de alta gama. Seguimiento online garantizado. Tiempo estimado de entrega: <span class="font-bold">2-4 semanas</span>.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQ Section -->
        <section class="mt-24">
            <div class="text-center mb-12">
                <h2 class="font-headline-lg text-headline-lg text-on-surface">Preguntas Frecuentes</h2>
                <p class="text-on-surface-variant text-body-lg">Despeja tus dudas sobre mantenimiento y durabilidad.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-6 bg-surface-container-lowest rounded-xl border border-outline-variant shadow-sm hover:shadow-md transition-shadow">
                    <h4 class="font-headline-md text-headline-md text-secondary mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined" data-icon="history">history</span>
                        ¿Cuánto dura la prótesis?
                    </h4>
                    <p class="text-on-surface-variant">Dependiendo del cuidado y el tipo de base, una prótesis Premium puede durar entre 4 a 8 meses. El kit inicial incluye guías para maximizar esta vida útil mediante limpiezas adecuadas.</p>
                </div>
                <div class="p-6 bg-surface-container-lowest rounded-xl border border-outline-variant shadow-sm hover:shadow-md transition-shadow">
                    <h4 class="font-headline-md text-headline-md text-secondary mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined" data-icon="water_drop">water_drop</span>
                        ¿Puedo hacer deporte o nadar?
                    </h4>
                    <p class="text-on-surface-variant">Sí. Nuestros adhesivos de grado médico están diseñados para resistir el sudor y el agua. Podrás llevar una vida activa, ir al gimnasio o a la piscina con total confianza.</p>
                </div>
                <div class="p-6 bg-surface-container-lowest rounded-xl border border-outline-variant shadow-sm hover:shadow-md transition-shadow">
                    <h4 class="font-headline-md text-headline-md text-secondary mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined" data-icon="brush">brush</span>
                        ¿Cómo es el mantenimiento?
                    </h4>
                    <p class="text-on-surface-variant">Se recomienda una limpieza profunda y cambio de adhesivos cada 2-3 semanas. El removedor incluido en el kit facilita enormemente este proceso sin dañar el cabello.</p>
                </div>
                <div class="p-6 bg-surface-container-lowest rounded-xl border border-outline-variant shadow-sm hover:shadow-md transition-shadow">
                    <h4 class="font-headline-md text-headline-md text-secondary mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined" data-icon="visibility">visibility</span>
                        ¿Es realmente indetectable?
                    </h4>
                    <p class="text-on-surface-variant">Absolutamente. La micro-malla de alta tecnología permite que el cuero cabelludo se vea a través de la base, creando una transición invisible incluso en la línea frontal del cabello.</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-surface-container-highest border-t border-outline-variant mt-24">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-gutter px-margin-mobile md:px-margin-desktop py-12 max-w-container-max mx-auto">
            <div class="col-span-1 md:col-span-1">
                <div class="font-headline-sm text-headline-sm font-bold text-on-surface mb-4">HAIRPRESTIGE</div>
                <p class="text-on-surface-variant text-body-md opacity-80">Excelencia en restauración capilar y suministros médicos importados para profesionales y pacientes.</p>
            </div>
            <div class="flex flex-col gap-2">
                <h5 class="font-label-md text-label-md text-secondary uppercase tracking-wider mb-2">Compañía</h5>
                <a class="text-on-surface-variant hover:text-primary transition-colors text-label-sm" href="#">Contacto</a>
                <a class="text-on-surface-variant hover:text-primary transition-colors text-label-sm" href="#">Sobre Nosotros</a>
                <a class="text-on-surface-variant hover:text-primary transition-colors text-label-sm" href="#">Blog</a>
            </div>
            <div class="flex flex-col gap-2">
                <h5 class="font-label-md text-label-md text-secondary uppercase tracking-wider mb-2">Soporte</h5>
                <a class="text-on-surface-variant hover:text-primary transition-colors text-label-sm" href="#">Envíos</a>
                <a class="text-on-surface-variant hover:text-primary transition-colors text-label-sm" href="#">Términos y Condiciones</a>
                <a class="text-on-surface-variant hover:text-primary transition-colors text-label-sm" href="#">Privacidad</a>
            </div>
            <div class="flex flex-col gap-4">
                <h5 class="font-label-md text-label-md text-secondary uppercase tracking-wider">Boletín Premium</h5>
                <div class="flex bg-surface-container-lowest rounded-lg border border-outline p-1">
                    <input class="bg-transparent border-none focus:ring-0 text-label-sm flex-1 px-2" placeholder="Tu email" type="email"/>
                    <button class="bg-primary text-on-primary px-3 py-1 rounded-md text-label-sm">Unirse</button>
                </div>
            </div>
        </div>
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-6 border-t border-outline-variant/30 text-center">
            <p class="text-label-sm text-on-surface-variant opacity-70">© 2024 HairPrestige Medical Capillary. Todos los derechos reservados.</p>
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
                    <a class="flex items-center gap-4 py-3 px-4 text-on-surface-variant hover:bg-surface-container-high rounded-full mx-2 transition-all" href="/colocacion">
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

    <main class="pt-20 pb-28 px-margin-mobile">
        <!-- Main Image -->
        <div class="aspect-square bg-surface-container-low rounded-xl overflow-hidden border border-outline-variant mb-4">
            <img id="mobile-main-product-image" class="w-full h-full object-cover" data-alt="Kit Premium principal" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB7Ghv7bELk8wGb3beJ60EZFdod9sKId9rwE_t_W7RZSCnuFqb_KQj7122aamUhSK8WOD7yv6eA0FaLscl8xfBiJhUJq_7_vaYd58m4KSzlZhTcYbhpruqaJHoJuD-xIotBObmzQymM7JoxJuRv3_FdTcmfIpiMgUc4AdYSgQ7PlULDeP_be5sH5clihmr0N19Smy5aCkld-g9R-mNvRyhR6onJvU5QMhM8Z0QgkuOI8pEfNGpE7Q_40Q"/>
        </div>
        <!-- Thumbnails Grid -->
        <div class="grid grid-cols-4 gap-3 mb-6">
            <button class="aspect-square rounded-lg overflow-hidden border-2 border-secondary p-0.5 bg-surface-container-lowest">
                <img class="w-full h-full object-cover rounded" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB7Ghv7bELk8wGb3beJ60EZFdod9sKId9rwE_t_W7RZSCnuFqb_KQj7122aamUhSK8WOD7yv6eA0FaLscl8xfBiJhUJq_7_vaYd58m4KSzlZhTcYbhpruqaJHoJuD-xIotBObmzQymM7JoxJuRv3_FdTcmfIpiMgUc4AdYSgQ7PlULDeP_be5sH5clihmr0N19Smy5aCkld-g9R-mNvRyhR6onJvU5QMhM8Z0QgkuOI8pEfNGpE7Q_40Q"/>
            </button>
            <button class="aspect-square rounded-lg overflow-hidden border border-outline-variant p-0.5 bg-surface-container-lowest">
                <img class="w-full h-full object-cover rounded" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCedjH6k7Lq8ZTuKCj_4m5PJlLmRR3H_qVR5JhSBoDj1pFHu5qZV1huzR350-wLAw9yFO9rt7WxeoR61Cmo59TGc8WjFVZHGWNuxuvE1ST7LjMLwtCvSa_9JGJss3-o8s92D6cPW88WgEbrVFnf4csQe-dF-RuT2HTD4EHin3d392qNqIszotN-8xGEW76LsFYJpOBoaRk_HXbuOXA-NjobicnVVKpOqhlD24Ri_Ano76Bxg6KHL3sFPg"/>
            </button>
            <button class="aspect-square rounded-lg overflow-hidden border border-outline-variant p-0.5 bg-surface-container-lowest">
                <img class="w-full h-full object-cover rounded" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCNucS8XrRMXeofS0OJh3gbtn-Qhy-Xw2A0FmF1weqRkph90bwd6NRnkcLZNjYiRoYOeduLTIPjhLPkDL3TGkOiVPvnb0yajF-gRx8Du7oKSQd76GnxZ5VQv1qa-ldgUNNq3roDEA0rbJSaSajAhk-BFyNrQ6B2s5q3-T7UbNa68L7oc5EpDVQf1lwteyM2bc2G5hMyInKY5qql8PXrAYM6_honAB_eYX1Vft_9nVEUT-5jA34P2r0w2w"/>
            </button>
            <button class="aspect-square rounded-lg overflow-hidden border border-outline-variant p-0.5 bg-surface-container-lowest">
                <img class="w-full h-full object-cover rounded" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA_0Y-PnqgtBo99HMfpvVChLeaUjZtbSc1OxnguGSk0OF9fvnRddjKfq1DUJVp_RkXbs1iz10cT0lHU17yJBk9nhGaE2NvXR7B2bYyhvdNffmMU8aT536YFuuXoP1CMGcm1Udarg3ybRdCOIw5ftkI5ckxOI6KyuZ0y2NxJFEtEPloCSTnCu-vXPW8be-3_FVGJP73IF1mJrtPQ-XN91ckjac-4xuDAUNS8CyY_Axwbe_0__jrblt1eMg"/>
            </button>
        </div>

        <!-- Details -->
        <div class="space-y-4 mb-6">
            <span class="inline-block px-3 py-1 bg-tertiary-fixed text-on-tertiary-fixed text-label-sm font-label-sm rounded-full uppercase tracking-wider">Lo más vendido</span>
            <h1 class="font-headline-lg-mobile text-headline-lg-mobile text-on-surface font-bold leading-tight">Kit Inicial Premium</h1>
            <div class="flex items-baseline gap-2">
                <span class="font-headline-md text-headline-md text-secondary">$249.000</span>
                <span class="text-on-surface-variant line-through text-label-sm">$285.000</span>
            </div>
        </div>

        <!-- Inclusion Card -->
        <div class="p-5 bg-surface-container-low rounded-xl border border-outline-variant mb-6">
            <h3 class="font-label-md text-label-md text-on-surface-variant uppercase tracking-widest mb-4 font-bold">Lo que incluye:</h3>
            <ul class="space-y-4 text-label-sm">
                <li class="flex items-start gap-2">
                    <span class="material-symbols-outlined text-secondary text-lg mt-0.5">check_circle</span>
                    <div>
                        <strong class="text-on-surface">Prótesis Capilar de Alta Gama:</strong>
                        <p class="text-on-surface-variant text-xs">Micro-malla transpirable con cabello humano seleccionado.</p>
                    </div>
                </li>
                <li class="flex items-start gap-2">
                    <span class="material-symbols-outlined text-secondary text-lg mt-0.5">check_circle</span>
                    <div>
                        <strong class="text-on-surface">Kit de Adhesivos &amp; Cintas:</strong>
                        <p class="text-on-surface-variant text-xs">Sujeción ultra-fuerte de grado médico, resistente al agua.</p>
                    </div>
                </li>
                <li class="flex items-start gap-2">
                    <span class="material-symbols-outlined text-secondary text-lg mt-0.5">check_circle</span>
                    <div>
                        <strong class="text-on-surface">Removedor Profesional:</strong>
                        <p class="text-on-surface-variant text-xs">Fórmula solvente cítrica para remoción sin residuos.</p>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Buy Action Section -->
        <div class="space-y-4 pt-4 border-t border-outline-variant mb-8">
            <div class="flex flex-col gap-4">
                <div class="flex items-center justify-between border border-outline rounded-lg bg-surface-container-lowest p-1.5 w-full">
                    <button class="p-2 text-on-surface-variant active:text-primary" onclick="this.nextElementSibling.stepDown()">
                        <span class="material-symbols-outlined">remove</span>
                    </button>
                    <input class="w-12 text-center bg-transparent border-none focus:ring-0 font-bold text-on-surface" min="1" type="number" value="1"/>
                    <button class="p-2 text-on-surface-variant active:text-primary" onclick="this.previousElementSibling.stepUp()">
                        <span class="material-symbols-outlined">add</span>
                    </button>
                </div>
                <button class="w-full bg-secondary text-on-secondary font-headline-md text-headline-md py-4 rounded-xl active:scale-95 transition-transform flex items-center justify-center gap-2" onclick="alert('Producto añadido al carrito.')">
                    Comprar Ahora
                    <span class="material-symbols-outlined">arrow_forward</span>
                </button>
            </div>
        </div>

        <!-- Shipping Callout -->
        <div class="p-4 bg-secondary-container/10 rounded-lg border border-secondary/20 flex items-start gap-3 mb-10">
            <span class="material-symbols-outlined text-secondary">local_shipping</span>
            <div class="text-xs">
                <p class="text-on-secondary-container font-bold">Información de Envío Detallada</p>
                <p class="text-on-secondary-container opacity-80">Seguimiento online garantizado. Tiempo de entrega: 2-4 semanas.</p>
            </div>
        </div>

        <!-- FAQ Section -->
        <section class="py-6 border-t border-outline-variant">
            <h2 class="font-headline-md text-headline-md text-center mb-6">Preguntas Frecuentes</h2>
            <div class="space-y-4">
                <details class="group bg-surface-container-low rounded-xl border border-outline-variant overflow-hidden">
                    <summary class="flex justify-between items-center p-4 cursor-pointer list-none">
                        <span class="font-label-md text-on-surface font-bold">¿Cuánto dura la prótesis?</span>
                        <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                    </summary>
                    <div class="p-4 pt-0 text-on-surface-variant border-t border-outline-variant/30 text-xs">
                        Una prótesis Premium puede durar entre 4 a 8 meses. El kit incluye una guía para maximizar su durabilidad.
                    </div>
                </details>
                <details class="group bg-surface-container-low rounded-xl border border-outline-variant overflow-hidden">
                    <summary class="flex justify-between items-center p-4 cursor-pointer list-none">
                        <span class="font-label-md text-on-surface font-bold">¿Puedo hacer deporte o nadar?</span>
                        <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                    </summary>
                    <div class="p-4 pt-0 text-on-surface-variant border-t border-outline-variant/30 text-xs">
                        Sí, nuestros adhesivos médicos están diseñados para resistir sudor y agua perfectamente.
                    </div>
                </details>
            </div>
        </section>

        <!-- Footer -->
        <footer class="w-full py-12 px-margin-mobile flex flex-col items-center gap-8 bg-surface-container-highest dark:bg-surface-container-lowest border-t border-outline-variant pb-32">
            <h1 class="font-headline-md text-headline-md font-bold text-primary">CAPILLAR PREM</h1>
            <div class="flex flex-wrap justify-center gap-x-6 gap-y-4">
                <a class="text-on-surface-variant hover:text-primary font-body-md text-body-md" href="#">Privacidad</a>
                <a class="text-on-surface-variant hover:text-primary font-body-md text-body-md" href="#">Términos</a>
                <a class="text-on-surface-variant hover:text-primary font-body-md text-body-md" href="#">Envíos</a>
                <a class="text-on-surface-variant hover:text-primary font-body-md text-body-md" href="#">Contacto</a>
            </div>
            <p class="text-on-surface dark:text-on-surface-variant text-center font-body-md text-body-md opacity-70 px-4">
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
            <a class="flex items-center justify-center text-on-surface-variant p-3 hover:scale-110 transition-transform active:scale-90" href="/tienda">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">shopping_bag</span>
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
    // Interactivity for the gallery (shared logic)
    document.querySelectorAll('.grid-cols-4 button').forEach(button => {
        button.addEventListener('click', () => {
            // Remove border-secondary and active styling from all thumbnails
            document.querySelectorAll('.grid-cols-4 button').forEach(b => {
                b.classList.remove('border-secondary', 'border-2');
                b.classList.add('border-outline-variant', 'border');
            });
            // Add active styling to clicked thumbnail
            button.classList.remove('border-outline-variant', 'border');
            button.classList.add('border-secondary', 'border-2');
            
            // Swap main image src and alt on both desktop and mobile main images
            const thumbImg = button.querySelector('img');
            const mainImg = document.getElementById('main-product-image');
            const mobileMainImg = document.getElementById('mobile-main-product-image');
            if (thumbImg) {
                if (mainImg) {
                    mainImg.src = thumbImg.src;
                    mainImg.alt = thumbImg.getAttribute('data-alt') || thumbImg.alt;
                }
                if (mobileMainImg) {
                    mobileMainImg.src = thumbImg.src;
                    mobileMainImg.alt = thumbImg.getAttribute('data-alt') || thumbImg.alt;
                }
            }
        });
    });

    // FAQ details toggler
    document.querySelectorAll('details').forEach((el) => {
        el.addEventListener('toggle', (e) => {
            if (el.open) {
                document.querySelectorAll('details').forEach((otherEl) => {
                    if (otherEl !== el) otherEl.removeAttribute('open');
                });
            }
        });
    });
</script>
</body>
</html>
