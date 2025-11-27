<nav class="navbar" id="navbar">
    <div class="nav-container">
        <!-- Logo via CSS -->
        <div class="nav-logo">
            <a href="<?php echo e(url('/home')); ?>" class="logo-link">
                <!-- This div will hold the logo background -->
                <div class="logo-image"></div>
                <span>Tech Verse</span>
            </a>
        </div>

        <!-- Navigation Links -->
        <div class="nav-menu" id="nav-menu">
            <a href="<?php echo e(url('/home')); ?>" class="nav-link <?php echo e(Request::is('/') ? 'active' : ''); ?>">Home</a>
            <a href="<?php echo e(url('/service')); ?>" class="nav-link <?php echo e(Request::is('service') ? 'active' : ''); ?>">Service</a>
            <a href="<?php echo e(url('/product')); ?>" class="nav-link <?php echo e(Request::is('product') ? 'active' : ''); ?>">Products</a>
            <a href="<?php echo e(url('/project')); ?>" class="nav-link <?php echo e(Request::is('project') ? 'active' : ''); ?>">Projects</a>
            <a href="<?php echo e(url('/about')); ?>" class="nav-link <?php echo e(Request::is('about') ? 'active' : ''); ?>">About</a>
            <a href="<?php echo e(url('/contact')); ?>" class="nav-link <?php echo e(Request::is('contact') ? 'active' : ''); ?>">Contact</a>
        </div>
    </div>
</nav><?php /**PATH /home/livescor/techversesolutionspvtltd.com/resources/views/frontend/layout/navbar.blade.php ENDPATH**/ ?>