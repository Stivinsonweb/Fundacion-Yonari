<?php
include '../inc/head.php';
include '../inc/header.php';
?>

<main class="container mx-auto px-6 py-12 lg:py-16">
  <section class="max-w-7xl mx-auto">
    <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 uppercase">Contáctanos</h1>
    <p class="mt-4 text-lg text-amber-600">Escríbenos y construyamos futuro juntos.</p>
    <div class="mt-8 grid grid-cols-1 lg:grid-cols-3 gap-8">
      <div class="p-6 rounded-xl bg-white border border-gray-200 space-y-4">
        <h2 class="text-xl font-semibold text-amber-600">Contacto</h2>
        <p class="text-sm text-gray-600"><span class="font-medium">WhatsApp:</span> <a href="https://wa.me/573135968790" class="text-amber-600 hover:underline" target="_blank" rel="noopener">3135968790</a></p>
        <p class="text-sm text-gray-600"><span class="font-medium">Contáctanos:</span> <a href="mailto:contacto@fundacionyonari.org" class="text-amber-600 hover:underline">contacto@fundacionyonari.org</a></p>
        <p class="text-sm text-gray-600"><span class="font-medium">Solo para notificaciones judiciales:</span> <a href="mailto:notificacionjudicial@fundacionyonari.org" class="text-amber-600 hover:underline">notificacionjudicial@fundacionyonari.org</a></p>
        <div class="flex gap-3">
          <a href="#" class="p-2 rounded-full bg-white hover:bg-amber-500/20 text-gray-600 hover:text-amber-500 transition">
            <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5"><path d="M22.46 6c-.77.35-1.6.58-2.46.69a4.3 4.3 0 0 0 1.88-2.38 8.59 8.59 0 0 1-2.72 1.04 4.28 4.28 0 0 0-7.29 3.9A12.13 12.13 0 0 1 3.15 4.67a4.28 4.28 0 0 0 1.32 5.72 4.24 4.24 0 0 1-1.94-.54v.06a4.28 4.28 0 0 0 3.43 4.2 4.3 4.3 0 0 1-1.93.07 4.28 4.28 0 0 0 3.99 2.97A8.6 8.6 0 0 1 2 19.54a12.14 12.14 0 0 0 6.56 1.92c7.87 0 12.18-6.52 12.18-12.17l-.01-.55A8.7 8.7 0 0 0 22.46 6Z"/></svg>
          </a>
          <a href="#" class="p-2 rounded-full bg-white hover:bg-amber-500/20 text-gray-600 hover:text-amber-500 transition">
            <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5"><path d="M12 2.04c-5.5 0-9.96 4.46-9.96 9.96 0 4.41 3.6 8.07 8.32 8.9v-6.29H7.9v-2.61h2.46V9.81c0-2.43 1.45-3.76 3.66-3.76 1.06 0 2.17.19 2.17.19v2.38h-1.22c-1.2 0-1.57.75-1.57 1.52v1.83h2.67l-.43 2.61h-2.24v6.29c4.72-.83 8.32-4.49 8.32-8.9 0-5.5-4.46-9.96-9.96-9.96Z"/></svg>
          </a>
        </div>
      </div>
      <div class="lg:col-span-2">
        <form id="contact-form" novalidate class="p-6 rounded-xl bg-white border border-gray-200 space-y-4 shadow">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label for="name" class="block text-sm font-medium text-gray-600">Nombre</label>
              <input id="name" name="name" type="text" required minlength="2" class="mt-1 w-full rounded-lg bg-white border border-gray-200 px-4 py-3 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-amber-600" placeholder="Tu nombre" aria-describedby="name-error" />
              <p id="name-error" class="mt-1 text-xs text-amber-500 hidden">Ingresa tu nombre.</p>
            </div>
            <div>
              <label for="email" class="block text-sm font-medium text-gray-600">Correo</label>
              <input id="email" name="email" type="email" required class="mt-1 w-full rounded-lg bg-white border border-gray-200 px-4 py-3 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-amber-600" placeholder="tu@correo.com" aria-describedby="email-error" />
              <p id="email-error" class="mt-1 text-xs text-amber-500 hidden">Ingresa un correo válido.</p>
            </div>
            <div>
              <label for="phone" class="block text-sm font-medium text-gray-600">Teléfono</label>
              <input id="phone" name="phone" type="tel" pattern="[0-9\s\-()+]{7,}" class="mt-1 w-full rounded-lg bg-white border border-gray-200 px-4 py-3 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-amber-600" placeholder="Ej. +57 300 000 0000" aria-describedby="phone-error" />
              <p id="phone-error" class="mt-1 text-xs text-amber-500 hidden">Ingresa un teléfono válido.</p>
            </div>
            <div>
              <label for="subject" class="block text-sm font-medium text-gray-600">Motivo</label>
              <select id="subject" name="subject" required class="mt-1 w-full rounded-lg bg-white border border-gray-200 px-4 py-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-amber-600" aria-describedby="subject-error">
                <option value="" disabled selected hidden>Selecciona una opción</option>
                <option>Información</option>
                <option>Apoyo</option>
                <option>Voluntariado</option>
                <option>Donación</option>
                <option>Otro</option>
              </select>
              <p id="subject-error" class="mt-1 text-xs text-amber-500 hidden">Selecciona un motivo.</p>
            </div>
          </div>
          <div>
            <label for="message" class="block text-sm font-medium text-gray-600">Mensaje</label>
            <textarea id="message" name="message" rows="6" required minlength="10" class="mt-1 w-full rounded-lg bg-white border border-gray-200 px-4 py-3 text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-amber-600" placeholder="Cuéntanos cómo podemos ayudar" aria-describedby="message-error"></textarea>
            <p id="message-error" class="mt-1 text-xs text-amber-500 hidden">Escribe al menos 10 caracteres.</p>
          </div>
          <div class="flex items-center gap-3">
            <input id="consent" name="consent" type="checkbox" required class="size-4 rounded bg-white border border-gray-200" />
            <label for="consent" class="text-sm text-gray-600">Acepto ser contactado por Fundación Yonari.</label>
            <p id="consent-error" class="ml-3 text-xs text-amber-500 hidden">Debes aceptar para enviar.</p>
          </div>
          <input type="text" name="website" class="hidden" tabindex="-1" autocomplete="off" />
          <div class="mt-4 flex flex-col gap-3 md:flex-row md:items-center md:justify-between">
            <button type="submit" aria-label="Enviar formulario" class="inline-flex items-center px-6 py-3 text-sm font-semibold text-white bg-amber-600 rounded-lg hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-amber-600 focus:ring-offset-2">Enviar</button>
            <span id="form-status" class="text-sm text-gray-600" aria-live="polite"></span>
          </div>
          <div id="form-success" class="hidden mt-4 rounded-lg border border-emerald-500 bg-emerald-50 text-emerald-700 p-3 flex items-center gap-2" role="alert" aria-live="assertive">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" class="w-5 h-5"><path d="M9 12l2 2 4-4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><circle cx="12" cy="12" r="9" stroke-width="2"></circle></svg>
            <span>Tu mensaje fue enviado correctamente.</span>
          </div>
        </form>
      </div>
    </div>
  </section>
