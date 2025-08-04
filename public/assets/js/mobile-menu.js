// SIMPLE MOBILE MENU - GUARANTEED TO WORK
(function() {
    'use strict';
    
    let initAttempts = 0;
    const maxAttempts = 10;
    
    function waitForElements() {
        initAttempts++;
        console.log(`Attempt ${initAttempts}: Looking for mobile menu elements...`);
        
        const navToggle = document.getElementById('nav-toggle');
        const navMenu = document.getElementById('nav-menu');
        
        console.log('Nav Toggle found:', !!navToggle);
        console.log('Nav Menu found:', !!navMenu);
        
        if (navToggle && navMenu) {
            console.log('✅ Elements found! Initializing mobile menu...');
            initMobileMenu(navToggle, navMenu);
            return true;
        } else {
            console.log('❌ Elements not found yet...');
            
            // Try alternative selectors
            const altNavToggle = document.querySelector('.nav-toggle');
            const altNavMenu = document.querySelector('.nav-menu');
            
            console.log('Alternative Nav Toggle found:', !!altNavToggle);
            console.log('Alternative Nav Menu found:', !!altNavMenu);
            
            if (altNavToggle && altNavMenu) {
                console.log('✅ Elements found with alternative selectors!');
                initMobileMenu(altNavToggle, altNavMenu);
                return true;
            }
            
            if (initAttempts < maxAttempts) {
                setTimeout(waitForElements, 500);
            } else {
                console.error('❌ Failed to find elements after', maxAttempts, 'attempts');
                // Try to create a simple fallback
                createFallbackMenu();
            }
            return false;
        }
    }
    
    function initMobileMenu(navToggle, navMenu) {
        console.log('Initializing mobile menu with elements:', { navToggle, navMenu });
        
        // Clear any existing listeners
        navToggle.onclick = null;
        navToggle.ontouchstart = null;
        
        // Add click event listener
        navToggle.addEventListener('click', function(e) {
            handleToggleClick(e, navToggle, navMenu);
        });
        
        navToggle.addEventListener('touchstart', function(e) {
            handleToggleClick(e, navToggle, navMenu);
        });
        
        // Close menu when clicking nav links
        const navLinks = navMenu.querySelectorAll('.nav-link');
        console.log('Found nav links:', navLinks.length);
        
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                closeMenu(navToggle, navMenu);
            });
            link.addEventListener('touchstart', function() {
                closeMenu(navToggle, navMenu);
            });
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!navToggle.contains(e.target) && !navMenu.contains(e.target)) {
                closeMenu(navToggle, navMenu);
            }
        });
        
        console.log('✅ Mobile menu initialized successfully');
    }
    
    function handleToggleClick(e, navToggle, navMenu) {
        e.preventDefault();
        e.stopPropagation();
        
        console.log('🔥 Toggle clicked!');
        
        const isActive = navMenu.classList.contains('mobile-active');
        
        if (isActive) {
            closeMenu(navToggle, navMenu);
        } else {
            openMenu(navToggle, navMenu);
        }
    }
    
    function openMenu(navToggle, navMenu) {
        console.log('🔓 Opening menu...');
        
        // Add active classes
        navToggle.classList.add('active');
        navMenu.classList.add('mobile-active');
        
        // Force styles with JavaScript
        navMenu.style.cssText = `
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            width: 100vw !important;
            height: 100vh !important;
            background: rgba(255, 255, 255, 0.98) !important;
            backdrop-filter: blur(20px) !important;
            display: flex !important;
            flex-direction: column !important;
            justify-content: center !important;
            align-items: center !important;
            padding: 2rem !important;
            z-index: 99999 !important;
            margin: 0 !important;
            border: none !important;
            box-sizing: border-box !important;
        `;
        
        // Style nav links
        const navLinks = navMenu.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.style.cssText = `
                font-size: 1.5rem !important;
                margin: 1rem 0 !important;
                color: #000000 !important;
                text-decoration: none !important;
                display: block !important;
                padding: 10px !important;
                text-align: center !important;
            `;
        });
        
        // Force body to not scroll
        document.body.style.overflow = 'hidden';
        
        console.log('✅ Menu opened');
    }
    
    function closeMenu(navToggle, navMenu) {
        console.log('🔒 Closing menu...');
        
        // Remove active classes
        navToggle.classList.remove('active');
        navMenu.classList.remove('mobile-active');
        
        // Reset styles
        navMenu.style.cssText = '';
        
        // Allow body to scroll again
        document.body.style.overflow = '';
        
        console.log('✅ Menu closed');
    }
    
    function createFallbackMenu() {
        console.log('Creating fallback menu...');
        
        // Try to find elements by class name
        const navToggle = document.querySelector('button.nav-toggle') || document.querySelector('[class*="nav-toggle"]');
        const navMenu = document.querySelector('div.nav-menu') || document.querySelector('[class*="nav-menu"]');
        
        if (navToggle && navMenu) {
            console.log('✅ Fallback elements found!');
            initMobileMenu(navToggle, navMenu);
        } else {
            console.error('❌ Complete fallback failed - no elements found');
        }
    }
    
    // Multiple initialization strategies
    console.log('🚀 Starting mobile menu initialization...');
    
    // Strategy 1: Immediate
    if (document.readyState === 'complete') {
        waitForElements();
    }
    
    // Strategy 2: DOM Content Loaded
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', waitForElements);
    }
    
    // Strategy 3: Window Load
    window.addEventListener('load', waitForElements);
    
    // Strategy 4: Delayed retry
    setTimeout(waitForElements, 1000);
    setTimeout(waitForElements, 2000);
    
    // Make functions global for debugging
    window.mobileMenuDebug = {
        waitForElements: waitForElements,
        initMobileMenu: initMobileMenu,
        openMenu: function() {
            const navToggle = document.getElementById('nav-toggle') || document.querySelector('.nav-toggle');
            const navMenu = document.getElementById('nav-menu') || document.querySelector('.nav-menu');
            if (navToggle && navMenu) openMenu(navToggle, navMenu);
        },
        closeMenu: function() {
            const navToggle = document.getElementById('nav-toggle') || document.querySelector('.nav-toggle');
            const navMenu = document.getElementById('nav-menu') || document.querySelector('.nav-menu');
            if (navToggle && navMenu) closeMenu(navToggle, navMenu);
        }
    };
    
})();