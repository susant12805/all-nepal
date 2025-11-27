<?php $__env->startSection('content'); ?>
<!-- Hero Section -->
<?php echo $__env->make('frontend.layout.heroimage', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


<!-- Projects Preview Section -->
<section class="hello">
  <div class="container">
    <h2 class="section-title">Major Projects </h2>

    <div class="intro-card">
      <p>
        We’ve proudly completed several on-site projects in joint ventures, including major installations at <strong>KOICA</strong>, <strong>Cyber Bureau</strong>, and other key locations. Our team brings hands-on experience working with a variety of advanced networking and communication technologies such as <strong>Cisco</strong>, <strong>Alcatel-Lucent</strong>, and others.
      </p>
    </div>

    <div class="project-cards">
      <div class="card">
        <h3>Janamatri Project</h3>
        <p>A secure and scalable infrastructure deployment initiative.</p>
      </div>
      <div class="card">
        <h3>Tribhuvan International Airport (TIA)</h3>
        <p>Supporting smart communication technologies and safety upgrades.</p>
      </div>
      <div class="card">
        <h3>Rising Builders</h3>
        <p>Integrated building management and surveillance solutions.</p>
      </div>
      <div class="card">
        <h3>ANPR Camera Distribution</h3>
        <p>Advanced surveillance for automatic number plate recognition across cities.</p>
      </div>
    </div>
  </div>
</section>
<section class="hello-section">
  <div class="hey">
    <h2 class="hey-titl">Our Collaborations</h2>

    <div class="collab-intro">
      <p>
        Throughout our journey, we’ve had the privilege of working alongside exceptional partners who support and strengthen our service delivery. We are proud to collaborate with:
      </p>
    </div>

    <div class="collab-logos">
      <div class="collab-card">Beyond Tech Nepal</div>
      <div class="collab-card">Dauha</div>
      <div class="collab-card">Hikvision</div>
    </div>

    <div class="collab-footer">
      <p>
        These partnerships allow us to bring cutting-edge solutions, industry-leading products, and expert support to our clients across Nepal.
      </p>
      <p class="collab-promise">
        At the heart of everything we do is a simple promise: <span class="highlight">to provide trusted service, technical excellence, and real value</span> to every client we serve.
      </p>
    </div>
  </div>
</section>
<!-- Why Choose Us -->
<section class="why-choose-us">
  <div class="container">
    <section class="why-choose-us">
      <div class="container">
        <div class="section-header">
          <h2>Why Choose Tech Verse?</h2>
          <p>We're committed to delivering excellence in every aspect of our service</p>
        </div>
        <div class="features-grid">
          <div class="feature-item">
            <div class="feature-icon">
              <i class="fas fa-award"></i>
            </div>
            <h3>Trusted Experience</h3>
            <p>Over 10 years of experience in the tech industry with thousands of satisfied customers</p>
          </div>
          <div class="feature-item">
            <div class="feature-icon">
              <i class="fas fa-shipping-fast"></i>
            </div>
            <h3>Fast Delivery</h3>
            <p>Quick turnaround times for both products and services to keep your business running</p>
          </div>
          <div class="feature-item">
            <div class="feature-icon">
              <i class="fas fa-headset"></i>
            </div>
            <h3>24/7 Support</h3>
            <p>Round-the-clock customer support to assist with any technical issues or questions</p>
          </div>
          <div class="feature-item">
            <div class="feature-icon">
              <i class="fas fa-certificate"></i>
            </div>
            <h3>Quality Guarantee</h3>
            <p>All our products and services come with comprehensive warranties and guarantees</p>
          </div>
        </div>
      </div>
    </section>
  </div>
</section>

<!-- Testimonials -->


<section class="clients-section">
  <h2>Our Esteemed Clients</h2>
  <p class="subtitle">Trusted by leading companies in Nepal</p>
  <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

  <div class="clients-container">
    <!-- Sample showing structure with image -->
    <div class="client-card">
      <img src="<?php echo e(asset('storage/'.$client->image)); ?>" alt="<?php echo e($client->name); ?>" class="hey-image">
      <h3><?php echo e($client->name); ?></h3>
      <p><?php echo e($client->short_description); ?></p>
    </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</section>

<!-- Quick Inquiry -->
<section class="quick-inquiry">
  <div class="container">
    <div class="inquiry-form-wrapper">
      <div class="inquiry-content">
        <h2>Get a Quick Quote</h2>
        <p>Need help with your tech requirements? Fill out the form and we'll get back to you within 24 hours.</p>
      </div>
      <form class="inquiry-form" id="inquiry-form">
        <div class="form-group">
          <input type="text" id="name" name="name" placeholder="Your Name" required>
        </div>
        <div class="form-group">
          <input type="email" id="email" name="email" placeholder="Your Email" required>
        </div>
        <div class="form-group">
          <select id="service-type" name="service-type" required>
            <option value="">Select Service Type</option>
            <option value="product">Product Inquiry</option>
            <option value="repair">Computer Repair</option>
            <option value="networking">Networking</option>
            <option value="cctv">CCTV Installation</option>
            <option value="consultation">IT Consultation</option>
          </select>
        </div>
        <div class="form-group">
          <textarea id="message" name="message" placeholder="Tell us about your requirements" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">
          <i class="fas fa-paper-plane"></i>
          Send Inquiry
        </button>
      </form>
    </div>
  </div>
</section>

<!-- <script src="<?php echo e(asset('js/script.js')); ?>"></script> -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/livescor/techversesolutionspvtltd.com/resources/views/frontend/pages/index.blade.php ENDPATH**/ ?>