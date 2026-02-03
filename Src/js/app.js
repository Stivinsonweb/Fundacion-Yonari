// Initialize AOS (Animate On Scroll)
AOS.init({
    duration: 1000,
    once: true,
    offset: 100
});

// ==================== MOBILE MENU ====================
const mobileMenuBtn = document.getElementById('mobile-menu-btn');
const mobileMenu = document.getElementById('mobile-menu');

mobileMenuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
    const icon = mobileMenuBtn.querySelector('i');
    icon.classList.toggle('fa-bars');
    icon.classList.toggle('fa-times');
});

// Close mobile menu when clicking on a link
const mobileLinks = mobileMenu.querySelectorAll('a');
mobileLinks.forEach(link => {
    link.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
        const icon = mobileMenuBtn.querySelector('i');
        icon.classList.remove('fa-times');
        icon.classList.add('fa-bars');
    });
});

// ==================== NAVBAR SCROLL EFFECT ====================
const navbar = document.getElementById('navbar');
let lastScroll = 0;

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;
    
    // Add shadow on scroll
    if (currentScroll > 100) {
        navbar.classList.add('shadow-lg', 'shadow-amber-500/10');
    } else {
        navbar.classList.remove('shadow-lg', 'shadow-amber-500/10');
    }
    
    lastScroll = currentScroll;
});

// ==================== SMOOTH SCROLL FOR NAVIGATION ====================
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            const offsetTop = target.offsetTop - 80; // Adjust for fixed header
            window.scrollTo({
                top: offsetTop,
                behavior: 'smooth'
            });
        }
    });
});

// ==================== ACTIVE NAVIGATION HIGHLIGHT ====================
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('.nav-link');

function highlightNavigation() {
    let current = '';
    
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        if (pageYOffset >= (sectionTop - 150)) {
            current = section.getAttribute('id');
        }
    });
    
    navLinks.forEach(link => {
        link.classList.remove('text-amber-500');
        if (link.getAttribute('href') === `#${current}`) {
            link.classList.add('text-amber-500');
        }
    });
}

window.addEventListener('scroll', highlightNavigation);

// ==================== COUNTER ANIMATION ====================
const counters = document.querySelectorAll('.counter');
let counterAnimated = false;

function animateCounters() {
    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-target'));
        const duration = 2000; // 2 seconds
        const increment = target / (duration / 16); // 60fps
        let current = 0;
        
        const updateCounter = () => {
            current += increment;
            if (current < target) {
                counter.textContent = Math.ceil(current);
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target;
            }
        };
        
        updateCounter();
    });
    counterAnimated = true;
}

// Trigger counter animation when section is in view
const counterSection = document.querySelector('#inicio');
const observerOptions = {
    threshold: 0.5
};

const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting && !counterAnimated) {
            animateCounters();
        }
    });
}, observerOptions);

if (counterSection) {
    counterObserver.observe(counterSection);
}

// ==================== TESTIMONIALS CAROUSEL ====================
const testimonials = [
    {
        text: '"La Fundación Yonari transformó nuestro barrio. Su compromiso con la comunidad es ejemplar y los resultados hablan por sí solos."',
        author: 'María González - Lideresa comunitaria'
    },
    {
        text: '"Gracias a sus talleres y acompañamiento, hoy tengo nuevas oportunidades. El equipo es profesional y muy humano."',
        author: 'Juan Pérez - Participante del programa'
    },
    {
        text: '"El apoyo jurídico que recibimos fue fundamental para nuestra familia. Nos sentimos respaldados en todo momento."',
        author: 'Ana Rodríguez - Madre de familia'
    }
];

let currentTestimonial = 0;
const testimonialText = document.getElementById('testimonial-text');
const testimonialAuthor = document.getElementById('testimonial-author');
const testimonialDots = document.querySelectorAll('.testimonial-dot');

function updateTestimonial(index) {
    // Fade out
    testimonialText.style.opacity = '0';
    testimonialAuthor.style.opacity = '0';
    
    setTimeout(() => {
        testimonialText.textContent = testimonials[index].text;
        testimonialAuthor.textContent = testimonials[index].author;
        
        // Update dots
        testimonialDots.forEach((dot, i) => {
            if (i === index) {
                dot.classList.remove('bg-gray-600');
                dot.classList.add('bg-amber-500');
            } else {
                dot.classList.remove('bg-amber-500');
                dot.classList.add('bg-gray-600');
            }
        });
        
        // Fade in
        testimonialText.style.opacity = '1';
        testimonialAuthor.style.opacity = '1';
    }, 300);
}

// Initialize first testimonial
testimonialText.style.transition = 'opacity 0.3s';
testimonialAuthor.style.transition = 'opacity 0.3s';
updateTestimonial(0);

// Auto-rotate testimonials
setInterval(() => {
    currentTestimonial = (currentTestimonial + 1) % testimonials.length;
    updateTestimonial(currentTestimonial);
}, 5000);

