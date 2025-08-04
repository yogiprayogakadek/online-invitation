<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="403 Akses Ditolak - e-undanganku">
    <meta name="keywords" content="403, forbidden, access denied, e-undanganku">
    <meta name="author" content="e-undanganku">
    <title>403 Akses Ditolak - e-undanganku</title>

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
            background: linear-gradient(45deg, #000000, #330000, #1a0000);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Floating Lock Particles */
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
            background: rgba(255, 69, 58, 0.6);
            border-radius: 50%;
            animation: float 25s infinite linear;
        }

        .particle:nth-child(odd) {
            background: rgba(255, 159, 10, 0.4);
            animation-duration: 30s;
        }

        .particle:nth-child(3n) {
            background: rgba(255, 255, 255, 0.2);
            animation-duration: 35s;
            width: 6px;
            height: 6px;
        }

        .particle:nth-child(4n) {
            background: rgba(255, 99, 71, 0.5);
            animation-duration: 40s;
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

        /* Lock Animation */
        .lock-animation {
            position: absolute;
            top: 15%;
            right: 15%;
            animation: lockShake 3s ease-in-out infinite;
            opacity: 0.3;
        }

        @keyframes lockShake {
            0%, 100% { transform: translateX(0) rotate(0deg); }
            25% { transform: translateX(-5px) rotate(-2deg); }
            75% { transform: translateX(5px) rotate(2deg); }
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
            background: linear-gradient(135deg, #ff453a, #ff6b35);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 2rem;
            color: white;
            box-shadow: 0 8px 32px rgba(255, 69, 58, 0.3);
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
            color: #ff453a;
            margin-bottom: 1rem;
            text-shadow: 0 0 30px rgba(255, 69, 58, 0.5);
            animation: fadeInUp 1s ease-out 0.2s both, forbidden 3s infinite;
            font-family: 'Inter', sans-serif;
            position: relative;
        }

        @keyframes forbidden {
            0%, 100% { 
                text-shadow: 0 0 30px rgba(255, 69, 58, 0.5);
                transform: scale(1);
            }
            50% { 
                text-shadow: 0 0 50px rgba(255, 69, 58, 0.8), 0 0 80px rgba(255, 69, 58, 0.3);
                transform: scale(1.02);
            }
        }

        /* Lock Icon */
        .lock-icon {
            font-size: 4rem;
            color: #ff9f0a;
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease-out 0.3s both, lockPulse 2s infinite;
        }

        @keyframes lockPulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
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
            background: linear-gradient(135deg, #ffffff, #ff9f0a);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        .error-subtitle {
            font-size: 1.5rem;
            color: #ff9f0a;
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

        /* Security Info */
        .security-info {
            background: rgba(255, 69, 58, 0.1);
            border: 1px solid rgba(255, 69, 58, 0.3);
            border-radius: 12px;
            padding: 2rem;
            margin-bottom: 3rem;
            backdrop-filter: blur(10px);
            animation: fadeInUp 1s ease-out 1s both;
        }

        .security-info h3 {
            color: #ff453a;
            font-size: 1.3rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .security-reasons {
            text-align: left;
            margin-bottom: 1.5rem;
        }

        .security-reasons ul {
            list-style: none;
            padding: 0;
        }

        .security-reasons li {
            color: #d0d0d0;
            margin-bottom: 0.75rem;
            padding-left: 2rem;
            position: relative;
        }

        .security-reasons li::before {
            content: '🔒';
            position: absolute;
            left: 0;
            font-size: 1.2rem;
        }

        .security-contact {
            background: rgba(255, 159, 10, 0.1);
            border: 1px solid rgba(255, 159, 10, 0.3);
            border-radius: 8px;
            padding: 1rem;
            color: #ff9f0a;
            font-size: 0.9rem;
        }

        /* Status Indicators */
        .status-indicators {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-bottom: 3rem;
            animation: fadeInUp 1s ease-out 1.2s both;
        }

        .status-item {
            text-align: center;
            padding: 1.5rem;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            min-width: 120px;
        }

        .status-icon {
            font-size: 2rem;
            margin-bottom: 0.5rem;
            display: block;
        }

        .status-label {
            font-size: 0.9rem;
            color: #b0b0b0;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .status-forbidden {
            border-color: rgba(255, 69, 58, 0.3);
            background: rgba(255, 69, 58, 0.1);
        }

        .status-forbidden .status-icon {
            color: #ff453a;
            animation: forbidden-icon 2s infinite;
        }

        @keyframes forbidden-icon {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
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

        .btn-warning {
            background: linear-gradient(135deg, #ff9f0a, #ff8c00);
            color: white;
            box-shadow: 0 8px 32px rgba(255, 159, 10, 0.3);
        }

        .btn-warning:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 40px rgba(255, 159, 10, 0.4);
        }

        .btn-outline {
            background: transparent;
            color: #ffffff;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .btn-outline:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: #ff9f0a;
            color: #ff9f0a;
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

            .lock-animation {
                display: none;
            }

            .status-indicators {
                gap: 1rem;
            }

            .status-item {
                padding: 1rem;
                min-width: 100px;
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

            .lock-icon {
                font-size: 3rem;
            }

            .status-indicators {
                gap: 0.5rem;
            }

            .status-item {
                padding: 0.75rem 0.5rem;
                min-width: 80px;
            }

            .status-icon {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <!-- Animated Background -->
    <div class="animated-bg"></div>

    <!-- Floating Particles -->
    <div class="particles" id="particles"></div>

    <!-- Lock Animation -->
    <div class="lock-animation">
        <svg width="80" height="80" viewBox="0 0 24 24" fill="rgba(255, 69, 58, 0.3)">
            <path d="M18,8A2,2 0 0,1 20,10V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V10A2,2 0 0,1 6,8H7V6A5,5 0 0,1 12,1A5,5 0 0,1 17,6V8H18M12,3A3,3 0 0,0 9,6V8H15V6A3,3 0 0,0 12,3Z"/>
        </svg>
    </div>

    <!-- Main Container -->
    <div class="error-container">
        <!-- Logo -->
        <div class="logo">
            <div class="logo-icon">E</div>
            <div class="logo-text">e-undanganku</div>
        </div>

        <!-- Lock Icon -->
        <div class="lock-icon">🔒</div>

        <!-- Error Code -->
        <div class="error-code">403</div>

        <!-- Main Content -->
        <div class="error-content">
            <h1 class="error-title">Akses Ditolak</h1>
            <h2 class="error-subtitle">Maaf, Anda Tidak Memiliki Izin</h2>
            <p class="error-description">
                Anda tidak memiliki izin untuk mengakses halaman ini. Hal ini mungkin karena 
                Anda belum login, tidak memiliki role yang sesuai, atau halaman ini memerlukan 
                tingkat akses khusus.
            </p>
        </div>

        <!-- Security Info -->
        <div class="security-info">
            <h3>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,7C13.4,7 14.8,8.6 14.8,10V11.5C15.4,11.5 16,12.1 16,12.7V16.2C16,16.8 15.4,17.3 14.8,17.3H9.2C8.6,17.3 8,16.8 8,16.2V12.8C8,12.2 8.6,11.6 9.2,11.6V10C9.2,8.6 10.6,7 12,7M12,8.2C11.2,8.2 10.5,8.7 10.5,10V11.5H13.6V10C13.6,8.7 12.8,8.2 12,8.2Z"/>
                </svg>
                Kemungkinan Penyebab:
            </h3>
            <div class="security-reasons">
                <ul>
                    <li>Anda belum login ke sistem</li>
                    <li>Session Anda telah berakhir</li>
                    <li>Akun Anda tidak memiliki izin untuk halaman ini</li>
                    <li>Halaman ini memerlukan verifikasi tambahan</li>
                    <li>Terjadi kesalahan pada sistem keamanan</li>
                </ul>
            </div>
            <div class="security-contact">
                💡 <strong>Tips:</strong> Coba login ulang atau hubungi administrator jika Anda yakin memiliki akses yang sesuai.
            </div>
        </div>

        <!-- Status Indicators -->
        <div class="status-indicators">
            <div class="status-item status-forbidden">
                <span class="status-icon">🚫</span>
                <span class="status-label">Akses Ditolak</span>
            </div>
            <div class="status-item">
                <span class="status-icon">🔐</span>
                <span class="status-label">Keamanan</span>
            </div>
            <div class="status-item">
                <span class="status-icon">👤</span>
                <span class="status-label">Login Required</span>
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
            <a href="{{ url('/login') }}" class="btn btn-warning">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M10,17V14H3V10H10V7L15,12L10,17M10,2H19A2,2 0 0,1 21,4V20A2,2 0 0,1 19,22H10A2,2 0 0,1 8,20V18H10V20H19V4H10V6H8V4A2,2 0 0,1 10,2Z"/>
                </svg>
                Login Sekarang
            </a>
            <button onclick="history.back()" class="btn btn-outline">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/>
                </svg>
                Halaman Sebelumnya
            </button>
            <a href="mailto:admin@e-undanganku.com" class="btn btn-social">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                </svg>
                Hubungi Admin
            </a>
        </div>
    </div>

    <script>
        // Create floating particles
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = 40;

            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 25 + 's';
                particle.style.animationDuration = (Math.random() * 15 + 25) + 's';
                particlesContainer.appendChild(particle);
            }
        }

        // Initialize everything when page loads
        document.addEventListener('DOMContentLoaded', function() {
            createParticles();
        });

        // Add smooth scrolling and button interactions
        document.querySelectorAll('.btn').forEach(button => {
            button.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px) scale(1.02)';
            });
            
            button.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Security animation
        function addSecurityEffect() {
            const lockIcon = document.querySelector('.lock-icon');
            
            setInterval(() => {
                if (Math.random() < 0.15) { // 15% chance every interval
                    lockIcon.style.transform = 'scale(1.2) rotate(10deg)';
                    lockIcon.style.color = '#ff453a';
                    setTimeout(() => {
                        lockIcon.style.transform = 'scale(1) rotate(0deg)';
                        lockIcon.style.color = '#ff9f0a';
                    }, 200);
                }
            }, 3000);
        }

        // Start security animation
        addSecurityEffect();
    </script>
</body>

</html>