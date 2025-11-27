


 <section class="main-slider">
   <div class="slider-container">

     <?php $__currentLoopData = $heroimages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $heroimage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <div class="slide <?php echo e($index === 0 ? 'active' : ''); ?>" style="background-image: url('<?php echo e(asset('storage/' . $heroimage->image)); ?>');">
       <div class="slide-overlay"></div>
     </div>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

     <!-- Navigation Arrows -->
     <div class="slider-arrows">
       <button class="arrow prev" onclick="changeSlide(-1)">&#8249;</button>
       <button class="arrow next" onclick="changeSlide(1)">&#8250;</button>
     </div>

     <!-- Navigation Dots -->
     <div class="slider-nav">
       <?php $__currentLoopData = $heroimages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $heroimage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="nav-dot <?php echo e($index === 0 ? 'active' : ''); ?>" data-index="<?php echo e($index); ?>"></div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     </div>

     <!-- Timer Bar -->
     <div class="timer-bar"></div>

     <!-- Floating Elements -->
     <div class="floating-elements">
       <div class="floating-element"></div>
       <div class="floating-element"></div>
       <div class="floating-element"></div>
     </div>

   </div>
 </section>


<?php /**PATH /Users/susant/Desktop/Mitach/resources/views/frontend/layout/heroimage.blade.php ENDPATH**/ ?>