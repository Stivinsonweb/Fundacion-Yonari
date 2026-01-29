const q=(s,sc=document)=>sc.querySelector(s);
const qa=(s,sc=document)=>Array.from(sc.querySelectorAll(s));

function initRouter(){
  const nav=(path,replace)=>{
    fetch(path,{headers:{'X-Requested-With':'fetch'}}).then(r=>r.text()).then(html=>{
      const doc=new DOMParser().parseFromString(html,'text/html');
      const nm=doc.querySelector('main');
      const tm=doc.querySelector('title');
      const cm=document.querySelector('main');
      if(!nm||!cm) return;
      transitionOut(cm,300).then(()=>{
        cm.replaceWith(nm);
        if(tm) document.title=tm.textContent;
        if(!replace) history.pushState({},'',path);
        initAll();
        transitionIn(nm,300);
      });
    });
  };
  document.addEventListener('click',e=>{
    const a=e.target.closest('a[href]');
    if(!a) return;
    const url=new URL(a.getAttribute('href'),location.origin);
    const same=url.origin===location.origin;
    const internal=url.pathname.endsWith('.php')||url.pathname==='/'||url.pathname==='';
    if(!same||!internal) return;
    e.preventDefault();
    nav(url.pathname,false);
  });
  window.addEventListener('popstate',()=>nav(location.pathname,true));
}

function transitionOut(el,d){
  return new Promise(r=>{el.classList.add('fade-out');setTimeout(()=>{el.classList.remove('fade-out');r();},d)});
}
function transitionIn(el,d){
  el.classList.add('fade-in');setTimeout(()=>el.classList.remove('fade-in'),d);
}

function initCarousel(){
  const sc=q('#srv-scroller');
  const prev=q('#srv-prev');
  const next=q('#srv-next');
  if(!sc||!prev||!next) return;
  const step=320;
  prev.addEventListener('click',()=>sc.scrollBy({left:-step,behavior:'smooth'}));
  next.addEventListener('click',()=>sc.scrollBy({left:step,behavior:'smooth'}));
}

function initCounters(){
  const els=qa('[data-counter]');
  if(!els.length) return;
  const io=new IntersectionObserver(es=>{
    es.forEach(e=>{
      if(e.isIntersecting){
        const el=e.target;const t=parseInt(el.getAttribute('target')||'0',10);
        let cur=0;const step=Math.max(1,Math.ceil(t/60));
        const id=setInterval(()=>{cur+=step;if(cur>=t){cur=t;clearInterval(id)}el.textContent=String(cur)},16);
        io.unobserve(el);
      }
    });
  },{threshold:0.2});
  els.forEach(el=>io.observe(el));
}

function initReveal(){
  const els=qa('[data-animate]');
  if(!els.length) return;
  const io=new IntersectionObserver(es=>{
    es.forEach(e=>{if(e.isIntersecting){e.target.classList.add('reveal');io.unobserve(e.target)}});
  },{threshold:0.15});
  els.forEach(el=>{el.classList.remove('reveal');io.observe(el)});
}

function initModal(){
  qa('[data-modal-open]').forEach(btn=>{
    const sel=btn.getAttribute('data-modal-open');
    const modal=q(sel);
    if(!modal) return;
    const close=modal.querySelector('[data-modal-close]');
    btn.addEventListener('click',()=>{modal.classList.add('open');modal.setAttribute('aria-hidden','false');q('body').classList.add('overflow-hidden')});
    if(close) close.addEventListener('click',()=>{modal.classList.remove('open');modal.setAttribute('aria-hidden','true');q('body').classList.remove('overflow-hidden')});
    modal.addEventListener('click',e=>{if(e.target===modal){modal.classList.remove('open');modal.setAttribute('aria-hidden','true');q('body').classList.remove('overflow-hidden')}});
    document.addEventListener('keydown',e=>{if(e.key==='Escape'&&modal.classList.contains('open')){modal.classList.remove('open');modal.setAttribute('aria-hidden','true');q('body').classList.remove('overflow-hidden')}});
  });
}

function initAccordion(){
  qa('[data-accordion]').forEach(acc=>{
    qa('[data-acc-item]',acc).forEach(item=>{
      const head=item.querySelector('[data-acc-head]');
      const body=item.querySelector('[data-acc-body]');
      if(!head||!body) return;
      head.addEventListener('click',()=>{
        const open=item.getAttribute('aria-expanded')==='true';
        item.setAttribute('aria-expanded',String(!open));
        const h=open?0:body.scrollHeight;
        body.style.height=h+'px';
      });
      item.setAttribute('aria-expanded','false');
      body.style.height='0px';
    });
  });
}

function validateInput(el){
  const msgEl=el.parentElement.querySelector('[id$="-error"]');
  let ok=true;
  if(el.hasAttribute('required')&&String(el.value).trim().length===0) ok=false;
  if(el.type==='email'){ok=/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(el.value)}
  if(el.name==='phone'){ok=/^[0-9\s\-()+]{7,}$/.test(el.value)}
  if(el.tagName==='TEXTAREA'){ok=String(el.value).trim().length>=10}
  if(msgEl){msgEl.classList.toggle('hidden',ok)}
  el.classList.toggle('ring-2',!ok);el.classList.toggle('ring-amber-600',!ok);
  return ok;
}

function initForm(){
  const f=q('#contact-form');
  if(!f) return;
  const status=q('#form-status');
  qa('input,select,textarea',f).forEach(el=>{
    el.addEventListener('input',()=>validateInput(el));
    el.addEventListener('blur',()=>validateInput(el));
  });
  f.addEventListener('submit',e=>{
    e.preventDefault();
    const ok=qa('input,select,textarea',f).map(validateInput).every(Boolean);
    if(!ok){status.textContent='Revisa los campos en rojo';return;}
    status.textContent='Enviando...';
    fetch(f.getAttribute('action')||location.pathname,{method:'POST',body:new FormData(f)}).then(()=>{status.textContent='Gracias por contactarnos'}).catch(()=>{status.textContent='Error al enviar'});
  });
  if(status) status.setAttribute('aria-live','polite');
}

function initScroll(){
  const par=q('[data-parallax]');
  if(!par) return;
  const onScroll=()=>{
    const y=window.scrollY*0.1;
    par.style.transform=`translateY(${y}px)`;
  };
  window.addEventListener('scroll',onScroll,{passive:true});
}

function initAll(){
  initCarousel();
  initCounters();
  initReveal();
  initModal();
  initAccordion();
  initForm();
  initScroll();
}

document.addEventListener('DOMContentLoaded',()=>{
  initRouter();
  initAll();
});
