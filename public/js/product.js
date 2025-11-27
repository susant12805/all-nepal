document.addEventListener('DOMContentLoaded', function() {
    // Image gallery functionality
    const mainImage = document.getElementById('mainImage');
    const thumbnails = document.querySelectorAll('.thumbnail');
    
    thumbnails.forEach(thumbnail => {
        thumbnail.addEventListener('click', function() {
            // Swap main image with clicked thumbnail
            const tempSrc = mainImage.src;
            mainImage.src = this.src;
            this.src = tempSrc;
            
            // Add active class to clicked thumbnail
            thumbnails.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
        });
    });
    
    // Color selection
    const colorOptions = document.querySelectorAll('.color-option');
    
    colorOptions.forEach(option => {
        option.addEventListener('click', function() {
            const color = this.getAttribute('data-color');
            
            // Update active color
            colorOptions.forEach(opt => opt.classList.remove('active'));
            this.classList.add('active');
            
            // Here you would typically update product images/variants based on color
            console.log(`Selected color: ${color}`);
        });
    });
    
    // Quantity selector
    const minusBtn = document.querySelector('.qty-btn.minus');
    const plusBtn = document.querySelector('.qty-btn.plus');
    const quantityInput = document.querySelector('.quantity-selector input');
    
    minusBtn.addEventListener('click', function() {
        let value = parseInt(quantityInput.value);
        if (value > 1) {
            quantityInput.value = value - 1;
        }
    });
    
    plusBtn.addEventListener('click', function() {
        let value = parseInt(quantityInput.value);
        if (value < 5) { // Max 5 units
            quantityInput.value = value + 1;
        }
    });
    
    // Tab switching
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');
    
    tabBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const tabId = this.getAttribute('data-tab');
            
            // Update active tab button
            tabBtns.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Show corresponding content
            tabContents.forEach(content => {
                content.classList.remove('active');
                if (content.id === tabId) {
                    content.classList.add('active');
                }
            });
        });
    });
    
    // Review rating stars
    const ratingStars = document.querySelectorAll('.rating-input i');
    
    ratingStars.forEach(star => {
        star.addEventListener('click', function() {
            const rating = parseInt(this.getAttribute('data-rating'));
            
            // Highlight selected stars
            ratingStars.forEach((s, index) => {
                if (index < rating) {
                    s.classList.add('active');
                    s.classList.remove('far');
                    s.classList.add('fas');
                } else {
                    s.classList.remove('active');
                    s.classList.remove('fas');
                    s.classList.add('far');
                }
            });
            
            // Here you would typically store the selected rating
            console.log(`Selected rating: ${rating}`);
        });
    });
    
    // Add to cart functionality
    const addToCartBtn = document.querySelector('.btn-cart');
    
    addToCartBtn.addEventListener('click', function() {
        const productName = document.querySelector('.product-header h1').textContent;
        const quantity = parseInt(quantityInput.value);
        const price = document.querySelector('.current-price').textContent;
        
        // Create notification
        const notification = document.createElement('div');
        notification.className = 'notification';
        notification.innerHTML = `
            <p>Added ${quantity} × ${productName} (${price}) to cart</p>
            <a href="../cart.html">View Cart</a>
        `;
        document.body.appendChild(notification);
        
        // Show notification
        setTimeout(() => {
            notification.classList.add('show');
        }, 100);
        
        // Hide notification after 3 seconds
        setTimeout(() => {
            notification.classList.remove('show');
            setTimeout(() => {
                notification.remove();
            }, 300);
        }, 3000);
        
        // Here you would typically add the product to cart in your system
        console.log(`Added ${quantity} × ${productName} to cart`);
    });
    
    // Buy now functionality
    const buyNowBtn = document.querySelector('.btn-buy');
    
    buyNowBtn.addEventListener('click', function() {
        const productName = document.querySelector('.product-header h1').textContent;
        const quantity = parseInt(quantityInput.value);
        
        // Here you would typically redirect to checkout with product info
        // For now, we'll just log it
        console.log(`Proceeding to checkout with ${quantity} × ${productName}`);
        // window.location.href = `checkout.html?product=${encodeURIComponent(productName)}&quantity=${quantity}`;
    });
    
    // Highlight current tab when page loads based on URL hash
    if (window.location.hash) {
        const tabId = window.location.hash.substring(1);
        const tabBtn = document.querySelector(`.tab-btn[data-tab="${tabId}"]`);
        
        if (tabBtn) {
            tabBtn.click();
            
            // Scroll to the tab section
            setTimeout(() => {
                const tabSection = document.querySelector('.product-details');
                const navbarHeight = document.getElementById('navbar').offsetHeight;
                const sectionPosition = tabSection.offsetTop - navbarHeight;
                
                window.scrollTo({
                    top: sectionPosition,
                    behavior: 'smooth'
                });
            }, 100);
        }
    }
});