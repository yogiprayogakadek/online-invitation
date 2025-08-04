<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="419 Halaman Kedaluwarsa - e-undanganku">
    <meta name="keywords" content="419, page expired, session expired, e-undanganku">
    <meta name="author" content="e-undanganku">
    <title>419 Halaman Kedaluwarsa - e-undanganku</title>

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
            background: linear-gradient(45deg, #000000, #1a1a00, #331a00);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Floating Clock Particles */
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
            background: rgba(255, 193, 7, 0.6);
            border-radius: 50%;
            animation: float 22s infinite linear;
        }

        .particle:nth-child(odd) {
            background: rgba(255, 159, 10, 0.5);
            animation-duration: 28s;
        }

        .particle:nth-child(3n) {
            background: rgba(255, 255, 255, 0.3);
            animation-duration: 32s;
            width: 6px;
            height: 6px;
        }

        .particle:nth-child(4n) {
            background: rgba(255, 215, 0, 0.4);
            animation-duration: 38s;
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

        /* Clock Animation */
        .clock-animation {
            position: absolute;
            top: 20%;
            left: 10%;
            animation: clockTick 2s ease-in-out infinite;
            opacity: 0.3;
        }

        @keyframes clockTick {
            0%, 100% { transform: rotate(0deg) scale(1); }
            50% { transform: rotate(5deg) scale(1.05); }
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
            background: linear-gradient(135deg, #ffc107, #ff8f00);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 2rem;
            color: white;
            box-shadow: 0 8px 32px rgba(255, 193, 7, 0.3);
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
            color: #ffc107;
            margin-bottom: 1rem;
            text-shadow: 0 0 30px rgba(255, 193, 7, 0.5);
            animation: fadeInUp 1s ease-out 0.2s both, expired 4s infinite;
            font-family: 'Inter', sans-serif;
            position: relative;
        }

        @keyframes expired {
            0%, 100% { 
                text-shadow: 0 0 30px rgba(255, 193, 7, 0.5);
                transform: scale(1);
            }
            25% { 
                text-shadow: 0 0 50px rgba(255, 193, 7, 0.8), 0 0 80px rgba(255, 193, 7, 0.3);
                transform: scale(1.01);
            }
            75% {
                text-shadow: 0 0 40px rgba(255, 159, 10, 0.6);
                transform: scale(0.99);
            }
        }

        /* Clock Icon */
        .clock-icon {
            font-size: 4rem;
            color: #ff9f0a;
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease-out 0.3s both, clockSpin 8s linear infinite;
        }

        @keyframes clockSpin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
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
            background: linear-gradient(135deg, #ffffff, #ffc107);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        .error-subtitle {
            font-size: 1.5rem;
            color: #ffc107;
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

        /* Session Info */
        .session-info {
            background: rgba(255, 193, 7, 0.1);
            border: 1px solid rgba(255, 193, 7, 0.3);
            border-radius: 12px;
            padding: 2rem;
            margin-bottom: 3rem;
            backdrop-filter: blur(10px);
            animation: fadeInUp 1s ease-out 1s both;
        }

        .session-info h3 {
            color: #ffc107;
            font-size: 1.3rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .session-reasons {
            text-align: left;
            margin-bottom: 1.5rem;
        }

        .session-reasons ul {
            list-style: none;
            padding: 0;
        }

        .session-reasons li {
            color: #d0d0d0;
            margin-bottom: 0.75rem;
            padding-left: 2rem;
            position: relative;
        }

        .session-reasons li::before {
            content: '⏰';
            position: absolute;
            left: 0;
            font-size: 1.2rem;
        }

        .session-solution {
            background: rgba(255, 159, 10, 0.1);
            border: 1px solid rgba(255, 159, 10, 0.3);
            border-radius: 8px;
            padding: 1rem;
            color: #ff9f0a;
            font-size: 0.9rem;
        }

        /* Timer Display */
        .timer-display {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 3rem;
            animation: fadeInUp 1s ease-out 1.1s both;
        }

        .timer-item {
            text-align: center;
            padding: 1rem;
            background: rgba(255, 193, 7, 0.1);
            border-radius: 12px;
            border: 1px solid rgba(255, 193, 7, 0.3);
            backdrop-filter: blur(10px);
            min-width: 80px;
        }

        .timer-number {
            font-size: 1.5rem;
            font-weight: 700;
            color: #ffc107;
            display: block;
            margin-bottom: 0.5rem;
            animation: timerBlink 2s infinite;
        }

        .timer-label {
            font-size: 0.8rem;
            color: #b0b0b0;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        @keyframes timerBlink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
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

        .status-expired {
            border-color: rgba(255, 193, 7, 0.3);
            background: rgba(255, 193, 7, 0.1);
        }

        .status-expired .status-icon {
            color: #ffc107;
            animation: expired-icon 3s infinite;
        }

        @keyframes expired-icon {
            0%, 100% { transform: scale(1) rotate(0deg); }
            50% { transform: scale(1.1) rotate(5deg); }
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
            background: linear-gradient(135deg, #ffc107, #ff8f00);
            color: white;
            box-shadow: 0 8px 32px rgba(255, 193, 7, 0.3);
        }

        .btn-warning:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 40px rgba(255, 193, 7, 0.4);
        }

        .btn-success {
            background: linear-gradient(135deg, #28a745, #20c997);
            color: white;
            box-shadow: 0 8px 32px rgba(40, 167, 69, 0.3);
        }

        .btn-success:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 40px rgba(40, 167, 69, 0.4);
        }

        .btn-outline {
            background: transparent;
            color: #ffffff;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .btn-outline:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: #ffc107;
            color: #ffc107;
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

            .clock-animation {
                display: none;
            }

            .timer-display {
                gap: 0.5rem;
            }

            .timer-item {
                padding: 0.75rem;
                min-width: 60px;
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

            .clock-icon {
                font-size: 3rem;
            }

            .timer-display {
                gap: 0.25rem;
            }

            .timer-item {
                padding: 0.5rem;
                min-width: 50px;
            }

            .timer-number {
                font-size: 1.2rem;
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

    <!-- Clock Animation -->
    <div class="clock-animation">
        <svg width="80" height="80" viewBox="0 0 24 24" fill="rgba(255, 193, 7, 0.3)">
            <path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M16.2,16.2L11,13V7H12.5V12.2L17,14.9L16.2,16.2Z"/>
        </svg>
    </div>

    <!-- Main Container -->
    <div class="error-container">
        <!-- Logo -->
        <div class="logo">
            <div class="logo-icon">E</div>
            <div class="logo-text">e-undanganku</div>
        </div>

        <!-- Clock Icon -->
        <div class="clock-icon">⏰</div>

        <!-- Error Code -->
        <div class="error-code">419</div>

        <!-- Main Content -->
        <div class="error-content">
            <h1 class="error-title">Halaman Kedaluwarsa</h1>
            <h2 class="error-subtitle">Session Anda Telah Berakhir</h2>
            <p class="error-description">
                Session Anda telah kedaluwarsa karena tidak ada aktivitas dalam waktu yang lama. 
                Hal ini dilakukan untuk menjaga keamanan akun Anda. Silakan refresh halaman 
                atau login kembali untuk melanjutkan.
            </p>
        </div>

        <!-- Session Info -->
        <div class="session-info">
            <h3>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22C6.47,22 2,17.5 2,12A10,10 0 0,1 12,2M12.5,7V12.25L17,14.92L16.25,16.15L11,13V7H12.5Z"/>
                </svg>
                Mengapa Session Berakhir:
            </h3>
            <div class="session-reasons">
                <ul>
                    <li>Tidak ada aktivitas selama lebih dari 2 jam</li>
                    <li>Token keamanan telah kedaluwarsa</li>
                    <li>Browser atau tab ditutup terlalu lama</li>
                    <li>Sistem keamanan otomatis logout</li>
                    <li>Perubahan jaringan atau IP address</li>
                </ul>
            </div>
            <div class="session-solution">
                💡 <strong>Solusi:</strong> Refresh halaman ini atau klik tombol "Refresh & Login" untuk memulai session baru.
            </div>
        </div>

        <!-- Timer Display -->
        <div class="timer-display">
            <div class="timer-item">
                <span class="timer-number" id="hours">02</span>
                <span class="timer-label">Jam</span>
            </div>
            <div class="timer-item">
                <span class="timer-number" id="minutes">00</span>
                <span class="timer-label">Menit</span>
            </div>
            <div class="timer-item">
                <span class="timer-number" id="seconds">00</span>
                <span class="timer-label">Expired</span>
            </div>
        </div>

        <!-- Status Indicators -->
        <div class="status-indicators">
            <div class="status-item status-expired">
                <span class="status-icon">⏱️</span>
                <span class="status-label">Session Expired</span>
            </div>
            <div class="status-item">
                <span class="status-icon">🔒</span>
                <span class="status-label">Keamanan</span>
            </div>
            <div class="status-item">
                <span class="status-icon">🔄</span>
                <span class="status-label">Refresh Required</span>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="action-buttons">
            <button onclick="location.reload()" class="btn btn-warning">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M17.65 6.35C16.2 4.9 14.21 4 12 4c-4.42 0-7.99 3.58-7.99 8s3.57 8 7.99 8c3.73 0 6.84-2.55 7.73-6h-2.08c-.82 2.33-3.04 4-5.65 4-3.31 0-6-2.69-6-6s2.69-6 6-6c1.66 0 3.14.69 4.22 1.78L13 11h7V4l-2.35 2.35z"/>
                </svg>
                Refresh & Login
            </button>
            <a href="{{ url('/') }}" class="btn btn-primary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
                </svg>
                Kembali ke Beranda
            </a>
            <a href="{{ url('/login') }}" class="btn btn-success">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M10,17V14H3V10H10V7L15,12L10,17M10,2H19A2,2 0 0,1 21,4V20A2,2 0 0,1 19,22H10A2,2 0 0,1 8,20V18H10V20H19V4H10V6H8V4A2,2 0 0,1 10,2Z"/>
                </svg>
                Login Baru
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
                Bantuan
            </a>
        </div>
    </div>

    <script>
        // Create floating particles
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            const particleCount = 45;

            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 22 + 's';
                particle.style.animationDuration = (Math.random() * 16 + 22) + 's';
                particlesContainer.appendChild(particle);
            }
        }

        // Session timer animation
        function animateTimer() {
            let totalSeconds = 7200; // 2 hours in seconds
            
            function updateTimer() {
                const hours = Math.floor(totalSeconds / 3600);
                const minutes = Math.floor((totalSeconds % 3600) / 60);
                const seconds = totalSeconds % 60;

                document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
                document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
                document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');

                if (totalSeconds > 0) {
                    totalSeconds--;
                } else {
                    // Reset timer
                    totalSeconds = 7200;
                }
            }

            updateTimer();
            setInterval(updateTimer, 1000);
        }

        // Initialize everything when page loads
        document.addEventListener('DOMContentLoaded', function() {
            createParticles();
            animateTimer();
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

        // Clock animation effect
        function addClockEffect() {
            const clockIcon = document.querySelector('.clock-icon');
            
            setInterval(() => {
                if (Math.random() < 0.2) { // 20% chance every interval
                    clockIcon.style.transform = 'scale(1.2) rotate(15deg)';
                    clockIcon.style.color = '#ffc107';
                    setTimeout(() => {
                        clockIcon.style.transform = 'scale(1) rotate(0deg)';
                        clockIcon.style.color = '#ff9f0a';
                    }, 300);
                }
            }, 2000);
        }

        // Start clock animation
        addClockEffect();
    </script>
</body>

</html>