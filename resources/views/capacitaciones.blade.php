<!DOCTYPE html>
<html class="light" lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Capacitaciones | HAIRPRESTIGE</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
                "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                "label-md": ["14px", { "lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "500" }],
                "headline-xl": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                "headline-md": ["24px", { "lineHeight": "32px", "fontWeight": "600" }],
                "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
                "label-sm": ["12px", { "lineHeight": "16px", "fontWeight": "600" }],
                "headline-lg-mobile": ["28px", { "lineHeight": "36px", "fontWeight": "600" }]
            }
          },
        },
      }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .glossy-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md">
<!-- TopNavBar -->
<header class="sticky top-0 z-50 bg-surface-container-lowest dark:bg-surface-dim border-b border-outline-variant dark:border-on-surface-variant shadow-sm dark:shadow-none transition-all duration-300 ease-in-out">
    <nav class="flex justify-between items-center px-margin-mobile md:px-margin-desktop py-4 max-w-container-max mx-auto">
        <div class="flex items-center gap-8">
            <a class="font-headline-md text-headline-md font-bold text-on-surface dark:text-inverse-on-surface tracking-tight" href="/">HAIRPRESTIGE</a>
            <div class="hidden md:flex gap-6">
                <a class="font-label-md text-label-md text-on-surface-variant dark:text-outline-variant hover:text-secondary transition-colors" href="/">Inicio</a>
                <a class="font-label-md text-label-md text-on-surface-variant dark:text-outline-variant hover:text-secondary transition-colors" href="/tienda">Tienda</a>
                <a class="font-label-md text-label-md text-on-surface-variant dark:text-outline-variant hover:text-secondary transition-colors" href="/colocacion">Colocación</a>
                <a class="font-label-md text-label-md text-secondary dark:text-secondary-fixed-dim font-bold border-b-2 border-secondary transition-colors" href="/capacitaciones">Capacitaciones</a>
            </div>
        </div>
        <div class="flex items-center gap-4">
            <div class="hidden md:flex items-center bg-surface-container rounded-full px-4 py-1.5 border border-outline-variant">
                <span class="material-symbols-outlined text-outline text-[20px]">search</span>
                <input class="bg-transparent border-none focus:ring-0 text-label-md placeholder:text-outline ml-2" placeholder="Buscar cursos..." type="text"/>
            </div>
            <a href="/tienda" class="material-symbols-outlined text-on-surface-variant hover:text-secondary transition-colors">shopping_cart</a>
            <button class="bg-secondary text-on-secondary px-6 py-2 rounded-full font-label-md hover:opacity-90 transition-opacity">WhatsApp</button>
        </div>
    </nav>
