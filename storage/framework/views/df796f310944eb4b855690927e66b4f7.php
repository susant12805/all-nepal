 

<?php $__env->startSection('backend-content'); ?>

<section class="Service-detail">
    <div class="container">
        <div class="service-header">
            <h1><?php echo e($service->name); ?></h1>
            <div class="service-actions">
                <a href="<?php echo e(route('services.edit', $service->id)); ?>" class="btn btn-edit">
                    <i class="fas fa-edit"></i> Edit
                </a>
                <form action="<?php echo e(route('services.destroy', $service->id)); ?>" method="POST" class="d-inline">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure?')">
                        <i class="fas fa-trash"></i> Delete
                    </button>
                </form>
            </div>
        </div>

        <div class="service-content">
            <div class="service-image">
                <?php if($service->image): ?>
                    <img src="<?php echo e(asset('storage/'.$service->image)); ?>" alt="<?php echo e($service->name); ?>">
                <?php else: ?>
                    <div class="no-image">
                        <i class="<?php echo e($service->icon ?? 'fas fa-box'); ?>"></i>
                    </div>
                <?php endif; ?>
            </div>
            <div class="service-info">
                <h3>Description</h3>
                <p><?php echo e($service->description); ?></p>
                
                <?php if($service->short_description): ?>
                    <h3>Quick Info</h3>
                    <p><?php echo e($service->short_description); ?></p>
                <?php endif; ?>
                
                <div class="service-meta">
                    <span class="status <?php echo e($service->is_active ? 'active' : 'inactive'); ?>">
                        <?php echo e($service->is_active ? 'Active' : 'Inactive'); ?>

                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<style>
    .service-detail {
        padding: 2rem 0;
    }
    .service-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
    }
    .service-content {
        display: grid;
        grid-template-columns: 1fr 2fr;
        gap: 2rem;
    }
    .service-image img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
    }
    .no-image {
        font-size: 5rem;
        text-align: center;
        color: #ddd;
    }
    .service-actions {
        display: flex;
        gap: 1rem;
    }
    .btn-edit {
        background: #4e73df;
        color: white;
    }
    .btn-delete {
        background: #e74a3b;
        color: white;
    }
    .status.active {
        color: #1cc88a;
    }
    .status.inactive {
        color: #e74a3b;
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/livescor/techversesolutionspvtltd.com/resources/views/user/pages/services/show.blade.php ENDPATH**/ ?>