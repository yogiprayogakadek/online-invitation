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
    let touchEndX = 0;
    let isDragging = false;
    
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
    
    // Touch/Swipe navigation
    lightbox.addEventListener('touchstart', function(e) {
        if (!lightbox.classList.contains('active')) return;
        touchStartX = e.changedTouches[0].screenX;
        isDragging = true;
    }, { passive: true });
    
    lightbox.addEventListener('touchmove', function(e) {
        if (!isDragging) return;
        touchEndX = e.changedTouches[0].screenX;
    }, { passive: true });
    
    lightbox.addEventListener('touchend', function(e) {
        if (!isDragging) return;
        isDragging = false;
        
        const swipeThreshold = 50;
        const diff = touchStartX - touchEndX;
        
        if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0) {
                // Swipe left - next image
                changeSlide(1);
            } else {
                // Swipe right - previous image
                changeSlide(-1);
            }
        }
        
        touchStartX = 0;
        touchEndX = 0;
    }, { passive: true });
    
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
                // Drag left - next image
                changeSlide(1);
            } else {
                // Drag right - previous image
                changeSlide(-1);
            }
        }
        
        mouseStartX = 0;
        mouseEndX = 0;
    });
    
})();