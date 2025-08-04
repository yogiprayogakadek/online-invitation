// MOBILE MENU DEBUG SCRIPT - Simple Element Check
console.log('=== MOBILE MENU ELEMENT CHECK ===');

// Check document ready state
console.log('Document ready state:', document.readyState);

// Wait a bit for DOM to be ready
setTimeout(() => {
    console.log('--- Checking after 500ms ---');
    
    // Method 1: getElementById
    const navToggleById = document.getElementById('nav-toggle');
    const navMenuById = document.getElementById('nav-menu');
    
    console.log('getElementById results:');
    console.log('- nav-toggle:', navToggleById);
    console.log('- nav-menu:', navMenuById);
    
    // Method 2: querySelector
    const navToggleByClass = document.querySelector('.nav-toggle');
    const navMenuByClass = document.querySelector('.nav-menu');
    
    console.log('querySelector results:');
    console.log('- .nav-toggle:', navToggleByClass);
    console.log('- .nav-menu:', navMenuByClass);
    
    // Method 3: Check all elements with nav in class
    const allNavElements = document.querySelectorAll('[class*="nav"]');
    console.log('All elements with "nav" in class:', allNavElements);
    
    // Method 4: Check specific button and div
    const buttons = document.querySelectorAll('button');
    const divs = document.querySelectorAll('div');
    
    console.log('All buttons:', buttons.length);
    console.log('All divs:', divs.length);
    
    // Find the hamburger button
    const hamburgerButton = Array.from(buttons).find(btn => 
        btn.classList.contains('nav-toggle') || 
        btn.id === 'nav-toggle' ||
        btn.querySelector('span')
    );
    
    console.log('Hamburger button found:', hamburgerButton);
    
    // Find the nav menu
    const navMenuDiv = Array.from(divs).find(div => 
        div.classList.contains('nav-menu') || 
        div.id === 'nav-menu' ||
        div.querySelector('.nav-link')
    );
    
    console.log('Nav menu div found:', navMenuDiv);
    
    // If found, test manual open
    if (hamburgerButton && navMenuDiv) {
        console.log('✅ BOTH ELEMENTS FOUND! Testing manual open...');
        
        // Test manual menu open
        hamburgerButton.classList.add('active');
        navMenuDiv.classList.add('mobile-active');
        navMenuDiv.style.cssText = `
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            width: 100vw !important;
            height: 100vh !important;
            background: rgba(255, 255, 255, 0.98) !important;
            display: flex !important;
            flex-direction: column !important;
            justify-content: center !important;
            align-items: center !important;
            z-index: 99999 !important;
        `;
        
        console.log('✅ Menu should be visible now!');
        
        // Close after 3 seconds
        setTimeout(() => {
            hamburgerButton.classList.remove('active');
            navMenuDiv.classList.remove('mobile-active');
            navMenuDiv.style.cssText = '';
            console.log('✅ Menu closed');
        }, 3000);
        
    } else {
        console.log('❌ Elements not found');
        console.log('- Hamburger button:', !!hamburgerButton);
        console.log('- Nav menu div:', !!navMenuDiv);
    }
    
}, 500);

console.log('=== END ELEMENT CHECK ===');