// =====================================================
// FUNDACIÓN YONARI - JavaScript Principal
// Desarrollado por: Stivinson Correa & William Renteria
// =====================================================

// Initialize AOS (Animate On Scroll)
if (typeof AOS !== 'undefined') {
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });
}

// ==================== MOBILE MENU ====================
const mobileMenuBtn = document.getElementById('mobile-menu-btn');
const mobileMenu = document.getElementById('mobile-menu');

if (mobileMenuBtn && mobileMenu) {
    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        const icon = mobileMenuBtn.querySelector('i');
        if (icon) {
            icon.classList.toggle('fa-bars');
            icon.classList.toggle('fa-times');
        }
    });

    // Close mobile menu when clicking on a link
    const mobileLinks = mobileMenu.querySelectorAll('a');
    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
            const icon = mobileMenuBtn.querySelector('i');
            if (icon) {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    });
}

// ==================== NAVBAR SCROLL EFFECT ====================
const navbar = document.getElementById('navbar');
let lastScroll = 0;

if (navbar) {
    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll > 100) {
            navbar.classList.add('shadow-lg', 'shadow-amber-500/10');
        } else {
            navbar.classList.remove('shadow-lg', 'shadow-amber-500/10');
        }
        
        lastScroll = currentScroll;
    });
}

// ==================== SMOOTH SCROLL ====================
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            const offsetTop = target.offsetTop - 80;
            window.scrollTo({
                top: offsetTop,
                behavior: 'smooth'
            });
        }
    });
});

// ==================== ACTIVE NAVIGATION ====================
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('.nav-link');

function highlightNavigation() {
    let current = '';
    
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
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

if (sections.length > 0) {
    window.addEventListener('scroll', highlightNavigation);
}

// ==================== COUNTER ANIMATION ====================
const counters = document.querySelectorAll('.counter');
let counterAnimated = false;

function animateCounters() {
    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-target'));
        const duration = 2000;
        const increment = target / (duration / 16);
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

const counterSection = document.querySelector('#inicio');
if (counterSection && counters.length > 0) {
    const observerOptions = { threshold: 0.5 };
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !counterAnimated) {
                animateCounters();
            }
        });
    }, observerOptions);
    counterObserver.observe(counterSection);
}

// ==================== TESTIMONIALS CAROUSEL ====================
const testimonials = [
    {
        text: '"La Fundación Yonari transformó nuestro barrio. Su compromiso con la comunidad es ejemplar."',
        author: 'María González - Lideresa comunitaria'
    },
    {
        text: '"Gracias a sus talleres, hoy tengo nuevas oportunidades. El equipo es profesional y humano."',
        author: 'Juan Pérez - Participante del programa'
    },
    {
        text: '"El apoyo jurídico fue fundamental para nuestra familia. Nos sentimos respaldados."',
        author: 'Ana Rodríguez - Madre de familia'
    }
];

const testimonialText = document.getElementById('testimonial-text');
const testimonialAuthor = document.getElementById('testimonial-author');
const testimonialDots = document.querySelectorAll('.testimonial-dot');

if (testimonialText && testimonialAuthor) {
    let currentTestimonial = 0;
    
    testimonialText.style.transition = 'opacity 0.3s';
    testimonialAuthor.style.transition = 'opacity 0.3s';
    
    function updateTestimonial(index) {
        testimonialText.style.opacity = '0';
        testimonialAuthor.style.opacity = '0';
        
        setTimeout(() => {
            testimonialText.textContent = testimonials[index].text;
            testimonialAuthor.textContent = testimonials[index].author;
            
            testimonialDots.forEach((dot, i) => {
                dot.classList.toggle('bg-amber-500', i === index);
                dot.classList.toggle('bg-gray-600', i !== index);
            });
            
            testimonialText.style.opacity = '1';
            testimonialAuthor.style.opacity = '1';
        }, 300);
    }
    
    updateTestimonial(0);
    
    setInterval(() => {
        currentTestimonial = (currentTestimonial + 1) % testimonials.length;
        updateTestimonial(currentTestimonial);
    }, 5000);
    
    testimonialDots.forEach(dot => {
        dot.addEventListener('click', () => {
            const index = parseInt(dot.getAttribute('data-index'));
            currentTestimonial = index;
            updateTestimonial(index);
        });
    });
}

