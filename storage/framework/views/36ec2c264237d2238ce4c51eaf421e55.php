<?php $__env->startSection('content'); ?>

<section class="section services-section bg-gray-50 py-12">
    <div class="container mx-auto px-4">
        <h2 class="section-title text-3xl font-bold text-center mb-12 text-gray-800">Our Comprehensive IT Services</h2>
        <div class="services-grid">
  <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="service-card">
      <div class="service-image-container">
        <img src="<?php echo e($service->image ? url('storage/' . $service->image) : asset('images/default-service.png')); ?>"
             alt="<?php echo e($service->name); ?>"
             class="service-image">
      </div>
      <div class="service-content">
        <h3 class="service-title"><?php echo e($service->name); ?></h3>
        <div class="service-divider"></div>
        <?php if(!empty($service->short_description)): ?>
          <p class="service-short-desc"><?php echo e($service->short_description); ?></p>
          <div class="service-divider"></div>
        <?php endif; ?>
        <?php if(!empty($service->description)): ?>
          <p class="service-full-desc"><?php echo e($service->description); ?></p>
        <?php endif; ?>
      </div>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('bottomscript'); ?>
<script src="<?php echo e(asset('js/service.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/livescor/techversesolutionspvtltd.com/resources/views/frontend/pages/service.blade.php ENDPATH**/ ?>