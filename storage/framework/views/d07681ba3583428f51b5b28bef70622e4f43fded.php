<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <meta name="description" content="" />
    <meta name="keywords" content="li data," />

        <title><?php echo $__env->yieldContent('title'); ?></title>

       <?php echo $__env->make('userDashboard.includes.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>

    <body>
        <header>
            <?php echo $__env->make('userDashboard.includes.header_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </header>

        <main id="peopleData">
            <?php echo $__env->yieldContent('body'); ?>
        </main>

        <?php echo $__env->make('userDashboard.includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <script>
            //Chart JS PurchaseChart Setup
            const purchaseLabels = [
                'Day 01',
                'Day 02',
                'Day 03',
                'Day 04',
                'Day 05',
                'Day 06',
                'Day 07',
            ];

            const purchaseData = {
                labels: purchaseLabels,
                datasets: [
                    {
                        label: 'Data Purchased',
                        backgroundColor: 'rgba(137, 121, 232, 1)',
                        borderColor: 'rgba(137, 121, 232, 1)',
                        data: [2, 10, 5, 2, 20, 30, 45],
                    },
                    {
                        label: 'Credit Purchased',
                        backgroundColor: 'rgba(75, 192, 192, 1)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        data: [12, 20, 15, 21, 2, 10, 35],
                    },
                ],
            };

            const purchaseConfig = {
                type: 'line',
                data: purchaseData,
                options: {},
            };

            //Chart JS purchaseChart Configuration
            const purchaseChart = new Chart(
                document.getElementById('purchaseChart'),
                purchaseConfig
            );
        </script>


    </body>
</html>

<?php /**PATH D:\xampp\htdocs\Lidata\resources\views/userDashboard/master_user.blade.php ENDPATH**/ ?>