// ==================== TABS SISTEMA (CONTACTO/DONACIÓN) ====================
const tabContacto = document.getElementById('tab-contacto');
const tabDonaciones = document.getElementById('tab-donaciones');
const panelContacto = document.getElementById('panel-contacto');
const panelDonaciones = document.getElementById('panel-donaciones');

if (tabContacto && tabDonaciones && panelContacto && panelDonaciones) {
    panelContacto.style.transition = 'opacity 0.3s ease-in-out, transform 0.3s ease-in-out';
    panelDonaciones.style.transition = 'opacity 0.3s ease-in-out, transform 0.3s ease-in-out';
    
    const activate = (target) => {
        const isContacto = target === 'contacto';
        const currentPanel = isContacto ? panelDonaciones : panelContacto;
        const nextPanel = isContacto ? panelContacto : panelDonaciones;
        
        currentPanel.style.opacity = '0';
        currentPanel.style.transform = 'translateX(-20px)';
        
        setTimeout(() => {
            currentPanel.classList.add('hidden');
            nextPanel.classList.remove('hidden');
            
            setTimeout(() => {
                nextPanel.style.opacity = '1';
                nextPanel.style.transform = 'translateX(0)';
            }, 50);
        }, 300);
        
        tabContacto.setAttribute('aria-selected', String(isContacto));
        tabDonaciones.setAttribute('aria-selected', String(!isContacto));
        
        if (isContacto) {
            tabContacto.classList.add('bg-amber-600', 'text-white');
            tabContacto.classList.remove('text-gray-300');
            tabDonaciones.classList.remove('bg-amber-600', 'text-white');
            tabDonaciones.classList.add('text-gray-300');
        } else {
            tabDonaciones.classList.add('bg-amber-600', 'text-white');
            tabDonaciones.classList.remove('text-gray-300');
            tabContacto.classList.remove('bg-amber-600', 'text-white');
            tabContacto.classList.add('text-gray-300');
        }
    };
    
    tabContacto.addEventListener('click', () => activate('contacto'));
    tabDonaciones.addEventListener('click', () => activate('donaciones'));
}

// ==================== FORMULARIO DE CONTACTO ====================
const contactForm = document.getElementById('contact-form');
if (contactForm) {
    contactForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        
        const name = contactForm.querySelector('#contact-name');
        const email = contactForm.querySelector('#contact-email');
        const subject = contactForm.querySelector('#contact-subject');
        const message = contactForm.querySelector('#contact-message');
        const feedback = document.getElementById('contact-feedback');
        const submitBtn = contactForm.querySelector('button[type="submit"]');
        
        let valid = true;
        [name, email, subject, message].forEach(el => el.classList.remove('border-red-500'));
        
        if (!name.value || name.value.trim().length < 3) {
            name.classList.add('border-red-500');
            valid = false;
        }
        
        const emailOk = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value);
        if (!emailOk) {
            email.classList.add('border-red-500');
            valid = false;
        }
        
        if (!subject.value || subject.value.trim().length < 3) {
            subject.classList.add('border-red-500');
            valid = false;
        }
        
        if (!message.value || message.value.trim().length < 10) {
            message.classList.add('border-red-500');
            valid = false;
        }
        
        if (!valid) {
            if (feedback) {
                feedback.textContent = 'Por favor completa todos los campos correctamente.';
                feedback.className = 'text-sm text-red-500 mt-2';
            }
            return;
        }
        
        submitBtn.disabled = true;
        submitBtn.classList.add('opacity-75');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Enviando...';
        
        const formData = new FormData(contactForm);
        
        try {
            const response = await fetch('Email/send-contact.php', {
                method: 'POST',
                body: formData
            });
            
            const result = await response.json();
            
            if (result.success) {
                if (feedback) {
                    feedback.textContent = '✅ ' + result.message;
                    feedback.className = 'text-sm text-green-500 mt-2 font-semibold';
                }
                contactForm.reset();
                
                submitBtn.innerHTML = '<i class="fas fa-check mr-2"></i> ¡Enviado!';
                submitBtn.classList.remove('from-amber-500', 'to-amber-600', 'bg-gradient-to-r');
                submitBtn.classList.add('bg-green-500');
                
                setTimeout(() => {
                    submitBtn.innerHTML = originalText;
                    submitBtn.classList.remove('bg-green-500');
                    submitBtn.classList.add('from-amber-500', 'to-amber-600', 'bg-gradient-to-r');
                    submitBtn.disabled = false;
                    submitBtn.classList.remove('opacity-75');
                    if (feedback) feedback.textContent = '';
                }, 5000);
            } else {
                throw new Error(result.message);
            }
        } catch (error) {
            if (feedback) {
                feedback.textContent = '❌ ' + (error.message || 'Error al enviar. Intenta de nuevo.');
                feedback.className = 'text-sm text-red-500 mt-2 font-semibold';
            }
            
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
            submitBtn.classList.remove('opacity-75');
        }
    });
}

