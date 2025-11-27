<?php $__env->startSection('content'); ?>
    <!-- Preloader -->
    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box d-flex flex-column justify-content-start align-items-start">
                        <h2 class="breadcrumb-title">Contact Us</h2>
                        <p class="breadcrumb-subtitle">
                            Get all the Help & Support from us! We’re always ready to assist you.
                        </p>
                        <a href="#quote" class="breadcrumb-cta btn btn--primary mt-3">
                            Ask Us Now →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick Help Section -->
    <div class="body-container">
        <div class="content-container">
            <div class="header">
                <h1>Want Quick Help?</h1>
            </div>
            <div class="grid-container">
                <?php
                    $quickHelp = [
                        [
                            'id' => 1,
                            'title' => 'Email Support',
                            'description' => 'Reach out to us via email and we will respond promptly.',
                            'link' => 'Email Us',
                            'icon' => 'fas fa-envelope',
                        ],
                        [
                            'id' => 2,
                            'title' => 'Call Us',
                            'description' => 'Give us a call and we will assist you immediately.',
                            'link' => 'Call Now',
                            'icon' => 'fas fa-phone',
                        ],
                        [
                            'id' => 3,
                            'title' => 'Chat with Us',
                            'description' => 'Chat with our team instantly via Messenger.',
                            'link' => 'Chat Now',
                            'icon' => 'fas fa-comments',
                        ],
                    ];
                ?>

                <?php $__currentLoopData = $quickHelp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $linkHref = '#';
                        $targetAttr = '_self';
                        if (str_contains(strtolower($e['title']), 'email')) {
                            $linkHref = 'mailto:info@beyondtechnepal.com';
                        } elseif (str_contains(strtolower($e['title']), 'call')) {
                            $linkHref = 'tel:014500062';
                        } elseif (str_contains(strtolower($e['title']), 'chat')) {
                            $linkHref = 'https://m.me/BeyondTechNepal';
                            $targetAttr = '_blank';
                        }
                    ?>

                    <div class="card">
                        <i class="<?php echo e($e['icon']); ?> card-icon"></i>
                        <h3><?php echo e($e['title']); ?></h3>
                        <p><?php echo e($e['description']); ?></p>
                        <a href="<?php echo e($linkHref); ?>" target="<?php echo e($targetAttr); ?>"
                            rel="noopener noreferrer"><?php echo e($e['link']); ?></a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

    <!-- Contact Form + Map -->
    <div class="contact-section" id="main-wrapper">
        <div class="site-wrapper-reveal contact-container">

            <!-- Contact Form -->
            <form class="contact-form" id="quote" onsubmit="event.preventDefault();">
                <h2>Contact Form</h2>

                <div class="flex-row">
                    <div class="flex-col">
                        <label for="firstName">First Name:</label>
                        <input type="text" id="firstName" required>
                    </div>
                    <div class="flex-col">
                        <label for="lastName">Last Name:</label>
                        <input type="text" id="lastName" required>
                    </div>
                </div>

                <div class="flex-col" style="margin-top:1rem;">
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" required>
                </div>

                <div class="flex-col" style="margin-top:1rem;">
                    <label for="question">Your Question:</label>
                    <textarea id="question" rows="5" required></textarea>
                </div>

                <p class="privacy">
                    By submitting my data, I consent to Beyond Tech collecting, processing, and storing my information in
                    accordance with the Beyond Tech Privacy Notice.
                </p>

                <button type="submit">Send</button>
            </form>

            <!-- Map -->
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d517.362829766517!2d85.33404383337165!3d27.728082368284316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1957d4429403%3A0x2e8fb4f4cfe35919!2sBeyondtech%20Nepal%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1761733523560!5m2!1sen!2snp"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    title="Beyond Tech Nepal Location">
                </iframe>
            </div>
        </div>
    </div>

    <!-- CTA Sections -->
    <div class="cta-image-area_one section-space--ptb_80 cta-bg-image_one">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-8 col-lg-7">
                    <div class="cta-content md-text-center">
                        <h3 class="heading text-white">
                            Assess your business potentials and find opportunities
                            <span class="text-color-secondary">for bigger success</span>
                        </h3>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 text-center">
                    <a href="#" class="btn btn--white btn-one mb-2"><i class="far fa-comment-alt me-2"></i>Let's
                        talk</a>
                    <a href="#" class="btn btn--secondary btn-two"><i class="fas fa-info-circle me-2"></i>Get info</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Scroll Top -->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fas fa-chevron-up"></i>
        <i class="arrow-bottom fas fa-chevron-up"></i>
    </a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    <style>

        .content-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 50px 20px 0 20px;
        }

        .header h1 {
            font-size: 33px;
            margin: 24px 0;
        }

        .header p {
            font-size: 18px;
            color: #333;
        }

        .grid-container {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
        }

        @media(min-width:640px) {
            .grid-container {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        .card {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: 0.3s;
        }
.contact-section{
    margin-top: 30px;
}
        .card:hover {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .card-icon {
            font-size: 40px;
            color: #e53935;
            margin-bottom: 15px;
        }

        .card h3 {
            font-size: 23px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .card p {
            color: #666;
            font-size: 20px;
            margin-bottom: 15px;
            min-height: 120px;
        }

        .card a {
            display: inline-block;
            padding: 10px 20px;
            background: #e53935;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            transition: text-decoration 0.3s;
        }

        .card a:hover {
            text-decoration: underline;
        }

        /* Contact Form + Map */
        .contact-container {
            display: flex;
            flex-direction: column;
            gap: 2rem;
            padding: 2rem 1rem;
            max-width: 1200px;
            margin: 0 auto;
            background: #f9fafb;
        }

        @media(min-width:1024px) {
            .contact-container {
                flex-direction: row;
                justify-content: center;
                align-items: flex-start;
            }
        }

        .contact-form {
            background: #fff;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            flex: 1;
            max-width: 600px;
        }

        .contact-form h2 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 1.5rem;
            color: #1f2937;
        }

        .flex-row {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        @media(min-width:768px) {
            .flex-row {
                flex-direction: row;
                gap: 1.5rem;
            }
        }

        .flex-col {
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        label {
            font-weight: 500;
            margin-bottom: 0.25rem;
            color: #374151;
        }

        input,
        textarea {
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
            padding: 0.5rem;
            font-size: 1rem;
            outline: none;
            transition: all 0.2s;
        }

        input:focus,
        textarea:focus {
            border-color: #ef4444;
            box-shadow: 0 0 0 2px rgba(239, 68, 68, 0.2);
        }

        textarea {
            resize: none;
        }

        .privacy {
            font-size: 0.875rem;
            color: #4b5563;
            margin: 1rem 0;
            text-align: justify;
        }

        button {
            width: 100%;
            background: #ef4444;
            color: #fff;
            padding: 0.75rem;
            border-radius: 0.375rem;
            font-weight: 600;
            font-size: 1rem;
            border: none;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background: #dc2626;
        }

        .map-container {
            flex: 1;
            max-width: 600px;
            height: 300px;
        }

        @media(min-width:640px) {
            .map-container {
                height: 400px;
            }
        }

        @media(min-width:1024px) {
            .map-container {
                height: 600px;
            }
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: 0;
            border-radius: 1rem;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/susant/Desktop/Work/All nepal tech solution/resources/views/frontend/pages/contact.blade.php ENDPATH**/ ?>