<header class="sticky top-0 z-50 bg-gradient-to-b from-gray-900 to-gray-800 border-b border-amber-500/30 relative">
  <!-- Degradado difuminado hacia abajo -->
  
  
  <nav aria-label="Global" class="mx-auto flex h-24 max-w-7xl items-center justify-between px-6 lg:px-8 relative z-10">
    <div class="flex lg:flex-1">
      <a href="/Index.php" class="flex items-center -m-1.5 p-1.5">
        <span class="sr-only">Inicio</span>
        <img 
          src="/Src/assets/Logo/Fundacion-yonari.png" 
          alt="Logo de Fundación Yonari" 
          class="h-40 w-auto object-contain" 
        />
      </a>
    </div>
    
    <div class="flex lg:hidden">
      <button type="button" command="show-modal" commandfor="mobile-menu" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-400 hover:text-white transition-colors duration-200">
        <span class="sr-only">Open main menu</span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" class="size-6">
          <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </div>
    
    <div class="hidden lg:flex lg:gap-x-12">
      <a href="/Index.php" class="text-sm/6 font-semibold text-white uppercase hover:text-amber-500 transition-colors duration-300 relative group">
        INICIO
        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-amber-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
      </a>
      <a href="/Src/Pages/Equipo.php" class="text-sm/6 font-semibold text-white uppercase hover:text-amber-500 transition-colors duración-300 relative group">
        NUESTRO EQUIPO DE TRABAJO
        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-amber-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
      </a>
      <a href="/Src/Pages/Acerca_de_nosotros.php" class="text-sm/6 font-semibold text-white uppercase hover:text-amber-500 transition-colors duration-300 relative group">
        ACERCA DE NOSOTROS
        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-amber-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
      </a>
      <a href="/Src/Pages/Servicios.php" class="text-sm/6 font-semibold text-white uppercase hover:text-amber-500 transition-colors duration-300 relative group">
        SERVICIOS
        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-amber-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
      </a>
      <a href="/Src/Pages/Porque_lo_hacemos.php" class="text-sm/6 font-semibold text-white uppercase hover:text-amber-500 transition-colors duration-300 relative group">
        ¿POR QUÉ LO HACEMOS?
        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-amber-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
      </a>
      <a href="/Src/Pages/Donar.php" class="text-sm/6 font-semibold text-white uppercase hover:text-amber-500 transition-colors duration-300 relative group">
        DONAR
        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-amber-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
      </a>
      <a href="/Src/Pages/Contactanos.php" class="text-sm/6 font-semibold text-white uppercase hover:text-amber-500 transition-colors duration-300 relative group">
        CONTÁCTANOS
        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-amber-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></span>
      </a>
    </div>
  </nav>
  
  
  <el-dialog>
    <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
      <div tabindex="0" class="fixed inset-0 focus:outline-none">
        <el-dialog-panel class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-gradient-to-b from-gray-900 to-gray-800 p-6 sm:max-w-sm sm:ring-1 sm:ring-white/10">
          <div class="flex items-center justify-between">
            <a href="/Index.php" class="-m-1.5 p-1.5">
              <span class="sr-only">Fundación Yonari</span>
              <img src="/Src/assets/Logo/Fundacion-yonari.png" alt="" class="h-10 w-auto" />
            </a>
            <button type="button" command="close" commandfor="mobile-menu" class="-m-2.5 rounded-md p-2.5 text-gray-400 hover:text-white transition-colors duration-200">
              <span class="sr-only">Close menu</span>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" class="size-6">
                <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>
          </div>
          <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-white/10">
              <div class="space-y-2 py-6">
                <a href="/Index.php" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white uppercase hover:bg-amber-500/10 hover:text-amber-500 transition-all duration-300">INICIO</a>
                <a href="/Src/Pages/Equipo.php" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white uppercase hover:bg-amber-500/10 hover:text-amber-500 transition-all duration-300">NUESTRO EQUIPO DE TRABAJO</a>
                <a href="/Src/Pages/Acerca_de_nosotros.php" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white uppercase hover:bg-amber-500/10 hover:text-amber-500 transition-all duration-300">ACERCA DE NOSOTROS</a>
                <a href="/Src/Pages/Servicios.php" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white uppercase hover:bg-amber-500/10 hover:text-amber-500 transition-all duration-300">SERVICIOS</a>
                <a href="/Src/Pages/Porque_lo_hacemos.php" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white uppercase hover:bg-amber-500/10 hover:text-amber-500 transition-all duration-300">¿POR QUÉ LO HACEMOS?</a>
                <a href="/Src/Pages/Donar.php" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white uppercase hover:bg-amber-500/10 hover:text-amber-500 transition-all duration-300">DONAR</a>
                <a href="/Src/Pages/Contactanos.php" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white uppercase hover:bg-amber-500/10 hover:text-amber-500 transition-all duration-300">CONTÁCTANOS</a>
              </div>
            </div>
          </div>
        </el-dialog-panel>
      </div>
    </dialog>
  </el-dialog>
</header>
