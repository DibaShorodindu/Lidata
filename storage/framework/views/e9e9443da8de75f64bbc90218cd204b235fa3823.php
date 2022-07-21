<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo $__env->make('user.userIncludes.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>

    <body>
        <header></header>
        <main class="d-flex">
            <!-- START LOGIN LEFT SIDE -->
            <?php echo $__env->make('user.userIncludes.leftDesign', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- END LOGIN LEFT SIDE -->

            <!-- START LOGIN RIGHT SIDE -->
            <?php echo $__env->yieldContent('bodyRight'); ?>
            <!-- END LOGIN RIGHT SIDE -->
        </main>

        <?php echo $__env->make('user.userIncludes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html>
<?php /**PATH E:\xampp\htdocs\Lidata\resources\views/user/userMaster.blade.php ENDPATH**/ ?>