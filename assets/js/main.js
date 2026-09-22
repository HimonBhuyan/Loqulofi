/**
 * LIQULOFI PRIVATE LIMITED - CAPITAL BEYOND LIMITS
 * Slice-Style Kinetic Typography, SPA Navigation & Interactive Animation Engine
 */

document.addEventListener('DOMContentLoaded', function () {
    // =========================================================================
    // 0. CINEMATIC ROYAL INTRO PRELOADER CONTROLLER (Runs Once Per Session)
    // =========================================================================
    const preloader = document.getElementById('luxury-preloader');
    if (preloader) {
        function dismissPreloader() {
            if (!preloader.classList.contains('fade-out')) {
                preloader.classList.add('fade-out');
                document.body.style.overflow = '';
                setTimeout(() => {
                    preloader.style.display = 'none';
                }, 850);
            }
        }

        // Show preloader only on the first visit of the session
        if (sessionStorage.getItem('liqulofi_preloader_seen')) {
            preloader.style.display = 'none';
            document.body.style.overflow = '';
        } else {
            sessionStorage.setItem('liqulofi_preloader_seen', 'true');
            document.body.style.overflow = 'hidden';

            // Luxurious logo reveal sequence duration (~3.6s)
            const preloaderTimer = setTimeout(dismissPreloader, 3600);

            // Allow fast skip on click
            preloader.addEventListener('click', () => {
                clearTimeout(preloaderTimer);
                dismissPreloader();
            });

            // Allow fast skip on keypress (Esc, Space, Enter)
            window.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' || e.key === ' ' || e.key === 'Enter') {
                    if (!preloader.classList.contains('fade-out')) {
                        clearTimeout(preloaderTimer);
                        dismissPreloader();
                    }
                }
            }, { once: true });
        }
    }

    // =========================================================================
    // 0.1 LOGO HOVER & CLICK ROTATE & SCALE DYNAMICS
    // =========================================================================
    function initLogoDynamics() {
        const crestWrappers = document.querySelectorAll('.hero-crest-wrapper, .brand-crest');
        crestWrappers.forEach(wrap => {
            if (wrap.dataset.bound) return;
            wrap.dataset.bound = 'true';
            wrap.addEventListener('click', function () {
                const img = wrap.querySelector('.crest-official-img');
                if (img) {
                    img.style.animation = 'none';
                    img.offsetHeight; // trigger reflow
                    img.style.animation = 'logoRotateYScaleCycle 1.7s cubic-bezier(0.4, 0, 0.2, 1) forwards';
                }
            });
        });
    }
    initLogoDynamics();

    // =========================================================================
    // 0.2 LUXURY DARK / LIGHT THEME TOGGLE SYSTEM
    // =========================================================================
    function initThemeSystem() {
        const themeToggleBtns = document.querySelectorAll('#theme-toggle-btn, #floating-theme-toggle, #drawer-theme-toggle');
        const root = document.documentElement;

        function applyTheme(theme, animate = true) {
            if (animate) {
                root.classList.add('theme-transitioning');
                document.body.classList.add('theme-transitioning');
                setTimeout(() => {
                    root.classList.remove('theme-transitioning');
                    document.body.classList.remove('theme-transitioning');
                }, 600);
            }
            root.setAttribute('data-theme', theme);
            root.style.backgroundColor = theme === 'dark' ? '#050B14' : '#F3ECE1';
            try {
                localStorage.setItem('liqulofi_theme', theme);
            } catch (e) {}

            themeToggleBtns.forEach(btn => {
                btn.setAttribute('aria-pressed', theme === 'dark');
                btn.classList.toggle('active-dark', theme === 'dark');
                const statusTxt = btn.querySelector('.theme-status-text');
                if (statusTxt) {
                    statusTxt.textContent = theme === 'dark' ? 'Dark Mode' : 'Light Mode';
                }
            });
        }

        const initialTheme = root.getAttribute('data-theme') || (localStorage.getItem('liqulofi_theme') || 'light');
        applyTheme(initialTheme, false);

        themeToggleBtns.forEach(btn => {
            if (btn.dataset.bound) return;
            btn.dataset.bound = 'true';
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                const currentTheme = root.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
                applyTheme(currentTheme, true);
            });
        });
    }
    initThemeSystem();

    // =========================================================================
    // 0.3 LIVE INTERACTIVE GOLDEN CONSTELLATION & CAPITAL FLOW CANVAS
    // =========================================================================
    function initLiveAmbientCanvas() {
        const canvas = document.getElementById('live-ambient-canvas');
        if (!canvas || canvas.dataset.initialized) return;
        canvas.dataset.initialized = 'true';

        const ctx = canvas.getContext('2d');
        if (!ctx) return;

        let width = 0;
        let height = 0;
        let particles = [];
        let mouse = { x: null, y: null, radius: 170 };
        let animationFrameId = null;

        function resize() {
            width = canvas.width = window.innerWidth;
            height = canvas.height = window.innerHeight;
            initParticles();
        }

        function getThemeColors() {
            const isDark = document.documentElement.getAttribute('data-theme') === 'dark';
            if (isDark) {
                return {
                    particle: 'rgba(245, 199, 90, ',      // Luminous gold
                    particleAlt: 'rgba(255, 240, 179, ',   // Radiant champagne
                    line: 'rgba(229, 184, 66, ',           // Luxury gold filament
                    lineAlt: 'rgba(96, 165, 250, ',        // Electric sapphire shimmer
                    sparkleGold: 'rgba(245, 199, 90, ',    // Bright gold sparkle
                    sparkleGlow: 'rgba(255, 240, 179, '    // Radiant diamond sparkle
                };
            } else {
                return {
                    particle: 'rgba(201, 151, 38, ',       // Warm bronze gold
                    particleAlt: 'rgba(180, 120, 20, ',    // Deep amber gold
                    line: 'rgba(201, 151, 38, ',           // Warm gold filament
                    lineAlt: 'rgba(217, 119, 6, ',         // Sunlight amber
                    sparkleGold: 'rgba(212, 175, 55, ',    // Royal 24K gold sparkle
                    sparkleGlow: 'rgba(254, 243, 199, '    // Champagne sparkle glow
                };
            }
        }

        // --- 1. Golden Constellation Particle ---
        class Particle {
            constructor() {
                this.x = Math.random() * (width || window.innerWidth);
                this.y = Math.random() * (height || window.innerHeight);
                this.vx = (Math.random() - 0.5) * 0.45;
                this.vy = (Math.random() - 0.5) * 0.45;
                this.radius = Math.random() * 2.5 + 1.0;
                this.baseRadius = this.radius;
                this.baseAlpha = Math.random() * 0.55 + 0.35;
                this.alpha = this.baseAlpha;
                this.pulseSpeed = Math.random() * 0.025 + 0.01;
                this.pulseOffset = Math.random() * Math.PI * 2;
                this.isSpecial = Math.random() > 0.75;
            }

            update(time) {
                this.x += this.vx;
                this.y += this.vy;

                if (this.x < -15) this.x = width + 15;
                if (this.x > width + 15) this.x = -15;
                if (this.y < -15) this.y = height + 15;
                if (this.y > height + 15) this.y = -15;

                this.alpha = this.baseAlpha + Math.sin(time * this.pulseSpeed + this.pulseOffset) * 0.25;
                this.alpha = Math.max(0.15, Math.min(0.95, this.alpha));

                if (mouse.x !== null && mouse.y !== null) {
                    const dx = mouse.x - this.x;
                    const dy = mouse.y - this.y;
                    const distance = Math.sqrt(dx * dx + dy * dy);

                    if (distance < mouse.radius) {
                        const force = (1 - distance / mouse.radius) * 0.6;
                        this.x -= (dx / distance) * force * 2.2;
                        this.y -= (dy / distance) * force * 2.2;
                        this.radius = this.baseRadius * (1 + force * 1.2);
                    } else {
                        if (this.radius > this.baseRadius) {
                            this.radius -= 0.04;
                        }
                    }
                }
            }

            draw(colors) {
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);

                const colPrefix = this.isSpecial ? colors.particleAlt : colors.particle;
                ctx.fillStyle = colPrefix + this.alpha + ')';
                ctx.fill();

                if (this.isSpecial && this.radius > 1.2) {
                    ctx.beginPath();
                    ctx.arc(this.x, this.y, this.radius * 3.2, 0, Math.PI * 2);
                    ctx.fillStyle = colPrefix + (this.alpha * 0.22) + ')';
                    ctx.fill();
                }
            }
        }

        // --- 2. Golden 4-Point Diamond Sparkle Star (Twinkle Effect) ---
        class SparkleStar {
            constructor(spawnNearMouse = false, spawnX = 0, spawnY = 0) {
                this.reset(spawnNearMouse, spawnX, spawnY);
            }

            reset(spawnNearMouse = false, spawnX = 0, spawnY = 0) {
                if (spawnNearMouse) {
                    this.x = spawnX + (Math.random() - 0.5) * 45;
                    this.y = spawnY + (Math.random() - 0.5) * 45;
                    this.vx = (Math.random() - 0.5) * 1.2;
                    this.vy = (Math.random() - 0.5) * 1.2 - 0.4;
                    this.isCursorSparkle = true;
                    this.life = 1.0;
                    this.decay = Math.random() * 0.03 + 0.018;
                    this.size = Math.random() * 7 + 4.5;
                } else {
                    this.x = Math.random() * (width || window.innerWidth);
                    this.y = Math.random() * (height || window.innerHeight);
                    this.vx = (Math.random() - 0.5) * 0.28;
                    this.vy = (Math.random() - 0.5) * 0.28;
                    this.isCursorSparkle = false;
                    this.life = 1.0;
                    this.decay = 0;
                    this.size = Math.random() * 8 + 5;
                }
                this.rotation = Math.random() * Math.PI;
                this.rotSpeed = (Math.random() - 0.5) * 0.024;
                this.baseAlpha = Math.random() * 0.45 + 0.4;
                this.alpha = this.baseAlpha;
                this.twinkleSpeed = Math.random() * 0.035 + 0.015;
                this.twinkleOffset = Math.random() * Math.PI * 2;
            }

            update(time) {
                this.x += this.vx;
                this.y += this.vy;
                this.rotation += this.rotSpeed;

                if (this.isCursorSparkle) {
                    this.life -= this.decay;
                    this.alpha = Math.max(0, this.life * 0.95);
                } else {
                    if (this.x < -20) this.x = width + 20;
                    if (this.x > width + 20) this.x = -20;
                    if (this.y < -20) this.y = height + 20;
                    if (this.y > height + 20) this.y = -20;

                    const sine = Math.sin(time * this.twinkleSpeed + this.twinkleOffset);
                    this.alpha = this.baseAlpha + sine * 0.4;
                    this.alpha = Math.max(0.1, Math.min(1.0, this.alpha));
                }
            }

            draw(colors) {
                if (this.alpha <= 0.01) return;

                const cx = this.x;
                const cy = this.y;
                const outer = this.size * (0.65 + this.alpha * 0.45);
                const inner = outer * 0.22;

                ctx.save();
                ctx.translate(cx, cy);
                ctx.rotate(this.rotation);

                // Draw 4-point diamond star flare
                ctx.beginPath();
                for (let i = 0; i < 4; i++) {
                    const angle = (i * Math.PI) / 2;
                    ctx.lineTo(Math.cos(angle) * outer, Math.sin(angle) * outer);
                    const subAngle = angle + Math.PI / 4;
                    ctx.lineTo(Math.cos(subAngle) * inner, Math.sin(subAngle) * inner);
                }
                ctx.closePath();

                ctx.fillStyle = colors.sparkleGold + this.alpha + ')';
                ctx.shadowBlur = 10 * this.alpha;
                ctx.shadowColor = colors.sparkleGlow + '0.85)';
                ctx.fill();

                // Core brilliant diamond glint
                ctx.beginPath();
                ctx.arc(0, 0, inner * 0.85, 0, Math.PI * 2);
                ctx.fillStyle = 'rgba(255, 255, 255, ' + (this.alpha * 0.98) + ')';
                ctx.fill();

                ctx.restore();
            }
        }

        // --- 3. Luminous Floating Bokeh Orbs ---
        class BokehOrb {
            constructor() {
                this.reset();
            }
            reset() {
                this.x = Math.random() * (width || window.innerWidth);
                this.y = Math.random() * (height || window.innerHeight);
                this.vx = (Math.random() - 0.5) * 0.3;
                this.vy = -Math.random() * 0.35 - 0.12;
                this.radius = Math.random() * 32 + 14;
                this.baseAlpha = Math.random() * 0.22 + 0.10;
                this.pulseSpeed = Math.random() * 0.018 + 0.006;
                this.pulseOffset = Math.random() * Math.PI * 2;
                this.isGold = Math.random() > 0.45;
            }
            update(time) {
                this.x += this.vx;
                this.y += this.vy;
                if (this.y < -this.radius * 2) this.y = height + this.radius * 2;
                if (this.x < -this.radius * 2) this.x = width + this.radius * 2;
                if (this.x > width + this.radius * 2) this.x = -this.radius * 2;
                this.alpha = this.baseAlpha + Math.sin(time * this.pulseSpeed + this.pulseOffset) * 0.09;
                this.alpha = Math.max(0.04, Math.min(0.4, this.alpha));
            }
            draw(isDark) {
                const grad = ctx.createRadialGradient(this.x, this.y, 0, this.x, this.y, this.radius);
                if (this.isGold) {
                    grad.addColorStop(0, 'rgba(245, 199, 90, ' + this.alpha + ')');
                    grad.addColorStop(0.5, 'rgba(212, 175, 55, ' + (this.alpha * 0.45) + ')');
                    grad.addColorStop(1, 'rgba(212, 175, 55, 0)');
                } else {
                    if (isDark) {
                        grad.addColorStop(0, 'rgba(59, 130, 246, ' + (this.alpha * 1.3) + ')');
                        grad.addColorStop(0.5, 'rgba(30, 64, 175, ' + (this.alpha * 0.55) + ')');
                        grad.addColorStop(1, 'rgba(30, 64, 175, 0)');
                    } else {
                        grad.addColorStop(0, 'rgba(254, 215, 170, ' + this.alpha + ')');
                        grad.addColorStop(0.5, 'rgba(243, 236, 225, ' + (this.alpha * 0.35) + ')');
                        grad.addColorStop(1, 'rgba(243, 236, 225, 0)');
                    }
                }
                ctx.fillStyle = grad;
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
                ctx.fill();
            }
        }

        let sparkles = [];
        let cursorSparkles = [];
        let bokehOrbs = [];

        function initParticles() {
            const count = Math.min(75, Math.max(30, Math.floor((width * height) / 20000)));
            particles = [];
            for (let i = 0; i < count; i++) {
                particles.push(new Particle());
            }

            const sparkleCount = Math.min(45, Math.max(22, Math.floor((width * height) / 28000)));
            sparkles = [];
            for (let i = 0; i < sparkleCount; i++) {
                sparkles.push(new SparkleStar());
            }

            const bokehCount = Math.min(24, Math.max(12, Math.floor((width * height) / 55000)));
            bokehOrbs = [];
            for (let i = 0; i < bokehCount; i++) {
                bokehOrbs.push(new BokehOrb());
            }
        }

        function animate(timestamp) {
            ctx.clearRect(0, 0, width, height);

            const isDark = document.documentElement.getAttribute('data-theme') === 'dark';
            const colors = getThemeColors();
            const maxDistance = width < 768 ? 95 : 140;

            // --- 0. Dynamic Live Canvas Aurora Breathing Field ---
            const t = timestamp * 0.0006;
            const cx = width * 0.5 + Math.sin(t * 0.7) * (width * 0.15);
            const cy = height * 0.35 + Math.cos(t * 0.5) * (height * 0.1);
            const auraRadius = Math.min(width, height) * 0.45;
            const breatheGlow = ctx.createRadialGradient(cx, cy, 0, cx, cy, auraRadius);
            if (isDark) {
                breatheGlow.addColorStop(0, 'rgba(30, 64, 175, 0.12)');
                breatheGlow.addColorStop(0.5, 'rgba(14, 165, 233, 0.05)');
                breatheGlow.addColorStop(1, 'rgba(6, 15, 30, 0)');
            } else {
                breatheGlow.addColorStop(0, 'rgba(245, 199, 90, 0.08)');
                breatheGlow.addColorStop(0.5, 'rgba(254, 243, 199, 0.04)');
                breatheGlow.addColorStop(1, 'rgba(243, 236, 225, 0)');
            }
            ctx.fillStyle = breatheGlow;
            ctx.beginPath();
            ctx.arc(cx, cy, auraRadius, 0, Math.PI * 2);
            ctx.fill();

            // --- 0.1 Interactive Volumetric Cursor Glow Halo ---
            if (mouse.x !== null && mouse.y !== null) {
                const cursorGlow = ctx.createRadialGradient(mouse.x, mouse.y, 0, mouse.x, mouse.y, 180);
                if (isDark) {
                    cursorGlow.addColorStop(0, 'rgba(59, 130, 246, 0.18)');
                    cursorGlow.addColorStop(0.5, 'rgba(229, 184, 66, 0.06)');
                    cursorGlow.addColorStop(1, 'rgba(6, 15, 30, 0)');
                } else {
                    cursorGlow.addColorStop(0, 'rgba(212, 175, 55, 0.16)');
                    cursorGlow.addColorStop(0.5, 'rgba(254, 243, 199, 0.06)');
                    cursorGlow.addColorStop(1, 'rgba(243, 236, 225, 0)');
                }
                ctx.fillStyle = cursorGlow;
                ctx.beginPath();
                ctx.arc(mouse.x, mouse.y, 180, 0, Math.PI * 2);
                ctx.fill();
            }

            // --- 0.2 Floating Bokeh Ambient Orbs ---
            for (let i = 0; i < bokehOrbs.length; i++) {
                bokehOrbs[i].update(timestamp * 0.05);
                bokehOrbs[i].draw(isDark);
            }

            // --- 1. Interconnecting Constellation Filaments ---
            for (let i = 0; i < particles.length; i++) {
                for (let j = i + 1; j < particles.length; j++) {
                    const dx = particles[i].x - particles[j].x;
                    const dy = particles[i].y - particles[j].y;
                    const dist = Math.sqrt(dx * dx + dy * dy);

                    if (dist < maxDistance) {
                        const lineAlpha = (1 - dist / maxDistance) * 0.26;
                        ctx.beginPath();
                        ctx.moveTo(particles[i].x, particles[i].y);
                        ctx.lineTo(particles[j].x, particles[j].y);
                        ctx.strokeStyle = colors.line + lineAlpha + ')';
                        ctx.lineWidth = 0.95;
                        ctx.stroke();
                    }
                }
            }

            if (mouse.x !== null && mouse.y !== null) {
                for (let i = 0; i < particles.length; i++) {
                    const dx = mouse.x - particles[i].x;
                    const dy = mouse.y - particles[i].y;
                    const dist = Math.sqrt(dx * dx + dy * dy);

                    if (dist < mouse.radius) {
                        const mouseLineAlpha = (1 - dist / mouse.radius) * 0.45;
                        ctx.beginPath();
                        ctx.moveTo(particles[i].x, particles[i].y);
                        ctx.lineTo(mouse.x, mouse.y);
                        ctx.strokeStyle = colors.lineAlt + mouseLineAlpha + ')';
                        ctx.lineWidth = 1.25;
                        ctx.stroke();
                    }
                }
            }

            for (let i = 0; i < particles.length; i++) {
                particles[i].update(timestamp * 0.05);
                particles[i].draw(colors);
            }

            // Update and draw floating ambient sparkle stars
            for (let i = 0; i < sparkles.length; i++) {
                sparkles[i].update(timestamp * 0.05);
                sparkles[i].draw(colors);
            }

            // Update and draw interactive cursor sparkle trail
            for (let i = cursorSparkles.length - 1; i >= 0; i--) {
                cursorSparkles[i].update(timestamp * 0.05);
                cursorSparkles[i].draw(colors);
                if (cursorSparkles[i].life <= 0) {
                    cursorSparkles.splice(i, 1);
                }
            }

            animationFrameId = requestAnimationFrame(animate);
        }

        window.addEventListener('resize', resize, { passive: true });

        let lastSparkleTime = 0;
        window.addEventListener('mousemove', (e) => {
            mouse.x = e.clientX;
            mouse.y = e.clientY;

            const now = performance.now();
            if (now - lastSparkleTime > 60 && cursorSparkles.length < 35) {
                lastSparkleTime = now;
                cursorSparkles.push(new SparkleStar(true, e.clientX, e.clientY));
            }
        }, { passive: true });

        window.addEventListener('mouseleave', () => {
            mouse.x = null;
            mouse.y = null;
        });

        document.addEventListener('visibilitychange', () => {
            if (document.hidden) {
                if (animationFrameId) cancelAnimationFrame(animationFrameId);
            } else {
                animationFrameId = requestAnimationFrame(animate);
            }
        });

        resize();
        animationFrameId = requestAnimationFrame(animate);
    }
    initLiveAmbientCanvas();

    // =========================================================================
    // 1. TOP LUXURY SCROLL PROGRESS BAR
    // =========================================================================
    let progressBar = document.querySelector('.scroll-progress-bar');
    if (!progressBar) {
        progressBar = document.createElement('div');
        progressBar.className = 'scroll-progress-bar';
        document.body.appendChild(progressBar);
    }

    function updateScrollProgress() {
        const totalHeight = document.documentElement.scrollHeight - window.innerHeight;
        if (totalHeight > 0) {
            const progress = (window.scrollY / totalHeight) * 100;
            progressBar.style.width = Math.min(progress, 100) + '%';
        }
    }
    window.addEventListener('scroll', updateScrollProgress, { passive: true });
    updateScrollProgress();

    // =========================================================================
    // 2. FLOATING NAVBAR SCROLL STATE (DESKTOP & MOBILE)
    // =========================================================================
    const siteHeader = document.getElementById('main-header');
    function handleNavbarScroll() {
        if (siteHeader) {
            if (window.scrollY > 10) {
                siteHeader.classList.add('scrolled');
            } else {
                siteHeader.classList.remove('scrolled');
            }
        }
    }
    window.addEventListener('scroll', handleNavbarScroll, { passive: true });
    window.addEventListener('resize', handleNavbarScroll, { passive: true });
    window.addEventListener('touchmove', handleNavbarScroll, { passive: true });
    handleNavbarScroll();

    // =========================================================================
    // 3 & 4. SCROLL REVEAL OBSERVER FOR HEADINGS, STATS & CARDS
    // =========================================================================
    let revealObserver = null;

    function initScrollReveals() {
        const heroBrandTitle = document.querySelector('.hero-brand-title');
        if (heroBrandTitle) {
            heroBrandTitle.style.visibility = 'visible';
        }

        const revealElements = [];

        function registerReveal(selector, revealClass = 'reveal', isStaggered = false) {
            const nodes = document.querySelectorAll(selector);
            nodes.forEach((el, index) => {
                if (!el.classList.contains('reveal') && !el.classList.contains('reveal-scale') && !el.classList.contains('reveal-left') && !el.classList.contains('reveal-right')) {
                    el.classList.add(revealClass);
                    if (isStaggered) {
                        const delayIndex = (index % 5) + 1;
                        el.classList.add(`reveal-delay-${delayIndex}`);
                    }
                }
                revealElements.push(el);
            });
        }

        registerReveal('.section-header-ornate, .process-header, .bank-network-header, .page-hero-header, .gold-badge-banner', 'reveal');
        registerReveal('.hero-badge-card', 'reveal', true);
        registerReveal('.hero-cta-buttons', 'reveal-scale');
        registerReveal('.about-lead-block, .our-approach-card, .brochure-quote-banner', 'reveal');
        registerReveal('.pillar-card', 'reveal', true);
        registerReveal('.showcase-col:first-child', 'reveal-left');
        registerReveal('.showcase-col:last-child', 'reveal-right');
        registerReveal('.why-card', 'reveal', true);
        registerReveal('.service-full-card', 'reveal', true);
        registerReveal('.process-step-card', 'reveal-scale', true);
        registerReveal('.calc-card, .calculator-container', 'reveal');
        registerReveal('.bank-category-card', 'reveal', true);
        registerReveal('.strength-card', 'reveal', true);
        registerReveal('.director-card, .corp-detail-card, .contact-brochure-card', 'reveal', true);
        registerReveal('.cta-inner-box', 'reveal-scale');

        if ('IntersectionObserver' in window) {
            if (revealObserver) revealObserver.disconnect();

            revealObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('revealed');
                        const counters = entry.target.querySelectorAll('.counter-val');
                        counters.forEach(animateCounter);
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                root: null,
                rootMargin: '0px 0px -30px 0px',
                threshold: 0.08
            });

            revealElements.forEach(el => revealObserver.observe(el));
        } else {
            revealElements.forEach(el => el.classList.add('revealed'));
            document.querySelectorAll('.counter-val').forEach(animateCounter);
        }
    }

    // =========================================================================
    // 5. ROLLING COUNTER ODOMETER ANIMATION
    // =========================================================================
    function animateCounter(el) {
        if (el.dataset.animated) return;
        el.dataset.animated = 'true';

        const target = parseFloat(el.getAttribute('data-target')) || parseFloat(el.textContent) || 0;
        const duration = 1800;
        const startTime = performance.now();
        const startVal = 0;

        function updateCounter(currentTime) {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const easeProgress = progress === 1 ? 1 : 1 - Math.pow(2, -10 * progress);
            const currentVal = Math.round(startVal + (target - startVal) * easeProgress);

            el.textContent = currentVal.toLocaleString('en-IN');

            if (progress < 1) {
                requestAnimationFrame(updateCounter);
            } else {
                el.textContent = target.toLocaleString('en-IN');
            }
        }

        requestAnimationFrame(updateCounter);
    }

    // =========================================================================
    // 6. DYNAMIC SPOTLIGHT GLOW ON CARDS
    // =========================================================================
    function initSpotlightCards() {
        const spotlightCards = document.querySelectorAll('.spotlight-card, .hero-badge-card, .pillar-card, .service-full-card, .why-card, .strength-card');

        spotlightCards.forEach(card => {
            if (card.dataset.spotlightBound) return;
            card.dataset.spotlightBound = 'true';
            card.classList.add('spotlight-card');

            card.addEventListener('mousemove', function (e) {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                card.style.setProperty('--spotlight-x', `${x}px`);
                card.style.setProperty('--spotlight-y', `${y}px`);
            });
        });
    }

    // =========================================================================
    // 7. MAGNETIC INTERACTIVE BUTTONS & CARDS
    // =========================================================================
    function initMagneticTouch() {
        if (!window.matchMedia('(pointer: fine)').matches) return;

        const magneticElements = document.querySelectorAll('.magnetic-btn, .btn-gold, .btn-outline-gold');
        magneticElements.forEach(btn => {
            if (btn.dataset.magneticBound) return;
            btn.dataset.magneticBound = 'true';

            btn.addEventListener('mousemove', function (e) {
                const rect = btn.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;
                btn.style.transform = `translate(${x * 0.22}px, ${y * 0.22}px) scale(1.02)`;
            });

            btn.addEventListener('mouseleave', function () {
                btn.style.transform = '';
            });
        });

        const tiltCards = document.querySelectorAll('.hero-badge-card, .pillar-card, .strength-card, .director-card');
        tiltCards.forEach(card => {
            if (card.dataset.tiltBound) return;
            card.dataset.tiltBound = 'true';

            card.addEventListener('mousemove', function (e) {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;

                const rotateX = ((y - centerY) / centerY) * -6;
                const rotateY = ((x - centerX) / centerX) * 6;

                card.style.transform = `perspective(900px) rotateX(${rotateX.toFixed(2)}deg) rotateY(${rotateY.toFixed(2)}deg) translateY(-6px)`;
            });

            card.addEventListener('mouseleave', function () {
                card.style.transform = '';
            });
        });
    }

    // =========================================================================
    // 8. MOBILE DRAWER MENU NAVIGATION (FIXED VIEWPORT + BACKDROP OVERLAY)
    // =========================================================================
    function initMobileDrawer() {
        const mobileToggle = document.getElementById('mobile-toggle');
        const mobileDrawer = document.getElementById('mobile-drawer');
        const drawerClose = document.getElementById('drawer-close');
        const drawerBackdrop = document.getElementById('mobile-drawer-backdrop');

        if (mobileDrawer) {
            function openDrawer() {
                mobileDrawer.classList.add('open');
                if (drawerBackdrop) drawerBackdrop.classList.add('open');
                document.body.classList.add('drawer-open');
                document.body.style.overflow = 'hidden';
            }

            function closeDrawer() {
                mobileDrawer.classList.remove('open');
                if (drawerBackdrop) drawerBackdrop.classList.remove('open');
                document.body.classList.remove('drawer-open');
                document.body.style.overflow = '';
            }

            if (mobileToggle && !mobileToggle.dataset.drawerBound) {
                mobileToggle.dataset.drawerBound = 'true';
                mobileToggle.addEventListener('click', function (e) {
                    e.preventDefault();
                    openDrawer();
                });
            }

            if (drawerClose && !drawerClose.dataset.drawerBound) {
                drawerClose.dataset.drawerBound = 'true';
                drawerClose.addEventListener('click', function (e) {
                    e.preventDefault();
                    closeDrawer();
                });
            }

            if (drawerBackdrop && !drawerBackdrop.dataset.drawerBound) {
                drawerBackdrop.dataset.drawerBound = 'true';
                drawerBackdrop.addEventListener('click', function () {
                    closeDrawer();
                });
            }

            mobileDrawer.querySelectorAll('.mobile-nav-link, .drawer-actions a').forEach(link => {
                link.addEventListener('click', function () {
                    closeDrawer();
                });
            });

            document.addEventListener('keydown', function (e) {
                if (e.key === 'Escape' && mobileDrawer.classList.contains('open')) {
                    closeDrawer();
                }
            });
        }
    }
    initMobileDrawer();

    // =========================================================================
    // 9. SERVICE FILTER TABS WITH KINETIC FADE
    // =========================================================================
    function initServiceFilters() {
        const filterButtons = document.querySelectorAll('.filter-tab-btn');
        const serviceCards = document.querySelectorAll('.service-full-card');

        if (filterButtons.length > 0 && serviceCards.length > 0) {
            filterButtons.forEach(btn => {
                if (btn.dataset.filterBound) return;
                btn.dataset.filterBound = 'true';

                btn.addEventListener('click', function () {
                    filterButtons.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');

                    const filterVal = this.getAttribute('data-filter');

                    serviceCards.forEach(card => {
                        const cardCat = card.getAttribute('data-category') || '';
                        const isMatch = (filterVal === 'all') || 
                                        (cardCat === filterVal) || 
                                        (filterVal === 'Agri & Logistics' && (cardCat.includes('Agri') || cardCat.includes('Logistics') || cardCat.includes('Cold Chain')));

                        if (isMatch) {
                            card.style.display = 'flex';
                            card.style.opacity = '0';
                            card.style.transform = 'translateY(24px)';
                            setTimeout(() => {
                                card.style.transition = 'opacity 0.45s cubic-bezier(0.16, 1, 0.3, 1), transform 0.45s cubic-bezier(0.16, 1, 0.3, 1)';
                                card.style.opacity = '1';
                                card.style.transform = 'translateY(0)';
                            }, 20);
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });
        }
    }

    // =========================================================================
    // 10. HIGH-TICKET LOAN & EMI CALCULATOR & AMORTIZATION TABLE
    // =========================================================================
    function initCalculator() {
        const calcAmount = document.getElementById('calc-amount');
        const calcRate = document.getElementById('calc-rate');
        const calcTenure = document.getElementById('calc-tenure');

        if (!calcAmount || !calcRate || !calcTenure) return;

        const amountDisplay = document.getElementById('calc-amount-text');
        const rateDisplay = document.getElementById('calc-rate-text');
        const tenureDisplay = document.getElementById('calc-tenure-text');

        const emiDisplay = document.getElementById('calc-emi-display');
        const principalDisplay = document.getElementById('calc-principal-display');
        const totalInterestDisplay = document.getElementById('calc-total-interest');
        const totalPayableDisplay = document.getElementById('calc-total-payable');

        const amortTbody = document.getElementById('amortization-tbody');
        const btnToggleAmort = document.getElementById('btn-toggle-amortization');
        const amortTableWrap = document.getElementById('amortization-table-wrap');
        const amortToggleText = document.getElementById('amort-toggle-text');
        const btnPrintSchedule = document.getElementById('btn-print-schedule');

        function formatIndianCurrency(numInRupees) {
            if (numInRupees >= 10000000) {
                const cr = (numInRupees / 10000000).toFixed(2);
                return '₹ ' + cr + ' Cr';
            } else if (numInRupees >= 100000) {
                const lk = (numInRupees / 100000).toFixed(2);
                return '₹ ' + lk + ' Lakhs';
            } else {
                return '₹ ' + Math.round(numInRupees).toLocaleString('en-IN');
            }
        }

        function triggerMetricFlash() {
            const metrics = document.querySelectorAll('.metric-item, .emi-result-card');
            metrics.forEach(m => {
                m.classList.add('val-updated');
                setTimeout(() => m.classList.remove('val-updated'), 250);
            });
        }

        function generateAmortizationSchedule(principal, annualRate, years, monthlyEMI) {
            if (!amortTbody) return;

            let balance = principal;
            const monthlyRate = annualRate / (12 * 100);
            let rowsHtml = '';

            for (let yr = 1; yr <= years; yr++) {
                const openingBal = balance;
                let yrPrincipalPaid = 0;
                let yrInterestPaid = 0;

                for (let m = 1; m <= 12; m++) {
                    if (balance <= 0) break;
                    const monthlyInterest = balance * monthlyRate;
                    let monthlyPrincipal = monthlyEMI - monthlyInterest;

                    if (monthlyPrincipal > balance) {
                        monthlyPrincipal = balance;
                    }

                    yrInterestPaid += monthlyInterest;
                    yrPrincipalPaid += monthlyPrincipal;
                    balance = Math.max(0, balance - monthlyPrincipal);
                }

                const yrTotalPaid = yrPrincipalPaid + yrInterestPaid;
                const principalPct = yrTotalPaid > 0 ? Math.round((yrPrincipalPaid / yrTotalPaid) * 100) : 50;
                const interestPct = 100 - principalPct;

                rowsHtml += `
                    <tr>
                        <td class="amort-col-year"><span class="year-badge">Year ${yr}</span></td>
                        <td class="amort-col-opening"><strong>${formatIndianCurrency(openingBal)}</strong></td>
                        <td class="amort-col-emi">${formatIndianCurrency(yrTotalPaid)}</td>
                        <td class="amort-col-principal"><span class="principal-text">${formatIndianCurrency(yrPrincipalPaid)}</span></td>
                        <td class="amort-col-interest"><span class="interest-text">${formatIndianCurrency(yrInterestPaid)}</span></td>
                        <td class="amort-col-closing"><strong>${formatIndianCurrency(balance)}</strong></td>
                        <td class="amort-col-ratio">
                            <div class="ratio-bar-wrap" title="Principal: ${principalPct}% | Interest: ${interestPct}%">
                                <div class="ratio-bar-fill-principal" style="width: ${principalPct}%;"></div>
                                <div class="ratio-bar-fill-interest" style="width: ${interestPct}%;"></div>
                            </div>
                            <span class="ratio-legend">${principalPct}% P / ${interestPct}% I</span>
                        </td>
                    </tr>
                `;
            }

            amortTbody.innerHTML = rowsHtml;
        }

        function calculateEMI() {
            const pCrores = parseFloat(calcAmount.value) || 25;
            const principal = pCrores * 10000000;
            const annualRate = parseFloat(calcRate.value) || 8.5;
            const years = parseInt(calcTenure.value) || 10;
            const months = years * 12;

            const monthlyRate = annualRate / (12 * 100);

            let emi = 0;
            if (monthlyRate > 0) {
                emi = (principal * monthlyRate * Math.pow(1 + monthlyRate, months)) / (Math.pow(1 + monthlyRate, months) - 1);
            } else {
                emi = principal / months;
            }

            const totalPayable = emi * months;
            const totalInterest = totalPayable - principal;

            if (amountDisplay) amountDisplay.textContent = '₹ ' + pCrores.toFixed(2) + ' Crore';
            if (rateDisplay) rateDisplay.textContent = annualRate.toFixed(2) + ' %';
            if (tenureDisplay) tenureDisplay.textContent = years + (years === 1 ? ' Year' : ' Years');

            if (emiDisplay) emiDisplay.textContent = formatIndianCurrency(emi) + ' / mo';
            if (principalDisplay) principalDisplay.textContent = '₹ ' + pCrores.toFixed(2) + ' Cr';
            if (totalInterestDisplay) totalInterestDisplay.textContent = formatIndianCurrency(totalInterest);
            if (totalPayableDisplay) totalPayableDisplay.textContent = formatIndianCurrency(totalPayable);

            generateAmortizationSchedule(principal, annualRate, years, emi);
            triggerMetricFlash();
        }

        if (!calcAmount.dataset.calcBound) {
            calcAmount.dataset.calcBound = 'true';
            calcAmount.addEventListener('input', calculateEMI);
            calcRate.addEventListener('input', calculateEMI);
            calcTenure.addEventListener('input', calculateEMI);
        }
        calculateEMI();

        if (btnToggleAmort && amortTableWrap && !btnToggleAmort.dataset.bound) {
            btnToggleAmort.dataset.bound = 'true';
            btnToggleAmort.addEventListener('click', function () {
                const isHidden = amortTableWrap.style.display === 'none' || amortTableWrap.style.display === '';
                if (isHidden) {
                    amortTableWrap.style.display = 'block';
                    if (amortToggleText) amortToggleText.textContent = 'Hide Amortization Table';
                    btnToggleAmort.classList.add('is-expanded');
                } else {
                    amortTableWrap.style.display = 'none';
                    if (amortToggleText) amortToggleText.textContent = 'View Amortization Table';
                    btnToggleAmort.classList.remove('is-expanded');
                }
            });
        }

        if (btnPrintSchedule && !btnPrintSchedule.dataset.bound) {
            btnPrintSchedule.dataset.bound = 'true';
            btnPrintSchedule.addEventListener('click', function () {
                if (amortTableWrap && amortTableWrap.style.display === 'none') {
                    amortTableWrap.style.display = 'block';
                    if (amortToggleText) amortToggleText.textContent = 'Hide Amortization Table';
                }
                window.print();
            });
        }
    }

    // =========================================================================
    // 11. CONSULTATION MODAL & SPRING ANIMATIONS
    // =========================================================================
    function initConsultationModal() {
        const modalBackdrop = document.getElementById('inquiry-modal');
        const openModalBtns = document.querySelectorAll('.open-modal-btn, .open-inquiry-modal');
        const closeModalBtns = document.querySelectorAll('.modal-close-btn, .modal-cancel-btn');
        const modalServiceSelect = document.getElementById('modal-service');
        const modalTicketSelect = document.getElementById('modal-ticket');

        function openInquiryModal(serviceId = null, prefillAmount = null) {
            if (!modalBackdrop) return;
            modalBackdrop.style.display = 'flex';
            document.body.style.overflow = 'hidden';

            requestAnimationFrame(() => {
                modalBackdrop.classList.add('is-active');
            });

            if (serviceId && modalServiceSelect) {
                modalServiceSelect.value = serviceId;
            }

            if (prefillAmount && modalTicketSelect) {
                if (prefillAmount <= 5) {
                    modalTicketSelect.value = '₹1 Cr - ₹5 Cr';
                } else if (prefillAmount <= 25) {
                    modalTicketSelect.value = '₹5 Cr - ₹25 Cr';
                } else if (prefillAmount <= 100) {
                    modalTicketSelect.value = '₹25 Cr - ₹100 Cr';
                } else if (prefillAmount <= 500) {
                    modalTicketSelect.value = '₹100 Cr - ₹500 Cr';
                } else {
                    modalTicketSelect.value = '₹500 Cr - ₹1000 Cr';
                }
            }
        }

        function closeInquiryModal() {
            if (!modalBackdrop) return;
            modalBackdrop.classList.remove('is-active');
            document.body.style.overflow = '';
            setTimeout(() => {
                modalBackdrop.style.display = 'none';
            }, 350);
        }

        openModalBtns.forEach(btn => {
            if (btn.dataset.modalBound) return;
            btn.dataset.modalBound = 'true';
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                const srvId = this.getAttribute('data-service');
                openInquiryModal(srvId);
            });
        });

        closeModalBtns.forEach(btn => {
            if (btn.dataset.modalBound) return;
            btn.dataset.modalBound = 'true';
            btn.addEventListener('click', closeInquiryModal);
        });

        if (modalBackdrop && !modalBackdrop.dataset.backdropBound) {
            modalBackdrop.dataset.backdropBound = 'true';
            modalBackdrop.addEventListener('click', function (e) {
                if (e.target === modalBackdrop) {
                    closeInquiryModal();
                }
            });
        }
    }
    initConsultationModal();

    // =========================================================================
    // 12. AJAX FORM SUBMISSION FOR INQUIRIES
    // =========================================================================
    const inquiryForm = document.getElementById('funding-inquiry-form');
    const modalAlert = document.getElementById('modal-alert-box');

    if (inquiryForm && !inquiryForm.dataset.formBound) {
        inquiryForm.dataset.formBound = 'true';
        inquiryForm.addEventListener('submit', function (e) {
            e.preventDefault();
            const submitBtn = document.getElementById('modal-submit-btn');
            const originalText = submitBtn ? submitBtn.innerHTML : 'Submitting...';

            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = 'Processing Request...';
            }

            const formData = new FormData(inquiryForm);

            fetch('index.php?action=inquire', {
                method: 'POST',
                headers: { 'X-Requested-With': 'XMLHttpRequest' },
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                if (modalAlert) {
                    modalAlert.className = 'alert-box alert-success';
                    modalAlert.innerHTML = `
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                        <span>${data.message || 'Consultation request submitted successfully!'}</span>
                    `;
                    modalAlert.style.display = 'flex';
                }
                inquiryForm.reset();
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalText;
                }
                setTimeout(() => {
                    if (modalAlert) modalAlert.style.display = 'none';
                }, 3500);
            })
            .catch(err => {
                console.error(err);
                if (modalAlert) {
                    modalAlert.className = 'alert-box alert-success';
                    modalAlert.textContent = 'Thank you! Your request has been recorded. Our team will contact you shortly.';
                    modalAlert.style.display = 'flex';
                }
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalText;
                }
            });
        });
    }

    // =========================================================================
    // 12. MULTI-DIRECTOR WHATSAPP CONCIERGE DRAWER INTERACTIVITY
    // =========================================================================
    function initWhatsAppConcierge() {
        const widget = document.getElementById('whatsapp-concierge-widget');
        if (!widget) return;

        const triggerBtn = document.getElementById('whatsapp-concierge-trigger');
        const drawer = document.getElementById('whatsapp-concierge-drawer');
        const backdrop = document.getElementById('whatsapp-concierge-backdrop');
        const closeBtn = document.getElementById('wc-drawer-close-btn');
        const mobileWaButtons = document.querySelectorAll('.trigger-whatsapp-concierge, #mob-action-wa-btn');

        function openConcierge() {
            widget.classList.add('is-open');
            if (triggerBtn) {
                triggerBtn.setAttribute('aria-expanded', 'true');
            }
            if (drawer) {
                drawer.setAttribute('aria-hidden', 'false');
            }
        }

        function closeConcierge() {
            widget.classList.remove('is-open');
            if (triggerBtn) {
                triggerBtn.setAttribute('aria-expanded', 'false');
            }
            if (drawer) {
                drawer.setAttribute('aria-hidden', 'true');
            }
        }

        function toggleConcierge() {
            if (widget.classList.contains('is-open')) {
                closeConcierge();
            } else {
                openConcierge();
            }
        }

        if (triggerBtn && !triggerBtn._hasConciergeListener) {
            triggerBtn._hasConciergeListener = true;
            triggerBtn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                toggleConcierge();
            });
        }

        if (closeBtn && !closeBtn._hasConciergeListener) {
            closeBtn._hasConciergeListener = true;
            closeBtn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                closeConcierge();
            });
        }

        if (backdrop && !backdrop._hasConciergeListener) {
            backdrop._hasConciergeListener = true;
            backdrop.addEventListener('click', function() {
                closeConcierge();
            });
        }

        mobileWaButtons.forEach(btn => {
            if (!btn._hasConciergeListener) {
                btn._hasConciergeListener = true;
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    openConcierge();
                });
            }
        });

        // Close on escape key
        if (!window._hasConciergeKeydownListener) {
            window._hasConciergeKeydownListener = true;
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    const activeWidget = document.getElementById('whatsapp-concierge-widget');
                    if (activeWidget && activeWidget.classList.contains('is-open')) {
                        activeWidget.classList.remove('is-open');
                    }
                }
            });
        }
    }

    // =========================================================================
    // MASTER COMPONENT RE-INITIALIZER FOR PAGE SWAPS
    // =========================================================================
    function reinitPageComponents() {
        initLogoDynamics();
        initThemeSystem();
        initScrollReveals();
        initSpotlightCards();
        initMagneticTouch();
        initMobileDrawer();
        initServiceFilters();
        initCalculator();
        initConsultationModal();
        initWhatsAppConcierge();
        handleNavbarScroll();
    }
    reinitPageComponents();

    // =========================================================================
    // 13. INSTANT SEAMLESS SPA PAGE ROUTER (ZERO BLINK NAVBAR SWITCHER)
    // =========================================================================
    function initSpaRouter() {
        const mainContent = document.getElementById('main-content');
        if (!mainContent) return;

        function updateActiveNavLinks(urlStr) {
            const urlObj = new URL(urlStr, window.location.origin);
            const pageParam = urlObj.searchParams.get('page') || 'home';

            const navLinks = document.querySelectorAll('.nav-link, .mobile-nav-link');
            navLinks.forEach(link => {
                const linkHref = link.getAttribute('href') || '';
                const linkUrlObj = new URL(linkHref, window.location.origin);
                const linkPageParam = linkUrlObj.searchParams.get('page') || 'home';

                if (linkPageParam === pageParam || (pageParam === 'service' && linkPageParam === 'services')) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });
        }

        async function loadPage(url, pushState = true) {
            try {
                // Gentle instant fade out
                mainContent.style.transition = 'opacity 0.12s cubic-bezier(0.25, 1, 0.5, 1)';
                mainContent.style.opacity = '0.35';

                const response = await fetch(url, {
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                });

                if (!response.ok) {
                    window.location.href = url;
                    return;
                }

                const htmlText = await response.text();
                const parser = new DOMParser();
                const doc = parser.parseFromString(htmlText, 'text/html');

                const newContent = doc.getElementById('main-content');
                if (!newContent) {
                    window.location.href = url;
                    return;
                }

                if (doc.title) {
                    document.title = doc.title;
                }

                mainContent.innerHTML = newContent.innerHTML;

                if (pushState) {
                    window.history.pushState({}, '', url);
                }

                updateActiveNavLinks(url);

                window.scrollTo({ top: 0, behavior: 'instant' });

                mainContent.style.opacity = '1';

                reinitPageComponents();
            } catch (err) {
                console.error('SPA Navigation error:', err);
                window.location.href = url;
            }
        }

        document.body.addEventListener('click', function (e) {
            const anchor = e.target.closest('a');
            if (!anchor) return;

            const href = anchor.getAttribute('href');
            if (!href || href.startsWith('#') || href.startsWith('javascript:') || href.startsWith('mailto:') || href.startsWith('tel:') || anchor.hasAttribute('download') || anchor.getAttribute('target') === '_blank') {
                return;
            }

            if (href.endsWith('.pdf') || href.endsWith('.zip')) return;

            const targetUrl = new URL(href, window.location.origin);
            if (targetUrl.origin === window.location.origin) {
                e.preventDefault();
                loadPage(href);
            }
        });

        window.addEventListener('popstate', function () {
            loadPage(window.location.href, false);
        });
    }
    initSpaRouter();
});
