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

    // Navbar scroll effect
    const nav = document.getElementById('main-nav');
    if (nav) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 80) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });
        // Initial check
        if (window.scrollY > 80) nav.classList.add('scrolled');
    }

    // Mobile nav toggle
    const navToggle = document.getElementById('nav-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    if (navToggle && mobileMenu) {
        navToggle.addEventListener('click', () => {
            navToggle.classList.toggle('open');
            mobileMenu.classList.toggle('open');
            document.body.style.overflow = mobileMenu.classList.contains('open') ? 'hidden' : '';
        });
    }

    // GSAP Timeline Orchestration
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);
        
        // Page specific GSAP logic is handled within the view files via @push('scripts')


        // Terminal Footer Animations
        const footerStatement = document.getElementById('footer-statement');
        if (footerStatement) {
            // Split text nodes manually for stagger animation without breaking HTML
            const walker = document.createTreeWalker(footerStatement, NodeFilter.SHOW_TEXT, null, false);
            let textNodes = [];
            let node;
            while (node = walker.nextNode()) {
                if (node.nodeValue.trim() !== '') textNodes.push(node);
            }
            
            textNodes.forEach(textNode => {
                const words = textNode.nodeValue.trim().split(/\s+/);
                const fragment = document.createDocumentFragment();
                words.forEach((word, idx) => {
                    const span = document.createElement('span');
                    span.className = 'word';
                    span.textContent = word;
                    fragment.appendChild(span);
                    if (idx < words.length - 1) {
                        fragment.appendChild(document.createTextNode(' '));
                    }
                });
                textNode.parentNode.replaceChild(fragment, textNode);
            });
            
            gsap.to('#footer-statement .word, #footer-statement .statement-dot', {
                scrollTrigger: { trigger: '.footer-terminal', start: 'top 80%' },
                y: 0, opacity: 1, duration: 0.8, stagger: 0.15, ease: 'power3.out'
            });

            gsap.to('.footer-divider.line-draw-center', {
                scrollTrigger: { trigger: '.footer-divider-container', start: 'top 85%' },
                width: '100%', duration: 0.8, ease: 'power2.inOut'
            });

            gsap.to('.terminal-col', {
                scrollTrigger: { trigger: '#terminal-grid', start: 'top 80%' },
                y: 0, opacity: 1, duration: 0.6, stagger: 0.2, ease: 'power2.out'
            });

            gsap.to('#terminal-bottom', {
                scrollTrigger: { trigger: '#terminal-bottom', start: 'top 95%' },
                opacity: 1, duration: 0.8, ease: 'power2.out'
            });
        }
    }
});
