
<?php $__env->startSection('backendtopcss'); ?>
    <!-- DataTables CSS -->
    <link href="<?php echo e(asset('backend/assets/plugins/datatable/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('backend-content'); ?>
    <div class="page-header mt-0 shadow p-3">
        <ol class="breadcrumb mb-sm-0">
            <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">User List</li>
        </ol>
        <div class="ml-auto">
            <a href="<?php echo e(route('user.create')); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New User</a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg">
            <div class="card shadow">
                <div class="card-header">
                    <h3 class="mb-0">All Users</h3>
                </div>
                <div class="card-body">
                    <?php if(session('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo e(session('success')); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>

                    <div class="table-responsive">
                        <table id="userTable" class="table table-bordered text-nowrap">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($user->name); ?></td>
                                        <td><?php echo e($user->email); ?></td>
                                        <td><?php echo e($user->phone); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('user.edit', $user->id)); ?>" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>

                                            <form action="<?php echo e(route('user.destroy', $user->id)); ?>" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure to delete this user?')">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php if($users->isEmpty()): ?>
                                    <tr>
                                        <td colspan="7" class="text-center">No users found.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>

                </div> <!-- card-body -->
            </div> <!-- card -->
        </div> <!-- col -->
    </div> <!-- row -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('backendbottomscript'); ?>
    <!-- DataTables JS -->
    <script src="<?php echo e(asset('backend/assets/plugins/datatable/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/plugins/datatable/js/dataTables.bootstrap4.min.js')); ?>"></script>

    <script>
        $(document).ready(function () {
            $('#userTable').DataTable({
                pageLength: 10,
                ordering: true
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/susant/Desktop/techversesolutionspvtltd.com/resources/views/user/pages/user/index.blade.php ENDPATH**/ ?>