<?php $__env->startSection('backend-content'); ?>
<div class="page-header mt-0 shadow p-3">
    <ol class="breadcrumb mb-sm-0">
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    </ol>
</div>
<div class="card shadow overflow-hidden">
    <div class="">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 stats">
                <div class="text-center">
                    <p class="text-light">
                        <i class="fas fa-chart-line mr-2"></i>
                        Total Products
                    </p>
                    <h2 class="text-primary text-xxl"><?php echo e($products->count()); ?></h2>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 stats">
                <div class="text-center">
                    <p class="text-light">
                        <i class="fas fa-users mr-2"></i>
                        Total Users
                    </p>
                    <h2 class="text-yellow text-xxl"><?php echo e($users->count()); ?></h2>
                </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header bg-transparent border-0">
                <h2 class=" mb-0">Product Tables</h2>
            </div>
            <div class="">
                <div class="grid-margin">
                    <div class="">
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter text-nowrap align-items-center">
                                <thead class="thead-light">
                                    <tr>
                                        <th>S. No.</th>
                                        <th>Product</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($product->name); ?></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/susant/Desktop/techversesolutionspvtltd.com/resources/views/user/pages/dashboard.blade.php ENDPATH**/ ?>