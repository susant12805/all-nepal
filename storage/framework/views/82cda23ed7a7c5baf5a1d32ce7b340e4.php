<?php $__env->startSection('content'); ?>

    <!-- Navigation -->
    <!-- <?php echo $__env->make('frontend.layout.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> -->

    <!-- Hero Section -->
    
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="page-header-content">
                <h1>About Tech Verse</h1>
                <p>Empowering businesses with cutting-edge technology solutions since 2014</p>
                <nav class="breadcrumb">
                    <a href="index.html">Home</a>
                    <span>/</span>
                    <span>About</span>
                </nav>
            </div>
        </div>
    </section>

    <!-- Company Story -->
    <section class="company-story">
        <div class="container">
            <div class="story-layout">
                <div class="story-content">
                    <h2>Our Story</h2>
                    <p class="lead">Founded in 2014, our company began as a small home-based venture, driven by passion
                        and a vision to provide reliable IT solutions. We started by selling toner and reselling
                        computers — simple beginnings that laid the foundation for what we are today.
                    </p>
                    <p>Over the years, our dedication, technical expertise, and commitment to client satisfaction have
                        helped us grow steadily. Today, we operate from our office in Lazimpat, offering a wide range of
                        IT services with a strong focus on quality, reliability, and long-term support.
                    </p>

                </div>
                <div class="story-image">
                    <img src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="Our Story">
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="mission-vision">
        <div class="container">
            <div class="mv-grid">
                <div class="mv-card">
                    <div class="mv-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Our Mission</h3>
                    <p>To provide reliable, innovative, and cost-effective technology solutions that empower businesses
                        and individuals to achieve their goals in the digital age.</p>
                </div>
                <div class="mv-card">
                    <div class="mv-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Our Vision</h3>
                    <p>To be the leading technology partner in our region, known for exceptional service, cutting-edge
                        solutions, and unwavering commitment to customer success.</p>
                </div>
                <div class="mv-card">
                    <div class="mv-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Our Values</h3>
                    <p>Integrity, innovation, excellence, and customer-centricity guide everything we do. We believe in
                        building lasting relationships through trust and exceptional service.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline -->
    <section class="company-timeline">
        <div class="container">
            <div class="section-header">
                <h2>Our Journey</h2>
                <p>Key milestones in our growth and evolution</p>
            </div>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-year">2014</div>
                    <div class="timeline-content">
                        <h4>Company Founded</h4>
                        <p>Started as a small computer repair shop with 2 employees and a dream to make technology
                            accessible.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">2016</div>
                    <div class="timeline-content">
                        <h4>Service Expansion</h4>
                        <p>Added networking solutions and CCTV installation services to meet growing customer demands.
                        </p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">2018</div>
                    <div class="timeline-content">
                        <h4>New Facility</h4>
                        <p>Moved to a larger facility and expanded our team to 15 skilled technicians and support staff.
                        </p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">2020</div>
                    <div class="timeline-content">
                        <h4>Digital Transformation</h4>
                        <p>Launched our e-commerce platform and introduced remote support services during the pandemic.
                        </p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">2022</div>
                    <div class="timeline-content">
                        <h4>IT Consultation</h4>
                        <p>Added strategic IT consultation services to help businesses optimize their technology
                            investments.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">2024</div>
                    <div class="timeline-content">
                        <h4>Innovation Hub</h4>
                        <p>Established our innovation lab to stay ahead of emerging technologies and serve our customers
                            better.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <div class="section-header">
                <h2>Meet Our Team</h2>
                <p>The passionate professionals behind Tech Verse</p>
            </div>
            <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="team-grid">
                <div class="team-member">
                    <div class="member-image">
                    <img src="<?php echo url('storage/'.$team->image)?? ' '; ?>" alt="" />
                        <div class="member-overlay">
                            <div class="social-links">
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="member-info">
                        <h2> <?php echo e($team->name); ?> </h2>
                        <p class="member-role"><?php echo e($team->designation); ?></p>
                        <p class="member-bio"><?php echo e($team->testimonial); ?></p>
                    </div>
            </div>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number" data-target="1000">0</div>
                    <div class="stat-label">Happy Customers</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-target="5000">0</div>
                    <div class="stat-label">Devices Repaired</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-target="500">0</div>
                    <div class="stat-label">Networks Installed</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number" data-target="10">0</div>
                    <div class="stat-label">Years of Experience</div>
                </div>
            </div>
        </div>
    </section>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('bottomscript'); ?>
    <!-- <script src="<?php echo e(asset('js/script.js')); ?>"></script> -->
    <script src="<?php echo e(asset('js/about.js')); ?>"></script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/livescor/techversesolutionspvtltd.com/resources/views/frontend/pages/about.blade.php ENDPATH**/ ?>