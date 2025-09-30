<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lightbox Gallery</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            padding: 20px;
        }

        .gallery-container {
            display: flex;
            flex-wrap: wrap;
            gap: 9px;
            justify-content: center;
            max-width: 1400px;
            margin: 0 auto;
        }

        .gallery-item {
            position: relative;
            flex: 1 1 auto;
            height: 289px;
            min-width: 193px;
            max-width: 300px;
            overflow: hidden;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .gallery-item img {
            aspect-ratio: 1400 / 2100;
        }

        .gallery-item:hover {
            transform: scale(1.02);
        }

        .gallery-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .gallery-overlay::after {
            content: '+';
            font-size: 60px;
            font-weight: 300;
            color: rgba(255, 255, 255, 0.8);
        }

        /* Lightbox Styles */
        .lightbox {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.95);
            z-index: 9999;
            animation: fadeIn 0.3s ease;
        }

        .lightbox.active {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .lightbox-content {
            position: relative;
            max-width: 90%;
            max-height: 90%;
            animation: zoomIn 0.3s ease;
        }

        .lightbox-image {
            max-width: 100%;
            max-height: 90vh;
            object-fit: contain;
        }

        .lightbox-close {
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 40px;
            color: white;
            cursor: pointer;
            z-index: 10000;
            background: none;
            border: none;
            transition: transform 0.2s;
        }

        .lightbox-close:hover {
            transform: scale(1.2);
        }

        .lightbox-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 60px;
            color: white;
            cursor: pointer;
            background: rgba(0, 0, 0, 0.5);
            border: none;
            padding: 20px;
            transition: background 0.3s;
            user-select: none;
        }

        .lightbox-nav:hover {
            background: rgba(0, 0, 0, 0.8);
        }

        .lightbox-prev {
            left: 20px;
        }

        .lightbox-next {
            right: 20px;
        }

        .lightbox-counter {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            font-size: 18px;
            background: rgba(0, 0, 0, 0.7);
            padding: 10px 20px;
            border-radius: 20px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes zoomIn {
            from {
                transform: scale(0.8);
            }

            to {
                transform: scale(1);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .gallery-item {
                height: 239px;
                min-width: 150px;
            }

            .gallery-container {
                gap: 8px;
            }

            .lightbox-nav {
                font-size: 40px;
                padding: 10px;
            }

            .lightbox-close {
                font-size: 30px;
                top: 10px;
                right: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="gallery-container" id="gallery">
        <!-- Gallery items akan di-generate oleh JavaScript -->
    </div>

    <div class="lightbox" id="lightbox">
        <button class="lightbox-close" onclick="closeLightbox()">&times;</button>
        <button class="lightbox-nav lightbox-prev" onclick="changeSlide(-1)">&#10094;</button>
        <div class="lightbox-content">
            <img class="lightbox-image" id="lightbox-img" src="" alt="Gallery Image">
        </div>
        <button class="lightbox-nav lightbox-next" onclick="changeSlide(1)">&#10095;</button>
        <div class="lightbox-counter" id="counter"></div>
    </div>

    <script>
        // Array urutan gambar sesuai contoh
        const imageOrder = [1, 2, 3, 4, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 6, 7, 8, 9];
        let currentIndex = 0;
        const images = [];

        // Generate gallery items
        function generateGallery() {
            const gallery = document.getElementById('gallery');

            imageOrder.forEach((num, index) => {
                const ext = num === 19 ? 'jpeg' : 'jpg';
                const imgPath = `assets/images/ferry/galleries/${num}.${ext}`;

                // Simpan path gambar
                images.push(imgPath);

                // Buat gallery item
                const item = document.createElement('a');
                item.className = 'gallery-item';
                item.href = '#';
                item.onclick = (e) => {
                    e.preventDefault();
                    openLightbox(index);
                };

                const img = document.createElement('img');
                img.className = 'gallery-image';
                img.src = imgPath;
                img.alt = `Gallery ${num}`;
                img.loading = 'lazy';
                img.width = 1400;
                img.height = 2100;

                const overlay = document.createElement('div');
                overlay.className = 'gallery-overlay';

                item.appendChild(img);
                item.appendChild(overlay);
                gallery.appendChild(item);
            });
        }

        // Buka lightbox
        function openLightbox(index) {
            currentIndex = index;
            const lightbox = document.getElementById('lightbox');
            const img = document.getElementById('lightbox-img');

            img.src = images[currentIndex];
            lightbox.classList.add('active');
            updateCounter();

            // Prevent body scroll
            document.body.style.overflow = 'hidden';
        }

        // Tutup lightbox
        function closeLightbox() {
            const lightbox = document.getElementById('lightbox');
            lightbox.classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        // Ganti slide
        function changeSlide(direction) {
            currentIndex += direction;

            // Loop ke awal/akhir
            if (currentIndex >= images.length) {
                currentIndex = 0;
            } else if (currentIndex < 0) {
                currentIndex = images.length - 1;
            }

            const img = document.getElementById('lightbox-img');
            img.style.animation = 'none';
            setTimeout(() => {
                img.src = images[currentIndex];
                img.style.animation = 'zoomIn 0.3s ease';
                updateCounter();
            }, 50);
        }

        // Update counter
        function updateCounter() {
            const counter = document.getElementById('counter');
            counter.textContent = `${currentIndex + 1} / ${images.length}`;
        }

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            const lightbox = document.getElementById('lightbox');
            if (lightbox.classList.contains('active')) {
                if (e.key === 'ArrowLeft') changeSlide(-1);
                if (e.key === 'ArrowRight') changeSlide(1);
                if (e.key === 'Escape') closeLightbox();
            }
        });

        // Close lightbox saat klik di luar gambar
        document.getElementById('lightbox').addEventListener('click', (e) => {
            if (e.target.id === 'lightbox') {
                closeLightbox();
            }
        });

        // Initialize gallery
        generateGallery();
    </script>
</body>

</html>
