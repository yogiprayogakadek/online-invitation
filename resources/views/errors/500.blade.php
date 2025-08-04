<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="500 Server Error - e-undanganku">
    <meta name="keywords" content="server error, 500, e-undanganku">
    <meta name="author" content="e-undanganku">
    <title>500 Server Error - e-undanganku</title>

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
            background: linear-gradient(45deg, #000000, #1a0000, #000000);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Floating Error Particles */
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
            width: 6px;
            height: 6px;
            background: rgba(255, 69, 58, 0.6);
            border-radius: 50%;
            animation: float 25s infinite linear;
        }

        .particle:nth-child(odd) {
            background: rgba(255, 255, 255, 0.2);
            animation-duration: 30s;
            width: 4px;
            height: 4px;
        }

        .particle:nth-child(3n) {
            background: rgba(255, 159, 10, 0.4);
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

        /* Glitch Effect */
        .glitch {
            position: relative;
            animation: glitch 2s infinite;
        }

        @keyframes glitch {
            0%, 100% { transform: translate(0); }
            20% { transform: translate(-2px, 2px); }
            40% { transform: translate(-2px, -2px); }
            60% { transform: translate(2px, 2px); }
            80% { transform: translate(2px, -2px); }
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
            animation: fadeInUp 1s ease-out 0.2s both, errorPulse 3s infinite;
            font-family: 'Inter', sans-serif;
        }

        @keyframes errorPulse {
            0%, 100% { text-shadow: 0 0 30px rgba(255, 69, 58, 0.5); }
            50% { text-shadow: 0 0 50px rgba(255, 69, 58, 0.8), 0 0 80px rgba(255, 69, 58, 0.3); }
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
            background: linear-gradient(135deg, #ffffff, #ff6b35);
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

        /* Error Details */
        .error-details {
            background: rgba(255, 69, 58, 0.1);
            border: 1px solid rgba(255, 69, 58, 0.3);
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 3rem;
            backdrop-filter: blur(10px);
            animation: fadeInUp 1s ease-out 1s both;
        }

        .error-details h3 {
            color: #ff453a;
            font-size: 1.2rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .error-details ul {
            list-style: none;
            padding: 0;
            text-align: left;
        }

        .error-details li {
            color: #d0d0d0;
            margin-bottom: 0.5rem;
            padding-left: 1.5rem;
            position: relative;
        }

        .error-details li::before {
            content: '•';
            color: #ff9f0a;
            position: absolute;
            left: 0;
            font-weight: bold;
        }

        /* Status Indicator */
        .status-indicator {
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

        .status-error {
            border-color: rgba(255, 69, 58, 0.3);
            background: rgba(255, 69, 58, 0.1);
        }

        .status-error .status-icon {
            color: #ff453a;
            animation: shake 2s infinite;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
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

        .btn-danger {
            background: linear-gradient(135deg, #ff453a, #ff6b35);
            color: white;
            box-shadow: 0 8px 32px rgba(255, 69, 58, 0.3);
        }

        .btn-danger:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 40px rgba(255, 69, 58, 0.4);
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

            .status-indicator {
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

            .status-indicator {
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

    <!-- Main Container -->
    <div class="error-container">
        <!-- Logo -->
        <div class="logo">
            <div class="logo-icon">E</div>
            <div class="logo-text">e-undanganku</div>
        </div>

        <!-- Error Code -->
        <div class="error-code glitch">500</div>

        <!-- Main Content -->
        <div class="error-content">
            <h1 class="error-title">Server Error</h1>
            <h2 class="error-subtitle">Oops! Terjadi Kesalahan Server</h2>
            <p class="error-description">
                Maaf, server kami sedang mengalami masalah teknis. Tim teknis kami telah diberitahu 
                dan sedang bekerja untuk memperbaiki masalah ini sesegera mungkin.
            </p>
        </div>

        <!-- Error Details -->
        <div class="error-details">
            <h3>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                </svg>
                Apa yang bisa Anda lakukan:
            </h3>
            <ul>
                <li>Refresh halaman ini dalam beberapa menit</li>
                <li>Periksa koneksi internet Anda</li>
                <li>Coba akses halaman lain di website kami</li>
                <li>Hubungi tim support jika masalah berlanjut</li>
                <li>Kembali ke halaman utama</li>
            </ul>
        </div>

        <!-- Status Indicator -->
        <div class="status-indicator">
            <div class="status-item status-error">
                <span class="status-icon">⚠️</span>
                <span class="status-label">Server Error</span>
            </div>
            <div class="status-item">
                <span class="status-icon">🔧</span>
                <span class="status-label">Perbaikan</span>
            </div>
            <div class="status-item">
                <span class="status-icon">⏱️</span>
                <span class="status-label">Sementara</span>
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
            <button onclick="location.reload()" class="btn btn-danger">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M17.65 6.35C16.2 4.9 14.21 4 12 4c-4.42 0-7.99 3.58-7.99 8s3.57 8 7.99 8c3.73 0 6.84-2.55 7.73-6h-2.08c-.82 2.33-3.04 4-5.65 4-3.31 0-6-2.69-6-6s2.69-6 6-6c1.66 0 3.14.69 4.22 1.78L13 11h7V4l-2.35 2.35z"/>
                </svg>
                Refresh Halaman
            </button>
            <a href="mailto:support@e-undanganku.com" class="btn btn-outline">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                </svg>
                Hubungi Support
            </a>
            <a href="https://wa.me/6281234567890" class="btn btn-social" target="_blank">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.893 3.488"/>
                </svg>
                WhatsApp Support
            </a>
        </div>
    </div>

    <script>
        // Create floating error particles
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

        // Add glitch effect to error code
        function addGlitchEffect() {
            const errorCode = document.querySelector('.error-code');
            
            setInterval(() => {
                if (Math.random() < 0.1) { // 10% chance every interval
                    errorCode.style.textShadow = '2px 0 #ff453a, -2px 0 #00ff00';
                    setTimeout(() => {
                        errorCode.style.textShadow = '0 0 30px rgba(255, 69, 58, 0.5)';
                    }, 100);
                }
            }, 2000);
        }

        // Initialize everything when page loads
        document.addEventListener('DOMContentLoaded', function() {
            createParticles();
            addGlitchEffect();
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

        // Auto refresh option (optional)
        let autoRefreshTimer;
        function startAutoRefresh() {
            autoRefreshTimer = setTimeout(() => {
                if (confirm('Halaman akan di-refresh otomatis. Lanjutkan?')) {
                    location.reload();
                }
            }, 60000); // 60 seconds
        }

        // Uncomment the line below if you want auto-refresh after 1 minute
        // startAutoRefresh();
    </script>
</body>

</html>