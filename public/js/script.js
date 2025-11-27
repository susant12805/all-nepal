// Global Variables
const cart = [];
let currentTestimonial = 0;

// Main Initialization
document.addEventListener('DOMContentLoaded', function() {
    initializeWebsite();
    initializeSlider();
    initializeCardAnimations();
    initializeMobileNavigation();
});

// Core Website Initialization
function initializeWebsite() {
    initializeNavigation();
    initializeHero();
    initializeProductCarousel();
    initializeTestimonials();
    initializeForms();
    initializeNewsletterPopup();
    initializeScrollEffects();
    initializeServiceCards();
}

// Navigation Functions
function initializeNavigation() {
    const menuToggle = document.createElement('button');
    menuToggle.className = 'menu-toggle';
    menuToggle.innerHTML = '<i class="fas fa-bars"></i>';
    menuToggle.setAttribute('aria-label', 'Toggle Menu');
    
    const navContainer = document.querySelector('.nav-container');
    if (navContainer) navContainer.appendChild(menuToggle);
    
    const navMenu = document.querySelector('.nav-menu');
    const navDropdowns = document.querySelectorAll('.nav-dropdown');
    
    // Toggle mobile menu
    menuToggle.addEventListener('click', function() {
        navMenu?.classList.toggle('active');
    });
    
    // Handle dropdowns on mobile
    navDropdowns.forEach(dropdown => {
        const link = dropdown.querySelector('.nav-link');
        link?.addEventListener('click', function(e) {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                dropdown.classList.toggle('active');
            }
        });
    });
    
    // Close menu when clicking on a link (mobile)
    navMenu?.addEventListener('click', function(e) {
        if (e.target.classList.contains('nav-link') && window.innerWidth <= 768 && !e.target.querySelector('i')) {
            navMenu.classList.remove('active');
        }
    });
    
    // Close menu when resizing to desktop
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768) {
            navMenu?.classList.remove('active');
            navDropdowns.forEach(d => d.classList.remove('active'));
        }
    });
    
    // Navbar scroll effect
    const navbar = document.getElementById('navbar');
    if (navbar) {
        window.addEventListener('scroll', function() {
            navbar.classList.toggle('scrolled', window.scrollY > 50);
        });
        
        // Initialize state
        if (window.scrollY > 50) navbar.classList.add('scrolled');
    }
}

// Service Cards Initialization
function initializeServiceCards() {
    const cards = document.querySelectorAll('.card');
    if (!cards.length) return;
    
    const cardObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1;
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.1 });
    
    cards.forEach((card, index) => {
        card.style.opacity = 0;
        card.style.transform = 'translateY(20px)';
        card.style.transition = `opacity 0.5s ease, transform 0.5s ease ${index * 0.1}s`;
        cardObserver.observe(card);
        
        const details = card.querySelector('.service-details');
        if (details) {
            details.style.display = 'none';
            
            card.addEventListener('click', function(e) {
                if (e.target.tagName === 'A') return;
                
                if (details.style.display === 'none') {
                    details.style.display = 'block';
                    card.style.transform = 'scale(1.02)';
                    card.style.zIndex = '10';
                    card.style.boxShadow = '0 10px 25px rgba(0, 0, 0, 0.2)';
                } else {
                    details.style.display = 'none';
                    card.style.transform = '';
                    card.style.zIndex = '';
                    card.style.boxShadow = '';
                }
            });
            
            card.addEventListener('mouseenter', function() {
                if (details.style.display === 'none') {
                    card.style.transform = 'translateY(-10px)';
                }
            });
            
            card.addEventListener('mouseleave', function() {
                if (details.style.display === 'none') {
                    card.style.transform = '';
                }
            });
        }
    });
}

