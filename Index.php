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
    <a href="https://wa.me/573135968790" target="_blank" 
       class="fixed bottom-6 right-6 z-50 w-14 h-14 flex items-center justify-center bg-green-500 text-white rounded-full shadow-lg hover:bg-green-600 transform hover:scale-110 transition-all duration-300 group"
       aria-label="Contactar por WhatsApp">
        <i class="fab fa-whatsapp text-2xl"></i>
        <span class="absolute right-full mr-3 top-1/2 -translate-y-1/2 bg-gray-800 text-white px-3 py-1 rounded-lg text-sm whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            ¡Escríbenos!
        </span>
    </a>
    
    <!-- Facebook Floating Button -->
    <a href="https://www.facebook.com/profile.php?id=61586886801192" target="_blank"
       class="fixed bottom-20 right-6 z-50 w-14 h-14 flex items-center justify-center bg-blue-600 text-white rounded-full shadow-lg hover:bg-blue-700 transform hover:scale-110 transition-all duration-300"
       aria-label="Visitar Facebook">
        <i class="fab fa-facebook-f text-2xl"></i>
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
                    <a href="#nosotros" class="nav-link text-sm font-semibold text-gray-300 hover:text-amber-500 transition-colors duración-300 relative group">
                        ACERCA DE NOSOTROS
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-amber-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                    </a>
                    <a href="#servicios" class="nav-link text-sm font-semibold text-gray-300 hover:text-amber-500 transition-colors duration-300 relative group">
                        SERVICIOS
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-amber-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                    </a>
                    <a href="#equipo" class="nav-link text-sm font-semibold text-gray-300 hover:text-amber-500 transition-colors duration-300 relative group">
                        NUESTRO EQUIPO
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-amber-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
                    </a>
                    <a href="#porque" class="nav-link text-sm font-semibold text-gray-300 hover:text-amber-500 transition-colors duration-300 relative group">
                        ¿POR QUÉ LO HACEMOS?
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
                <a href="#nosotros" class="block text-gray-300 hover:text-amber-500 hover:bg-amber-500/10 px-4 py-2 rounded-lg transition-all duration-300">ACERCA DE NOSOTROS</a>
                <a href="#servicios" class="block text-gray-300 hover:text-amber-500 hover:bg-amber-500/10 px-4 py-2 rounded-lg transition-all duration-300">SERVICIOS</a>
                <a href="#equipo" class="block text-gray-300 hover:text-amber-500 hover:bg-amber-500/10 px-4 py-2 rounded-lg transition-all duration-300">NUESTRO EQUIPO</a>
                <a href="#porque" class="block text-gray-300 hover:text-amber-500 hover:bg-amber-500/10 px-4 py-2 rounded-lg transition-all duración-300">¿POR QUÉ LO HACEMOS?</a>
                
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
                        <span class="gradient-text">PROTÉGE TUS DERECHOS</span>
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

    <!-- Donations Section -->
    <!-- Donations Section (removed)
    <section id="donaciones" class="py-20 bg-gradient-to-b from-gray-900 to-gray-800">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl lg:text-5xl font-bold mb-4">
                    <span class="gradient-text">DONACIONES</span>
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-amber-500 to-amber-600 mx-auto mb-4"></div>
                <p class="text-gray-400 max-w-2xl mx-auto">
                    Tu aporte nos ayuda a derribar barreras y acercar la justicia a quienes más lo necesitan.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
                <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-2xl border border-amber-500/30" data-aos="fade-right">
                    <div class="mb-6">
                        <div class="inline-flex rounded-full border border-amber-500/40 bg-gray-800/50 overflow-hidden">
                            <button id="tab-contacto" class="px-5 py-2 text-sm font-semibold text-white bg-amber-600">Contacto</button>
                            <button id="tab-donaciones" class="px-5 py-2 text-sm font-semibold text-gray-300">Donaciones</button>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 mb-6">
                        <button id="tab-contacto" class="px-4 py-2 rounded-full bg-amber-600 text-white font-semibold">Contacto</button>
                        <button id="tab-donaciones" class="px-4 py-2 rounded-full bg-gray-700 text-gray-300 border border-gray-600">Donaciones</button>
                    </div>
                    <div id="form-contacto">
                    <form id="donation-form" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-gray-300 mb-2">Nombre completo</label>
                                <input type="text" required class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:border-amber-500 focus:ring-2 focus:ring-amber-500/50 outline-none text-white transition-colors duration-300" placeholder="Tu nombre">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-300 mb-2">Correo electrónico</label>
                                <input type="email" required class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:border-amber-500 focus:ring-2 focus:ring-amber-500/50 outline-none text-white transition-colors duration-300" placeholder="tu@email.com">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-gray-300 mb-2">Monto (COP)</label>
                                <input type="number" min="1000" step="1000" required class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:border-amber-500 focus:ring-2 focus:ring-amber-500/50 outline-none text-white transition-colors duration-300" placeholder="50,000">
                                <div class="flex gap-2 mt-2">
                                    <button type="button" class="preset-amount px-3 py-1 bg-amber-500/10 text-amber-500 rounded-full border border-amber-500/30">20,000</button>
                                    <button type="button" class="preset-amount px-3 py-1 bg-amber-500/10 text-amber-500 rounded-full border border-amber-500/30">50,000</button>
                                    <button type="button" class="preset-amount px-3 py-1 bg-amber-500/10 text-amber-500 rounded-full border border-amber-500/30">100,000</button>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-300 mb-2">Frecuencia</label>
                                <select class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:border-amber-500 focus:ring-2 focus:ring-amber-500/50 outline-none text-white transition-colors duration-300">
                                    <option>Única</option>
                                    <option>Mensual</option>
                                    <option>Trimestral</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-300 mb-2">Método</label>
                                <select class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:border-amber-500 focus:ring-2 focus:ring-amber-500/50 outline-none text-white transition-colors duración-300">
                                    <option>Transferencia bancaria</option>
                                    <option>Pago electrónico (Próximamente)</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-300 mb-2">Mensaje (opcional)</label>
                            <textarea rows="4" class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:border-amber-500 focus:ring-2 focus:ring-amber-500/50 outline-none text-white transition-colors duration-300 resize-none" placeholder="Cuéntanos algo sobre tu donación"></textarea>
                        </div>
                        <div class="flex items-start gap-3">
                            <input type="checkbox" required class="mt-1 rounded border-gray-600 bg-gray-700/50">
                            <p class="text-sm text-gray-400">Acepto el tratamiento de mis datos conforme a la política de privacidad de la Fundación Yonari.</p>
                        </div>
                        <button type="submit" class="w-full bg-gradient-to-r from-amber-500 to-amber-600 text-white font-semibold py-4 rounded-lg hover:shadow-lg hover:shadow-amber-500/50 transform hover:scale-105 transition-all duration-300">
                            Donar ahora
                            <i class="fas fa-heart ml-2"></i>
                        </button>
                    </form>
                    </div>
                </div>
                
                <div class="space-y-6" data-aos="fade-left">
                    <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-6 rounded-2xl border border-amber-500/30">
                        <h3 class="font-semibold text-white mb-4">Transferencia bancaria</h3>
                        <ul class="text-gray-400 space-y-1">
                            <li><span class="text-amber-500 font-semibold">Banco:</span> Bancolombia</li>
                            <li><span class="text-amber-500 font-semibold">Tipo de cuenta:</span> Ahorros</li>
                            <li><span class="text-amber-500 font-semibold">Número de cuenta:</span> 0000000000</li>
                            <li><span class="text-amber-500 font-semibold">Titular:</span> Fundación Yonari</li>
                            <li><span class="text-amber-500 font-semibold">NIT:</span> 000000000-0</li>
                        </ul>
                        <p class="text-xs text-gray-500 mt-3">Una vez realices la transferencia, por favor envíanos el soporte al correo info@fundacionyonari.org</p>
                    </div>
                    <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-6 rounded-2xl border border-amber-500/30">
                        <h3 class="font-semibold text-white mb-4">Pago electrónico</h3>
                        <p class="text-gray-400">Pronto habilitaremos pagos en línea para facilitar tus donaciones de forma segura.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->

    <!-- About Section -->
    <section id="nosotros" class="py-20 bg-gradient-to-b from-gray-900 to-gray-800 relative">
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
                <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-2xl border border-amber-500/30 ring-1 ring-amber-500/30 hover:ring-amber-500/60 shadow-lg transition-all duration-300" data-aos="flip-left">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="bg-amber-500/10 p-4 rounded-lg">
                            <i class="fas fa-bullseye text-3xl text-amber-500"></i>
                        </div>
                        <h3 class="text-2xl font-bold gradient-text">Misión</h3>
                    </div>
                    <p class="text-gray-300 leading-relaxed">
                        Somos una fundación jurídica comprometida con la defensa y promoción de los derechos de las personas, familias, comunidades y organizaciones en Colombia. A través de un equipo de profesionales con profunda vocación de servicio, trabajamos para eliminar las barreras que limitan el acceso a la justicia, brindando acompañamiento integral, orientación y representación jurídica. Nuestro propósito es garantizar que la justicia, la dignidad y el bienestar sean una realidad para todos, especialmente para quienes enfrentan condiciones de vulnerabilidad.
                    </p>
                </div>
                
                <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-2xl border border-amber-500/30 ring-1 ring-amber-500/30 hover:ring-amber-500/60 shadow-lg transition-all duration-300" data-aos="flip-right">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="bg-amber-500/10 p-4 rounded-lg">
                            <i class="fas fa-eye text-3xl text-amber-500"></i>
                        </div>
                        <h3 class="text-2xl font-bold gradient-text">Visión</h3>
                    </div>
                    <p class="text-gray-300 leading-relaxed">
                        Ser una organización referente a nivel nacional por nuestra excelencia, compromiso y humanidad en la defensa de los derechos y el acceso a la justicia. Aspiramos a consolidarnos como una entidad líder en la transformación social y jurídica del país, generando entornos más justos, equitativos e incluyentes donde cada persona y comunidad pueda ejercer plenamente sus derechos y construir un futuro digno y sostenible.
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
                    En la Fundación Yonari nos mueve una vocación auténtica por servir a las personas, familias y comunidades, brindando acompañamiento jurídico con calidez humana y profesionalismo.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="group bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-2xl border border-amber-500/30 hover:border-amber-500 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl hover:shadow-amber-500/20" data-aos="zoom-in" data-aos-delay="100">
                    <div class="bg-amber-500/10 w-16 h-16 rounded-lg flex items-center justify-center mb-6 group-hover:bg-amber-500/20 transition-colors duration-300">
                        <i class="fas fa-balance-scale text-3xl text-amber-500"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Derecho Administrativo</h3>
                    <ul class="text-gray-400 space-y-1 list-disc pl-5">
                        <li>Nulidad</li>
                        <li>Nulidad y Restablecimiento del Derecho</li>
                        <li>Reparación Directa</li>
                        <li>Contractual</li>
                        <li>Ejecutivo</li>
                        <li>Otros servicios</li>
                    </ul>
                </div>
                
                <div class="group bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-2xl border border-amber-500/30 hover:border-amber-500 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl hover:shadow-amber-500/20" data-aos="zoom-in" data-aos-delay="150">
                    <div class="bg-amber-500/10 w-16 h-16 rounded-lg flex items-center justify-center mb-6 group-hover:bg-amber-500/20 transition-colors duration-300">
                        <i class="fas fa-university text-3xl text-amber-500"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Derecho Constitucional</h3>
                    <ul class="text-gray-400 space-y-1 list-disc pl-5">
                        <li>Acción de Tutela</li>
                        <li>Hábeas corpus</li>
                        <li>Acción Popular</li>
                        <li>Acción de Grupo</li>
                        <li>Derecho de petición</li>
                        <li>Otros servicios</li>
                    </ul>
                </div>
                
                <div class="group bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-2xl border border-amber-500/30 hover:border-amber-500 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl hover:shadow-amber-500/20" data-aos="zoom-in" data-aos-delay="200">
                    <div class="bg-amber-500/10 w-16 h-16 rounded-lg flex items-center justify-center mb-6 group-hover:bg-amber-500/20 transition-colors duration-300">
                        <i class="fas fa-users text-3xl text-amber-500"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Derecho de Familia</h3>
                    <ul class="text-gray-400 space-y-1 list-disc pl-5">
                        <li>Proceso de divorcio</li>
                        <li>Separación de cuerpos y bienes</li>
                        <li>Custodia y cuidado personal</li>
                        <li>Regulación de alimentos</li>
                        <li>Sucesiones y particiones</li>
                        <li>Procesos de filiación</li>
                        <li>Otros servicios</li>
                    </ul>
                </div>
                
                <div class="group bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-2xl border border-amber-500/30 hover:border-amber-500 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl hover:shadow-amber-500/20" data-aos="zoom-in" data-aos-delay="250">
                    <div class="bg-amber-500/10 w-16 h-16 rounded-lg flex items-center justify-center mb-6 group-hover:bg-amber-500/20 transition-colors duration-300">
                        <i class="fas fa-briefcase text-3xl text-amber-500"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Derecho Laboral</h3>
                    <ul class="text-gray-400 space-y-1 list-disc pl-5">
                        <li>Demandas laborales</li>
                        <li>Defensa en demandas laborales</li>
                        <li>Otros servicios</li>
                    </ul>
                </div>
                
                <div class="group bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-2xl border border-amber-500/30 hover:border-amber-500 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl hover:shadow-amber-500/20" data-aos="zoom-in" data-aos-delay="300">
                    <div class="bg-amber-500/10 w-16 h-16 rounded-lg flex items-center justify-center mb-6 group-hover:bg-amber-500/20 transition-colors duration-300">
                        <i class="fas fa-shield-alt text-3xl text-amber-500"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Régimen Disciplinario Especial (Próximamente)</h3>
                    <ul class="text-gray-400 space-y-1 list-disc pl-5">
                        <li>Miembros de las Fuerzas Militares – Ejército, Armada, Fuerza Aérea</li>
                        <li>Policía Nacional</li>
                    </ul>
                </div>
                
                <div class="group bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-2xl border border-amber-500/30 hover:border-amber-500 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl hover:shadow-amber-500/20" data-aos="zoom-in" data-aos-delay="350">
                    <div class="bg-amber-500/10 w-16 h-16 rounded-lg flex items-center justify-center mb-6 group-hover:bg-amber-500/20 transition-colors duration-300">
                        <i class="fas fa-gavel text-3xl text-amber-500"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Derecho Penal (Próximamente)</h3>
                    <ul class="text-gray-400 space-y-1 list-disc pl-5">
                        <li>Defensa Técnica en Procesos Penales</li>
                        <li>Otros servicios</li>
                    </ul>
                </div>
                
                <div class="group bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-2xl border border-amber-500/30 hover:border-amber-500 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl hover:shadow-amber-500/20" data-aos="zoom-in" data-aos-delay="400">
                    <div class="bg-amber-500/10 w-16 h-16 rounded-lg flex items-center justify-center mb-6 group-hover:bg-amber-500/20 transition-colors duration-300">
                        <i class="fas fa-print text-3xl text-amber-500"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Sistema de Responsabilidad Penal Para Adolescentes (Próximamente)</h3>
                    <ul class="text-gray-400 space-y-1 list-disc pl-5">
                        <li>Defensa Técnica en Procesos Penales</li>
                        <li>Otros servicios</li>
                    </ul>
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
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Team Member 1 -->
                <div class="group bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden border border-amber-500/30 hover:border-amber-500 transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="100">
                    <div class="aspect-square bg-gradient-to-br from-amber-500/20 to-amber-600/20 flex items-center justify-center">
                        <img src="Src/assets/img/Eddy.png" alt="EDDY LUIS VALOYES ORTIZ" class="w-full h-full object-cover" loading="lazy">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-1">EDDY LUIS VALOYES ORTIZ</h3>
                        <p class="text-amber-500 mb-3">Abogado – Presidente de la Fundación.</p>
                        <p class="text-gray-400 text-sm"></p>
                    </div>
                </div>
                
                <!-- Team Member 2 -->
                <div class="group bg-gradient-to-br from-gray-800 to-gray-900 rounded-2xl overflow-hidden border border-amber-500/30 hover:border-amber-500 transition-all duration-300 transform hover:scale-105" data-aos="fade-up" data-aos-delay="200">
                    <div class="aspect-square bg-gradient-to-br from-amber-500/20 to-amber-600/20 flex items-center justify-center">
                        <img src="Src/assets/img/Darleyda.png" alt="DARLEYDA VALOYES RODRIGUEZ" class="w-full h-full object-cover" loading="lazy">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-1">DARLEYDA VALOYES RODRIGUEZ</h3>
                        <p class="text-amber-500 mb-3">Abogada – Vicepresidenta de la Fundación</p>
                        <p class="text-gray-400 text-sm"></p>
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
                            Lo hacemos porque estamos comprometidos con construir un país más justo, solidario e inclusivo, donde cada persona tenga la posibilidad real de defender su dignidad y acceder a la administración de justicia sin límites ni exclusiones.
                            <i class="fas fa-quote-right text-amber-500 ml-2"></i>
                        </p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
                        <div class="text-center p-6 bg-white/5 rounded-lg border border-amber-500/20">
                            <i class="fas fa-heart text-4xl text-amber-500 mb-3"></i>
                            <h4 class="font-semibold text-white">Necesidades reales</h4>
                            <p class="text-sm text-gray-400 mt-2">Porque miles de personas y comunidades en Colombia siguen enfrentando barreras económicas, sociales y territoriales que les impiden ejercer sus derechos y acceder a una defensa jurídica digna.</p>
                        </div>
                        <div class="text-center p-6 bg-white/5 rounded-lg border border-amber-500/20">
                            <i class="fas fa-users text-4xl text-amber-500 mb-3"></i>
                            <h4 class="font-semibold text-white">Impacto sostenible</h4>
                            <p class="text-sm text-gray-400 mt-2">Porque cada intervención jurídica fortalece capacidades, transforma entornos y genera cambios duraderos que permiten a las personas y comunidades vivir con mayor justicia, autonomía y dignidad.</p>
                        </div>
                        <div class="text-center p-6 bg-white/5 rounded-lg border border-amber-500/20">
                            <i class="fas fa-star text-4xl text-amber-500 mb-3"></i>
                            <h4 class="font-semibold text-white">Labor social</h4>
                            <p class="text-sm text-gray-400 mt-2">Porque acompañamos, orientamos y defendemos a quienes históricamente han sido excluidos, promoviendo justicia, equidad y oportunidades reales para mejorar su calidad de vida y la de sus comunidades.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-6xl mx-auto mt-12 grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="text-center p-6 bg-white/5 rounded-lg border border-amber-500/20">
                    <p class="text-4xl font-extrabold text-amber-500">100</p>
                    <p class="text-sm font-semibold text-white mt-1">FAMILIAS APOYADAS</p>
                </div>
                <div class="text-center p-6 bg-white/5 rounded-lg border border-amber-500/20">
                    <p class="text-4xl font-extrabold text-amber-500">13</p>
                    <p class="text-sm font-semibold text-white mt-1">AÑOS DE EXPERIENCIA</p>
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
                <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-2xl border border-amber-500/30" data-aos="fade-right">
                    <div role="tablist" aria-label="Formularios" class="inline-flex rounded-full border border-amber-500/40 bg-gray-800/50 overflow-hidden mb-6">
                        <button id="tab-contacto" role="tab" aria-selected="true" aria-controls="panel-contacto" class="px-5 py-2 text-sm font-semibold text-white bg-amber-600">Contacto</button>
                        <button id="tab-donaciones" role="tab" aria-selected="false" aria-controls="panel-donaciones" class="px-5 py-2 text-sm font-semibold text-gray-300">Donaciones</button>
                    </div>
                    <div id="panel-contacto" role="tabpanel" aria-labelledby="tab-contacto">
                        <form id="contact-form" class="space-y-6" novalidate>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="contact-name" class="block text-sm font-semibold text-gray-300 mb-2">Nombre completo</label>
                                    <input id="contact-name" name="name" type="text" required minlength="3" class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:border-amber-500 focus:ring-2 focus:ring-amber-500/50 outline-none text-white transition-colors duration-300" placeholder="Tu nombre">
                                </div>
                                <div>
                                    <label for="contact-email" class="block text-sm font-semibold text-gray-300 mb-2">Correo electrónico</label>
                                    <input id="contact-email" name="email" type="email" required class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:border-amber-500 focus:ring-2 focus:ring-amber-500/50 outline-none text-white transition-colors duration-300" placeholder="tu@email.com" inputmode="email" autocomplete="email">
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="contact-phone" class="block text-sm font-semibold text-gray-300 mb-2">Teléfono</label>
                                    <input id="contact-phone" name="phone" type="tel" class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:border-amber-500 focus:ring-2 focus:ring-amber-500/50 outline-none text-white transition-colors duration-300" placeholder="+57 313 596 8790" inputmode="tel" autocomplete="tel">
                                </div>
                                <div>
                                    <label for="contact-subject" class="block text-sm font-semibold text-gray-300 mb-2">Asunto</label>
                                    <input id="contact-subject" name="subject" type="text" required minlength="3" class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:border-amber-500 focus:ring-2 focus:ring-amber-500/50 outline-none text-white transition-colors duration-300" placeholder="Motivo del mensaje">
                                </div>
                            </div>
                            <div>
                                <label for="contact-message" class="block text-sm font-semibold text-gray-300 mb-2">Mensaje</label>
                                <textarea id="contact-message" name="message" rows="5" required minlength="10" class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:border-amber-500 focus:ring-2 focus:ring-amber-500/50 outline-none text-white transition-colors duration-300 resize-none" placeholder="Cuéntanos en qué podemos ayudarte"></textarea>
                            </div>
                            <div aria-live="polite" id="contact-feedback" class="text-sm"></div>
                            <button type="submit" class="w-full bg-gradient-to-r from-amber-500 to-amber-600 text-white font-semibold py-4 rounded-lg hover:shadow-lg hover:shadow-amber-500/50 transform hover:scale-105 transition-all duration-300">
                                Enviar mensaje
                                <i class="fas fa-paper-plane ml-2"></i>
                            </button>
                        </form>
                    </div>
                    <div id="panel-donaciones" role="tabpanel" aria-labelledby="tab-donaciones" class="hidden">
                        <form id="donation-form" class="space-y-6" novalidate>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="donor-name" class="block text-sm font-semibold text-gray-300 mb-2">Nombre completo</label>
                                    <input id="donor-name" name="donor_name" type="text" required minlength="3" class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:border-amber-500 focus:ring-2 focus:ring-amber-500/50 outline-none text-white transition-colors duration-300" placeholder="Tu nombre">
                                </div>
                                <div>
                                    <label for="donor-email" class="block text-sm font-semibold text-gray-300 mb-2">Correo electrónico</label>
                                    <input id="donor-email" name="donor_email" type="email" required class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:border-amber-500 focus:ring-2 focus:ring-amber-500/50 outline-none text-white transition-colors duration-300" placeholder="tu@email.com" inputmode="email" autocomplete="email">
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div>
                                    <label for="donation-amount" class="block text-sm font-semibold text-gray-300 mb-2">Monto (COP)</label>
                                    <input id="donation-amount" name="amount" type="number" min="1000" step="1000" required class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:border-amber-500 focus:ring-2 focus:ring-amber-500/50 outline-none text-white transition-colors duration-300" placeholder="50,000">
                                    <div class="flex gap-2 mt-2">
                                        <button type="button" class="preset-amount px-3 py-1 bg-amber-500/10 text-amber-500 rounded-full border border-amber-500/30" data-amount="20000">20,000</button>
                                        <button type="button" class="preset-amount px-3 py-1 bg-amber-500/10 text-amber-500 rounded-full border border-amber-500/30" data-amount="50000">50,000</button>
                                        <button type="button" class="preset-amount px-3 py-1 bg-amber-500/10 text-amber-500 rounded-full border border-amber-500/30" data-amount="100000">100,000</button>
                                    </div>
                                </div>
                                <div>
                                    <label for="donation-frequency" class="block text-sm font-semibold text-gray-300 mb-2">Frecuencia</label>
                                    <select id="donation-frequency" name="frequency" required class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:border-amber-500 focus:ring-2 focus:ring-amber-500/50 outline-none text-white transition-colors duration-300">
                                        <option value="one_time">Única</option>
                                        <option value="monthly">Mensual</option>
                                        <option value="quarterly">Trimestral</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="donation-method" class="block text-sm font-semibold text-gray-300 mb-2">Método</label>
                                    <select id="donation-method" name="method" required class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:border-amber-500 focus:ring-2 focus:ring-amber-500/50 outline-none text-white transition-colors duración-300">
                                        <option value="bancolombia">Bancolombia</option>
                                        <option value="nequi">Nequi</option>
                                    </select>
                                </div>
                            </div>
                            <div id="bank-details" class="bg-gray-800/50 border border-amber-500/30 rounded-lg p-4 text-sm text-gray-300">
                                <p><span class="text-amber-500 font-semibold">Banco:</span> Bancolombia</p>
                                <p><span class="text-amber-500 font-semibold">Tipo de cuenta:</span> Ahorros</p>
                                <p><span class="text-amber-500 font-semibold">Número de cuenta:</span> 0000000000</p>
                                <p><span class="text-amber-500 font-semibold">Titular:</span> Fundación Yonari</p>
                                <p><span class="text-amber-500 font-semibold">NIT:</span> 000000000-0</p>
                            </div>
                            <div id="nequi-details" class="hidden bg-amber-500/10 border border-amber-500/30 rounded-lg p-4 text-sm text-amber-500">
                                <p><span class="font-semibold">Nequi:</span> 313 596 8790</p>
                                <p>Usa el número para transferir por Nequi. Envía el comprobante a contacto@fundacionyonari.org.</p>
                            </div>
                            <div>
                                <label for="donation-message" class="block text-sm font-semibold text-gray-300 mb-2">Mensaje (opcional)</label>
                                <textarea id="donation-message" name="notes" rows="4" class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:border-amber-500 focus:ring-2 focus:ring-amber-500/50 outline-none text-white transition-colors duration-300 resize-none" placeholder="Cuéntanos algo sobre tu donación"></textarea>
                            </div>
                            <div class="flex items-start gap-3">
                                <input id="donation-consent" name="consent" type="checkbox" required class="mt-1 rounded border-gray-600 bg-gray-700/50">
                                <label for="donation-consent" class="text-sm text-gray-400">Acepto el tratamiento de mis datos conforme a la política de privacidad de la Fundación Yonari.</label>
                            </div>
                            <div aria-live="polite" id="donation-feedback" class="text-sm"></div>
                            <button type="submit" class="w-full bg-gradient-to-r from-amber-500 to-amber-600 text-white font-semibold py-4 rounded-lg hover:shadow-lg hover:shadow-amber-500/50 transform hover:scale-105 transition-all duration-300">
                                Donar ahora
                                <i class="fas fa-heart ml-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
                
                <!-- Contact Info -->
                <div class="space-y-6" data-aos="fade-left">
                    <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-6 rounded-2xl border border-amber-500/30 flex items-start space-x-4 hover:border-amber-500 transition-colors duration-300">
                        <div class="bg-amber-500/10 p-4 rounded-lg">
                            <i class="fas fa-envelope text-2xl text-amber-500"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-white mb-1">Contáctanos</h3>
                            <p class="text-gray-400"><a href="mailto:contacto@fundacionyonari.org" class="hover:underline">contacto@fundacionyonari.org</a></p>
                        </div>
                    </div>
                    
                    <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-6 rounded-2xl border border-amber-500/30 flex items-start space-x-4 hover:border-amber-500 transition-colors duration-300">
                        <div class="bg-amber-500/10 p-4 rounded-lg">
                            <i class="fab fa-whatsapp text-2xl text-amber-500"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-white mb-1">WhatsApp</h3>
                            <p class="text-gray-400"><a href="https://wa.me/573135968790" target="_blank" rel="noopener" class="hover:underline">313 596 8790</a></p>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-6 rounded-2xl border border-amber-500/30 flex items-start space-x-4 hover:border-amber-500 transition-colors duration-300">
                        <div class="bg-amber-500/10 p-4 rounded-lg">
                            <i class="fas fa-envelope-open-text text-2xl text-amber-500"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-white mb-1">Solo para notificaciones judiciales</h3>
                            <p class="text-gray-400"><a href="mailto:notificacionjudicial@fundacionyonari.org" class="hover:underline">notificacionjudicial@fundacionyonari.org</a></p>
                        </div>
                    </div>
                    
                    <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-6 rounded-2xl border border-amber-500/30 flex items-start space-x-4 hover:border-amber-500 transition-colors duration-300">
                        <div class="bg-amber-500/10 p-4 rounded-lg">
                            <i class="fas fa-map-marker-alt text-2xl text-amber-500"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-white mb-1">Ubicación</h3>
                            <p class="text-gray-400">Quibdó - Chocó – Colombia</p>
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
                            <a href="https://www.facebook.com/profile.php?id=61586886801192" target="_blank" class="bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-700 transform hover:scale-110 transition-all duration-300">
                                <i class="fab fa-facebook-f text-xl"></i>
                            </a>
                            <a href="https://instagram.com/fundacionyonari" target="_blank" class="bg-pink-600 text-white p-3 rounded-lg hover:bg-pink-700 transform hover:scale-110 transition-all duration-300">
                                <i class="fab fa-instagram text-xl"></i>
                            </a>
                            <a href="https://twitter.com/fundacionyonari" target="_blank" class="bg-blue-400 text-white p-3 rounded-lg hover:bg-blue-500 transform hover:scale-110 transition-all duration-300">
                                <i class="fab fa-twitter text-xl"></i>
                            </a>
                            <a href="https://wa.me/573135968790" target="_blank" class="bg-green-500 text-white p-3 rounded-lg hover:bg-green-600 transform hover:scale-110 transition-all duration-300">
                                <i class="fab fa-whatsapp text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'Src/Pages/footer-final.php'; ?>

    <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Custom JavaScript -->
    <script src="Src/js/app.js"></script>
</body>
</html>
