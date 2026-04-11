import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

/* ============================================
   EDGE MIND — JavaScript
   Scroll Reveals + Interactions
   ============================================ */

// IntersectionObserver for scroll reveal animations
document.addEventListener('DOMContentLoaded', () => {
    const reveals = document.querySelectorAll('.reveal');

    if (reveals.length > 0) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -40px 0px'
        });

        reveals.forEach(el => observer.observe(el));
    }

    // Line draw animations
    const lines = document.querySelectorAll('.line-draw');
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
});
