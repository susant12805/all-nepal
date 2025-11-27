<?php $__env->startSection('content'); ?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <div class="page-header-content">
            <h1>Contact Us</h1>
            <p>Get in touch with our team for any questions or support</p>
            <nav class="breadcrumb">
                <a href="index.html">Home</a>
                <span>/</span>
                <span>Contact</span>
            </nav>
        </div>
    </div>
</section>

<<!-- Contact + Map Section -->
<section class="contact-map-section">
    <div class="container">
        <div class="contact-map-wrapper">
            <!-- Contact Information (Left) -->
            <div class="info-card">
                <div class="info-body">
                    <div class="info-header">
                        <h3>Contact Information</h3>
                        <p>Contact us through other channels listed below.</p>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h5>Email</h5>
                            <p><?php echo e($logo->email); ?></p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h5>Location</h5>
                            <p><?php echo e($logo->address); ?></p>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <h5>Phone</h5>
                            <p><?php echo e($logo->phone1); ?>, <?php echo e($logo->phone2); ?></p>
                        </div>
                    </div>

                    <div class="info-social">
                        <h6>Follow Us</h6>
                        <div class="social-icons">
                            <a href="#" class="social-btn"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-btn"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-btn"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="social-btn"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Map Section (Right) -->
            <div class="map-box">
                <div class="map-content">
                    <!--<i class="fas fa-map-marked-alt map-icon"></i>-->
                    <!--<h4>Find Us</h4>-->
                    <!--<p>Kathmandu, Lazimpat</p>-->
                    <a href="<?php echo $logo->map; ?>" target="_blank" class="map-link">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1380.2005774758597!2d85.31996970638322!3d27.72120428539833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb191b95000bdf%3A0xbc6fb6853f3000c4!2sAries!5e0!3m2!1sen!2snp!4v1752042338622!5m2!1sen!2snp" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <i class="fas fa-external-link-alt"></i> Open in Google Maps
</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('bottomscript'); ?>
<!-- <script src="<?php echo e(asset('js/script.js')); ?>"></script> -->
<script src="<?php echo e(asset('js/contact.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/livescor/techversesolutionspvtltd.com/resources/views/frontend/pages/contact.blade.php ENDPATH**/ ?>