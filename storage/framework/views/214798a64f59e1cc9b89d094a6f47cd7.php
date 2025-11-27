<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar ">
    <div class="sidebar-img">
        
                <a class="sus" href= "<?php echo e(route('dashboard')); ?>"  >All Nepal Tech Solutions </a>
        <!-- <a class="navbar-brand" href="index-2.html"><img alt="..." class="navbar-brand-img main-logo" src="<?php echo e(asset('backend')); ?>/assets/img/brand/logo-dark.png"> <img alt="..." class="navbar-brand-img logo" src="<?php echo e(asset('backend')); ?>/assets/img/brand/logo.png"></a> -->
        <ul class="side-menu">
            <li class="slide">
                <a class="side-menu__item" href="<?php echo e(route('dashboard')); ?>"><i class="side-menu__icon fa fa-home"></i><span class="side-menu__label">Dashboard</span></a>
            </li>
            <li class="slide">
                <a class="side-menu__item @active('user*')" href="<?php echo e(route('user.index')); ?>">
                    <i class="side-menu__icon fe fe-shield"></i><span class="side-menu__label">Users</span>
                </a>
            </li>
            <li class="slide">
                <a class="side-menu__item @active('profile*')" href="<?php echo e(route('profile')); ?>"><i class="side-menu__icon fe fe-user"></i><span class="side-menu__label">Profile</span></a>
            </li>
                <a class="side-menu__item" href="<?php echo e(route('logo.index')); ?>"><i class="side-menu__icon fa fa-building"></i><span class="side-menu__label">Company Deatils</span></a>
            </li>
            
                 <li class="slide">
                <a class="side-menu__item @active('heroimage*')" href="<?php echo e(route('heroimage.index')); ?>">
                    <i class="side-menu__icon fe fe-image"></i><span class="side-menu__label">Hero Image</span>
                </a>
            </li>
            <li class="slide">
                <a class="side-menu__item" href="<?php echo e(route('services.index')); ?>"><i class="side-menu__icon fas fa-concierge-bell"></i><span class="side-menu__label">Services</span></a>
            </li>
            <li class="slide">
                <a class="side-menu__item" href="<?php echo e(route('projects.index')); ?>"><i class="side-menu__icon fas fa-project-diagram"></i><span class="side-menu__label">Our Projects</span></a>
            </li>
            <li class="slide">
                <a class="side-menu__item" href="<?php echo e(route('products.index')); ?>"><i class="side-menu__icon fas fa-box-open"></i><span class="side-menu__label">Our Products</span></a>
            </li>
            <li class="slide">
                <a class="side-menu__item" href="<?php echo e(route('team.index')); ?>"><i class="side-menu__icon fas fa-users"></i><span class="side-menu__label">Teams</span></a>
            </li>
            <li class="slide">
                <a class="side-menu__item" href="<?php echo e(route('client.index')); ?>"><i class="side-menu__icon fa fa-home"></i><span class="side-menu__label">Testimonials</span></a>
            </li>
            <li class="slide">
                <a class="side-menu__item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="side-menu__icon ni ni-user-run"></i><span class="side-menu__label">Log Out</span></a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo e(csrf_field()); ?>

                </form>
            </li>
        </ul>
    </div>
</aside><?php /**PATH /Users/susant/Desktop/techversesolutionspvtltd.com/resources/views/user/layouts/sidebar.blade.php ENDPATH**/ ?>