// Manual testimonial navigation
testimonialDots.forEach(dot => {
    dot.addEventListener('click', () => {
        const index = parseInt(dot.getAttribute('data-index'));
        currentTestimonial = index;
        updateTestimonial(index);
    });
});

const contactForm = document.getElementById('contact-form');
contactForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const name = contactForm.querySelector('#contact-name');
    const email = contactForm.querySelector('#contact-email');
    const subject = contactForm.querySelector('#contact-subject');
    const message = contactForm.querySelector('#contact-message');
    const feedback = document.getElementById('contact-feedback');
    let valid = true;
    [name, email, subject, message].forEach(el => el.classList.remove('border-red-500'));
    if (!name.value || name.value.trim().length < 3) { name.classList.add('border-red-500'); valid = false; }
    const emailOk = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value);
    if (!emailOk) { email.classList.add('border-red-500'); valid = false; }
    if (!subject.value || subject.value.trim().length < 3) { subject.classList.add('border-red-500'); valid = false; }
    if (!message.value || message.value.trim().length < 10) { message.classList.add('border-red-500'); valid = false; }
    const submitBtn = contactForm.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    if (!valid) { if (feedback) feedback.textContent = 'Por favor corrige los campos marcados.'; return; }
    if (feedback) feedback.textContent = 'Enviando...';
    submitBtn.disabled = true;
    submitBtn.classList.add('opacity-75');
    setTimeout(() => {
        contactForm.reset();
        submitBtn.disabled = false;
        submitBtn.classList.remove('opacity-75');
        submitBtn.innerHTML = '<i class="fas fa-check mr-2"></i> ¡Mensaje enviado!';
        submitBtn.classList.add('bg-green-500');
        submitBtn.classList.remove('from-amber-500', 'to-amber-600');
        setTimeout(() => {
            submitBtn.innerHTML = originalText;
            submitBtn.classList.remove('bg-green-500');
            submitBtn.classList.add('from-amber-500', 'to-amber-600');
            if (feedback) feedback.textContent = '';
        }, 2000);
    }, 800);
});

// ==================== VISITOR COUNTER ====================
const visitorCountElement = document.getElementById('visitor-count');

// Check if visitor count exists in localStorage
let visitorCount = localStorage.getItem('fundacion-yonari-visitors');

if (!visitorCount) {
    // Initialize with a random starting number between 5000-10000
    visitorCount = Math.floor(Math.random() * 5000) + 5000;
} else {
    visitorCount = parseInt(visitorCount);
}

// Increment visitor count
visitorCount++;

// Save to localStorage
localStorage.setItem('fundacion-yonari-visitors', visitorCount);

// Animate the counter
function animateVisitorCounter(target) {
    let current = 0;
    const increment = Math.ceil(target / 50);
    
    const updateVisitor = () => {
        current += increment;
        if (current < target) {
            visitorCountElement.textContent = current.toLocaleString('es-CO');
            requestAnimationFrame(updateVisitor);
        } else {
            visitorCountElement.textContent = target.toLocaleString('es-CO');
        }
    };
    
    updateVisitor();
}

// Display visitor count with animation
animateVisitorCounter(visitorCount);

// ==================== LAZY LOADING IMAGES ====================
if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                if (img.dataset.src) {
                    img.src = img.dataset.src;
                    img.removeAttribute('data-src');
                    observer.unobserve(img);
                }
            }
        });
    });
    
    document.querySelectorAll('img[data-src]').forEach(img => {
        imageObserver.observe(img);
    });
}

// ==================== SCROLL TO TOP BUTTON ====================
// Create scroll to top button
const scrollTopBtn = document.createElement('button');
scrollTopBtn.innerHTML = '<i class="fas fa-arrow-up"></i>';
scrollTopBtn.className = 'fixed bottom-44 right-6 z-50 bg-amber-500 text-white p-4 rounded-full shadow-lg hover:bg-amber-600 transform hover:scale-110 transition-all duration-300 hidden';
scrollTopBtn.setAttribute('aria-label', 'Volver arriba');
document.body.appendChild(scrollTopBtn);

// Show/hide scroll to top button
window.addEventListener('scroll', () => {
    if (window.pageYOffset > 300) {
        scrollTopBtn.classList.remove('hidden');
    } else {
        scrollTopBtn.classList.add('hidden');
    }
});

// Scroll to top functionality
scrollTopBtn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

// ==================== PERFORMANCE OPTIMIZATION ====================
// Debounce scroll events for better performance
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Apply debounce to scroll-heavy functions
const debouncedHighlight = debounce(highlightNavigation, 100);
window.addEventListener('scroll', debouncedHighlight);

// ==================== ACCESSIBILITY IMPROVEMENTS ====================
// Add keyboard navigation support
document.addEventListener('keydown', (e) => {
    // ESC key closes mobile menu
    if (e.key === 'Escape' && !mobileMenu.classList.contains('hidden')) {
        mobileMenu.classList.add('hidden');
        const icon = mobileMenuBtn.querySelector('i');
        icon.classList.remove('fa-times');
        icon.classList.add('fa-bars');
    }
});

