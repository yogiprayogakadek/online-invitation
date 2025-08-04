// Main JavaScript for e-undanganku.my.id Landing Page
// Three.js 3D Background Animation & Interactive Features

(function() {
    'use strict';

    class LandingPageController {
        constructor() {
            this.scene = null;
            this.camera = null;
            this.renderer = null;
            this.particles = [];
            this.mouse = { x: 0, y: 0 };
            this.windowHalf = { x: window.innerWidth / 2, y: window.innerHeight / 2 };
            
            this.init();
        }

        init() {
            this.initLoading();
            this.initThreeJS();
            this.initNavigation();
            this.initScrollAnimations();
            this.initCounters();
            this.initTemplateFilters();
            this.initLazyLoading();
            this.initSmoothScroll();
            this.initParallax();
            this.initUseAnimations();
            this.animate();
        }

        // Loading Screen
        initLoading() {
            window.addEventListener('load', () => {
                const loadingScreen = document.getElementById('loading-screen');
                if (loadingScreen) {
                    setTimeout(() => {
                        loadingScreen.style.opacity = '0';
                        setTimeout(() => {
                            loadingScreen.style.display = 'none';
                            this.initAOS();
                        }, 500);
                    }, 1500);
                }
            });
        }

        // Initialize AOS (Animate On Scroll)
        initAOS() {
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 1000,
                    easing: 'ease-out-cubic',
                    once: true,
                    offset: 100
                });
            }
        }

        // Three.js 3D Background
        initThreeJS() {
            const container = document.querySelector('.three-container');
            if (!container || typeof THREE === 'undefined') return;

            try {
                // Scene setup
                this.scene = new THREE.Scene();
                this.camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
                this.renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
                
                this.renderer.setSize(window.innerWidth, window.innerHeight);
                this.renderer.setClearColor(0x000000, 0);
                container.appendChild(this.renderer.domElement);

                // Particle system
                this.createParticleSystem();
                
                // Floating geometries
                this.createFloatingGeometries();

                // Camera position
                this.camera.position.z = 5;

                // Mouse interaction
                document.addEventListener('mousemove', (event) => {
                    this.mouse.x = (event.clientX - this.windowHalf.x) / 100;
                    this.mouse.y = (event.clientY - this.windowHalf.y) / 100;
                });

                // Resize handler
                window.addEventListener('resize', () => {
                    this.onWindowResize();
                });
            } catch (error) {
                console.warn('Three.js initialization failed:', error);
            }
        }

        createParticleSystem() {
            const particleCount = 100;
            const particles = new THREE.BufferGeometry();
            const positions = new Float32Array(particleCount * 3);
            const colors = new Float32Array(particleCount * 3);

            for (let i = 0; i < particleCount * 3; i += 3) {
                positions[i] = (Math.random() - 0.5) * 20;
                positions[i + 1] = (Math.random() - 0.5) * 20;
                positions[i + 2] = (Math.random() - 0.5) * 20;

                colors[i] = Math.random() * 0.5 + 0.5;
                colors[i + 1] = Math.random() * 0.5 + 0.5;
                colors[i + 2] = 1;
            }

            particles.setAttribute('position', new THREE.BufferAttribute(positions, 3));
            particles.setAttribute('color', new THREE.BufferAttribute(colors, 3));

            const particleMaterial = new THREE.PointsMaterial({
                size: 0.05,
                vertexColors: true,
                transparent: true,
                opacity: 0.6,
                blending: THREE.AdditiveBlending
            });

            const particleSystem = new THREE.Points(particles, particleMaterial);
            this.scene.add(particleSystem);
            this.particles.push(particleSystem);
        }

        createFloatingGeometries() {
            const geometries = [
                new THREE.OctahedronGeometry(0.3),
                new THREE.TetrahedronGeometry(0.4),
                new THREE.IcosahedronGeometry(0.2)
            ];

            const material = new THREE.MeshBasicMaterial({
                color: 0x6366f1,
                transparent: true,
                opacity: 0.1,
                wireframe: true
            });

            for (let i = 0; i < 8; i++) {
                const geometry = geometries[Math.floor(Math.random() * geometries.length)];
                const mesh = new THREE.Mesh(geometry, material);
                
                mesh.position.x = (Math.random() - 0.5) * 15;
                mesh.position.y = (Math.random() - 0.5) * 15;
                mesh.position.z = (Math.random() - 0.5) * 15;
                
                mesh.rotation.x = Math.random() * Math.PI;
                mesh.rotation.y = Math.random() * Math.PI;
                
                this.scene.add(mesh);
                this.particles.push(mesh);
            }
        }

        animate() {
            requestAnimationFrame(() => this.animate());

            // Rotate particles
            this.particles.forEach((particle, index) => {
                if (particle.rotation) {
                    particle.rotation.x += 0.01;
                    particle.rotation.y += 0.01;
                }
                
                if (particle.geometry && particle.geometry.attributes.position) {
                    const positions = particle.geometry.attributes.position.array;
                    for (let i = 0; i < positions.length; i += 3) {
                        positions[i + 1] += Math.sin(Date.now() * 0.001 + i) * 0.001;
                    }
                    particle.geometry.attributes.position.needsUpdate = true;
                }
            });

            // Camera movement based on mouse
            if (this.camera && this.scene) {
                this.camera.position.x += (this.mouse.x - this.camera.position.x) * 0.05;
                this.camera.position.y += (-this.mouse.y - this.camera.position.y) * 0.05;
                this.camera.lookAt(this.scene.position);

                this.renderer.render(this.scene, this.camera);
            }
        }

        onWindowResize() {
            this.windowHalf.x = window.innerWidth / 2;
            this.windowHalf.y = window.innerHeight / 2;
            
            if (this.camera && this.renderer) {
                this.camera.aspect = window.innerWidth / window.innerHeight;
                this.camera.updateProjectionMatrix();
                this.renderer.setSize(window.innerWidth, window.innerHeight);
            }
        }

        // Navigation
        initNavigation() {
            const navbar = document.getElementById('navbar');
            const navToggle = document.getElementById('nav-toggle');
            const navMenu = document.getElementById('nav-menu');

            if (!navbar || !navToggle || !navMenu) {
                console.error('Navigation elements not found:', { navbar, navToggle, navMenu });
                return;
            }

            // Navbar scroll effect
            window.addEventListener('scroll', () => {
                if (window.scrollY > 100) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });

            // Mobile menu toggle
            navToggle.addEventListener('click', (e) => {
                e.preventDefault();
                e.stopPropagation();
                console.log('Hamburger menu clicked');
                
                // Toggle classes
                navMenu.classList.toggle('active');
                navToggle.classList.toggle('active');
                
                // Force menu visibility with inline styles
                if (navMenu.classList.contains('active')) {
                    navMenu.style.cssText = `
                        position: fixed !important;
                        top: 0 !important;
                        left: 0 !important;
                        width: 100% !important;
                        height: 100vh !important;
                        background: rgba(255, 255, 255, 0.98) !important;
                        backdrop-filter: blur(20px) !important;
                        display: flex !important;
                        flex-direction: column !important;
                        justify-content: center !important;
                        align-items: center !important;
                        padding: 2rem !important;
                        z-index: 9999 !important;
                        pointer-events: auto !important;
                        visibility: visible !important;
                        opacity: 1 !important;
                    `;
                } else {
                    navMenu.style.cssText = `
                        position: fixed !important;
                        top: 0 !important;
                        left: -100% !important;
                        width: 100% !important;
                        height: 100vh !important;
                        background: rgba(255, 255, 255, 0.98) !important;
                        backdrop-filter: blur(20px) !important;
                        display: flex !important;
                        flex-direction: column !important;
                        justify-content: center !important;
                        align-items: center !important;
                        padding: 2rem !important;
                        z-index: 1000 !important;
                        pointer-events: none !important;
                        visibility: hidden !important;
                        opacity: 0 !important;
                        transition: left 0.3s ease, opacity 0.3s ease, visibility 0.3s ease !important;
                    `;
                }
                
                // Debug logging
                console.log('Menu active class:', navMenu.classList.contains('active'));
                console.log('Toggle active class:', navToggle.classList.contains('active'));
                console.log('Menu display style:', navMenu.style.display);
                console.log('Menu left style:', navMenu.style.left);
            });

            // Close mobile menu when clicking nav links
            document.querySelectorAll('.nav-link').forEach(link => {
                link.addEventListener('click', () => {
                    navMenu.classList.remove('active');
                    navToggle.classList.remove('active');
                    
                    // Force menu to hide with inline styles
                    navMenu.style.cssText = `
                        position: fixed !important;
                        top: 0 !important;
                        left: -100% !important;
                        width: 100% !important;
                        height: 100vh !important;
                        background: rgba(255, 255, 255, 0.98) !important;
                        backdrop-filter: blur(20px) !important;
                        display: flex !important;
                        flex-direction: column !important;
                        justify-content: center !important;
                        align-items: center !important;
                        padding: 2rem !important;
                        z-index: 1000 !important;
                        pointer-events: none !important;
                        visibility: hidden !important;
                        opacity: 0 !important;
                        transition: left 0.3s ease, opacity 0.3s ease, visibility 0.3s ease !important;
                    `;
                });
            });

            // Close menu when clicking outside
            document.addEventListener('click', (e) => {
                if (!navToggle.contains(e.target) && !navMenu.contains(e.target)) {
                    navMenu.classList.remove('active');
                    navToggle.classList.remove('active');
                    
                    // Force menu to hide with inline styles
                    navMenu.style.cssText = `
                        position: fixed !important;
                        top: 0 !important;
                        left: -100% !important;
                        width: 100% !important;
                        height: 100vh !important;
                        background: rgba(255, 255, 255, 0.98) !important;
                        backdrop-filter: blur(20px) !important;
                        display: flex !important;
                        flex-direction: column !important;
                        justify-content: center !important;
                        align-items: center !important;
                        padding: 2rem !important;
                        z-index: 1000 !important;
                        pointer-events: none !important;
                        visibility: hidden !important;
                        opacity: 0 !important;
                        transition: left 0.3s ease, opacity 0.3s ease, visibility 0.3s ease !important;
                    `;
                }
            });
        }

        // Smooth Scroll
        initSmoothScroll() {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        }

        // Scroll Animations
        initScrollAnimations() {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-in');
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.feature-card, .template-card, .pricing-card, .testimonial-card').forEach(el => {
                observer.observe(el);
            });
        }

        // Counter Animation
        initCounters() {
            const counters = document.querySelectorAll('.counter');
            const counterObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        this.animateCounter(entry.target);
                        counterObserver.unobserve(entry.target);
                    }
                });
            });

            counters.forEach(counter => {
                counterObserver.observe(counter);
            });
        }

        animateCounter(element) {
            const target = parseInt(element.getAttribute('data-target'));
            if (isNaN(target)) return;

            const duration = 2000;
            const start = performance.now();

            const animate = (currentTime) => {
                const elapsed = currentTime - start;
                const progress = Math.min(elapsed / duration, 1);
                
                const current = Math.floor(progress * target);
                element.textContent = current.toLocaleString();

                if (progress < 1) {
                    requestAnimationFrame(animate);
                }
            };

            requestAnimationFrame(animate);
        }

        // Template Filters
        initTemplateFilters() {
            const categoryBtns = document.querySelectorAll('.category-btn');
            const templateCards = document.querySelectorAll('.template-card');

            categoryBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    const category = btn.getAttribute('data-category');
                    
                    // Update active button
                    categoryBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');

                    // Filter templates
                    templateCards.forEach(card => {
                        if (category === 'all' || card.classList.contains(category)) {
                            card.style.display = 'block';
                            card.style.opacity = '0';
                            setTimeout(() => {
                                card.style.opacity = '1';
                            }, 100);
                        } else {
                            card.style.opacity = '0';
                            setTimeout(() => {
                                card.style.display = 'none';
                            }, 300);
                        }
                    });
                });
            });
        }

        // Lazy Loading
        initLazyLoading() {
            const lazyImages = document.querySelectorAll('.lazy');
            
            const imageObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                });
            });

            lazyImages.forEach(img => {
                imageObserver.observe(img);
            });
        }

        // Parallax Effect
        initParallax() {
            window.addEventListener('scroll', () => {
                const scrolled = window.pageYOffset;
                const parallaxElements = document.querySelectorAll('.floating-shape');
                
                parallaxElements.forEach((element, index) => {
                    const speed = 0.5 + (index * 0.1);
                    const yPos = -(scrolled * speed);
                    element.style.transform = `translateY(${yPos}px)`;
                });
            });
        }

        // UseAnimations Integration
        initUseAnimations() {
            // Initialize useAnimations for buttons and icons
            const animatedButtons = document.querySelectorAll('.btn-primary, .btn-glass');
            
            animatedButtons.forEach(btn => {
                btn.addEventListener('mouseenter', () => {
                    btn.style.transform = 'translateY(-2px) scale(1.02)';
                });
                
                btn.addEventListener('mouseleave', () => {
                    btn.style.transform = 'translateY(0) scale(1)';
                });
            });

            // Feature icons animation
            const featureIcons = document.querySelectorAll('.icon-animation');
            const iconObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animation = 'bounce 1s ease-in-out';
                        setTimeout(() => {
                            entry.target.style.animation = '';
                        }, 1000);
                    }
                });
            });

            featureIcons.forEach(icon => {
                iconObserver.observe(icon);
            });

            // Add hover effects to cards
            this.initCardHoverEffects();
        }

        initCardHoverEffects() {
            const cards = document.querySelectorAll('.feature-card, .template-card, .pricing-card, .testimonial-card');
            
            cards.forEach(card => {
                card.addEventListener('mouseenter', () => {
                    card.style.transform = 'translateY(-10px)';
                    card.style.boxShadow = '0 20px 40px rgba(0,0,0,0.1)';
                });
                
                card.addEventListener('mouseleave', () => {
                    card.style.transform = 'translateY(0)';
                    card.style.boxShadow = '';
                });
            });
        }
    }

    // Form Handling
    class FormHandler {
        constructor() {
            this.initContactForm();
            this.initNewsletterForm();
        }

        initContactForm() {
            const contactForm = document.getElementById('contact-form');
            if (contactForm) {
                contactForm.addEventListener('submit', this.handleContactSubmit.bind(this));
            }
        }

        initNewsletterForm() {
            const newsletterForm = document.getElementById('newsletter-form');
            if (newsletterForm) {
                newsletterForm.addEventListener('submit', this.handleNewsletterSubmit.bind(this));
            }
        }

        handleContactSubmit(e) {
            e.preventDefault();
            const formData = new FormData(e.target);
            
            // Show loading state
            const submitBtn = e.target.querySelector('button[type="submit"]');
            if (submitBtn) {
                const originalText = submitBtn.textContent;
                submitBtn.textContent = 'Mengirim...';
                submitBtn.disabled = true;

                // Simulate API call
                setTimeout(() => {
                    this.showNotification('Pesan berhasil dikirim!', 'success');
                    e.target.reset();
                    submitBtn.textContent = originalText;
                    submitBtn.disabled = false;
                }, 2000);
            }
        }

        handleNewsletterSubmit(e) {
            e.preventDefault();
            const email = e.target.querySelector('input[type="email"]').value;
            
            // Show loading state
            const submitBtn = e.target.querySelector('button[type="submit"]');
            if (submitBtn) {
                const originalText = submitBtn.textContent;
                submitBtn.textContent = 'Mendaftar...';
                submitBtn.disabled = true;

                // Simulate API call
                setTimeout(() => {
                    this.showNotification('Berhasil berlangganan newsletter!', 'success');
                    e.target.reset();
                    submitBtn.textContent = originalText;
                    submitBtn.disabled = false;
                }, 1500);
            }
        }

        showNotification(message, type = 'info') {
            const notification = document.createElement('div');
            notification.className = `notification notification-${type}`;
            notification.textContent = message;
            
            notification.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                background: ${type === 'success' ? '#10b981' : '#6366f1'};
                color: white;
                padding: 15px 20px;
                border-radius: 10px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.2);
                z-index: 10000;
                transform: translateX(400px);
                transition: transform 0.3s ease;
            `;
            
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.style.transform = 'translateX(0)';
            }, 100);
            
            setTimeout(() => {
                notification.style.transform = 'translateX(400px)';
                setTimeout(() => {
                    if (document.body.contains(notification)) {
                        document.body.removeChild(notification);
                    }
                }, 300);
            }, 3000);
        }
    }

    // Performance Optimization
    class PerformanceOptimizer {
        constructor() {
            this.initOptimizations();
        }

        initOptimizations() {
            // Preload critical resources
            this.preloadCriticalResources();
            
            // Optimize images
            this.optimizeImages();
            
            // Debounce scroll events
            this.debounceScrollEvents();
        }

        preloadCriticalResources() {
            const criticalResources = [
                'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&display=swap',
                'https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js'
            ];

            criticalResources.forEach(resource => {
                const link = document.createElement('link');
                link.rel = 'preload';
                link.href = resource;
                link.as = resource.includes('.css') ? 'style' : 'script';
                document.head.appendChild(link);
            });
        }

        optimizeImages() {
            // Add loading="lazy" to images that don't have it
            const images = document.querySelectorAll('img:not([loading])');
            images.forEach(img => {
                img.loading = 'lazy';
            });
        }

        debounceScrollEvents() {
            let ticking = false;
            
            const updateScrollEffects = () => {
                // Scroll-based animations here
                ticking = false;
            };

            window.addEventListener('scroll', () => {
                if (!ticking) {
                    requestAnimationFrame(updateScrollEffects);
                    ticking = true;
                }
            });
        }

        debounce(func, wait) {
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
    }

    // Initialize everything when DOM is loaded
    document.addEventListener('DOMContentLoaded', () => {
        try {
            // Initialize main controller
            const landingPage = new LandingPageController();
            
            // Initialize form handler
            const formHandler = new FormHandler();
            
            // Initialize performance optimizer
            const performanceOptimizer = new PerformanceOptimizer();
            
            // Backup hamburger menu functionality
            const navToggle = document.getElementById('nav-toggle');
            const navMenu = document.getElementById('nav-menu');
            
            if (navToggle && navMenu) {
                navToggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    console.log('Backup hamburger menu clicked');
                    
                    navMenu.classList.toggle('active');
                    navToggle.classList.toggle('active');
                    
                    // Force menu visibility with inline styles
                    if (navMenu.classList.contains('active')) {
                        navMenu.style.cssText = `
                            position: fixed !important;
                            top: 0 !important;
                            left: 0 !important;
                            width: 100% !important;
                            height: 100vh !important;
                            background: rgba(255, 255, 255, 0.98) !important;
                            backdrop-filter: blur(20px) !important;
                            display: flex !important;
                            flex-direction: column !important;
                            justify-content: center !important;
                            align-items: center !important;
                            padding: 2rem !important;
                            z-index: 9999 !important;
                            pointer-events: auto !important;
                            visibility: visible !important;
                            opacity: 1 !important;
                        `;
                        console.log('Menu should now be visible');
                    } else {
                        navMenu.style.cssText = `
                            position: fixed !important;
                            top: 0 !important;
                            left: -100% !important;
                            width: 100% !important;
                            height: 100vh !important;
                            background: rgba(255, 255, 255, 0.98) !important;
                            backdrop-filter: blur(20px) !important;
                            display: flex !important;
                            flex-direction: column !important;
                            justify-content: center !important;
                            align-items: center !important;
                            padding: 2rem !important;
                            z-index: 1000 !important;
                            pointer-events: none !important;
                            visibility: hidden !important;
                            opacity: 0 !important;
                            transition: left 0.3s ease, opacity 0.3s ease, visibility 0.3s ease !important;
                        `;
                        console.log('Menu should now be hidden');
                    }
                });
            }
            
            console.log('Landing page initialized successfully');
        } catch (error) {
            console.error('Error initializing landing page:', error);
        }
    });

    // Global error handling
    window.addEventListener('error', (e) => {
        console.error('JavaScript Error:', e.error);
    });

    window.addEventListener('unhandledrejection', (e) => {
        console.error('Unhandled Promise Rejection:', e.reason);
    });

})();