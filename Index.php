<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fundación Yonari - Protege tus derechos. Organización comprometida con la defensa y promoción de los derechos en Colombia.">
    <meta name="keywords" content="fundación, derechos, Colombia, justicia, asesoría jurídica">
    <title>Fundación Yonari - Protege tus derechos</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    
</head>
<body class="bg-gray-900 text-gray-100 overflow-x-hidden">

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/573001234567" target="_blank" 
       class="fixed bottom-6 right-6 z-50 bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 transform hover:scale-110 transition-all duration-300 group"
       aria-label="Contactar por WhatsApp">
        <i class="fab fa-whatsapp text-3xl"></i>
        <span class="absolute right-full mr-3 top-1/2 -translate-y-1/2 bg-gray-800 text-white px-3 py-1 rounded-lg text-sm whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            ¡Escríbenos!
        </span>
    </a>
    
    <!-- Facebook Floating Button -->
    <a href="https://facebook.com/fundacionyonari" target="_blank" 
       class="fixed bottom-24 right-6 z-50 bg-blue-600 text-white p-4 rounded-full shadow-lg hover:bg-blue-700 transform hover:scale-110 transition-all duration-300 group"
       aria-label="Visitar Facebook">
        <i class="fab fa-facebook-f text-2xl"></i>
        <span class="absolute right-full mr-3 top-1/2 -translate-y-1/2 bg-gray-800 text-white px-3 py-1 rounded-lg text-sm whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            Síguenos
        </span>
    </a>

    <!-- Header/Navigation -->
    <header class="fixed top-0 w-full z-40 bg-gray-900/95 backdrop-blur-md border-b border-amber-500/30 transition-all duration-300" id="navbar">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <a href="#inicio" class="flex items-center space-x-3 group">
                    <div class="bg-gradient-to-br from-amber-500 to-amber-600 p-2 rounded-lg transform group-hover:scale-110 transition-transform duration-300">
                        <i class="fas fa-balance-scale text-white text-2xl"></i>
                    </div>
                    <span class="text-xl font-bold gradient-text">Fundación Yonari</span>
                </a>
                
                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="#inicio" class="nav-link text-sm font-semibold text-gray-300 hover:text-amber-500 transition-colors duration-300 relative group">
                        INICIO
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-amber-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                    </a>
                    <a href="#nosotros" class="nav-link text-sm font-semibold text-gray-300 hover:text-amber-500 transition-colors duration-300 relative group">
                        NOSOTROS
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-amber-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                    </a>
                    <a href="#servicios" class="nav-link text-sm font-semibold text-gray-300 hover:text-amber-500 transition-colors duration-300 relative group">
                        SERVICIOS
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-amber-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                    </a>
                    <a href="#equipo" class="nav-link text-sm font-semibold text-gray-300 hover:text-amber-500 transition-colors duration-300 relative group">
                        EQUIPO
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-amber-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                    </a>
                    <a href="#porque" class="nav-link text-sm font-semibold text-gray-300 hover:text-amber-500 transition-colors duration-300 relative group">
                        ¿POR QUÉ?
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-amber-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                    </a>
                    <a href="#contacto" class="bg-gradient-to-r from-amber-500 to-amber-600 text-white px-6 py-2 rounded-full font-semibold hover:shadow-lg hover:shadow-amber-500/50 transform hover:scale-105 transition-all duration-300">
                        CONTACTAR
                    </a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="lg:hidden text-gray-300 hover:text-amber-500 transition-colors duration-300">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
            
            <!-- Mobile Navigation -->
            <div id="mobile-menu" class="hidden lg:hidden mt-4 pb-4 space-y-3">
                <a href="#inicio" class="block text-gray-300 hover:text-amber-500 hover:bg-amber-500/10 px-4 py-2 rounded-lg transition-all duration-300">INICIO</a>
                <a href="#nosotros" class="block text-gray-300 hover:text-amber-500 hover:bg-amber-500/10 px-4 py-2 rounded-lg transition-all duration-300">NOSOTROS</a>
                <a href="#servicios" class="block text-gray-300 hover:text-amber-500 hover:bg-amber-500/10 px-4 py-2 rounded-lg transition-all duration-300">SERVICIOS</a>
                <a href="#equipo" class="block text-gray-300 hover:text-amber-500 hover:bg-amber-500/10 px-4 py-2 rounded-lg transition-all duration-300">EQUIPO</a>
                <a href="#porque" class="block text-gray-300 hover:text-amber-500 hover:bg-amber-500/10 px-4 py-2 rounded-lg transition-all duration-300">¿POR QUÉ?</a>
                <a href="#contacto" class="block bg-gradient-to-r from-amber-500 to-amber-600 text-white px-4 py-2 rounded-lg text-center font-semibold">CONTACTAR</a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="inicio" class="min-h-screen flex items-center justify-center pt-20 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, #f59e0b 1px, transparent 0); background-size: 40px 40px;"></div>
        </div>
        
        <div class="container mx-auto px-6 py-12 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Hero Content -->
                <div class="space-y-6" data-aos="fade-right">
                    <h1 class="text-5xl lg:text-6xl font-bold leading-tight">
                        <span class="gradient-text">PROTEGE TUS DERECHOS</span>
                    </h1>
                    <p class="text-xl text-gray-400 leading-relaxed">
                        Estamos contigo para que hagas valer tus derechos. Recibe apoyo jurídico oportuno de la Fundación Yonari y accede a la justicia de manera segura, clara y sin obstáculos.
                    </p>
                    <div class="flex flex-wrap gap-4 pt-4">
                        <a href="#contacto" class="inline-flex items-center px-8 py-4 text-lg font-semibold bg-gradient-to-r from-amber-500 to-amber-600 text-white rounded-full hover:shadow-lg hover:shadow-amber-500/50 transform hover:scale-105 transition-all duration-300">
                            Comunícate ahora
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                        <a href="#nosotros" class="inline-flex items-center px-8 py-4 text-lg font-semibold text-amber-500 border-2 border-amber-500 rounded-full hover:bg-amber-500 hover:text-white transform hover:scale-105 transition-all duration-300">
                            Conocer más
                        </a>
                    </div>
                </div>
                
                <!-- Hero Icon -->
                <div class="flex items-center justify-center" data-aos="fade-left">
                    <div class="relative">
                        <!-- Animated circles -->
                        <div class="absolute inset-0 bg-gradient-to-r from-amber-500/20 to-amber-600/20 rounded-full blur-3xl animate-pulse-slow"></div>
                        <div class="relative bg-gradient-to-br from-gray-800 to-gray-900 p-16 rounded-full border-4 border-amber-500/30 shadow-2xl shadow-amber-500/20">
                            <i class="fas fa-balance-scale text-9xl text-amber-500 animate-float"></i>
                        </div>
                        
                        <!-- Floating elements -->
                        <div class="absolute -top-6 -right-6 bg-amber-500 text-white p-4 rounded-full shadow-lg animate-bounce">
                            <i class="fas fa-gavel text-2xl"></i>
                        </div>
                        <div class="absolute -bottom-6 -left-6 bg-amber-600 text-white p-4 rounded-full shadow-lg" style="animation: bounce 2s ease-in-out infinite; animation-delay: 1s;">
                            <i class="fas fa-shield-alt text-2xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Scroll Down Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <i class="fas fa-chevron-down text-amber-500 text-2xl"></i>
        </div>
    </section>

    <!-- About Section -->
    <section id="nosotros" class="py-20 relative">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl lg:text-5xl font-bold mb-4">
                    <span class="gradient-text">ACERCA DE NOSOTROS</span>
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-amber-500 to-amber-600 mx-auto"></div>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                <div class="space-y-6" data-aos="fade-right">
                    <p class="text-lg text-gray-300 leading-relaxed">
                        Somos una organización conformada por un equipo de profesionales con una profunda vocación de servicio, dedicados a derribar las barreras que impiden a las personas, familias, comunidades y organizaciones ejercer sus derechos.
                    </p>
                    <p class="text-lg text-gray-300 leading-relaxed">
                        Creemos firmemente que la justicia y el bienestar no deben ser un privilegio, sino una realidad al alcance de todos.
                    </p>
                    <div class="flex items-center space-x-4 pt-4">
                        <div class="bg-amber-500/10 p-4 rounded-lg border border-amber-500/30">
                            <i class="fas fa-handshake text-3xl text-amber-500"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white">Compromiso social</h3>
                            <p class="text-gray-400">Trabajamos por un Colombia más justo</p>
                        </div>
                    </div>
                </div>
                
                <div class="relative" data-aos="fade-left">
                    <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-2xl border border-amber-500/30 shadow-2xl">
                        <div class="aspect-video bg-gradient-to-br from-amber-500/20 to-amber-600/20 rounded-lg flex items-center justify-center">
                            <i class="fas fa-users text-8xl text-amber-500/50"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Mission & Vision -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-2xl border border-amber-500/30 hover:border-amber-500/60 transition-all duration-300 transform hover:scale-105" data-aos="flip-left">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="bg-amber-500/10 p-4 rounded-lg">
                            <i class="fas fa-bullseye text-3xl text-amber-500"></i>
                        </div>
                        <h3 class="text-2xl font-bold gradient-text">Misión</h3>
                    </div>
                    <p class="text-gray-300 leading-relaxed">
                        Somos una fundación jurídica comprometida con la defensa y promoción de los derechos de las personas, familias, comunidades y organizaciones en Colombia. A través de un equipo de profesionales con profunda vocación de servicio, trabajamos para eliminar las barreras que limitan el acceso a la justicia, brindando acompañamiento integral, orientación y representación jurídica.
                    </p>
                </div>
                
                <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-2xl border border-amber-500/30 hover:border-amber-500/60 transition-all duration-300 transform hover:scale-105" data-aos="flip-right">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="bg-amber-500/10 p-4 rounded-lg">
                            <i class="fas fa-eye text-3xl text-amber-500"></i>
                        </div>
                        <h3 class="text-2xl font-bold gradient-text">Visión</h3>
                    </div>
                    <p class="text-gray-300 leading-relaxed">
                        Ser una organización referente a nivel nacional por nuestra excelencia, compromiso y humanidad en la defensa de los derechos y el acceso a la justicia. Aspiramos a consolidarnos como una entidad líder en la transformación social y jurídica del país, generando entornos más justos, equitativos e incluyentes.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="servicios" class="py-20 bg-gradient-to-b from-gray-900 to-gray-800">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl lg:text-5xl font-bold mb-4">
                    <span class="gradient-text">NUESTROS SERVICIOS</span>
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-amber-500 to-amber-600 mx-auto mb-4"></div>
                <p class="text-gray-400 max-w-2xl mx-auto">
                    Ofrecemos servicios especializados para garantizar el acceso a la justicia y la protección de tus derechos
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Service 1 -->
                <div class="group bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-2xl border border-amber-500/30 hover:border-amber-500 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl hover:shadow-amber-500/20" data-aos="zoom-in" data-aos-delay="100">
                    <div class="bg-amber-500/10 w-16 h-16 rounded-lg flex items-center justify-center mb-6 group-hover:bg-amber-500/20 transition-colors duration-300">
                        <i class="fas fa-graduation-cap text-3xl text-amber-500"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Educación</h3>
                    <p class="text-gray-400">Talleres, mentorías y apoyo escolar para el desarrollo integral de las comunidades.</p>
                </div>
                
                <!-- Service 2 -->
                <div class="group bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-2xl border border-amber-500/30 hover:border-amber-500 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl hover:shadow-amber-500/20" data-aos="zoom-in" data-aos-delay="200">
                    <div class="bg-amber-500/10 w-16 h-16 rounded-lg flex items-center justify-center mb-6 group-hover:bg-amber-500/20 transition-colors duration-300">
                        <i class="fas fa-hands-helping text-3xl text-amber-500"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Apoyo Social</h3>
                    <p class="text-gray-400">Orientación y acceso a redes de ayuda para personas y familias en situación de vulnerabilidad.</p>
                </div>
                
                <!-- Service 3 -->
                <div class="group bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-2xl border border-amber-500/30 hover:border-amber-500 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl hover:shadow-amber-500/20" data-aos="zoom-in" data-aos-delay="300">
                    <div class="bg-amber-500/10 w-16 h-16 rounded-lg flex items-center justify-center mb-6 group-hover:bg-amber-500/20 transition-colors duration-300">
                        <i class="fas fa-gavel text-3xl text-amber-500"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Defensa de Derechos</h3>
                    <p class="text-gray-400">Acompañamiento y asesoría jurídica profesional para garantizar tus derechos.</p>
                </div>
                
                <!-- Service 4 -->
                <div class="group bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-2xl border border-amber-500/30 hover:border-amber-500 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl hover:shadow-amber-500/20" data-aos="zoom-in" data-aos-delay="400">
                    <div class="bg-amber-500/10 w-16 h-16 rounded-lg flex items-center justify-center mb-6 group-hover:bg-amber-500/20 transition-colors duration-300">
                        <i class="fas fa-users-cog text-3xl text-amber-500"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Desarrollo Comunitario</h3>
                    <p class="text-gray-400">Acciones participativas con impacto local para fortalecer las comunidades.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="equipo" class="py-20">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl lg:text-5xl font-bold mb-4">
                    <span class="gradient-text">NUESTRO EQUIPO</span>
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-amber-500 to-amber-600 mx-auto mb-4"></div>
                <p class="text-gray-400 max-w-2xl mx-auto">
                    Profesionales comprometidos con la justicia y el servicio a la comunidad
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Team Member 1 -->
                <div class="group bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden border border-amber-500/30 hover:border-amber-500 transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="100">
                    <div class="aspect-square bg-gradient-to-br from-amber-500/20 to-amber-600/20 flex items-center justify-center">
                        <i class="fas fa-user-tie text-8xl text-amber-500/50"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-1">Eddy Martínez</h3>
                        <p class="text-amber-500 mb-3">Director General</p>
                        <p class="text-gray-400 text-sm">Abogado especializado en derechos humanos con más de 10 años de experiencia.</p>
                    </div>
                </div>
                
                <!-- Team Member 2 -->
                <div class="group bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden border border-amber-500/30 hover:border-amber-500 transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="200">
                    <div class="aspect-square bg-gradient-to-br from-amber-500/20 to-amber-600/20 flex items-center justify-center">
                        <i class="fas fa-user-tie text-8xl text-amber-500/50"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-1">Darleyda Córdoba</h3>
                        <p class="text-amber-500 mb-3">Asesora Jurídica</p>
                        <p class="text-gray-400 text-sm">Especialista en derecho civil y familia, comprometida con la justicia social.</p>
                    </div>
                </div>
                
                <!-- Team Member 3 -->
                <div class="group bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden border border-amber-500/30 hover:border-amber-500 transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="300">
                    <div class="aspect-square bg-gradient-to-br from-amber-500/20 to-amber-600/20 flex items-center justify-center">
                        <i class="fas fa-user-tie text-8xl text-amber-500/50"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-1">María González</h3>
                        <p class="text-amber-500 mb-3">Coordinadora Social</p>
                        <p class="text-gray-400 text-sm">Trabajadora social dedicada al desarrollo comunitario y apoyo integral.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why We Do It Section -->
    <section id="porque" class="py-20 bg-gradient-to-b from-gray-900 to-gray-800">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl lg:text-5xl font-bold mb-4">
                    <span class="gradient-text">¿POR QUÉ LO HACEMOS?</span>
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-amber-500 to-amber-600 mx-auto mb-4"></div>
            </div>
            
            <div class="max-w-4xl mx-auto">
                <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-8 lg:p-12 rounded-2xl border border-amber-500/30" data-aos="zoom-in">
                    <div class="space-y-6 text-lg text-gray-300 leading-relaxed">
                        <p>
                            <i class="fas fa-quote-left text-amber-500 mr-2"></i>
                            Nuestra motivación nace de la convicción de que todos merecen vivir en dignidad y con sus derechos garantizados.
                            <i class="fas fa-quote-right text-amber-500 ml-2"></i>
                        </p>
                        <p>
                            Trabajamos porque creemos en un Colombia donde la justicia no sea un privilegio, sino un derecho universal. Cada caso que atendemos, cada familia que acompañamos, representa un paso más hacia una sociedad más equitativa.
                        </p>
                        <p>
                            Nuestro compromiso va más allá de la asesoría legal: buscamos empoderar a las comunidades, educar sobre derechos y construir redes de apoyo que perduren en el tiempo.
                        </p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
                        <div class="text-center p-6 bg-white/5 rounded-lg border border-amber-500/20">
                            <i class="fas fa-heart text-4xl text-amber-500 mb-3"></i>
                            <h4 class="font-semibold text-white">Pasión</h4>
                            <p class="text-sm text-gray-400 mt-2">Por servir y transformar vidas</p>
                        </div>
                        <div class="text-center p-6 bg-white/5 rounded-lg border border-amber-500/20">
                            <i class="fas fa-users text-4xl text-amber-500 mb-3"></i>
                            <h4 class="font-semibold text-white">Comunidad</h4>
                            <p class="text-sm text-gray-400 mt-2">Trabajamos juntos por el bien común</p>
                        </div>
                        <div class="text-center p-6 bg-white/5 rounded-lg border border-amber-500/20">
                            <i class="fas fa-star text-4xl text-amber-500 mb-3"></i>
                            <h4 class="font-semibold text-white">Excelencia</h4>
                            <p class="text-sm text-gray-400 mt-2">Comprometidos con la calidad</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonials -->
            <div class="max-w-4xl mx-auto mt-16" data-aos="fade-up">
                <h3 class="text-2xl font-bold text-center mb-8 gradient-text">Testimonios</h3>
                <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-2xl border border-amber-500/30">
                    <div id="testimonial-container" class="text-center">
                        <i class="fas fa-quote-left text-3xl text-amber-500 mb-4"></i>
                        <p id="testimonial-text" class="text-xl text-gray-300 italic mb-4"></p>
                        <p id="testimonial-author" class="text-amber-500 font-semibold"></p>
                    </div>
                    <div class="flex justify-center space-x-2 mt-6">
                        <button class="testimonial-dot w-3 h-3 rounded-full bg-amber-500" data-index="0"></button>
                        <button class="testimonial-dot w-3 h-3 rounded-full bg-gray-600" data-index="1"></button>
                        <button class="testimonial-dot w-3 h-3 rounded-full bg-gray-600" data-index="2"></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contacto" class="py-20">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl lg:text-5xl font-bold mb-4">
                    <span class="gradient-text">CONTÁCTANOS</span>
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-amber-500 to-amber-600 mx-auto mb-4"></div>
                <p class="text-gray-400 max-w-2xl mx-auto">
                    Estamos aquí para ayudarte. Escríbenos y te responderemos a la brevedad
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
                <!-- Contact Form -->
                <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-2xl border border-amber-500/30" data-aos="fade-right">
                    <form id="contact-form" class="space-y-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-300 mb-2">Nombre completo</label>
                            <input type="text" required class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:border-amber-500 focus:ring-2 focus:ring-amber-500/50 outline-none text-white transition-colors duration-300" placeholder="Tu nombre">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-300 mb-2">Correo electrónico</label>
                            <input type="email" required class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:border-amber-500 focus:ring-2 focus:ring-amber-500/50 outline-none text-white transition-colors duration-300" placeholder="tu@email.com">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-300 mb-2">Teléfono</label>
                            <input type="tel" class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:border-amber-500 focus:ring-2 focus:ring-amber-500/50 outline-none text-white transition-colors duration-300" placeholder="+57 300 123 4567">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-300 mb-2">Mensaje</label>
                            <textarea rows="5" required class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:border-amber-500 focus:ring-2 focus:ring-amber-500/50 outline-none text-white transition-colors duration-300 resize-none" placeholder="Cuéntanos en qué podemos ayudarte"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-gradient-to-r from-amber-500 to-amber-600 text-white font-semibold py-4 rounded-lg hover:shadow-lg hover:shadow-amber-500/50 transform hover:scale-105 transition-all duration-300">
                            Enviar mensaje
                            <i class="fas fa-paper-plane ml-2"></i>
                        </button>
                    </form>
                </div>
                
                <!-- Contact Info -->
                <div class="space-y-6" data-aos="fade-left">
                    <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-6 rounded-2xl border border-amber-500/30 flex items-start space-x-4 hover:border-amber-500 transition-colors duration-300">
                        <div class="bg-amber-500/10 p-4 rounded-lg">
                            <i class="fas fa-envelope text-2xl text-amber-500"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-white mb-1">Email</h3>
                            <p class="text-gray-400">info@fundacionyonari.org</p>
                        </div>
                    </div>
                    
                    <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-6 rounded-2xl border border-amber-500/30 flex items-start space-x-4 hover:border-amber-500 transition-colors duration-300">
                        <div class="bg-amber-500/10 p-4 rounded-lg">
                            <i class="fas fa-phone text-2xl text-amber-500"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-white mb-1">Teléfono</h3>
                            <p class="text-gray-400">+57 300 123 4567</p>
                        </div>
                    </div>
                    
                    <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-6 rounded-2xl border border-amber-500/30 flex items-start space-x-4 hover:border-amber-500 transition-colors duration-300">
                        <div class="bg-amber-500/10 p-4 rounded-lg">
                            <i class="fas fa-map-marker-alt text-2xl text-amber-500"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-white mb-1">Ubicación</h3>
                            <p class="text-gray-400">Bogotá, Colombia</p>
                        </div>
                    </div>
                    
                    <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-6 rounded-2xl border border-amber-500/30 flex items-start space-x-4 hover:border-amber-500 transition-colors duration-300">
                        <div class="bg-amber-500/10 p-4 rounded-lg">
                            <i class="fas fa-clock text-2xl text-amber-500"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-white mb-1">Horario</h3>
                            <p class="text-gray-400">Lun - Vie: 8:00 AM - 6:00 PM</p>
                            <p class="text-gray-400">Sáb: 9:00 AM - 1:00 PM</p>
                        </div>
                    </div>
                    
                    <!-- Social Media -->
                    <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-6 rounded-2xl border border-amber-500/30">
                        <h3 class="font-semibold text-white mb-4">Síguenos en redes sociales</h3>
                        <div class="flex space-x-4">
                            <a href="https://facebook.com/fundacionyonari" target="_blank" class="bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-700 transform hover:scale-110 transition-all duration-300">
                                <i class="fab fa-facebook-f text-xl"></i>
                            </a>
                            <a href="https://instagram.com/fundacionyonari" target="_blank" class="bg-pink-600 text-white p-3 rounded-lg hover:bg-pink-700 transform hover:scale-110 transition-all duration-300">
                                <i class="fab fa-instagram text-xl"></i>
                            </a>
                            <a href="https://twitter.com/fundacionyonari" target="_blank" class="bg-blue-400 text-white p-3 rounded-lg hover:bg-blue-500 transform hover:scale-110 transition-all duration-300">
                                <i class="fab fa-twitter text-xl"></i>
                            </a>
                            <a href="https://wa.me/573001234567" target="_blank" class="bg-green-500 text-white p-3 rounded-lg hover:bg-green-600 transform hover:scale-110 transition-all duration-300">
                                <i class="fab fa-whatsapp text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gradient-to-t from-gray-900 to-gray-800 border-t border-amber-500/30 py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <!-- About -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <div class="bg-gradient-to-br from-amber-500 to-amber-600 p-2 rounded-lg">
                            <i class="fas fa-balance-scale text-white text-xl"></i>
                        </div>
                        <span class="text-xl font-bold gradient-text">Fundación Yonari</span>
                    </div>
                    <p class="text-sm text-gray-400">Protege tus derechos, construyendo futuro juntos.</p>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h3 class="text-sm font-semibold text-white mb-4">Enlaces rápidos</h3>
                    <div class="space-y-2">
                        <a href="#inicio" class="block text-sm text-gray-400 hover:text-amber-500 transition-colors duration-300">Inicio</a>
                        <a href="#nosotros" class="block text-sm text-gray-400 hover:text-amber-500 transition-colors duration-300">Nosotros</a>
                        <a href="#servicios" class="block text-sm text-gray-400 hover:text-amber-500 transition-colors duration-300">Servicios</a>
                        <a href="#equipo" class="block text-sm text-gray-400 hover:text-amber-500 transition-colors duration-300">Equipo</a>
                    </div>
                </div>
                
                <!-- Services -->
                <div>
                    <h3 class="text-sm font-semibold text-white mb-4">Servicios</h3>
                    <div class="space-y-2">
                        <p class="text-sm text-gray-400">Educación</p>
                        <p class="text-sm text-gray-400">Apoyo Social</p>
                        <p class="text-sm text-gray-400">Defensa de Derechos</p>
                        <p class="text-sm text-gray-400">Desarrollo Comunitario</p>
                    </div>
                </div>
                
                <!-- Contact -->
                <div>
                    <h3 class="text-sm font-semibold text-white mb-4">Contacto</h3>
                    <div class="space-y-2 text-sm text-gray-400">
                        <p><i class="fas fa-envelope text-amber-500 mr-2"></i> info@fundacionyonari.org</p>
                        <p><i class="fas fa-phone text-amber-500 mr-2"></i> +57 300 123 4567</p>
                        <p><i class="fas fa-map-marker-alt text-amber-500 mr-2"></i> Bogotá, Colombia</p>
                    </div>
                </div>
            </div>
            
            <!-- Bottom Footer -->
            <div class="border-t border-white/10 pt-8">
                <div class="flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0">
                    <p class="text-xs text-gray-400">© 2025 Fundación Yonari. Todos los derechos reservados.</p>
                    <div class="flex items-center space-x-4">
                        <p class="text-xs text-gray-400">Desarrollado con ❤️ por el equipo de Fundación Yonari</p>
                        <!-- Visitor Counter -->
                        <div class="flex items-center space-x-2 bg-amber-500/10 px-3 py-1 rounded-full border border-amber-500/30">
                            <i class="fas fa-eye text-amber-500 text-xs"></i>
                            <span class="text-xs text-amber-500 font-semibold" id="visitor-count">0</span>
                            <span class="text-xs text-gray-400">visitas</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Custom JavaScript -->
    <script src="Src/js/app.js"></script>
</body>
</html>
