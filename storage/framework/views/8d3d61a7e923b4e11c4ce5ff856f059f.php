<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="<?php echo e(url('/redirect')); ?>"><img src="admin/assets/images/faces/sda3.png" alt="logo" /></a>
    <a class="sidebar-brand brand-logo-mini" href="<?php echo e(url('/redirect')); ?>"><img src="admin/assets/images/faces/sda4.png" alt="logo" /></a>
  </div>
  <ul class="nav">

    <li class="nav-item nav-category">
      <span class="nav-link">Navigation</span>
    </li>
    
    <li class="nav-item menu-items <?php echo e(request()->is('/redirected') ? 'active' : ''); ?>">
      <a class="nav-link" href="<?php echo e(url('/redirected')); ?>">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <li class="nav-item menu-items <?php echo e(request()->is('member_givings') ? 'active' : ''); ?>">
      <a class="nav-link" href="<?php echo e(url('member_givings')); ?>">
        <span class="menu-icon">
          <i class="fa-solid fa-sack-dollar"></i>
        </span>
        <span class="menu-title">Givings</span>
      </a>
    </li>

    <li class="nav-item menu-items <?php echo e(request()->is('member_registration') ? 'show' : ''); ?>">
      <a class="nav-link" href="<?php echo e(url('member_registration')); ?>">
        <span class="menu-icon">
          <i class="fa-solid fa-user fa-3x"></i>
        </span>
        <span class="menu-title">Member Registration</span>
      </a>
    </li>

  </ul>
</nav>

<script>
      function previewImage(event) {
        const image = document.getElementById('profileImage');
        image.src = URL.createObjectURL(event.target.files[0]);
      }
    </script><?php /**PATH C:\Users\Moses Blake Simataa\Videos\Moses Simataa Project Review\Application\church\church\resources\views/home/sidebar.blade.php ENDPATH**/ ?>