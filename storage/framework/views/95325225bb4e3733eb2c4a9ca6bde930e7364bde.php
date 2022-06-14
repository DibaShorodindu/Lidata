<section class="section-dashboard--sidebar">
    <!-- START MENU -->
    <nav class="menubar">
        <ul class="menu d-flex flex-column">
            <li class="">
                <a href="dashboard.html" class="navbar-brand">
                    <img src="<?php echo e(asset('/')); ?>adminAsset/assets/images/logo--company-name.png" alt="logo" />
                </a>
            </li>
            <li class="menu-item <?php echo $__env->yieldContent('active'); ?>">
                <a href="<?php echo e(route('/')); ?>">
                    <i class="bi bi-collection menu-item--icon "></i>
                    <span class="menu-item--text ">
                Dashboard
              </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="<?php echo e(route('view-all')); ?>">
                    <i class="bi bi-files menu-item--icon "></i>
                    <span class="menu-item--text ">
                View All Data
              </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="">
                    <i class="bi bi-person-badge menu-item--icon "></i>
                    <span class="menu-item--text ">
                User Details
              </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="">
                    <i class="bi bi-box-arrow-in-down menu-item--icon "></i>
                    <span class="menu-item--text ">
                User Data Import
              </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="">
                    <i class="bi bi-bar-chart menu-item--icon"></i>
                    <span class="menu-item--text">
                Order History
              </span>
                </a>
            </li>
            </a>
            <li class="menu-item">
                <a href="">
                    <i class="bi bi-currency-bitcoin menu-item--icon"></i>
                    <span class="menu-item--text">
                Credit History
              </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="">
                    <i class="bi bi-arrow-left-right menu-item--icon"></i>
                    <span class="menu-item--text">
                Credit Transfer
              </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="">
                    <i class="bi bi-wallet2 menu-item--icon"></i>
                    <span class="menu-item--text">
                Payment Settings
              </span>
                </a>
            </li>
            <li class="menu-item menu-item-footer">
                <a href="<?php echo e(route('public.Dashboard')); ?>">
                    <i class="bi bi-power menu-item--icon"></i>
                    <span class="menu-item--text">
                Logout
              </span>
                </a>
            </li>
            </a>
        </ul>
    </nav>
    <!-- END MENU -->
</section>
<?php /**PATH D:\XAMPP\htdocs\PhoneList3\resources\views/admin/includes/navbar.blade.php ENDPATH**/ ?>