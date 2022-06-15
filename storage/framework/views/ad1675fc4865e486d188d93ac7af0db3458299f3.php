<?php $__env->startSection('title'); ?>
    Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('active'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <section class="section-dashboard--main">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card rounded-3">
                        <div class="card-body">

                            <div class="display-6">
                                Hi, Shamonti Haque. Welcome to your dashboard!
                            </div>
                            <p class="mt-2 text-end mb-0 pe-3 text-info fw-bold"  id="file-upload-filename">
                                <?php if($message = Session::get('message')): ?>
                                    <h4 id="file-upload-filename" class="mt-2 text-end mb-0 pe-3 text-info fw-bold"><?php echo e($message); ?></h4>
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex align-items-center justify-content-start">
                    <form action="<?php echo e(route('file-import')); ?>" class="d-flex"  method="POST" enctype="multipart/form-data">

                        <!-- START UPLOAD BTN -->
                        <div class="col-md-6 px-2 custom-file text-left">
                            <input id='fileid' type='file' name="file" hidden class="custom-file-input" />
                            <input id='buttonid' type='button' class="btn btn-upload" value='Upload' />
                        </div>
                        <div class="col-md-6 px-2">
                            <?php echo csrf_field(); ?>
                            <input id='buttonid' type='submit' class="btn btn-upload" value='Import' />
                        </div>

                        <!-- END UPLOAD BTN -->
                    </form>
                </div>
            </div>

            <div class="container px-2">
                <div class="row">
                    <div class="col-md-12 card rounded-3">
                        <h2 class="heading--main pt-4 pb-0 px-3 mt-2">
                            Sales Report
                        </h2>
                        <canvas id="salesChart" height="300rem"></canvas>
                    </div>
                </div>
            </div>

            <div class="container px-2">
                <div class="row">
                    <div class="col-md-12 card rounded-3">
                        <h2 class="heading--main pt-4 pb-0 px-3 mt-2">
                            Recent Credit History
                        </h2>
                        <canvas id="creditChart" height="300rem"></canvas>
                    </div>
                </div>
            </div>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\Lidata\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>