// Add focus trap for mobile menu
const focusableElements = mobileMenu.querySelectorAll('a, button');
const firstFocusable = focusableElements[0];
const lastFocusable = focusableElements[focusableElements.length - 1];

mobileMenu.addEventListener('keydown', (e) => {
    if (e.key === 'Tab') {
        if (e.shiftKey) {
            if (document.activeElement === firstFocusable) {
                lastFocusable.focus();
                e.preventDefault();
            }
        } else {
            if (document.activeElement === lastFocusable) {
                firstFocusable.focus();
                e.preventDefault();
            }
        }
    }
});

// ==================== CONSOLE MESSAGE ====================
console.log('%c Fundación Yonari ', 'background: #f59e0b; color: #fff; font-size: 20px; font-weight: bold; padding: 10px;');
console.log('%c Protege tus derechos - www.fundacionyonari.org ', 'color: #f59e0b; font-size: 14px;');

// ==================== PREVENT CONTEXT MENU (Optional) ====================
// Uncomment if you want to prevent right-click
// document.addEventListener('contextmenu', (e) => e.preventDefault());

// ==================== SERVICE WORKER FOR PWA (Optional) ====================
// Uncomment to enable Progressive Web App features
/*
if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('/sw.js')
            .then(reg => console.log('Service Worker registered'))
            .catch(err => console.log('Service Worker registration failed'));
    });
}
*/

console.log('✅ Fundación Yonari - Website loaded successfully!');

const tabContacto = document.getElementById('tab-contacto');
const tabDonaciones = document.getElementById('tab-donaciones');
const panelContacto = document.getElementById('panel-contacto');
const panelDonaciones = document.getElementById('panel-donaciones');
if (tabContacto && tabDonaciones && panelContacto && panelDonaciones) {
  const activate = (target) => {
    const isContacto = target === 'contacto';
    panelContacto.classList.toggle('hidden', !isContacto);
    panelDonaciones.classList.toggle('hidden', isContacto);
    tabContacto.setAttribute('aria-selected', String(isContacto));
    tabDonaciones.setAttribute('aria-selected', String(!isContacto));
    if (isContacto) {
      tabContacto.classList.add('bg-amber-600','text-white');
      tabDonaciones.classList.remove('bg-amber-600','text-white');
      tabDonaciones.classList.add('text-gray-300');
    } else {
      tabDonaciones.classList.add('bg-amber-600','text-white');
      tabContacto.classList.remove('bg-amber-600','text-white');
      tabContacto.classList.add('text-gray-300');
    }
  };
  tabContacto.addEventListener('click', () => activate('contacto'));
  tabDonaciones.addEventListener('click', () => activate('donaciones'));
}

/* merged in the primary contact form handler above */

const donationForm = document.getElementById('donation-form');
if (donationForm) {
  const amountInput = donationForm.querySelector('#donation-amount');
  const methodSelect = donationForm.querySelector('#donation-method');
  const bankDetails = document.getElementById('bank-details');
  const nequiDetails = document.getElementById('nequi-details');
  const feedback = document.getElementById('donation-feedback');
  donationForm.querySelectorAll('.preset-amount').forEach(btn => {
    btn.addEventListener('click', () => {
      const val = btn.getAttribute('data-amount');
      if (amountInput) amountInput.value = val;
    });
  });
  if (methodSelect && bankDetails && nequiDetails) {
    const updateMethod = () => {
      const isNequi = methodSelect.value === 'nequi';
      bankDetails.classList.toggle('hidden', isNequi);
      nequiDetails.classList.toggle('hidden', !isNequi);
    };
    methodSelect.addEventListener('change', updateMethod);
    updateMethod();
  }
  donationForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const donorName = donationForm.querySelector('#donor-name');
    const donorEmail = donationForm.querySelector('#donor-email');
    const consent = donationForm.querySelector('#donation-consent');
    let valid = true;
    [donorName, donorEmail, amountInput].forEach(el => el.classList.remove('border-red-500'));
    if (!donorName.value || donorName.value.trim().length < 3) { donorName.classList.add('border-red-500'); valid = false; }
    const emailOk = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(donorEmail.value);
    if (!emailOk) { donorEmail.classList.add('border-red-500'); valid = false; }
    if (!amountInput.value || Number(amountInput.value) < 1000) { amountInput.classList.add('border-red-500'); valid = false; }
    if (!(consent && consent.checked)) { valid = false; }
    const btn = donationForm.querySelector('button[type="submit"]');
    if (!valid) { if (feedback) feedback.textContent = 'Por favor completa los campos requeridos.'; return; }
    if (btn) { btn.disabled = true; btn.classList.add('opacity-75'); }
    if (feedback) { feedback.textContent = 'Procesando...'; }
    setTimeout(() => {
      donationForm.reset();
      if (btn) { btn.disabled = false; btn.classList.remove('opacity-75'); }
      if (feedback) { feedback.textContent = 'Tu donación ha sido registrada. Sigue las instrucciones del método seleccionado.'; }
    }, 1500);
  });
}
