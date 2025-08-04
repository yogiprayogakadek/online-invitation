<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="e-undanganku sedang dalam maintenance - Kami akan segera kembali">
    <meta name="keywords" content="maintenance, undangan online, e-undanganku">
    <meta name="author" content="e-undanganku">
    <title>Maintenance - e-undanganku</title>

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
            background: linear-gradient(45deg, #000000, #1a1a1a, #000000);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
        }

        @keyframes gradientShift {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Floating Particles */
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
            background: rgba(0, 255, 127, 0.4);
            animation-duration: 30s;
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

        /* Main Container */
        .maintenance-container {
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

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }
        }

        /* Main Content */
        .maintenance-content {
            max-width: 600px;
            margin-bottom: 3rem;
        }

        .maintenance-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, #ffffff, #b0b0b0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: fadeInUp 1s ease-out 0.2s both;
        }

        .maintenance-subtitle {
            font-size: 1.5rem;
            color: #007bff;
            margin-bottom: 1rem;
            font-weight: 600;
            animation: fadeInUp 1s ease-out 0.4s both;
        }

        .maintenance-description {
            font-size: 1.1rem;
            color: #b0b0b0;
            line-height: 1.6;
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        /* Countdown Timer */
        .countdown {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-bottom: 3rem;
            animation: fadeInUp 1s ease-out 0.8s both;
        }

        .countdown-item {
            text-align: center;
            padding: 1.5rem;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            min-width: 80px;
        }

        .countdown-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: #007bff;
            display: block;
            margin-bottom: 0.5rem;
        }

        .countdown-label {
            font-size: 0.9rem;
            color: #b0b0b0;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
            animation: fadeInUp 1s ease-out 1s both;
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
            border-color: #007bff;
            color: #007bff;
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

        /* Progress Bar */
        .progress-container {
            width: 100%;
            max-width: 400px;
            margin: 2rem auto;
            animation: fadeInUp 1s ease-out 1.2s both;
        }

        .progress-label {
            color: #b0b0b0;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
            text-align: left;
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 4px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #007bff, #00ff7f);
            border-radius: 4px;
            width: 75%;
            animation: progressAnimation 3s ease-in-out infinite;
        }

        @keyframes progressAnimation {

            0%,
            100% {
                width: 75%;
            }

            50% {
                width: 85%;
            }
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
            .maintenance-title {
                font-size: 2.5rem;
            }

            .countdown {
                gap: 1rem;
            }

            .countdown-item {
                padding: 1rem;
                min-width: 60px;
            }

            .countdown-number {
                font-size: 1.8rem;
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
            .maintenance-container {
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

            .maintenance-title {
                font-size: 2rem;
            }

            .countdown {
                gap: 0.5rem;
            }

            .countdown-item {
                padding: 0.75rem 0.5rem;
                min-width: 50px;
            }

            .countdown-number {
                font-size: 1.5rem;
            }

            .countdown-label {
                font-size: 0.8rem;
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
    <div class="maintenance-container">
        <!-- Logo -->
        <div class="logo">
            <div class="logo-icon">E</div>
            <div class="logo-text">e-undanganku</div>
        </div>

        <!-- Main Content -->
        <div class="maintenance-content">
            <h1 class="maintenance-title">Sedang Maintenance</h1>
            <h2 class="maintenance-subtitle">Kami Akan Segera Kembali!</h2>
            <p class="maintenance-description">
                Website sedang dalam perbaikan untuk memberikan pengalaman yang lebih baik.
                Kami sedang menambahkan fitur-fitur baru yang menakjubkan untuk Anda.
            </p>
        </div>

        <!-- Countdown Timer -->
        <div class="countdown">
            <div class="countdown-item">
                <span class="countdown-number" id="hours">12</span>
                <span class="countdown-label">Jam</span>
            </div>
            <div class="countdown-item">
                <span class="countdown-number" id="minutes">30</span>
                <span class="countdown-label">Menit</span>
            </div>
            <div class="countdown-item">
                <span class="countdown-number" id="seconds">45</span>
                <span class="countdown-label">Detik</span>
            </div>
        </div>

        <!-- Progress Bar -->
        <div class="progress-container">
            <div class="progress-label">Progress Maintenance: 75%</div>
            <div class="progress-bar">
                <div class="progress-fill"></div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="action-buttons">
            <a href="{{ route('ana.home') }}" class="btn btn-primary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" />
                </svg>
                Kembali ke Beranda
            </a>
            <a href="mailto:support@e-undanganku.com" class="btn btn-outline">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                </svg>
                Hubungi Support
            </a>
            <a href="https://wa.me/6282237188923" class="btn btn-social" target="_blank">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.893 3.488" />
                </svg>
                WhatsApp
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

        // Countdown timer
        function updateCountdown() {
            // Set target time (24 hours from now for demo)
            const targetTime = new Date().getTime() + (24 * 60 * 60 * 1000);

            function update() {
                const now = new Date().getTime();
                const distance = targetTime - now;

                if (distance > 0) {
                    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
                    document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
                    document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');
                } else {
                    // Countdown finished
                    document.getElementById('hours').textContent = '00';
                    document.getElementById('minutes').textContent = '00';
                    document.getElementById('seconds').textContent = '00';
                }
            }

            update();
            setInterval(update, 1000);
        }

        // Initialize everything when page loads
        document.addEventListener('DOMContentLoaded', function() {
            createParticles();
            updateCountdown();
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
    </script>
</body>

</html>
