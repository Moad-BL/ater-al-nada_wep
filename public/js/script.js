const mobileMenuBtn = document.getElementById('mobile-menu-btn');
const mobileMenu = document.getElementById('mobile-menu');

if (mobileMenuBtn && mobileMenu) {
    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
}

// ============================================
// SCROLL REVEAL ANIMATION
// ============================================
const reveals = document.querySelectorAll('.reveal');
const revealOnScroll = () => {
    reveals.forEach(element => {
        const elementTop = element.getBoundingClientRect().top;
        const elementVisible = 150;
        if (elementTop < window.innerHeight - elementVisible) {
            element.classList.add('active');
        }
    });
};

if (reveals.length > 0) {
    window.addEventListener('scroll', revealOnScroll);
    revealOnScroll(); // Initial check
}

// ============================================
// NAVBAR SCROLL EFFECT
// ============================================
const header = document.querySelector('header');
if (header) {
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
}

// ============================================
// MICRO-INTERACTIONS
// ============================================

// Add ripple effect to buttons
document.querySelectorAll('.btn-modern, .btn-ripple').forEach(button => {
    button.addEventListener('click', function (e) {
        const ripple = document.createElement('span');
        const rect = this.getBoundingClientRect();
        const size = Math.max(rect.width, rect.height);
        const x = e.clientX - rect.left - size / 2;
        const y = e.clientY - rect.top - size / 2;

        ripple.style.width = ripple.style.height = size + 'px';
        ripple.style.left = x + 'px';
        ripple.style.top = y + 'px';
        ripple.classList.add('ripple-effect');

        this.appendChild(ripple);

        setTimeout(() => ripple.remove(), 600);
    });
});

// Add click effect to cards
document.querySelectorAll('.card-3d, .glass-card-dark').forEach(card => {
    card.classList.add('click-effect');
});

// ============================================
// PAGE TRANSITIONS
// ============================================

// Create page overlay element
const pageOverlay = document.createElement('div');
pageOverlay.className = 'page-overlay';
document.body.appendChild(pageOverlay);

// Handle all internal links
document.querySelectorAll('a[href^="/"], a[href^="' + window.location.origin + '"]').forEach(link => {
    // Skip if it's a hash link or has no-transition class
    if (link.getAttribute('href').startsWith('#') || link.classList.contains('no-transition')) {
        return;
    }

    link.addEventListener('click', function (e) {
        const href = this.getAttribute('href');

        // Only apply transition for same-origin links
        if (href && !href.startsWith('#')) {
            e.preventDefault();

            // Activate overlay
            pageOverlay.classList.add('active');

            // Navigate after animation
            setTimeout(() => {
                window.location.href = href;
            }, 400);
        }
    });
});

// Page load transition
window.addEventListener('load', () => {
    document.body.classList.add('page-transition');
    pageOverlay.classList.remove('active');
});

// ============================================
// LOADING STATES
// ============================================

// Create loading overlay
const loadingOverlay = document.createElement('div');
loadingOverlay.className = 'loading-overlay';
loadingOverlay.innerHTML = `
    <div class="flex flex-col items-center gap-4">
        <div class="spinner"></div>
        <p class="text-lg font-bold text-primary dark:text-accent">جاري التحميل...</p>
    </div>
`;
document.body.appendChild(loadingOverlay);

// Show loading on page navigation
let isNavigating = false;
document.querySelectorAll('a[href^="/"], a[href^="' + window.location.origin + '"]').forEach(link => {
    if (link.getAttribute('href').startsWith('#') || link.classList.contains('no-loading')) {
        return;
    }

    link.addEventListener('click', function () {
        if (!isNavigating) {
            isNavigating = true;
            loadingOverlay.classList.add('active');
        }
    });
});

// Hide loading when page loads
window.addEventListener('load', () => {
    setTimeout(() => {
        loadingOverlay.classList.remove('active');
        isNavigating = false;
    }, 300);
});

// ============================================
// FORM MICRO-INTERACTIONS
// ============================================

// Add focus effects to form inputs
document.querySelectorAll('input, textarea, select').forEach(input => {
    input.addEventListener('focus', function () {
        this.parentElement?.classList.add('input-focused');
    });

    input.addEventListener('blur', function () {
        this.parentElement?.classList.remove('input-focused');
    });
});

// Form validation with shake effect
document.querySelectorAll('form').forEach(form => {
    form.addEventListener('submit', function (e) {
        const invalidInputs = this.querySelectorAll(':invalid');

        invalidInputs.forEach(input => {
            input.classList.add('shake-error');
            setTimeout(() => {
                input.classList.remove('shake-error');
            }, 400);
        });
    });
});

// ============================================
// SKELETON LOADING SIMULATION
// ============================================

// Function to show skeleton loading
function showSkeletonLoading(container) {
    const skeleton = `
        <div class="skeleton-card">
            <div class="skeleton skeleton-title"></div>
            <div class="skeleton skeleton-text"></div>
            <div class="skeleton skeleton-text"></div>
            <div class="skeleton skeleton-text"></div>
        </div>
    `;
    container.innerHTML = skeleton;
    container.classList.add('content-loading');
}

// Function to hide skeleton loading
function hideSkeletonLoading(container, content) {
    container.innerHTML = content;
    container.classList.remove('content-loading');
    container.classList.add('content-loaded');
}

// ============================================
// SMOOTH SCROLL FOR ANCHOR LINKS
// ============================================
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));

        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// ============================================
// PERFORMANCE OPTIMIZATION
// ============================================

// Debounce function for scroll events
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Apply debounce to scroll events
const debouncedReveal = debounce(revealOnScroll, 50);
window.removeEventListener('scroll', revealOnScroll);
window.addEventListener('scroll', debouncedReveal);

console.log('✨ Advanced interactions loaded successfully!');
