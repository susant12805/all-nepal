 

<?php $__env->startSection('backend-content'); ?>

    <div class="page-header mt-0 shadow p-3">
        <ol class="breadcrumb mb-sm-0">
            <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Hero Image Details</li>
        </ol>
        <div class="btn-group mb-0">
            <a href="<?php echo e(route('heroimage.edit', $heroimage->id)); ?>" class="btn btn-primary  mb-0"><i class="fas fa-cog mr-2"></i>Edit Hero Image Details</a>
        </div>
    </div>
    <?php if(session('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo e(session('success')); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <div class="gallery row justify-content-md-center">
        <div class="col-md-12">
            <div class="card shadow ">
                <div class="card-body pb-0">
                    <div class="" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                        <div class="card-header">
                            <h2 class="text-center">Name: <?php echo e($heroimage->name); ?></h2>
                        </div>
                        <div class="card-header">
                            <p class="text-center">Link:</p>
                            <a hrff="<?php echo e($heroimage->link); ?>" class="description"><?php echo e($heroimage->link); ?></a>
                        </div>
                        <div class="card-header">
                            <p class="text-center">Hero Image:</p>
                            <div class="row justify-content-md-center">
                                <div class="col-lg-3 hover15">
                                    <div class="card shadow overflow-hidden">
                                        <a href="<?php echo e(url('storage/'.$heroimage->image)); ?>" class="big"><img src="<?php echo e(url('storage/'.$heroimage->image)); ?>" alt="<?php echo e($heroimage->name); ?>" title="<?php echo e($heroimage->name); ?>" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- gallery Js-->
<script src="<?php echo e(asset('backend')); ?>/assets/plugins/gallery/dist/simple-lightbox.js"></script>
<script src="<?php echo e(asset('backend')); ?>/assets/js/gallery.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/livescor/techversesolutionspvtltd.com/resources/views/user/pages/heroimage/view.blade.php ENDPATH**/ ?>