 

<?php $__env->startSection('backend-content'); ?>
    <div class="page-header mt-0 shadow p-3">
        <ol class="breadcrumb mb-sm-0">
            <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Team Members List</li>
        </ol>
        <div class="btn-group mb-0">
            <a href="<?php echo e(route('team.create')); ?>" class="btn btn-primary  mb-0"><i class="fas fa-cog mr-2"></i>Add New Member</a>
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
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="mb-0">Team Members List</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="event" class="table table-striped table-bordered w-100 text-nowrap">
                            <thead>
                                <tr>
                                    <th class="wd-15p">S.No.</th>
                                    <th class="wd-15p">Name</th>
                                    <th class="wd-15p">Designation</th>
                                    <th class="wd-15p">Phone</th>
                                    <th class="wd-15p">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($team->name); ?></td>
                                    <td><?php echo e($team->designation); ?></td>
                                    <td><?php echo e($team->phone); ?></td>
                                    <td>
                                        <div class="">
                                            <div class="">    
                                                <a href="<?php echo e(route('team.show', $team->id)); ?>" class="btn btn-sm btn-primary">View</a>
                                            </div>
                                            <div class=""> 
                                                <a href="<?php echo e(route('team.edit', $team->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                                            </div>
                                            <div class=""> 
                                                <form action="<?php echo e(route('team.destroy', $team->id)); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" onclick="return confirm('Delete this Member?')" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/livescor/techversesolutionspvtltd.com/resources/views/user/pages/team/index.blade.php ENDPATH**/ ?>