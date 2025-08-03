<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <link rel="manifest" href="/manifest.json">
    <meta name="theme-color" content="#574D36">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta http-equiv="Content-Security-Policy" content="frame-src 'self' https://www.google.com;">

    <link rel="apple-touch-icon" href="/assets/images/icons/icon.png">
    <link rel="shortcut icon" href="/assets/images/icons/icon.png" type="image/x-icon">
    <title>Undangan Metatah</title>

    <!-- Preload critical fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Dancing+Script:wght@400;700&family=Fira+Sans:wght@300;400;500;600;700&family=Lora:wght@400;700&display=swap"
        rel="stylesheet">

    <!-- External CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@phosphor-icons/web@2.0.3/src/fill/style.css">

    <style>
        :root {
            --primary-color: #574D36;
            --secondary-color: #C2A878;
            --accent-color: #FFA726;
            --text-primary: #4B1E12;
            --text-secondary: #4B2A14;
            --text-light: #6A3F2B;
            --background-light: #FAF8F5;
            --background-cream: #f9f5f0;
            --white: #ffffff;
            --shadow: rgba(0, 0, 0, 0.1);
            --shadow-heavy: rgba(0, 0, 0, 0.3);
            --border-radius: 12px;
            --animation-speed: 0.3s;
            --menu-height: 80px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html,
        body {
            font-family: 'Fira Sans', sans-serif;
            background: var(--white);
            height: 100%;
            width: 100%;
            overflow: hidden;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .wrapper {
            position: relative;
            width: 100%;
            max-width: 480px;
            height: 100vh;
            margin: 0 auto;
            overflow: hidden;
            background: linear-gradient(135deg, var(--white) 0%, var(--background-cream) 100%);
            box-shadow:
                0 0 30px rgba(87, 77, 54, 0.1),
                inset 0 1px 0 rgba(255, 255, 255, 0.6);
            border-left: 1px solid rgba(194, 168, 120, 0.2);
            border-right: 1px solid rgba(194, 168, 120, 0.2);
        }

        /* Add subtle pattern overlay */
        .wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image:
                radial-gradient(circle at 20% 20%, rgba(194, 168, 120, 0.03) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(87, 77, 54, 0.02) 0%, transparent 50%),
                radial-gradient(circle at 40% 60%, rgba(255, 167, 38, 0.01) 0%, transparent 50%);
            pointer-events: none;
            z-index: 1;
        }

        .page {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            display: none;
            background-image: url('https://indoinvite.com/nikah/template/pandora/pandora-classic/PC-BG.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            padding-bottom: calc(var(--menu-height) + 20px);
            overflow-y: auto;
            scrollbar-width: none;
            -ms-overflow-style: none;
            z-index: 2;
        }

        .page::-webkit-scrollbar {
            display: none;
        }

        .page.active {
            display: flex;
            opacity: 1;
            z-index: 2;
        }

        .page.animate__animated {
            animation-duration: 0.6s;
        }

        /* Corner Images with Perfect Edge Positioning */
        .corner-image {
            position: absolute;
            width: 100px;
            height: auto;
            pointer-events: none;
            z-index: 5;
            opacity: 0.9;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Initial positioning - menempel sempurna dengan sudut wrapper */
        .corner-top-left {
            top: -10px;
            left: 50%;
            margin-left: -230px;
            /* Adjusted untuk menempel sempurna */
            transform: rotate(90deg);
        }

        .corner-top-right {
            top: 0;
            right: 50%;
            margin-right: -240px;
            /* Half of max-width (480px) */
            transform: rotate(180deg);
        }

        .corner-bottom-left {
            bottom: 0;
            left: 50%;
            margin-left: -240px;
            /* Half of max-width (480px) */
            transform: rotate(0deg);
        }

        .corner-bottom-right {
            bottom: -10px;
            right: 50%;
            margin-right: -230px;
            /* Adjusted untuk menempel sempurna */
            transform: rotate(270deg);
        }

        /* Positioning setelah menu ditampilkan - corner bottom naik ke atas menu */
        body.menu-opened .corner-bottom-left {
            bottom: var(--menu-height);
            left: 50%;
            margin-left: -240px;
            transform: rotate(0deg);
        }

        body.menu-opened .corner-bottom-right {
            bottom: calc(var(--menu-height) - 10px);
            right: 50%;
            margin-right: -230px;
            transform: rotate(270deg);
        }

        /* Untuk wrapper dengan max-width yang lebih kecil */
        @media (max-width: 480px) {
            .corner-image {
                width: 70px;
            }

            .corner-top-left {
                top: -5px;
                left: -5px;
                margin-left: 0;
                transform: rotate(90deg);
            }

            .corner-top-right {
                top: 0;
                right: 0;
                margin-right: 0;
            }

            .corner-bottom-left {
                left: 0;
                margin-left: 0;
            }

            .corner-bottom-right {
                bottom: -5px;
                right: -5px;
                margin-right: 0;
                transform: rotate(270deg);
            }

            body.menu-opened .corner-bottom-left {
                left: 0;
                margin-left: 0;
            }

            body.menu-opened .corner-bottom-right {
                bottom: calc(var(--menu-height) - 5px);
                right: -5px;
                margin-right: 0;
                transform: rotate(270deg);
            }
        }

        /* Untuk layar yang sangat kecil */
        @media (max-width: 360px) {
            .corner-image {
                width: 60px;
                opacity: 0.7;
            }

            .corner-top-left {
                top: -3px;
                left: -3px;
                transform: rotate(90deg);
            }

            .corner-bottom-right {
                bottom: -3px;
                right: -3px;
                transform: rotate(270deg);
            }

            body.menu-opened .corner-bottom-right {
                bottom: calc(var(--menu-height) - 3px);
                right: -3px;
                transform: rotate(270deg);
            }
        }

        /* Enhanced corner styling */
        .corner-image::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 120%;
            height: 120%;
            background: radial-gradient(circle, rgba(194, 168, 120, 0.1) 0%, transparent 70%);
            transform: translate(-50%, -50%);
            border-radius: 50%;
            z-index: -1;
        }

        /* Responsive corner images - tetap menempel sempurna */
        @media (max-width: 768px) {
            .corner-image {
                width: 80px;
            }

            /* Adjust positioning untuk ukuran yang lebih kecil */
            .corner-top-left {
                margin-left: -220px;
            }

            .corner-bottom-right {
                margin-right: -220px;
            }

            body.menu-opened .corner-bottom-right {
                margin-right: -220px;
            }
        }

        @media (max-width: 480px) {
            .corner-image {
                width: 70px;
            }
        }

        @media (max-width: 360px) {
            .corner-image {
                width: 60px;
                opacity: 0.7;
            }
        }

        /* Button Styles */
        .btn-open {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: var(--white);
            border: none;
            padding: 14px 28px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 25px;
            cursor: pointer;
            box-shadow: 0 4px 15px var(--shadow);
            transition: all var(--animation-speed) ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-open:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px var(--shadow-heavy);
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

        .btn-open.animate__pulse {
            animation: pulse 2s infinite;
        }

        /* Menu Styles */
        .menu {
            position: fixed;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            max-width: 480px;
            height: var(--menu-height);
            background: linear-gradient(135deg, var(--primary-color) 0%, #6b5c45 50%, var(--secondary-color) 100%);
            color: var(--white);
            z-index: 20;
            display: none;
            box-shadow:
                0 -4px 20px var(--shadow-heavy),
                0 -1px 0 rgba(255, 255, 255, 0.1),
                inset 0 1px 0 rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-top: 1px solid rgba(194, 168, 120, 0.3);
        }

        .menu.visible {
            display: block;
        }

        /* Add subtle glow effect */
        .menu::before {
            content: '';
            position: absolute;
            top: -2px;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg,
                    transparent 0%,
                    var(--accent-color) 20%,
                    var(--secondary-color) 50%,
                    var(--accent-color) 80%,
                    transparent 100%);
            opacity: 0.6;
        }

        .menu-wrapper {
            overflow-x: auto;
            overflow-y: hidden;
            height: 100%;
            scrollbar-width: thin;
            scrollbar-color: var(--secondary-color) transparent;
        }

        .menu-wrapper::-webkit-scrollbar {
            height: 3px;
        }

        .menu-wrapper::-webkit-scrollbar-thumb {
            background: var(--secondary-color);
            border-radius: 3px;
        }

        .menu-container {
            display: flex;
            align-items: center;
            height: 100%;
            padding: 0 10px;
            min-width: fit-content;
        }

        .menu button {
            background: none;
            border: none;
            color: var(--white);
            font-size: 11px;
            font-weight: 500;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-width: 70px;
            height: 60px;
            margin: 0 2px;
            cursor: pointer;
            border-radius: 12px;
            transition: all var(--animation-speed) ease;
            text-transform: capitalize;
            position: relative;
            overflow: hidden;
        }

        .menu button::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
            opacity: 0;
            transition: opacity var(--animation-speed) ease;
        }

        .menu button:hover::before {
            opacity: 1;
        }

        .menu button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .menu button.active {
            background: linear-gradient(135deg, var(--secondary-color), var(--accent-color));
            color: var(--primary-color);
            transform: translateY(-2px);
            box-shadow:
                0 4px 15px rgba(0, 0, 0, 0.2),
                inset 0 1px 0 rgba(255, 255, 255, 0.3);
        }

        .menu button.active::before {
            opacity: 0;
        }

        .menu button i {
            font-size: 22px;
            margin-bottom: 4px;
        }

        /* Audio Control */
        #audioControl {
            position: fixed;
            bottom: calc(var(--menu-height) + 20px);
            right: 20px;
            background: linear-gradient(135deg, var(--white), var(--background-light));
            border: 2px solid var(--secondary-color);
            border-radius: 50%;
            width: 50px;
            height: 50px;
            box-shadow:
                0 4px 15px var(--shadow),
                inset 0 1px 0 rgba(255, 255, 255, 0.8);
            cursor: pointer;
            display: none;
            z-index: 15;
            transition: all var(--animation-speed) ease;
            overflow: hidden;
        }

        #audioControl::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle, rgba(194, 168, 120, 0.1) 0%, transparent 70%);
            opacity: 0;
            transition: opacity var(--animation-speed) ease;
        }

        #audioControl:hover::before {
            opacity: 1;
        }

        #audioControl:hover {
            transform: scale(1.1);
            box-shadow:
                0 6px 20px var(--shadow-heavy),
                inset 0 1px 0 rgba(255, 255, 255, 0.8);
            border-color: var(--accent-color);
        }

        #audioControl img {
            width: 24px;
            height: 24px;
        }

        /* Typography */
        h1,
        h2,
        h3 {
            margin: 0;
            line-height: 1.2;
        }

        h2 {
            font-family: 'Great Vibes', cursive;
        }

        /* HOME PAGE */
        .circle-container {
            position: relative;
            width: min(250px, 60vw);
            height: min(250px, 60vw);
            margin: -50px auto 30px;
        }

        .circle-inner {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 75%;
            height: 75%;
            transform: translate(-50%, -50%);
            border-radius: 50%;
            overflow: hidden;
            z-index: 1;
            box-shadow: 0 8px 25px var(--shadow);
        }

        .circle-inner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .circle-frame {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            transform: translate(-50%, -50%);
            object-fit: contain;
            z-index: 2;
        }

        .names-container {
            text-align: center;
            margin-bottom: 30px;
        }

        .names-container h1 {
            font-family: 'Fira Sans', sans-serif;
            font-weight: 600;
            font-size: clamp(18px, 5vw, 24px);
            color: var(--text-primary);
            margin: 8px 0;
        }

        .names-container .and-symbol {
            font-size: clamp(20px, 6vw, 28px);
            color: var(--text-primary);
            font-weight: 300;
        }

        .names-container .date {
            margin-top: 15px;
            font-size: 12px;
            letter-spacing: 3px;
            color: var(--text-primary);
            font-weight: 500;
        }

        .invite-text {
            text-align: center;
            margin-bottom: 40px;
            max-width: 300px;
        }

        .invite-text p {
            margin: 6px 0;
            font-size: 16px;
            color: var(--text-secondary);
        }

        .invite-text .guest-name {
            margin: 15px 0 10px;
            font-size: 20px;
            font-weight: 700;
            color: var(--text-primary);
        }

        .invite-text .warning-name {
            font-size: 10px;
            color: var(--text-light);
            font-style: italic;
        }

        /* PROFILE PAGE */
        #profile {
            text-align: center;
            background-color: var(--background-light);
            color: var(--text-secondary);
            padding-top: 50px;
        }

        #profile .title {
            font-size: clamp(18px, 5vw, 22px);
            font-weight: 700;
            color: var(--secondary-color);
            margin-bottom: 30px;
        }

        #profile .name {
            margin: 25px auto;
            padding: 20px;
            background: var(--white);
            border-radius: var(--border-radius);
            box-shadow: 0 4px 15px var(--shadow);
            max-width: 350px;
            transition: transform var(--animation-speed) ease;
        }

        #profile .name:hover {
            transform: translateY(-5px);
        }

        #profile .name p:first-child {
            font-size: clamp(16px, 4vw, 20px);
            font-weight: 700;
            color: var(--text-light);
            margin-bottom: 10px;
        }

        #profile .name p:last-child {
            font-size: 12px;
            font-weight: 600;
            color: var(--text-light);
            line-height: 1.4;
        }

        #profile span {
            display: block;
            font-size: 24px;
            margin: 20px 0;
            font-weight: 300;
            color: var(--secondary-color);
        }

        /* Carousel Styles */
        .carousel-wrapper {
            max-width: 350px;
            margin: 20px auto;
            background: var(--white);
            border-radius: var(--border-radius);
            box-shadow: 0 4px 15px var(--shadow);
            padding: 20px;
            transition: transform var(--animation-speed) ease;
        }

        .carousel-wrapper:hover {
            transform: translateY(-5px);
        }

        .carousel-item {
            text-align: center;
            color: var(--text-secondary);
            display: none;
        }

        .carousel-item.active {
            display: block;
        }

        .carousel-item p:first-child {
            font-size: clamp(16px, 4vw, 20px);
            font-weight: 700;
            color: var(--text-light);
            margin-bottom: 10px;
        }

        .carousel-item p:last-child {
            font-size: 12px;
            font-weight: 600;
            color: var(--text-light);
            line-height: 1.4;
        }

        .carousel-dots {
            display: flex;
            justify-content: center;
            margin-top: 15px;
            gap: 8px;
        }

        .carousel-dots span {
            width: 25px;
            height: 4px;
            background-color: #ddd;
            border-radius: 2px;
            cursor: pointer;
            transition: all var(--animation-speed) ease;
        }

        .carousel-dots .active {
            background-color: var(--primary-color);
            transform: scaleX(1.5);
        }

        /* QUOTES PAGE */
        #quotes {
            text-align: center;
            background-color: var(--background-cream);
            color: var(--text-primary);
            justify-content: center;
        }

        #quotes h2 {
            font-size: clamp(28px, 8vw, 36px);
            margin-bottom: 30px;
            color: var(--text-primary);
        }

        #quotes p {
            font-size: clamp(14px, 4vw, 18px);
            line-height: 1.8;
            max-width: 400px;
            margin: 0 auto 20px;
            font-style: italic;
        }

        #quotes p:nth-of-type(2) {
            font-size: clamp(10px, 3vw, 12px);
            margin-top: 30px;
        }

        /* SALAM PAGE */
        #salam {
            text-align: center;
            background-color: var(--background-cream);
            color: var(--text-primary);
        }

        #salam h2 {
            font-size: clamp(28px, 8vw, 36px);
            margin-bottom: 30px;
            color: var(--text-primary);
        }

        #salam p {
            font-size: clamp(14px, 4vw, 18px);
            line-height: 1.8;
            max-width: 400px;
            margin: 0 auto;
        }

        #salam .circle-container {
            margin: -80px auto 30px;
        }

        /* RESEPSI & MESANGIH PAGES */
        #resepsi,
        #mesangih {
            text-align: center;
            color: var(--text-primary);
            background-color: var(--accent-color);
        }

        #resepsi .hari,
        #mesangih .hari {
            font-family: 'Great Vibes', cursive;
            font-size: clamp(32px, 8vw, 40px);
            margin-bottom: 20px;
            color: var(--text-primary);
        }

        .resepsi-detail,
        .mesangih-detail {
            background: rgba(255, 255, 255, 0.2);
            padding: 25px 20px;
            border-radius: var(--border-radius);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 15px var(--shadow);
            margin: 20px;
        }

        .judul-resepsi,
        .judul-mesangih {
            font-size: clamp(16px, 4vw, 20px);
            font-weight: 700;
            margin-bottom: 15px;
            font-family: 'Dancing Script', cursive;
        }

        .waktu,
        .tanggal {
            font-size: clamp(20px, 6vw, 26px);
            font-family: 'Lora', serif;
            font-weight: 700;
            margin: 10px 0;
        }

        .lokasi {
            font-size: clamp(12px, 4vw, 16px);
            margin-top: 15px;
            font-weight: 600;
        }

        .icon {
            margin: 0 8px;
            color: var(--text-primary);
        }

        .line-decor {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px 0;
        }

        .line-decor .line {
            height: 1px;
            width: 60px;
            background-color: var(--text-primary);
            margin: 0 15px;
            opacity: 0.6;
        }

        .line-decor .bunga-icon {
            font-size: 20px;
            color: var(--text-primary);
        }

        #resepsi .circle-container,
        #mesangih .circle-container {
            margin: -40px auto 20px;
        }

        /* MAPS PAGE */
        #maps .maps-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            gap: 20px;
        }

        .maps-frame {
            width: 100%;
            max-width: 300px;
            height: 300px;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: 0 8px 25px var(--shadow);
        }

        .maps-frame iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        .maps-info {
            text-align: center;
            color: var(--text-light);
        }

        .maps-info h3 {
            font-size: clamp(18px, 5vw, 22px);
            font-weight: 700;
            margin-bottom: 10px;
        }

        .maps-button {
            display: inline-block;
            margin-top: 20px;
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: var(--white);
            padding: 12px 24px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 600;
            transition: all var(--animation-speed) ease;
            box-shadow: 0 4px 15px var(--shadow);
        }

        .maps-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px var(--shadow-heavy);
        }

        /* RSVP PAGE */
        #rsvp {
            text-align: center;
            padding: 40px 20px;
            color: var(--primary-color);
            justify-content: center;
        }

        #rsvp .judul-section {
            font-family: 'Great Vibes', cursive;
            font-size: clamp(28px, 8vw, 36px);
            margin-bottom: 30px;
            color: var(--primary-color);
        }

        .countdown {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        .countdown .box {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: var(--white);
            border-radius: var(--border-radius);
            padding: 15px;
            min-width: 70px;
            box-shadow: 0 4px 15px var(--shadow);
        }

        .countdown .angka {
            font-size: clamp(18px, 5vw, 24px);
            font-weight: 700;
        }

        .countdown .label {
            font-size: clamp(10px, 3vw, 12px);
            margin-top: 4px;
            opacity: 0.9;
        }

        .deskripsi {
            font-size: clamp(14px, 4vw, 16px);
            color: var(--primary-color);
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .btn-konfirmasi {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: var(--white);
            border: none;
            padding: 14px 28px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 25px;
            cursor: pointer;
            box-shadow: 0 4px 15px var(--shadow);
            transition: all var(--animation-speed) ease;
        }

        .btn-konfirmasi:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px var(--shadow-heavy);
        }

        /* GIFTS PAGE */
        #gifts {
            text-align: center;
            padding: 40px 20px;
            color: var(--text-primary);
            justify-content: center;
        }

        #gifts h2 {
            font-family: 'Dancing Script', cursive;
            font-size: clamp(28px, 8vw, 36px);
            margin-bottom: 20px;
        }

        #gifts p {
            font-family: 'Lora', serif;
            margin-bottom: 30px;
            font-size: clamp(14px, 4vw, 16px);
            line-height: 1.6;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn-cashless {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: var(--white);
            border: none;
            padding: 12px 24px;
            border-radius: 25px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px var(--shadow);
            transition: all var(--animation-speed) ease;
        }

        .btn-cashless:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px var(--shadow-heavy);
        }

        .cashless-wrapper {
            max-width: 350px;
            margin: 20px auto;
            padding: 25px;
            background: var(--white);
            border-radius: var(--border-radius);
            box-shadow: 0 8px 25px var(--shadow);
            transition: all var(--animation-speed) ease;
        }

        .bank-card {
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .bank-card img {
            width: 80px;
            height: auto;
            border-radius: 8px;
        }

        .bank-card h3 {
            margin: 10px 0;
            font-size: clamp(16px, 4vw, 20px);
            font-weight: 700;
            color: var(--text-primary);
        }

        .copy-btn {
            padding: 8px 16px;
            background: var(--primary-color);
            color: var(--white);
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: all var(--animation-speed) ease;
        }

        .copy-btn:hover {
            background: var(--secondary-color);
            color: var(--primary-color);
        }

        /* THANKS PAGE */
        #thanks {
            text-align: center;
            padding: 40px 20px;
            color: var(--text-primary);
            justify-content: center;
        }

        #thanks h2 {
            font-family: 'Dancing Script', cursive;
            font-size: clamp(28px, 8vw, 36px);
            margin-bottom: 20px;
        }

        #thanks p {
            font-family: 'Lora', serif;
            margin-bottom: 40px;
            font-size: clamp(14px, 4vw, 16px);
            line-height: 1.6;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }

        .social-footer {
            margin-top: 60px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        .social-links {
            display: flex;
            gap: 20px;
            font-size: 14px;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }

        .ig-link,
        .wa-link {
            color: var(--text-primary);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all var(--animation-speed) ease;
            padding: 8px 12px;
            border-radius: 20px;
        }

        .ig-link:hover,
        .wa-link:hover {
            color: var(--white);
            background: var(--primary-color);
            transform: translateY(-2px);
        }

        .ig-link i,
        .wa-link i {
            font-size: 18px;
        }

        .credit {
            font-size: 12px;
            color: var(--text-light);
            opacity: 0.8;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .wrapper {
                max-width: 100%;
                border-left: none;
                border-right: none;
            }

            .page {
                padding: 15px;
                padding-bottom: calc(var(--menu-height) + 15px);
            }

            #audioControl {
                bottom: calc(var(--menu-height) + 15px);
                right: 15px;
                width: 45px;
                height: 45px;
            }

            #audioControl img {
                width: 20px;
                height: 20px;
            }
        }

        @media (max-width: 600px) {
            .page {
                padding: 15px;
                padding-bottom: calc(var(--menu-height) + 15px);
            }

            .circle-container {
                margin: -80px auto 20px;
            }

            #salam .circle-container {
                margin: -60px auto 20px;
            }

            #resepsi .circle-container,
            #mesangih .circle-container {
                margin: -20px auto 20px;
            }

            #profile {
                padding-top: 30px;
            }

            .btn-open {
                margin-bottom: -3rem;
            }

            .invite-text {
                margin-bottom: 2rem;
            }
        }

        @media (max-width: 480px) {
            .wrapper {
                box-shadow: none;
            }

            .page {
                padding: 12px;
                padding-bottom: calc(var(--menu-height) + 12px);
            }

            #audioControl {
                bottom: calc(var(--menu-height) + 12px);
                right: 12px;
                width: 40px;
                height: 40px;
            }

            #audioControl img {
                width: 18px;
                height: 18px;
            }

            .circle-container {
                margin: -60px auto 15px;
            }
        }

        @media (max-width: 360px) {
            :root {
                --menu-height: 70px;
            }

            .menu button {
                min-width: 60px;
                height: 50px;
                font-size: 10px;
            }

            .menu button i {
                font-size: 18px;
            }

            .page {
                padding: 10px;
                padding-bottom: calc(var(--menu-height) + 10px);
            }

            #audioControl {
                bottom: calc(var(--menu-height) + 10px);
                right: 10px;
                width: 35px;
                height: 35px;
            }

            #audioControl img {
                width: 16px;
                height: 16px;
            }
        }

        /* Animation Improvements */
        .animate__fadeIn {
            animation-duration: 0.6s !important;
        }

        .animate__fadeOut {
            animation-duration: 0.4s !important;
        }

        .animate__fadeInUp {
            animation-duration: 0.5s !important;
        }

        /* Loading States */
        .loading {
            opacity: 0.7;
            pointer-events: none;
        }

        /* Accessibility */
        @media (prefers-reduced-motion: reduce) {
            * {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }

        /* Focus states for better accessibility */
        button:focus-visible {
            outline: 2px solid var(--secondary-color);
            outline-offset: 2px;
        }

        /* Modal Styles */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(5px);
            z-index: 1000;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .modal-overlay.active {
            display: flex;
        }

        .modal-content {
            background: var(--white);
            border-radius: var(--border-radius);
            width: 100%;
            max-width: 480px;
            max-height: 90vh;
            box-shadow: 0 20px 40px var(--shadow-heavy);
            position: relative;
            overflow: hidden;
            animation: modalSlideIn 0.3s ease-out;
        }

        @keyframes modalSlideIn {
            from {
                opacity: 0;
                transform: scale(0.9) translateY(20px);
            }

            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }

        .modal-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: var(--white);
            padding: 20px;
            text-align: center;
            position: relative;
        }

        .modal-header h3 {
            font-family: 'Dancing Script', cursive;
            font-size: clamp(20px, 5vw, 24px);
            margin: 0;
            font-weight: 700;
        }

        .modal-header-controls {
            position: absolute;
            top: 15px;
            right: 15px;
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .toggle-form-btn {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: var(--white);
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all var(--animation-speed) ease;
            font-size: 14px;
        }

        .toggle-form-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: scale(1.1);
        }

        .toggle-form-btn.form-hidden {
            background: rgba(255, 167, 38, 0.3);
        }

        .modal-close {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: var(--white);
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all var(--animation-speed) ease;
            font-size: 16px;
        }

        .modal-close:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: scale(1.1);
        }

        .modal-body {
            display: flex;
            flex-direction: column;
            height: calc(90vh - 80px);
            max-height: 600px;
        }

        .ucapan-form-section {
            padding: 25px;
            border-bottom: 2px solid var(--background-light);
            background: var(--background-cream);
            transition: all 0.4s ease;
            overflow: hidden;
        }

        .ucapan-form-section.hidden {
            max-height: 0;
            padding: 0 25px;
            border-bottom: none;
            opacity: 0;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--text-primary);
            font-size: 14px;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 14px;
            transition: all var(--animation-speed) ease;
            font-family: 'Fira Sans', sans-serif;
            background: var(--white);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 3px rgba(194, 168, 120, 0.1);
        }

        .form-control.textarea {
            resize: vertical;
            min-height: 80px;
            max-height: 120px;
        }

        .radio-group {
            display: flex;
            gap: 15px;
            margin-top: 8px;
        }

        .radio-item {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
        }

        .radio-item input[type="radio"] {
            width: 18px;
            height: 18px;
            accent-color: var(--secondary-color);
        }

        .radio-item label {
            margin: 0;
            cursor: pointer;
            font-weight: 500;
        }

        .btn-submit {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            color: var(--white);
            border: none;
            padding: 12px 24px;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            transition: all var(--animation-speed) ease;
            width: 100%;
            font-size: 16px;
        }

        .btn-submit:hover:not(:disabled) {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px var(--shadow-heavy);
        }

        .btn-submit:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }

        .ucapan-list-section {
            flex: 1;
            overflow-y: auto;
            padding: 0;
            background: var(--white);
        }

        .ucapan-list-header {
            padding: 20px 25px 15px;
            border-bottom: 1px solid var(--background-light);
            background: var(--white);
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .ucapan-list-header h4 {
            margin: 0;
            font-size: 18px;
            color: var(--text-primary);
            font-weight: 600;
        }

        .ucapan-list {
            padding: 0 25px 25px;
        }

        .ucapan-item {
            background: var(--background-light);
            border-radius: 12px;
            padding: 15px;
            margin-bottom: 15px;
            border-left: 4px solid var(--secondary-color);
            transition: all var(--animation-speed) ease;
        }

        .ucapan-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px var(--shadow);
        }

        .ucapan-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .ucapan-nama {
            font-weight: 600;
            color: var(--text-primary);
            font-size: 14px;
        }

        .ucapan-status {
            font-size: 12px;
            padding: 4px 8px;
            border-radius: 12px;
            font-weight: 500;
        }

        .ucapan-status.hadir {
            background: #e8f5e8;
            color: #2e7d32;
        }

        .ucapan-status.tidak_hadir {
            background: #ffebee;
            color: #c62828;
        }

        .ucapan-text {
            color: var(--text-secondary);
            line-height: 1.5;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .ucapan-date {
            font-size: 11px;
            color: var(--text-light);
            opacity: 0.8;
        }

        .loading-spinner {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .spinner {
            width: 20px;
            height: 20px;
            border: 2px solid var(--background-light);
            border-top: 2px solid var(--secondary-color);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .empty-state {
            text-align: center;
            padding: 40px 20px;
            color: var(--text-light);
        }

        .empty-state i {
            font-size: 48px;
            margin-bottom: 15px;
            opacity: 0.5;
        }

        /* Toast Notification */
        .toast {
            position: fixed;
            top: 20px;
            right: 20px;
            background: var(--white);
            border-radius: 8px;
            padding: 15px 20px;
            box-shadow: 0 4px 20px var(--shadow-heavy);
            z-index: 1100;
            transform: translateX(400px);
            transition: all 0.3s ease;
            border-left: 4px solid var(--secondary-color);
            max-width: 300px;
        }

        .toast.show {
            transform: translateX(0);
        }

        .toast.success {
            border-left-color: #4caf50;
        }

        .toast.error {
            border-left-color: #f44336;
        }

        .toast-content {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .toast-icon {
            font-size: 20px;
        }

        .toast-icon.success {
            color: #4caf50;
        }

        .toast-icon.error {
            color: #f44336;
        }

        .toast-message {
            font-size: 14px;
            color: var(--text-primary);
            font-weight: 500;
        }

        /* Responsive Modal */
        @media (max-width: 600px) {
            .modal-overlay {
                padding: 10px;
            }

            .modal-content {
                max-height: 95vh;
            }

            .modal-body {
                height: calc(95vh - 80px);
            }

            .ucapan-form-section,
            .ucapan-list {
                padding: 20px;
            }

            .ucapan-list-header {
                padding: 15px 20px 10px;
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- MENU NAVIGATION -->
        <nav class="menu" id="menu" role="navigation" aria-label="Menu navigasi utama">
            <div class="menu-wrapper">
                <div class="menu-container" id="menuContainer"></div>
            </div>
        </nav>

        <!-- Corner Images -->
        <img src="https://indoinvite.com/nikah/template/pandora/pandora-classic/PC-BKR.png"
            class="corner-image corner-top-left" alt="" role="presentation">
        <img src="https://indoinvite.com/nikah/template/pandora/pandora-classic/PC-BKR.png"
            class="corner-image corner-top-right" alt="" role="presentation">
        <img src="https://indoinvite.com/nikah/template/pandora/pandora-classic/PC-BKR.png"
            class="corner-image corner-bottom-left" alt="" role="presentation">
        <img src="https://indoinvite.com/nikah/template/pandora/pandora-classic/PC-BKR.png"
            class="corner-image corner-bottom-right" alt="" role="presentation">

        <!-- HOME PAGE -->
        <div id="home" class="page active">
            <div class="circle-container">
                <div class="circle-inner">
                    <img src="https://sin1.contabostorage.com/2db3bf1e16cd47a08843bb881e39cce7:indoinvite-staging/indoinvite-staging/indoinvite-staging/nikah/theme/images/1663620650.png"
                        alt="Foto Keluarga" loading="lazy">
                </div>
                <img class="circle-frame" src="https://indoinvite.com/nikah/template/pandora/pandora-classic/PC-Bor.png"
                    alt="" role="presentation">
            </div>

            <div class="names-container">
                <h1>ANA</h1>
                <div class="and-symbol">&amp;</div>
                <h1>Dita &amp; Radea</h1>
                <p class="date">27 . 08 . 2025</p>
            </div>

            <div class="invite-text">
                <p>Kepada Yth;</p>
                <p>Bapak/Ibu/Saudara/i</p>
                <p class="guest-name">Yogi Prayoga</p>
                <p class="warning-name">Mohon maaf atas kesalahan penyebutan nama ataupun gelar</p>
            </div>

            <button id="btnOpen" class="btn-open animate__animated animate__pulse" onclick="openInvitation()"
                aria-label="Buka Undangan">
                Open Invitation
            </button>
        </div>

        <!-- PROFILE PAGE -->
        <div id="profile" class="page">
            <p class="title">Undangan Metatah</p>

            <div class="name">
                <p class="animate__animated animate__fadeInDown">Ana Febriana Wijaya, S.Kom</p>
                <p class="animate__animated animate__fadeInDown">Putri pertama dari pasangan</p>
                <p class="animate__animated animate__fadeInDown">Sukarno &amp; Ni Komang Trinioni</p>
            </div>

            <span>&amp;</span>

            <div class="carousel-wrapper">
                <div class="carousel">
                    <div class="carousel-item active">
                        <p class="animate__animated animate__fadeInDown">Ni Putu Pradnyaditha Nareshvari Swarna, S.Kom
                        </p>
                        <p class="animate__animated animate__fadeInDown">Putri pertama dari pasangan</p>
                        <p class="animate__animated animate__fadeInDown">I Gede Suwarna &amp; Ni Made Oktaviani</p>
                    </div>
                    <div class="carousel-item">
                        <p class="animate__animated animate__fadeInDown">I Made Radeadhitya Laksmana Swarna</p>
                        <p class="animate__animated animate__fadeInDown">Putra kedua dari pasangan</p>
                        <p class="animate__animated animate__fadeInDown">I Gede Suwarna &amp; Ni Made Oktaviani</p>
                    </div>
                </div>
                <div class="carousel-dots" id="carouselDots" role="tablist" aria-label="Profil keluarga"></div>
            </div>
        </div>

        <!-- QUOTES PAGE -->
        <div id="quotes" class="page">
            <h2 class="animate__animated animate__fadeInDown">Rg Veda X.191.2</h2>
            <p>"Satsyameva jayate nānṛtam"</p>
            <p>Hanya kebenaran yang akan menang, bukan ketidakbenaran<br>
                Semoga Pikiran Baik Datang dari Segala Penjuru</p>
            <p>"Yajur Weda XXV.4"</p>
        </div>

        <!-- SALAM PAGE -->
        <div id="salam" class="page">
            <div class="circle-container">
                <div class="circle-inner">
                    <img src="https://sin1.contabostorage.com/2db3bf1e16cd47a08843bb881e39cce7:indoinvite-staging/indoinvite-staging/indoinvite-staging/nikah/theme/images/1663620650.png"
                        alt="Foto Keluarga" loading="lazy">
                </div>
                <img class="circle-frame"
                    src="https://indoinvite.com/nikah/template/pandora/pandora-classic/PC-Bor.png" alt=""
                    role="presentation">
            </div>
            <h2 class="animate__animated animate__fadeInDown">Om Swastyastu</h2>
            <p>
                Atas Asung Kertha Wara Nugraha Ida Sang Hyang Widhi Wasa/Tuhan Yang Maha Esa,
                kami bermaksud menyelenggarakan Upacara Mepandes putra/putri kami.
            </p>
        </div>

        <!-- RESEPSI PAGE -->
        <div id="resepsi" class="page">
            <div class="circle-container">
                <div class="circle-inner">
                    <img src="https://sin1.contabostorage.com/2db3bf1e16cd47a08843bb881e39cce7:indoinvite-staging/indoinvite-staging/indoinvite-staging/nikah/theme/images/1663620650.png"
                        alt="Foto Keluarga" loading="lazy">
                </div>
                <img class="circle-frame"
                    src="https://indoinvite.com/nikah/template/pandora/pandora-classic/PC-Bor.png" alt=""
                    role="presentation">
            </div>
            <!-- <h2 class="hari animate__animated animate__fadeInDown">SELASA</h2> -->

            <div class="resepsi-detail">
                <div class="line-decor">
                    <span class="line"></span>
                    <span class="bunga-icon">✿</span>
                    <span class="line"></span>
                </div>

                <p class="judul-resepsi">
                    <i class="icon ph-fill ph-hands-praying" aria-hidden="true"></i>
                    Ngekeb &amp; Resepsi
                    <i class="icon ph-fill ph-hands-praying" aria-hidden="true"></i>
                </p>

                <p class="waktu">Pukul 13.00 - Selesai</p>
                <p class="tanggal">26 . 08 . 2025</p>
                <p class="lokasi">Banjar Banyubiru, Jembrana</p>

                <div class="line-decor">
                    <span class="line"></span>
                    <span class="bunga-icon">✿</span>
                    <span class="line"></span>
                </div>
            </div>
        </div>

        <!-- MESANGIH PAGE -->
        <div id="mesangih" class="page">
            <div class="circle-container">
                <div class="circle-inner">
                    <img src="https://sin1.contabostorage.com/2db3bf1e16cd47a08843bb881e39cce7:indoinvite-staging/indoinvite-staging/indoinvite-staging/nikah/theme/images/1663620650.png"
                        alt="Foto Keluarga" loading="lazy">
                </div>
                <img class="circle-frame"
                    src="https://indoinvite.com/nikah/template/pandora/pandora-classic/PC-Bor.png" alt=""
                    role="presentation">
            </div>
            <!-- <h2 class="hari animate__animated animate__fadeInDown">RABU</h2> -->

            <div class="mesangih-detail">
                <div class="line-decor">
                    <span class="line"></span>
                    <span class="bunga-icon">✿</span>
                    <span class="line"></span>
                </div>

                <p class="judul-mesangih">
                    <i class="icon ph-fill ph-hands-praying" aria-hidden="true"></i>
                    Acara Mapandes
                    <i class="icon ph-fill ph-hands-praying" aria-hidden="true"></i>
                </p>

                <p class="waktu">Pukul 09.00 - Selesai</p>
                <p class="tanggal">27 . 08 . 2025</p>
                <p class="lokasi">Banjar Banyubiru, Jembrana</p>

                <div class="line-decor">
                    <span class="line"></span>
                    <span class="bunga-icon">✿</span>
                    <span class="line"></span>
                </div>
            </div>
        </div>

        <!-- MAPS PAGE -->
        <div id="maps" class="page">
            <div class="maps-container animate__animated animate__fadeIn">
                <div class="maps-frame">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3947.517031160069!2d114.59518377501098!3d-8.350689391685995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zOMKwMjEnMDIuNSJTIDExNMKwMzUnNTEuOSJF!5e0!3m2!1sid!2sid!4v1750135451477!5m2!1sid!2sid"
                        allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        title="Lokasi Acara Metatah">
                    </iframe>
                </div>

                <div class="maps-info">
                    <h3>❖ Lokasi Acara ❖</h3>
                    <p>Banjar Banyubiru, Jembrana</p>
                    <a class="maps-button" target="_blank" rel="noopener noreferrer"
                        href="https://maps.app.goo.gl/sEEak5bWnaRhD9V58?g_st=iw"
                        aria-label="Buka petunjuk arah ke lokasi">
                        Petunjuk Ke Lokasi
                    </a>
                </div>
            </div>
        </div>

        <!-- RSVP PAGE -->
        <div id="rsvp" class="page">
            <h2 class="judul-section">Menghitung Hari</h2>

            <div class="countdown" role="timer" aria-live="polite">
                <div class="box">
                    <div class="angka" id="hari">00</div>
                    <div class="label">Hari</div>
                </div>
                <div class="box">
                    <div class="angka" id="jam">00</div>
                    <div class="label">Jam</div>
                </div>
                <div class="box">
                    <div class="angka" id="menit">00</div>
                    <div class="label">Menit</div>
                </div>
                <div class="box">
                    <div class="angka" id="detik">00</div>
                    <div class="label">Detik</div>
                </div>
            </div>

            <p class="deskripsi">
                Tekan tombol dibawah ini untuk<br>mengirim ucapan dan konfirmasi<br>kehadiran
            </p>

            <button class="btn-konfirmasi" onclick="openUcapanModal()"
                aria-label="Konfirmasi kehadiran dan kirim ucapan">
                Konfirmasi &amp; Kirim Ucapan
            </button>
        </div>

        <!-- GIFTS PAGE -->
        <div id="gifts" class="page">
            <h2 class="title animate__animated animate__fadeInDown">Tanda Kasih</h2>
            <p>Terima kasih telah menambah semangat kegembiraan acara kami dengan kehadiran dan hadiah indah Anda.</p>

            <button class="btn-cashless" onclick="toggleCashless()" aria-expanded="false"
                aria-controls="cashless-container">
                🎁 Cashless
            </button>

            <div id="cashless-container" class="cashless-wrapper" style="display: none;" aria-hidden="true">
                <div class="bank-card">
                    <img src="https://assets.satumomen.com/assets/logo-bca-biru-1687975058.png" alt="Logo BCA"
                        loading="lazy">
                    <div>
                        <h3>0402888251</h3>
                        <p>BCA : Ana Febriana Wijaya</p>
                        <button class="copy-btn" onclick="copyRekening('0402888251', this)"
                            aria-label="Salin nomor rekening BCA">
                            Salin Rekening
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- THANKS PAGE -->
        <div id="thanks" class="page">
            <h2 class="title animate__animated animate__fadeInDown">Matur Sukma</h2>
            <p>Terima kasih buat kamu yang sudah meluangkan waktu dan menjadi bagian pada acara kami.</p>

            <div class="social-footer">
                <div class="social-links">
                    <a href="https://instagram.com/yogiprayoga_" target="_blank" rel="noopener noreferrer"
                        class="ig-link" aria-label="Kunjungi Instagram Yogi Prayoga">
                        <i class="ph-fill ph-instagram-logo" aria-hidden="true"></i>
                        @yogiprayoga_
                    </a>
                    <a href="https://wa.me/628237188923" target="_blank" rel="noopener noreferrer" class="wa-link"
                        aria-label="Hubungi via WhatsApp">
                        <i class="ph-fill ph-whatsapp-logo" aria-hidden="true"></i>
                        0822-3718-8923
                    </a>
                </div>
                <p class="credit">© 2025 All rights reserved — by Yogi Prayoga</p>
            </div>
        </div>

        <!-- AUDIO CONTROL -->
        <button id="audioControl" onclick="toggleAudio()" aria-label="Kontrol musik latar belakang"
            title="Play/Pause musik">
            <img id="audioIcon" src="https://cdn-icons-png.flaticon.com/512/727/727269.png" alt="Audio control">
        </button>

        <audio id="bgAudio" loop preload="none">
            <source src="https://acarakami.com/wp-content/uploads/2023/04/Gamelan-Gambelan-MEPANDES-POTONG.mp3"
                type="audio/mp3">
            Your browser does not support the audio element.
        </audio>

        <!-- Modal Ucapan -->
        <div id="ucapanModal" class="modal-overlay">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Ucapan & Konfirmasi Kehadiran</h3>
                    <div class="modal-header-controls">
                        <button class="toggle-form-btn" id="toggleFormBtn" onclick="toggleUcapanForm()"
                            aria-label="Toggle form visibility" title="Sembunyikan/Tampilkan Form">
                            <i class="ph-fill ph-eye-slash"></i>
                        </button>
                        <button class="modal-close" onclick="closeUcapanModal()" aria-label="Tutup modal">×</button>
                    </div>
                </div>
                <div class="modal-body">
                    <!-- Form Section -->
                    <div class="ucapan-form-section">
                        <form id="ucapanForm">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" id="nama" name="nama" class="form-control" required
                                    placeholder="Masukkan nama lengkap Anda">
                            </div>

                            <div class="form-group">
                                <label for="ucapan">Ucapan & Doa</label>
                                <textarea id="ucapan" name="ucapan" class="form-control textarea" required
                                    placeholder="Tuliskan ucapan dan doa terbaik Anda..."></textarea>
                            </div>

                            <div class="form-group">
                                <label>Konfirmasi Kehadiran</label>
                                <div class="radio-group">
                                    <div class="radio-item">
                                        <input type="radio" id="hadir" name="kehadiran" value="hadir"
                                            required>
                                        <label for="hadir">Hadir</label>
                                    </div>
                                    <div class="radio-item">
                                        <input type="radio" id="tidak_hadir" name="kehadiran" value="tidak_hadir"
                                            required>
                                        <label for="tidak_hadir">Tidak Hadir</label>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn-submit" id="submitBtn">
                                Kirim Ucapan
                            </button>
                        </form>
                    </div>

                    <!-- List Section -->
                    <div class="ucapan-list-section">
                        <div class="ucapan-list-header">
                            <h4>Ucapan dari Tamu</h4>
                        </div>
                        <div id="ucapanList" class="ucapan-list">
                            <div class="loading-spinner">
                                <div class="spinner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Configuration
        const CONFIG = {
            pageOrder: ['home', 'profile', 'quotes', 'salam', 'resepsi', 'mesangih', 'maps', 'rsvp', 'gifts', 'thanks'],
            menuIcons: {
                home: 'ph-house-line',
                profile: 'ph-user-circle',
                quotes: 'ph-star-and-crescent',
                salam: 'ph-file-text',
                resepsi: 'ph-calendar',
                mesangih: 'ph-calendar',
                maps: 'ph-map-pin-line',
                rsvp: 'ph-chat-teardrop-dots',
                gifts: 'ph-gift',
                thanks: 'ph-hands-praying',
            },
            menuLabels: {
                home: 'Home',
                profile: 'Profile',
                quotes: 'Kutipan',
                salam: 'Salam',
                resepsi: 'Resepsi',
                mesangih: 'Mesangih',
                maps: 'Maps',
                rsvp: 'RSVP',
                gifts: 'Gifts',
                thanks: 'Thanks'
            },
            targetDate: new Date("2025-08-26T09:00:00").getTime(),
            animationDuration: 500
        };

        // State management
        let currentPage = 'home';
        let isTransitioning = false;
        let slideInterval = null;
        let countdownInterval = null;

        // Utility functions
        const utils = {
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
            },

            throttle(func, limit) {
                let inThrottle;
                return function() {
                    const args = arguments;
                    const context = this;
                    if (!inThrottle) {
                        func.apply(context, args);
                        inThrottle = true;
                        setTimeout(() => inThrottle = false, limit);
                    }
                }
            },

            addLoadingState(element) {
                element.classList.add('loading');
            },

            removeLoadingState(element) {
                element.classList.remove('loading');
            }
        };

        // Menu management
        const MenuManager = {
            render() {
                const container = document.getElementById('menuContainer');
                if (!container) return;

                container.innerHTML = '';
                CONFIG.pageOrder.forEach(id => {
                    const btn = document.createElement('button');
                    btn.innerHTML = `
                        <i class="icon ph-fill ${CONFIG.menuIcons[id]}" aria-hidden="true"></i>
                        <span>${CONFIG.menuLabels[id]}</span>
                    `;
                    btn.onclick = () => PageManager.showPage(id);
                    btn.dataset.pageId = id;
                    btn.setAttribute('aria-label', `Navigasi ke ${CONFIG.menuLabels[id]}`);
                    container.appendChild(btn);
                });
                this.highlightActive();
            },

            highlightActive() {
                document.querySelectorAll('.menu button').forEach(btn => {
                    const isActive = btn.dataset.pageId === currentPage;
                    btn.classList.toggle('active', isActive);
                    btn.setAttribute('aria-current', isActive ? 'page' : 'false');
                });
            }
        };

        // Page management
        const PageManager = {
            showPage(id) {
                if (id === currentPage || isTransitioning) return;

                isTransitioning = true;
                const previous = document.getElementById(currentPage);
                const next = document.getElementById(id);

                if (previous) {
                    previous.classList.remove('animate__fadeIn');
                    previous.classList.add('animate__animated', 'animate__fadeOut');

                    setTimeout(() => {
                        previous.classList.remove('active', 'animate__animated', 'animate__fadeOut');

                        if (next) {
                            next.classList.add('active', 'animate__animated', 'animate__fadeIn');
                            currentPage = id;
                            MenuManager.highlightActive();

                            // Trigger page-specific actions
                            this.onPageChange(id);
                        }

                        isTransitioning = false;
                    }, CONFIG.animationDuration);
                } else {
                    if (next) {
                        next.classList.add('active', 'animate__animated', 'animate__fadeIn');
                        currentPage = id;
                        MenuManager.highlightActive();
                        this.onPageChange(id);
                    }
                    isTransitioning = false;
                }
            },

            onPageChange(pageId) {
                // Page-specific initialization
                switch (pageId) {
                    case 'profile':
                        CarouselManager.start();
                        break;
                    case 'rsvp':
                        CountdownManager.start();
                        break;
                    default:
                        CarouselManager.stop();
                        break;
                }
            }
        };

        // Carousel management
        const CarouselManager = {
            currentSlide: 0,
            items: [],
            dotsContainer: null,

            init() {
                this.items = document.querySelectorAll('.carousel-item');
                this.dotsContainer = document.getElementById('carouselDots');

                if (!this.items.length || !this.dotsContainer) return;

                this.generateDots();
                this.showSlide(0);
            },

            generateDots() {
                this.dotsContainer.innerHTML = '';
                this.items.forEach((_, i) => {
                    const dot = document.createElement('span');
                    dot.onclick = () => {
                        this.showSlide(i);
                        this.resetInterval();
                    };
                    dot.setAttribute('role', 'tab');
                    dot.setAttribute('aria-label', `Slide ${i + 1}`);
                    this.dotsContainer.appendChild(dot);
                });
            },

            showSlide(index) {
                if (!this.items.length) return;

                this.items.forEach((item, i) => {
                    item.classList.remove('active', 'animate__animated', 'animate__fadeInUp');
                    if (this.dotsContainer.children[i]) {
                        this.dotsContainer.children[i].classList.remove('active');
                    }
                });

                if (this.items[index]) {
                    this.items[index].classList.add('active', 'animate__animated', 'animate__fadeInUp');
                }

                if (this.dotsContainer.children[index]) {
                    this.dotsContainer.children[index].classList.add('active');
                }

                this.currentSlide = index;
            },

            nextSlide() {
                const next = (this.currentSlide + 1) % this.items.length;
                this.showSlide(next);
                this.resetInterval();
            },

            resetInterval() {
                clearInterval(slideInterval);
                slideInterval = setInterval(() => this.nextSlide(), 5000);
            },

            start() {
                this.resetInterval();
            },

            stop() {
                clearInterval(slideInterval);
            }
        };

        // Countdown management
        const CountdownManager = {
            start() {
                if (countdownInterval) return;
                this.update();
                countdownInterval = setInterval(() => this.update(), 1000);
            },

            stop() {
                clearInterval(countdownInterval);
                countdownInterval = null;
            },

            update() {
                const now = new Date().getTime();
                const distance = CONFIG.targetDate - now;

                if (distance < 0) {
                    this.setDisplay("00", "00", "00", "00");
                    this.stop();
                    return;
                }

                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                this.setDisplay(
                    String(days).padStart(2, "0"),
                    String(hours).padStart(2, "0"),
                    String(minutes).padStart(2, "0"),
                    String(seconds).padStart(2, "0")
                );
            },

            setDisplay(days, hours, minutes, seconds) {
                const elements = {
                    hari: document.getElementById("hari"),
                    jam: document.getElementById("jam"),
                    menit: document.getElementById("menit"),
                    detik: document.getElementById("detik")
                };

                if (elements.hari) elements.hari.textContent = days;
                if (elements.jam) elements.jam.textContent = hours;
                if (elements.menit) elements.menit.textContent = minutes;
                if (elements.detik) elements.detik.textContent = seconds;
            }
        };

        // Audio management
        const AudioManager = {
            audio: null,
            icon: null,
            isPlaying: false,
            wasPlayingBeforeHidden: false,

            init() {
                this.audio = document.getElementById('bgAudio');
                this.icon = document.getElementById('audioIcon');

                if (!this.audio || !this.icon) return;

                // Handle audio events
                this.audio.addEventListener('play', () => {
                    this.isPlaying = true;
                    this.updateIcon();
                });

                this.audio.addEventListener('pause', () => {
                    this.isPlaying = false;
                    this.updateIcon();
                });

                this.audio.addEventListener('error', (e) => {
                    console.warn('Audio failed to load:', e);
                });

                // Handle page visibility changes for auto pause/play
                this.setupVisibilityListener();
            },

            setupVisibilityListener() {
                document.addEventListener('visibilitychange', () => {
                    if (document.hidden) {
                        // Page is hidden/minimized
                        if (this.isPlaying) {
                            this.wasPlayingBeforeHidden = true;
                            this.pause();
                        }
                    } else {
                        // Page is visible again
                        if (this.wasPlayingBeforeHidden) {
                            this.play();
                            this.wasPlayingBeforeHidden = false;
                        }
                    }
                });
            },

            toggle() {
                if (!this.audio) return;

                try {
                    if (this.audio.paused) {
                        this.play();
                    } else {
                        this.pause();
                    }
                } catch (error) {
                    console.warn('Audio control failed:', error);
                }
            },

            play() {
                if (!this.audio) return;

                try {
                    this.audio.play();
                } catch (error) {
                    console.warn('Audio play failed:', error);
                }
            },

            pause() {
                if (!this.audio) return;

                try {
                    this.audio.pause();
                } catch (error) {
                    console.warn('Audio pause failed:', error);
                }
            },

            updateIcon() {
                if (!this.icon) return;

                this.icon.src = this.isPlaying ?
                    'https://cdn-icons-png.flaticon.com/512/727/727269.png' :
                    'https://cdn-icons-png.flaticon.com/512/727/727240.png';
            }
        };

        // Cashless management
        const CashlessManager = {
            toggle() {
                const container = document.getElementById('cashless-container');
                const button = document.querySelector('.btn-cashless');

                if (!container || !button) return;

                const isVisible = container.style.display !== 'none';
                container.style.display = isVisible ? 'none' : 'block';
                container.setAttribute('aria-hidden', isVisible);
                button.setAttribute('aria-expanded', !isVisible);
            },

            copyToClipboard(text, button) {
                if (!text || !button) return;

                utils.addLoadingState(button);

                if (navigator.clipboard && window.isSecureContext) {
                    navigator.clipboard.writeText(text)
                        .then(() => this.showCopySuccess(button))
                        .catch(() => this.fallbackCopy(text, button))
                        .finally(() => utils.removeLoadingState(button));
                } else {
                    this.fallbackCopy(text, button);
                    utils.removeLoadingState(button);
                }
            },

            fallbackCopy(text, button) {
                try {
                    const textarea = document.createElement('textarea');
                    textarea.value = text;
                    textarea.style.position = 'fixed';
                    textarea.style.opacity = '0';
                    textarea.style.pointerEvents = 'none';
                    document.body.appendChild(textarea);
                    textarea.focus();
                    textarea.select();

                    const success = document.execCommand('copy');
                    document.body.removeChild(textarea);

                    if (success) {
                        this.showCopySuccess(button);
                    } else {
                        this.showCopyError();
                    }
                } catch (err) {
                    console.error('Copy failed:', err);
                    this.showCopyError();
                }
            },

            showCopySuccess(button) {
                const originalText = button.textContent;
                button.textContent = "✅ Disalin!";
                button.disabled = true;

                setTimeout(() => {
                    button.textContent = originalText;
                    button.disabled = false;
                }, 2000);
            },

            showCopyError() {
                // Could implement a toast notification here
                alert("Gagal menyalin. Silakan salin manual.");
            }
        };

        // Security measures
        const SecurityManager = {
            init() {
                // Disable right click
                document.addEventListener('contextmenu', e => e.preventDefault());

                // Disable keyboard shortcuts
                document.addEventListener('keydown', (e) => {
                    // Ctrl + U/C/V/S/Shift+I
                    if (e.ctrlKey && ['u', 'c', 'v', 's'].includes(e.key.toLowerCase())) {
                        e.preventDefault();
                    }

                    if (e.ctrlKey && e.shiftKey && e.key.toLowerCase() === 'i') {
                        e.preventDefault();
                    }

                    // F12
                    if (e.key === 'F12') {
                        e.preventDefault();
                    }

                    // PrintScreen
                    if (e.key === 'PrintScreen') {
                        e.preventDefault();
                        if (navigator.clipboard) {
                            navigator.clipboard.writeText('');
                        }
                    }
                });

                // Disable drag and text selection
                document.addEventListener('dragstart', e => e.preventDefault());
                document.addEventListener('selectstart', e => e.preventDefault());

                // Disable developer tools detection (basic)
                let devtools = {
                    open: false,
                    orientation: null
                };
                const threshold = 160;

                setInterval(() => {
                    if (window.outerHeight - window.innerHeight > threshold ||
                        window.outerWidth - window.innerWidth > threshold) {
                        if (!devtools.open) {
                            devtools.open = true;
                            console.clear();
                        }
                    } else {
                        devtools.open = false;
                    }
                }, 500);
            }
        };

        // Main application controller
        const App = {
            init() {
                // Initialize all managers
                MenuManager.render();
                CarouselManager.init();
                AudioManager.init();
                UcapanModal.init();
                //SecurityManager.init();

                // Set up event listeners
                this.setupEventListeners();

                // Performance optimization: preload next page images
                this.preloadImages();

                console.log('🎉 Undangan Metatah loaded successfully');
            },

            setupEventListeners() {
                // Handle page visibility changes
                document.addEventListener('visibilitychange', () => {
                    if (document.hidden) {
                        CountdownManager.stop();
                        CarouselManager.stop();
                        // Audio akan di-handle oleh AudioManager.setupVisibilityListener()
                    } else {
                        if (currentPage === 'rsvp') {
                            CountdownManager.start();
                        } else if (currentPage === 'profile') {
                            CarouselManager.start();
                        }
                        // Audio akan di-handle oleh AudioManager.setupVisibilityListener()
                    }
                });

                // Handle orientation changes
                window.addEventListener('orientationchange', utils.debounce(() => {
                    // Force a small delay to ensure proper rendering
                    setTimeout(() => {
                        MenuManager.highlightActive();
                    }, 100);
                }, 300));

                // Handle resize events
                window.addEventListener('resize', utils.throttle(() => {
                    // Adjust layout if needed
                    MenuManager.highlightActive();
                }, 250));

                // Handle errors gracefully
                window.addEventListener('error', (e) => {
                    console.error('Application error:', e.error);
                });

                // Handle unhandled promise rejections
                window.addEventListener('unhandledrejection', (e) => {
                    console.error('Unhandled promise rejection:', e.reason);
                    e.preventDefault();
                });
            },

            preloadImages() {
                const imageUrls = [
                    'https://indoinvite.com/nikah/template/pandora/pandora-classic/PC-BKR.png',
                    'https://indoinvite.com/nikah/template/pandora/pandora-classic/PC-Bor.png',
                    'https://assets.satumomen.com/assets/logo-bca-biru-1687975058.png'
                ];

                imageUrls.forEach(url => {
                    const img = new Image();
                    img.src = url;
                });
            }
        };

        // Global functions (for backward compatibility)
        function openInvitation() {
            const btn = document.getElementById('btnOpen');
            if (!btn) return;

            utils.addLoadingState(btn);
            btn.classList.remove('animate__pulse');
            btn.classList.add('animate__animated', 'animate__fadeOut');

            setTimeout(() => {
                btn.style.display = 'none';
                PageManager.showPage('profile');

                // Show menu and audio control
                const menu = document.getElementById('menu');
                const audioControl = document.getElementById('audioControl');

                if (menu) menu.classList.add('visible');
                if (audioControl) audioControl.style.display = 'block';

                // Add class to body untuk corner-image positioning
                document.body.classList.add('menu-opened');

                // Try to play audio
                const audio = document.getElementById('bgAudio');
                if (audio) {
                    audio.play().catch(e => {
                        console.log('Auto-play blocked:', e);
                    });
                }

                utils.removeLoadingState(btn);
            }, 600);
        }

        function toggleAudio() {
            AudioManager.toggle();
        }

        function toggleCashless() {
            CashlessManager.toggle();
        }

        function copyRekening(text, button) {
            CashlessManager.copyToClipboard(text, button);
        }

        // Initialize application when DOM is ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', () => App.init());
        } else {
            App.init();
        }

        // Service Worker registration (if available)
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/sw.js')
                    .then(registration => {
                        console.log('SW registered: ', registration);
                    })
                    .catch(registrationError => {
                        console.log('SW registration failed: ', registrationError);
                    });
            });
        }

        // Performance monitoring
        if ('performance' in window) {
            window.addEventListener('load', () => {
                setTimeout(() => {
                    const perfData = performance.getEntriesByType('navigation')[0];
                    console.log('Page load time:', perfData.loadEventEnd - perfData.loadEventStart, 'ms');
                }, 0);
            });
        }

        // PWA install prompt
        let deferredPrompt;
        window.addEventListener('beforeinstallprompt', (e) => {
            e.preventDefault();
            deferredPrompt = e;

            // Could show custom install button here
            console.log('PWA install available');
        });

        // Handle PWA install
        window.addEventListener('appinstalled', () => {
            console.log('PWA was installed');
            deferredPrompt = null;
        });

        // Analytics (placeholder for future implementation)
        function trackEvent(eventName, eventData = {}) {
            // Implementation would depend on chosen analytics service
            console.log('Event tracked:', eventName, eventData);
        }

        // Ucapan Modal Management
        const UcapanModal = {
            modal: null,
            form: null,
            list: null,
            submitBtn: null,

            init() {
                this.modal = document.getElementById('ucapanModal');
                this.form = document.getElementById('ucapanForm');
                this.list = document.getElementById('ucapanList');
                this.submitBtn = document.getElementById('submitBtn');

                if (this.form) {
                    this.form.addEventListener('submit', (e) => this.handleSubmit(e));
                }

                // Close modal when clicking overlay
                if (this.modal) {
                    this.modal.addEventListener('click', (e) => {
                        if (e.target === this.modal) {
                            this.close();
                        }
                    });
                }

                // Load initial data
                this.loadUcapans();
            },

            open() {
                if (this.modal) {
                    this.modal.classList.add('active');
                    document.body.style.overflow = 'hidden';
                    this.loadUcapans();
                }
            },

            close() {
                if (this.modal) {
                    this.modal.classList.remove('active');
                    document.body.style.overflow = '';
                    this.resetForm();
                }
            },

            resetForm() {
                if (this.form) {
                    this.form.reset();
                }
                if (this.submitBtn) {
                    this.submitBtn.disabled = false;
                    this.submitBtn.textContent = 'Kirim Ucapan';
                }
            },

            async handleSubmit(e) {
                e.preventDefault();

                if (!this.form || !this.submitBtn) return;

                const formData = new FormData(this.form);

                // Disable submit button
                this.submitBtn.disabled = true;
                this.submitBtn.textContent = 'Mengirim...';

                try {
                    const response = await fetch('/ana/ucapan', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                        }
                    });

                    const data = await response.json();

                    if (data.success) {
                        ToastManager.show('Ucapan berhasil dikirim!', 'success');
                        this.resetForm();
                        this.loadUcapans();
                    } else {
                        ToastManager.show(data.message || 'Gagal mengirim ucapan', 'error');
                    }
                } catch (error) {
                    console.error('Error submitting ucapan:', error);
                    ToastManager.show('Terjadi kesalahan. Silakan coba lagi.', 'error');
                } finally {
                    this.submitBtn.disabled = false;
                    this.submitBtn.textContent = 'Kirim Ucapan';
                }
            },

            async loadUcapans() {
                if (!this.list) return;

                try {
                    this.list.innerHTML = '<div class="loading-spinner"><div class="spinner"></div></div>';

                    const response = await fetch('/ana/ucapan', {
                        method: 'GET',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                        }
                    });

                    const data = await response.json();

                    if (data.success && data.data) {
                        this.renderUcapans(data.data);
                    } else {
                        this.renderEmptyState();
                    }
                } catch (error) {
                    console.error('Error loading ucapans:', error);
                    this.renderErrorState();
                }
            },

            renderUcapans(ucapans) {
                if (!this.list) return;

                if (ucapans.length === 0) {
                    this.renderEmptyState();
                    return;
                }

                const ucapanHtml = ucapans.map(ucapan => {
                    const date = new Date(ucapan.created_at);
                    const formattedDate = date.toLocaleDateString('id-ID', {
                        day: '2-digit',
                        month: 'short',
                        year: 'numeric',
                        hour: '2-digit',
                        minute: '2-digit'
                    });

                    const statusClass = ucapan.kehadiran === 'hadir' ? 'hadir' : 'tidak_hadir';
                    const statusText = ucapan.kehadiran === 'hadir' ? 'Hadir' : 'Tidak Hadir';

                    return `
                        <div class="ucapan-item animate__animated animate__fadeInUp">
                            <div class="ucapan-header">
                                <div class="ucapan-nama">${this.escapeHtml(ucapan.nama)}</div>
                                <div class="ucapan-status ${statusClass}">${statusText}</div>
                            </div>
                            <div class="ucapan-text">${this.escapeHtml(ucapan.ucapan)}</div>
                            <div class="ucapan-date">${formattedDate}</div>
                        </div>
                    `;
                }).join('');

                this.list.innerHTML = ucapanHtml;
            },

            renderEmptyState() {
                if (!this.list) return;

                this.list.innerHTML = `
                    <div class="empty-state">
                        <i class="ph-fill ph-chat-teardrop-dots"></i>
                        <p>Belum ada ucapan.<br>Jadilah yang pertama!</p>
                    </div>
                `;
            },

            renderErrorState() {
                if (!this.list) return;

                this.list.innerHTML = `
                    <div class="empty-state">
                        <i class="ph-fill ph-warning-circle"></i>
                        <p>Gagal memuat ucapan.<br>Silakan coba lagi.</p>
                    </div>
                `;
            },

            escapeHtml(text) {
                const div = document.createElement('div');
                div.textContent = text;
                return div.innerHTML;
            }
        };

        // Toast Notification Management
        const ToastManager = {
            show(message, type = 'success') {
                // Remove existing toast
                const existingToast = document.querySelector('.toast');
                if (existingToast) {
                    existingToast.remove();
                }

                // Create new toast
                const toast = document.createElement('div');
                toast.className = `toast ${type}`;

                const iconClass = type === 'success' ? 'ph-check-circle' : 'ph-warning-circle';

                toast.innerHTML = `
                    <div class="toast-content">
                        <i class="toast-icon ${type} ph-fill ${iconClass}"></i>
                        <div class="toast-message">${message}</div>
                    </div>
                `;

                document.body.appendChild(toast);

                // Show toast
                setTimeout(() => {
                    toast.classList.add('show');
                }, 100);

                // Hide toast after 3 seconds
                setTimeout(() => {
                    toast.classList.remove('show');
                    setTimeout(() => {
                        if (toast.parentNode) {
                            toast.parentNode.removeChild(toast);
                        }
                    }, 300);
                }, 3000);
            }
        };

        // Global functions for modal
        function openUcapanModal() {
            UcapanModal.open();
        }

        function closeUcapanModal() {
            UcapanModal.close();
        }

        function toggleUcapanForm() {
            const formSection = document.querySelector('.ucapan-form-section');
            const toggleBtn = document.getElementById('toggleFormBtn');
            const toggleIcon = toggleBtn.querySelector('i');

            if (formSection && toggleBtn) {
                const isHidden = formSection.classList.contains('hidden');

                if (isHidden) {
                    // Show form
                    formSection.classList.remove('hidden');
                    toggleBtn.classList.remove('form-hidden');
                    toggleIcon.className = 'ph-fill ph-eye-slash';
                    toggleBtn.title = 'Sembunyikan Form';
                } else {
                    // Hide form
                    formSection.classList.add('hidden');
                    toggleBtn.classList.add('form-hidden');
                    toggleIcon.className = 'ph-fill ph-eye';
                    toggleBtn.title = 'Tampilkan Form';
                }
            }
        }

        // Export for testing purposes (if needed)
        window.UndanganApp = {
            PageManager,
            MenuManager,
            CarouselManager,
            CountdownManager,
            AudioManager,
            CashlessManager,
            SecurityManager,
            UcapanModal,
            ToastManager,
            utils,
            trackEvent
        };
    </script>

    <!-- Structured Data for SEO -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Event",
        "name": "Upacara Metatah Ana & Dita & Radea",
        "description": "Undangan Upacara Metatah untuk Ana Febriana, Ni Putu Pradnyaditha, dan I Made Radeadhitya",
        "startDate": "2025-08-27T09:00:00+08:00",
        "endDate": "2025-08-27T17:00:00+08:00",
        "location": {
            "@type": "Place",
            "name": "Banjar Banyubiru",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Jembrana",
                "addressRegion": "Bali",
                "addressCountry": "ID"
            }
        },
        "organizer": {
            "@type": "Person",
            "name": "Yogi Prayoga"
        },
        "eventStatus": "https://schema.org/EventScheduled",
        "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode"
    }
    </script>
</body>

</html>
