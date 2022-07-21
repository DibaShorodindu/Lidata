<?php $__env->startSection('title.title'); ?>
    Credit Usage | Li Data
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
    <section class="section-main">
        <!-- START SECOND NAVBAR -->
        <section class="second-navbar">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="<?php echo e(route('current')); ?>" class="nav-link <?php echo e(request()->routeIs('current') ? 'active' : ''); ?>"
                    >Current Credit Usage</a
                    >
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('history')); ?>" class="nav-link <?php echo e(request()->routeIs('history') ? 'active' : ''); ?>">Credit Usage History</a>
                </li>
            </ul>
        </section>
        <!-- END SECOND NAVBAR -->

        <!-- START CURRENT CREDIT -->
        <section class="section-current-credit">
            <div class="card u-box-shadow-2 m-4 border rounded-3">
                <div
                        class="card-title d-flex justify-content-between align-items-center"
                >
                    <h3 class="p-4 text-capitalize">
                        Credits Usage <span> <?php echo e($userPurchasePlan[1]); ?> <?php echo e($userPurchasePlan[3]); ?> <?php echo e($userPurchasePlan[2]); ?>  - <?php echo e($userPurchasePlan[4]); ?> <?php echo e($userPurchasePlan[5]); ?> <?php echo e($userPurchasePlan[6]); ?> </span>
                    </h3>
                    <a
                            href="<?php echo e(route('upgrade')); ?>"
                            type="button"
                            class="btn btn-access me-4"
                    >
                        Buy More Credits
                    </a>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="fs-3">
                                    Email Credits
                                    <i
                                            class="bi bi-question-circle-fill text-secondary"
                                    ></i>
                                    <p class="mt-4">
                                        You have used <span class="text-primary"><?php echo e($userPurchasePlan[7]); ?></span> of
                                        <span class="text-dark"><?php echo e($userPurchasePlan[8]); ?></span> available email
                                        credits this billing cycle.
                                    </p>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CURRENT CREDIT -->
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('userDashboard.settings.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Lidata\resources\views/userDashboard/settings/credits/current.blade.php ENDPATH**/ ?>