<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Modern Admin Dashboard">
    <title>Modern Admin Dashboard | Invitera</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <!-- AOS Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --secondary: #8b5cf6;
            --success: #10b981;
            --danger: #ef4444;
            --warning: #f59e0b;
            --info: #3b82f6;
            --dark: #1e293b;
            --light: #f8fafc;
            --gray: #64748b;
            --light-gray: #e2e8f0;
            --sidebar-width: 260px;
            --header-height: 70px;
            --transition: all 0.3s ease;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --border-radius: 12px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f1f5f9;
            color: var(--dark);
            display: flex;
            min-height: 100vh;
            overflow-x: hidden;
        }

        body.dark-mode {
            background-color: #0f172a;
            color: #e2e8f0;
        }

        /* Sidebar */
        .sidebar {
            width: var(--sidebar-width);
            background: white;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
            box-shadow: var(--shadow);
            transition: var(--transition);
            padding-top: var(--header-height);
            overflow-y: auto;
        }

        .sidebar.dark-mode {
            background: #1e293b;
            color: #e2e8f0;
        }

        .sidebar-header {
            padding: 1.5rem;
            border-bottom: 1px solid var(--light-gray);
        }

        .sidebar-header.dark-mode {
            border-bottom: 1px solid #334155;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
        }

        .logo i {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            width: 36px;
            height: 36px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .nav-links {
            list-style: none;
            padding: 1rem 0;
        }

        .nav-link {
            display: flex;
            align-items: center;
            padding: 0.8rem 1.5rem;
            text-decoration: none;
            color: var(--gray);
            transition: var(--transition);
            position: relative;
            margin: 0.25rem 0;
        }

        .nav-link:hover, .nav-link.active {
            color: var(--primary);
            background: rgba(99, 102, 241, 0.1);
            border-radius: 8px;
            margin: 0.25rem 1rem;
        }

        .nav-link:hover i, .nav-link.active i {
            color: var(--primary);
        }

        .nav-link.active::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            height: 24px;
            width: 3px;
            background: var(--primary);
            border-radius: 0 4px 4px 0;
        }

        .nav-link i {
            width: 24px;
            margin-right: 12px;
            text-align: center;
            color: var(--gray);
        }

        /* Main Content */
        .main-content {
            flex: 1;
            margin-left: var(--sidebar-width);
            transition: var(--transition);
        }

        /* Header */
        .header {
            height: var(--header-height);
            background: white;
            box-shadow: var(--shadow);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 2rem;
            position: fixed;
            top: 0;
            left: var(--sidebar-width);
            right: 0;
            z-index: 90;
            transition: var(--transition);
        }

        .header.dark-mode {
            background: #1e293b;
        }

        .search-bar {
            display: flex;
            align-items: center;
            background: var(--light);
            border-radius: 50px;
            padding: 0.5rem 1rem;
            width: 350px;
        }

        .search-bar.dark-mode {
            background: #334155;
        }

        .search-bar input {
            border: none;
            background: transparent;
            padding: 0.5rem;
            width: 100%;
            outline: none;
            color: var(--dark);
        }

        .search-bar.dark-mode input {
            color: #e2e8f0;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .icon-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--light);
            color: var(--gray);
            border: none;
            cursor: pointer;
            position: relative;
            transition: var(--transition);
        }

        .icon-btn.dark-mode {
            background: #334155;
        }

        .icon-btn:hover {
            background: var(--primary);
            color: white;
        }

        .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background: var(--danger);
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 0.7rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            cursor: pointer;
        }

        .avatar {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            object-fit: cover;
        }

        /* Content Area */
        .content {
            padding: calc(var(--header-height) + 2rem) 2rem 2rem;
        }

        .page-title {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        /* Stats Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: white;
            border-radius: var(--border-radius);
            padding: 1.5rem;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .stat-card.dark-mode {
            background: #1e293b;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .stat-icon {
            position: absolute;
            top: 1rem;
            right: 1rem;
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        .stat-icon.bg-primary {
            background: rgba(99, 102, 241, 0.15);
            color: var(--primary);
        }

        .stat-icon.bg-success {
            background: rgba(16, 185, 129, 0.15);
            color: var(--success);
        }

        .stat-icon.bg-warning {
            background: rgba(245, 158, 11, 0.15);
            color: var(--warning);
        }

        .stat-icon.bg-danger {
            background: rgba(239, 68, 68, 0.15);
            color: var(--danger);
        }

        .stat-title {
            font-size: 0.9rem;
            color: var(--gray);
            margin-bottom: 0.5rem;
        }

        .stat-value {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .stat-change {
            font-size: 0.85rem;
            display: flex;
            align-items: center;
            gap: 0.25rem;
        }

        .change-positive {
            color: var(--success);
        }

        .change-negative {
            color: var(--danger);
        }

        /* Charts and Tables */
        .dashboard-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .card {
            background: white;
            border-radius: var(--border-radius);
            padding: 1.5rem;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .card.dark-mode {
            background: #1e293b;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .card-title {
            font-size: 1.2rem;
            font-weight: 600;
        }

        .card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }

        .chart-container {
            height: 300px;
            position: relative;
        }

        .recent-activity {
            max-height: 400px;
            overflow-y: auto;
        }

        .activity-item {
            display: flex;
            gap: 1rem;
            padding: 1rem 0;
            border-bottom: 1px solid var(--light-gray);
        }

        .activity-item.dark-mode {
            border-bottom: 1px solid #334155;
        }

        .activity-item:last-child {
            border-bottom: none;
        }

        .activity-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .activity-icon.blue {
            background: rgba(59, 130, 246, 0.15);
            color: var(--info);
        }

        .activity-icon.green {
            background: rgba(16, 185, 129, 0.15);
            color: var(--success);
        }

        .activity-icon.purple {
            background: rgba(139, 92, 246, 0.15);
            color: var(--secondary);
        }

        .activity-content {
            flex: 1;
        }

        .activity-title {
            font-weight: 500;
            margin-bottom: 0.25rem;
        }

        .activity-time {
            font-size: 0.8rem;
            color: var(--gray);
        }

        /* Table Styles */
        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid var(--light-gray);
        }

        th {
            font-weight: 600;
            color: var(--gray);
            font-size: 0.9rem;
        }

        tr:last-child td {
            border-bottom: none;
        }

        .status {
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .status.completed {
            background: rgba(16, 185, 129, 0.15);
            color: var(--success);
        }

        .status.pending {
            background: rgba(245, 158, 11, 0.15);
            color: var(--warning);
        }

        .status.processing {
            background: rgba(59, 130, 246, 0.15);
            color: var(--info);
        }

        /* Responsive */
        @media (max-width: 992px) {
            .sidebar {
                width: 70px;
                overflow: visible;
            }
            
            .sidebar-header, .nav-link span {
                display: none;
            }
            
            .nav-link {
                justify-content: center;
                padding: 1rem;
            }
            
            .nav-link i {
                margin-right: 0;
                font-size: 1.2rem;
            }
            
            .main-content {
                margin-left: 70px;
            }
            
            .header {
                left: 70px;
            }
            
            .search-bar {
                width: 200px;
            }
            
            .dashboard-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 0;
                overflow: hidden;
            }
            
            .sidebar.active {
                width: var(--sidebar-width);
            }
            
            .main-content {
                margin-left: 0;
            }
            
            .header {
                left: 0;
            }
            
            .mobile-menu-btn {
                display: block;
            }
            
            .search-bar {
                display: none;
            }
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--dark);
            cursor: pointer;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in-up {
            animation: fadeInUp 0.6s ease-out;
        }

        .pulse {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(99, 102, 241, 0.4);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(99, 102, 241, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(99, 102, 241, 0);
            }
        }

        .glow {
            animation: glow 2s infinite alternate;
        }

        @keyframes glow {
            from {
                box-shadow: 0 0 5px rgba(99, 102, 241, 0.5);
            }
            to {
                box-shadow: 0 0 20px rgba(99, 102, 241, 0.8);
            }
        }

        /* Dark mode adjustments */
        .dark-mode .stat-card, 
        .dark-mode .card, 
        .dark-mode .sidebar, 
        .dark-mode .header {
            background: #1e293b;
            color: #e2e8f0;
        }

        .dark-mode .search-bar {
            background: #334155;
        }

        .dark-mode .stat-card, 
        .dark-mode .card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .dark-mode .activity-item, 
        .dark-mode th, 
        .dark-mode td {
            border-color: #334155;
        }

        .dark-mode .stat-title {
            color: #94a3b8;
        }

        .dark-mode .search-bar input {
            color: #e2e8f0;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <a href="#" class="logo">
                <i class="fas fa-crown"></i>
                <span>Invitera Admin</span>
            </a>
        </div>
        
        <ul class="nav-links">
            <li>
                <a href="#" class="nav-link active">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link">
                    <i class="fas fa-users"></i>
                    <span>Guests</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link">
                    <i class="fas fa-gift"></i>
                    <span>Gifts</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link">
                    <i class="fas fa-calendar-check"></i>
                    <span>Events</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link">
                    <i class="fas fa-chart-line"></i>
                    <span>Analytics</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link">
                    <i class="fas fa-question-circle"></i>
                    <span>Help</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header" id="header">
            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <i class="fas fa-bars"></i>
            </button>
            
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search...">
            </div>
            
            <div class="header-actions">
                <button class="icon-btn">
                    <i class="fas fa-bell"></i>
                    <span class="notification-badge">3</span>
                </button>
                <button class="icon-btn" id="themeToggle">
                    <i class="fas fa-moon"></i>
                </button>
                <div class="user-profile">
                    <img src="https://randomuser.me/api/portraits/men/41.jpg" alt="User" class="avatar">
                    <div>
                        <div class="font-semibold">Admin User</div>
                        <div class="text-sm text-gray-500">Administrator</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Area -->
        <div class="content">
            <h1 class="page-title" data-aos="fade-right">Dashboard Overview</h1>
            
            <!-- Stats Grid -->
            <div class="stats-grid">
                <div class="stat-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-icon bg-primary">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-title">Total Guests</div>
                    <div class="stat-value">1,248</div>
                    <div class="stat-change change-positive">
                        <i class="fas fa-arrow-up"></i>
                        <span>12.3% from last month</span>
                    </div>
                </div>
                
                <div class="stat-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-icon bg-success">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <div class="stat-title">Confirmed</div>
                    <div class="stat-value">842</div>
                    <div class="stat-change change-positive">
                        <i class="fas fa-arrow-up"></i>
                        <span>8.2% from last month</span>
                    </div>
                </div>
                
                <div class="stat-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-icon bg-warning">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="stat-title">Pending</div>
                    <div class="stat-value">210</div>
                    <div class="stat-change change-negative">
                        <i class="fas fa-arrow-down"></i>
                        <span>3.1% from last month</span>
                    </div>
                </div>
                
                <div class="stat-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="stat-icon bg-danger">
                        <i class="fas fa-times-circle"></i>
                    </div>
                    <div class="stat-title">Declined</div>
                    <div class="stat-value">196</div>
                    <div class="stat-change change-negative">
                        <i class="fas fa-arrow-down"></i>
                        <span>5.7% from last month</span>
                    </div>
                </div>
            </div>
            
            <!-- Dashboard Grid -->
            <div class="dashboard-grid">
                <div class="card" data-aos="fade-right">
                    <div class="card-header">
                        <h3 class="card-title">Attendance Overview</h3>
                        <div class="dropdown">
                            <button class="icon-btn">
                                <i class="fas fa-ellipsis-h"></i>
                            </button>
                        </div>
                    </div>
                    <div class="chart-container">
                        <canvas id="attendanceChart"></canvas>
                    </div>
                </div>
                
                <div class="card" data-aos="fade-left">
                    <div class="card-header">
                        <h3 class="card-title">Recent Activity</h3>
                    </div>
                    <div class="recent-activity">
                        <div class="activity-item">
                            <div class="activity-icon blue">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <div class="activity-content">
                                <div class="activity-title">New guest registration</div>
                                <div class="activity-desc">John Doe registered for the event</div>
                                <div class="activity-time">2 minutes ago</div>
                            </div>
                        </div>
                        
                        <div class="activity-item">
                            <div class="activity-icon green">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <div class="activity-content">
                                <div class="activity-title">Event confirmed</div>
                                <div class="activity-desc">Sarah Johnson confirmed attendance</div>
                                <div class="activity-time">15 minutes ago</div>
                            </div>
                        </div>
                        
                        <div class="activity-item">
                            <div class="activity-icon purple">
                                <i class="fas fa-gift"></i>
                            </div>
                            <div class="activity-content">
                                <div class="activity-title">Gift received</div>
                                <div class="activity-desc">Michael Brown sent a wedding gift</div>
                                <div class="activity-time">1 hour ago</div>
                            </div>
                        </div>
                        
                        <div class="activity-item">
                            <div class="activity-icon blue">
                                <i class="fas fa-comment"></i>
                            </div>
                            <div class="activity-content">
                                <div class="activity-title">New message</div>
                                <div class="activity-desc">Emily Davis left a congratulatory message</div>
                                <div class="activity-time">3 hours ago</div>
                            </div>
                        </div>
                        
                        <div class="activity-item">
                            <div class="activity-icon green">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <div class="activity-content">
                                <div class="activity-title">Event confirmed</div>
                                <div class="activity-desc">Robert Wilson confirmed attendance</div>
                                <div class="activity-time">5 hours ago</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Recent Guests Table -->
            <div class="card" data-aos="fade-up" data-aos-delay="200">
                <div class="card-header">
                    <h3 class="card-title">Recent Guests</h3>
                    <button class="icon-btn">
                        <i class="fas fa-sync-alt"></i>
                    </button>
                </div>
                
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>RSVP Status</th>
                                <th>Guests</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Smith</td>
                                <td>john@example.com</td>
                                <td><span class="status completed">Confirmed</span></td>
                                <td>2</td>
                                <td>
                                    <button class="icon-btn">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="icon-btn">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Emily Johnson</td>
                                <td>emily@example.com</td>
                                <td><span class="status pending">Pending</span></td>
                                <td>1</td>
                                <td>
                                    <button class="icon-btn">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="icon-btn">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Michael Brown</td>
                                <td>michael@example.com</td>
                                <td><span class="status completed">Confirmed</span></td>
                                <td>4</td>
                                <td>
                                    <button class="icon-btn">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="icon-btn">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Sarah Davis</td>
                                <td>sarah@example.com</td>
                                <td><span class="status processing">Maybe</span></td>
                                <td>2</td>
                                <td>
                                    <button class="icon-btn">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="icon-btn">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Robert Wilson</td>
                                <td>robert@example.com</td>
                                <td><span class="status completed">Confirmed</span></td>
                                <td>3</td>
                                <td>
                                    <button class="icon-btn">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="icon-btn">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true
        });

        // Theme toggle
        const themeToggle = document.getElementById('themeToggle');
        const body = document.body;
        const themeIcon = themeToggle.querySelector('i');
        
        // Check for saved theme preference or respect OS preference
        const savedTheme = localStorage.getItem('theme');
        const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)');
        
        if (savedTheme === 'dark' || (!savedTheme && prefersDarkScheme.matches)) {
            body.classList.add('dark-mode');
            themeIcon.classList.remove('fa-moon');
            themeIcon.classList.add('fa-sun');
        } else {
            body.classList.remove('dark-mode');
            themeIcon.classList.remove('fa-sun');
            themeIcon.classList.add('fa-moon');
        }
        
        themeToggle.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
            
            if (body.classList.contains('dark-mode')) {
                themeIcon.classList.remove('fa-moon');
                themeIcon.classList.add('fa-sun');
                localStorage.setItem('theme', 'dark');
            } else {
                themeIcon.classList.remove('fa-sun');
                themeIcon.classList.add('fa-moon');
                localStorage.setItem('theme', 'light');
            }
        });

        // Mobile menu toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const sidebar = document.getElementById('sidebar');
        
        mobileMenuBtn.addEventListener('click', () => {
            sidebar.classList.toggle('active');
        });

        // Initialize charts
        document.addEventListener('DOMContentLoaded', function() {
            // Attendance Chart
            const attendanceCtx = document.getElementById('attendanceChart').getContext('2d');
            const attendanceChart = new Chart(attendanceCtx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                        label: 'Confirmed Guests',
                        data: [65, 78, 90, 81, 95, 102, 110, 125, 118, 135, 142, 156],
                        borderColor: '#6366f1',
                        backgroundColor: 'rgba(99, 102, 241, 0.1)',
                        borderWidth: 3,
                        pointBackgroundColor: '#6366f1',
                        pointRadius: 5,
                        pointHoverRadius: 7,
                        fill: true,
                        tension: 0.4
                    }, {
                        label: 'Pending Guests',
                        data: [45, 52, 60, 55, 70, 68, 75, 80, 72, 85, 88, 92],
                        borderColor: '#f59e0b',
                        backgroundColor: 'rgba(245, 158, 11, 0.1)',
                        borderWidth: 3,
                        pointBackgroundColor: '#f59e0b',
                        pointRadius: 5,
                        pointHoverRadius: 7,
                        fill: true,
                        tension: 0.4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Add animation to stats cards when they come into view
            const observerOptions = {
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animation = 'fadeInUp 0.6s ease-out forwards';
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.stat-card').forEach(card => {
                observer.observe(card);
            });
        });

        // Add interactivity to navigation links
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Remove active class from all links
                document.querySelectorAll('.nav-link').forEach(l => {
                    l.classList.remove('active');
                });
                
                // Add active class to clicked link
                this.classList.add('active');
                
                // Here you would typically load the content for this section
                // For demo purposes, we'll just update the page title
                const sectionName = this.querySelector('span').textContent;
                document.querySelector('.page-title').textContent = sectionName;
                
                // Fade out the content and fade in again to simulate content change
                const content = document.querySelector('.content');
                content.style.opacity = 0;
                
                setTimeout(() => {
                    content.style.transition = 'opacity 0.3s ease';
                    content.style.opacity = 1;
                }, 150);
            });
        });

        // Simulate real-time updates
        setInterval(() => {
            const notificationBadge = document.querySelector('.notification-badge');
            const currentValue = parseInt(notificationBadge.textContent);
            notificationBadge.textContent = Math.max(1, currentValue + 1);
        }, 30000); // Update every 30 seconds
    </script>
</body>
</html>