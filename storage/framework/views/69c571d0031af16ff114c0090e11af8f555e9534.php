<?php $__env->startSection('bodyRight'); ?>
    <section class="section-login--right d-flex flex-column">
        <a class="col-12 company-logo" href="/">
            <img
                class="img-fluid"
                src="<?php echo e(asset('/')); ?>adminAsset/assets/images/logo--company-name-dark.svg"
                alt="phone list"
            />
        </a>

        <!-- START RESET PASSWORD FORM -->
        <div class="reset-form">
            <div class="card border-0 u-box-shadow-1 rounded-3">
                <div class="card-body p-5 pb-3">
                    <div class="card-title">
                        <div>
                            <h1>Reset Your Password</h1>
                        </div>
                    </div>
                    <form action="<?php echo e(route('reset.password.post')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="token" value="<?php echo e($token); ?>">
                        <div class="mb-5">
                            <label for="email" class="form-label">Email</label>
                            <input
                                type="email"
                                class="form-control u-box-shadow-2"
                                id="email"
                                placeholder="Type Your Email"
                                required
                                name="email"
                            />
                        </div>
                        <div class="mb-5">
                            <label for="password" class="form-label">Password</label>
                            <input
                                type="password"
                                class="form-control u-box-shadow-2"
                                id="password"
                                placeholder="Type Your Password"
                                required
                                name="password"
                            />
                        </div>
                        <div class="mb-5">
                            <label for="retypePassword" class="form-label"
                            >Confirm Password</label
                            >
                            <input
                                type="password"
                                class="form-control u-box-shadow-2"
                                id="retypePassword"
                                placeholder="Type Your Password"
                                required
                                name="password_confirmation"
                            />
                        </div>

                        <button
                            type="submit"
                            class="btn btn-login rounded-3 u-box-shadow-2 mb-5"
                        >
                            Reset Password
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <!-- END RESET PASSWORD FORM -->

        <!-- START FOOTER -->
        <footer>
            <div class="section-footer">
                <p>2022 All Rights Reserved.</p>
                <p>
                    <a href="privacy_policy.html">Privacy</a>
                    and <a href="terms-of-service.html">Terms</a>.
                </p>
            </div>
        </footer>
        <!-- END FOOTER -->
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('user.userMaster', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\PhoneList\resources\views/userAuth/forgetPasswordLink.blade.php ENDPATH**/ ?>