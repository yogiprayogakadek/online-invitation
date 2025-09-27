<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="University Campus Portal - Connecting Students, Faculty, and Resources">
    <title>University Campus Portal | Welcome</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- AOS Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        :root {
            --primary: #1a73e8;
            --primary-dark: #0d47a1;
            --secondary: #f44336;
            --accent: #4caf50;
            --light: #f8f9fa;
            --dark: #212529;
            --gray: #6c757d;
            --light-gray: #e9ecef;
            --transition: all 0.3s ease;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 10px 25px rgba(0, 0, 0, 0.1);
            --border-radius: 10px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
            color: var(--dark);
            background-color: var(--light);
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            line-height: 1.3;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styles */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: var(--shadow);
            z-index: 1000;
            padding: 1rem 0;
            transition: var(--transition);
        }

        .header.scrolled {
            padding: 0.5rem 0;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }

        .logo-text {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--dark);
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-link {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            position: relative;
            transition: var(--transition);
        }

        .nav-link:hover {
            color: var(--primary);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: var(--transition);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .btn {
            padding: 0.7rem 1.5rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
            border: none;
            font-size: 1rem;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }

        .btn-outline {
            background: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
        }

        .btn-outline:hover {
            background: var(--primary);
            color: white;
        }

        .mobile-toggle {
            display: none;
            flex-direction: column;
            justify-content: space-between;
            width: 30px;
            height: 21px;
            cursor: pointer;
        }

        .mobile-toggle span {
            display: block;
            height: 3px;
            width: 100%;
            background: var(--dark);
            border-radius: 3px;
            transition: var(--transition);
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><polygon points="0,0 100,100 0,100" fill="rgba(26, 115, 232, 0.05)"/></svg>');
            background-size: cover;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 650px;
        }

        .hero-title {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            color: var(--dark);
            line-height: 1.2;
        }

        .hero-title span {
            color: var(--primary);
            position: relative;
        }

        .hero-title span::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 8px;
            background: rgba(26, 115, 232, 0.2);
            z-index: -1;
        }

        .hero-description {
            font-size: 1.2rem;
            color: var(--gray);
            margin-bottom: 2rem;
            max-width: 600px;
        }

        .hero-btns {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        /* Features Section */
        .section {
            padding: 6rem 0;
        }

        .section-header {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 4rem;
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--dark);
        }

        .section-subtitle {
            font-size: 1.2rem;
            color: var(--gray);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            background: white;
            border-radius: var(--border-radius);
            padding: 2.5rem 2rem;
            box-shadow: var(--shadow);
            transition: var(--transition);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--primary);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.5s ease;
        }

        .feature-card:hover::before {
            transform: scaleX(1);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            background: rgba(26, 115, 232, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2rem;
            color: var(--primary);
        }

        .feature-title {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .feature-description {
            color: var(--gray);
        }

        /* Stats Section */
        .stats {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: white;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            text-align: center;
        }

        .stat-item {
            padding: 2rem 1rem;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            display: block;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* Testimonials */
        .testimonials {
            background-color: var(--light);
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .testimonial-card {
            background: white;
            border-radius: var(--border-radius);
            padding: 2rem;
            box-shadow: var(--shadow);
            position: relative;
        }

        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 4rem;
            color: var(--light-gray);
            font-family: Georgia, serif;
            line-height: 1;
        }

        .testimonial-content {
            margin-top: 1.5rem;
            position: relative;
            z-index: 2;
        }

        .testimonial-text {
            margin-bottom: 1.5rem;
            color: var(--gray);
            font-style: italic;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }

        .author-info h4 {
            margin-bottom: 0.25rem;
        }

        .author-info p {
            color: var(--gray);
            font-size: 0.9rem;
        }

        /* Footer */
        .footer {
            background: var(--dark);
            color: white;
            padding: 4rem 0 2rem;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .footer-col h3 {
            font-size: 1.3rem;
            margin-bottom: 1.5rem;
            position: relative;
        }

        .footer-col h3::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 40px;
            height: 2px;
            background: var(--primary);
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 0.75rem;
        }

        .footer-links a {
            color: #adb5bd;
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: white;
            padding-left: 5px;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .social-link {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: var(--transition);
        }

        .social-link:hover {
            background: var(--primary);
            transform: translateY(-3px);
        }

        .copyright {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #adb5bd;
            font-size: 0.9rem;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(5px);
            z-index: 2000;
            align-items: center;
            justify-content: center;
        }

        .modal.active {
            display: flex;
        }

        .modal-content {
            background: white;
            border-radius: var(--border-radius);
            width: 100%;
            max-width: 500px;
            box-shadow: var(--shadow-lg);
            overflow: hidden;
            animation: modalOpen 0.4s ease;
        }

        @keyframes modalOpen {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .modal-header {
            padding: 1.5rem;
            background: var(--primary);
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-title {
            font-size: 1.5rem;
            margin: 0;
        }

        .modal-close {
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            transition: var(--transition);
        }

        .modal-body {
            padding: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid var(--light-gray);
            border-radius: 6px;
            font-size: 1rem;
            transition: var(--transition);
        }

        .form-control:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 3px rgba(26, 115, 232, 0.1);
        }

        .form-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 1rem;
        }

        .form-link {
            color: var(--primary);
            text-decoration: none;
        }

        .form-link:hover {
            text-decoration: underline;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .hero-title {
                font-size: 2.8rem;
            }
        }

        @media (max-width: 768px) {
            .mobile-toggle {
                display: flex;
            }
            
            .nav-links {
                position: fixed;
                top: 70px;
                left: -100%;
                width: 100%;
                height: calc(100vh - 70px);
                background: white;
                flex-direction: column;
                align-items: center;
                justify-content: flex-start;
                padding-top: 3rem;
                transition: 0.3s;
            }
            
            .nav-links.active {
                left: 0;
            }
            
            .hero-title {
                font-size: 2.3rem;
            }
            
            .hero-btns {
                flex-direction: column;
            }
            
            .section {
                padding: 4rem 0;
            }
        }

        @media (max-width: 576px) {
            .hero-title {
                font-size: 2rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .hero-btns {
                width: 100%;
            }
            
            .btn {
                width: 100%;
                text-align: center;
            }
        }

        /* Animations */
        .pulse {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(26, 115, 232, 0.4);
            }
            70% {
                box-shadow: 0 0 0 15px rgba(26, 115, 232, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(26, 115, 232, 0);
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header" id="header">
        <div class="container nav-container">
            <a href="#" class="logo">
                <div class="logo-icon">U</div>
                <div class="logo-text">University</div>
            </a>
            
            <div class="nav-links" id="navLinks">
                <a href="#home" class="nav-link">Home</a>
                <a href="#about" class="nav-link">About</a>
                <a href="#features" class="nav-link">Features</a>
                <a href="#programs" class="nav-link">Programs</a>
                <a href="#contact" class="nav-link">Contact</a>
            </div>
            
            <div class="nav-actions">
                <button class="btn btn-outline" id="loginBtn">Login</button>
                <button class="btn btn-primary" id="registerBtn">Register</button>
            </div>
            
            <div class="mobile-toggle" id="mobileToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Welcome to <span>University</span> Campus</h1>
                <p class="hero-description">Join our community of learners and innovators. Access resources, connect with peers, and enhance your educational journey with our comprehensive campus portal.</p>
                <div class="hero-btns">
                    <button class="btn btn-primary pulse" id="exploreBtn">Explore Campus</button>
                    <button class="btn btn-outline" id="learnMoreBtn">Learn More</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Campus Features</h2>
                <p class="section-subtitle">Discover the tools and resources available to enhance your university experience</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3 class="feature-title">Digital Library</h3>
                    <p class="feature-description">Access thousands of e-books, journals, and research papers from anywhere on campus.</p>
                </div>
                
                <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="feature-title">Online Learning</h3>
                    <p class="feature-description">Participate in virtual classes, access course materials, and submit assignments online.</p>
                </div>
                
                <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="feature-title">Student Community</h3>
                    <p class="feature-description">Connect with fellow students, join clubs, and participate in campus activities.</p>
                </div>
                
                <div class="feature-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3 class="feature-title">Event Calendar</h3>
                    <p class="feature-description">Stay updated with campus events, lectures, workshops, and important deadlines.</p>
                </div>
                
                <div class="feature-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="feature-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="feature-title">Academic Tracker</h3>
                    <p class="feature-description">Monitor your academic progress, view grades, and plan your course schedule.</p>
                </div>
                
                <div class="feature-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="feature-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3 class="feature-title">Campus Services</h3>
                    <p class="feature-description">Access various campus services including housing, dining, and career counseling.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
                    <span class="stat-number">15,000+</span>
                    <span class="stat-label">Students</span>
                </div>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                    <span class="stat-number">800+</span>
                    <span class="stat-label">Faculty</span>
                </div>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                    <span class="stat-number">120+</span>
                    <span class="stat-label">Programs</span>
                </div>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="400">
                    <span class="stat-number">25+</span>
                    <span class="stat-label">Departments</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section testimonials">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Student Testimonials</h2>
                <p class="section-subtitle">Hear what our students have to say about their campus experience</p>
            </div>
            
            <div class="testimonials-grid">
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-content">
                        <p class="testimonial-text">"The campus portal has made my university life so much easier. I can access all resources in one place and stay connected with my classmates."</p>
                        <div class="testimonial-author">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Sarah Johnson" class="author-avatar">
                            <div class="author-info">
                                <h4>Sarah Johnson</h4>
                                <p>Computer Science Student</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-content">
                        <p class="testimonial-text">"The online learning platform and digital library have been invaluable during remote learning. I can access course materials anytime, anywhere."</p>
                        <div class="testimonial-author">
                            <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="Michael Chen" class="author-avatar">
                            <div class="author-info">
                                <h4>Michael Chen</h4>
                                <p>Business Administration Student</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="testimonial-content">
                        <p class="testimonial-text">"The campus portal connects me with opportunities I never knew existed. From research projects to career services, everything is just a click away."</p>
                        <div class="testimonial-author">
                            <img src="https://randomuser.me/api/portraits/women/67.jpg" alt="Emma Rodriguez" class="author-avatar">
                            <div class="author-info">
                                <h4>Emma Rodriguez</h4>
                                <p>Engineering Student</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3>University Campus</h3>
                    <p style="color: #adb5bd; margin-bottom: 1.5rem;">Empowering students through innovative education and technology since 2005.</p>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div class="footer-col">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#programs">Programs</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h3>Resources</h3>
                    <ul class="footer-links">
                        <li><a href="#">Library</a></li>
                        <li><a href="#">Academic Calendar</a></li>
                        <li><a href="#">Course Catalog</a></li>
                        <li><a href="#">Student Portal</a></li>
                        <li><a href="#">Faculty Directory</a></li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h3>Support</h3>
                    <ul class="footer-links">
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">IT Support</a></li>
                        <li><a href="#">Career Services</a></li>
                        <li><a href="#">Financial Aid</a></li>
                        <li><a href="#">Campus Safety</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; 2023 University Campus Portal. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Login Modal -->
    <div class="modal" id="loginModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Login to Your Account</h3>
                <button class="modal-close" id="closeLoginModal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="loginForm">
                    <div class="form-group">
                        <label for="loginEmail">Email Address</label>
                        <input type="email" id="loginEmail" class="form-control" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="loginPassword">Password</label>
                        <input type="password" id="loginPassword" class="form-control" placeholder="Enter your password" required>
                    </div>
                    <div class="form-group">
                        <div class="form-footer">
                            <a href="#" class="form-link">Forgot Password?</a>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 100%;">Login</button>
                </form>
                <div class="form-group" style="text-align: center; margin-top: 1.5rem;">
                    <p>Don't have an account? <a href="#" class="form-link" id="showRegisterFromLogin">Register</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Register Modal -->
    <div class="modal" id="registerModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Create New Account</h3>
                <button class="modal-close" id="closeRegisterModal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="registerForm">
                    <div class="form-group">
                        <label for="registerName">Full Name</label>
                        <input type="text" id="registerName" class="form-control" placeholder="Enter your full name" required>
                    </div>
                    <div class="form-group">
                        <label for="registerEmail">Email Address</label>
                        <input type="email" id="registerEmail" class="form-control" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="registerStudentId">Student ID (if applicable)</label>
                        <input type="text" id="registerStudentId" class="form-control" placeholder="Enter your student ID">
                    </div>
                    <div class="form-group">
                        <label for="registerPassword">Password</label>
                        <input type="password" id="registerPassword" class="form-control" placeholder="Create a password" required>
                    </div>
                    <div class="form-group">
                        <label for="registerConfirmPassword">Confirm Password</label>
                        <input type="password" id="registerConfirmPassword" class="form-control" placeholder="Confirm your password" required>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 100%;">Register</button>
                </form>
                <div class="form-group" style="text-align: center; margin-top: 1.5rem;">
                    <p>Already have an account? <a href="#" class="form-link" id="showLoginFromRegister">Login</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- AOS Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Main JavaScript -->
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
        });

        // Modal functionality
        const loginBtn = document.getElementById('loginBtn');
        const registerBtn = document.getElementById('registerBtn');
        const loginModal = document.getElementById('loginModal');
        const registerModal = document.getElementById('registerModal');
        const closeLoginModal = document.getElementById('closeLoginModal');
        const closeRegisterModal = document.getElementById('closeRegisterModal');
        const showRegisterFromLogin = document.getElementById('showRegisterFromLogin');
        const showLoginFromRegister = document.getElementById('showLoginFromRegister');

        // Open modals
        loginBtn.addEventListener('click', () => {
            loginModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        });

        registerBtn.addEventListener('click', () => {
            registerModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        });

        // Close modals
        closeLoginModal.addEventListener('click', () => {
            loginModal.classList.remove('active');
            document.body.style.overflow = 'auto';
        });

        closeRegisterModal.addEventListener('click', () => {
            registerModal.classList.remove('active');
            document.body.style.overflow = 'auto';
        });

        // Close modals when clicking outside the modal content
        window.addEventListener('click', (e) => {
            if (e.target === loginModal) {
                loginModal.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
            if (e.target === registerModal) {
                registerModal.classList.remove('active');
                document.body.style.overflow = 'auto';
            }
        });

        // Switch between modals
        showRegisterFromLogin.addEventListener('click', (e) => {
            e.preventDefault();
            loginModal.classList.remove('active');
            registerModal.classList.add('active');
        });

        showLoginFromRegister.addEventListener('click', (e) => {
            e.preventDefault();
            registerModal.classList.remove('active');
            loginModal.classList.add('active');
        });

        // Form submission handling
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // In a real application, you would send the data to a server
            alert('Login attempted! In a real application, this would connect to an authentication system.');
            loginModal.classList.remove('active');
            document.body.style.overflow = 'auto';
        });

        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simple validation
            const password = document.getElementById('registerPassword').value;
            const confirmPassword = document.getElementById('registerConfirmPassword').value;
            
            if (password !== confirmPassword) {
                alert('Passwords do not match!');
                return;
            }
            
            // In a real application, you would send the data to a server
            alert('Registration attempted! In a real application, this would connect to a registration system.');
            registerModal.classList.remove('active');
            document.body.style.overflow = 'auto';
        });

        // Mobile menu toggle
        const mobileToggle = document.getElementById('mobileToggle');
        const navLinks = document.getElementById('navLinks');
        
        mobileToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });

        // Close mobile menu when clicking a link
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
            });
        });

        // Header scroll effect
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Initialize header state
        window.addEventListener('load', () => {
            const header = document.getElementById('header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            }
        });
    </script>
</body>
</html>