// Hero Slider Initialization
function initializeSlider() {
    const slider = document.querySelector('.main-slider');
    if (!slider) return;
    
    class ConstructionSlider {
        constructor() {
            this.slides = document.querySelectorAll('.slide');
            this.dots = document.querySelectorAll('.nav-dot');
            this.timerBar = document.querySelector('.timer-bar');
            this.prevBtn = document.querySelector('.arrow.prev');
            this.nextBtn = document.querySelector('.arrow.next');
            this.currentIndex = 0;
            this.slideInterval = null;
            this.slideDuration = 6000;
            this.isAnimating = false;
            
            this.init();
        }
        
        init() {
            if (!this.slides.length) return;
            
            this.slides[0].classList.add('active');
            this.dots[0].classList.add('active');
            this.startAutoplay();
            
            this.prevBtn?.addEventListener('click', () => this.prevSlide());
            this.nextBtn?.addEventListener('click', () => this.nextSlide());
            
            this.dots.forEach((dot, index) => {
                dot.addEventListener('click', () => this.goToSlide(index));
            });
            
            const container = document.querySelector('.slider-container');
            if (container) {
                container.addEventListener('mouseenter', () => this.pauseAutoplay());
                container.addEventListener('mouseleave', () => this.resumeAutoplay());
                
                let touchStartX = 0;
                container.addEventListener('touchstart', (e) => {
                    touchStartX = e.changedTouches[0].screenX;
                    this.pauseAutoplay();
                }, {passive: true});
                
                container.addEventListener('touchend', (e) => {
                    const touchEndX = e.changedTouches[0].screenX;
                    if (Math.abs(touchStartX - touchEndX) >= 50) {
                        touchStartX > touchEndX ? this.nextSlide() : this.prevSlide();
                    }
                    this.resumeAutoplay();
                }, {passive: true});
            }
        }
        
        startAutoplay() {
            this.resetTimerBar();
            this.slideInterval = setInterval(() => this.nextSlide(), this.slideDuration);
        }
        
        pauseAutoplay() {
            clearInterval(this.slideInterval);
        }
        
        resumeAutoplay() {
            this.resetTimerBar();
            this.slideInterval = setInterval(() => this.nextSlide(), this.slideDuration);
        }
        
        resetTimerBar() {
            if (!this.timerBar) return;
            
            this.timerBar.style.transition = 'none';
            this.timerBar.style.width = '0%';
            
            setTimeout(() => {
                this.timerBar.style.transition = `width ${this.slideDuration/1000}s linear`;
                this.timerBar.style.width = '100%';
            }, 10);
        }
        
        prevSlide() {
            if (this.isAnimating) return;
            this.isAnimating = true;
            this.changeSlide((this.currentIndex - 1 + this.slides.length) % this.slides.length, 'prev');
        }
        
        nextSlide() {
            if (this.isAnimating) return;
            this.isAnimating = true;
            this.changeSlide((this.currentIndex + 1) % this.slides.length, 'next');
        }
        
        goToSlide(index) {
            if (this.isAnimating || index === this.currentIndex) return;
            this.isAnimating = true;
            this.changeSlide(index, index > this.currentIndex ? 'next' : 'prev');
        }
        
        changeSlide(newIndex, direction) {
            clearInterval(this.slideInterval);
            this.resetTimerBar();
            this.slideInterval = setInterval(() => this.nextSlide(), this.slideDuration);
            
            const currentSlide = this.slides[this.currentIndex];
            const newSlide = this.slides[newIndex];
            
            currentSlide.classList.remove('active');
            currentSlide.classList.add(direction);
            
            newSlide.classList.add('active');
            newSlide.classList.remove('prev', 'next');
            
            this.dots.forEach(dot => dot.classList.remove('active'));
            this.dots[newIndex].classList.add('active');
            
            setTimeout(() => {
                currentSlide.classList.remove('prev', 'next');
                this.isAnimating = false;
            }, 1000);
            
            this.currentIndex = newIndex;
        }
    }
    
    new ConstructionSlider();
}

// Card Animations Initialization
function initializeCardAnimations() {
    const cards = document.querySelectorAll(".card, .collab-card");
    cards.forEach((card, index) => {
        card.style.opacity = 0;
        card.style.transform = "translateY(20px)";
        card.style.transition = `opacity 0.6s ease ${0.3 + index * 0.2}s, transform 0.6s ease ${0.3 + index * 0.2}s`;
        setTimeout(() => {
            card.style.opacity = 1;
            card.style.transform = "translateY(0)";
        }, 300 + index * 200);
    });
}

// Mobile Navigation Initialization
function initializeMobileNavigation() {
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('nav-menu');
    
    if (hamburger && navMenu) {
        hamburger.addEventListener('click', function() {
            this.classList.toggle('active');
            navMenu.classList.toggle('active');
        });
        
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
            });
        });
    }
    
    // Scroll to top button
    const scrollToTopBtn = document.createElement('div');
    scrollToTopBtn.className = 'scroll-to-top';
    scrollToTopBtn.innerHTML = '<i class="fas fa-arrow-up"></i>';
    document.body.appendChild(scrollToTopBtn);
    
    scrollToTopBtn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
    
    window.addEventListener('scroll', () => {
        scrollToTopBtn.classList.toggle('show', window.pageYOffset > 300);
    });
}

// Hero Animation Functions
function initializeHero() {
    // Animate floating cards
    const floatingCards = document.querySelectorAll('.floating-card');
    floatingCards.forEach((card, index) => {
        card.style.animationDelay = `${index * 0.5}s`;
    });
    
    // Add parallax effect to hero background
    const heroParticles = document.querySelector('.hero-particles');
    if (heroParticles) {
        window.addEventListener('scroll', function() {
            heroParticles.style.transform = `translateY(${window.pageYOffset * 0.5}px)`;
        });
    }
}

