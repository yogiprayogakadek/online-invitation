// Configuration
const CONFIG = {
    pageOrder: [
        "home",
        "profile",
        "quotes",
        "salam",
        "resepsi",
        "mesangih",
        "maps",
        "rsvp",
        "gifts",
        "thanks",
    ],
    menuIcons: {
        home: "ph-house-line",
        profile: "ph-user-circle",
        quotes: "ph-star-and-crescent",
        salam: "ph-file-text",
        resepsi: "ph-calendar",
        mesangih: "ph-calendar",
        maps: "ph-map-pin-line",
        rsvp: "ph-chat-teardrop-dots",
        gifts: "ph-gift",
        thanks: "ph-hands-praying",
    },
    menuLabels: {
        home: "Home",
        profile: "Profile",
        quotes: "Kutipan",
        salam: "Salam",
        resepsi: "Resepsi",
        mesangih: "Mesangih",
        maps: "Maps",
        rsvp: "RSVP",
        gifts: "Gifts",
        thanks: "Thanks",
    },
    targetDate: new Date("2025-08-26T09:00:00").getTime(),
    animationDuration: 500,
};

// State management
let currentPage = "home";
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
        return function () {
            const args = arguments;
            const context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(() => (inThrottle = false), limit);
            }
        };
    },

    addLoadingState(element) {
        element.classList.add("loading");
    },

    removeLoadingState(element) {
        element.classList.remove("loading");
    },
};

// Menu management
const MenuManager = {
    render() {
        const container = document.getElementById("menuContainer");
        if (!container) return;

        container.innerHTML = "";
        CONFIG.pageOrder.forEach((id) => {
            const btn = document.createElement("button");
            btn.innerHTML = `
                        <i class="icon ph-fill ${CONFIG.menuIcons[id]}" aria-hidden="true"></i>
                        <span>${CONFIG.menuLabels[id]}</span>
                    `;
            btn.onclick = () => PageManager.showPage(id);
            btn.dataset.pageId = id;
            btn.setAttribute(
                "aria-label",
                `Navigasi ke ${CONFIG.menuLabels[id]}`
            );
            container.appendChild(btn);
        });
        this.highlightActive();
    },

    highlightActive() {
        document.querySelectorAll(".menu button").forEach((btn) => {
            const isActive = btn.dataset.pageId === currentPage;
            btn.classList.toggle("active", isActive);
            btn.setAttribute("aria-current", isActive ? "page" : "false");
        });
    },
};