// ==================== FORMULARIO DE DONACIÓN ====================
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
        bankDetails.style.transition = 'opacity 0.3s ease-in-out';
        nequiDetails.style.transition = 'opacity 0.3s ease-in-out';
        
        const updateMethod = () => {
            const isNequi = methodSelect.value === 'nequi';
            
            if (isNequi) {
                bankDetails.style.opacity = '0';
                setTimeout(() => {
                    bankDetails.classList.add('hidden');
                    nequiDetails.classList.remove('hidden');
                    setTimeout(() => { nequiDetails.style.opacity = '1'; }, 50);
                }, 300);
            } else {
                nequiDetails.style.opacity = '0';
                setTimeout(() => {
                    nequiDetails.classList.add('hidden');
                    bankDetails.classList.remove('hidden');
                    setTimeout(() => { bankDetails.style.opacity = '1'; }, 50);
                }, 300);
            }
        };
        
        methodSelect.addEventListener('change', updateMethod);
        updateMethod();
    }
    
    donationForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        
        const donorName = donationForm.querySelector('#donor-name');
        const donorEmail = donationForm.querySelector('#donor-email');
        const consent = donationForm.querySelector('#donation-consent');
        const submitBtn = donationForm.querySelector('button[type="submit"]');
        
        let valid = true;
        [donorName, donorEmail, amountInput].forEach(el => el.classList.remove('border-red-500'));
        
        if (!donorName.value || donorName.value.trim().length < 3) {
            donorName.classList.add('border-red-500');
            valid = false;
        }
        
        const emailOk = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(donorEmail.value);
        if (!emailOk) {
            donorEmail.classList.add('border-red-500');
            valid = false;
        }
        
        if (!amountInput.value || Number(amountInput.value) < 1000) {
            amountInput.classList.add('border-red-500');
            valid = false;
        }
        
        if (!(consent && consent.checked)) {
            valid = false;
        }
        
        if (!valid) {
            if (feedback) {
                feedback.textContent = 'Por favor completa los campos requeridos y acepta los términos.';
                feedback.className = 'text-sm text-red-500 mt-2';
            }
            return;
        }
        
        submitBtn.disabled = true;
        submitBtn.classList.add('opacity-75');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Procesando...';
        
        const formData = new FormData(donationForm);
        
        try {
            const response = await fetch('Email/send-donation.php', {
                method: 'POST',
                body: formData
            });
            
            const result = await response.json();
            
            if (result.success) {
                if (feedback) {
                    feedback.textContent = '✅ ' + result.message;
                    feedback.className = 'text-sm text-green-500 mt-2 font-semibold';
                }
                donationForm.reset();
                
                submitBtn.innerHTML = '<i class="fas fa-check mr-2"></i> ¡Gracias!';
                submitBtn.classList.remove('from-amber-500', 'to-amber-600', 'bg-gradient-to-r');
                submitBtn.classList.add('bg-green-500');
                
                setTimeout(() => {
                    submitBtn.innerHTML = originalText;
                    submitBtn.classList.remove('bg-green-500');
                    submitBtn.classList.add('from-amber-500', 'to-amber-600', 'bg-gradient-to-r');
                    submitBtn.disabled = false;
                    submitBtn.classList.remove('opacity-75');
                    if (feedback) feedback.textContent = '';
                }, 5000);
            } else {
                throw new Error(result.message);
            }
        } catch (error) {
            if (feedback) {
                feedback.textContent = '❌ ' + (error.message || 'Error al procesar. Intenta de nuevo.');
                feedback.className = 'text-sm text-red-500 mt-2 font-semibold';
            }
            
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
            submitBtn.classList.remove('opacity-75');
        }
    });
}

