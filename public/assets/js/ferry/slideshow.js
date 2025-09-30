(function() {
    'use strict';

    const galleryItems = document.querySelectorAll('.custom-gallery-item');
    const lightbox = document.getElementById('customLightbox');
    const lightboxImage = document.getElementById('lightboxImage');
    const lightboxCounter = document.getElementById('lightboxCounter');
    const closeBtn = document.getElementById('closeLightbox');
    const prevBtn = document.getElementById('prevSlide');
    const nextBtn = document.getElementById('nextSlide');

    let currentIndex = 0;
    let images = [];
    let scrollPosition = 0;

    // Collect all images
    galleryItems.forEach((item, index) => {
        images.push(item.getAttribute('data-image'));

        // Click handler dengan preventDefault
        item.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            openLightbox(index);
        });

        // Touch handler untuk mobile
        item.addEventListener('touchend', function(e) {
            e.preventDefault();
            e.stopPropagation();
            openLightbox(index);
        }, { passive: false });
    });

    function openLightbox(index) {
        currentIndex = index;

        // Simpan scroll position sebelum lock
        scrollPosition = window.pageYOffset || document.documentElement.scrollTop;

        lightboxImage.src = images[currentIndex];
        lightbox.classList.add('active');
        document.body.classList.add('lightbox-open');

        // Lock scroll tanpa reset position
        document.body.style.overflow = 'hidden';
        document.body.style.position = 'fixed';
        document.body.style.top = `-${scrollPosition}px`;
        document.body.style.width = '100%';

        updateCounter();
    }

    function closeLightbox() {
        lightbox.classList.remove('active');
        document.body.classList.remove('lightbox-open');

        // Restore scroll position
        document.body.style.overflow = '';
        document.body.style.position = '';
        document.body.style.top = '';
        document.body.style.width = '';

        // Kembalikan ke posisi scroll sebelumnya
        window.scrollTo(0, scrollPosition);
    }

    function changeSlide(direction) {
        currentIndex += direction;

        if (currentIndex >= images.length) {
            currentIndex = 0;
        } else if (currentIndex < 0) {
            currentIndex = images.length - 1;
        }

        // Fade out gambar lama
        lightboxImage.style.opacity = '0';
        lightboxImage.style.transition = 'opacity 0.2s ease';

        // Tunggu fade out selesai, baru ganti gambar
        setTimeout(() => {
            lightboxImage.src = images[currentIndex];
            updateCounter();

            // Fade in gambar baru
            setTimeout(() => {
                lightboxImage.style.opacity = '1';
            }, 50);
        }, 200);
    }

    function updateCounter() {
        lightboxCounter.textContent = `${currentIndex + 1} / ${images.length}`;
    }

    // Event listeners
    closeBtn.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        closeLightbox();
    });

    prevBtn.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        changeSlide(-1);
    });

    nextBtn.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        changeSlide(1);
    });

    // Close saat klik background
    lightbox.addEventListener('click', function(e) {
        if (e.target === lightbox) {
            e.preventDefault();
            closeLightbox();
        }
    });

    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (!lightbox.classList.contains('active')) return;

        if (e.key === 'ArrowLeft') changeSlide(-1);
        if (e.key === 'ArrowRight') changeSlide(1);
        if (e.key === 'Escape') closeLightbox();
    });

    // Prevent scroll saat lightbox aktif (mobile)
    let touchStartY = 0;
    lightbox.addEventListener('touchstart', function(e) {
        touchStartY = e.touches[0].clientY;
    }, { passive: true });

    lightbox.addEventListener('touchmove', function(e) {
        if (lightbox.classList.contains('active')) {
            e.preventDefault();
        }
    }, { passive: false });

})();
