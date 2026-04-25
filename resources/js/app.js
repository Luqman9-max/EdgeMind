import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

/* ============================================
   EDGE MIND — JavaScript
   Scroll Reveals + Interactions
   ============================================ */

// IntersectionObserver for basic reveals (slam animations, etc.)
document.addEventListener('DOMContentLoaded', () => {
    // Basic Reveal
    const reveals = document.querySelectorAll('.reveal');
    if (reveals.length > 0) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
        reveals.forEach(el => observer.observe(el));
    }

    // Slam Animations
    const slams = document.querySelectorAll('.slam-in, .slam-left, .slam-right, .slam-down');
    if (slams.length > 0) {
        const slamObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('slammed');
                    slamObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15, rootMargin: '0px 0px -20px 0px' });
        slams.forEach(el => slamObserver.observe(el));
    }

    // Line draw animations
    const lines = document.querySelectorAll('.line-draw, .border-draw');
    if (lines.length > 0) {
        const lineObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('drawn');
                    lineObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });
        lines.forEach(el => lineObserver.observe(el));
    }

    // Counting Animation
    const counters = document.querySelectorAll('.count-up');
    if (counters.length > 0) {
        const countObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = entry.target;
                    const endVal = parseFloat(target.getAttribute('data-count'));
                    const duration = 2000;
                    const start = performance.now();
                    const isDecimal = endVal % 1 !== 0;
                    
                    target.innerHTML = '0';
                    
                    const updateCounter = (time) => {
                        const elapsed = time - start;
                        const progress = Math.min(elapsed / duration, 1);
                        // Ease out cubic
                        const easeProgress = 1 - Math.pow(1 - progress, 3);
                        const current = easeProgress * endVal;
                        
                        target.innerHTML = isDecimal ? current.toFixed(1) : Math.floor(current);
                        
                        if (progress < 1) {
                            requestAnimationFrame(updateCounter);
                        } else {
                            target.innerHTML = isDecimal ? endVal.toFixed(1) : endVal;
                            
                            // Check for infinite transform
                            if (target.hasAttribute('data-infinite')) {
                                setTimeout(() => {
                                    target.parentElement.classList.add('screen-flash', 'flashed');
                                    target.innerHTML = "Zero.";
                                }, 500);
                            }
                        }
                    };
                    requestAnimationFrame(updateCounter);
                    countObserver.unobserve(target);
                }
            });
        }, { threshold: 0.5 });
        counters.forEach(el => countObserver.observe(el));
    }

    // Staggered Word Reveal
    document.querySelectorAll('.word-stagger').forEach(container => {
        const text = container.textContent.trim();
        const words = text.split(/\s+/);
        container.innerHTML = '';
        words.forEach((word, index) => {
            const span = document.createElement('span');
            span.classList.add('word');
            span.style.animationDelay = `${index * 0.05}s`;
            span.textContent = word;
            container.appendChild(span);
            container.appendChild(document.createTextNode(' '));
        });
        container.classList.add('word-reveal');
        
        const staggerObserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if(entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    staggerObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.2 });
        staggerObserver.observe(container);
    });

    // Mobile nav toggle
    const navToggle = document.querySelector('.nav-toggle');
    const navLinks = document.querySelector('.nav-links');
    if (navToggle && navLinks) {
        navToggle.addEventListener('click', () => {
            navLinks.classList.toggle('open');
        });
    }

    // Navbar scroll effect
    const nav = document.querySelector('.nav-edge');
    if (nav) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                nav.style.borderBottomColor = 'var(--em-accent)';
            } else {
                nav.style.borderBottomColor = 'var(--em-steel)';
            }
        });
    }

    // GSAP Timeline Orchestration
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);
        
        // Hero Section Elements
        gsap.to('.hero-title-main', {
            scrollTrigger: { trigger: '.hero-title-main', start: 'top 80%' },
            y: 0, opacity: 1, duration: 1, ease: 'power4.out'
        });
        
        // The Uncomfortable Truth
        gsap.to('.truth-text', {
            scrollTrigger: { trigger: '#truth', start: 'top 60%' },
            y: 0, opacity: 1, duration: 1, stagger: 0.2, ease: 'power3.out'
        });

        // The Cost of Staying Comfortable
        gsap.to('.cost-card', {
            scrollTrigger: { trigger: '.cost-grid', start: 'top 70%' },
            y: 0, opacity: 1, duration: 0.8, stagger: 0.2, ease: 'back.out(1.7)'
        });

        // The Arsenal Showcase
        const arsenalHeader = document.querySelector('.arsenal-header');
        if(arsenalHeader) {
            gsap.to('.arsenal-header', {
                scrollTrigger: { trigger: '#arsenal', start: 'top 70%' },
                y: 0, opacity: 1, duration: 1, ease: 'power3.out'
            });
            gsap.to('.tilt-card', {
                scrollTrigger: { trigger: '.arsenal-grid', start: 'top 75%' },
                y: 0, opacity: 1, duration: 0.8, stagger: 0.1, ease: 'power2.out'
            });
        }

        // Field Reports (Signal Intercept)
        const reportsHeader = document.querySelector('.reports-header');
        if(reportsHeader) {
            gsap.to('.reports-header', {
                scrollTrigger: { trigger: '.reports-header', start: 'top 80%' },
                y: 0, opacity: 1, duration: 1, ease: 'power3.out'
            });
            gsap.to('.dossier-card', {
                scrollTrigger: { trigger: '.reports-grid', start: 'top 75%' },
                y: 0, opacity: 1, duration: 0.8, stagger: 0.15, ease: 'power2.out'
            });
        }

        // Pressure Test Warnings
        gsap.to('.warning-item', {
            scrollTrigger: { trigger: '.warning-list', start: 'top 70%' },
            x: 0, opacity: 1, duration: 0.8, stagger: 0.2, ease: 'power3.out'
        });

        // Final CTA Elements
        gsap.to('.cta-element', {
            scrollTrigger: { trigger: '#final-cta', start: 'top 60%' },
            y: 0, opacity: 1, duration: 1, stagger: 0.2, ease: 'power4.out'
        });

        // The Clarity Protocol - Phase Transition (Pinning)
        const protocolPinContainer = document.querySelector('#protocol-pin-container');
        if (protocolPinContainer) {
            const tl = gsap.timeline({
                scrollTrigger: {
                    trigger: protocolPinContainer,
                    start: 'top top',
                    end: '+=2000', // 2000px of scrolling
                    scrub: 1,
                    pin: true,
                    anticipatePin: 1
                }
            });

            // Stage 1: Fracture -> The Forge
            tl.to('.pt-chaos', { opacity: 0, duration: 1, x: -50 })
              .to('.chaos-node', { scale: 0, opacity: 0, duration: 1, stagger: 0.1 }, '<')
              .to('.forge-node', { scale: 1, opacity: 1, duration: 1.5, ease: 'elastic.out(1, 0.3)' })
              .to('.pt-forge', { opacity: 1, y: 0, duration: 1 }, '-=0.5');

            // Stage 2: The Forge -> Clarity
            tl.to('.pt-forge', { opacity: 0, duration: 1, y: 50 }, '+=0.5')
              .to('.forge-node', { scale: 0, opacity: 0, duration: 1 }, '<')
              .to('.clarity-node', { scale: 1, opacity: 1, duration: 1.5, ease: 'power3.out' })
              .to('.pt-clarity', { opacity: 1, x: 0, duration: 1 }, '-=0.5');
        }
    }
});
