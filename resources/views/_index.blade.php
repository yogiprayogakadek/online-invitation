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

    <!-- useAnimations -->
    <script src="https://www.useanimations.com/lib/useAnimations.js"></script>

    <!-- Three.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    <!-- Mobile Menu Styles -->
    <style>
        /* Hamburger Menu Styles */
        .nav-toggle {
            display: none;
            flex-direction: column;
            gap: 4px;
            background: rgba(255, 255, 255, 0.9);
            border: 2px solid #000000;
            border-radius: 8px;
            cursor: pointer;
            padding: 12px;
            z-index: 1002;
            position: fixed;
            top: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            justify-content: center;
            align-items: center;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .nav-toggle:hover {
            background: rgba(255, 255, 255, 1);
            transform: scale(1.05);
        }

        .nav-toggle span {
            width: 20px;
            height: 3px;
            background: #000000;
            border-radius: 2px;
            transition: all 0.3s ease;
            display: block;
        }

        .nav-toggle.active {
            background: rgba(255, 255, 255, 0.95);
            border-color: #ff0000;
        }

        .nav-toggle.active span {
            background: #ff0000;
        }

        .nav-toggle.active span:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }

        .nav-toggle.active span:nth-child(2) {
            opacity: 0;
        }

        .nav-toggle.active span:nth-child(3) {
            transform: rotate(-45deg) translate(5px, -5px);
        }

        /* Mobile Hamburger Button */
        .mobile-nav-toggle {
            display: none;
            flex-direction: column;
            gap: 4px;
            background: rgba(255, 255, 255, 0.9);
            border: 2px solid #000000;
            border-radius: 8px;
            cursor: pointer;
            padding: 12px;
            z-index: 1002;
            position: fixed;
            top: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            justify-content: center;
            align-items: center;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .mobile-nav-toggle:hover {
            background: rgba(255, 255, 255, 1);
            transform: scale(1.05);
        }

        .mobile-nav-toggle span {
            width: 20px;
            height: 3px;
            background: #000000;
            border-radius: 2px;
            transition: all 0.3s ease;
            display: block;
        }

        .mobile-nav-toggle.active {
            background: rgba(255, 255, 255, 0.95);
            border-color: #ff0000;
        }

        .mobile-nav-toggle.active span {
            background: #ff0000;
        }

        .mobile-nav-toggle.active span:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }

        .mobile-nav-toggle.active span:nth-child(2) {
            opacity: 0;
        }

        .mobile-nav-toggle.active span:nth-child(3) {
            transform: rotate(-45deg) translate(5px, -5px);
        }

        /* Footer Styles */
        .footer {
            background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
            color: #ffffff;
            padding: 4rem 0 2rem;
            margin-top: 4rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 4rem;
            margin-bottom: 3rem;
        }

        .footer-brand {
            max-width: 400px;
        }

        .brand-logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 1.5rem;
        }

        .brand-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #007bff, #0056b3);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.25rem;
            color: white;
        }

        .brand-text {
            font-size: 1.5rem;
            font-weight: 600;
            color: #ffffff;
        }

        .brand-description {
            color: #b0b0b0;
            line-height: 1.6;
            margin: 0;
        }

        .footer-links {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
        }

        .footer-column {
            display: flex;
            flex-direction: column;
        }

        .footer-title {
            color: #ffffff;
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .footer-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-list li {
            margin-bottom: 0.5rem;
        }

        .footer-list a {
            color: #b0b0b0;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-list a:hover {
            color: #007bff;
        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 2rem;
            border-top: 1px solid #404040;
        }

        .copyright {
            color: #b0b0b0;
            margin: 0;
        }

        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-link {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            color: #b0b0b0;
            text-decoration: none;
            transition: all 0.3s ease;
            border: 1px solid transparent;
        }

        .social-link:hover {
            background: rgba(0, 123, 255, 0.1);
            border-color: #007bff;
            color: #007bff;
            transform: translateY(-2px);
        }

        .social-link svg {
            width: 18px;
            height: 18px;
        }

        .social-link span {
            font-size: 0.9rem;
            font-weight: 500;
        }

        /* Footer Responsive */
        @media (max-width: 768px) {
            .footer {
                padding: 3rem 0 1.5rem;
            }

            .footer-content {
                grid-template-columns: 1fr;
                gap: 2rem;
                text-align: center;
            }

            .footer-links {
                grid-template-columns: repeat(2, 1fr);
                gap: 1.5rem;
            }

            .footer-bottom {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }

            .social-links {
                justify-content: center;
                flex-wrap: wrap;
            }

            .social-link span {
                display: none;
            }

            .social-link {
                padding: 0.75rem;
                min-width: 44px;
                justify-content: center;
            }
        }

        /* Mobile Menu Overlay */
        .mobile-menu-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(20px);
            z-index: 1000;
            display: none;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        .mobile-menu-overlay.active {
            display: flex;
        }

        .mobile-menu-overlay .nav-link {
            font-size: 1.5rem;
            margin: 1rem 0;
            color: #000000;
            text-decoration: none;
            display: block;
            padding: 10px;
            text-align: center;
            transition: color 0.3s ease;
        }

        .mobile-menu-overlay .nav-link:hover {
            color: #007bff;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .nav-toggle {
                display: none !important;
            }

            .mobile-nav-toggle {
                display: flex !important;
            }

            .nav-menu {
                display: none !important;
            }

            .nav-actions .btn {
                display: none !important;
            }
        }
    </style>
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

    <!-- Mobile Hamburger Button (Always Visible on Mobile) -->
    <button class="mobile-nav-toggle" id="mobile-nav-toggle">
        <span></span>
        <span></span>
        <span></span>
    </button>

    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu-overlay" id="mobile-menu-overlay">
        <a href="#home" class="nav-link">Beranda</a>
        <a href="#features" class="nav-link">Fitur</a>
        <a href="#templates" class="nav-link">Template</a>
        <a href="#pricing" class="nav-link">Harga</a>
        <a href="#testimonials" class="nav-link">Testimoni</a>
        <a href="#contact" class="nav-link">Kontak</a>
    </div>

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
                            "Fitur RSVP otomatis sangat membantu! Kami bisa langsung tahu siapa saja yang akan hadir
                            tanpa harus menanyakan satu per satu."
                        </p>
                    </div>
                    <div class="testimonial-author">
                        <img class="lazy author-avatar"
                            data-src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=60&h=60&fit=crop&crop=face"
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
                            "Template-nya sangat beragam dan mudah dikustomisasi. Dalam hitungan menit,
                            undangan ulang tahun anak saya sudah jadi!"
                        </p>
                    </div>
                    <div class="testimonial-author">
                        <img class="lazy author-avatar"
                            data-src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=60&h=60&fit=crop&crop=face"
                            alt="Siti Nurhaliza">
                        <div class="author-info">
                            <h4 class="author-name">Siti Nurhaliza</h4>
                            <p class="author-role">Ibu Rumah Tangga</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2 class="cta-title">Siap Membuat Undangan Impian Anda?</h2>
                <p class="cta-description">
                    Bergabunglah dengan ribuan pengguna yang telah mempercayai e-undanganku
                    untuk acara spesial mereka.
                </p>
                <button class="btn btn-primary btn-large">
                    <span>Mulai Sekarang - Gratis!</span>
                    <div class="btn-icon"></div>
                </button>
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
                        Solusi terdepan untuk undangan digital yang modern, elegan, dan mudah digunakan.
                        Ciptakan momen tak terlupakan dengan teknologi terkini.
                    </p>
                </div>

                <div class="footer-links">
                    <div class="footer-column">
                        <h4 class="footer-title">Produk</h4>
                        <ul class="footer-list">
                            <li><a href="#templates">Template</a></li>
                            <li><a href="#features">Fitur</a></li>
                            <li><a href="#pricing">Harga</a></li>
                            <li><a href="#">Demo</a></li>
                        </ul>
                    </div>

                    <div class="footer-column">
                        <h4 class="footer-title">Perusahaan</h4>
                        <ul class="footer-list">
                            <li><a href="#">Tentang Kami</a></li>
                            <li><a href="#">Karir</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#contact">Kontak</a></li>
                        </ul>
                    </div>

                    <div class="footer-column">
                        <h4 class="footer-title">Dukungan</h4>
                        <ul class="footer-list">
                            <li><a href="#">Bantuan</a></li>
                            <li><a href="#">Tutorial</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Live Chat</a></li>
                        </ul>
                    </div>

                    <div class="footer-column">
                        <h4 class="footer-title">Legal</h4>
                        <ul class="footer-list">
                            <li><a href="#">Privasi</a></li>
                            <li><a href="#">Syarat & Ketentuan</a></li>
                            <li><a href="#">Cookie Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p class="copyright">
                    © 2024 e-undanganku. Semua hak dilindungi.
                </p>
                <div class="social-links">
                    <a href="#" class="social-link" title="Facebook">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                        <span>Facebook</span>
                    </a>
                    <a href="#" class="social-link" title="Instagram">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                        <span>Instagram</span>
                    </a>
                    <a href="#" class="social-link" title="Twitter">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                        </svg>
                        <span>Twitter</span>
                    </a>
                    <a href="#" class="social-link" title="LinkedIn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                        </svg>
                        <span>LinkedIn</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Main JavaScript -->
    <script src="{{ asset('assets/js/main.js') }}" defer></script>

    <!-- Simple Mobile Menu JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navToggle = document.getElementById('nav-toggle');
            const mobileNavToggle = document.getElementById('mobile-nav-toggle');
            const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
            const mobileNavLinks = mobileMenuOverlay.querySelectorAll('.nav-link');

            // Function to toggle menu
            function toggleMenu() {
                const activeButton = window.innerWidth <= 768 ? mobileNavToggle : navToggle;
                if (activeButton) {
                    activeButton.classList.toggle('active');
                    mobileMenuOverlay.classList.toggle('active');

                    // Prevent body scroll when menu is open
                    if (mobileMenuOverlay.classList.contains('active')) {
                        document.body.style.overflow = 'hidden';
                    } else {
                        document.body.style.overflow = '';
                    }
                }
            }

            // Function to close menu
            function closeMenu() {
                if (navToggle) navToggle.classList.remove('active');
                if (mobileNavToggle) mobileNavToggle.classList.remove('active');
                mobileMenuOverlay.classList.remove('active');
                document.body.style.overflow = '';
            }

            // Add event listeners for both buttons
            if (navToggle) {
                navToggle.addEventListener('click', toggleMenu);
                navToggle.addEventListener('touchstart', function(e) {
                    e.preventDefault();
                    toggleMenu();
                });
            }

            if (mobileNavToggle) {
                mobileNavToggle.addEventListener('click', toggleMenu);
                mobileNavToggle.addEventListener('touchstart', function(e) {
                    e.preventDefault();
                    toggleMenu();
                });
            }

            // Close menu when clicking nav links
            mobileNavLinks.forEach(link => {
                link.addEventListener('click', closeMenu);
            });

            // Close menu when clicking outside
            mobileMenuOverlay.addEventListener('click', function(e) {
                if (e.target === mobileMenuOverlay) {
                    closeMenu();
                }
            });
        });
    </script>
</body>

</html>
