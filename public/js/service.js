document.addEventListener('DOMContentLoaded', function() {
    // Card animation on scroll
    const cards = document.querySelectorAll('.card');
    
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
    });
    
    // Service card expansion functionality
    cards.forEach(card => {
        const details = card.querySelector('.service-details');
        const summary = card.querySelector('p');
        
        // Initially hide details
        details.style.display = 'none';
        
        // Click on card to toggle details
        card.addEventListener('click', function(e) {
            // Don't toggle if clicking on a link inside the card
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
        
        // Highlight cards on hover
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
    });
    
    // Contact form validation (if you have a contact form)
    
    // Social media links - open in new tab
    document.querySelectorAll('.social-link').forEach(link => {
        link.setAttribute('target', '_blank');
        link.setAttribute('rel', 'noopener noreferrer');
    });
});