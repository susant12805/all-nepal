 

<?php $__env->startSection('backend-content'); ?>
<div class="container">
    <h2>Add New Product</h2>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <form action="<?php echo e(route('products.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label for="name">Product Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>


        <div class="mb-3">
            <label for="description">Full Description:</label>
            <input type="text" name="description" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="image">Upload Image:</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/livescor/techversesolutionspvtltd.com/resources/views/user/pages/products/create.blade.php ENDPATH**/ ?>