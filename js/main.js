// Main JavaScript for PetComfort Hub

// Initialize everything when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    // Set current year in footer
    const yearSpan = document.getElementById('current-year');
    if (yearSpan) {
        yearSpan.textContent = new Date().getFullYear();
    }

    // Initialize mobile menu
    initMobileMenu();

    // Check and show cookie banner
    checkCookieConsent();

    // Initialize form handlers
    initFormHandlers();

    // Initialize popup close on outside click
    initPopupOutsideClick();

    // Update active navigation
    updateActiveNav();

    // Initialize Lucide icons
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
});

// Mobile Menu Toggle
function initMobileMenu() {
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            mobileMenu.classList.toggle('flex');
        });
    }
}

// Cookie Banner Functions
function checkCookieConsent() {
    const consent = localStorage.getItem('cookieConsent');
    if (!consent) {
        const cookieBanner = document.getElementById('cookie-banner');
        if (cookieBanner) {
            cookieBanner.classList.remove('hidden');
        }
    }
}

function acceptCookies() {
    localStorage.setItem('cookieConsent', 'accepted');
    const cookieBanner = document.getElementById('cookie-banner');
    if (cookieBanner) {
        cookieBanner.classList.add('hidden');
    }
}

function rejectCookies() {
    localStorage.setItem('cookieConsent', 'rejected');
    const cookieBanner = document.getElementById('cookie-banner');
    if (cookieBanner) {
        cookieBanner.classList.add('hidden');
    }
}

// Contact Popup Functions
function openContactPopup() {
    const popup = document.getElementById('contact-popup');
    if (popup) {
        popup.classList.remove('hidden');
        popup.style.display = 'flex';
        document.body.style.overflow = 'hidden';
        
        // Re-initialize icons in the popup
        setTimeout(function() {
            if (typeof lucide !== 'undefined') {
                lucide.createIcons();
            }
        }, 100);
    }
}

function closeContactPopup() {
    const popup = document.getElementById('contact-popup');
    if (popup) {
        popup.classList.add('hidden');
        popup.style.display = 'none';
        document.body.style.overflow = 'auto';
    }
}

// Initialize popup outside click handler
function initPopupOutsideClick() {
    document.addEventListener('click', function(e) {
        const popup = document.getElementById('contact-popup');
        if (popup && e.target === popup) {
            closeContactPopup();
        }
    });
}

// Form Submission Handlers
function initFormHandlers() {
    // Popup form handler
    const popupForm = document.getElementById('popup-contact-form');
    if (popupForm) {
        popupForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const policyCheckbox = document.getElementById('popup-policy');
            if (!policyCheckbox || !policyCheckbox.checked) {
                showToast('Please agree to the Privacy Policy and Terms & Conditions', 'error');
                return;
            }
            
            // Simulate form submission
            showToast('Thank you! We\'ll contact you soon.', 'success');
            closeContactPopup();
            popupForm.reset();
        });
    }

    // Contact page form handler
    const contactPageForm = document.getElementById('contact-form');
    if (contactPageForm) {
        contactPageForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const policyCheckbox = document.getElementById('policy');
            if (!policyCheckbox || !policyCheckbox.checked) {
                showToast('Please agree to the Privacy Policy and Terms & Conditions', 'error');
                return;
            }
            
            // Simulate form submission
            showToast('Thank you for contacting us! We\'ll get back to you within 24 hours.', 'success');
            contactPageForm.reset();
        });
    }
}

// Toast Notification
function showToast(message, type) {
    type = type || 'success';
    const toast = document.getElementById('toast');
    const toastMessage = document.getElementById('toast-message');
    
    if (toast && toastMessage) {
        toastMessage.textContent = message;
        
        // Set color based on type
        if (type === 'error') {
            toast.classList.remove('bg-green-600');
            toast.classList.add('bg-red-600');
        } else {
            toast.classList.remove('bg-red-600');
            toast.classList.add('bg-green-600');
        }
        
        toast.classList.remove('hidden');
        
        // Auto-hide after 3 seconds
        setTimeout(function() {
            toast.classList.add('hidden');
        }, 3000);
    }
}

// Update active navigation link
function updateActiveNav() {
    const currentPage = window.location.pathname.split('/').pop() || 'index.html';
    const navLinks = document.querySelectorAll('nav a[href]');
    
    navLinks.forEach(function(link) {
        const linkPage = link.getAttribute('href');
        if (!linkPage) return;
        
        link.classList.remove('text-blue-600', 'font-semibold');
        link.classList.add('text-gray-700');
        
        if (linkPage === currentPage || (currentPage === '' && linkPage === 'index.html')) {
            link.classList.remove('text-gray-700');
            link.classList.add('text-blue-600', 'font-semibold');
        }
    });
}

// Handle escape key to close popup
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeContactPopup();
    }
});