// ==================== CONTADOR DE VISITAS CON BASE DE DATOS ====================
const visitorCountElement = document.getElementById('visitor-count');

if (visitorCountElement) {
    async function loadVisitorCount() {
        try {
            const response = await fetch('BD/get-visits.php', {
                method: 'GET',
                headers: { 'Content-Type': 'application/json' }
            });
            
            const data = await response.json();
            
            if (data.success) {
                animateVisitorCounter(data.visits);
                
                console.log('📊 Estadísticas Fundación Yonari:', {
                    'Total visitas': data.visits.toLocaleString('es-CO'),
                    'Nueva visita': data.is_new_visit ? 'Sí' : 'No',
                    'IP': data.visitor_ip,
                    'Visitantes únicos': data.stats.visitantes_unicos.toLocaleString('es-CO'),
                    'Días activos': data.stats.dias_activos,
                    'Visitas hoy': data.stats.visitas_hoy
                });
                
                if (data.is_new_visit) {
                    console.log('🎉 ¡Gracias por visitar Fundación Yonari!');
                }
            } else {
                console.warn('⚠️ Error al cargar contador, usando fallback');
                loadLocalStorageCounter();
            }
        } catch (error) {
            console.error('❌ Error al conectar con BD:', error);
            loadLocalStorageCounter();
        }
    }
    
    function loadLocalStorageCounter() {
        let count = localStorage.getItem('fundacion-yonari-visitors');
        if (!count) {
            count = Math.floor(Math.random() * 5000) + 5000;
        } else {
            count = parseInt(count);
        }
        count++;
        localStorage.setItem('fundacion-yonari-visitors', count);
        animateVisitorCounter(count);
        console.log('📊 Contador localStorage:', count.toLocaleString('es-CO'));
    }
    
    function animateVisitorCounter(target) {
        let current = 0;
        const increment = Math.ceil(target / 50);
        const duration = 2000;
        const stepTime = duration / 50;
        
        const updateVisitor = () => {
            current += increment;
            if (current < target) {
                visitorCountElement.textContent = current.toLocaleString('es-CO');
                setTimeout(updateVisitor, stepTime);
            } else {
                visitorCountElement.textContent = target.toLocaleString('es-CO');
            }
        };
        
        updateVisitor();
    }
    
    loadVisitorCount();
}

// ==================== SCROLL TO TOP BUTTON ====================
const scrollTopBtn = document.createElement('button');
scrollTopBtn.innerHTML = '<i class="fas fa-arrow-up"></i>';
scrollTopBtn.className = 'fixed bottom-36 right-6 z-50 w-12 h-12 flex items-center justify-center bg-amber-500 text-white rounded-full shadow-lg hover:bg-amber-600 transform hover:scale-110 transition-all duration-300 hidden';
scrollTopBtn.setAttribute('aria-label', 'Volver arriba');
document.body.appendChild(scrollTopBtn);

window.addEventListener('scroll', () => {
    if (window.pageYOffset > 300) {
        scrollTopBtn.classList.remove('hidden');
    } else {
        scrollTopBtn.classList.add('hidden');
    }
});

scrollTopBtn.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

// ==================== CONSOLE MESSAGE ====================
console.log('%c Fundación Yonari ', 'background: #f59e0b; color: #fff; font-size: 20px; font-weight: bold; padding: 10px;');
console.log('%c Protege tus derechos - www.fundacionyonari.org ', 'color: #f59e0b; font-size: 14px;');
console.log('✅ Website cargado correctamente - Desarrollado por Stivinson Correa & William Renteria');
