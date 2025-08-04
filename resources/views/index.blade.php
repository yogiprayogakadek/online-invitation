<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description"
        content="Buat undangan online yang menakjubkan dengan desain modern dan fitur interaktif - e-undanganku">
    <meta name="keywords" content="undangan online, wedding invitation, digital invitation, undangan digital">
    <meta name="author" content="e-undanganku">
    <title>e-undanganku - Undangan Online Modern & Elegan</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/mobile-menu.css') }}">

    <!-- useAnimations -->
    <script src="https://www.useanimations.com/lib/useAnimations.js"></script>

    <!-- Three.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Main JavaScript -->
    <script src="{{ asset('assets/js/main.js') }}" defer></script>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
</head>

<body>
    <!-- Loading Screen -->
    <div id="loading-screen" class="loading-screen">
        <div class="loading-content">
            <div class="loading-logo">
                <div class="logo-icon">E</div>
                <div class="logo-text">e-undanganku</div>
            </div>
            <div class="loading-spinner"></div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="container">
            <div class="nav-content">
                <div class="nav-brand">
                    <div class="brand-icon">E</div>
                    <span class="brand-text">e-undanganku</span>
                </div>

                <div class="nav-menu" id="nav-menu">
                    <a href="#home" class="nav-link">Beranda</a>
                    <a href="#features" class="nav-link">Fitur</a>
                    <a href="#templates" class="nav-link">Template</a>
                    <a href="#pricing" class="nav-link">Harga</a>
                    <a href="#testimonials" class="nav-link">Testimoni</a>
                    <a href="#contact" class="nav-link">Kontak</a>
                </div>

                <div class="nav-actions">
                    <button class="btn btn-outline">Masuk</button>
                    <button class="btn btn-primary">Daftar Gratis</button>
                    <button class="nav-toggle" id="nav-toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="three-container"></div>

        <div class="hero-background">
            <div class="floating-shape shape-1"></div>
            <div class="floating-shape shape-2"></div>
            <div class="floating-shape shape-3"></div>
            <div class="floating-shape shape-4"></div>
        </div>

        <div class="container">
            <div class="hero-content">
                <div class="hero-text" data-aos="fade-up">
                    <h1 class="hero-title">
                        Ciptakan <span class="gradient-text">Undangan Digital</span><br>
                        Yang Tak Terlupakan
                    </h1>
                    <p class="hero-description">
                        Buat undangan online yang memukau dengan animasi interaktif, musik latar,
                        dan fitur RSVP otomatis. Sempurna untuk pernikahan, ulang tahun, dan acara spesial lainnya.
                    </p>
                    <div class="hero-actions">
                        <button class="btn btn-primary btn-large">
                            <span>Mulai Gratis</span>
                            <div class="btn-icon"></div>
                        </button>
                        <button class="btn btn-glass btn-large">
                            <div class="btn-icon"></div>
                            <span>Lihat Demo</span>
                        </button>
                    </div>
                </div>

                <div class="hero-stats" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-item">
                        <div class="stat-number counter" data-target="15000">0</div>
                        <div class="stat-label">Undangan Dibuat</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number counter" data-target="8500">0</div>
                        <div class="stat-label">Pengguna Aktif</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number counter" data-target="99">0</div>
                        <div class="stat-label">% Kepuasan</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="scroll-indicator">
            <div class="scroll-mouse">
                <div class="scroll-wheel"></div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Fitur Unggulan</h2>
                <p class="section-description">
                    Dapatkan semua yang Anda butuhkan untuk membuat undangan online yang sempurna
                </p>
            </div>

            <div class="features-grid">
                <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-icon">
                        <div class="icon-animation">🎨</div>
                    </div>
                    <h3 class="feature-title">Desain Responsif</h3>
                    <p class="feature-description">
                        Template yang indah dan responsif yang terlihat sempurna di semua perangkat,
                        dari desktop hingga smartphone.
                    </p>
                </div>

                <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-icon">
                        <div class="icon-animation">🎵</div>
                    </div>
                    <h3 class="feature-title">Musik & Audio</h3>
                    <p class="feature-description">
                        Tambahkan musik latar yang indah dan efek suara untuk menciptakan
                        pengalaman yang tak terlupakan.
                    </p>
                </div>

                <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-icon">
                        <div class="icon-animation">📝</div>
                    </div>
                    <h3 class="feature-title">RSVP Otomatis</h3>
                    <p class="feature-description">
                        Kelola konfirmasi kehadiran tamu secara otomatis dengan sistem
                        RSVP yang terintegrasi.
                    </p>
                </div>

                <div class="feature-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-icon">
                        <div class="icon-animation">📷</div>
                    </div>
                    <h3 class="feature-title">Galeri Foto</h3>
                    <p class="feature-description">
                        Tampilkan momen-momen spesial dengan galeri foto yang elegan
                        dan interaktif.
                    </p>
                </div>

                <div class="feature-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="feature-icon">
                        <div class="icon-animation">📍</div>
                    </div>
                    <h3 class="feature-title">Lokasi & Maps</h3>
                    <p class="feature-description">
                        Integrasikan peta interaktif untuk membantu tamu menemukan
                        lokasi acara dengan mudah.
                    </p>
                </div>

                <div class="feature-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="feature-icon">
                        <div class="icon-animation">📤</div>
                    </div>
                    <h3 class="feature-title">Mudah Dibagikan</h3>
                    <p class="feature-description">
                        Bagikan undangan melalui WhatsApp, email, atau media sosial
                        dengan satu klik.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Templates Section -->
    <section id="templates" class="templates">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Template Pilihan</h2>
                <p class="section-description">
                    Pilih dari berbagai template modern yang telah dirancang khusus untuk acara Anda
                </p>
            </div>

            <div class="template-categories" data-aos="fade-up" data-aos-delay="100">
                <button class="category-btn active" data-category="all">Semua</button>
                <button class="category-btn" data-category="wedding">Pernikahan</button>
                <button class="category-btn" data-category="birthday">Ulang Tahun</button>
                <button class="category-btn" data-category="corporate">Corporate</button>
            </div>

            <div class="templates-grid">
                <div class="template-card wedding" data-aos="zoom-in" data-aos-delay="100">
                    <div class="template-image">
                        <img class="lazy"
                            data-src="https://images.unsplash.com/photo-1519741497674-611481863552?w=400&h=600&fit=crop"
                            alt="Wedding Template 1">
                        <div class="template-overlay">
                            <button class="btn btn-white">Preview</button>
                        </div>
                    </div>
                    <div class="template-info">
                        <h3 class="template-name">Elegant Wedding</h3>
                        <p class="template-type">Pernikahan</p>
                    </div>
                </div>

                <div class="template-card birthday" data-aos="zoom-in" data-aos-delay="200">
                    <div class="template-image">
                        <img class="lazy"
                            data-src="https://images.unsplash.com/photo-1530103862676-de8c9debad1d?w=400&h=600&fit=crop"
                            alt="Birthday Template 1">
                        <div class="template-overlay">
                            <button class="btn btn-white">Preview</button>
                        </div>
                    </div>
                    <div class="template-info">
                        <h3 class="template-name">Birthday Celebration</h3>
                        <p class="template-type">Ulang Tahun</p>
                    </div>
                </div>

                <div class="template-card wedding" data-aos="zoom-in" data-aos-delay="300">
                    <div class="template-image">
                        <img class="lazy"
                            data-src="https://images.unsplash.com/photo-1606800052052-a08af7148866?w=400&h=600&fit=crop"
                            alt="Wedding Template 2">
                        <div class="template-overlay">
                            <button class="btn btn-white">Preview</button>
                        </div>
                    </div>
                    <div class="template-info">
                        <h3 class="template-name">Modern Romance</h3>
                        <p class="template-type">Pernikahan</p>
                    </div>
                </div>

                <div class="template-card corporate" data-aos="zoom-in" data-aos-delay="400">
                    <div class="template-image">
                        <img class="lazy"
                            data-src="https://images.unsplash.com/photo-1511578314322-379afb476865?w=400&h=600&fit=crop"
                            alt="Corporate Template 1">
                        <div class="template-overlay">
                            <button class="btn btn-white">Preview</button>
                        </div>
                    </div>
                    <div class="template-info">
                        <h3 class="template-name">Business Event</h3>
                        <p class="template-type">Corporate</p>
                    </div>
                </div>

                <div class="template-card birthday" data-aos="zoom-in" data-aos-delay="500">
                    <div class="template-image">
                        <img class="lazy"
                            data-src="https://images.unsplash.com/photo-1464349095431-e9a21285b5f3?w=400&h=600&fit=crop"
                            alt="Birthday Template 2">
                        <div class="template-overlay">
                            <button class="btn btn-white">Preview</button>
                        </div>
                    </div>
                    <div class="template-info">
                        <h3 class="template-name">Party Time</h3>
                        <p class="template-type">Ulang Tahun</p>
                    </div>
                </div>

                <div class="template-card wedding" data-aos="zoom-in" data-aos-delay="600">
                    <div class="template-image">
                        <img class="lazy"
                            data-src="https://images.unsplash.com/photo-1583939003579-730e3918a45a?w=400&h=600&fit=crop"
                            alt="Wedding Template 3">
                        <div class="template-overlay">
                            <button class="btn btn-white">Preview</button>
                        </div>
                    </div>
                    <div class="template-info">
                        <h3 class="template-name">Classic Beauty</h3>
                        <p class="template-type">Pernikahan</p>
                    </div>
                </div>
            </div>

            <div class="templates-action" data-aos="fade-up" data-aos-delay="700">
                <button class="btn btn-outline btn-large">Lihat Semua Template</button>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="pricing">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Paket Harga</h2>
                <p class="section-description">
                    Pilih paket yang sesuai dengan kebutuhan acara Anda
                </p>
            </div>

            <div class="pricing-grid">
                <div class="pricing-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="pricing-header">
                        <h3 class="pricing-name">Basic</h3>
                        <div class="pricing-price">
                            <span class="price-currency">Rp</span>
                            <span class="price-amount">0</span>
                            <span class="price-period">/bulan</span>
                        </div>
                        <p class="pricing-description">Untuk acara sederhana</p>
                    </div>

                    <div class="pricing-features">
                        <div class="feature-item">
                            <div class="feature-check">✓</div>
                            <span>1 Template Premium</span>
                        </div>
                        <div class="feature-item">
                            <div class="feature-check">✓</div>
                            <span>RSVP Basic</span>
                        </div>
                        <div class="feature-item">
                            <div class="feature-check">✓</div>
                            <span>5 Foto Gallery</span>
                        </div>
                        <div class="feature-item">
                            <div class="feature-check">✓</div>
                            <span>Musik Background</span>
                        </div>
                        <div class="feature-item">
                            <div class="feature-check">✓</div>
                            <span>Support Email</span>
                        </div>
                    </div>

                    <button class="btn btn-outline btn-full">Mulai Gratis</button>
                </div>

                <div class="pricing-card featured" data-aos="fade-up" data-aos-delay="200">
                    <div class="pricing-badge">Populer</div>
                    <div class="pricing-header">
                        <h3 class="pricing-name">Premium</h3>
                        <div class="pricing-price">
                            <span class="price-currency">Rp</span>
                            <span class="price-amount">99.000</span>
                            <span class="price-period">/bulan</span>
                        </div>
                        <p class="pricing-description">Untuk acara istimewa</p>
                    </div>

                    <div class="pricing-features">
                        <div class="feature-item">
                            <div class="feature-check">✓</div>
                            <span>10+ Template Premium</span>
                        </div>
                        <div class="feature-item">
                            <div class="feature-check">✓</div>
                            <span>RSVP + Analytics</span>
                        </div>
                        <div class="feature-item">
                            <div class="feature-check">✓</div>
                            <span>Unlimited Foto</span>
                        </div>
                        <div class="feature-item">
                            <div class="feature-check">✓</div>
                            <span>Custom Domain</span>
                        </div>
                        <div class="feature-item">
                            <div class="feature-check">✓</div>
                            <span>Priority Support</span>
                        </div>
                    </div>

                    <button class="btn btn-primary btn-full">Pilih Premium</button>
                </div>

                <div class="pricing-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="pricing-header">
                        <h3 class="pricing-name">Enterprise</h3>
                        <div class="pricing-price">
                            <span class="price-currency">Rp</span>
                            <span class="price-amount">299.000</span>
                            <span class="price-period">/bulan</span>
                        </div>
                        <p class="pricing-description">Untuk acara besar</p>
                    </div>

                    <div class="pricing-features">
                        <div class="feature-item">
                            <div class="feature-check">✓</div>
                            <span>Semua Template</span>
                        </div>
                        <div class="feature-item">
                            <div class="feature-check">✓</div>
                            <span>Advanced Analytics</span>
                        </div>
                        <div class="feature-item">
                            <div class="feature-check">✓</div>
                            <span>White Label</span>
                        </div>
                        <div class="feature-item">
                            <div class="feature-check">✓</div>
                            <span>API Access</span>
                        </div>
                        <div class="feature-item">
                            <div class="feature-check">✓</div>
                            <span>24/7 Support</span>
                        </div>
                    </div>

                    <button class="btn btn-outline btn-full">Hubungi Kami</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Kata Mereka</h2>
                <p class="section-description">
                    Dengarkan pengalaman pengguna yang telah mempercayai e-undanganku
                </p>
            </div>

            <div class="testimonials-grid">
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-content">
                        <div class="testimonial-stars">
                            <span>★★★★★</span>
                        </div>
                        <p class="testimonial-text">
                            "e-undanganku membuat undangan pernikahan kami terlihat sangat elegan dan modern.
                            Tamu-tamu kami sangat terkesan dengan animasinya!"
                        </p>
                    </div>
                    <div class="testimonial-author">
                        <img class="lazy author-avatar"
                            data-src="https://images.unsplash.com/photo-1494790108755-2616b612b47c?w=60&h=60&fit=crop&crop=face"
                            alt="Sarah Putri">
                        <div class="author-info">
                            <h4 class="author-name">Sarah Putri</h4>
                            <p class="author-role">Pengantin</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-content">
                        <div class="testimonial-stars">
                            <span>★★★★★</span>
                        </div>
                        <p class="testimonial-text">
                            "Fitur RSVP otomatis sangat membantu dalam mengorganisir acara.
                            Dashboard analytics-nya juga sangat informatif."
                        </p>
                    </div>
                    <div class="testimonial-author">
                        <img class="lazy author-avatar"
                            data-src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=60&h=60&fit=crop&crop=face"
                            alt="Ahmad Rizki">
                        <div class="author-info">
                            <h4 class="author-name">Ahmad Rizki</h4>
                            <p class="author-role">Event Organizer</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="testimonial-content">
                        <div class="testimonial-stars">
                            <span>★★★★★</span>
                        </div>
                        <p class="testimonial-text">
                            "Sangat mudah digunakan! Dalam 10 menit undangan ulang tahun anak saya
                            sudah jadi dan bisa langsung dibagikan."
                        </p>
                    </div>
                    <div class="testimonial-author">
                        <img class="lazy author-avatar"
                            data-src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=60&h=60&fit=crop&crop=face"
                            alt="Ibu Sari">
                        <div class="author-info">
                            <h4 class="author-name">Ibu Sari</h4>
                            <p class="author-role">Ibu Rumah Tangga</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="cta">
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2 class="cta-title">Siap Membuat Undangan Impian Anda?</h2>
                <p class="cta-description">
                    Bergabunglah dengan ribuan pengguna yang telah mempercayai e-undanganku
                    untuk acara spesial mereka
                </p>
                <div class="cta-actions">
                    <button class="btn btn-white btn-large">Mulai Gratis Sekarang</button>
                    <button class="btn btn-outline btn-large" style="border-color: #ffffff; color: #ffffff;">Lihat
                        Demo</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <div class="brand-logo">
                        <div class="brand-icon">E</div>
                        <span class="brand-text">e-undanganku</span>
                    </div>
                    <p class="brand-description">
                        Platform terdepan untuk membuat undangan online yang menakjubkan
                        dengan fitur modern dan desain yang elegan.
                    </p>
                    <div class="social-links">
                        <a href="#" class="social-link">📘</a>
                        <a href="#" class="social-link">📷</a>
                        <a href="#" class="social-link">🐦</a>
                        <a href="#" class="social-link">📺</a>
                    </div>
                </div>

                <div class="footer-links">
                    <div class="footer-section">
                        <h4>Produk</h4>
                        <ul class="footer-list">
                            <li><a href="#" class="footer-link">Template</a></li>
                            <li><a href="#" class="footer-link">Fitur</a></li>
                            <li><a href="#" class="footer-link">Harga</a></li>
                            <li><a href="#" class="footer-link">Demo</a></li>
                        </ul>
                    </div>

                    <div class="footer-section">
                        <h4>Perusahaan</h4>
                        <ul class="footer-list">
                            <li><a href="#" class="footer-link">Tentang Kami</a></li>
                            <li><a href="#" class="footer-link">Blog</a></li>
                            <li><a href="#" class="footer-link">Karir</a></li>
                            <li><a href="#" class="footer-link">Kontak</a></li>
                        </ul>
                    </div>

                    <div class="footer-section">
                        <h4>Dukungan</h4>
                        <ul class="footer-list">
                            <li><a href="#" class="footer-link">Bantuan</a></li>
                            <li><a href="#" class="footer-link">Tutorial</a></li>
                            <li><a href="#" class="footer-link">FAQ</a></li>
                            <li><a href="#" class="footer-link">Komunitas</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p class="footer-copyright">© 2024 e-undanganku. Semua hak dilindungi.</p>
                <div class="footer-legal">
                    <a href="#" class="footer-link">Privacy Policy</a>
                    <a href="#" class="footer-link">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="{{ asset('assets/js/mobile-menu.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    
    <!-- Debug Script for Mobile Menu -->
    <script>
        // Simple debug to check elements
        setTimeout(() => {
            console.log('=== QUICK ELEMENT CHECK ===');
            const toggle = document.getElementById('nav-toggle');
            const menu = document.getElementById('nav-menu');
            console.log('Toggle found:', !!toggle, toggle);
            console.log('Menu found:', !!menu, menu);
            
            if (toggle && menu) {
                console.log('✅ Elements exist! Adding manual click handler...');
                toggle.addEventListener('click', function(e) {
                    console.log('🔥 MANUAL CLICK DETECTED!');
                    e.preventDefault();
                    
                    const isActive = menu.classList.contains('manual-active');
                    if (isActive) {
                        menu.classList.remove('manual-active');
                        menu.style.cssText = '';
                        toggle.classList.remove('active');
                        console.log('Menu closed manually');
                    } else {
                        menu.classList.add('manual-active');
                        menu.style.cssText = `
                            position: fixed !important;
                            top: 0 !important;
                            left: 0 !important;
                            width: 100vw !important;
                            height: 100vh !important;
                            background: rgba(255, 255, 255, 0.98) !important;
                            display: flex !important;
                            flex-direction: column !important;
                            justify-content: center !important;
                            align-items: center !important;
                            z-index: 99999 !important;
                            padding: 2rem !important;
                        `;
                        toggle.classList.add('active');
                        console.log('Menu opened manually');
                    }
                });
            }
        }, 1000);
    </script>
</body>

</html>
