document.addEventListener('DOMContentLoaded', function() {
    // Project filtering functionality
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projects = document.querySelectorAll('.project-detail');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');
            
            const filterValue = this.getAttribute('data-filter');
            
            projects.forEach(project => {
                if (filterValue === 'all') {
                    project.style.display = 'block';
                } else {
                    const projectCategories = project.getAttribute('data-category').split(' ');
                    if (projectCategories.includes(filterValue)) {
                        project.style.display = 'block';
                    } else {
                        project.style.display = 'none';
                    }
                }
            });
            
            // Scroll to projects section after filtering
            const navbarHeight = document.getElementById('navbar').offsetHeight;
            const projectsSection = document.querySelector('.projects-section');
            const sectionPosition = projectsSection.offsetTop - navbarHeight;
            
            window.scrollTo({
                top: sectionPosition,
                behavior: 'smooth'
            });
        });
    });
    
    // Testimonial slider
    const testimonials = document.querySelectorAll('.testimonial');
    const dotsContainer = document.querySelector('.slider-dots');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    let currentIndex = 0;
    
    // Create dots
    testimonials.forEach((_, index) => {
        const dot = document.createElement('span');
        dot.classList.add('dot');
        if (index === 0) dot.classList.add('active');
        dot.addEventListener('click', () => goToTestimonial(index));
        dotsContainer.appendChild(dot);
    });
    
    const dots = document.querySelectorAll('.dot');
    
    function updateTestimonial() {
        testimonials.forEach((testimonial, index) => {
            testimonial.classList.toggle('active', index === currentIndex);
        });
        
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex);
        });
    }
    
    function goToTestimonial(index) {
        currentIndex = index;
        updateTestimonial();
    }
    
    function nextTestimonial() {
        currentIndex = (currentIndex + 1) % testimonials.length;
        updateTestimonial();
    }
    
    function prevTestimonial() {
        currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
        updateTestimonial();
    }
    
    nextBtn.addEventListener('click', nextTestimonial);
    prevBtn.addEventListener('click', prevTestimonial);
    
    // Auto-advance testimonials
    let testimonialInterval = setInterval(nextTestimonial, 5000);
    
    // Pause on hover
    const slider = document.querySelector('.testimonials-slider');
    slider.addEventListener('mouseenter', () => {
        clearInterval(testimonialInterval);
    });
    
    slider.addEventListener('mouseleave', () => {
        testimonialInterval = setInterval(nextTestimonial, 5000);
    });
    
    // Image gallery functionality
    document.querySelectorAll('.thumbnail-grid img').forEach(thumbnail => {
        thumbnail.addEventListener('click', function() {
            const mainImage = this.closest('.project-gallery').querySelector('.main-image img');
            const tempSrc = mainImage.src;
            mainImage.src = this.src;
            this.src = tempSrc;
        });
    });
    
    // Highlight project when coming from home page anchor link
    if (window.location.hash) {
        const targetProject = document.querySelector(window.location.hash);
        if (targetProject) {
            targetProject.style.animation = 'highlight 2s';
            
            // Adjust scroll position for navbar height
            const navbarHeight = document.getElementById('navbar').offsetHeight;
            const targetPosition = targetProject.offsetTop - navbarHeight;
            
            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        }
    }
    
    // Add highlight animation style
    const style = document.createElement('style');
    style.textContent = `
        @keyframes highlight {
            0% { background-color: rgba(0, 123, 255, 0.1); }
            100% { background-color: transparent; }
        }
    `;
    document.head.appendChild(style);
});