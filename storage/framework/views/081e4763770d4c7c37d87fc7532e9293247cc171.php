


<?php $__env->startSection('title'); ?>
    Manage Plan | Li Data
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <section class="section-settings d-flex">
        <!-- START SIDEBAR -->
        <section class="d-flex flex-column flex-shrink-0 p-4 section-sidebar">
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <span class="text-uppercase">Personal Profile</span>
                    <a
                        href="<?php echo e(route('account')); ?>"
                        class="nav-link <?php echo e(request()->routeIs('account') ? 'active' : ''); ?>"
                        aria-current="page"
                    >
                        <h2 class="fs-4 m-0">You</h2>
                    </a>
                </li>
                <li class="nav-item mt-4">
                    <span class="text-uppercase">Admin Settings</span>
                    <a href="<?php echo e(route('managePlan')); ?>" class="nav-link <?php echo e(request()->routeIs('managePlan') ? 'active' : ''); ?> <?php echo e(request()->routeIs('billing') ? 'active' : ''); ?>" >
                        <h2 class="fs-4 m-0">Manage Plan</h2>
                    </a>
                </li>
                <li class="nav-item mt-4">
                 <span class="text-uppercase">System Activity</span>
                  <a href="<?php echo e(route('contacts')); ?>" class="nav-link <?php echo e(request()->routeIs('contacts') ? 'active' : ''); ?> <?php echo e(request()->routeIs('csv-export-settings') ? 'active' : ''); ?>"> Imports &#38; Exports</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('current')); ?>" class="nav-link <?php echo e(request()->routeIs('current') ? 'active' : ''); ?> <?php echo e(request()->routeIs('history') ? 'active' : ''); ?>"> Credit Usage </a>
                </li>
            </ul>
        </section>
        <!-- END SIDEBAR -->

        <!-- START MAIN -->
        <?php echo $__env->yieldContent('main'); ?>
        <!-- END MAIN -->
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('userDashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Lidata\resources\views/userDashboard/settings/master.blade.php ENDPATH**/ ?>