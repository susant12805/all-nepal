 

<?php $__env->startSection('backend-content'); ?>
<!-- gallery css-->
<link href="<?php echo e(asset('backend')); ?>/assets/plugins/gallery/dist/simplelightbox.min.css" rel="stylesheet" />
    <div class="page-header mt-0 shadow p-3">
        <ol class="breadcrumb mb-sm-0">
            <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Team Member Details</li>
        </ol>
        <div class="btn-group mb-0">
            <a href="<?php echo e(route('team.edit', $team->id)); ?>" class="btn btn-primary  mb-0"><i class="fas fa-cog mr-2"></i>Edit Member Details</a>
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
                            <h2 class="text-center">Name: <?php echo e($team->name); ?></h2>
                            <h4 class="text-center">Designation: <?php echo e($team->designation); ?></h4>
                            <p class="text-center">Phone Number: <?php echo e($team->phone); ?></p>
                        </div>
                        <div class="card-header">
                            <p class="text-center">Testimonial:</p>
                            <a hrff="<?php echo e($team->testimonial); ?>" class="description"><?php echo e($team->testimonial); ?></a>
                        </div>
                        <div class="card-header">
                            <p class="text-center">Image:</p>
                            <div class="row justify-content-md-center">
                                <div class="col-lg-3 hover15">
                                    <div class="card shadow overflow-hidden">
                                        <a href="<?php echo e(url('storage/'.$team->image)); ?>" class="big"><img src="<?php echo e(url('storage/'.$team->image)); ?>" alt="<?php echo e($team->name); ?>" title="<?php echo e($team->name); ?>" /></a>
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
<?php echo $__env->make('user.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/livescor/techversesolutionspvtltd.com/resources/views/user/pages/team/view.blade.php ENDPATH**/ ?>