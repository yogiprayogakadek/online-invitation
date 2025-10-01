(function() {
    'use strict';

    // Delay execution untuk memastikan semua elemen loaded
    function initWhenReady() {
        const lightbox = document.getElementById('customLightbox');
        const galleryItems = document.querySelectorAll('.custom-gallery-item');

        if (!lightbox || galleryItems.length === 0) {
            // Retry setelah 100ms jika elemen belum ada
            setTimeout(initWhenReady, 100);
            return;
        }

        initGallery();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initWhenReady);
    } else {
        initWhenReady();
    }

    function initGallery() {
        const galleryItems = document.querySelectorAll('.custom-gallery-item');
        const lightbox = document.getElementById('customLightbox');
        const lightboxImage = document.getElementById('lightboxImage');
        const lightboxCounter = document.getElementById('lightboxCounter');
        const closeBtn = document.getElementById('closeLightbox');
        const swipeIndicator = document.getElementById('swipeIndicator');

        if (!lightbox || !lightboxImage || !closeBtn) {
            console.error('Required elements not found');
            return;
        }

        let currentIndex = 0;
        let images = [];
        let scrollPosition = 0;
        let touchStartX = 0;
        let touchStartY = 0;
        let isSwiping = false;
        let isLightboxOpen = false; // Flag untuk prevent double execution

        // Collect images
        galleryItems.forEach((item, index) => {
            const imgSrc = item.getAttribute('data-image');
            if (imgSrc) {
                images.push(imgSrc);
            }

            // Gunakan event listener yang lebih aman
            item.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                e.stopImmediatePropagation();

                if (!isLightboxOpen) { // Prevent double click
                    openLightbox(index);
                }

                return false;
            }, { once: false, passive: false });
        });

        function openLightbox(index) {
            if (!images[index] || isLightboxOpen) return;

            isLightboxOpen = true;
            currentIndex = index;
            scrollPosition = window.pageYOffset;

            // Preload image
            const img = new Image();
            img.onload = function() {
                lightboxImage.src = images[currentIndex];
                lightbox.classList.add('active');
                document.body.classList.add('lightbox-open');

                // Lock scroll
                document.body.style.overflow = 'hidden';
                document.body.style.position = 'fixed';
                document.body.style.top = `-${scrollPosition}px`;
                document.body.style.width = '100%';

                updateCounter();

                if (swipeIndicator) {
                    swipeIndicator.classList.add('show');
                    setTimeout(() => {
                        swipeIndicator.classList.remove('show');
                    }, 2000);
                }
            };
            img.onerror = function() {
                console.error('Failed to load image:', images[currentIndex]);
                isLightboxOpen = false;
            };
            img.src = images[currentIndex];
        }

        function closeLightbox() {
            if (!isLightboxOpen) return;

            lightbox.style.opacity = '0';

            setTimeout(() => {
                lightbox.classList.remove('active');
                lightbox.style.opacity = '';
                document.body.classList.remove('lightbox-open');

                const scrollTop = scrollPosition;
                document.body.style.overflow = '';
                document.body.style.position = '';
                document.body.style.top = '';
                document.body.style.width = '';

                window.scrollTo(0, scrollTop);

                isLightboxOpen = false;
            }, 300);
        }

        function changeSlide(direction) {
            if (!isLightboxOpen) return;

            currentIndex += direction;

            if (currentIndex >= images.length) {
                currentIndex = 0;
            } else if (currentIndex < 0) {
                currentIndex = images.length - 1;
            }

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
            if (lightboxCounter) {
                lightboxCounter.textContent = `${currentIndex + 1} / ${images.length}`;
            }
        }

        // Event listeners
        closeBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            closeLightbox();
            return false;
        }, { passive: false });

        lightbox.addEventListener('click', function(e) {
            if (e.target === lightbox) {
                e.preventDefault();
                closeLightbox();
            }
        }, { passive: false });

        // Keyboard
        document.addEventListener('keydown', function(e) {
            if (!isLightboxOpen) return;

            switch(e.key) {
                case 'ArrowLeft':
                    e.preventDefault();
                    changeSlide(-1);
                    break;
                case 'ArrowRight':
                    e.preventDefault();
                    changeSlide(1);
                    break;
                case 'Escape':
                    e.preventDefault();
                    closeLightbox();
                    break;
            }
        });

        // Touch events
        lightbox.addEventListener('touchstart', function(e) {
            if (!isLightboxOpen) return;
            const touch = e.touches[0];
            touchStartX = touch.clientX;
            touchStartY = touch.clientY;
            isSwiping = false;
        }, { passive: true });

        lightbox.addEventListener('touchmove', function(e) {
            if (!isLightboxOpen) return;

            const touch = e.touches[0];
            const diffX = Math.abs(touchStartX - touch.clientX);
            const diffY = Math.abs(touchStartY - touch.clientY);

            if (diffX > diffY && diffX > 10) {
                isSwiping = true;
                e.preventDefault();
            }
        }, { passive: false });

        lightbox.addEventListener('touchend', function(e) {
            if (!isLightboxOpen || !isSwiping) {
                isSwiping = false;
                return;
            }

            const touch = e.changedTouches[0];
            const diffX = touchStartX - touch.clientX;

            if (Math.abs(diffX) > 50) {
                e.preventDefault();
                changeSlide(diffX > 0 ? 1 : -1);
            }

            isSwiping = false;
        }, { passive: false });

        // Prevent context menu
        lightboxImage.addEventListener('contextmenu', function(e) {
            e.preventDefault();
            return false;
        });
    }
})();
