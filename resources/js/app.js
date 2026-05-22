import './bootstrap';
import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect';
import AOS from 'aos';
import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay, EffectCoverflow } from 'swiper/modules';

// AOS Init
AOS.init({
    duration: 800,
    easing: 'ease-out-cubic',
    once: true,
    offset: 80,
});

// Alpine
window.Alpine = Alpine;
Alpine.plugin(intersect);

// ─── Network Canvas Animation ────────────────────────────
function initNetworkCanvas() {
    const canvas = document.getElementById('networkCanvas');
    if (!canvas) return;

    const ctx    = canvas.getContext('2d');
    let W        = canvas.width  = canvas.offsetWidth;
    let H        = canvas.height = canvas.offsetHeight;

    const NODES  = 60;
    const SPEED  = 0.4;
    const MAX_D  = 150;

    const nodes  = Array.from({ length: NODES }, () => ({
        x:  Math.random() * W,
        y:  Math.random() * H,
        vx: (Math.random() - 0.5) * SPEED,
        vy: (Math.random() - 0.5) * SPEED,
        r:  Math.random() * 2 + 1,
    }));

    function draw() {
        ctx.clearRect(0, 0, W, H);

        // lines
        for (let i = 0; i < nodes.length; i++) {
            for (let j = i + 1; j < nodes.length; j++) {
                const dx   = nodes[i].x - nodes[j].x;
                const dy   = nodes[i].y - nodes[j].y;
                const dist = Math.sqrt(dx * dx + dy * dy);
                if (dist < MAX_D) {
                    ctx.beginPath();
                    ctx.strokeStyle = `rgba(0,212,255,${0.15 * (1 - dist / MAX_D)})`;
                    ctx.lineWidth   = 0.5;
                    ctx.moveTo(nodes[i].x, nodes[i].y);
                    ctx.lineTo(nodes[j].x, nodes[j].y);
                    ctx.stroke();
                }
            }
        }

        // dots
        nodes.forEach(n => {
            ctx.beginPath();
            ctx.arc(n.x, n.y, n.r, 0, Math.PI * 2);
            ctx.fillStyle = 'rgba(0,212,255,0.6)';
            ctx.fill();

            // move
            n.x += n.vx;
            n.y += n.vy;
            if (n.x < 0 || n.x > W) n.vx *= -1;
            if (n.y < 0 || n.y > H) n.vy *= -1;
        });

        requestAnimationFrame(draw);
    }

    draw();

    window.addEventListener('resize', () => {
        W = canvas.width  = canvas.offsetWidth;
        H = canvas.height = canvas.offsetHeight;
    });
}

// ─── Typing Effect ────────────────────────────────────────
function initTypingEffect() {
    const el = document.getElementById('typing-text');
    if (!el) return;

    const texts = [
        'Full Stack Web Developer',
        'Engineering On Site – Telkom',
        'Laravel & PHP Engineer',
        'Network Monitoring Specialist',
        'Backend API Developer',
    ];

    let tIdx = 0, cIdx = 0, deleting = false;

    function type() {
        const current = texts[tIdx];
        el.textContent = deleting
            ? current.substring(0, cIdx--)
            : current.substring(0, cIdx++);

        if (!deleting && cIdx === current.length + 1) {
            deleting = true;
            setTimeout(type, 2000);
        } else if (deleting && cIdx === 0) {
            deleting = false;
            tIdx = (tIdx + 1) % texts.length;
            setTimeout(type, 300);
        } else {
            setTimeout(type, deleting ? 50 : 80);
        }
    }
    type();
}

// ─── Counter Animation ────────────────────────────────────
function initCounters() {
    const counters = document.querySelectorAll('[data-counter]');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            const el     = entry.target;
            const target = parseInt(el.dataset.counter);
            const suffix = el.dataset.suffix || '';
            let current  = 0;
            const step   = Math.ceil(target / 60);
            const timer  = setInterval(() => {
                current = Math.min(current + step, target);
                el.textContent = current + suffix;
                if (current >= target) clearInterval(timer);
            }, 30);
            observer.unobserve(el);
        });
    }, { threshold: 0.5 });

    counters.forEach(el => observer.observe(el));
}

// ─── Skill Progress Bars ─────────────────────────────────
function initSkillBars() {
    const bars     = document.querySelectorAll('[data-skill]');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            const bar = entry.target;
            bar.style.width = bar.dataset.skill + '%';
            observer.unobserve(bar);
        });
    }, { threshold: 0.3 });

    bars.forEach(bar => observer.observe(bar));
}

// ─── Project Filter ───────────────────────────────────────
function initProjectFilter() {
    const tabs  = document.querySelectorAll('.filter-tab');
    const cards = document.querySelectorAll('[data-category]');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');
            const filter = tab.dataset.filter;

            cards.forEach(card => {
                const show = filter === 'all' || card.dataset.category === filter;
                card.style.transition = 'all 0.4s ease';
                if (show) {
                    card.style.display = '';
                    setTimeout(() => { card.style.opacity = '1'; card.style.transform = 'scale(1)'; }, 10);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.95)';
                    setTimeout(() => { card.style.display = 'none'; }, 400);
                }
            });
        });
    });
}

// ─── Testimonials Swiper ──────────────────────────────────
function initTestimonialSwiper() {
    if (!document.querySelector('.testimonial-swiper')) return;
    new Swiper('.testimonial-swiper', {
        modules: [Navigation, Pagination, Autoplay, EffectCoverflow],
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 20,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640:  { slidesPerView: 1 },
            768:  { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
        },
        loop: true,
    });
}

// ─── Sticky Navbar ────────────────────────────────────────
function initNavbar() {
    const nav = document.getElementById('navbar');
    if (!nav) return;

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            nav.classList.add('navbar-scrolled');
        } else {
            nav.classList.remove('navbar-scrolled');
        }
    });
}

// ─── Toast Helper ────────────────────────────────────────
window.showToast = function(msg, type = 'success') {
    const toast = document.createElement('div');
    toast.className = `toast toast-${type}`;
    toast.innerHTML = `
        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            ${type === 'success'
                ? '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>'
                : '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>'}
        </svg>
        <span>${msg}</span>
    `;
    document.body.appendChild(toast);
    setTimeout(() => { toast.style.opacity = '0'; setTimeout(() => toast.remove(), 500); }, 4000);
};

// ─── Smooth Scroll for anchor links ──────────────────────
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', e => {
            e.preventDefault();
            const target = document.querySelector(anchor.getAttribute('href'));
            if (target) {
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });
}

// ─── Boot ────────────────────────────────────────────────
document.addEventListener('DOMContentLoaded', () => {
    initNetworkCanvas();
    initTypingEffect();
    initCounters();
    initSkillBars();
    initProjectFilter();
    initTestimonialSwiper();
    initNavbar();
    initSmoothScroll();

    // Add navbar-scrolled style
    const style = document.createElement('style');
    style.textContent = `
        .navbar-scrolled {
            background: rgba(2,6,23,0.95) !important;
            border-bottom: 1px solid rgba(59,130,246,0.15) !important;
            backdrop-filter: blur(20px) !important;
        }
    `;
    document.head.appendChild(style);
});

Alpine.start();