// Testimonials Functions
function initializeTestimonials() {
    const testimonialCards = document.querySelectorAll('.testimonial-card');
    const prevButton = document.querySelector('.testimonial-prev');
    const nextButton = document.querySelector('.testimonial-next');
    
    if (!testimonialCards.length) return;
    
    function showTestimonial(index) {
        testimonialCards.forEach((card, i) => {
            card.classList.toggle('active', i === index);
        });
    }
    
    function nextTestimonial() {
        currentTestimonial = (currentTestimonial + 1) % testimonialCards.length;
        showTestimonial(currentTestimonial);
    }
    
    function prevTestimonial() {
        currentTestimonial = (currentTestimonial - 1 + testimonialCards.length) % testimonialCards.length;
        showTestimonial(currentTestimonial);
    }
    
    prevButton?.addEventListener('click', prevTestimonial);
    nextButton?.addEventListener('click', nextTestimonial);
    
    // Auto-rotate testimonials
    setInterval(nextTestimonial, 5000);
}

// Form Functions
function initializeForms() {
    const inquiryForm = document.querySelector('.inquiry-form');
    const newsletterForm = document.querySelector('.newsletter-form');
    
    inquiryForm?.addEventListener('submit', function(e) {
        e.preventDefault();
        handleInquirySubmission(this);
    });
    
    newsletterForm?.addEventListener('submit', function(e) {
        e.preventDefault();
        handleNewsletterSubmission(this);
    });
}

function handleInquirySubmission(form) {
    const formData = new FormData(form);
    const data = Object.fromEntries(formData);
    const submitButton = form.querySelector('button[type="submit"]');
    const originalText = submitButton.innerHTML;
    
    submitButton.innerHTML = '<span class="loading"></span> Sending...';
    submitButton.disabled = true;
    
    setTimeout(() => {
        submitButton.innerHTML = originalText;
        submitButton.disabled = false;
        showNotification('Thank you for your inquiry! We\'ll get back to you within 24 hours.', 'success');
        form.reset();
        console.log('Inquiry submitted:', data);
    }, 2000);
}

function handleNewsletterSubmission(form) {
    const email = new FormData(form).get('email');
    const submitButton = form.querySelector('button[type="submit"]');
    const originalText = submitButton.innerHTML;
    
    submitButton.innerHTML = '<span class="loading"></span>';
    submitButton.disabled = true;
    
    setTimeout(() => {
        submitButton.innerHTML = originalText;
        submitButton.disabled = false;
        showNotification('Successfully subscribed to our newsletter!', 'success');
        closeNewsletterPopup();
        form.reset();
        console.log('Newsletter subscription:', email);
    }, 1500);
}

// Newsletter Popup Functions
function initializeNewsletterPopup() {
    const popup = document.getElementById('newsletter-popup');
    const closeButton = document.getElementById('popup-close');
    
    if (!popup) return;
    
    if (!localStorage.getItem('newsletter-popup-shown')) {
        setTimeout(showNewsletterPopup, 10000);
    }
    
    closeButton?.addEventListener('click', closeNewsletterPopup);
    
    popup.addEventListener('click', function(e) {
        if (e.target === popup) closeNewsletterPopup();
    });
    
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && popup.classList.contains('show')) {
            closeNewsletterPopup();
        }
    });
}

function showNewsletterPopup() {
    const popup = document.getElementById('newsletter-popup');
    if (popup) {
        popup.classList.add('show');
        document.body.style.overflow = 'hidden';
    }
}

function closeNewsletterPopup() {
    const popup = document.getElementById('newsletter-popup');
    if (popup) {
        popup.classList.remove('show');
        document.body.style.overflow = '';
        localStorage.setItem('newsletter-popup-shown', 'true');
    }
}

// Scroll Effects
function initializeScrollEffects() {
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                const navbarHeight = document.getElementById('navbar')?.offsetHeight || 0;
                window.scrollTo({
                    top: targetElement.offsetTop - navbarHeight,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Intersection Observer for animations
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });
    
    document.querySelectorAll('.service-card, .feature-item, .product-card').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
}

