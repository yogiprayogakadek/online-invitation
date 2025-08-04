<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="404 Halaman Tidak Ditemukan - e-undanganku">
    <meta name="keywords" content="404, not found, e-undanganku">
    <meta name="author" content="e-undanganku">
    <title>404 Halaman Tidak Ditemukan - e-undanganku</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&display=swap"
        rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #000000;
            color: #ffffff;
            overflow-x: hidden;
            min-height: 100vh;
            position: relative;
        }

        /* Animated Background */
        .animated-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            background: linear-gradient(45deg, #000000, #001a33, #000000);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Floating Search Particles */
        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 2;
            pointer-events: none;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(0, 123, 255, 0.6);
            border-radius: 50%;
            animation: float 20s infinite linear;
        }

        .particle:nth-child(odd) {
            background: rgba(255, 255, 255, 0.3);
            animation-duration: 25s;
        }

        .particle:nth-child(3n) {
            background: rgba(64, 224, 255, 0.4);
            animation-duration: 30s;
            width: 6px;
            height: 6px;
        }

        .particle:nth-child(4n) {
            background: rgba(0, 191, 255, 0.5);
            animation-duration: 35s;
            width: 8px;
            height: 8px;
        }

        @keyframes float {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100vh) rotate(360deg);
                opacity: 0;
            }
        }

        /* Search Animation */
        .search-animation {
            position: absolute;
            top: 20%;
            right: 10%;
            animation: searchFloat 4s ease-in-out infinite;
            opacity: 0.3;
        }

        @keyframes searchFloat {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }

        /* Main Container */
        .error-container {
            position: relative;
            z-index: 10;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
            text-align: center;
        }

        /* Logo */
        .logo {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 3rem;
            animation: fadeInUp 1s ease-out;
        }

        .logo-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #007bff, #0056b3);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 2rem;
            color: white;
            box-shadow: 0 8px 32px rgba(0, 123, 255, 0.3);
            animation: pulse 2s infinite;
        }

        .logo-text {
            font-size: 2rem;
            font-weight: 700;
            color: #ffffff;
            font-family: 'Playfair Display', serif;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        /* Error Code */
        .error-code {
            font-size: 8rem;
            font-weight: 900;
            color: #007bff;
            margin-bottom: 1rem;
            text-shadow: 0 0 30px rgba(0, 123, 255, 0.5);
            animation: fadeInUp 1s ease-out 0.2s both, bounce 2s infinite;
            font-family: 'Inter', sans-serif;
            position: relative;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        /* Main Content */
        .error-content {
            max-width: 600px;
            margin-bottom: 3rem;
        }

        .error-title {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, #ffffff, #40e0ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        .error-subtitle {
            font-size: 1.5rem;
            color: #40e0ff;
            margin-bottom: 1rem;
            font-weight: 600;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .error-description {
            font-size: 1.1rem;
            color: #b0b0b0;
            line-height: 1.6;
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease-out 0.8s both;
        }

        /* Search Box */
        .search-container {
            max-width: 500px;
            margin: 2rem auto;
            animation: fadeInUp 1s ease-out 1s both;
        }

        .search-box {
            display: flex;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 1rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            margin-bottom: 1rem;
        }

        .search-input {
            flex: 1;
            background: transparent;
            border: none;
            color: #ffffff;
            font-size: 1rem;
            outline: none;
            padding: 0.5rem;
        }

        .search-input::placeholder {
            color: #b0b0b0;
        }

        .search-btn {
            background: linear-gradient(135deg, #007bff, #0056b3);
            border: none;
            border-radius: 8px;
            padding: 0.5rem 1rem;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .search-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 16px rgba(0, 123, 255, 0.3);
        }

        /* Popular Links */
        .popular-links {
            margin-bottom: 3rem;
            animation: fadeInUp 1s ease-out 1.2s both;
        }

        .popular-links h3 {
            color: #40e0ff;
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }

        .links-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            max-width: 600px;
        }

        .link-item {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            padding: 1rem;
            text-decoration: none;
            color: #b0b0b0;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .link-item:hover {
            background: rgba(0, 123, 255, 0.1);
            border-color: #007bff;
            color: #40e0ff;
            transform: translateY(-2px);
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
            animation: fadeInUp 1s ease-out 1.4s both;
        }

        .btn {
            padding: 1rem 2rem;
            border: none;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn:hover::before {
            left: 100%;
        }

        .btn-primary {
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
            box-shadow: 0 8px 32px rgba(0, 123, 255, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 40px rgba(0, 123, 255, 0.4);
        }

        .btn-outline {
            background: transparent;
            color: #ffffff;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .btn-outline:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: #40e0ff;
            color: #40e0ff;
            transform: translateY(-2px);
        }

        .btn-social {
            background: rgba(255, 255, 255, 0.05);
            color: #b0b0b0;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .btn-social:hover {
            background: rgba(255, 255, 255, 0.1);
            color: #ffffff;
            transform: translateY(-2px);
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .error-code {
                font-size: 5rem;
            }

            .error-title {
                font-size: 2.5rem;
            }

            .search-animation {
                display: none;
            }

            .links-grid {
                grid-template-columns: 1fr;
            }

            .action-buttons {
                flex-direction: column;
                align-items: center;
            }

            .btn {
                width: 100%;
                max-width: 300px;
                justify-content: center;
            }
        }

        @media (max-width: 480px) {
            .error-container {
                padding: 1rem;
            }

            .logo {
                margin-bottom: 2rem;
            }

            .logo-icon {
                width: 50px;
                height: 50px;
                font-size: 1.5rem;
            }

            .logo-text {
                font-size: 1.5rem;
            }

            .error-code {
                font-size: 4rem;
            }

            .error-title {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>
    <!-- Animated Background -->
    <div class="animated-bg"></div>

    <!-- Floating Particles -->
    <div class="particles" id="particles"></div>

    <!-- Search Animation -->
    <div class="search-animation">
        <svg width="100" height="100" viewBox="0 0 24 24" fill="rgba(0, 123, 255, 0.3)">
            <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
        </svg>
    </div>

    <!-- Main Container -->
    <div class="error-container">
        <!-- Logo -->
        <div class="logo">
            <div class="logo-icon">E</div>
            <div class="logo-text">e-undanganku</div>
        </div>

        <!-- Error Code -->
        <div class="error-code">404</div>

        <!-- Main Content -->
        <div class="error-content">
            <h1 class="error-title">Halaman Tidak Ditemukan</h1>
            <h2 class="error-subtitle">Oops! Kami Tidak Dapat Menemukan Halaman Ini</h2>
            <p class="error-description">
                Halaman yang Anda cari mungkin telah dipindahkan, dihapus, atau URL yang Anda masukkan salah. 
                Jangan khawatir, mari kita bantu Anda menemukan apa yang Anda cari.
            </p>
        </div>

        <!-- Search Box -->
        <div class="search-container">
            <div class="search-box">
                <input type="text" class="search-input" placeholder="Cari template, fitur, atau halaman..." id="searchInput">
                <button class="search-btn" onclick="performSearch()">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Popular Links -->
        <div class="popular-links">
            <h3>Halaman Populer:</h3>
            <div class="links-grid">
                <a href="{{ url('/') }}" class="link-item">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
                    </svg>
                    Beranda
                </a>
                <a href="{{ url('/#templates') }}" class="link-item">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                    </svg>
                    Template
                </a>
                <a href="{{ url('/#features') }}" class="link-item">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                    </svg>
                    Fitur
                </a>
                <a href="{{ url('/#pricing') }}" class="link-item">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1.41 16.09V20h-2.67v-1.93c-1.71-.36-3.16-1.46-3.27-3.4h1.96c.1 1.05.82 1.87 2.65 1.87 1.96 0 2.4-.98 2.4-1.59 0-.83-.44-1.61-2.67-2.14-2.48-.6-4.18-1.62-4.18-3.67 0-1.72 1.39-2.84 3.11-3.21V4h2.67v1.95c1.86.45 2.79 1.86 2.85 3.39H14.3c-.05-1.11-.64-1.87-2.22-1.87-1.5 0-2.4.68-2.4 1.64 0 .84.65 1.39 2.67 1.91s4.18 1.39 4.18 3.91c-.01 1.83-1.38 2.83-3.12 3.16z"/>
                    </svg>
                    Harga
                </a>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="action-buttons">
            <a href="{{ url('/') }}" class="btn btn-primary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
                </svg>
                Kembali ke Beranda
            </a>
            <button onclick="history.back()" class="btn btn-outline">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/>
                </svg>
                Halaman Sebelumnya
            </button>
            <a href="mailto:support@e-undanganku.com" class="btn btn-social">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                </svg>
                Laporkan Masalah
            </a>
        </div>
    </div>

    <script>
        // Create floating particles
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = 50;

            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 20 + 's';
                particle.style.animationDuration = (Math.random() * 10 + 20) + 's';
                particlesContainer.appendChild(particle);
            }
        }

        // Search functionality
        function performSearch() {
            const searchTerm = document.getElementById('searchInput').value.trim();
            if (searchTerm) {
                // Redirect to home page with search parameter (you can implement actual search)
                window.location.href = `{{ url('/') }}?search=${encodeURIComponent(searchTerm)}`;
            }
        }

        // Enter key search
        document.getElementById('searchInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                performSearch();
            }
        });

        // Initialize everything when page loads
        document.addEventListener('DOMContentLoaded', function() {
            createParticles();
        });

        // Add smooth scrolling and button interactions
        document.querySelectorAll('.btn, .link-item').forEach(element => {
            element.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px) scale(1.02)';
            });
            
            element.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });
    </script>
</body>

</html>