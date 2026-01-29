<?php
include '../inc/head.php';
include '../inc/header.php';
?>

<main class="container mx-auto px-6 py-12 lg:py-16">
  <section class="max-w-6xl mx-auto space-y-8">
    <div class="text-center space-y-2">
      <h1 class="text-4xl lg:text-5xl font-bold text-amber-600 uppercase">Donación</h1>
      <h2 class="text-base lg:text-lg font-semibold text-gray-300 uppercase">Fundación Yonari</h2>
    </div>
    <p class="text-lg text-gray-300 text-center">Tu contribución fortalece nuestros programas de acceso a la justicia. Al donar en dinero o especie, te conviertes en un aliado estratégico para proteger los derechos de personas y comunidades en situación de vulnerabilidad.</p>

    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
      <div class="p-6 rounded-xl bg-white/5 border border-white/10">
        <h3 class="text-xl font-semibold text-amber-500">Donación en dinero</h3>
        <p class="mt-2 text-sm text-gray-300">Apoya directamente la atención jurídica y el acompañamiento integral.</p>
        <ul class="mt-3 text-sm text-gray-300 space-y-1 list-disc list-inside">
          <li>Aportes únicos o periódicos.</li>
          <li>Transferencia bancaria (te compartimos los datos al contacto).</li>
          <li>Aliados corporativos y filantropía.</li>
        </ul>
        <div class="mt-4 flex gap-3">
          <a href="https://wa.me/573135968790" target="_blank" rel="noopener" class="inline-flex items-center px-5 py-2.5 text-sm font-semibold text-white bg-amber-600 rounded-lg hover:bg-amber-700 transition" aria-label="Donar por WhatsApp">WhatsApp</a>
          <a href="mailto:contacto@fundacionyonari.org" class="inline-flex items-center px-5 py-2.5 text-sm font-semibold text-amber-600 border-2 border-amber-600 rounded-lg hover:bg-amber-600 hover:text-white transition" aria-label="Escribir por correo">Correo</a>
        </div>
      </div>
      <div class="p-6 rounded-xl bg-white/5 border border-white/10">
        <h3 class="text-xl font-semibold text-amber-500">Donación en especie</h3>
        <p class="mt-2 text-sm text-gray-300">Contribuye con insumos, materiales o servicios que potencien nuestro trabajo.</p>
        <ul class="mt-3 text-sm text-gray-300 space-y-1 list-disc list-inside">
          <li>Equipos y herramientas para atención jurídica.</li>
          <li>Materiales educativos y de difusión.</li>
          <li>Logística, transporte y espacios.</li>
        </ul>
        <div class="mt-4 flex gap-3">
          <a href="https://wa.me/573135968790" target="_blank" rel="noopener" class="inline-flex items-center px-5 py-2.5 text-sm font-semibold text-white bg-amber-600 rounded-lg hover:bg-amber-700 transition" aria-label="Coordinar donación por WhatsApp">WhatsApp</a>
          <a href="mailto:contacto@fundacionyonari.org" class="inline-flex items-center px-5 py-2.5 text-sm font-semibold text-amber-600 border-2 border-amber-600 rounded-lg hover:bg-amber-600 hover:text-white transition" aria-label="Coordinar donación por correo">Correo</a>
        </div>
      </div>
    </div>

    <div class="mt-10 text-center">
      <a href="/Src/Pages/Contactanos.php" class="inline-flex items-center px-8 py-4 text-lg font-semibold text-amber-600 border-2 border-amber-600 rounded-full hover:bg-amber-600 hover:text-white transform hover:scale-105 transition-all duration-300 shadow-lg" aria-label="Contactar a Fundación Yonari">
        Solicitar información
        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
        </svg>
      </a>
    </div>
  </section>
</main>

<?php include '../inc/footer.php'; ?>
