<?php 

include 'Src/inc/head.php'; 
include 'Src/inc/header.php';

?>

<main class="container mx-auto px-6 py-12 lg:py-16">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
        
        <div class="relative group overflow-hidden rounded-xl shadow-2xl">
            <video 
                class="w-full h-auto rounded-xl transition-transform duration-500 group-hover:scale-105" 
                autoplay 
                muted 
                loop
                playsinline
            >
                <source src="Src/assets/Video/fundacion-video.mp4" type="video/mp4">
                Tu navegador no soporta el elemento de video.
            </video>
            
            <div class="absolute inset-0 bg-gradient-to-t from-white/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-xl pointer-events-none"></div>
        </div>
        
        <div class="flex flex-col justify-center space-y-6">
            <h2 class="text-4xl lg:text-5xl font-bold leading-tight uppercase">
                <span class="text-amber-600">PROTÉGE TUS DERECHOS</span>
            </h2>
            
            <p class="text-lg text-gray-600 leading-relaxed">
                Estamos contigo para que hagas valer tus derechos. Recibe apoyo jurídico oportuno de la Fundación Yonari y accede a la justicia de manera segura, clara y sin obstáculos.
            </p>
            
            <div class="pt-4">
                <a href="/Src/Pages/Contactanos.php" 
                   class="inline-flex items-center px-8 py-4 text-lg font-semibold text-amber-600 border-2 border-amber-600 rounded-full hover:bg-amber-600 hover:text-white transform hover:scale-105 transition-all duration-300 shadow-lg">
                    Comunicate ahora
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
        
    </div>
</main>


<section class="container mx-auto px-6 pt-4 pb-16">
  <div class="max-w-7xl mx-auto">
    <div class="flex items-center justify-between">
      <h3 class="text-2xl font-bold text-gray-900">Servicios destacados</h3>
      <div class="flex gap-2">
        <button type="button" id="srv-prev" class="p-2 rounded-lg bg-white/5 border border-white/10 text-gray-300 hover:text-amber-500">◀</button>
        <button type="button" id="srv-next" class="p-2 rounded-lg bg-white/5 border border-white/10 text-gray-300 hover:text-amber-500">▶</button>
      </div>
    </div>
    <div id="srv-scroller" class="mt-6 overflow-x-auto scroll-smooth snap-x snap-mandatory">
      <div class="flex gap-6 min-w-max">
        <a href="/Src/Pages/Servicios.php" class="snap-start w-80 p-6 rounded-xl bg-white border border-gray-200 hover:border-amber-600 transition-colors">
          <h4 class="text-xl font-semibold text-amber-500">Educación</h4>
          <p class="mt-2 text-sm text-gray-600">Talleres, mentorías y apoyo escolar.</p>
        </a>
        <a href="/Src/Pages/Servicios.php" class="snap-start w-80 p-6 rounded-xl bg-white border border-gray-200 hover:border-amber-600 transition-colors">
          <h4 class="text-xl font-semibold text-amber-500">Apoyo social</h4>
          <p class="mt-2 text-sm text-gray-600">Orientación y acceso a redes de ayuda.</p>
        </a>
        <a href="/Src/Pages/Servicios.php" class="snap-start w-80 p-6 rounded-xl bg-white border border-gray-200 hover:border-amber-600 transition-colors">
          <h4 class="text-xl font-semibold text-amber-500">Defensa de derechos</h4>
          <p class="mt-2 text-sm text-gray-600">Acompañamiento y asesoría.</p>
        </a>
        <a href="/Src/Pages/Servicios.php" class="snap-start w-80 p-6 rounded-xl bg-white border border-gray-200 hover:border-amber-600 transition-colors">
          <h4 class="text-xl font-semibold text-amber-500">Desarrollo comunitario</h4>
          <p class="mt-2 text-sm text-gray-600">Acciones participativas con impacto local.</p>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="container mx-auto px-6 pb-20">
  <div class="max-w-3xl mx-auto text-center">
    <div id="testimony" class="text-lg text-gray-600">"La Fundación Yonari transformó nuestro barrio."</div>
    <div class="mt-4 text-sm text-gray-600">María, lideresa comunitaria</div>
  </div>
</section>

<script>
const scroller=document.getElementById('srv-scroller');
const prev=document.getElementById('srv-prev');
const next=document.getElementById('srv-next');
function scrollByCards(dir){const cardWidth=320+24;scroller.scrollBy({left:dir*cardWidth,behavior:'smooth'})}
prev&&prev.addEventListener('click',()=>scrollByCards(-1));
next&&next.addEventListener('click',()=>scrollByCards(1));
const testimonials=[
  {t:'“La Fundación Yonari transformó nuestro barrio.”',a:'María, lideresa comunitaria'},
  {t:'“Gracias a sus talleres, hoy tengo nuevas oportunidades.”',a:'Juan, participante'},
  {t:'“El acompañamiento ha sido clave para nuestra familia.”',a:'Ana, madre de familia'}
];
const tEl=document.getElementById('testimony');
let ti=0;setInterval(()=>{ti=(ti+1)%testimonials.length;tEl.textContent=testimonials[ti].t;},4000);
</script>

<?php include 'Src/inc/footer.php'; ?>
