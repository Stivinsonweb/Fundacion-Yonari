<?php
include '../inc/head.php';
include '../inc/header.php';
?>

<main class="container mx-auto px-6 py-12 lg:py-16">
  <section class="max-w-6xl mx-auto">
    <h1 class="text-4xl lg:text-5xl font-bold text-amber-600 uppercase">Servicios</h1>
    <p class="mt-4 text-lg text-gray-300">En la Fundación Yonari nos mueve una vocación auténtica por servir a las personas, familias y comunidades, brindando acompañamiento jurídico con calidez humana y profesionalismo.</p>
    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="p-6 rounded-xl bg-white/5 border border-white/10">
        <h3 class="text-xl font-semibold text-amber-500">⚖️ Derecho Administrativo</h3>
        <ul class="mt-2 text-sm text-gray-300 space-y-1 list-disc list-inside">
          <li>Nulidad.</li>
          <li>Nulidad y Restablecimiento del Derecho.</li>
          <li>Reparación Directa.</li>
          <li>Contractual.</li>
          <li>Ejecutivo.</li>
          <li>Otros servicios.</li>
        </ul>
      </div>
      <div class="p-6 rounded-xl bg-white/5 border border-white/10">
        <h3 class="text-xl font-semibold text-amber-500">⚖️ Derecho Constitucional</h3>
        <ul class="mt-2 text-sm text-gray-300 space-y-1 list-disc list-inside">
          <li>Acción de Tutela.</li>
          <li>Hábeas corpus.</li>
          <li>Acción Popular.</li>
          <li>Acción de Grupo.</li>
          <li>Derecho de petición.</li>
          <li>Otros servicios.</li>
        </ul>
      </div>
      <div class="p-6 rounded-xl bg-white/5 border border-white/10">
        <h3 class="text-xl font-semibold text-amber-500">👨‍👩‍👧 Derecho de Familia</h3>
        <ul class="mt-2 text-sm text-gray-300 space-y-1 list-disc list-inside">
          <li>Proceso de divorcio.</li>
          <li>Separación de cuerpos y bienes.</li>
          <li>Custodia y cuidado personal.</li>
          <li>Regulación de alimentos.</li>
          <li>Sucesiones y particiones.</li>
          <li>Procesos de filiación.</li>
          <li>Otros servicios.</li>
        </ul>
      </div>
      <div class="p-6 rounded-xl bg-white/5 border border-white/10">
        <h3 class="text-xl font-semibold text-amber-500">⚒️ Derecho Laboral</h3>
        <ul class="mt-2 text-sm text-gray-300 space-y-1 list-disc list-inside">
          <li>Demandas laborales.</li>
          <li>Defensa en demandas laborales.</li>
          <li>Otros servicios.</li>
        </ul>
      </div>
      <div class="p-6 rounded-xl bg-white/5 border border-white/10">
        <h3 class="text-xl font-semibold text-amber-500">🏛️ Régimen Disciplinario Especial <span class="text-xs text-gray-400">(Próximamente)</span></h3>
        <ul class="mt-2 text-sm text-gray-300 space-y-1 list-disc list-inside">
          <li>Miembros de las Fuerzas Militares – Ejército, Armada, Fuerza Aérea.</li>
          <li>Policía Nacional.</li>
        </ul>
      </div>
      <div class="p-6 rounded-xl bg-white/5 border border-white/10">
        <h3 class="text-xl font-semibold text-amber-500">👤 Derecho Penal <span class="text-xs text-gray-400">(Próximamente)</span></h3>
        <ul class="mt-2 text-sm text-gray-300 space-y-1 list-disc list-inside">
          <li>Defensa Técnica en Procesos Penales.</li>
          <li>Otros servicios.</li>
        </ul>
      </div>
      <div class="p-6 rounded-xl bg-white/5 border border-white/10">
        <h3 class="text-xl font-semibold text-amber-500">🖨️ Sistema de Responsabilidad Penal Para Adolescentes <span class="text-xs text-gray-400">(Próximamente)</span></h3>
        <ul class="mt-2 text-sm text-gray-300 space-y-1 list-disc list-inside">
          <li>Defensa Técnica en Procesos Penales.</li>
          <li>Otros servicios.</li>
        </ul>
      </div>
    </div>
    <div class="mt-10 text-center">
      <a href="/Src/Pages/Contactanos.php" class="inline-flex items-center px-8 py-4 text-lg font-semibold text-amber-600 border-2 border-amber-600 rounded-full hover:bg-amber-600 hover:text-white transform hover:scale-105 transition-all duration-300 shadow-lg">
        Solicitar asesoría
        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
        </svg>
      </a>
    </div>
  </section>
</main>

<?php include '../inc/footer.php'; ?>
