<?php $__env->startSection('main'); ?>

           <!-- START MAIN -->
      <section class="section-main">
        <!-- START SECOND NAVBAR -->
        <section class="second-navbar">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a href="<?php echo e(route('contacts')); ?>" class="nav-link <?php echo e(request()->routeIs('contacts') ? 'active' : ''); ?>">Contact Import</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(route('accounts')); ?>" class="nav-link <?php echo e(request()->routeIs('accounts') ? 'active' : ''); ?>">Account Import</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(route('exports')); ?>" class="nav-link <?php echo e(request()->routeIs('exports') ? 'active' : ''); ?>">CSV Exports</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(route('csv-export-settings')); ?>" class="nav-link <?php echo e(request()->routeIs('csv-export-settings') ? 'active' : ''); ?>" class="nav-link">CSV Export Settings</a>
            </li>
          </ul>
        </section>
        <!-- END SECOND NAVBAR -->
        <!-- END SECOND NAVBAR -->


         <!-- START NO EXPORT -->
         <section class="pt-5 ps-3 section-no-export d-none">
                <span class="text-secondary">No CSV exports found!</span>
            </section>
            <!-- END NO EXPORT -->

        <!-- START CSV EXPORTS TABLE -->
        <section class="section-csv-exports-table m-3 border rounded table-scrollable">
          <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Progress</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>Total Records</th>
                <th>Exported By</th>
              </tr>
            </thead>
            <tbody>
             
            <?php $__currentLoopData = $exportHistory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $export): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr onclick="window.location='<?php echo e(route('reDownloadFile',$export->id)); ?>'">
                            <td scope="row">
                                <div>
                                    Export of contacts
                                </div>
                                <div class="fs-5 text-secondary">
                                    Created on
                                    <span><?php echo e(\Carbon\Carbon::parse($export->createdOn)->format('M')); ?>

                                         <?php echo e(\Carbon\Carbon::parse($export->createdOn)->format('d')); ?>

                                         </span>
                                </div>
                                </p>
                            </td>
                            <td colspan="8">
                                <div class="progress my-auto">
                                <div
                                    class="progress-bar"
                                    role="progressbar"
                                    style="width: 100%"
                                    aria-valuenow="100"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                ></div>
                                </div>
                            </td>
                            <td><?php echo e($export->record); ?></td>
                            <td>
                            <button
                                type="button"
                                class="user user-btn circle-element mx-3"
                            >
                                <p class="user-name"><?php echo e($firstStringCharacter = substr(Auth::user()->firstName, 0, 1)); ?><?php echo e($firstStringCharacter = substr(Auth::user()->lastName, 0, 1)); ?></p>
                                <div class="user-details bg-dark py-2 px-5">
                                    <p>
                                        Export started by <?php echo e(Auth::user()->firstName); ?> <?php echo e(Auth::user()->lastName); ?>

                                    </p>
                                    <p>
                                        &lt;<?php echo e(Auth::user()->email); ?>&gt;
                                    </p>
                                </div>
                            </button>
                        </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    <tfoot>
                    <tr>


                 <td class="d-flex align-items-center">
                            <!-- START PAGINATION -->
                            <div class="row pb-2 pt-5 mt-2">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <div class="d-sm-inline-flex justify-content-center">
                                                <?php echo $exportHistory->links(); ?>

                                            </div>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- END PAGINATION -->
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </section>
            <!-- END CSV EXPORTS TABLE -->
        </section>
    <!-- END MAIN -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('userDashboard.settings.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\Lidata\resources\views/userDashboard/settings/imports&exports/exports.blade.php ENDPATH**/ ?>