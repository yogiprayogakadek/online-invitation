(function() {
    'use strict';

    const galleryItems = document.querySelectorAll('.custom-gallery-item');
    const lightbox = document.getElementById('customLightbox');
    const lightboxImage = document.getElementById('lightboxImage');
    const lightboxCounter = document.getElementById('lightboxCounter');
    const closeBtn = document.getElementById('closeLightbox');
    const swipeIndicator = document.getElementById('swipeIndicator');

    let currentIndex = 0;
    let images = [];
    let scrollPosition = 0;
    let touchStartX = 0;
    let touchStartY = 0;
    let touchEndX = 0;
    let touchEndY = 0;
    let isSwiping = false;

    // Collect all images
    galleryItems.forEach((item, index) => {
        images.push(item.getAttribute('data-image'));

        item.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            openLightbox(index);
        });
    });

    function openLightbox(index) {
        currentIndex = index;

        // Simpan scroll position
        scrollPosition = window.pageYOffset || document.documentElement.scrollTop;

        lightboxImage.src = images[currentIndex];
        lightbox.classList.add('active');
        document.body.classList.add('lightbox-open');

        // Lock scroll
        document.body.style.overflow = 'hidden';
        document.body.style.position = 'fixed';
        document.body.style.top = `-${scrollPosition}px`;
        document.body.style.width = '100%';

        updateCounter();

        // Show swipe indicator for 2 seconds
        swipeIndicator.classList.add('show');
        setTimeout(() => {
            swipeIndicator.classList.remove('show');
        }, 2000);
    }

    function closeLightbox() {
        lightbox.style.opacity = '0';

        setTimeout(() => {
            lightbox.classList.remove('active');
            lightbox.style.opacity = '';
            document.body.classList.remove('lightbox-open');

            // Restore scroll position
            const currentTop = scrollPosition;
            document.body.style.overflow = '';
            document.body.style.position = '';
            document.body.style.top = '';
            document.body.style.width = '';

            window.scrollTo({
                top: currentTop,
                behavior: 'instant'
            });
        }, 300);
    }

    function changeSlide(direction) {
        currentIndex += direction;

        if (currentIndex >= images.length) {
            currentIndex = 0;
        } else if (currentIndex < 0) {
            currentIndex = images.length - 1;
        }

        // Fade transition
        lightboxImage.style.opacity = '0';

        setTimeout(() => {
            lightboxImage.src = images[currentIndex];
            updateCounter();

            setTimeout(() => {
                lightboxImage.style.opacity = '1';
            }, 50);
        }, 200);
    }

    function updateCounter() {
        lightboxCounter.textContent = `${currentIndex + 1} / ${images.length}`;
    }

    // Close button
    closeBtn.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        closeLightbox();
    });

    // Click outside to close
    lightbox.addEventListener('click', function(e) {
        if (e.target === lightbox) {
            closeLightbox();
        }
    });

    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (!lightbox.classList.contains('active')) return;

        if (e.key === 'ArrowLeft') {
            e.preventDefault();
            changeSlide(-1);
        }
        if (e.key === 'ArrowRight') {
            e.preventDefault();
            changeSlide(1);
        }
        if (e.key === 'Escape') {
            e.preventDefault();
            closeLightbox();
        }
    });

    // Touch/Swipe navigation - IMPROVED untuk semua device
    function handleTouchStart(e) {
        if (!lightbox.classList.contains('active')) return;

        const touch = e.touches[0] || e.changedTouches[0];
        touchStartX = touch.clientX;
        touchStartY = touch.clientY;
        isSwiping = false;
    }

    function handleTouchMove(e) {
        if (!lightbox.classList.contains('active')) return;

        const touch = e.touches[0] || e.changedTouches[0];
        touchEndX = touch.clientX;
        touchEndY = touch.clientY;

        // Detect if horizontal swipe
        const diffX = Math.abs(touchStartX - touchEndX);
        const diffY = Math.abs(touchStartY - touchEndY);

        if (diffX > diffY && diffX > 10) {
            isSwiping = true;
            e.preventDefault(); // Prevent scroll only on horizontal swipe
        }
    }

    function handleTouchEnd(e) {
        if (!lightbox.classList.contains('active') || !isSwiping) {
            isSwiping = false;
            return;
        }

        const swipeThreshold = 50;
        const diffX = touchStartX - touchEndX;
        const diffY = Math.abs(touchStartY - touchEndY);

        // Only trigger if horizontal swipe is dominant
        if (Math.abs(diffX) > swipeThreshold && Math.abs(diffX) > diffY) {
            if (diffX > 0) {
                // Swipe left - next image
                changeSlide(1);
            } else {
                // Swipe right - previous image
                changeSlide(-1);
            }
        }

        // Reset
        touchStartX = 0;
        touchStartY = 0;
        touchEndX = 0;
        touchEndY = 0;
        isSwiping = false;
    }

    // Add touch listeners to lightbox content
    const lightboxContent = document.querySelector('.custom-lightbox-content');

    lightboxContent.addEventListener('touchstart', handleTouchStart, { passive: false });
    lightboxContent.addEventListener('touchmove', handleTouchMove, { passive: false });
    lightboxContent.addEventListener('touchend', handleTouchEnd, { passive: false });

    // Also add to lightbox itself for better coverage
    lightbox.addEventListener('touchstart', handleTouchStart, { passive: true });
    lightbox.addEventListener('touchmove', handleTouchMove, { passive: false });
    lightbox.addEventListener('touchend', handleTouchEnd, { passive: true });

    // Mouse drag navigation (desktop)
    let mouseStartX = 0;
    let mouseEndX = 0;
    let isMouseDragging = false;

    lightboxImage.addEventListener('mousedown', function(e) {
        e.preventDefault();
        mouseStartX = e.clientX;
        isMouseDragging = true;
        lightboxImage.style.cursor = 'grabbing';
    });

    document.addEventListener('mousemove', function(e) {
        if (!isMouseDragging) return;
        mouseEndX = e.clientX;
    });

    document.addEventListener('mouseup', function(e) {
        if (!isMouseDragging) return;
        isMouseDragging = false;
        lightboxImage.style.cursor = 'grab';

        const dragThreshold = 100;
        const diff = mouseStartX - mouseEndX;

        if (Math.abs(diff) > dragThreshold) {
            if (diff > 0) {
                changeSlide(1);
            } else {
                changeSlide(-1);
            }
        }

        mouseStartX = 0;
        mouseEndX = 0;
    });

    // Prevent context menu on long press
    lightboxImage.addEventListener('contextmenu', function(e) {
        e.preventDefault();
    });

})();
