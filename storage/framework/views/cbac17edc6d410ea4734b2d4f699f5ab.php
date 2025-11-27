<!DOCTYPE html>
<html>

  <head>
      <?php echo $__env->make('frontend.layout.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
      <?php echo $__env->yieldContent('styles'); ?> <!-- Add this -->
  </head>
  <body>

    <div class="page-wrapper">
      <!-- Preloader -->
      <div class="preloader"></div>
      <!-- Nav bar -->
        <?php echo $__env->make('frontend.layout.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
              
        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('frontend.layout.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php echo $__env->yieldContent('bottomscript'); ?>
      </div>
  </body>
</html><?php /**PATH /Users/susant/Desktop/Work/All nepal tech solution/resources/views/frontend/layout/app.blade.php ENDPATH**/ ?>