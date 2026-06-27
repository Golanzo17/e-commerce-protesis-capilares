<!DOCTYPE html>
<html class="light" lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0, viewport-fit=cover" name="viewport"/>
    <title>Tienda Online | CAPILLAR PREM</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700;800&amp;family=Inter:wght@300;400;500;600&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .product-card:hover .add-to-cart-btn {
            transform: translateY(0);
            opacity: 1;
        }
        .cart-drawer {
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .cart-drawer.open {
            transform: translateX(0);
        }
        .cart-drawer.closed {
            transform: translateX(100%);
        }
        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        body {
            -webkit-tap-highlight-color: transparent;
            scroll-behavior: smooth;
        }
        body {
          min-height: max(884px, 100dvh);
        }
    </style>
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
                    "gutter": "24px",
                    "margin-desktop": "48px",
                    "margin-mobile": "16px",
                    "base": "8px",
                    "container-max": "1280px"
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
    <!-- Header Navigation -->
    <header class="sticky top-0 z-40 bg-surface-container-lowest dark:bg-surface-dim border-b border-outline-variant dark:border-on-surface-variant shadow-sm dark:shadow-none transition-all duration-300 ease-in-out">
        <nav class="flex justify-between items-center px-margin-desktop py-4 max-w-container-max mx-auto">
            <div class="flex items-center gap-8">
                <a class="font-headline-md text-headline-md font-bold text-on-surface dark:text-inverse-on-surface tracking-tight" href="/">HAIRPRESTIGE</a>
                <div class="hidden md:flex items-center gap-6">
                    <a class="text-on-surface-variant dark:text-outline-variant hover:text-secondary transition-colors font-label-md text-label-md" href="/">Inicio</a>
                    <a class="text-secondary dark:text-secondary-fixed-dim font-bold border-b-2 border-secondary font-label-md text-label-md" href="/tienda">Tienda</a>
                    <a class="text-on-surface-variant dark:text-outline-variant hover:text-secondary transition-colors font-label-md text-label-md" href="/colocacion">Colocación</a>
                    <a class="text-on-surface-variant dark:text-outline-variant hover:text-secondary transition-colors font-label-md text-label-md" href="/capacitaciones">Capacitaciones</a>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <div class="hidden md:flex items-center bg-surface-container px-4 py-2 rounded-full border border-outline-variant">
                    <span class="material-symbols-outlined text-outline">search</span>
                    <input class="bg-transparent border-none focus:ring-0 text-label-md ml-2 w-48" placeholder="Buscar productos..." type="text"/>
                </div>
                <button class="relative p-2 hover:bg-surface-container-low dark:hover:bg-surface-variant/10 rounded-full transition-all" onclick="toggleCart()">
                    <span class="material-symbols-outlined text-secondary">shopping_cart</span>
                    <span class="absolute top-0 right-0 bg-secondary text-white text-[10px] w-4 h-4 flex items-center justify-center rounded-full cart-count-badge">0</span>
                </button>
                <a href="https://wa.me/yournumber" target="_blank" class="bg-secondary text-white px-6 py-2 rounded-full font-label-md text-label-md hover:bg-on-secondary-container transition-all">WhatsApp</a>
            </div>
        </nav>
    </header>

    <!-- Shipping Banner -->
    <div class="bg-primary text-on-primary py-3 px-margin-desktop">
        <div class="max-w-container-max mx-auto flex items-center justify-center gap-3">
            <span class="material-symbols-outlined text-secondary-container" style="font-variation-settings: 'FILL' 1;">info</span>
            <p class="font-label-md text-label-md tracking-wide">AVISO IMPORTANTE: Los productos importados tienen un tiempo estimado de entrega de 10 a 15 días hábiles.</p>
        </div>
    </div>

    <!-- Main Content Area -->
    <main class="max-w-container-max mx-auto px-margin-desktop py-12 flex flex-row gap-gutter">
        <!-- Sidebar Filters -->
        <aside class="w-full md:w-64 flex-shrink-0">
            <div class="sticky top-28 space-y-8">
                <div>
                    <h3 class="font-headline-md text-headline-md mb-6">Categorías</h3>
                    <ul class="space-y-3">
                        <li>
                            <button class="flex items-center justify-between w-full group py-1">
                                <span class="font-label-md text-label-md text-secondary font-bold">Prótesis Capilares</span>
                                <span class="text-label-sm text-outline group-hover:text-secondary">(24)</span>
                            </button>
                        </li>
                        <li>
                            <button class="flex items-center justify-between w-full group py-1">
                                <span class="font-label-md text-label-md text-on-surface-variant hover:text-secondary transition-colors">Cintas y Tapes</span>
                                <span class="text-label-sm text-outline group-hover:text-secondary">(12)</span>
                            </button>
                        </li>
                        <li>
                            <button class="flex items-center justify-between w-full group py-1">
                                <span class="font-label-md text-label-md text-on-surface-variant hover:text-secondary transition-colors">Removedores</span>
                                <span class="text-label-sm text-outline group-hover:text-secondary">(8)</span>
                            </button>
                        </li>
                        <li>
                            <button class="flex items-center justify-between w-full group py-1">
                                <span class="font-label-md text-label-md text-on-surface-variant hover:text-secondary transition-colors">Adhesivos Líquidos</span>
                                <span class="text-label-sm text-outline group-hover:text-secondary">(15)</span>
                            </button>
                        </li>
                        <li>
                            <button class="flex items-center justify-between w-full group py-1">
                                <span class="font-label-md text-label-md text-on-surface-variant hover:text-secondary transition-colors">Mantenimiento</span>
                                <span class="text-label-sm text-outline group-hover:text-secondary">(20)</span>
                            </button>
                        </li>
                        <li>
                            <button class="flex items-center justify-between w-full group py-1">
                                <span class="font-label-md text-label-md text-on-surface-variant hover:text-secondary transition-colors">Accesorios</span>
                                <span class="text-label-sm text-outline group-hover:text-secondary">(10)</span>
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="pt-8 border-t border-outline-variant">
                    <h3 class="font-label-md text-label-md font-bold mb-4">Filtrar por Base</h3>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-surface-container text-on-surface-variant text-label-sm rounded-full border border-outline-variant cursor-pointer hover:bg-secondary hover:text-white transition-all">Lace</span>
                        <span class="px-3 py-1 bg-surface-container text-on-surface-variant text-label-sm rounded-full border border-outline-variant cursor-pointer hover:bg-secondary hover:text-white transition-all">Skin</span>
                        <span class="px-3 py-1 bg-surface-container text-on-surface-variant text-label-sm rounded-full border border-outline-variant cursor-pointer hover:bg-secondary hover:text-white transition-all">Monofilamento</span>
                        <span class="px-3 py-1 bg-surface-container text-on-surface-variant text-label-sm rounded-full border border-outline-variant cursor-pointer hover:bg-secondary hover:text-white transition-all">Híbrida</span>
                    </div>
                </div>
                <div class="pt-8 border-t border-outline-variant">
                    <div class="bg-secondary-container/10 p-4 rounded-xl border border-secondary/20">
                        <p class="font-label-sm text-label-sm text-secondary uppercase tracking-widest font-bold mb-2">Ayuda Profesional</p>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-4">¿No sabes qué sistema elegir? Nuestros expertos te asesoran.</p>
                        <a href="/colocacion" class="text-secondary font-bold flex items-center gap-2 hover:underline">
                            Consultar ahora <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </a>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Product Grid -->
        <section class="flex-grow">
            <div class="flex justify-between items-center mb-10">
                <h1 class="font-headline-lg text-headline-lg">Prótesis Capilares</h1>
                <div class="flex items-center gap-4">
                    <span class="text-label-md text-on-surface-variant">Mostrar:</span>
                    <select class="bg-transparent border-outline-variant rounded-lg text-label-md focus:ring-secondary focus:border-secondary">
                        <option>Más recientes</option>
                        <option>Precio: Menor a Mayor</option>
                        <option>Precio: Mayor a Menor</option>
                        <option>Populares</option>
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-gutter">
                <!-- Product Card 1 -->
                <div class="product-card group bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="relative h-64 bg-surface-container-low">
                        <div class="absolute top-3 left-3 z-10 bg-secondary text-white text-[10px] font-bold px-2 py-1 rounded uppercase tracking-wider">Premium</div>
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="French Lace Pro" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDvJIqhRwT1d335FedOuzeNkoWc2iBRA6nGa2FkBM-Os5uFjbFYZDJcgxGCmDrefo8l5r-Ukh13vMktgqaOLrVY6KqPrfSxehHyz-esemiAqLdaVsIEgp2LdL5VwNQts4gJ8Rknmab37fKYcWh-hYbNubDzBzQAXr-o9WiiddL2BBwGtopeHAqTkzUs3XgMkf_8zpSKT9fuNd1JRp_NwLamstIZoJwXUbnmNYff2LPlsQgvSv3fbD0oOw"/>
                        <div class="absolute inset-x-0 bottom-0 p-4 translate-y-4 opacity-0 add-to-cart-btn transition-all duration-300">
                            <button class="w-full bg-secondary text-white py-2 rounded-lg font-label-md hover:bg-on-secondary-container shadow-lg flex items-center justify-center gap-2" onclick="addToCart('Sistema French Lace Pro', 450)">
                                <span class="material-symbols-outlined text-sm">add_shopping_cart</span> Añadir
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="text-label-sm text-outline mb-1">MASCULINO • LACE</p>
                        <h4 class="font-headline-md text-headline-md text-lg mb-2 truncate">Sistema French Lace Pro</h4>
                        <div class="flex items-center justify-between">
                            <span class="font-headline-md text-secondary">$450.00</span>
                            <div class="flex gap-1">
                                <div class="w-3 h-3 rounded-full bg-[#2D1B14] border border-outline-variant" title="Dark Brown"></div>
                                <div class="w-3 h-3 rounded-full bg-[#1A1A1A] border border-outline-variant" title="Black"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Card 2 -->
                <div class="product-card group bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="relative h-64 bg-surface-container-low">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Ultra Thin Skin" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBUEAQnhJZLPsZOD1MG2x7pFrm3emp3if1GvOvqtEVhKZ_hfOHPo0iuCHQGRPIwTKtEFqUJQQ0yyDNL6IbfrI3jhwzAG5G-K9cCHqdYUlv-_N8HWU29HiF_HrzTygud0qyMw550hgVdtEwI3QSljbrYbF6Nn30bdl5wMYxx8wDOb5t57kF9WJbgqoXSFh-vlP6B3sfnbXicx-jMoDrX3RmxcgqjOCmgFTFkm2Wt4EDozK_fEqpxTHVrqQ"/>
                        <div class="absolute inset-x-0 bottom-0 p-4 translate-y-4 opacity-0 add-to-cart-btn transition-all duration-300">
                            <button class="w-full bg-secondary text-white py-2 rounded-lg font-label-md hover:bg-on-secondary-container shadow-lg flex items-center justify-center gap-2" onclick="addToCart('Ultra Thin Skin 0.03mm', 380)">
                                <span class="material-symbols-outlined text-sm">add_shopping_cart</span> Añadir
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="text-label-sm text-outline mb-1">MASCULINO • SKIN</p>
                        <h4 class="font-headline-md text-headline-md text-lg mb-2 truncate">Ultra Thin Skin 0.03mm</h4>
                        <div class="flex items-center justify-between">
                            <span class="font-headline-md text-secondary">$380.00</span>
                            <span class="material-symbols-outlined text-outline text-sm">visibility</span>
                        </div>
                    </div>
                </div>
                <!-- Product Card 3 -->
                <div class="product-card group bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="relative h-64 bg-surface-container-low">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Hybrid Swiss & Poly" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDopNSoZBOduFTNqTn-7ZtDvyp9lIBG4-55GMUPGMEu4nGUTHaApVIlqvs2Hb1HZVwRoSNyOqBSg34uXmn1Rey4aDBldO4MyQ4F6z_2kVXhKIWAZbghGmschyOM7FmXoeVstsuV2o_J8dpoWhzd63WW3fv8TgJNgOHGIwxKtE_NhCl9h6vh-mEQ4L2bj_1-l7bTMznOWl-9TGXbiG6pJQQfZK0QX-INVbzKaC9FAnUL26CwUGUKm9vI4A"/>
                        <div class="absolute inset-x-0 bottom-0 p-4 translate-y-4 opacity-0 add-to-cart-btn transition-all duration-300">
                            <button class="w-full bg-secondary text-white py-2 rounded-lg font-label-md hover:bg-on-secondary-container shadow-lg flex items-center justify-center gap-2" onclick="addToCart('Hybrid Swiss &amp; Poly', 410)">
                                <span class="material-symbols-outlined text-sm">add_shopping_cart</span> Añadir
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="text-label-sm text-outline mb-1">UNISEX • HÍBRIDA</p>
                        <h4 class="font-headline-md text-headline-md text-lg mb-2 truncate">Hybrid Swiss &amp; Poly</h4>
                        <div class="flex items-center justify-between">
                            <span class="font-headline-md text-secondary">$410.00</span>
                            <div class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-tertiary text-sm" style="font-variation-settings: 'FILL' 1;">star</span>
                                <span class="text-label-sm font-bold">4.9</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Card 4 -->
                <div class="product-card group bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="relative h-64 bg-surface-container-low">
                        <div class="absolute top-3 left-3 z-10 bg-error text-white text-[10px] font-bold px-2 py-1 rounded uppercase tracking-wider">Top Ventas</div>
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Full Lace Cap" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB-UjkiFwkPkKqKIrAr6cectySib9iTbBY0QJyAq7q1MaUoFkIc2vV9nvCuguH6tc47a_kL7_72jbI2I-_ryg-YkulT1SIIIO_L4nN9oo4tD4G4bCX34Qun5hWpvWNjvA9LUusQuUknLeCh6qDWIUugOK8WeMix0TN9Yc56n1h_-6JdDHa9LN8g9molKNhpFPQsdkzBA3bp1rrCYLpHAJ6AK4O-vzlOi9hiH54Ty2OZkc0_ex-UzZF1Vg"/>
                        <div class="absolute inset-x-0 bottom-0 p-4 translate-y-4 opacity-0 add-to-cart-btn transition-all duration-300">
                            <button class="w-full bg-secondary text-white py-2 rounded-lg font-label-md hover:bg-on-secondary-container shadow-lg flex items-center justify-center gap-2" onclick="addToCart('Full Lace Medical Silk', 520)">
                                <span class="material-symbols-outlined text-sm">add_shopping_cart</span> Añadir
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="text-label-sm text-outline mb-1">FEMENINO • SILK LACE</p>
                        <h4 class="font-headline-md text-headline-md text-lg mb-2 truncate">Full Lace Medical Silk</h4>
                        <div class="flex items-center justify-between">
                            <span class="font-headline-md text-secondary">$520.00</span>
                            <span class="text-label-sm text-outline line-through">$580.00</span>
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="product-card group bg-surface-container-lowest border border-outline-variant rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="relative h-64 bg-surface-container-low">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="Ultra Hold Adhesive" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDanFsD0dBTtjjY2Swn2Bu0O470ZeVEzUM51j-X_oJ1aOGOTtGlMVtGt7dw8RfGGD0Kb-9UELcSb1AdXaG1iuFdZnqZgalPBibycZyiM6sfjYRbBB0i61OjUInLjvjzRTrlZFX4RMOapU1pRAF0QX7YzxYDwYh5LVaPKz6hSRRZdNlYo0RYmdcL9iXd0Qqpr3RHJA5vGuzDzG0V0eKY1ceGDRu4qoQkEyh4p3njfI-38h362uj11IiuZQ"/>
                        <div class="absolute inset-x-0 bottom-0 p-4 translate-y-4 opacity-0 add-to-cart-btn transition-all duration-300">
                            <button class="w-full bg-secondary text-white py-2 rounded-lg font-label-md hover:bg-on-secondary-container shadow-lg flex items-center justify-center gap-2" onclick="addToCart('Adhesivo Ultra Hold 3.4oz', 45)">
                                <span class="material-symbols-outlined text-sm">add_shopping_cart</span> Añadir
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="text-label-sm text-outline mb-1">MANTENIMIENTO • ADHESIVOS</p>
                        <h4 class="font-headline-md text-headline-md text-lg mb-2 truncate">Adhesivo Ultra Hold 3.4oz</h4>
                        <div class="flex items-center justify-between">
                            <span class="font-headline-md text-secondary">$45.00</span>
                            <span class="text-label-sm text-secondary font-bold">Disponible</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pagination -->
            <div class="mt-16 flex items-center justify-center gap-2">
                <button class="w-10 h-10 flex items-center justify-center border border-outline-variant rounded-lg hover:bg-secondary hover:text-white transition-all">
                    <span class="material-symbols-outlined">chevron_left</span>
                </button>
                <button class="w-10 h-10 flex items-center justify-center bg-secondary text-white rounded-lg font-bold">1</button>
                <button class="w-10 h-10 flex items-center justify-center border border-outline-variant rounded-lg hover:bg-surface-container transition-all">2</button>
                <button class="w-10 h-10 flex items-center justify-center border border-outline-variant rounded-lg hover:bg-surface-container transition-all">3</button>
                <button class="w-10 h-10 flex items-center justify-center border border-outline-variant rounded-lg hover:bg-secondary hover:text-white transition-all">
                    <span class="material-symbols-outlined">chevron_right</span>
                </button>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-surface-container-highest dark:bg-inverse-surface mt-16 transition-all duration-300">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-gutter px-margin-desktop py-12 max-w-container-max mx-auto">
            <div class="space-y-6">
                <a class="font-headline-sm text-headline-sm font-bold text-on-surface dark:text-inverse-on-surface" href="/">HAIRPRESTIGE</a>
                <p class="text-on-surface-variant dark:text-outline-variant font-body-md text-body-md opacity-90 leading-relaxed">
                    Soluciones capilares de grado médico y estética premium. Importadores directos de tecnología de punta para la restauración capilar.
                </p>
                <div class="flex gap-4">
                    <button class="p-2 bg-surface-container border border-outline-variant rounded-full hover:text-secondary transition-colors"><span class="material-symbols-outlined">brand_family</span></button>
                    <button class="p-2 bg-surface-container border border-outline-variant rounded-full hover:text-secondary transition-colors"><span class="material-symbols-outlined">public</span></button>
                </div>
            </div>
            <div>
                <h4 class="font-label-md text-label-md font-bold mb-6 text-secondary uppercase tracking-widest">Productos</h4>
                <ul class="space-y-4">
                    <li><a class="text-on-surface-variant dark:text-outline-variant hover:text-secondary transition-colors font-label-md text-label-md" href="/tienda">Prótesis Masculinas</a></li>
                    <li><a class="text-on-surface-variant dark:text-outline-variant hover:text-secondary transition-colors font-label-md text-label-md" href="/tienda">Sistemas Femeninos</a></li>
                    <li><a class="text-on-surface-variant dark:text-outline-variant hover:text-secondary transition-colors font-label-md text-label-md" href="/tienda">Adhesivos Walker Tape</a></li>
                    <li><a class="text-on-surface-variant dark:text-outline-variant hover:text-secondary transition-colors font-label-md text-label-md" href="/tienda">Mantenimiento</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-label-md text-label-md font-bold mb-6 text-secondary uppercase tracking-widest">Atención</h4>
                <ul class="space-y-4">
                    <li><a class="text-on-surface-variant dark:text-outline-variant hover:text-secondary transition-colors font-label-md text-label-md" href="#">Contacto</a></li>
                    <li><a class="text-on-surface-variant dark:text-outline-variant hover:text-secondary transition-colors font-label-md text-label-md" href="#">Envíos</a></li>
                    <li><a class="text-on-surface-variant dark:text-outline-variant hover:text-secondary transition-colors font-label-md text-label-md" href="#">Términos y Condiciones</a></li>
                    <li><a class="text-on-surface-variant dark:text-outline-variant hover:text-secondary transition-colors font-label-md text-label-md" href="#">Privacidad</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-label-md text-label-md font-bold mb-6 text-secondary uppercase tracking-widest">Suscríbete</h4>
                <p class="text-on-surface-variant dark:text-outline-variant text-label-sm mb-4">Recibe noticias sobre nuevos ingresos y promociones exclusivas.</p>
                <div class="flex flex-col gap-2">
                    <input class="bg-surface-container border-outline-variant rounded-lg p-3 text-label-md focus:ring-secondary" placeholder="Tu correo electrónico" type="email"/>
                    <button class="bg-primary text-white py-3 rounded-lg font-bold hover:bg-secondary transition-all">Unirse</button>
                </div>
            </div>
        </div>
        <div class="px-margin-desktop py-8 border-t border-outline-variant max-w-container-max mx-auto text-center md:text-left">
            <p class="text-label-sm text-label-sm text-on-surface-variant opacity-80">© 2024 HairPrestige Medical Capillary. Todos los derechos reservados.</p>
        </div>
    </footer>
</div>

<!-- ========================================== -->
<!--            MOBILE LAYOUT (max-md)          -->
<!-- ========================================== -->
<div class="block md:hidden">
    <!-- TopAppBar -->
    <header class="fixed top-0 w-full bg-surface dark:bg-surface-container-highest flex justify-between items-center px-4 h-16 z-50 border-b border-outline-variant dark:border-outline shadow-sm">
        <div class="flex items-center gap-2">
            <button class="active:scale-95 transition-transform" onclick="document.getElementById('mobile-drawer').classList.remove('-translate-x-full')">
                <span class="material-symbols-outlined text-primary dark:text-on-primary-fixed">menu</span>
            </button>
            <h1 class="font-headline-md text-headline-md font-bold tracking-tight text-primary dark:text-primary-fixed">CAPILLAR PREM</h1>
        </div>
        <div class="flex items-center gap-4">
            <button class="active:scale-95 transition-transform relative" onclick="toggleCart()">
                <span class="material-symbols-outlined text-primary dark:text-on-primary-fixed">shopping_cart</span>
                <span class="absolute -top-1 -right-1 bg-secondary-container text-on-secondary-container text-[10px] font-bold h-4 w-4 flex items-center justify-center rounded-full cart-count-badge">0</span>
            </button>
        </div>
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
                    <a class="flex items-center gap-4 py-3 px-4 bg-secondary-container text-on-secondary-container font-bold rounded-full mx-2 transition-all" href="/tienda">
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

    <!-- Main Content Canvas -->
    <main class="pt-20 pb-28 px-margin-mobile">
        <!-- Search Header Section -->
        <section class="mb-8">
            <div class="relative group">
                <div class="absolute inset-y-0 left-4 flex items-center pointer-events-none">
                    <span class="material-symbols-outlined text-outline">search</span>
                </div>
                <input class="w-full h-14 pl-12 pr-4 bg-surface-container-low border border-outline-variant rounded-xl focus:ring-2 focus:ring-secondary-container focus:border-secondary transition-all outline-none font-body-md text-body-md text-on-surface" placeholder="Buscar prótesis, insumos..." type="text"/>
            </div>
        </section>

        <!-- Categories Section -->
        <section class="mb-8">
            <div class="flex items-center justify-between mb-4">
                <h3 class="font-headline-md text-headline-md text-primary">Categorías</h3>
                <a href="/tienda" class="text-secondary font-label-md text-label-md flex items-center gap-1">
                    Ver todo <span class="material-symbols-outlined text-[18px]">chevron_right</span>
                </a>
            </div>
            <div class="flex gap-3 overflow-x-auto hide-scrollbar pb-2">
                <button class="flex-shrink-0 px-6 py-3 rounded-full bg-primary text-on-primary font-label-md text-label-md transition-transform active:scale-95 shadow-sm">
                    Todo
                </button>
                <button class="flex-shrink-0 px-6 py-3 rounded-full bg-surface-container-highest text-on-surface-variant font-label-md text-label-md transition-transform active:scale-95 border border-outline-variant">
                    Sistemas Lace
                </button>
                <button class="flex-shrink-0 px-6 py-3 rounded-full bg-surface-container-highest text-on-surface-variant font-label-md text-label-md transition-transform active:scale-95 border border-outline-variant">
                    Skin / Micro-Piel
                </button>
                <button class="flex-shrink-0 px-6 py-3 rounded-full bg-surface-container-highest text-on-surface-variant font-label-md text-label-md transition-transform active:scale-95 border border-outline-variant">
                    Insumos y Adhesivos
                </button>
                <button class="flex-shrink-0 px-6 py-3 rounded-full bg-surface-container-highest text-on-surface-variant font-label-md text-label-md transition-transform active:scale-95 border border-outline-variant">
                    Cuidado Capilar
                </button>
            </div>
        </section>

        <!-- Product Grid (2 Columns) -->
        <section class="mb-12">
            <div class="grid grid-cols-2 gap-4">
                <!-- Product Card 1 -->
                <div class="bg-surface-container-lowest border border-outline-variant/30 rounded-xl overflow-hidden shadow-[0_2px_4px_rgba(15,23,42,0.05)] transition-transform active:scale-[0.98] flex flex-col">
                    <div class="relative aspect-square bg-surface-container-low group">
                        <img class="w-full h-full object-cover" data-alt="Lace Ultra-Delgado Importado" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAf-UZsoLkTOGISQEmGGRXG1AgYnW02gfL4ai7P4STkMYOTqzlrEqkkiXPxFcWX2ibzMv3RUz-PKl2QqVU1MzA1QnOM1TJP--Jw2hS_bM0_2MowVAD93tDIhqqfFB5rmyMn_L0xHOaWPb2K2eKUbzYoUvmsRp8tAoeWU59Q55SoMYeUbfnjadcnqaP-37a5QODjKZ8bD6YKqQ20PE3FxyaGYeWC97cXfhNLQJbLdZfK52T7hFtrNLHw2w"/>
                        <div class="absolute top-2 left-2 flex flex-col gap-1">
                            <span class="bg-tertiary-fixed text-on-tertiary-fixed text-[10px] font-bold px-2 py-0.5 rounded-full uppercase tracking-wider">Premium</span>
                        </div>
                    </div>
                    <div class="p-3 flex flex-col flex-grow">
                        <p class="text-label-sm text-on-surface-variant font-label-sm mb-1">CAPILLAR PREM</p>
                        <h4 class="font-label-md text-label-md text-on-surface leading-tight mb-2 line-clamp-2">Lace Ultra-Delgado Importado</h4>
                        <div class="mt-auto flex justify-between items-center">
                            <p class="font-headline-md text-headline-md text-secondary">$325.00</p>
                            <button class="w-8 h-8 bg-primary text-on-primary rounded-full flex items-center justify-center active:scale-90 transition-transform" onclick="addToCart('Lace Ultra-Delgado Importado', 325)">
                                <span class="material-symbols-outlined text-[18px]">add_shopping_cart</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Product Card 2 -->
                <div class="bg-surface-container-lowest border border-outline-variant/30 rounded-xl overflow-hidden shadow-[0_2px_4px_rgba(15,23,42,0.05)] transition-transform active:scale-[0.98] flex flex-col">
                    <div class="relative aspect-square bg-surface-container-low">
                        <img class="w-full h-full object-cover" data-alt="Ultra Hold Adhesive" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDtDqb2RdraabeaIDOHZsFvrUXwrmj06hhiQawtAruigncn9BshyRxUFvICTbjpRPUsMiyZtOhRqeq1Wd4bp3QDRJ1RX7M7ftm8iGKWaK4SgYKYySCcifkowsh2P14B9NCxurypAq6_AlI5V09MRfMCpo84lEavE6LjxmUkFzBLBTVV0mJAo5tOYix-B02wYykgyaLmO4qztiHFvfNERMp8oYzGTcWbpev9MNJkT9bdJW3eBki58o451Q"/>
                        <div class="absolute top-2 left-2">
                            <span class="bg-secondary-container text-on-secondary-container text-[10px] font-bold px-2 py-0.5 rounded-full uppercase tracking-wider">Top Ventas</span>
                        </div>
                    </div>
                    <div class="p-3 flex flex-col flex-grow">
                        <p class="text-label-sm text-on-surface-variant font-label-sm mb-1">WALKER TAPE</p>
                        <h4 class="font-label-md text-label-md text-on-surface leading-tight mb-2 line-clamp-2">Ultra Hold Adhesive 0.5oz</h4>
                        <div class="mt-auto flex justify-between items-center">
                            <p class="font-headline-md text-headline-md text-secondary">$45.00</p>
                            <button class="w-8 h-8 bg-primary text-on-primary rounded-full flex items-center justify-center active:scale-90 transition-transform" onclick="addToCart('Ultra Hold Adhesive 0.5oz', 45)">
                                <span class="material-symbols-outlined text-[18px]">add_shopping_cart</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Product Card 3 -->
                <div class="bg-surface-container-lowest border border-outline-variant/30 rounded-xl overflow-hidden shadow-[0_2px_4px_rgba(15,23,42,0.05)] transition-transform active:scale-[0.98] flex flex-col">
                    <div class="relative aspect-square bg-surface-container-low">
                        <img class="w-full h-full object-cover" data-alt="Bio-Skin" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA7kec08WLnPeE4SpcA1EYuNOYzlONPcqtFQ7eajngxelfvw7R1aWwo1EtkSn6hGyks0XV9q8FDnmO3favjbv1ioKQI8g4mnDIUiRRSU4BZONNhlSB9f0ndzShKLno8ToiGddWcvcVPcQ5uUQ-_kh-Gf5pyH1BL9uAd3HOIvb_AQVbTETvefCTYKhHCYxLsoALBGM_LRRhlSnphoVSPmsAU3fTQWHbGB7t68htnhO2jTyMReVcWi4G1PQ"/>
                    </div>
                    <div class="p-3 flex flex-col flex-grow">
                        <p class="text-label-sm text-on-surface-variant font-label-sm mb-1">CAPILLAR PREM</p>
                        <h4 class="font-label-md text-label-md text-on-surface leading-tight mb-2 line-clamp-2">Bio-Skin v3 Natural Look</h4>
                        <div class="mt-auto flex justify-between items-center">
                            <p class="font-headline-md text-headline-md text-secondary">$290.00</p>
                            <button class="w-8 h-8 bg-primary text-on-primary rounded-full flex items-center justify-center active:scale-90 transition-transform" onclick="addToCart('Bio-Skin v3 Natural Look', 290)">
                                <span class="material-symbols-outlined text-[18px]">add_shopping_cart</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Product Card 4 -->
                <div class="bg-surface-container-lowest border border-outline-variant/30 rounded-xl overflow-hidden shadow-[0_2px_4px_rgba(15,23,42,0.05)] transition-transform active:scale-[0.98] flex flex-col">
                    <div class="relative aspect-square bg-surface-container-low">
                        <img class="w-full h-full object-cover" data-alt="Kit Profesional" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDfW4pHrAwwFhqGXbiQvHk0tseaLDsNbsqk2kcmFDatHVtWV2VrwwnBZc-lJhurfL424wW7-MU0dOAS-GJStv3Z7bLcYZgaoKVMrUaQByW-Ph1eRJWKkzgHXu_s2YDj3g38rgksip3qjMCmkSxeZpOuDN4T2lC6H5gWJ7fs3s6mtldFV6YvCS9Rs5h3skRn-gZ8uVuOMCHlnrisuh9xjgbLwPP2jmpKDhII0vuGQOLzbE7ap7xelp-aoA"/>
                        <div class="absolute top-2 left-2">
                            <span class="bg-tertiary-fixed text-on-tertiary-fixed text-[10px] font-bold px-2 py-0.5 rounded-full uppercase tracking-wider">Premium</span>
                        </div>
                    </div>
                    <div class="p-3 flex flex-col flex-grow">
                        <p class="text-label-sm text-on-surface-variant font-label-sm mb-1">MANTENIMIENTO</p>
                        <h4 class="font-label-md text-label-md text-on-surface leading-tight mb-2 line-clamp-2">Kit de Cuidado Profesional Plus</h4>
                        <div class="mt-auto flex justify-between items-center">
                            <p class="font-headline-md text-headline-md text-secondary">$89.00</p>
                            <button class="w-8 h-8 bg-primary text-on-primary rounded-full flex items-center justify-center active:scale-90 transition-transform" onclick="addToCart('Kit de Cuidado Profesional Plus', 89)">
                                <span class="material-symbols-outlined text-[18px]">add_shopping_cart</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Promotions Banner -->
        <section class="mb-12">
            <div class="relative w-full h-40 rounded-2xl overflow-hidden flex items-center p-6 text-white">
                <div class="absolute inset-0 bg-gradient-to-r from-primary to-secondary/80"></div>
                <div class="relative z-10 max-w-[60%]">
                    <h3 class="font-headline-md text-headline-md font-bold mb-1">Envío Gratis</h3>
                    <p class="font-body-md text-body-md text-white/90">En compras mayores a $150. Solo este mes.</p>
                </div>
                <div class="absolute right-[-20px] bottom-[-20px] opacity-20">
                    <span class="material-symbols-outlined text-[120px]" style="font-variation-settings: 'FILL' 1;">local_shipping</span>
                </div>
            </div>
        </section>
    </main>

    <!-- Floating WhatsApp Button -->
    <a class="fixed bottom-24 right-6 bg-[#25D366] text-white w-14 h-14 rounded-full flex items-center justify-center shadow-lg z-[40] transition-transform hover:scale-110 active:scale-90 animate-bounce" href="https://wa.me/5491100000000" style="animation-duration: 3s">
        <svg fill="currentColor" height="32" viewbox="0 0 24 24" width="32" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.031 6.172c-2.32 0-4.519.903-6.16 2.544-1.64 1.64-2.544 3.839-2.544 6.159 0 1.053.187 2.083.551 3.056l-.551 2.02 2.067-.541c.947.346 1.954.526 2.972.526h.002c2.321 0 4.52-.903 6.161-2.544 1.64-1.64 2.544-3.839 2.544-6.159 0-2.321-.904-4.52-2.544-6.161-1.641-1.641-3.84-2.544-6.16-2.544zm4.431 10.428c-.22.616-1.282 1.135-1.782 1.209-.452.067-.9-.019-2.85-1.07-2.387-1.285-3.929-3.712-4.049-3.871-.119-.16-.974-1.294-.974-2.47 0-1.176.615-1.753.833-1.992.219-.239.477-.298.636-.298s.318.001.457.007c.143.006.338-.054.531.411.198.477.676 1.648.736 1.767.059.12.099.259.019.418-.08.159-.119.259-.239.397-.12.139-.25.311-.358.416-.12.119-.244.25-.104.489.14.239.619 1.021 1.331 1.656.917.818 1.691 1.072 1.929 1.191.239.119.378.1.518-.059.139-.16.598-.696.757-.935.159-.24.318-.199.537-.12s1.393.657 1.632.776c.239.12.398.179.457.279.06.099.06.576-.16 1.192zM12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2z"></path>
        </svg>
    </a>

    <!-- BottomNavBar -->
    <nav class="fixed bottom-0 left-0 w-full z-50 flex justify-around items-center px-6 py-3 pb-safe bg-surface/90 dark:bg-surface-container-lowest/90 backdrop-blur-md border-t border-outline-variant/30 shadow-[0_-4px_6px_-1px_rgba(15,23,42,0.05)] rounded-t-xl">
        <a class="flex items-center justify-center text-on-surface-variant p-3 hover:scale-110 transition-transform active:scale-90" href="/">
            <span class="material-symbols-outlined">home</span>
        </a>
        <a class="flex items-center justify-center bg-secondary-container text-on-secondary-container rounded-full p-3 hover:scale-110 transition-transform active:scale-90" href="/tienda">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">shopping_bag</span>
        </a>
        <a class="flex items-center justify-center text-on-surface-variant p-3 hover:scale-110 transition-transform active:scale-90" href="https://wa.me/5491100000000" target="_blank">
            <span class="material-symbols-outlined">chat</span>
        </a>
        <a class="flex items-center justify-center text-on-surface-variant p-3 hover:scale-110 transition-transform active:scale-90" href="/colocacion">
            <span class="material-symbols-outlined">support_agent</span>
        </a>
    </nav>

    <!-- Footer -->
    <footer class="w-full py-12 px-margin-mobile flex flex-col items-center gap-8 bg-surface-container-highest dark:bg-surface-container-lowest border-t border-outline-variant pb-32">
        <div class="font-headline-md text-headline-md font-bold text-primary">CAPILLAR PREM</div>
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
</div>

<!-- ========================================== -->
<!--         SHARED INTERACTIVE COMPONENT       -->
<!-- ========================================== -->
<!-- Shopping Cart Drawer Overlay -->
<div class="fixed inset-0 bg-black/50 z-50 hidden backdrop-blur-sm transition-opacity opacity-0" id="cart-overlay" onclick="toggleCart()"></div>
<!-- Cart Drawer -->
<div class="cart-drawer closed fixed top-0 right-0 h-full w-full md:w-[400px] bg-surface-container-lowest z-[60] shadow-2xl flex flex-col" id="cart-drawer">
    <div class="p-6 border-b border-outline-variant flex items-center justify-between">
        <h2 class="font-headline-md text-headline-md">Tu Carrito</h2>
        <button class="p-2 hover:bg-surface-container rounded-full transition-all" onclick="toggleCart()">
            <span class="material-symbols-outlined">close</span>
        </button>
    </div>
    <div class="flex-grow overflow-y-auto p-6 space-y-6 custom-scrollbar">
        <!-- Empty State -->
        <div class="h-full flex flex-col items-center justify-center text-center opacity-60" id="empty-cart">
            <span class="material-symbols-outlined text-6xl mb-4">shopping_bag</span>
            <p class="font-body-lg text-body-lg">Tu carrito está vacío</p>
            <button class="mt-4 text-secondary font-bold hover:underline" onclick="toggleCart()">Ir a comprar</button>
        </div>
        <!-- Cart items will be injected here -->
        <div id="cart-items" class="space-y-6"></div>
    </div>
    <div class="p-6 border-t border-outline-variant bg-surface-container-low hidden" id="cart-footer">
        <div class="flex justify-between items-center mb-4">
            <span class="text-on-surface-variant font-label-md">Subtotal</span>
            <span class="font-headline-md text-secondary" id="cart-total">$0.00</span>
        </div>
        <p class="text-label-sm text-outline-variant mb-6">Impuestos y envío calculados al finalizar la compra.</p>
        <button class="w-full bg-secondary text-white py-4 rounded-xl font-bold hover:bg-on-secondary-container transition-all shadow-md">
            Finalizar Compra
        </button>
        <button class="w-full mt-3 py-2 text-label-md text-on-surface-variant hover:text-secondary font-medium transition-colors" onclick="toggleCart()">
            Continuar comprando
        </button>
    </div>
</div>

<!-- Notification Toast -->
<div class="fixed bottom-8 left-1/2 -translate-x-1/2 z-[100] transform translate-y-32 opacity-0 transition-all duration-500 bg-primary text-on-primary px-6 py-4 rounded-full shadow-2xl flex items-center gap-3" id="toast">
    <span class="material-symbols-outlined text-secondary-container" style="font-variation-settings: 'FILL' 1;">check_circle</span>
    <span class="font-label-md text-label-md" id="toast-msg">Producto añadido al carrito</span>
</div>

<!-- ========================================== -->
<!--                  SCRIPTS                   -->
<!-- ========================================== -->
<script>
    let cart = [];

    function toggleCart() {
        const drawer = document.getElementById('cart-drawer');
        const overlay = document.getElementById('cart-overlay');
        const isOpen = drawer.classList.contains('open');

        if (isOpen) {
            drawer.classList.remove('open');
            drawer.classList.add('closed');
            overlay.classList.add('hidden');
            overlay.style.opacity = '0';
        } else {
            drawer.classList.add('open');
            drawer.classList.remove('closed');
            overlay.classList.remove('hidden');
            setTimeout(() => overlay.style.opacity = '1', 10);
        }
    }

    function addToCart(name, price) {
        cart.push({ name, price, id: Date.now() });
        updateCartUI();
        showToast(`"${name}" añadido al carrito`);
    }

    function removeFromCart(id) {
        cart = cart.filter(item => item.id !== id);
        updateCartUI();
    }

    function updateCartUI() {
        const itemsContainer = document.getElementById('cart-items');
        const emptyState = document.getElementById('empty-cart');
        const footer = document.getElementById('cart-footer');
        const countBadges = document.querySelectorAll('.cart-count-badge');
        const totalEl = document.getElementById('cart-total');

        countBadges.forEach(badge => {
            badge.innerText = cart.length;
        });

        if (cart.length === 0) {
            emptyState.style.display = 'flex';
            footer.classList.add('hidden');
            itemsContainer.innerHTML = '';
        } else {
            emptyState.style.display = 'none';
            footer.classList.remove('hidden');
            
            itemsContainer.innerHTML = cart.map(item => `
                <div class="flex gap-4 items-center animate-fadeIn">
                    <div class="w-16 h-16 bg-surface-container rounded-lg flex-shrink-0 flex items-center justify-center">
                        <span class="material-symbols-outlined text-outline">content_cut</span>
                    </div>
                    <div class="flex-grow">
                        <h5 class="font-label-md text-label-md font-bold">${item.name}</h5>
                        <p class="text-secondary font-bold">$${item.price.toFixed(2)}</p>
                    </div>
                    <button onclick="removeFromCart(${item.id})" class="p-2 text-outline hover:text-error transition-colors">
                        <span class="material-symbols-outlined text-sm">delete</span>
                    </button>
                </div>
            `).join('');

            const total = cart.reduce((acc, item) => acc + item.price, 0);
            totalEl.innerText = `$${total.toFixed(2)}`;
        }
    }

    function showToast(msg) {
        const toast = document.getElementById('toast');
        const toastMsg = document.getElementById('toast-msg');
        toastMsg.innerText = msg;
        
        toast.classList.remove('translate-y-32', 'opacity-0');
        toast.classList.add('translate-y-0', 'opacity-100');
        
        setTimeout(() => {
            toast.classList.add('translate-y-32', 'opacity-0');
            toast.classList.remove('translate-y-0', 'opacity-100');
        }, 3000);
    }

    // Micro-interaction for search focus
    const searchInput = document.querySelector('input[placeholder="Buscar prótesis, insumos..."]');
    if (searchInput) {
        searchInput.addEventListener('focus', () => {
            searchInput.parentElement.classList.add('scale-[1.02]');
        });
        searchInput.addEventListener('blur', () => {
            searchInput.parentElement.classList.remove('scale-[1.02]');
        });
    }

    // Toggle for Categories (Demo functionality)
    const categoryButtons = document.querySelectorAll('section:nth-of-type(2) button');
    categoryButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            categoryButtons.forEach(b => {
                b.classList.remove('bg-primary', 'text-on-primary');
                b.classList.add('bg-surface-container-highest', 'text-on-surface-variant');
            });
            btn.classList.add('bg-primary', 'text-on-primary');
            btn.classList.remove('bg-surface-container-highest', 'text-on-surface-variant');
        });
    });
</script>
</body>
</html>
