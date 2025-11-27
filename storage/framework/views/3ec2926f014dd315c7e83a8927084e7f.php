<?php $__env->startSection('content'); ?>
<!-- Featured Products -->
    
<section class="section">
    <h2 class="section-title">Our Products Range</h2>
    <div class="product-grid">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="product-card">
            <div class="product-image">
            <?php if($product->image): ?>
                        <img src="<?php echo e(asset('storage/'.$product->image)); ?>" alt="<?php echo e($product->name); ?>" class="main-image">
                        <?php elseif($produect->icon): ?>
                        <i class="<?php echo e($product->icon); ?>"></i>
                        <?php else: ?>
                        <i class="fas fa-box"></i> <!-- Default icon -->
                        <?php endif; ?>
            </div>
            <div class="product-info">
                <h3 class="product-title">
                    <?php echo e($product->name); ?>

                </h3>
                <p><?php echo e($product->description); ?></p>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>
<?php $__env->stopSection(); ?>
    <?php $__env->startSection('bottomscript'); ?>
<!-- <?php $__env->startSection('scripts'); ?> -->
<script src="<?php echo e(asset('js/product.js')); ?>"></script>
<!-- <?php $__env->stopSection(); ?> -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/susant/Desktop/Mitach/resources/views/frontend/pages/product.blade.php ENDPATH**/ ?>