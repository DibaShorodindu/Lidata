


<?php $__env->startSection('main'); ?>
    <section class="section-main">
        <!-- START SECOND NAVBAR -->
        <section class="second-navbar">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="<?php echo e(route('managePlan')); ?>" class="nav-link <?php echo e(request()->routeIs('managePlan') ? 'active' : ''); ?>">Plan Overview</a>
                    
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('billing')); ?>" class="nav-link">Billing</a>
                </li>
            </ul>
        </section>
         <!-- END SECOND NAVBAR -->
         <section class="section-settings-plan">
            <div class="card u-box-shadow-2 m-4 border rounded-3">
                <div
                    class="card-title m-0 d-flex justify-content-between align-items-center"
                >
                    <h1 class="p-4 text-capitalize"><?php echo e($userPurchasePlan[0]); ?> Plan</h1>
                    <a
                        href="<?php echo e(route('upgrade')); ?>"
                        type="button"
                        class="btn btn-purple me-4"
                    >
                        Purchase Plan
                    </a>
                </div>
                <div class="card-body">
                    <div class="card-bg">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10">
                                    <span> What's Included </span>
                                </div>
                                <div class="col-md-2 text-end">
                                    <span> Price </span>
                                </div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-md-4">
                                    <h3>Credits</h3>
                                </div>
                                <div class="col-md-4">
                                    <p><?php echo e($userPurchasePlan[1]); ?> Reward Credits</p>
                                    <p><?php echo e($userPurchasePlan[2]); ?> Email Credits / mo</p>
                                </div>
                                <div class="col-md-4 text-end">
                                    <p><?php echo e($userPurchasePlan[0]); ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <h3>Monthly Total</h3>
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4 text-end">
                                    <p class="fw-bold">$<?php echo e($userPurchasePlan[3]); ?>/mo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-settings-plan">
            <div class="card u-box-shadow-2 m-4 border rounded-3">
                <div
                    class="card-title d-flex justify-content-between align-items-center"
                >
                    <h3 class="p-4 text-capitalize">
                        Credits Usage <span> ( <?php echo e($userPurchasePlan[4]); ?> <?php echo e($userPurchasePlan[5]); ?> <?php echo e($userPurchasePlan[6]); ?>  - <?php echo e($userPurchasePlan[7]); ?> <?php echo e($userPurchasePlan[8]); ?> <?php echo e($userPurchasePlan[9]); ?> ) </span>
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
                                        You have used <span class="text-primary"><?php echo e($userPurchasePlan[10]); ?></span> of
                                        <span class="text-dark"><?php echo e($userPurchasePlan[11]); ?></span> available
                                        credits this billing cycle.
                                    </p>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- END MAIN -->
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('userDashboard.settings.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Lidata\resources\views/userDashboard/settings/plans/managePlan.blade.php ENDPATH**/ ?>