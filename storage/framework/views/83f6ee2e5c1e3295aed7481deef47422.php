<?php $__env->startSection('content'); ?>

<!-- Projects Header -->
<header class="projects-header">
    <div class="container">
        <h1>Our Projects</h1>
        <p>Discover our portfolio of innovative solutions that have helped clients achieve their business goals</p>
    </div>
</header>

<!-- Projects Section -->
<section class="projects-section">
    <div class="container">
        <!-- Filter Buttons -->


        <!-- Projects Grid -->
        <!--  Project 1 -->
        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="project-detail" id="project1" data-category="web ai">
            <div class="project-content">
                <div class="project-info">

                    <span class="project-category"><?php echo e($project->name); ?></span>
                    <p class="project-subtitle"><?php echo e($project->short_description); ?></p>
                    <div class="project-description">
                        <p><?php echo e($project->description); ?></p>
                    </div>
                </div>
                <div class="project-gallery">
                    
                        <?php if($project->image): ?>
                        <img src="<?php echo e(asset('storage/'.$project->image)); ?>" alt="<?php echo e($project->name); ?>" class="main-image">
                        <?php elseif($project->icon): ?>
                        <i class="<?php echo e($project->icon); ?>"></i>
                        <?php else: ?>
                        <i class="fas fa-box"></i> <!-- Default icon -->
                        <?php endif; ?>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



    </div>
</section> -->

<section class="project-cta">
    <div class="container">
        <h2>Ready to Start Your Project?</h2>
        <p>Let's discuss how we can help you achieve your business goals with cutting-edge technology solutions.</p>
        <a href="#" class="btn">Get in Touch</a>
    </div>
</section>

<?php $__env->stopSection(); ?>
    <?php $__env->startSection('bottomscript'); ?>
<script src="<?php echo e(asset('js/project.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/livescor/techversesolutionspvtltd.com/resources/views/frontend/pages/project.blade.php ENDPATH**/ ?>