// Notification System
function showNotification(message, type = 'info') {
    const existingNotifications = document.querySelectorAll('.notification');
    existingNotifications.forEach(n => n.remove());
    
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.innerHTML = `
        <div class="notification-content">
            <i class="fas fa-${getNotificationIcon(type)}"></i>
            <span>${message}</span>
        </div>
        <button class="notification-close">&times;</button>
    `;
    
    notification.style.cssText = `
        position: fixed;
        top: 100px;
        right: 20px;
        background: ${getNotificationColor(type)};
        color: white;
        padding: 1rem 1.5rem;
        border-radius: var(--border-radius);
        box-shadow: var(--shadow-medium);
        z-index: 3000;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 1rem;
        max-width: 400px;
        transform: translateX(100%);
        transition: transform 0.3s ease;
    `;
    
    document.body.appendChild(notification);
    
    setTimeout(() => notification.style.transform = 'translateX(0)', 100);
    
    notification.querySelector('.notification-close').addEventListener('click', () => {
        notification.style.transform = 'translateX(100%)';
        setTimeout(() => notification.remove(), 300);
    });
    
    setTimeout(() => {
        if (notification.parentNode) {
            notification.style.transform = 'translateX(100%)';
            setTimeout(() => notification.remove(), 300);
        }
    }, 5000);
}

function getNotificationIcon(type) {
    const icons = {
        success: 'check-circle',
        error: 'exclamation-circle',
        warning: 'exclamation-triangle',
        info: 'info-circle'
    };
    return icons[type] || icons.info;
}

function getNotificationColor(type) {
    const colors = {
        success: '#00ff88',
        error: '#ff6b6b',
        warning: '#ffa500',
        info: '#00d4ff'
    };
    return colors[type] || colors.info;
}

// Cart Functions
function addToCart(product) {
    cart.push(product);
    updateCartCount();
}

function updateCartCount() {
    const cartCount = document.querySelector('.cart-count');
    if (cartCount) {
        cartCount.textContent = cart.length;
        cartCount.style.display = cart.length ? 'flex' : 'none';
    }
}

// Utility Functions
window.formatCurrency = function(amount) {
    return new Intl.NumberFormat('en-US', {
        style: 'currency',
        currency: 'USD'
    }).format(amount);
};

window.formatDate = function(date) {
    return new Intl.DateTimeFormat('en-US', {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    }).format(new Date(date));
};

// Export for global access
window.All Nepal Tech Solutions = {
    cart,
    addToCart,
    updateCartCount,
    showNotification,
    formatCurrency,
    formatDate
};

document.addEventListener('DOMContentLoaded', function () {
  class HeroSlider {
    constructor() {
      this.slides = document.querySelectorAll('.slide');
      this.dots = document.querySelectorAll('.nav-dot');
      this.prevBtn = document.querySelector('.arrow.prev');
      this.nextBtn = document.querySelector('.arrow.next');
      this.timerBar = document.querySelector('.timer-bar');
      this.currentIndex = 0;
      this.interval = null;
      this.duration = 5000;

      this.init();
    }

    init() {
      if (!this.slides.length) return;

      this.showSlide(this.currentIndex);
      this.startTimer();

      this.prevBtn?.addEventListener('click', () => this.prevSlide());
      this.nextBtn?.addEventListener('click', () => this.nextSlide());

      this.dots.forEach(dot => {
        dot.addEventListener('click', (e) => {
          const index = parseInt(dot.getAttribute('data-index'));
          this.goToSlide(index);
        });
      });

      const container = document.querySelector('.slider-container');
      container?.addEventListener('mouseenter', () => this.pauseTimer());
      container?.addEventListener('mouseleave', () => this.resumeTimer());
    }

    showSlide(index) {
      this.slides.forEach((slide, i) => {
        slide.classList.toggle('active', i === index);
      });
      this.dots.forEach((dot, i) => {
        dot.classList.toggle('active', i === index);
      });
    }

    goToSlide(index) {
      if (index === this.currentIndex) return;

      this.currentIndex = index;
      this.showSlide(index);
      this.resetTimer();
    }

    nextSlide() {
      this.currentIndex = (this.currentIndex + 1) % this.slides.length;
      this.showSlide(this.currentIndex);
      this.resetTimer();
    }

    prevSlide() {
      this.currentIndex = (this.currentIndex - 1 + this.slides.length) % this.slides.length;
      this.showSlide(this.currentIndex);
      this.resetTimer();
    }

    startTimer() {
      this.resetTimer();
      this.interval = setInterval(() => this.nextSlide(), this.duration);
    }

    pauseTimer() {
      clearInterval(this.interval);
    }

    resumeTimer() {
      this.startTimer();
    }

    resetTimer() {
      clearInterval(this.interval);
      if (this.timerBar) {
        this.timerBar.style.transition = 'none';
        this.timerBar.style.width = '0%';
        setTimeout(() => {
          this.timerBar.style.transition = `width ${this.duration / 1000}s linear`;
          this.timerBar.style.width = '100%';
        }, 10);
      }
      this.interval = setInterval(() => this.nextSlide(), this.duration);
    }
  }

  // Initialize
  new HeroSlider();
});