</main>

<script>
const form=document.getElementById('contact-form');
const statusEl=document.getElementById('form-status');
const successEl=document.getElementById('form-success');
function show(e){e.classList.remove('hidden')}
function hide(e){e.classList.add('hidden')}
function invalid(i,e){i.classList.add('ring-2','ring-amber-500');show(e)}
function valid(i,e){i.classList.remove('ring-2','ring-amber-500');hide(e)}
if(form){
form.addEventListener('submit',function(ev){
ev.preventDefault();
const name=document.getElementById('name');
const email=document.getElementById('email');
const phone=document.getElementById('phone');
const subject=document.getElementById('subject');
const message=document.getElementById('message');
const consent=document.getElementById('consent');
const errs={name:document.getElementById('name-error'),email:document.getElementById('email-error'),phone:document.getElementById('phone-error'),subject:document.getElementById('subject-error'),message:document.getElementById('message-error'),consent:document.getElementById('consent-error')};
let ok=true;
if(!name.value||name.value.trim().length<2){ok=false;invalid(name,errs.name)}else{valid(name,errs.name)}
const emailRe=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;
if(!emailRe.test(email.value)){ok=false;invalid(email,errs.email)}else{valid(email,errs.email)}
if(phone.value&& !/[0-9\s\-()+]{7,}/.test(phone.value)){ok=false;invalid(phone,errs.phone)}else{valid(phone,errs.phone)}
if(!subject.value){ok=false;invalid(subject,errs.subject)}else{valid(subject,errs.subject)}
if(!message.value||message.value.trim().length<10){ok=false;invalid(message,errs.message)}else{valid(message,errs.message)}
if(!consent.checked){ok=false;show(errs.consent)}else{hide(errs.consent)}
if(!ok){
  successEl&&successEl.classList.add('hidden');
  statusEl.textContent='Por favor corrige los campos resaltados.';
  return
}
statusEl.textContent='';
if(successEl){
  successEl.classList.remove('hidden');
  successEl.scrollIntoView({behavior:'smooth',block:'center'});
  setTimeout(()=>successEl.classList.add('hidden'),6000);
}
form.reset();
});
}

// Alternar estilo del select Motivo: oscuro con letras blancas en reposo, claro al abrir
const subjectEl=document.getElementById('subject');
function ensureReadable(){
  subjectEl.classList.remove('bg-white/5','text-gray-100');
  subjectEl.classList.add('bg-white','text-gray-900');
}
if(subjectEl){
  ensureReadable();
  subjectEl.addEventListener('focus',ensureReadable);
  subjectEl.addEventListener('mousedown',ensureReadable);
  subjectEl.addEventListener('blur',ensureReadable);
  subjectEl.addEventListener('change',ensureReadable);
}
</script>

<?php include '../inc/footer.php'; ?>