</header>
<main>
    <!-- Hero Section -->
    <section class="relative py-20 md:py-32 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="w-full h-full bg-cover bg-center opacity-10" data-alt="A luxurious clinical setting with soft blue and white lighting, featuring a professional hair specialist performing a precise procedure on a high-end hair system. The environment is clean, professional, and minimalist, echoing medical precision and premium aesthetic care. The color palette is dominated by deep navy and bright cyan accents." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAicHKrNunXJG3n4OlL2bN-SkVZwsqoZMBn1R7k6eN9lf9p5L8lg6qMMsgjLYOFwqjkKAWvxVQfTKNA85KHnIFIt7LEaF6kZSXWZeh1U69tcS1Qww9bHIYsvbrknRT33_jscclK5zW3aZOlNWpk3ARO5QC5ld5l3eyI7KmMjQOg7yjw2TmlfsH0vKAMP9S_1t0T1opDyB8EaIMv2Bn1TJODaPot61KxnBVThVuZF89oRtKmcWZJSLCbHQ')"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-surface via-surface/80 to-transparent"></div>
        </div>
        <div class="relative z-10 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto grid md:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <div class="inline-flex items-center gap-2 bg-secondary/10 text-secondary px-4 py-1 rounded-full border border-secondary/20">
                    <span class="material-symbols-outlined text-[18px]">verified</span>
                    <span class="font-label-md text-label-md">100% Online con certificación</span>
                </div>
                <h1 class="font-headline-xl text-headline-xl-mobile md:text-headline-xl text-primary leading-tight">Cursos y Capacitaciones para Barberías y Profesionales</h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-lg">
                    Eleva el estándar de tu salón. Domina las técnicas más avanzadas de prótesis capilares con nuestra metodología clínica y estética.
                </p>
                <div class="flex gap-4">
                    <button class="bg-secondary text-on-secondary px-8 py-4 rounded-lg font-label-md text-lg shadow-lg shadow-secondary/20 hover:scale-[1.02] transition-transform">Ver Temario</button>
                    <button class="border-2 border-primary text-primary px-8 py-4 rounded-lg font-label-md text-lg hover:bg-primary hover:text-on-primary transition-colors">Saber Más</button>
                </div>
            </div>
            <div class="relative group">
                <div class="absolute -inset-4 bg-secondary/10 blur-3xl rounded-full group-hover:bg-secondary/20 transition-colors"></div>
                <div class="relative aspect-video rounded-2xl overflow-hidden shadow-2xl border border-outline-variant">
                    <img class="w-full h-full object-cover" data-alt="High-definition cinematic shot of a professional barber carefully adjusting a thin-skin hair system on a mannequin, highlighting the intricate detail and natural hairline. The lighting is focused and warm, showcasing a clinical yet premium educational environment. Professional equipment is visible in the blurred background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBapr_6sY-nt7KHkS7StD80ofq6f2uA8VoAoGW4Hzk8P3uEybW6s0VwpcottHJ_ueME4LIM8AwAtW8psRnjlHEwkN4UGaQ7g5cj8tAeDct8DwBZWKLEYr_jIcssbIt-Om859eiwqe7BjGqDutDv7n48-lWkHPDuX2zKE670npcTEKhX_0vGPh_LRT8KwkkFL-a7bNv2yxWPL7gl0BhwZ0yCn4W_FkkSA6t7W3BzVKTbnaao9uAAS5CiAQ"/>
                    <div class="absolute inset-0 flex items-center justify-center bg-black/20 hover:bg-black/40 transition-colors cursor-pointer">
                        <span class="material-symbols-outlined text-white text-[64px] transition-transform hover:scale-110">play_circle</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Course Modules - Bento Grid Style -->
    <section class="py-20 bg-surface-container-low">
        <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
            <div class="text-center mb-16">
                <h2 class="font-headline-lg text-headline-lg-mobile md:text-headline-lg text-primary mb-4">Contenido del Curso</h2>
                <p class="text-on-surface-variant">Un programa diseñado paso a paso para tu éxito profesional.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
                <!-- Module 1 -->
                <div class="bg-surface-container-lowest p-8 rounded-2xl shadow-sm border border-outline-variant hover:shadow-md transition-shadow group">
                    <div class="w-12 h-12 bg-secondary/10 rounded-lg flex items-center justify-center mb-6 text-secondary group-hover:bg-secondary group-hover:text-on-secondary transition-colors">
                        <span class="material-symbols-outlined">content_cut</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md mb-3">Técnicas de colocación</h3>
                    <p class="text-on-surface-variant mb-6">Aprende los secretos de la fijación invisible, desde la preparación del cuero cabelludo hasta el sellado final.</p>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-2 text-label-md"><span class="material-symbols-outlined text-secondary text-[18px]">check_circle</span> Preparación clínica</li>
                        <li class="flex items-center gap-2 text-label-md"><span class="material-symbols-outlined text-secondary text-[18px]">check_circle</span> Adhesivos y cintas</li>
                    </ul>
                </div>
                <!-- Module 2 -->
                <div class="bg-surface-container-lowest p-8 rounded-2xl shadow-sm border border-outline-variant hover:shadow-md transition-shadow group">
                    <div class="w-12 h-12 bg-secondary/10 rounded-lg flex items-center justify-center mb-6 text-secondary group-hover:bg-secondary group-hover:text-on-secondary transition-colors">
                        <span class="material-symbols-outlined">construction</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md mb-3">Mantenimiento</h3>
                    <p class="text-on-surface-variant mb-6">Garantiza la durabilidad de los sistemas y la salud capilar de tus clientes con protocolos de limpieza expertos.</p>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-2 text-label-md"><span class="material-symbols-outlined text-secondary text-[18px]">check_circle</span> Remoción segura</li>
                        <li class="flex items-center gap-2 text-label-md"><span class="material-symbols-outlined text-secondary text-[18px]">check_circle</span> Restauración de fibras</li>
                    </ul>
                </div>
                <!-- Module 3 -->
                <div class="bg-surface-container-lowest p-8 rounded-2xl shadow-sm border border-outline-variant hover:shadow-md transition-shadow group">
                    <div class="w-12 h-12 bg-secondary/10 rounded-lg flex items-center justify-center mb-6 text-secondary group-hover:bg-secondary group-hover:text-on-secondary transition-colors">
                        <span class="material-symbols-outlined">payments</span>
                    </div>
                    <h3 class="font-headline-md text-headline-md mb-3">Venta de insumos</h3>
                    <p class="text-on-surface-variant mb-6">Modelos de negocio rentables para tu barbería. Cómo gestionar stock y maximizar el ticket promedio.</p>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-2 text-label-md"><span class="material-symbols-outlined text-secondary text-[18px]">check_circle</span> Estrategias de pricing</li>
                        <li class="flex items-center gap-2 text-label-md"><span class="material-symbols-outlined text-secondary text-[18px]">check_circle</span> Fidelización de clientes</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="py-24 px-margin-mobile md:px-margin-desktop">
        <div class="max-w-4xl mx-auto">
            <div class="relative glossy-card p-10 md:p-16 rounded-[2rem] shadow-2xl border border-outline-variant flex flex-col md:flex-row gap-12 items-center overflow-hidden">
                <div class="absolute top-0 right-0 p-8">
                    <span class="bg-tertiary-fixed text-on-tertiary-fixed px-4 py-1 rounded-full font-label-sm uppercase tracking-wider">Premium</span>
                </div>
                <div class="w-full md:w-1/2 space-y-6">
                    <h2 class="font-headline-lg text-headline-lg text-primary">Curso Master en Prótesis Capilares</h2>
                    <p class="text-on-surface-variant">Acceso de por vida, tutorías personalizadas y kit de herramientas incluido.</p>
                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-secondary">school</span>
                            <span class="font-body-md">Certificación con aval internacional</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-secondary">groups</span>
                            <span class="font-body-md">Comunidad VIP de alumnos</span>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 text-center md:text-right border-t md:border-t-0 md:border-l border-outline-variant pt-10 md:pt-0 md:pl-12">
                    <p class="font-label-md text-on-surface-variant mb-2">Precio de Lanzamiento</p>
                    <div class="mb-8">
                        <span class="text-headline-md text-outline line-through opacity-60 mr-2">$599</span>
                        <span class="font-headline-xl text-headline-xl text-primary">$299<span class="text-lg font-normal">USD</span></span>
                    </div>
                    <button class="w-full bg-secondary text-on-secondary px-8 py-5 rounded-xl font-headline-md hover:scale-[1.02] hover:shadow-xl transition-all flex items-center justify-center gap-3">
                        <span class="material-symbols-outlined">shopping_cart</span>
                        Comprar Ahora
                    </button>
                    <p class="mt-4 font-label-sm text-on-surface-variant">Pagos seguros vía Stripe o PayPal</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-20 bg-surface">
        <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="font-headline-lg text-headline-lg text-primary">Lo que dicen nuestros alumnos</h2>
                    <p class="text-on-surface-variant">Profesionales que transformaron su negocio.</p>
                </div>
                <div class="hidden md:flex gap-2">
                    <button class="w-12 h-12 rounded-full border border-outline-variant flex items-center justify-center hover:bg-surface-container transition-colors">
                        <span class="material-symbols-outlined">arrow_back</span>
                    </button>
                    <button class="w-12 h-12 rounded-full border border-outline-variant flex items-center justify-center hover:bg-surface-container transition-colors">
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </button>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
                <!-- Testimonial 1 -->
                <div class="bg-surface-container-lowest p-8 rounded-2xl border border-outline-variant">
                    <div class="flex gap-1 text-tertiary-fixed mb-4">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">star</span>
                    </div>
                    <p class="italic text-on-surface mb-6">"El curso cambió totalmente mi percepción sobre las prótesis. La técnica de fijación es impecable y mis clientes están fascinados con los resultados."</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-surface-variant overflow-hidden">
                            <img class="w-full h-full object-cover" data-alt="Portrait of a successful male barber in his early 30s, smiling warmly. He is in a modern, stylish barbershop with warm lighting. The image is professional, sharp, and clean, representing trust and professional achievement." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBp3RQHWe75dVxx_Rko8-vWFu6hrxwBnBgR3GJ3CGGqJLdWHnvlNhxE7RYW1_lcxIntsM30V6FbLjfqTiFFC7fbzTdkZg6Rh89s2JsuLhorGvDBnW-kLi87HEbeEehVjV81ibhKPlH0kQxSd1FrdbCYhqpAwjiro75xvRfWJvl_cMsGy2ZawMgaNaEUw6QH3dCY4tmcuBdLmyaDog4Ada52HZhUJ3eq4WUFnHDS3MrmaTZsnDd-rmTrxQ"/>
                        </div>
                        <div>
                            <p class="font-label-md">Carlos Ruiz</p>
                            <p class="font-label-sm text-outline">Dueño de 'The Grooming Room'</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="bg-surface-container-lowest p-8 rounded-2xl border border-outline-variant">
                    <div class="flex gap-1 text-tertiary-fixed mb-4">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">star</span>
                    </div>
                    <p class="italic text-on-surface mb-6">"Excelente material. La sección de ventas de insumos me ayudó a organizar mi stock y aumentar mis ganancias un 40% en solo tres meses."</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-surface-variant overflow-hidden">
                            <img class="w-full h-full object-cover" data-alt="Close-up portrait of a professional female hair stylist in a bright, modern salon. She has a confident and friendly expression. The background is softly blurred, showing a high-end salon aesthetic with cyan and white tones." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB1y8dSN8-YacmVZvzc8TwUqARFRHPJ_2s4MlKMEAoZabDY0wlQtPGPD8bxSstByBIQANdFdCIdkJ9rcg0LPusgIC-e1lXyHo7mEoZyCb9Kz8p6y6H5dmGs5zgru4qoPmXwEa4NVFm2O3UtoVLnFak4m70gWUTkpR_lR04OnB16ino1Dv_Q2iNvpTzW_s1KCGecGerinTguiUlpbeKyElxtcB2Tfna7s1xshctfyVJXfSuW13TzGkz8JA"/>
                        </div>
                        <div>
                            <p class="font-label-md">Elena Martínez</p>
                            <p class="font-label-sm text-outline">Especialista Capilar</p>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="bg-surface-container-lowest p-8 rounded-2xl border border-outline-variant">
                    <div class="flex gap-1 text-tertiary-fixed mb-4">
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">star</span>
                        <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1">star</span>
                    </div>
                    <p class="italic text-on-surface mb-6">"Ser parte de la comunidad HairPrestige es un plus. Siempre hay alguien para resolver dudas técnicas en tiempo real."</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-surface-variant overflow-hidden">
                            <img class="w-full h-full object-cover" data-alt="Portrait of a male hair professional in a clinical laboratory setting, wearing a professional white coat and smiling. The lighting is bright and clean, emphasizing a medical yet approachable persona. The palette is dominated by professional greys and whites." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA36jfjLy5Jip5bPqa9c_PajOEw1FWVsRXYsuIUJrdAgourI14NsNkdM45RGdzAQcNI9F0ZTeaEryyaYnIdMWqrRJUPXb79xq8tdBMeEHqPx-43CbNxjOwtrLlv2pt1hx5ab2GifkphhdDRUeMiQBNHWIKpgpSIlamTSB1EY9wgrh72yo-pbTATwakyUU3_rbQStlX48yeHXn9cUMME7AJigkRJmCW_C2xms4c7qEWCDhIq2PKoWTMytA"/>
                        </div>
                        <div>
                            <p class="font-label-md">Mateo Garcés</p>
                            <p class="font-label-sm text-outline">Barbero Profesional</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20">
        <div class="px-margin-mobile md:px-margin-desktop max-w-3xl mx-auto">
            <h2 class="font-headline-lg text-headline-lg text-center mb-12">Preguntas Frecuentes</h2>
            <div class="space-y-4">
                <details class="group bg-surface-container-low rounded-xl border border-outline-variant overflow-hidden" open="">
                    <summary class="flex justify-between items-center p-6 cursor-pointer list-none">
                        <span class="font-headline-md text-on-surface">¿Necesito experiencia previa?</span>
                        <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                    </summary>
                    <div class="p-6 pt-0 text-on-surface-variant border-t border-outline-variant/30">
                        No es indispensable, aunque tener conocimientos básicos de barbería o peluquería te ayudará a avanzar más rápido. El curso está diseñado desde nivel inicial a avanzado.
                    </div>
                </details>
                <details class="group bg-surface-container-low rounded-xl border border-outline-variant overflow-hidden">
                    <summary class="flex justify-between items-center p-6 cursor-pointer list-none">
                        <span class="font-headline-md text-on-surface">¿Cómo recibo mi certificado?</span>
                        <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                    </summary>
                    <div class="p-6 pt-0 text-on-surface-variant border-t border-outline-variant/30">
                        Al completar todos los módulos y aprobar la evaluación final práctica (vía video), recibirás un certificado digital verificable y, opcionalmente, uno físico en tu domicilio.
                    </div>
                </details>
                <details class="group bg-surface-container-low rounded-xl border border-outline-variant overflow-hidden">
                    <summary class="flex justify-between items-center p-6 cursor-pointer list-none">
                        <span class="font-headline-md text-on-surface">¿El curso incluye materiales?</span>
                        <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                    </summary>
                    <div class="p-6 pt-0 text-on-surface-variant border-t border-outline-variant/30">
                        La versión Master incluye un kit básico de inicio. Para el resto de niveles, te proporcionamos una lista detallada de proveedores recomendados con descuentos exclusivos.
                    </div>
                </details>
                <details class="group bg-surface-container-low rounded-xl border border-outline-variant overflow-hidden">
                    <summary class="flex justify-between items-center p-6 cursor-pointer list-none">
                        <span class="font-headline-md text-on-surface">¿Tendré acceso a actualizaciones?</span>
                        <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                    </summary>
                    <div class="p-6 pt-0 text-on-surface-variant border-t border-outline-variant/30">
                        Sí, el acceso es de por vida. Cualquier nueva técnica o producto que incorporemos al programa estará disponible para ti sin costo adicional.
                    </div>
                </details>
            </div>
        </div>
    </section>
