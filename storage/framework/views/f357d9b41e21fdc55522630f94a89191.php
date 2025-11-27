<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <div class="footer-logo">
                    <i class="fas fa-microchip"></i>
                    <span>Tech Verse</span>
                </div>
                <p>Empowering businesses with cutting-edge technology solutions and exceptional service since 2014.
                </p>
                <div class="social-links">
                    <a href="#" class="social-link"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li>
                        <a href="<?php echo e(url('/service')); ?>" class="<?php echo e(Request::is('service') ? 'active' : ''); ?>">Services</a>
                    </li>
                    <li>
                        <a href="<?php echo e(url('/about')); ?>" class="<?php echo e(Request::is('about') ? 'active' : ''); ?>">About Us</a>
                    </li>
                    <li>
                        <a href="<?php echo e(url('/contact')); ?>" class="<?php echo e(Request::is('contact') ? 'active' : ''); ?>">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Services</h3>
                <ul>
                    <li>Computer Repair</li>
                    <li>Network Solutions</li>
                    <li>CCTV Installation</li>
                    <li>IT Consultation</li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contact Info</h3>
                <div class="contact-info">
                    <p><i class="fas fa-map-marker-alt"></i> Lazimpat-2,Kathmandu</p>
                    <p><i class="fas fa-phone"></i>  9702651469</p>
                    <p><i class="fas fa-envelope"></i> techverse@gmail.com</p>
                    <p><i class="fas fa-clock"></i> sun-friday 9am-6pm</p>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Tech Verse Private Limited. All rights reserved. </p>
            <p class="text-white">
    Developed and Designed by: 
<a href="https://www.beyondtechnepal.com" target="_blank" class="inline-block group">
    <span class="text-indigo-600 font-medium group-hover:text-indigo-700 transition-colors duration-200">
        Beyond Tech Nepal Pvt. Ltd.
    </span>
    <span class="inline-block ml-1 text-indigo-500 group-hover:translate-x-1 transition-transform duration-200">
        →
    </span>
</a>
</p>

        </div>
    </div>
</footer>
<!-- Newsletter Popup -->
<div class="newsletter-popup" id="newsletter-popup">
    <div class="popup-content">
        <button class="popup-close" id="popup-close">&times;</button>
        <div class="popup-header">
            <i class="fas fa-envelope"></i>
            <h3>Stay Updated!</h3>
            <p>Get the latest tech news and exclusive offers</p>
        </div>
        <form class="newsletter-form" id="newsletter-form">
            <input type="email" placeholder="Enter your email" required>
            <button type="submit" class="btn btn-primary">Subscribe</button>
        </form>
    </div>
</div>

<script src="<?php echo e(asset('js/script.js')); ?>"></script><?php /**PATH /home/livescor/techversesolutionspvtltd.com/resources/views/frontend/layout/footer.blade.php ENDPATH**/ ?>