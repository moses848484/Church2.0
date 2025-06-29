<style>
    .fa-file {
        color: blueviolet !important;
    }

    .fa-book {
        color: green !important;
    }
</style>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="<?php echo e(url('/redirect')); ?>"><img src="admin/assets/images/faces/sda3.png"
                alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="<?php echo e(url('/redirect')); ?>"><img
                src="admin/assets/images/faces/sda4.png" alt="logo" /></a>
    </div>
    <ul class="nav">

        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items <?php echo e(request()->is('/redirect') ? 'active' : ''); ?>">
            <a class="nav-link" href="<?php echo e(url('/redirected')); ?>">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li
            class="nav-item menu-items <?php echo e(request()->is('view_members') || request()->is('see_members') || request()->is('update_member/*') ? 'active' : ''); ?>">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic"
                aria-expanded="<?php echo e(request()->is('view_members') || request()->is('see_members') ? 'true' : 'false'); ?>"
                aria-controls="ui-basic">
                <span class="menu-icon">
                    <i class="fa-solid fa-users fa-3x"></i>
                </span>
                <span class="menu-title">Manage Members</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse <?php echo e(request()->is('view_members') || request()->is('see_members') ? 'show' : ''); ?>"
                id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item <?php echo e(request()->is('view_members') ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(url('view_members')); ?>">
                            <i class="fa-solid fa-user"></i>&nbsp;Register Members
                        </a>
                    </li>

                    <li
                        class="nav-item <?php echo e(request()->is('see_members') || request()->is('update_member/*') ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(url('see_members')); ?>">
                            <i class="fa-solid fa-eye"></i>&nbsp;View Members
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li
            class="nav-item menu-items <?php echo e(request()->is('view_inventory') || request()->is('show_inventory') || request()->is('update_inventory/*') ? 'active' : ''); ?>">
            <a class="nav-link" data-toggle="collapse" href="#auth"
                aria-expanded="<?php echo e(request()->is('view_inventory') || request()->is('show_inventory') || request()->is('update_inventory/*') ? 'true' : 'false'); ?>"
                aria-controls="auth">
                <span class="menu-icon">
                    <i class="fa-solid fa-warehouse"></i>
                </span>
                <span class="menu-title">Inventory</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse <?php echo e(request()->is('view_inventory') || request()->is('show_inventory') || request()->is('update_inventory/*') ? 'show' : ''); ?>"
                id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item <?php echo e(request()->is('view_inventory') ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(url('view_inventory')); ?>">
                            <i class="fa-solid fa-wrench"></i>&nbsp; Add Inventory
                        </a>
                    </li>

                    <li
                        class="nav-item <?php echo e(request()->is('show_inventory') || request()->is('update_inventory/*') ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(url('show_inventory')); ?>">
                            <i class="fa-solid fa-eye"></i>&nbsp;Show Inventory
                        </a>
                    </li>

                </ul>
            </div>
        </li>

        <li
            class="nav-item menu-items <?php echo e(request()->is('strategic_plan') || request()->is('strategic_details') ? 'active' : ''); ?>">
            <a class="nav-link" data-toggle="collapse" href="#strategicPlanning"
                aria-expanded="<?php echo e(request()->is('strategic_plan') || request()->is('strategic_details') ? 'true' : 'false'); ?>"
                aria-controls="strategicPlanning">
                <span class="menu-icon">
                    <i class="fa-solid fa-briefcase"></i>
                </span>
                <span class="menu-title">Strategic Planning</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse <?php echo e(request()->is('strategic_plan') || request()->is('strategic_details') ? 'show' : ''); ?>"
                id="strategicPlanning">
                <ul class="nav flex-column sub-menu">
                    <li
                        class="nav-item menu-items <?php echo e(request()->is('scorecard') || request()->is('update_scorecard/*') ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(url('scorecard')); ?>">
                            <i class="fa-solid fa-book"></i>&nbsp;Create Scorecard
                        </a>
                    </li>
                    <li class="nav-item menu-items <?php echo e(request()->is('strategic_plan') || request()->is('update_scorecard/*') ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(url('strategic_plan')); ?>">
                            <i class="fa-solid fa-file"></i>&nbsp;Create Work Plan
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item menu-items <?php echo e(request()->is('time_management') ? 'active' : ''); ?>">
            <a class="nav-link" href="<?php echo e(url('time_management')); ?>">
                <span class="menu-icon">
                    <i class="fa-solid fa-clock fa-10x"></i>
                </span>
                <span class="menu-title">Time Management</span>
            </a>
        </li>

        <li class="nav-item menu-items <?php echo e(request()->is('departments') ? 'active' : ''); ?>">
            <a class="nav-link" href="<?php echo e(url('departments')); ?>">
                <span class="menu-icon">
                    <i class="fa-solid fa-book fa-10x"></i>
                </span>
                <span class="menu-title">Departments</span>
            </a>
        </li>

        <li class="nav-item menu-items <?php echo e(request()->is('view_givings') ? 'active' : ''); ?>">
            <a class="nav-link" href="<?php echo e(url('view_givings')); ?>">
                <span class="menu-icon">
                    <i class="fa-solid fa-sack-dollar"></i>
                </span>
                <span class="menu-title">Givings</span>
            </a>
        </li>

        <li
            class="nav-item menu-items <?php echo e(request()->is('see_users') || request()->is('update_user/*') ? 'active' : ''); ?>">
            <a class="nav-link" href="<?php echo e(url('see_users')); ?>">
                <span class="menu-icon">
                    <i class="fa-solid fa-user"></i>
                </span>
                <span class="menu-title">Users</span>
            </a>
        </li>

        <li class="nav-item menu-items <?php echo e(request()->is('view') ? 'active' : ''); ?>">
            <a class="nav-link" href="<?php echo e(url('#')); ?>">
                <span class="menu-icon">
                    <i class="fa-solid fa-user-tie"></i>
                </span>
                <span class="menu-title">Human Resource</span>
            </a>
        </li>
    </ul>
</nav>
<?php /**PATH C:\xampp\htdocs\church\resources\views/admin/sidebar.blade.php ENDPATH**/ ?>