</main>

<!-- Footer -->
<footer class="bg-surface-container-highest dark:bg-inverse-surface mt-16 opacity-90 hover:opacity-100 transition-opacity">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-gutter px-margin-mobile md:px-margin-desktop py-12 max-w-container-max mx-auto">
        <div class="space-y-4">
            <span class="font-headline-sm text-headline-sm font-bold text-on-surface dark:text-inverse-on-surface">HAIRPRESTIGE</span>
            <p class="font-body-md text-body-md text-on-surface-variant dark:text-outline-variant">Líderes en soluciones capilares premium y formación profesional de alto nivel.</p>
        </div>
        <div class="flex flex-col gap-3">
            <span class="font-label-md text-secondary dark:text-secondary-fixed-dim">Explorar</span>
            <a class="font-label-sm text-label-sm text-on-surface-variant dark:text-outline-variant hover:text-secondary transition-colors" href="/tienda">Tienda</a>
            <a class="font-label-sm text-label-sm text-on-surface-variant dark:text-outline-variant hover:text-secondary transition-colors" href="/colocacion">Colocación</a>
            <a class="font-label-sm text-label-sm text-primary dark:text-primary-fixed underline" href="/capacitaciones">Capacitaciones</a>
        </div>
        <div class="flex flex-col gap-3">
            <span class="font-label-md text-secondary dark:text-secondary-fixed-dim">Soporte</span>
            <a class="font-label-sm text-label-sm text-on-surface-variant dark:text-outline-variant hover:text-secondary transition-colors" href="#">Contacto</a>
            <a class="font-label-sm text-label-sm text-on-surface-variant dark:text-outline-variant hover:text-secondary transition-colors" href="#">Envíos</a>
            <a class="font-label-sm text-label-sm text-on-surface-variant dark:text-outline-variant hover:text-secondary transition-colors" href="#">Términos y Condiciones</a>
        </div>
        <div class="space-y-4">
            <span class="font-label-md text-secondary dark:text-secondary-fixed-dim">Boletín</span>
            <div class="flex">
                <input class="bg-surface-container px-4 py-2 rounded-l-lg border-none focus:ring-1 focus:ring-secondary w-full text-label-sm" placeholder="Tu email" type="email"/>
                <button class="bg-secondary text-on-secondary px-4 py-2 rounded-r-lg font-label-sm">Unirse</button>
            </div>
        </div>
    </div>
    <div class="px-margin-mobile md:px-margin-desktop py-6 border-t border-outline-variant/30 max-w-container-max mx-auto text-center">
        <p class="font-label-sm text-label-sm text-on-surface-variant dark:text-outline-variant">© 2024 HairPrestige Medical Capillary. Todos los derechos reservados.</p>
    </div>
</footer>

<!-- Floating Action Button - Mobile Only (Contextual) -->
<button class="md:hidden fixed bottom-6 right-6 bg-secondary text-on-secondary w-14 h-14 rounded-full shadow-xl flex items-center justify-center z-40">
    <span class="material-symbols-outlined">chat</span>
</button>

<script>
    // Simple micro-interaction for FAQ details
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
