<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <?php echo $__env->make('admin.includes.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title><?php echo $__env->yieldContent('title'); ?></title>

</head>

<body>

<section class="section-dashboard">
    <!-- START SIDEBAR -->
    <?php echo $__env->make('admin.includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- END SIDEBAR -->

    <!-- START MAIN BODY -->
    <?php echo $__env->yieldContent('body'); ?>
    <!-- END MAIN BODY -->
</section>

<?php echo $__env->make('admin.includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH D:\xampp\htdocs\Lidata\resources\views/admin/master.blade.php ENDPATH**/ ?>