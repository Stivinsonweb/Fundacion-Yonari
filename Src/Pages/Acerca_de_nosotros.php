<?php
include '../inc/head.php';
include '../inc/header.php';
?>

<main class="container mx-auto px-6 py-12 lg:py-16">
  <section class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
    <div class="relative overflow-hidden rounded-2xl shadow-2xl">
      <video class="w-full h-auto rounded-2xl" autoplay muted loop playsinline>
        <source src="/Src/assets/Video/fundacion-video2.mp4" type="video/mp4" />
      </video>
      <div class="absolute inset-0 bg-gradient-to-t from-white/40 to-transparent rounded-2xl"></div>
    </div>
    <div class="space-y-6">
      <h1 class="text-4xl lg:text-5xl font-bold text-amber-600 uppercase">ACERCA DE NOSOTROS</h1>
      <p class="text-lg text-gray-300">Somos una organización conformada por un equipo de profesionales con una profunda vocación de servicio, dedicados a derribar las barreras que impiden a las personas, familias, comunidades y organizaciones ejercer sus derechos.</p>
      <p class="text-lg text-gray-300">Creemos firmemente que la justicia y el bienestar no deben ser un privilegio, sino una realidad al alcance de todos.</p>
    </div>
  </section>

  <section class="max-w-7xl mx-auto mt-16">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <div class="p-6 rounded-xl bg-white border border-gray-200">
        <h3 class="text-2xl font-semibold text-amber-500">Misión</h3>
        <p class="mt-2 text-sm text-gray-600">Somos una fundación jurídica comprometida con la defensa y promoción de los derechos de las personas, familias, comunidades y organizaciones en Colombia. A través de un equipo de profesionales con profunda vocación de servicio, trabajamos para eliminar las barreras que limitan el acceso a la justicia, brindando acompañamiento integral, orientación y representación jurídica. Nuestro propósito es garantizar que la justicia, la dignidad y el bienestar sean una realidad para todos, especialmente para quienes enfrentan condiciones de vulnerabilidad.</p>
      </div>
      <div class="p-6 rounded-xl bg-white border border-gray-200">
        <h3 class="text-2xl font-semibold text-amber-500">Visión</h3>
        <p class="mt-2 text-sm text-gray-600">Ser una organización referente a nivel nacional por nuestra excelencia, compromiso y humanidad en la defensa de los derechos y el acceso a la justicia. Aspiramos a consolidarnos como una entidad líder en la transformación social y jurídica del país, generando entornos más justos, equitativos e incluyentes donde cada persona y comunidad pueda ejercer plenamente sus derechos y construir un futuro digno y sostenible.</p>
      </div>
    </div>
  </section>
</main>

<?php include '../inc/footer.php'; ?>