// Page management
const PageManager = {
    showPage(id) {
        if (id === currentPage || isTransitioning) return;

        isTransitioning = true;
        const previous = document.getElementById(currentPage);
        const next = document.getElementById(id);

        if (previous) {
            previous.classList.remove("animate__fadeIn");
            previous.classList.add("animate__animated", "animate__fadeOut");

            setTimeout(() => {
                previous.classList.remove(
                    "active",
                    "animate__animated",
                    "animate__fadeOut"
                );

                if (next) {
                    next.classList.add(
                        "active",
                        "animate__animated",
                        "animate__fadeIn"
                    );
                    currentPage = id;
                    MenuManager.highlightActive();

                    // Trigger page-specific actions
                    this.onPageChange(id);
                }

                isTransitioning = false;
            }, CONFIG.animationDuration);
        } else {
            if (next) {
                next.classList.add(
                    "active",
                    "animate__animated",
                    "animate__fadeIn"
                );
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
            case "profile":
                CarouselManager.start();
                break;
            case "rsvp":
                CountdownManager.start();
                break;
            default:
                CarouselManager.stop();
                break;
        }
    },
};

// Carousel management
const CarouselManager = {
    currentSlide: 0,
    items: [],
    dotsContainer: null,

    init() {
        this.items = document.querySelectorAll(".carousel-item");
        this.dotsContainer = document.getElementById("carouselDots");

        if (!this.items.length || !this.dotsContainer) return;

        this.generateDots();
        this.showSlide(0);
    },

    generateDots() {
        this.dotsContainer.innerHTML = "";
        this.items.forEach((_, i) => {
            const dot = document.createElement("span");
            dot.onclick = () => {
                this.showSlide(i);
                this.resetInterval();
            };
            dot.setAttribute("role", "tab");
            dot.setAttribute("aria-label", `Slide ${i + 1}`);
            this.dotsContainer.appendChild(dot);
        });
    },

    showSlide(index) {
        if (!this.items.length) return;

        this.items.forEach((item, i) => {
            item.classList.remove(
                "active",
                "animate__animated",
                "animate__fadeInUp"
            );
            if (this.dotsContainer.children[i]) {
                this.dotsContainer.children[i].classList.remove("active");
            }
        });

        if (this.items[index]) {
            this.items[index].classList.add(
                "active",
                "animate__animated",
                "animate__fadeInUp"
            );
        }

        if (this.dotsContainer.children[index]) {
            this.dotsContainer.children[index].classList.add("active");
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
    },
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
        const hours = Math.floor(
            (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
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
            detik: document.getElementById("detik"),
        };

        if (elements.hari) elements.hari.textContent = days;
        if (elements.jam) elements.jam.textContent = hours;
        if (elements.menit) elements.menit.textContent = minutes;
        if (elements.detik) elements.detik.textContent = seconds;
    },
};

// Audio management
const AudioManager = {
    audio: null,
    icon: null,
    isPlaying: false,
    wasPlayingBeforeHidden: false,

    init() {
        this.audio = document.getElementById("bgAudio");
        this.icon = document.getElementById("audioIcon");

        if (!this.audio || !this.icon) return;

        // Handle audio events
        this.audio.addEventListener("play", () => {
            this.isPlaying = true;
            this.updateIcon();
        });

        this.audio.addEventListener("pause", () => {
            this.isPlaying = false;
            this.updateIcon();
        });

        this.audio.addEventListener("error", (e) => {
            console.warn("Audio failed to load:", e);
        });

        // Handle page visibility changes for auto pause/play
        this.setupVisibilityListener();
    },

    setupVisibilityListener() {
        document.addEventListener("visibilitychange", () => {
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
            console.warn("Audio control failed:", error);
        }
    },

    play() {
        if (!this.audio) return;

        try {
            this.audio.play();
        } catch (error) {
            console.warn("Audio play failed:", error);
        }
    },

    pause() {
        if (!this.audio) return;

        try {
            this.audio.pause();
        } catch (error) {
            console.warn("Audio pause failed:", error);
        }
    },

    updateIcon() {
        if (!this.icon) return;

        this.icon.src = this.isPlaying
            ? "https://cdn-icons-png.flaticon.com/512/727/727269.png"
            : "https://cdn-icons-png.flaticon.com/512/727/727240.png";
    },
};

// Cashless management
const CashlessManager = {
    toggle() {
        const container = document.getElementById("cashless-container");
        const button = document.querySelector(".btn-cashless");

        if (!container || !button) return;

        const isVisible = container.style.display !== "none";
        container.style.display = isVisible ? "none" : "block";
        container.setAttribute("aria-hidden", isVisible);
        button.setAttribute("aria-expanded", !isVisible);
    },

    copyToClipboard(text, button) {
        if (!text || !button) return;

        utils.addLoadingState(button);

        if (navigator.clipboard && window.isSecureContext) {
            navigator.clipboard
                .writeText(text)
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
            const textarea = document.createElement("textarea");
            textarea.value = text;
            textarea.style.position = "fixed";
            textarea.style.opacity = "0";
            textarea.style.pointerEvents = "none";
            document.body.appendChild(textarea);
            textarea.focus();
            textarea.select();

            const success = document.execCommand("copy");
            document.body.removeChild(textarea);

            if (success) {
                this.showCopySuccess(button);
            } else {
                this.showCopyError();
            }
        } catch (err) {
            console.error("Copy failed:", err);
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
    },
};

// Security measures
const SecurityManager = {
    init() {
        // Disable right click
        document.addEventListener("contextmenu", (e) => e.preventDefault());

        // Disable keyboard shortcuts
        document.addEventListener("keydown", (e) => {
            // Ctrl + U/C/V/S/Shift+I
            if (
                e.ctrlKey &&
                ["u", "c", "v", "s"].includes(e.key.toLowerCase())
            ) {
                e.preventDefault();
            }

            if (e.ctrlKey && e.shiftKey && e.key.toLowerCase() === "i") {
                e.preventDefault();
            }

            // F12
            if (e.key === "F12") {
                e.preventDefault();
            }

            // PrintScreen
            if (e.key === "PrintScreen") {
                e.preventDefault();
                if (navigator.clipboard) {
                    navigator.clipboard.writeText("");
                }
            }
        });

        // Disable drag and text selection
        document.addEventListener("dragstart", (e) => e.preventDefault());
        document.addEventListener("selectstart", (e) => e.preventDefault());

        // Disable developer tools detection (basic)
        let devtools = {
            open: false,
            orientation: null,
        };
        const threshold = 160;

        setInterval(() => {
            if (
                window.outerHeight - window.innerHeight > threshold ||
                window.outerWidth - window.innerWidth > threshold
            ) {
                if (!devtools.open) {
                    devtools.open = true;
                    console.clear();
                }
            } else {
                devtools.open = false;
            }
        }, 500);
    },
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

        console.log("🎉 Undangan Metatah loaded successfully");
    },

    setupEventListeners() {
        // Handle page visibility changes
        document.addEventListener("visibilitychange", () => {
            if (document.hidden) {
                CountdownManager.stop();
                CarouselManager.stop();
                // Audio akan di-handle oleh AudioManager.setupVisibilityListener()
            } else {
                if (currentPage === "rsvp") {
                    CountdownManager.start();
                } else if (currentPage === "profile") {
                    CarouselManager.start();
                }
                // Audio akan di-handle oleh AudioManager.setupVisibilityListener()
            }
        });

        // Handle orientation changes
        window.addEventListener(
            "orientationchange",
            utils.debounce(() => {
                // Force a small delay to ensure proper rendering
                setTimeout(() => {
                    MenuManager.highlightActive();
                }, 100);
            }, 300)
        );

        // Handle resize events
        window.addEventListener(
            "resize",
            utils.throttle(() => {
                // Adjust layout if needed
                MenuManager.highlightActive();
            }, 250)
        );

        // Handle errors gracefully
        window.addEventListener("error", (e) => {
            console.error("Application error:", e.error);
        });

        // Handle unhandled promise rejections
        window.addEventListener("unhandledrejection", (e) => {
            console.error("Unhandled promise rejection:", e.reason);
            e.preventDefault();
        });
    },

    preloadImages() {
        const imageUrls = [
            "https://indoinvite.com/nikah/template/pandora/pandora-classic/PC-BKR.png",
            "https://indoinvite.com/nikah/template/pandora/pandora-classic/PC-Bor.png",
            "https://assets.satumomen.com/assets/logo-bca-biru-1687975058.png",
        ];

        imageUrls.forEach((url) => {
            const img = new Image();
            img.src = url;
        });
    },
};

// Global functions (for backward compatibility)
function openInvitation() {
    const btn = document.getElementById("btnOpen");
    if (!btn) return;

    utils.addLoadingState(btn);
    btn.classList.remove("animate__pulse");
    btn.classList.add("animate__animated", "animate__fadeOut");

    setTimeout(() => {
        btn.style.display = "none";
        PageManager.showPage("profile");

        // Show menu and audio control
        const menu = document.getElementById("menu");
        const audioControl = document.getElementById("audioControl");

        if (menu) menu.classList.add("visible");
        if (audioControl) audioControl.style.display = "block";

        // Add class to body untuk corner-image positioning
        document.body.classList.add("menu-opened");

        // Try to play audio
        const audio = document.getElementById("bgAudio");
        if (audio) {
            audio.play().catch((e) => {
                console.log("Auto-play blocked:", e);
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
if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", () => App.init());
} else {
    App.init();
}

// Service Worker registration (if available)
if ("serviceWorker" in navigator) {
    window.addEventListener("load", () => {
        navigator.serviceWorker
            .register("/sw.js")
            .then((registration) => {
                console.log("SW registered: ", registration);
            })
            .catch((registrationError) => {
                console.log("SW registration failed: ", registrationError);
            });
    });
}

// Performance monitoring
if ("performance" in window) {
    window.addEventListener("load", () => {
        setTimeout(() => {
            const perfData = performance.getEntriesByType("navigation")[0];
            console.log(
                "Page load time:",
                perfData.loadEventEnd - perfData.loadEventStart,
                "ms"
            );
        }, 0);
    });
}

// PWA install prompt
let deferredPrompt;
window.addEventListener("beforeinstallprompt", (e) => {
    e.preventDefault();
    deferredPrompt = e;

    // Could show custom install button here
    console.log("PWA install available");
});

// Handle PWA install
window.addEventListener("appinstalled", () => {
    console.log("PWA was installed");
    deferredPrompt = null;
});

// Analytics (placeholder for future implementation)
function trackEvent(eventName, eventData = {}) {
    // Implementation would depend on chosen analytics service
    console.log("Event tracked:", eventName, eventData);
}

// Ucapan Modal Management
const UcapanModal = {
    modal: null,
    form: null,
    list: null,
    submitBtn: null,

    init() {
        this.modal = document.getElementById("ucapanModal");
        this.form = document.getElementById("ucapanForm");
        this.list = document.getElementById("ucapanList");
        this.submitBtn = document.getElementById("submitBtn");

        if (this.form) {
            this.form.addEventListener("submit", (e) => this.handleSubmit(e));
        }

        // Close modal when clicking overlay
        if (this.modal) {
            this.modal.addEventListener("click", (e) => {
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
            this.modal.classList.add("active");
            document.body.style.overflow = "hidden";
            this.loadUcapans();
        }
    },

    close() {
        if (this.modal) {
            this.modal.classList.remove("active");
            document.body.style.overflow = "";
            this.resetForm();
        }
    },

    resetForm() {
        if (this.form) {
            this.form.reset();
        }
        if (this.submitBtn) {
            this.submitBtn.disabled = false;
            this.submitBtn.textContent = "Kirim Ucapan";
        }
    },

    async handleSubmit(e) {
        e.preventDefault();

        if (!this.form || !this.submitBtn) return;

        const formData = new FormData(this.form);

        // Disable submit button
        this.submitBtn.disabled = true;
        this.submitBtn.textContent = "Mengirim...";

        try {
            const response = await fetch("/ana/ucapan", {
                method: "POST",
                body: formData,
                headers: {
                    "X-Requested-With": "XMLHttpRequest",
                },
            });

            const data = await response.json();

            if (data.success) {
                ToastManager.show("Ucapan berhasil dikirim!", "success");
                this.resetForm();
                this.loadUcapans();
            } else {
                ToastManager.show(
                    data.message || "Gagal mengirim ucapan",
                    "error"
                );
            }
        } catch (error) {
            console.error("Error submitting ucapan:", error);
            ToastManager.show("Terjadi kesalahan. Silakan coba lagi.", "error");
        } finally {
            this.submitBtn.disabled = false;
            this.submitBtn.textContent = "Kirim Ucapan";
        }
    },

    async loadUcapans() {
        if (!this.list) return;

        try {
            this.list.innerHTML =
                '<div class="loading-spinner"><div class="spinner"></div></div>';

            const response = await fetch("/ana/ucapan", {
                method: "GET",
                headers: {
                    "X-Requested-With": "XMLHttpRequest",
                },
            });

            const data = await response.json();

            if (data.success && data.data) {
                this.renderUcapans(data.data);
            } else {
                this.renderEmptyState();
            }
        } catch (error) {
            console.error("Error loading ucapans:", error);
            this.renderErrorState();
        }
    },

    renderUcapans(ucapans) {
        if (!this.list) return;

        if (ucapans.length === 0) {
            this.renderEmptyState();
            return;
        }

        const ucapanHtml = ucapans
            .map((ucapan) => {
                const date = new Date(ucapan.created_at);
                const formattedDate = date.toLocaleDateString("id-ID", {
                    day: "2-digit",
                    month: "short",
                    year: "numeric",
                    hour: "2-digit",
                    minute: "2-digit",
                });

                const statusClass =
                    ucapan.kehadiran === "hadir" ? "hadir" : "tidak_hadir";
                const statusText =
                    ucapan.kehadiran === "hadir" ? "Hadir" : "Tidak Hadir";

                return `
                        <div class="ucapan-item animate__animated animate__fadeInUp">
                            <div class="ucapan-header">
                                <div class="ucapan-nama">${this.escapeHtml(
                                    ucapan.nama
                                )}</div>
                                <div class="ucapan-status ${statusClass}">${statusText}</div>
                            </div>
                            <div class="ucapan-text">${this.escapeHtml(
                                ucapan.ucapan
                            )}</div>
                            <div class="ucapan-date">${formattedDate}</div>
                        </div>
                    `;
            })
            .join("");

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
        const div = document.createElement("div");
        div.textContent = text;
        return div.innerHTML;
    },
};

// Toast Notification Management
const ToastManager = {
    show(message, type = "success") {
        // Remove existing toast
        const existingToast = document.querySelector(".toast");
        if (existingToast) {
            existingToast.remove();
        }

        // Create new toast
        const toast = document.createElement("div");
        toast.className = `toast ${type}`;

        const iconClass =
            type === "success" ? "ph-check-circle" : "ph-warning-circle";

        toast.innerHTML = `
                    <div class="toast-content">
                        <i class="toast-icon ${type} ph-fill ${iconClass}"></i>
                        <div class="toast-message">${message}</div>
                    </div>
                `;

        document.body.appendChild(toast);

        // Show toast
        setTimeout(() => {
            toast.classList.add("show");
        }, 100);

        // Hide toast after 3 seconds
        setTimeout(() => {
            toast.classList.remove("show");
            setTimeout(() => {
                if (toast.parentNode) {
                    toast.parentNode.removeChild(toast);
                }
            }, 300);
        }, 3000);
    },
};

// Global functions for modal
function openUcapanModal() {
    UcapanModal.open();
}

function closeUcapanModal() {
    UcapanModal.close();
}

function toggleUcapanForm() {
    const formSection = document.querySelector(".ucapan-form-section");
    const toggleBtn = document.getElementById("toggleFormBtn");
    const toggleIcon = toggleBtn.querySelector("i");

    if (formSection && toggleBtn) {
        const isHidden = formSection.classList.contains("hidden");

        if (isHidden) {
            // Show form
            formSection.classList.remove("hidden");
            toggleBtn.classList.remove("form-hidden");
            toggleIcon.className = "ph-fill ph-eye-slash";
            toggleBtn.title = "Sembunyikan Form";
        } else {
            // Hide form
            formSection.classList.add("hidden");
            toggleBtn.classList.add("form-hidden");
            toggleIcon.className = "ph-fill ph-eye";
            toggleBtn.title = "Tampilkan Form";
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
    trackEvent,
};
